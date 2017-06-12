<?php

class m170602_134245_add_diagnoses_episode_summary extends OEMigration
{
	public function up()
	{

        $eventTypeId = $this->dbConnection->createCommand()
            ->select('id')
            ->from('event_type')
            ->where('class_name=:class_name', array(':class_name' => 'OphCiExamination'))
            ->queryScalar();

        $this->insert('episode_summary_item', array(
            'event_type_id' => $eventTypeId,
            'name' => 'Diagnoses',
        ));


    }

	public function down()
	{
		echo "m170602_134245_add_diagnoses_episode_summary does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}