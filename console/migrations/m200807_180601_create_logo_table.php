<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%logo}}`.
 */
class m200807_180601_create_logo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%logo}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'place' =>$this->integer()->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%logo}}');
    }
}
