<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%project}}`.
 */
class m200808_175633_create_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%project}}', [
            'id' => $this->primaryKey(),
            'pro_cat_id' => $this->integer(),
            'name' => $this->string(255),
            'business'=> $this->string(255),
            'image' => $this->string(255),
            'click' => $this->integer(),
            'link' => $this->string(255),
            'status' => $this->integer(),
        ]);
        $this->createIndex(
            'idx-project-pro_cat_id',
            'project',
            'pro_cat_id'
        );
        $this->addForeignKey(
            'fk-project-pro_cat_id',
            'project',
            'pro_cat_id',
            'pro_cat',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%project}}');
    }
}
