<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\site\models\SettingsSearch */
/* @var $form yii\widgets\ActiveForm */
?>
 <tr id="row-contact">
        <td class="text-center">Contact</td>
        <td class="text-center"><?= Html::checkbox('contact',$contact,['class' => 'make-switch','onchange' => 'edit({ contactAllow: $(this).is(":checked") , type : \'contact\'},\'contact\')'])?></td>
      </tr> 