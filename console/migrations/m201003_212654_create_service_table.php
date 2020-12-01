<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%service}}`.
 */
class m201003_212654_create_service_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%service}}', [
            'id' => $this->primaryKey(),
            'head_id' =>$this->integer(),
            'title_uz' =>$this->string(255),
            'title_ru' =>$this->string(255),
            'title_en' =>$this->string(255),
            'description_uz' =>$this->text(),
            'description_ru' =>$this->text(),
            'description_en' =>$this->text(),
            'icon' =>$this->string(255),
            'status' =>$this->integer()->defaultValue(1),
        ]);
        $this->createIndex(
            'idx-service-head_id',
            'service',
            'head_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-service-head_id',
            'service',
            'head_id',
            'head',
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
            'fk-service-head_id',
            'service'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            'idx-service-head_id',
            'service'
        );
        $this->dropTable('{{%service}}');
    }
}
