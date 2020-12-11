<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Shoeimage */

$this->title = 'Create Shoeimage';
$this->params['breadcrumbs'][] = ['label' => 'Shoeimages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shoeimage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
