<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%setting}}`.
 */
class m200810_171137_create_setting_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%setting}}', [
            'id' => $this->primaryKey(),
            'key' => $this->string(255),
            'title_uz' => $this->string(255),
            'title_ru' => $this->string(255),
            'title_en' => $this->string(255),
            'value_uz' => $this->text(),
            'value_ru' => $this->text(),
            'value_en' => $this->text(),
            'image' => $this->string(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%setting}}');
    }
}
