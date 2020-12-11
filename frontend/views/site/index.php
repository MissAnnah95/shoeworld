<?php

use yii\helpers\Url;
use frontend\models\Shoeimage;
use frontend\models\Shoes;
use frontend\models\Category;
use yii\bootstrap4\Modal;
use frontend\models\Cart;

/* @var $this yii\web\View */
// Accessing as an object
$this->title = 'The Shoe World';
$shoelisting = Shoes::find()->JoinWith('shoeimage')->limit(10)->all();
$lists = Shoes::find()->orderBy(['shoeId'=>SORT_DESC])->joinWith('shoeimage')->limit(10)->all();

// var_dump($listing);
// exit();
?>

<div class="site-index">

    <div class="container">

        <div class="row">
          <div class="col-sm-4 justify-content-center">
              <h1 class="mt-5 text-center" style="padding-top:300px;">Built for <br> Flight</h1>
              <h5 class="text-center"><strong>Introducing product name.<br>Our lightest shoe, ever.</strong></h5>
              <div class="text-center">
              <a class="btn btn-outline-secondary" href="#"><strong>SHOP</strong></a>
            </div>
      </div>
            <div class="col-sm-8">
                <img src="<?= Yii::$app->request->baseUrl ?>/images/site.PNG" class="card-img-top" alt="...">
            </div>
        </div>

    </div>

    <!-- Men's and Women's sector -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
        <div class="card text-dark" style="width: auto;">
            <img src="<?= Yii::$app->request->baseUrl ?>/images/stilletoes1.jpg" class="card-img-top" alt="...">
            <div class="card-img-overlay">
                <h1 class="mt-5">WOMEN</h1>
                <p class="card-text">Maryann is a freelance web designer and developer based in London. She is specialized in HTML5, CSS3, JavaScript, Bootstrap, etc.</p>
                <a class="text-dark" href="<?= Url::to(['/site/women'])?>" ><strong>Shop Now<label><i class="fas fa-angle-right"></i></label></strong></a>
            </div>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="card text-white" style="width: auto;">
            <img src="<?= Yii::$app->request->baseUrl ?>/images/shoes12.jpg" class="card-img-top" alt="...">
            <div class="card-img-overlay">
                <h1 class="mt-5">MEN</h1>
                <p class="card-text">Maryann is a freelance web designer and developer based in London. She is specialized in HTML5, CSS3, JavaScript, Bootstrap, etc.</p>
                <a class="text-white" href="<?= Url::to(['/site/men'])?>"><strong>Shop Now<label><i class="fas fa-angle-right text-white"></i></label></strong></a>
            </div>
        </div>
        </div>
      </div>
    </div>


      <!-- Scrollable Accessories -->
      <div class="container-fluid">
          <h1 class="mt-5">New Releases</h1>
          <div class="scrolling-wrapper row flex-row flex-nowrap mt-4 pb-4">

            <!-- querying for each single shoe -->
            <?php foreach ($lists as $shoe){?>
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

      <!-- Top Kicks -->
      <div class="container-fluid">
          <h1 class="mt-5">Top Kicks</h1>
          <div class="scrolling-wrapper row flex-row flex-nowrap mt-4 pb-4">

            <?php foreach ($shoelisting as $shoe){?>
      			<div class="col-sm-3">
              <div class="card-1">
                  <img class="card-img" src="<?= Yii::$app->request->baseUrl.'/'.$shoe->shoeimage->imagePath ?>">
                </div>
                <p class="card-text"><strong><span> <?=$shoe['shoeName']?></span></strong><br>Kshs <span> <?=$shoe['price']?></span></p>
                <button type="button" val="<?=$shoe->shoeId?>"class="btn btn-outline-secondary addcart">ADD CART</button>
      			</div>
            <?php } ?>

          </div>
      </div>

      <!-- Never Miss a Drop -->
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div>
            <h1 class="mt-5 text-center">Never Miss<br> a Drop.</h1>
            <h5 class="mt-3 text-center">Receive updates about new <br> products and promotions.</h5>
            <div class="text-center">
              <button type="button" class="btn btn-outline-secondary btn-lg mt-5">JOIN MAILING LIST</button>
            </div>
          </div>
          </div>
      </div>

      <!-- footer -->

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
