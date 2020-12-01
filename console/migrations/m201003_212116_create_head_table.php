<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%head}}`.
 */
class m201003_212116_create_head_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%head}}', [
            'id' => $this->primaryKey(),
            'title_uz' =>$this->string(255),
            'title_ru' =>$this->string(255),
            'title_en' =>$this->string(255),
            'description_uz' =>$this->text(),
            'description_ru' =>$this->text(),
            'description_en' =>$this->text(),
            'image' =>$this->string('255'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%head}}');
    }
}
