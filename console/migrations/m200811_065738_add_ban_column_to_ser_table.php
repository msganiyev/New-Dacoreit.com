<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%ser}}`.
 */
class m200811_065738_add_ban_column_to_ser_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
         $this->addColumn('ser', 'ban', $this->integer(64)->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    }
}
