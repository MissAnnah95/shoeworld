<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\StringHelper;
use frontend\models\Shoes;
use frontend\models\Category;
use frontend\models\Shoeimage;
use yii\bootstrap4\Modal;

/* @var $this yii\web\View */

$this->title = 'Women Index';

$listings = Shoes::find()->where(['categoryId' =>11])->joinWith('shoeimage')->all();

?>
<div class="container-fluid bg-no-overlay" style="background: url(images/ladies5.jpg); background-size: cover;">
    <div class="row justify-content-center">
        <div>
            <h1 class="text-center font-italic">Crazy offers<br> for the merry season.</h1>
        <br><br>
        </div>

    </div>
</div>

<!-- pictures of shoes -->

<div class="container-fluid">
<div class="row justify-content-center">
  <div>
    <h1 class="mt-5 text-center">Footwear to last you<br> a lifetime.</h1>
    <h5 class="mt-3 text-center">Bring power to your steps.</h5>
    <hr class="bg-dark">

  </div>
  </div>
</div>

</div>
<div class="container-fluid">
<div class="row">
  <?php foreach ($listings as $shoe){?>
  <div class="col-3">
      <div class="card">
          <img class="card-img" src="<?= Yii::$app->request->baseUrl.'/'.$shoe->shoeimage->imagePath ?>">
          </div>
      <p class="card-text"><strong><span> <?=$shoe['shoeName']?></span></strong><br>Kshs <span> <?=$shoe['price']?></span></p>
      <button type="button" val="<?=$shoe->shoeId?>"class="btn btn-outline-secondary addcart">ADD CART</button>
  </div>
<?php } ?>
</div>
</div>

<?php

Modal::begin([
    'title'=>'<h4> ADD CART</h4>',
    'id'=>'addcart',
    'size'=>'model-lg',
    ]);
    echo "<div id='addcartContent'></div>";
Modal::end();

?>
