<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%keyboards}}`.
 */
class m211023_150851_create_keyboards_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%keyboards}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'type' => $this->string(),
            'country' => $this->string(),
            'price' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%keyboards}}');
    }
}
