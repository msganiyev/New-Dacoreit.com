<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%team}}`.
 */
class m200822_064901_create_team_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%team}}', [
            'id' => $this->primaryKey(),
            'fio' =>$this->string('255'),
            'image' => $this->string('255'),
            'job' => $this->string('255'),
            'content' =>$this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%team}}');
    }
}
