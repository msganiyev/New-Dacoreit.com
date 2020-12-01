<?php

use yii\db\Migration;

/**
 * Class m201004_114905_add_video_to_column_client_table
 */
class m201004_114905_add_video_to_column_client_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('client','video',$this->string('255'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201004_114905_add_video_to_column_client_table cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201004_114905_add_video_to_column_client_table cannot be reverted.\n";

        return false;
    }
    */
}
