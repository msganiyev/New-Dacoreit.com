<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
    use frontend\assets\AppAsset;
    use common\widgets\Alert;
?>
<div class="wrapper-404">
  <div class="content-wrapper">

    <div class="lead-wrapper">
        <?php if($exception->statusCode == '404') :?>
          <h1 class="lead-404">404</h1>
        <?php endif ?>
      
    </div>

    <div class="info-wrapper">
      <p class="info-404">Oops... The page that you are looking<br> for does not exist! Luckily enough we,<br> have some pages that do exist</p>
    </div>

    <ul class="links-404">
      <li><a href="<?=Url::to(['site/index'])?>" class="btn btn-light btn-small">Go Back Home</a></li>
      <!-- <li><a href="pages/contact-1.html" class="btn-ghost-light btn-small">Report this</a></li> -->
    </ul>

  </div>
</div><!-- / .wrapper-404 -->

