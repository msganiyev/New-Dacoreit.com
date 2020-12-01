<?php

use yii\db\Migration;

/**
 * Class m201128_044427_add_network_to_column_team_table
 */
class m201128_044427_add_network_to_column_team_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('team', 'linkedin', $this->text());
        $this->addColumn('team', 'twitter', $this->text());
        $this->addColumn('team', 'instagram', $this->text());
        $this->addColumn('team', 'facebook', $this->text());
        $this->addColumn('team', 'telegram', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201128_044427_add_network_to_column_team_table cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201128_044427_add_network_to_column_team_table cannot be reverted.\n";

        return false;
    }
    */
}
