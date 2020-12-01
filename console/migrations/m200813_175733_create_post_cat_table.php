<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post_cat}}`.
 */
class m200813_175733_create_post_cat_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post_cat}}', [
            'id' => $this->primaryKey()->unsigned(),
            'name_uz'=>$this->string(255)->notNull(),
            'name_ru'=>$this->string(255)->notNull(),
            'name_en'=>$this->string(255)->notNull(),
            'status' => $this->tinyInteger(1)->defaultValue(1),
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%post_cat}}');
    }
}
