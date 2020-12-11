<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Shoes;
use common\models\User;
use yii\helpers\ArrayHelper;
use yii\helpers\StringHelper;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model frontend\models\Cart */
/* @var $form ActiveForm */
$shoe = ArrayHelper::map(Shoes::find()->all(), 'shoeId', 'price');
$userId = user::find()->where(['id'=>Yii::$app->user->id])->one();
?>
<div class="addcart">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'shoeId')->hiddenInput(['value' => $shoeId, 'readonly'=>true])->label(false) ?>
        <?= $form->field($model, 'userId')->hiddenInput(['value' => $userId->id, 'readonly'=>true])->label(false)?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
            <a class="btn btn-primary" href="<?= Url::to(['/site/index'])?>" role="button">Continue Shopping</a>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- addcart -->
