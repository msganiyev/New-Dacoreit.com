<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `{{%image}}`.
 */
class m201006_065246_drop_image_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('{{%image}}');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->createTable('{{%image}}', [
            'id' => $this->primaryKey(),
            'name' =>$this->string('255'),
        ]);
    }
}
