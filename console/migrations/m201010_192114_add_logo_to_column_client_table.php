<?php

use yii\db\Migration;

/**
 * Class m201010_192114_add_logo_to_column_client_table
 */
class m201010_192114_add_logo_to_column_client_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('client','logo',$this->string(255));
        $this->addColumn('client','lavozim',$this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201010_192114_add_logo_to_column_client_table cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201010_192114_add_logo_to_column_client_table cannot be reverted.\n";

        return false;
    }
    */
}
