<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%ser}}`.
 */
class m201003_190122_add_step_id_column_to_ser_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('ser','step_id',$this->integer());
        $this->createIndex(
            'idx-ser-step_id',
            'ser',
            'step_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-ser-step_id',
            'ser',
            'step_id',
            'step',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-ser-step_id',
            'ser'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            'idx-ser-step_id',
            'ser'
        );
    }
}
