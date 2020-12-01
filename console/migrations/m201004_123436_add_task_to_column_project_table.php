<?php

use yii\db\Migration;

/**
 * Class m201004_123436_add_task_to_column_project_table
 */
class m201004_123436_add_task_to_column_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('project','task',$this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201004_123436_add_task_to_column_project_table cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201004_123436_add_task_to_column_project_table cannot be reverted.\n";

        return false;
    }
    */
}
