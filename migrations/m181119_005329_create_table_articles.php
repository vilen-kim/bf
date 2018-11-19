<?php

use yii\db\Migration;

class m181119_005329_create_table_articles extends Migration
{
    public function safeUp() {
        $this->createTable('articles', [
            'id' => $this->primaryKey(),
            'caption' => $this->char(255)->notNull(),
            'text' => $this->text()->notNull(),
            'image' => $this->char(255)->notNull(),
        ]);
    }



    public function safeDown() {
        $this->dropTable('articles');
    }
}
