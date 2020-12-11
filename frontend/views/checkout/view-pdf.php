<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\User;
use frontend\models\Shoes;
use frontend\models\Cart;

$newshoes=Cart::find()->joinWith('shoe')->all();
$totalprice=Cart::find()->joinWith('shoe')->sum('price');


/* @var $this yii\web\View */
/* @var $model frontend\models\Checkout */

$this->title = 'ACKNOWLEDGEMENT';

?>
<div class="checkout-view">

    <h1><?= Html::encode($this->title) ?></h1>



    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [


            'name',
            'email:email',
            'phoneNo',
            'location',
        ],
    ]) ?>

    <div class="row justify-content-center">
      <div class="col-sm-6 text-center">

        <p class="product-price"><span> Amount; <?=$totalprice?></span></p>

        <p class="font-italic"> Thank you for shopping with Shoe World</p>

      </div>
    </div>

    <!-- STYLING -->
    <div class="card0 text-center mt-5">

        <div class="card-body">

            <?php foreach ($newshoes as $shoe){?>
              <div class="row" >
            <div class="col-sm">
              <div class="col-xs-2"><img class="card-img-top" src="<?= Yii::$app->request->baseUrl.'/'.$shoe->shoe->shoeimage->imagePath ?>" style="width:100px; ">
              </div>
          </div>

          <div class="col-sm text-left">
              <h4 class="product-name"><strong><span> <?=$shoe->shoe->shoeName?></span></strong></h4><h4><small><span><?=$shoe->shoe->description?></span></small></h4>
          </div>

          
              <div class="col-xs-6 text-right">
                <h6><strong>Kshs. <span><?=$shoe->shoe->price?></span><span class="text-muted"></span></strong></h6>
              </div>



          </div>
            <hr>
            <?php } ?>
          </div>

    </div>
</div>
