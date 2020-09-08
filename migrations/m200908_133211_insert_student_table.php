<?php

use yii\db\Migration;

/**
 * Class m200908_133211_insert_student_table
 */
class m200908_133211_insert_student_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey(
            'fk-student-group_id',
            'student',
            'groupe_id',
            'studentGroupe',
            'id',
            'CASCADE'
        );
        $this->batchInsert('{{%student}}',['name','groupe_id'],[
            ['Иванов Иван Иванович','1'],
            ['Петров Юрий Геннадьевич','1'],
            ['Жуков Андрей Анатольевич','2'],
            ['Чданко Антон Петрович','2'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200908_133211_insert_student_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200908_133211_insert_student_table cannot be reverted.\n";

        return false;
    }
    */
}
