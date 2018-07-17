<?php
/**
 * Created by PhpStorm.
 * User: e.vaypan
 * Date: 16.07.2018
 * Time: 13:35
 */

namespace app\models;


use yii\base\Model;

class TestOne extends Model
{
    public $totalPeople;
    public $sportPeople;
    public $percentSportPeople;
    public $otherPeople;


    public function rules()
    {
        return [
            [['totalPeople', 'percentSportPeople'], 'required'],
            [['totalPeople', 'percentSportPeople'], 'integer'],
        ];
    }

    public function calculate($totalPeople, $percentSportPeople): self
    {
        $peoples = new static();

        $peoples->sportPeople = $totalPeople*$percentSportPeople/100;

        $peoples->totalPeople = $totalPeople;

        $peoples->percentSportPeople = $percentSportPeople;

        $peoples->otherPeople = $totalPeople - $peoples->sportPeople;

        return $peoples;
    }
}