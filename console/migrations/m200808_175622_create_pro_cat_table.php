<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pro_cat}}`.
 */
class m200808_175622_create_pro_cat_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pro_cat}}', [
            'id' => $this->primaryKey(),
            'name_uz' =>$this->string(255),
            'name_ru' =>$this->string(255),
            'name_en'=>$this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pro_cat}}');
    }
}
