<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m200813_175745_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey()->unsigned(),
            'post_cat_id' => $this->integer()->unsigned(),
            'title_uz' => $this->string(255)->notNull(),
            'title_ru' => $this->string(255)->notNull(),
            'title_en' => $this->string(255)->notNull(),
            'description_uz' => $this->string(255)->notNull(),
            'description_ru' => $this->string(255)->notNull(),
            'description_en' => $this->string(255)->notNull(),
            'body_uz' => $this->text()->notNull(),
            'body_ru' => $this->text()->notNull(),
            'body_en' => $this->text()->notNull(),
            'status' => $this->tinyInteger(1)->defaultValue(1),
            'view' => $this->integer()->defaultValue(0),
            'image' => $this->string(255),
            'created' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
        $this->createIndex(
            'idx-post-post_cat_id',
            'post',
            'post_cat_id'
        );
        $this->addForeignKey(
            'fk-post-post_cat_id',
            'post',
            'post_cat_id',
            'post_cat',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-post-post_cat_id',
            'post'
        );
        $this->dropIndex(
            'idx-post-post_cat_id',
            'post'
        );
        $this->dropTable('{{%post}}');
    }
}
