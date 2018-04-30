<?php
namespace kouosl\site\controllers\frontend;

use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/*
 * Home controller
 */
class HomeController extends DefaultController
{
   
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::className(),
                    'rules' => [
                        [
                            'allow' => true,
                        ]
                    ],
                ],
        ]);
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

  


    
}

