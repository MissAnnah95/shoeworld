<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ShoeimageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shoeimages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shoeimage-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Shoeimage', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ImageId',
            'shoeId',
            'imagePath',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
