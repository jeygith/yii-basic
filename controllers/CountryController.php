<?php


namespace app\controllers;


use app\models\Country;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class CountryController extends Controller
{
    public function actionIndex()
    {
        $query = Country::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count()
        ]);

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

       // throw new NotFoundHttpException;


        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination
        ]);

    }
}