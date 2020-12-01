<?php

use yii\db\Migration;

/**
 * Class m201006_064545_add_img_to_column_project_table
 */
class m201006_064545_add_img_to_column_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('project','img' ,$this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201006_064545_add_img_to_column_project_table cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201006_064545_add_img_to_column_project_table cannot be reverted.\n";

        return false;
    }
    */
}
