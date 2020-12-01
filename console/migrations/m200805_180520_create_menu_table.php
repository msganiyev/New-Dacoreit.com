<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%menu}}`.
 */
class m200805_180520_create_menu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%menu}}', [
            'id' => $this->primaryKey()->unsigned(),
            'parent_id' => $this->integer()->defaultValue(0)->notNull(),
            'page_id' => $this->integer()->unsigned(),
            'name_uz' => $this->string(255)->notNull(),
            'name_en' => $this->string(255)->notNull(),
            'name_ru' => $this->string(255)->notNull(),
            'link' => $this->text(),
            'c_order' => $this->integer()->unsigned()->notNull(),
            'target_blank' => $this->tinyInteger(1)->defaultValue(0)->notNull(),
            'status' => $this->tinyInteger(1)->defaultValue(1)->notNull(),
            'visible_top' => $this->tinyInteger(3)->defaultValue(1)->notNull(),
            'visible_side' => $this->tinyInteger(3)->defaultValue(1)->notNull(),
            'slug_uz' => $this->string(255)->unique(),
            'slug_en' => $this->string(255)->unique(),
            'slug_ru' => $this->string(255)->unique(),
        ]);
        $this->createIndex(
            'idx-menu-page_id',
            'menu',
            'page_id'
        );
        $this->addForeignKey(
            'fk-menu-page_id',
            'menu',
            'page_id',
            'page',
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
            'fk-menu-page_id',
            'menu'
        );
        $this->dropIndex(
            'idx-menu-page_id',
            'menu'
        );
        $this->dropTable('{{%menu}}');
    }
}
