<?php


namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Category;

class CategoryController
{
    public function actionIndex()
    {
        $query = Category::find();

        $categories = $query->orderBy('name')
            ->all();

        return $this->render('index', [
            'categories' => $categories,
        ]);
    }
}