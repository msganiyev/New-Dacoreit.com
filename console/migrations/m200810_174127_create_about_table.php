<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%about}}`.
 */
class m200810_174127_create_about_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%about}}', [
            'id' => $this->primaryKey(),
            'value_uz' =>$this->text(),
            'value_ru' =>$this->text(),
            'value_en' =>$this->text(),
            'image' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%about}}');
    }
}
