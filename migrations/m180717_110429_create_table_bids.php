<?php

use yii\db\Migration;

/**
 * Class m180717_110429_create_table_bids
 */
class m180717_110429_create_table_bids extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET 	utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('bids', [
            'id' => $this->primaryKey()->comment('Первичный ключ'),
            'id_event' => $this->integer()->notNull()->comment('ID события'),
            'name' => $this->string(255)->notNull()->comment('Имя пользователя'),
            'email' => $this->string(255)->notNull()->comment('Email пользователя'),
            'price' => $this->float()->notNull()->comment('Цена которую пользователь готов заплатить за билет'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('bids');
    }
}
