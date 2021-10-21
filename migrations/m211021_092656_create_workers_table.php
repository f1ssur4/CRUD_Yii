<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%workers}}`.
 */
class m211021_092656_create_workers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%workers}}', [
            'id' => $this->primaryKey(),
            'firstName' => $this->string(),
            'lastName' => $this->string(),
            'email' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%workers}}');
    }
}
