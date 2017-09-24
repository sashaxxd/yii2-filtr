<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 15.08.2017
 * Time: 22:20
 */

namespace app\controllers;




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

//        Debug(Yii::$app->request->get());
        if(Yii::$app->request->isAjax) {

            if (Yii::$app->request->get('ProductSearch')['sort'] == '-price') {


           
        }
            $this->layout = false;
            $searchModel = new ProductSearch();

            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

            $model = $dataProvider->sort->attributes;
            return $this->render('ajax',
                [
                    'model' => $model,

                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,

                ]);
        }


        $searchModel = new ProductSearch();

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
       
        $model = $dataProvider->sort->attributes;
        return $this->render('index',
            [
               'model' => $model,
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
        
                
            ]);
    }
}