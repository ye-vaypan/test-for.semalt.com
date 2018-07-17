<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h3>Задание по SQL</h3>
    </div>
    <hr>
    <div class="row">
        <div><strong>
                Сделать скрипты для подготовки базы данных(миграции)
            </strong>
        </div>
        <div class="row">
            <pre class="col-sm-5">
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
            </pre>
            <div class="col-sm-2"></div>
            <pre class="col-sm-5">
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
            </pre>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-6">
            <div><strong>
                    Напишите запрос, который выберет имя пользователя (bids.name) с самой
                    высокой ценой заявки (bids.price)
                </strong>
            </div>
            <pre>
                SELECT name FROM `bids`
                ORDER BY price DESC
                LIMIT 1
            </pre>
        </div>

        <div class="col-sm-6">
            <div><strong>
                    Напишите запрос, который выберет название мероприятия (events.caption), по
                    которому нет заявок
                 </strong>
            </div>
            <pre>
                SELECT caption FROM `events`
                WHERE id NOT IN
                (SELECT id_event from `bids`)
            </pre>
        </div>

    </div>
    <hr>
    <div class="row">
        <div class="col-sm-6">
            <div>
                <strong>
                    Напишите запрос, который выберет название мероприятия (events.caption), по
                    которому больше трех заявок
                </strong>
            </div>
            <pre>
                SELECT caption FROM `bids`
                INNER JOIN `events`
                ON bids.id_event = events.id
                GROUP BY id_event HAVING count(*)>=3
            </pre>
        </div>
        <div class="col-sm-6">
            <div>
                <strong>
                    Напишите запрос, который выберет название мероприятия (events.caption), по
                    которому больше всего заявок
                </strong>
            </div>
            <pre>
                SELECT events.caption
                FROM bids
                JOIN events ON events.id = bids.id_event
                GROUP BY events.caption
                ORDER BY COUNT(events.id) DESC
                LIMIT 1
            </pre>
        </div>
    </div>
</div>
