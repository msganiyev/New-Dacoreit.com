<?php
use yii\helpers\Url;
use yii\helpers\Html;
$url = Yii::getAlias("@fronted_domain");
?>
<section>
    <div class="container-fluid" id="header_bg_oo">
        <div class="image_o">
            <img src="img/blog_inner_oo.png" width="" alt="">
        </div>
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="row pt-2 pb-5">
                    <div class="col-md-12">
                         <div class="pt-3">
                            <a href="<?=Url::to(['site/index'])?>" class="text-light"><span><i class="fas fa-arrow-left"></i> &nbsp; Home</a> <a href="<?=Url::to(['site/partfolio'])?>" class="text-light"> / Blog</a> / <?=$model->id?></span>
                        </div>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-6">
                        <div class="blog_inner_title" style="padding-top: 50px;">
                            <p class="text-level-2">
                                <?=$model->title()?>
                            </p>
                            <div class="pb-3" style="display: flex; justify-content: space-between; padding-right: 90px; align-items: center;">
                                <span><img src="/img/ic24-calendar.png" width="24px" alt="">&nbsp;&nbsp; <?=Yii::$app->formatter->asDate($model->created, 'dd.MM.yyyy')?></span>
                                <span><i class="fa fa-eye"></i>&nbsp; <?=$model->view?> </span>
                            </div>
                            <div>
                                <p class="p_text_inner">
                                    <?=$model->description()?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image_inner_blog" style="height:453px; background-image:url('<?=$url.'/'.$model->image?>');background-size: cover;
    background-position: center;">
                            <!--<img src="<?=$url.'/'.$model->image?>" width="100%" height="453px" alt="">-->
                        </div>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="container">
                        <div class="row pt-3">
                            <div class="col-md-12">
                                <p class="p_text_inner">
                                    <?=$model->body()?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>
