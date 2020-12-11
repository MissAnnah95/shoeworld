<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Category;

/* @var $this yii\web\View */
/* @var $model frontend\models\Shoes */
/* @var $form yii\widgets\ActiveForm */
$categorylist = ArrayHelper::map(category::find()->all(), 'categoryId', 'category'); //map all data in categorytable and select category id and category name
?>

<div class="shoes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'categoryId')->dropDownList($categorylist,['placeholder'=>'select shoe category']) ?>

    <?= $form->field($model, 'shoeName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>



    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
