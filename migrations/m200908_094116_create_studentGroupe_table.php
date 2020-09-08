<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%studentGroupe}}`.
 */
class m200908_094116_create_studentGroupe_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%studentGroupe}}', [
            'id' => $this->primaryKey(),
            'number' => $this->string()->notNull(),
            'department' => $this->string()->notNull(),

        ]);
    }



    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%studentGroupe}}');
    }
}
