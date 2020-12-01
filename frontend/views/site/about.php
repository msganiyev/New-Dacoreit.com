<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
$url = Yii::getAlias("@fronted_domain");
?>
   <div class="main_oo">
        <img src="../../img/oooo.png" alt="">
    </div>
    <div class="about_new">
        <div class="left_about_action"></div>
        <div class="content_about_action">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="about_new">
                            About us
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="col6_title">
                            <div class="about_new_title" id="counter_bg_oo_about_experts">
                                <?=$we_work_experts->title()?>
                            </div>
                            <div class="experts_new_title">
                                <?=$we_work_experts->value()?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about_one_image">
                            <img src="<?=$url.'/'.$we_work_experts->image?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="about_part">
                            <div class="box_part_about">
                                <?php if (isset($project_set)):?>
                                <p>&nbsp;</p>
                                <div class="number"><?=$project_set->value()?>+</div>
                                <div class="about_part_name"><?=$project_set->title()?></div>
                                 <?php endif; ?>
                            </div>
                            <div class="box_part_about">
                                <?php if (isset($employes)):?>
                                <p>&nbsp;</p>
                                <div class="number"><?=$employes->value()?></div>
                                <div class="about_part_name"> <?=$employes->title()?></div>
                                 <?php endif; ?>
                            </div>
                            <div class="box_part_about">
                                <?php if (isset($controctors)):?>
                                <p>more than</p>
                                <div class="number"><?=$controctors->value()?></div>
                                <div class="about_part_name">CONTRACTORS</div>
                                <?php endif; ?>
                            </div>
                            <div class="box_part_about">
                                 <?php if (isset($client)) :?>
                                <p>more than</p>
                                <div class="number"><?=$client->value()?></div>
                                <div class="about_part_name"><?=$client->title()?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 order-2 order-md-1">
                        <div class="global_image">
                            <div class="about_global_image">
                                <img src="<?=$url.'/'.$we_work_global->image?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-md-2">
                        <div class="global_text" id="counter_bg_oo_about">
                              <div class="gloabal_title">
                                    <?=$we_work_global->title()?>
                              </div>
                              <div>
                                  <div class="experts_new_title">
                                   <?=$we_work_global->value()?>
                                  </div>
                              </div>  
                        </div>
                    </div>  
                </div>
                <div class="row" id="how_we_work">
                    <div class="col-lg-6">
                        <div class="col6_title">
                            <div class="about_new_title" id="counter_bg_oo_about_left">
                                <?=$how_we_work->title()?>
                            </div>
                            <div class="experts_new_title">
                                <?=$how_we_work->value()?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about_one_image">
                            <img src="<?=$url.'/'.$how_we_work->image?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 about_carusel">
                        <div class="client_about ">
                            <div class="owl-carousel owl-theme" id="counter_bg_oo_about_btn_client">
                                <?php foreach(common\models\Client::find()->all() as $one): ?>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="ifrema">
                                                <iframe id="video" src="https://www.youtube.com/embed/<?=$one->video?>" frameborder="0" style="border: none; height: auto;" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="col-lg-6" >
                                            <div class="client_about_pages" >
                                                What our clientes have to say
                                            </div>
                                            <div class="about_flex" >
                                                <div class="client_logo_about_page_user" style="background-image: url('<?=$url.'/'.$one->image?>');background-size:cover;background-postion:center"></div>
                                                <span class="client_logo_about_page_user" style="padding-top: 70px;padding-left: 45px;">
                                                    <p class="p_about_client_data">
                                                        Client name
                                                        <br>
                                                        <br>
                                                        Company
                                                        <br>
                                                        <br>
                                                        Directot
                                                    </p>
                                                </span>
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <!--<div class="item">-->
                                <!--    <div class="row">-->
                                <!--        <div class="col-lg-6">-->
                                <!--            <div class="ifrema">-->
                                <!--                <iframe id="video" width="720"  src="https://www.youtube.com/embed/B1rzI2r3s38" frameborder="0" style="border: none;" allowfullscreen></iframe>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--        <div class="col-lg-6">-->
                                <!--            <div class="client_about_pages">-->
                                <!--                What our cliente have to say-->
                                <!--            </div>-->
                                <!--            <div class="about_flex">-->
                                <!--                <div class="client_logo_about_page_user" style="background-image: url('img/svg/person.svg');"></div>-->
                                <!--                <div class="client_logo_about_page_user">-->
                                <!--                    <p class="p_about_client_data">-->
                                <!--                        Client name-->
                                <!--                        <br>-->
                                <!--                        Company-->
                                <!--                        <br>-->
                                <!--                        Directot-->
                                <!--                    </p>-->
                                                   
                                <!--                </div>-->
                                <!--            </div>   -->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="about_part">
                    <div class="col-md-12">
                        <div id="about_pages">
                            <div class="owl-carousel owl-theme">
                                <?php foreach($partnior as $key=>$one): ?>
                                <div class="item" style="height:98px" >
                                    <a href=""><img src="<?=$url.'/'.$one->image?>" class="part_img" alt="" class="wow fadeInLeft" data-wow-delay="0.09s"></a>
                                </div>
                                 <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right_about_action"></div>
    </div>