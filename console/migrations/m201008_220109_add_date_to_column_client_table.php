<?php

use yii\db\Migration;

/**
 * Class m201008_220109_add_date_to_column_client_table
 */
class m201008_220109_add_date_to_column_client_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('client','description',$this->text());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201008_220109_add_date_to_column_client_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201008_220109_add_date_to_column_client_table cannot be reverted.\n";

        return false;
    }
    */
}
