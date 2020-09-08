<?php

use yii\db\Migration;

/**
 * Class m200908_133254_insert_studentGroupeCourseWithTeacher_table
 */
class m200908_133254_insert_studentGroupeCourseWithTeacher_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('{{%studentGroupeCourseWithTeacher}}',['groupe_id','teacher_id','course_id','status'],[
            ['1','1','1','1'],
            ['1','1','2','1'],
            ['2','2','1','1'],
            ['2','1','1','1'],
            ['1','1','3','1'],
            ['1','1','4','1'],

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200908_133254_insert_studentGroupeCourseWithTeacher_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200908_133254_insert_studentGroupeCourseWithTeacher_table cannot be reverted.\n";

        return false;
    }
    */
}
