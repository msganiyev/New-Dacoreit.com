<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%network}}`.
 */
class m200813_200259_create_network_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%network}}', [
            'id' => $this->primaryKey(),
            'facebook' => $this->string(255),
            'telegram' => $this->string(255),
            'instagram' => $this->string(255),
            'youtube' => $this->string(255),
            'twitter' => $this->string(255),
            'vk' => $this->string(255),
        ]);
        $this->insert('network',array(
            'facebook' => '#',
            'telegram' => '#',
            'instagram' => '#',
            'youtube' => '#',
            'twitter' => '#',
            'vk' => '#',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%network}}');
    }
}
