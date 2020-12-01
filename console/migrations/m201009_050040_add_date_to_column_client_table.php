<?php

use yii\db\Migration;

/**
 * Class m201009_050040_add_date_to_column_client_table
 */
class m201009_050040_add_date_to_column_client_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('client','date',$this->date());
        $this->dropColumn('client','description',$this->text());
        $this->addColumn('project','description',$this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201009_050040_add_date_to_column_client_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201009_050040_add_date_to_column_client_table cannot be reverted.\n";

        return false;
    }
    */
}
