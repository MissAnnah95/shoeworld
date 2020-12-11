<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Shoeimage */
/* @var $form ActiveForm */
?>
<div class="addimage">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'shoeId')->hiddenInput(['value' => $shoeId])->label(false) ?>
        <?= $form->field($model, 'imagePath')->fileInput(['maxlength' => true]) ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- addimage -->
