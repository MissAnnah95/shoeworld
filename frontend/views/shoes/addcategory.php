<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Category */
/* @var $form ActiveForm */
?>
<div class="addCategory">

    <?php $form = ActiveForm::begin(['id' => 'image-create'],[
        'options' => ['enctype' => 'multipart/form-data']
    ]);  ?>

        <?= $form->field($model, 'shoeId')->hiddenInput(['value' => $shoeId])->label(false) ?>
        <?= $form->field($model, 'category') ?>

        <div class="form-group">
            <?= Html::submitButton('<span class="fa fa-forward"></span> Next', ['class' => 'btn btn-success']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- addCategory -->
