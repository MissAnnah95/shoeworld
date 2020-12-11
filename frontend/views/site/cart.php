
<?php

use frontend\assets\AppAsset;
use yii\bootstrap4;
use frontend\models\Shoes;
use yii\bootstrap4\Modal;
use yii\helpers\Url;
use frontend\models\Cart;

$newshoes=Cart::find()->joinWith('shoe')->all();
$totalprice=Cart::find()->joinWith('shoe')->sum('price');
 ?>


<div class="card0 text-center mt-5">
  <div class="card-header">
    <div class="row">
      <div class="col-sm-6">
        <h5><span><i class="fas fa-cart-plus"></i></span> Shopping Cart</h5>
      </div>
      <div class="col-sm-6">
        <button type="button" class="btn btn-primary btn-sm btn-block">
          <span><i class="fas fa-cart-plus"></i></span> Continue shopping
        </button>
      </div>
    </div>

  </div>

  <!-- add to cart 1-->
  <div class="card-body">

      <?php foreach ($newshoes as $shoe){?>
        <div class="row">
      <div class="col-sm">
        <div class="col-xs-2"><img class="card-img-top" src="<?= Yii::$app->request->baseUrl.'/'.$shoe->shoe->shoeimage->imagePath ?>">
        </div>
    </div>

    <div class="col-sm text-left">
        <h4 class="product-name"><strong><span> <?=$shoe->shoe->shoeName?></span></strong></h4><h4><small><span><?=$shoe->shoe->description?></span></small></h4>
    </div>
    <div class="col-sm">
      <div class="col-xs-6">
        <div class="col-xs-6 text-right">
          <h6><strong>Kshs. <span><?=$shoe->shoe->price?></span><span class="text-muted"></span></strong></h6>
        </div>
        <div class="col-xs-4 ">
          <!-- <input type="text" class="form-control input-sm" value="1"> -->
        </div>
        <div class="col-xs-2 text-right">
          <button type="button" class="btn btn-link btn-xs">
            <!-- <span><i class="fas fa-trash-alt "></i> </span> -->
          </button>
        </div>
      </div>
    </div>
    </div>
    	<hr>
      <br>
      <?php } ?>





    <hr>
    <div class="row">
      <div class="col-sm">
        <div class="text-center">
          <div class="col-xs-9 text-right">
            <h6 class="text-right">Added items?</h6>
          </div>
          <div class="col-xs-3">
            <button type="button" class="btn btn-default btn-sm btn-block text-right">
              Update cart
            </button>
          </div>
        </div>
      </div>
      <hr>


    </div>
  </div>
  <div class="card-footer text-muted">
    <div class="row text-center">


        <div class="col-sm">
          <div class="col-xs-9">
            <h4 class="text-right">Total <strong><span> <?=$totalprice?></span></strong></h4>
          </div>
          <div class="col-xs-3">
            <a class="btn btn-primary" href="<?= Url::to(['/checkout/create'])?>" role="button">Receipt</a>
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Checkout point
            </button> -->
          </div>
        </div>


    </div>
  </div>
</div>

<!-- modal launch -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- input for email -->
        <form>
          <div class="form-group">
            <label for="exampleInputPassword1">First Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="First Name">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Last Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Last Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="d-block my-3">
            <div class="custom-control custom-radio">
              <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
              <label class="custom-control-label" for="credit">Credit card</label>
            </div>

            <div class="custom-control custom-radio">
              <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
              <label class="custom-control-label" for="paypal">Mpesa</label>
            </div>
          </div>

          <a class="btn btn-primary" href="<?= Url::to(['/site/checkout'])?>" role="button">Receipt</a>
        </form>

      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
