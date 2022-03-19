<?php

use yii\db\Migration;

/**
 * Class m220319_191902_Matriz
 */
class m220319_191902_Matriz extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('MATRIZ',[
            'ID'=> $this->PrimaryKey(),
            'SIGLA'=> $this->string(),
            'CH_TOTAL'=> $this->string(),
            'CURSO_ID'=> $this->integer(),
        ]);
        $this->addForeignKey('curso_fk', 'MATRIZ', 'CURSO_ID', 'CURSO', 'ID', 'RESTRICT');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('curso_fk', 'MATRIZ');
        $this->dropTable('MATRIZ');


        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220319_191902_Matriz cannot be reverted.\n";

        return false;
    }
    */
}
