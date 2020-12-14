<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\Cart;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model frontend\models\Checkout */
$totalprice=Cart::find()->joinWith('shoe')->sum('price');




\yii\web\YiiAsset::register($this);
?>
<div class="checkout-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>

        <?= Html::a('Delete', ['delete', 'id' => $model->checkoutId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>

        <?= Html::a('Generate PDF', ['gen-pdf', 'id' => $model->checkoutId], ['class' => 'btn btn-primary']) ?>
    </p>


    <div class="row justify-content-center">
      <div class="col-sm-6 text-center">

        <h1><strong> Thank you for your Purchase!</strong></h1>
        <br>

        <h6 class="product-price"><span> Your Order of Ksh <?=$totalprice?> has been Confirmed.</span></h6>
        <br>
        <p class="font-italic">We'd love to hear from you. <br>Please send an email to our customer service shoeworld@info.com and let us know how your experience was.</p>


      </div>

    </div>



</div>
