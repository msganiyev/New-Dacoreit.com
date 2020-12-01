<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%page}}`.
 */
class m200805_172737_create_page_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%page}}', [
            'id' => $this->primaryKey()->unsigned(),
            'name_uz' => $this->text(),
            'name_ru' => $this->text()->notNull(),
            'name_en' => $this->text()->notNull(),
            'content_uz' => $this->getDb()->getSchema()->createColumnSchemaBuilder('longtext'),
            'content_ru' => $this->getDb()->getSchema()->createColumnSchemaBuilder('longtext'),
            'content_en' => $this->getDb()->getSchema()->createColumnSchemaBuilder('longtext'),
            'image' =>$this->string(255),
            'created' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP')->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%page}}');
    }
}
