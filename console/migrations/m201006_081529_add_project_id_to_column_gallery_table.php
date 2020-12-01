<?php

use yii\db\Migration;

/**
 * Class m201006_081529_add_project_id_to_column_gallery_table
 */
class m201006_081529_add_project_id_to_column_gallery_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {   
        $this->addColumn('gallery','project_id',$this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201006_081529_add_project_id_to_column_gallery_table cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201006_081529_add_project_id_to_column_gallery_table cannot be reverted.\n";

        return false;
    }
    */
}
