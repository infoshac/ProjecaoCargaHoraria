<?php

use yii\db\Migration;

/**
 * Class m220318_175700_Usuario
 */
class m220318_175700_Usuario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('USUARIO',[
            'ID'=> $this->PrimaryKey(),
            'LOGIN'=> $this->string(),
            'NOME'=> $this->string(),
            'NUCLEO_ID'=> $this->integer(),
        ]);
        $this->addForeignKey('nucleo_fk', 'USUARIO', 'NUCLEO_ID', 'NUCLEO', 'ID', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('nucleo_fk', 'USUARIO');
        $this->dropTable('USUARIO');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220318_175700_Usuario cannot be reverted.\n";

        return false;
    }
    */
}
