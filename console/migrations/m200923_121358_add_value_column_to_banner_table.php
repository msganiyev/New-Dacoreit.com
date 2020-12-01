<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%banner}}`.
 */
class m200923_121358_add_value_column_to_banner_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('banner', 'value_uz', $this->text());
        $this->addColumn('banner', 'value_ru', $this->text());
        $this->addColumn('banner', 'value_en', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('banner', 'value_uz');
        $this->dropColumn('banner', 'value_ru');
        $this->dropColumn('banner', 'value_en');
    }
}
