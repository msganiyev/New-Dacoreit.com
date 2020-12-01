<?php

use yii\db\Migration;

/**
 * Class m201006_075448_add_img_id_to_column_project_table
 */
class m201006_075448_add_img_id_to_column_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('project','img_id',$this->integer());
        $this->dropColumn('project', 'img');
        $this->createIndex(
            'idx-project-img_id',
            'project',
            'img_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-project-img_id',
            'project',
            'img_id',
            'gallery',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201006_075448_add_img_id_to_column_project_table cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201006_075448_add_img_id_to_column_project_table cannot be reverted.\n";

        return false;
    }
    */
}
