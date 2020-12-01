<?php
  use yii\helpers\Url;
  use yii\helpers\Html;
  use yii\widgets\ActiveForm;
  $url = Yii::getAlias("@fronted_domain");
?>
<footer class="text-center text-lg-left py-4 mt-5" style="background: #030A49;">
    <!-- Grid container -->
    <div class="container-fluid p-4">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-md-12 col-xl-10" style="margin:0 auto;">
 <!--Grid row-->
 <div class="row">
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0" id="footer_nav">
                <h5 class="font-weight-bold mx-3">Nav menu</h5>

                <ul class="list-unstyled mb-0">
                    <?php foreach ($fot_menu as $key => $value): ?>
                        <li>
                            <a href="<?=$value->link?>" class="nav-link text-light"><?=$value->name()?></a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-6 mb-4 mb-md-0">
                <h5 class="font-weight-bold mx-3">What we do</h5>

                <ul class="list-unstyled">
                    <?php foreach($ser_cat as $key => $value): ?>
                        <li>
                            <a href="<?=Url::to(['site/services'])?>" class="nav-link text-light"><?=$value->name()?></a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-6 mb-4 mb-md-0">
                <h5 class="font-weight-bold">Contact us</h5>

                <ul class="list-unstyled mb-0">
                    <li class="pt-1">
                        <a href="tel:<?=$tell->value()?>" class="text-light">
                            <span class="d-flex">
                                <img src="/img/phone.png" alt="" width="19px" height="19px">
                                    &nbsp;
                                <?php if(isset($tell)):?>
                                    <?=$tell->value()?>
                                <?php else:  ?>
                                    <p>Not found</p>
                                <?php endif;?>
                            </span>
                        </a>
                    </li>
                    <li class="pt-4">
                        <a href="mailto:<?=$email->value()?>" class="text-light">
                            <span class="d-flex">
                                <img src="/img/Frame.png" alt="" width="19px" height="19px">
                                    &nbsp;
                                <?php if(isset($email)):?>
                                    <?=$email->value()?>
                                <?php else:  ?>
                                    <p>Not found</p>
                                <?php endif;?>
                                </span>
                            </a>
                    </li>
                    <li class="pt-4">
                        <a href="#!" class="text-light">
                            <span class="d-flex">
                                <img src="/img/map.png" alt="" width="19px" height="19px">
                                &nbsp;
                                <?php if(isset($address)):?>
                                    <?=$address->value()?>
                                <?php else:  ?>
                                    <p>Not found</p>
                                <?php endif;?>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0" id="footer_nav">
                <div style="margin-top: -10px"> 
                    <img src="<?=$url.'/'.$footer_logo->image?>" width="136px">
                </div>

                <p class="text_p" style="font-size: small; color: #DFDFE3;">
                    <?php if(isset($about)):?>
                        <?=$about->value()?>
                    <?php else:  ?>
                        <p>Not found</p>
                    <?php endif;?>
                </p>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
        <div class="row">
            <div class="col-md-12">
                <p class="text_p text-center border-bottom w-50 py-3" style="margin: 0 auto;">
                    <small class="text-white py-5">Copyright by Eurosoft. All rights reserved.</small>
                </p>
                <!-- Grid container -->
                <div class="line_footer"></div>
                <!-- Copyright -->
                <div class="text-center pt-3">
                    <a href="https://www.facebook.com/dacoreit" class="text-light"><i class="fab fa-facebook-f fa-lg mx-2 py-2"></i></a>
                    <a href="" class="text-light"><i class="fab fa-instagram fa-lg mx-2 py-2"></i></a>
                    <a href="https://www.linkedin.com/company/dacoreit/" class="text-light"><i class="fab fa-vk fa-lg mx-2 py-2"></i></a>
                    <a href="https://www.linkedin.com/company/dacoreit/" class="text-light"><i class="fab fa-linkedin-in fa-lg mx-2 py-2"></i></a>
                    <a href="https://www.youtube.com/channel/UCLVNsWR8xOkJKIK3-X1GMQw/featured" class="text-light"><i class="fab fa-youtube fa-lg mx-2 py-2"></i></a>
                </div>
                <!-- Copyright -->
            </div>
        </div>
            </div>
            <div class="col-1"></div>
        </div>
       
    </div>

</footer>