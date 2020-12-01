<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%bg}}`.
 */
class m200806_192453_create_bg_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%bg}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(255),
            'place' =>$this->integer()->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%bg}}');
    }
}
