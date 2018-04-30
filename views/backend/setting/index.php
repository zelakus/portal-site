<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kouosl\site\models\SettingsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Settings';  
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="settings-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= $this->render('_site',[
        'signup' => $signup === 'true'? true: false,
        'contact' => $contact === 'true'? true: false,
        'login' => $login=== 'true'? true: false,
        'about' => $about === 'true'? true: false,
        'language' => $language]) ?>
   

    
</div>
