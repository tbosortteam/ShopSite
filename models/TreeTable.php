<?php


namespace app\models;
use Yii;

class TreeTable extends \kartik\tree\models\Tree
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }
}