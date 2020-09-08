<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%studentGroupeCourseWithTeacher}}`.
 */
class m200908_094153_create_studentGroupeCourseWithTeacher_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%studentGroupeCourseWithTeacher}}', [
            'id' => $this->primaryKey(),
            'groupe_id'=>$this->integer()->notNull(),
            'teacher_id'=>$this->integer()->notNull(),
            'course_id'=>$this->integer()->notNull(),
            'status'=>$this->integer()->notNull()


        ]);
        $this->createIndex(
            'idx-studentGroupeCourseWithTeacher-groupe_id',
            'studentGroupeCourseWithTeacher',
            'groupe_id'
        );
        $this->createIndex(
            'idx-studentGroupeCourseWithTeacher-course_id',
            'studentGroupeCourseWithTeacher',
            'course_id'
        );
        $this->createIndex(
            'idx-studentGroupeCourseWithTeacher-teacher_id',
            'studentGroupeCourseWithTeacher',
            'teacher_id'
        );


        $this->addForeignKey(
            'fk-studentGroupeCourseWithTeacher-teacher_id',
            'studentGroupeCourseWithTeacher',
            'teacher_id',
            'teacher',
            'id',
            'CASCADE'
        );
        $this->addForeignKey(
            'fk-studentGroupeCourseWithTeacher-groupe_id',
            'studentGroupeCourseWithTeacher',
            'groupe_id',
            'studentGroupe',
            'id',
            'CASCADE'
        );
        $this->addForeignKey(
            'fk-studentGroupeCourseWithTeacher-course_id',
            'studentGroupeCourseWithTeacher',
            'course_id',
            'course',
            'id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%studentGroupeCourseWithTeacher}}');
    }
}
