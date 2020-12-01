<?php

use yii\db\Migration;

/**
 * Class m201011_204922_add_role_id_to_column_user_table
 */
class m201011_204922_add_role_id_to_column_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user','role_id',$this->integer());
            $this->createIndex(
                'idx-user-role_id',
                'user',
                'role_id'
            );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-user-role_id',
            'user',
            'role_id',
            'role',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201011_204922_add_role_id_to_column_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201011_204922_add_role_id_to_column_user_table cannot be reverted.\n";

        return false;
    }
    */
}
