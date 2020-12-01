<?php

use yii\db\Migration;

/**
 * Class m200813_185628_add_click_to_post_table
 */
class m200813_185628_add_click_to_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('post', 'ban', $this->integer(64)->defaultValue(0));
        $this->addColumn('post', 'link', $this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200813_185628_add_click_to_post_table cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200813_185628_add_click_to_post_table cannot be reverted.\n";

        return false;
    }
    */
}
