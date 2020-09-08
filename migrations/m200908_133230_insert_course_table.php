<?php

use yii\db\Migration;

/**
 * Class m200908_133230_insert_course_table
 */
class m200908_133230_insert_course_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('{{%course}}',['name','description'],[
            ['Программирование',"Курс по программированию"],
            ['Робототехника',"Курс по робототехнике"],
            ['Философия',"Курс по философии"],
            ['История',"Курс по истории"],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200908_133230_insert_course_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200908_133230_insert_course_table cannot be reverted.\n";

        return false;
    }
    */
}
