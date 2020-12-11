<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Shoeimage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shoeimage-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'shoeId')->textInput() ?>

    <?= $form->field($model, 'imagePath')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
