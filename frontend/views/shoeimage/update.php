<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Shoeimage */

$this->title = 'Update Shoeimage: ' . $model->ImageId;
$this->params['breadcrumbs'][] = ['label' => 'Shoeimages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ImageId, 'url' => ['view', 'id' => $model->ImageId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shoeimage-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
