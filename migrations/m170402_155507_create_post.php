<?php

use yii\db\Migration;

class m170402_155507_create_post extends Migration
{
    public function up()
    {
        $this->createTable('post', [
            'id'=> $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->text(),
            'user_id' => $this->string()
        ]);
    }

    public function down()
    {
        $this->dropTable('post');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
