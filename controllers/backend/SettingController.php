<?php
namespace kouosl\site\controllers\backend;

use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use kouosl\site\models\LoginForm;
use kouosl\site\models\SettingSearch;
use kouosl\site\models\Setting;
use kouosl\content\models\Content;
/**
 * Site controller
 */
class SettingController extends DefaultController
{
   
    // public function behaviors()
    // {
    //     $behaviors = parent::behaviors();
    //     return $behaviors;
    // }

    public function actionIndex()
    {
        $settings = Setting::find()->asArray()->all();

        foreach ($settings as $setting){
            $settings[$setting['setting_key']] = $setting['value'];
        }
       
        $contents = Content::find()->asArray()->all();
       
        return $this->render('index',['settings' => $settings, 'contents' => $contents]);
    }

    public function beforeAction($action) {
       
        if ($action->id == 'change') {
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }


    public function actionChange(){
        if(Yii::$app->request->isAjax){
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            $postParams = Yii::$app->request->post();
            $settings = Setting::findOne(['setting_key' =>  $postParams['type']]);
            switch ($postParams['type']) {
                case 'signup':
                    $settings->value = $postParams['signupAllow'];
                    break;
                case 'contact':
                      $settings->value = $postParams['contactAllow'];
                      break;
                 case 'login':
                     $settings->value = $postParams['loginAllow'];
                    break;
                case 'about':
                     $settings->value = $postParams['aboutAllow'];
                    break;
                case 'language':
                    $settings->value = $postParams['language'];
                   break;
                case 'title':
                    $settings->value = $postParams['titleChange'];
                   break;
                case 'home':
                    $settings->value = $postParams['home'];
                   break;
                default:
                    # code...
                    break;
            }
            return ['result' => $settings->save()] ;

        }
    }


    
}
