<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%job}}`.
 */
class m200928_092739_create_job_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%job}}', [
            'id' => $this->primaryKey(),
            'name_uz' =>$this->string('255'),
            'name_ru' =>$this->string('255'),
            'name_en' =>$this->string('255'),
            'status' =>$this->integer()->defaultValue(1)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%job}}');
    }
}
