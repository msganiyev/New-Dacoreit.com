<?php

use yii\db\Migration;

/**
 * Class m200925_114636_add_title_column_about_table
 */
class m200925_114636_add_title_column_about_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('about','key',$this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200925_114636_add_title_column_about_table cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200925_114636_add_title_column_about_table cannot be reverted.\n";

        return false;
    }
    */
}
