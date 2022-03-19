<?php

use yii\db\Migration;

/**
 * Class m220318_184605_Curso
 */
class m220318_184605_Curso extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
          /*    $this->createTable('USUARIO',[
            'ID'=> $this->PrimaryKey(),
            'LOGIN'=> $this->string(),
            'NOME'=> $this->string(),
            'NUCLEO_ID'=> $this->integer(),
        ]);
        $this->addForeignKey('nucleo_fk', 'USUARIO', 'NUCLEO_ID', 'NUCLEO', 'ID', 'RESTRICT');
    } */
        $this->createTable('CURSO',[
            'ID'=> $this->PrimaryKey(),
            'NOME'=> $this->string(), 
            'CH_TOTAL'=> $this->string(),  
            'Q_PERIODOS'=> $this->string(),
            'SIGLA'=> $this->string(),
        ]);


   
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('CURSO');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220318_184605_Curso cannot be reverted.\n";

        return false;
    }
    */
}
