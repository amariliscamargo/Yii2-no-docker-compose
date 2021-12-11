<?php

use yii\db\Migration;

/**
 * Class m211211_170203_teste_table
 */
class m211211_170203_teste_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211211_170203_teste_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211211_170203_teste_table cannot be reverted.\n";

        return false;
    }
    */
}
