<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\site\models\SettingsSearch */
/* @var $form yii\widgets\ActiveForm */
?>
 <tr id="row-about">
        <td class="text-center">About</td>
        <td class="text-center"><?= Html::checkbox('about',$about,['class' => 'make-switch','onchange' => 'edit({ aboutAllow: $(this).is(":checked") , type : \'about\'},\'about\')']) ?></td>
      </tr>    