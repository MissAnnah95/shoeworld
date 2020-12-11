<?php
use frontend\assets\AppAsset;
use yii\bootstrap4;
use frontend\models\Shoes;
use yii\bootstrap4\Modal;
use yii\helpers\Url;
use frontend\models\Cart;

$newshoes=Cart::find()->joinWith('shoe')->limit(1)->all();
$totalprice=Cart::find()->joinWith('shoe')->sum('price');

?>

<div class="row justify-content-center">
  <div class="col-sm-6 text-center">
    <?php foreach ($newshoes as $shoe){?>
    <h5><strong> ACKNOWLEDGEMENT</strong></h5>
    <br>
    <h6 class="product-name"><span> Name; <?=Yii::$app->user->identity->username?></span></h6>
    <h6 class="product-price"><span> Amount; <?=$totalprice?></span></h6>
    <br>
    <p class="font-italic"> Thank you for shopping with Shoe World</p>
    <?php } ?>
  </div>
</div>
