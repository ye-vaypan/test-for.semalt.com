<?php
/**
 * Created by PhpStorm.
 * User: e.vaypan
 * Date: 16.07.2018
 * Time: 14:46
 */

namespace app\models;


use yii\base\Model;

class TestTwo extends Model
{
    public $enteredString;

    public function rules()
    {
        return [
            [['enteredString'], 'string'],
        ];
    }

    public function findNumInString($enteredString):self
    {
        $testTwo = new static();

        $values = explode(' ', $enteredString);
        $str = [];
        foreach ($values as $value)
        {
            $temp = preg_replace("/[^0-9]/", '', $value);
            if (!empty($temp))
            {
                $str [] = $temp;
            }

        }

        $testTwo->enteredString = $str;

        return $testTwo;
    }

}