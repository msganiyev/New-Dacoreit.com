<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ser}}`.
 */
class m200807_200654_create_ser_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ser}}', [
            'id' => $this->primaryKey(),
            'cat_id' => $this->integer(),
            'icon'=>$this->string(255),
            'image'=>$this->string(255),
            'title_uz' => $this->string(255),
            'title_ru' => $this->string(255),
            'title_en' => $this->string(255),
            'description_uz'=>$this->text(),
            'description_ru'=>$this->text(),
            'description_en'=>$this->text(),
            'status' => $this->integer(),

        ]);
        $this->createIndex(
            'idx-ser-cat_id',
            'ser',
            'cat_id'
        );
        $this->addForeignKey(
            'fk-ser-cat_id',
            'ser',
            'cat_id',
            'cat_ser',
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
            'fk-ser-cat_id',
            'ser'
        );
        $this->dropIndex(
            'idx-ser-cat_id',
            'ser'
        );
        $this->dropTable('{{%ser}}');
    }
}
