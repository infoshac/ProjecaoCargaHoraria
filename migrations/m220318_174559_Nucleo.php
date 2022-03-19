<?php

use yii\db\Migration;

/**
 * Class m220318_174559_Nucleo
 */
class m220318_174559_Nucleo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('NUCLEO', [
            'ID' => $this->PrimaryKey(),
            'NOME' => $this->string() ,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('NUCLEO');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220318_174559_Nucleo cannot be reverted.\n";

        return false;
    }
    */
}
