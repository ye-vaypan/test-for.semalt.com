<?php

use yii\db\Migration;

/**
 * Class m180717_104547_create_table_events
 */
class m180717_104547_create_table_events extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET 	utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('events', [
            'id' => $this->primaryKey()->comment('Первичный ключ'),
            'caption' => $this->string(255)->notNull()->comment('Название мероприятия'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('events');
    }
}
