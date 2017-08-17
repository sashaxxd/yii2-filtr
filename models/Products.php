<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 15.08.2017
 * Time: 22:28
 */

namespace app\models;


use yii\db\ActiveRecord;

class Products extends ActiveRecord
{
     public static function tableName()
     {
         return 'product';
     }
}