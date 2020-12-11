<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ShoesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shoes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'shoeId') ?>

    <?= $form->field($model, 'categoryId') ?>

    <?= $form->field($model, 'shoeName') ?>

    <?= $form->field($model, 'price') ?>

    <?= $form->field($model, 'createdat') ?>

    <?php // echo $form->field($model, 'description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
