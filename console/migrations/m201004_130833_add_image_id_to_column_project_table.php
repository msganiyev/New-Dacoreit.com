<?php

use yii\db\Migration;

/**
 * Class m201004_130833_add_image_id_to_column_project_table
 */
class m201004_130833_add_image_id_to_column_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('project','image_id',$this->integer());
        $this->createIndex(
            'idx-project-image_id',
            'project',
            'image_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-project-image_id',
            'project',
            'image_id',
            'image',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201004_130833_add_image_id_to_column_project_table cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201004_130833_add_image_id_to_column_project_table cannot be reverted.\n";

        return false;
    }
    */
}
