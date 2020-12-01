<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%net}}`.
 */
class m200928_110252_create_net_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%net}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%net}}');
    }
}
