<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\site\models\SettingsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<tr id="row-signup">
        <td class="text-center">Signup</td>
        <td class="text-center"><?= Html::checkbox('signup',$signup,['class' => 'make-switch','onchange' => 'edit({ signupAllow: $(this).is(":checked") , type : \'signup\'},\'signup\')']) ?></td>
        <!--  <label class="switch">
                        <input type="checkbox"  onchange = 'edit({ signupAllow: $(this).is(":checked") , type : "signup"},"signup")'>
                         <span class="slider round"></span>
                </label> -->
</tr>
