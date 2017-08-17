<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 15.08.2017
 * Time: 22:20
 */

namespace app\controllers;


use app\models\Products;
use yii\web\Controller;
use app\modules\admin\models\ProductSearch;
use Yii;

class ProductsController extends Controller
{
    public  function beforeAction($action)
    {
        $this->enableCsrfValidation = false;

        return parent::beforeAction($action);
    }


    public  function actionIndex()
    {
        //$this->layout = false;
        if(Yii::$app->request->isAjax){
            $this->layout = false;
        }
        $searchModel = new ProductSearch();
//         Debug($searchModel->search(Yii::$app->request->queryParams));
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index',
            [
//                'model' => $model,
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
    }
}