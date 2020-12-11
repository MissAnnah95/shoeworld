<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script> -->
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://kit.fontawesome.com/86c7034986.js" crossorigin="anonymous"></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap" >
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md bg-dark sticky-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'Women', 'url' => ['/site/women']],
        ['label' => 'Men', 'url' => ['/site/men']],
        ['label' => 'Kids', 'url' => ['/site/kids']],
        ['label' => 'Cart', 'url' => ['/site/cart']],
        ['label' => 'Add shoe', 'url' => ['/shoes/create']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ml-auto '],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<!-- footer -->

  <div class='contanier-fluid'>
      <div class="card bg-dark">

          <div class="card-body bg-dark">
              <div class="row m-0 pt-5">
                  <div class="card col-12 col-md-3 bg-dark">
                      <div class="card-content bg-dark"> <i class="far fa-user-circle fa-3x"></i>
                          <div class="card-title"> MY ACCOUNT </div>
                          <p><small>Sign In<br>Register<br>Order Status</small></p>
                          <div class="learn-more">
                              <p> <small> LEARN MORE <label><i class="fas fa-angle-right"></i></label> </small> </p>
                          </div>
                      </div>
                  </div>
                  <div class="card col-12 col-md-3 bg-dark">
                      <div class="card-content bg-dark"> <i class="far fa-handshake fa-3x"></i>
                          <div class="card-title"> HELP </div>
                          <p><small>Shipping<br>Returns<br>Sizing</small></p>
                          <div class="learn-more">
                              <p> <small> LEARN MORE <label><i class="fas fa-angle-right"></i></label> </small> </p>
                          </div>
                      </div>
                  </div>
                  <div class="card col-12 col-md-3 bg-dark">
                      <div class="card-content bg-dark"> <i class="far fa-address-card fa-3x"></i>
                          <div class="card-title"> ABOUT </div>
                          <p><small>Our Story<br>Media<br>Sustainability</small></p>
                          <div class="learn-more">
                              <p> <small> LEARN MORE <label><i class="fas fa-angle-right"></i></label> </small> </p>
                          </div>
                      </div>
                  </div>
                  <div class="card col-12 col-md-3 bg-dark">
                      <div class="card-content bg-dark"> <i class="fas fa-file-contract fa-3x"></i>
                          <div class="card-title"> LEGAL STUFF </div>
                          <p><small>Terms of Use<br>Terms of Sale<br>Privacy</small></p>
                          <div class="learn-more">
                              <p> <small> LEARN MORE <label><i class="fas fa-angle-right"></i></label> </small> </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="card-footer row m-0">
              <p> <label> <i class="fa fa-copyright"></i> </label> 2020</p>
              <div>
                  <p> <small class="follow-text">FOLLOW US ON SOCIAL MEDIA</small> <label class="footer-right"> <i class="fab fa-instagram"></i> <i class="fab fa-facebook-square"></i> <i class="fab fa-linkedin"></i> <i class="fab fa-twitter-square"></i> </label> </p>
              </div>
          </div>
      </div>
  </div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
