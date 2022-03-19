<?php

use yii\db\Migration;

/**
 * Class m220319_200559_DetalheOferta
 */
class m220319_200559_DetalheOferta extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('DETALHEOFERTA',[
        'ID'=> $this->PrimaryKey(),
        'ANOSEMESTRE'=> $this->string(), 
        'DISCIPLINA_ID'=> $this->integer(),  
        'OFERTA_ID'=> $this->integer(),
        ]);

        $this->addForeignKey('disciplina_fk', 'DETALHEOFERTA', 'DISCIPLINA_ID', 'DISCIPLINA', 'ID','RESTRICT');
	    
        $this->addForeignKey('oferta_fk', 'DETALHEOFERTA', 'OFERTA_ID', 'OFERTA', 'ID', 'RESTRICT');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('disciplina_fk', 'DETALHEOFERTA');
        $this->dropForeignKey('oferta_fk', 'DETALHEOFERTA');
        $this->dropTable('DETALHEOFERTA');


        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220319_200559_DetalheOferta cannot be reverted.\n";

        return false;
    }
    */
}
