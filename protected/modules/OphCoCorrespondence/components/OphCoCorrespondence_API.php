<?php
/**
 * OpenEyes.
 *
 * (C) Moorfields Eye Hospital NHS Foundation Trust, 2008-2011
 * (C) OpenEyes Foundation, 2011-2013
 * This file is part of OpenEyes.
 * OpenEyes is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * OpenEyes is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with OpenEyes in a file titled COPYING. If not, see <http://www.gnu.org/licenses/>.
 *
 * @link http://www.openeyes.org.uk
 *
 * @author OpenEyes <info@openeyes.org.uk>
 * @copyright Copyright (c) 2008-2011, Moorfields Eye Hospital NHS Foundation Trust
 * @copyright Copyright (c) 2011-2013, OpenEyes Foundation
 * @license http://www.gnu.org/licenses/gpl-3.0.html The GNU General Public License V3.0
 */
class OphCoCorrespondence_API extends BaseAPI
{
    /**
     * @param int $event_id
     *
     * @return bool
     */
    public function canUpdate($event_id)
    {
        $letter = ElementLetter::model()->find('event_id=?', array($event_id));

        // for the new correspondence with DocMan
        // once the letter is generated for the DocMan only admin can edit
        return !$letter->isGeneratedFor(['Docman', 'Internalreferral']);

        // FIXME: Correspondence locking is suspended while draft usage is discussed
        return true;

        return $letter->isEditable();
    }
    
    public function showDeleteIcon($event_id)
    {
        $letter = ElementLetter::model()->find('event_id=?', array($event_id));
        
        return !$letter->isGeneratedFor(['Docman', 'Internalreferral']);
    }

    public function getLatestEvent($episode)
    {
        $event_type = $this->getEventType();

        if ($event = $episode->getMostRecentEventByType($event_type->id)) {
            return $event;
        }
    }

    /**
     * get the full name of the patient for use in correspondence.
     *
     * @param Patient $patient
     *
     * @return string
     */
    public function getFullName($patient)
    {
            $fullname = trim(implode(' ', array($patient->title, $patient->first_name, $patient->last_name)));
            return $fullname;
    }

    /**
     * get the patient title for use in correspondence.
     *
     * @param Patient $patient
     *
     * @return string
     */
    public function getPatientTitle($patient)
    {
        return $patient->title;
    }

    /**
     * get the patient first name for use in correspondence.
     *
     * @param Patient $patient
     *
     * @return string
     */
    public function getFirstName($patient)
    {
        return $patient->first_name;
    }


    /**
     * get the patient last name for use in correspondence.
     *
     * @param Patient $patient
     *
     * @return string
     */
    public function getLastName($patient)
    {
        return $patient->last_name;
    }


    /**
     * get the last Examination Date for patient for use in correspondence.
     *
     * @param Patient $patient
     *
     * @return string
     */
    public function getLastExaminationDate(\Patient $patient)
    {
        if ($episode = $patient->getEpisodeForCurrentSubspecialty()) {
            $event_type = EventType::model()->find('class_name=?', array('OphCiExamination'));
            $event = $this->getMostRecentEventInEpisode($episode->id, $event_type->id);
            if (isset($event->event_date)) {
                return Helper::convertDate2NHS($event->event_date);
            }
        }

        return '';
    }


    public function getOphthalmicDiagnoses(\Patient $patient)
    {
        return $patient->getUniqueDiagnosesString('- ', "\r\n", true);
    }

    public function getLastIOLType(\Patient $patient)
    {
        if ($episode = $patient->getEpisodeForCurrentSubspecialty()) {
            $event_type = EventType::model()->find('class_name=?', array('OphTrOperationnote'));
            if ($element = $this->getMostRecentElementInEpisode($episode->id, $event_type->id, 'Element_OphTrOperationnote_Cataract')) {
                return $element->iol_type->name;
            }
        }
    }

    public function getLastIOLPower(\Patient $patient)
    {
        if ($episode = $patient->getEpisodeForCurrentSubspecialty()) {
            $event_type = EventType::model()->find('class_name=?', array('OphTrOperationnote'));
            if ($element = $this->getMostRecentElementInEpisode($episode->id, $event_type->id, 'Element_OphTrOperationnote_Cataract')) {
                return $element->iol_power;
            }
        }
    }

    public function getLastOperatedEye(\Patient $patient)
    {
        if ($episode = $patient->getEpisodeForCurrentSubspecialty()) {
            $event_type = EventType::model()->find('class_name=?', array('OphTrOperationnote'));
            if ($element = $this->getMostRecentElementInEpisode($episode->id, $event_type->id, 'Element_OphTrOperationnote_ProcedureList')) {
                return $element->eye->adjective;
            }
        }
    }

    /**
     * Get the Pre-Op Visual Acuity - both eyes.
     *
     * @param $patient
     *
     * @return string|null
     */
    public function getPreOpVABothEyes($patient)
    {
        if ($apiNote = Yii::app()->moduleAPI->get('OphTrOperationnote')) {
                $opDate = $apiNote->getLastOperationDateUnformatted($patient);
            }
        $api = Yii::app()->moduleAPI->get('OphCiExamination');
        $episode = $patient->getEpisodeForCurrentSubspecialty();
        $event_type = EventType::model()->find('class_name=?', array('OphCiExamination'));
        $data = '';
        $criteria = new CDbCriteria();
        $criteria->condition = 'episode_id = :e_id AND event_type_id = :et_id';
        $criteria->addCondition('event_date <= :event_date');
        $criteria->order = ' event_date DESC, created_date DESC';
        $criteria->params = array(':e_id' => $episode->id, ':et_id' => $event_type->id, 'event_date' => $opDate);

        if($events = Event::model()->findAll($criteria)){
            for ($i = 0; $i < count($events); ++$i) {
                // Get Most Recent VA
                $vaID = $api->getMostRecentVA($events[$i]->id);
                if($vaID && !$data){
                    $data = $api->getMostRecentVAData($vaID->id);
                    $chosenVA = $vaID;
                }
            }
        }

        if($data){
            for ($i = 0; $i < count($data); ++$i) {
                if($data[$i]->side == 0){
                    $rightData[] = $data[$i];
                }
                if($data[$i]->side == 1){
                    $leftData[] = $data[$i];
                }
            }
            $unitId = $chosenVA->unit_id;

            if(isset($rightData)) {
                $rightVA = $api->getVAvalue($rightData[0]->value, $unitId);
            }

            if(isset($leftData)) {
                $leftVA = $api->getVAvalue($leftData[0]->value, $unitId);
            }

            return (isset($rightVA) ? $rightVA : "not recorded") . " Right Eye" . ", " . (isset($leftVA) ? $leftVA : "not recorded") . " Left Eye";
        }else{
            return;
        }

    }

    /**
     * Get the Pre-Op Refraction - both eyes.
     *
     * @param $patient
     *
     * @return string|null
     */
    public function getPreOpRefraction($patient)
    {
        if ($apiNote = Yii::app()->moduleAPI->get('OphTrOperationnote')) {
            $opDate = $apiNote->getLastOperationDateUnformatted($patient);
        }
        $api = Yii::app()->moduleAPI->get('OphCiExamination');
        $episode = $patient->getEpisodeForCurrentSubspecialty();
        $event_type = EventType::model()->find('class_name=?', array('OphCiExamination'));
        $eventtypeid = $event_type->id;
// Refraction here
        $refractfound = false;

        if ($eventid = Event::model()->findAll(array(
            'condition' => 'event_type_id = ' . $eventtypeid . ' AND episode_id = ' . $episode->id . " AND event_date <= '" . $opDate . "'",
            'order' => 'event_date DESC',
        ))
        ) {
// Loop through responses, for ones that have RefractionValues
            for ($i = 0; $i < count($eventid); ++$i) {
                if ($api->getRefractionValues($eventid[$i]->id)) {
                    if (!$refractfound) {
                        $refractelement = $api->getRefractionValues($eventid[$i]->id);
                        $refract_event_date = $eventid[$i]->event_date;
                        $refractfound = true;
                        $rightspherical = number_format($refractelement->{'right_sphere'} + 0.5 * $refractelement->{'right_cylinder'}, 2);
                        $leftspherical = number_format($refractelement->{'left_sphere'} + 0.5 * $refractelement->{'left_cylinder'}, 2);
                        return $rightspherical . " Right Eye" . ", " . $leftspherical . " Left Eye";
                    }
                }
            }
        }
    }

    /**
     * Get Allergies in a bullet format.
     *
     * @param $patient
     *
     * @return string|null
     */
    public function getAllergiesBulleted($patient)
    {
        return $patient->getAllergiesSeparatedString(" - ", "\r\n", true);
    }

    public function getMacroTargets($patient_id, $macro_id)
    {
        if (!$patient = Patient::model()->findByPk($patient_id)) {
            throw new Exception('Patient not found: '.$patient_id);
        }

        if (!$macro = LetterMacro::model()->findByPk($macro_id)) {
            throw new Exception('Macro not found: '.$macro_id);
        }

        $data = array();
        if ($macro->recipient && $macro->recipient->name == 'Patient') {
            $contact = $patient;
            $data['to']['contact_type'] = get_class($contact);
            $data['to']['contact_id'] = $contact->contact->id;
            if ($patient->date_of_death) {
                echo json_encode(array('error'=>'DECEASED'));
                return;
            }
        }

        if ($macro->recipient && $macro->recipient->name == 'GP' && $contact = ($patient->gp) ? $patient->gp : $patient->practice) {
            $data['to']['contact_type'] = get_class($contact);
            $data['to']['contact_id'] = $contact->contact->id;
        }

        if (isset($contact)) {
            $data['to']['contact_name'] = method_exists($contact, "getCorrespondenceName") ? $contact->getCorrespondenceName() : $contact->getFullName();
            $data['to']['address'] = $contact->getLetterAddress(array(
                                    'patient' => $patient,
                                    'include_name' => false,
                                    'include_label' => false,
                                    'delimiter' => "\n",
                                ));


            if (! $data['to']['address']){
                $data['to']['address'] = "The contact does not have a valid address.";
            }
        }

        $data['use_nickname'] = $macro->use_nickname;

        $k = 0;
        if ($macro->cc_patient) {
            $data['cc'][$k]['contact_type'] = 'Patient';
            if ($patient->date_of_death) {
                $data['cc'][$k]['contact_name'] = "Warning: the patient cannot be cc'd because they are deceased.";
                $data['cc'][$k]['address'] = null;
            } elseif ($patient->contact->address) {
                $data['cc'][$k]['contact_name'] = $patient->getCorrespondenceName();
                $data['cc'][$k]['contact_id'] = $patient->contact->id;
                $data['cc'][$k]['address'] = $patient->getLetterAddress(array(
                            'include_name' => false,
                            'include_label' => false,
                            'delimiter' => "\n",
                            'include_prefix' => false,
                        ));
            } else {
                $data['cc'][$k]['contact_name'] = $patient->getCorrespondenceName();
                $data['cc'][$k]['contact_id'] = $patient->contact->id;
                $data['cc'][$k]['address'] = "Letters to the GP should be cc'd to the patient, but this patient does not have a valid address.";
            }
            $k++;
        }

        if ($macro->cc_doctor && $cc_contact = ($patient->gp) ? $patient->gp : $patient->practice) {
            $data['cc'][$k]['contact_type'] = 'GP';
            $data['cc'][$k]['contact_name'] = $cc_contact->getCorrespondenceName();
            $data['cc'][$k]['contact_id'] = $cc_contact->contact->id;
            $data['cc'][$k]['address'] = $cc_contact->getLetterAddress(array(
                    'patient' => $patient,
                    'include_name' => false,
                    'include_label' => false,
                    'delimiter' => "\n",
                    'include_prefix' => false,
                ));
            $k++;
        }

        if ($macro->cc_drss) {
            $commissioningbodytype = CommissioningBodyType::model()->find('shortname = ?', array('CCG'));
            $commissioningbody = $patient->getCommissioningBodyOfType($commissioningbodytype);
            if($commissioningbodytype && $commissioningbody) {
                foreach($commissioningbody->services as $service) {
                    if($service->type->shortname == 'DRSS') {
                        $data['cc'][$k]['contact_type'] = 'DRSS';
                        $data['cc'][$k]['contact_name'] = $service->getFullName();
                        $data['cc'][$k]['contact_id'] = $service->contact->id;
                        $data['cc'][$k]['address'] = $service->getLetterAddress(array(
                                        'include_name' => false,
                                        'include_label' => false,
                                        'delimiter' => "\n",
                                        'include_prefix' => false,
                                    ));

                        break;
                    }
                }
            }
        }

        $data['macro_id'] = $macro_id;

        return $data;
    }

    private function getMacroData($patient_id, $macro_id)
    {
        if(!$patient_id){
            $patient_id = @$_GET['patient_id'];
        }
        if(!$macro_id){
            $macro_id = @$_GET['macro_id'];
        }

        if (!$patient = Patient::model()->findByPk($patient_id)) {
            throw new Exception('Patient not found: '.$patient_id);
        }

        if (!$macro = LetterMacro::model()->findByPk($macro_id)) {
            throw new Exception('Macro not found: '.$macro_id);
        }

        $data = array();

        $macro->substitute($patient);

        if ($macro->recipient && $macro->recipient->name == 'Patient') {
            $contact = $patient;
            if ($patient->date_of_death) {
                echo json_encode(array('error'=>'DECEASED'));
                return;
            }
        }

        if ($macro->recipient && $macro->recipient->name == 'GP' && $contact = ($patient->gp) ? $patient->gp : $patient->practice) {
            $data['sel_address_target'] = get_class($contact).$contact->id;
        }

        if (isset($contact)) {
            $address = $contact->getLetterAddress(array(
                'patient' => $patient,
                'include_name' => true,
                'include_label' => true,
                'delimiter' => "\n",
            ));

            if($address){
                $data['address'] = $address;
            }
            else {
                $data['alert'] = "The contact does not have a valid address.";
                $data['address'] = 'No valid address!';
            }

            $data['introduction'] = $contact->getLetterIntroduction(array(
                'nickname' => $macro->use_nickname,
            ));
        }

        $data['use_nickname'] = $macro->use_nickname;

        if ($macro->body) {
            $data['body'] = $macro->body;
        }

        $cc = array(
            'text' => array(),
            'targets' => array()
        );
        if ($macro->cc_patient) {
            if ($patient->date_of_death) {
                $data['alert'] = "Warning: the patient cannot be cc'd because they are deceased.";
            } elseif ($patient->contact->address) {
                $cc['text'][] = $patient->getLetterAddress(array(
                    'include_name' => true,
                    'include_label' => true,
                    'delimiter' => ", ",
                    'include_prefix' => true,
                ));
            } else {
                $data['alert'] = "Letters to the GP should be cc'd to the patient, but this patient does not have a valid address.";
            }
        }

        if ($macro->cc_doctor && $cc_contact = ($patient->gp) ? $patient->gp : $patient->practice) {
            $cc['text'][] = $cc_contact->getLetterAddress(array(
                'patient' => $patient,
                'include_name' => true,
                'include_label' => true,
                'delimiter' => ", ",
                'include_prefix' => true,
            ));
        }

        if ($macro->cc_drss) {
            $commissioningbodytype = CommissioningBodyType::model()->find('shortname = ?', array('CCG'));
            if($commissioningbodytype && $commissioningbody = $patient->getCommissioningBodyOfType($commissioningbodytype)) {
                $drss = null;
                foreach($commissioningbody->services as $service) {
                    if($service->type->shortname == 'DRSS') {
                        $cc['text'][] = $service->getLetterAddress(array(
                            'include_name' => true,
                            'include_label' => true,
                            'delimiter' => ", ",
                            'include_prefix' => true,
                        ));
                        break;
                    }
                }
            }
        }

        $data['cc'] = implode("\n",$cc['text']);
        $data['date'] = date('Y-m-d');
        $data['site_id'] = Yii::app()->session['selected_site_id'];
        $data['footer'] = "Yours sincerely\n\n\n\n\n".User::model()->findByPk(Yii::app()->user->id)->fullName."\n".User::model()->findByPk(Yii::app()->user->id)->role."\n";
        //.(ui.item.consultant?"Consultant: "+ui.item.consultant:'')
        return $data;
    }

    /***
     * Creates the new letter
     *
     * @param $event
     * @param $macro_id
     */
    public function createCorrespondenceContent($event, $macro_id){
        $letterContent = $this->getMacroData($event->episode->patient_id, $macro_id);
        $correspondenceData = new ElementLetter();
        $correspondenceData->setAttributes($letterContent);
        $correspondenceData->event_id = $event->id;
        $correspondenceData->save();
    }

    /***
     * Creates a new correspondence event in the specified episode
     *
     * @param $episode_id
     */
    public function createNewCorrespondenceEvent($episode_id){
        $event = new Event();
        $event->episode_id = $episode_id;
        $event_type = EventType::model()->find('class_name=:class_name', array(':class_name'=>'OphCoCorrespondence'));
        $event->event_type_id = $event_type->id;
        $event->event_date = date('Y-m-d');
        $event->save();
        return $event;
    }
    
    /**
     * Returns the letter targets by element id
     * 
     * @param int $id
     * @return array
     */
    public function getMacroTargetsByElementLetterId($id)
    {
        $element_letter = ElementLetter::model()->findByPk($id);
        return $element_letter->letter_targets;
    }
    
    public function getAddress($patient_id, $contact_string, $nickname = false)
    {
        if (!$patient = Patient::model()->findByPk($patient_id)) {
            throw new Exception('Unknown patient: '.$patient_id);
        }

        if (!preg_match('/^([a-zA-Z]+)([0-9]+)$/', $contact_string, $m)) {
            throw new Exception('Invalid contact format: '.$contact_string);
        }

        if ($m[1] == 'Contact') {
            // NOTE we are assuming that Contact must be a Person model here
            $contact = Person::model()->find('contact_id=?', array($m[2]));
        } else {
            if (!$contact = $m[1]::model()->findByPk($m[2])) {
                throw new Exception("{$m[1]} not found: {$m[2]}");
            }
        }

        if (method_exists($contact, 'isDeceased') && $contact->isDeceased()) {
            return json_encode(array('errors' => 'DECEASED'));
        }

        $text_ElementLetter_address = $contact->getLetterAddress(array(
            'patient' => $patient,
            'include_name' => true,
            'include_label' => true,
            'delimiter' => "\n",
        ));
        
        $address = $contact->getLetterAddress(array(
            'patient' => $patient,
            'include_name' => false,
            'include_label' => true,
            'delimiter' => "\n",
        ));
        

        if (!$address) {
            $address = '';
        }

        if (!$text_ElementLetter_address) {
            $text_ElementLetter_address = '';
        }
        
        if (method_exists($contact, 'getCorrespondenceName')) {
            $correspondence_name = $contact->correspondenceName;
        } else {
            $correspondence_name = $contact->fullName;
        }
        
        if($m[1] == 'CommissioningBodyService'){
            $correspondence_name = implode(',', $correspondence_name);
        }
        
        $contact_type = $m[1];
        if($m[1] == 'CommissioningBodyService'){
            $contact_type = 'DRSS';
        } else if($m[1] == 'Practice'){
            $contact_type = 'Gp';
        }
        
        if( !in_array($contact_type, array('Gp','Patient','DRSS')) ){
            $contact_type = 'Other';
        }

        return $data = array(
            'contact_type' => $contact_type,
            'contact_id' => isset($contact->contact->id) ? $contact->contact->id : null,
            'contact_name' => $correspondence_name,
            'address' => $address ? $address : "The contact does not have a valid address.",
            'text_ElementLetter_address' => $text_ElementLetter_address,
            'text_ElementLetter_introduction' => $contact->getLetterIntroduction(array(
                'nickname' => (boolean) $nickname,
            )),
        );
    }
    
    public function updateDocumentTargetAddressFromContact($document_target_id, $type, $letter_id)
    {
        $document_target = DocumentTarget::model()->findByPk($document_target_id);
        $contact = Contact::model()->findByPk($document_target->contact_id);
        $patient = $document_target->document_instance->correspondence_event->episode->patient;
     
        $letter = ElementLetter::model()->findByPk($letter_id);
        
        if($letter){
            foreach(array_keys($letter->address_targets) as $contact_string){

                $address = $this->getAddress($patient->id, $contact_string);
                
                if($address['contact_type'] == $type){
                    $document_target->contact_name = $address['contact_name'];
                    $document_target->address = $address['address'];
                    $document_target->contact_id = $address['contact_id'];
                    
                    $document_target->save();
                }
            }
        }
        
        
    }

    /*
     * Glaucoma Overall Management Plan from latest Examination
     * @param $patient
     * @return string
     */
    public function getGlaucomaManagement( \Patient $patient )
    {
        $result = '';
        $episode = $patient->getEpisodeForCurrentSubspecialty();
        $event_type = EventType::model()->find('class_name=?', array('OphCiExamination'));

        if ($el = $this->getMostRecentElementInEpisode($episode->id, $event_type->id,
            'OEModule\OphCiExamination\models\Element_OphCiExamination_OverallManagementPlan')
        ) {

            $result .= 'Clinic Interval: '.$el->clinic_internal->name."\n";
            $result .= 'Photo: '.$el->photo->name."\n";
            $result .= 'OCT: '.$el->oct->name."\n";
            $result .= 'Visual Fields: '.$el->hfa->name."\n";
            $result .= 'Gonioscopy: '.$el->gonio->name."\n";
            $result .= 'HRT: '.$el->hrt->name."\n";

            if(!empty($el->comments)){
                $result .= 'Glaucoma Management comments: '.$el->comments."\n";
            }

            $result .= "\n";
            if(isset($el->right_target_iop->name)){
                $result .= 'Target IOP Right Eye: '.$el->right_target_iop->name." mmHg\n";
            }
            if(isset($el->left_target_iop->name)){
                $result .= 'Target IOP Left Eye: '.$el->left_target_iop->name." mmHg\n";
            }



        }
        return $result;

    }
}
