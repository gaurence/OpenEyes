<?php

class m170623_105847_add_deleted_flag_to_document_tables extends CDbMigration
{
	public function up()
	{
        $this->addColumn('document_set', 'deleted', "tinyint(1) unsigned NOT NULL DEFAULT '0'");
        $this->addColumn('document_instance', 'deleted', "tinyint(1) unsigned NOT NULL DEFAULT '0'");
        $this->addColumn('document_target', 'deleted', "tinyint(1) unsigned NOT NULL DEFAULT '0'");
        $this->addColumn('document_instance_data', 'deleted', "tinyint(1) unsigned NOT NULL DEFAULT '0'");
        $this->addColumn('document_output', 'deleted', "tinyint(1) unsigned NOT NULL DEFAULT '0'");

        $this->addColumn('document_set_version', 'deleted', "tinyint(1) unsigned NOT NULL DEFAULT '0'");
        $this->addColumn('document_instance_version', 'deleted', "tinyint(1) unsigned NOT NULL DEFAULT '0'");
        $this->addColumn('document_target_version', 'deleted', "tinyint(1) unsigned NOT NULL DEFAULT '0'");
        $this->addColumn('document_instance_data_version', 'deleted', "tinyint(1) unsigned NOT NULL DEFAULT '0'");
        $this->addColumn('document_output_version', 'deleted', "tinyint(1) unsigned NOT NULL DEFAULT '0'");

        // loop over all the events to check if they are deleted
        // get all correspondence where the status is not COMPLETED - completed document cannot be deleted
        $document_outputs = DocumentOutput::model()->findAll();

        foreach($document_outputs as $document_output){

            $event = $document_output->getEvent();
            if($event->deleted == 1) {

                $transaction = Yii::app()->db->beginTransaction();
                try {

                    $document_target = $document_output->document_target;
                    $document_target->deleted = 1;
                    if (!$document_target->save()) {
                        throw new Exception('Failed to save document_target: ' . print_r($document_target->getErrors(), true));
                    }

                    if( isset($document_target->document_instance_data) ){
                        $document_target->document_instance_data->deleted = 1;
                        if (!$document_target->document_instance_data->save()) {
                            throw new Exception('Failed to save document_instance_data: ' . print_r($document_target->document_instance_data->getErrors(), true));
                        }
                    }

                    if ($document_target->document_instance) {
                        $document_target->document_instance->deleted = 1;
                        if (!$document_target->document_instance->save()) {
                            throw new Exception('Failed to save document_instance: ' . print_r($document_target->document_instance->getErrors(), true));
                        }

                        if ($document_target->document_instance->document_set) {
                            $document_target->document_instance->document_set->deleted = 1;

                            if (!$document_target->document_instance->document_set->save()) {
                                throw new Exception('Failed to save document_set: ' . print_r($document_target->document_instance->document_set->getErrors(), true));
                            }
                        }
                    }

                    $document_output->deleted = 1;
                    if(!$document_output->save()){
                        throw new Exception('Failed to save document_output: ' . print_r($document_target->getErrors(), true));
                    }


                    $transaction->commit();

                } catch (Exception $exception) {
                    $transaction->rollback();
                }
            }

        }
	}

	public function down()
	{
        $this->dropColumn('document_set', 'deleted');
        $this->dropColumn('document_instance', 'deleted');
        $this->dropColumn('document_target', 'deleted');
        $this->dropColumn('document_instance_data', 'deleted');
        $this->dropColumn('document_output', 'deleted');

        $this->dropColumn('document_set_version', 'deleted');
        $this->dropColumn('document_instance_version', 'deleted');
        $this->dropColumn('document_target_version', 'deleted');
        $this->dropColumn('document_instance_data_version', 'deleted');
        $this->dropColumn('document_output_version', 'deleted');

	}
}