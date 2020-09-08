<?php

use yii\db\Migration;

/**
 * Class m200908_133220_insert_teacher_table
 */
class m200908_133220_insert_teacher_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('{{%teacher}}',[
            'name',academic_degree],[
            ["Петров Юрий Иванович",'Профессор'],
            ['Иванов Василий Викторович','Доцент']]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200908_133220_insert_teacher_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200908_133220_insert_teacher_table cannot be reverted.\n";

        return false;
    }
    */
}
