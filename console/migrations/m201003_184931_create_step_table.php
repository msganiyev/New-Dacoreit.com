<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%step}}`.
 */
class m201003_184931_create_step_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%step}}', [
            'id' => $this->primaryKey(),
            'title_uz' =>$this->string('255'),
            'title_ru' =>$this->string('255'),
            'title_en' =>$this->string('255'),
            'description_uz' =>$this->text(),
            'description_ru' =>$this->text(),
            'description_en' =>$this->text(),
            'icon' =>$this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%step}}');
    }
}
