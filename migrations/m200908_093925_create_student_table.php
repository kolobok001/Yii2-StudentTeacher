<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%student}}`.
 */
class m200908_093925_create_student_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%student}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string()->notNull(),
            'groupe_id'=>$this->integer()->notNull(),
            'photo'=>$this->string()->defaultValue(null),
        ]);

        $this->createIndex(
            'idx-student-group_id',
            'student',
            'groupe_id'
        );




    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%student}}');
    }
}
