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

 

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'setting_key',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{myButton}',  // the default buttons + your custom button
                'buttons' => [
                    'myButton' => function($url, $model, $key) {     // render your custom button
                        // return Html::a('Items', ['/menu/items/?id='.$key]);
                        // return Html::a('<span class="fa fa-search"></span>İtems', '/menu/items/?id='.$key, [
                        //     'title' => Yii::t('app', 'View'),
                        //     'class'=>'btn btn-primary btn-xs',                                  
                        //   ]);
                        return '<label class="switch">
                                <input type="checkbox">
                                 <span class="slider round"></span>
                             </label>';
                    }
                    
                ]
            ]
        ],
    ]); ?>
</div>
