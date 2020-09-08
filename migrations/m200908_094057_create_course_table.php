<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%course}}`.
 */
class m200908_094057_create_course_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%course}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string()->notNull(),
            'description'=>$this->string()->defaultValue("Без описания"),

        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%course}}');
    }
}
