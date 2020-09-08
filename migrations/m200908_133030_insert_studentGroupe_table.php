<?php

use yii\db\Migration;

/**
 * Class m200908_133030_insert_studentGroupe_table
 */
class m200908_133030_insert_studentGroupe_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('{{%studentGroupe}}',['number','department'],[
            ['8И6А',"ОИТ"],
            ['8ВМ01',"ОИТ"],

        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200908_133030_insert_studentGroupe_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200908_133030_insert_studentGroupe_table cannot be reverted.\n";

        return false;
    }
    */
}
