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

/**
 * This is the model class for table "et_ophauanaestheticsataudit_vitalsigns".
 *
 * The followings are the available columns in table:
 *
 * @property string $id
 * @property int $event_id
 *
 * The followings are the available model relations:
 * @property ElementType $element_type
 * @property EventType $eventType
 * @property Event $event
 * @property User $user
 * @property User $usermodified
 * @property OphOuAnaestheticsatisfactionaudit_VitalSigns_RespiratoryRate respiratory_rate
 * @property OphOuAnaestheticsatisfactionaudit_VitalSigns_OxygenSaturation oxygen_saturation
 * @property OphOuAnaestheticsatisfactionaudit_VitalSigns_Systolic systolic
 * @property OphOuAnaestheticsatisfactionaudit_VitalSigns_BodyTemp body_temp
 * @property OphOuAnaestheticsatisfactionaudit_VitalSigns_HeartRate heart_rate
 * @property OphOuAnaestheticsatisfactionaudit_VitalSigns_ConsciousLvl conscious_lvl
 */
class Element_OphOuAnaestheticsatisfactionaudit_VitalSigns extends BaseEventTypeElement
{
    public $service;

    /**
     * Returns the static model of the specified AR class.
     *
     * @return the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'et_ophouanaestheticsataudit_vitalsigns';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('event_id, respiratory_rate_id, oxygen_saturation_id, systolic_id, body_temp_id, heart_rate_id, conscious_lvl_id', 'safe'),
            array('respiratory_rate_id, oxygen_saturation_id, systolic_id, body_temp_id, heart_rate_id, conscious_lvl_id', 'required'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, event_id, respiratory_rate_id, oxygen_saturation_id, systolic_id, body_temp_id, heart_rate_id, conscious_lvl_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'element_type' => array(self::HAS_ONE, 'ElementType', 'id', 'on' => "element_type.class_name='".get_class($this)."'"),
            'eventType' => array(self::BELONGS_TO, 'EventType', 'event_type_id'),
            'event' => array(self::BELONGS_TO, 'Event', 'event_id'),
            'user' => array(self::BELONGS_TO, 'User', 'created_user_id'),
            'usermodified' => array(self::BELONGS_TO, 'User', 'last_modified_user_id'),
            'respiratory_rate' => array(self::BELONGS_TO, 'OphOuAnaestheticsatisfactionaudit_VitalSigns_RespiratoryRate', 'respiratory_rate_id'),
            'oxygen_saturation' => array(self::BELONGS_TO, 'OphOuAnaestheticsatisfactionaudit_VitalSigns_OxygenSaturation', 'oxygen_saturation_id'),
            'systolic' => array(self::BELONGS_TO, 'OphOuAnaestheticsatisfactionaudit_VitalSigns_Systolic', 'systolic_id'),
            'body_temp' => array(self::BELONGS_TO, 'OphOuAnaestheticsatisfactionaudit_VitalSigns_BodyTemp', 'body_temp_id'),
            'heart_rate' => array(self::BELONGS_TO, 'OphOuAnaestheticsatisfactionaudit_VitalSigns_HeartRate', 'heart_rate_id'),
            'conscious_lvl' => array(self::BELONGS_TO, 'OphOuAnaestheticsatisfactionaudit_VitalSigns_ConsciousLvl', 'conscious_lvl_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'event_id' => 'Event',
            'respiratory_rate_id' => 'Respiratory Rate',
            'oxygen_saturation_id' => 'Oxygen Saturation',
            'systolic_id' => 'Systolic Blood Pressure',
            'body_temp_id' => 'Body Temperature',
            'heart_rate_id' => 'Heart Rate',
            'conscious_lvl_id' => 'Conscious Level AVPU',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search()
    {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria();

        $criteria->compare('id', $this->id, true);
        $criteria->compare('event_id', $this->event_id, true);

        return new CActiveDataProvider(get_class($this), array(
                'criteria' => $criteria,
            ));
    }

    /**
     * calculates the MEW score from the scores of the current vital sign values.
     *
     * @return int or boolean (false when vital signs not set)
     */
    public function calculateMEW()
    {
        if (!$this->respiratory_rate) {
            return false;
        }
        $score = 0;
        $score += $this->respiratory_rate->score;
        $score += $this->oxygen_saturation->score;
        $score += $this->systolic->score;
        $score += $this->body_temp->score;
        $score += $this->heart_rate->score;
        $score += $this->conscious_lvl->score;

        return $score;
    }

    /**
     * Set default values for forms on create.
     */
    public function setDefaultOptions()
    {
    }

    protected function beforeSave()
    {
        return parent::beforeSave();
    }

    protected function afterSave()
    {
        return parent::afterSave();
    }

    protected function beforeValidate()
    {
        return parent::beforeValidate();
    }
}
