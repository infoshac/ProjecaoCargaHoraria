<?php

use yii\db\Migration;

/**
 * Class m220319_201311_Coordena
 */
class m220319_201311_Coordena extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('COORDENA',[
            'ID'=> $this->PrimaryKey(),
            'INICIO'=> $this->string(), 
            'FIM'=> $this->integer(),  
            'USUARIO_ID'=> $this->integer(),
            'CURSO_ID'=> $this->integer(),
            ]);


            $this->addForeignKey('usuario_fk', 'COORDENA', 'USUARIO_ID', 'USUARIO', 'ID', 'RESTRICT');
            $this->addForeignKey('curso_fk', 'COORDENA', 'CURSO_ID', 'CURSO', 'ID', 'RESTRICT');

            
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('usuario_fk', 'COORDENA');
        $this->dropForeignKey('oferta_fk', 'COORDENA');
        $this->dropTable('COORDENA');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220319_201311_Coordena cannot be reverted.\n";

        return false;
    }
    */
}
