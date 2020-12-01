<?php
use yii\helpers\Url;
use yii\helpers\Html;
use common\models\Post;
use common\models\PostCat;
$url = Yii::getAlias("@fronted_domain");
?>
<style>
.email-subs-form{
    padding-top:20px;
}
    .blog_address{
            border: 1px solid white;
            background: inherit;
            width: 100%;
            padding: 12px;
            border-radius: 24px;
            color: wheat;
            font-style: italic;
    }
    .blog_address:focus{
        outline:none;
    }
    .bgs-btn{
            position: absolute;
            right: 0%;
            width: 50px;
            height: 50px;
            border: none;
    }
    .bgs-btn i{
            color:#ED4B7C;
    }
</style>
<section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="container py-4">
                <div class="row">
                    <div class="col-4 order-3 order-md-1 text-right">
                        <!--<select class="mdb-select md-form colorful-select dropdown-primary" id="category">-->
                        <!--    <option value="1">Category</option>-->
                        <!--    <option value="2">Designer</option>-->
                        <!--    <option value="3">Progrmma</option>-->
                        <!--    <option value="4">Kun</option>-->
                        <!--    <option value="5">Project</option>-->
                        <!--  </select>-->
                        <button class="btn text-light mt-4 dropdown-toggle font-weight-bold"  id="category" type="button" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">Category</button>
                        
                        <div class="dropdown-menu">
                            <?php foreach(common\models\PostCat::find()->all() as $key => $one): ?>
                                <a class="dropdown-item" href="#"><?=$one->name()?></a>
                             <?php endforeach; ?>
                          <!--<a class="dropdown-item" href="#">Another action</a>-->
                          <!--<a class="dropdown-item" href="#">Something else here</a>-->
                          <!--<div class="dropdown-divider"></div>-->
                          <!--<a class="dropdown-item" href="#">Separated link</a>-->
                        </div>
                    </div>
                    <div class="col-lg-4 order-1 order-md-2">
                        <div class="blog_filter">
                              <div class="email-subs-form">
                                <form action="<?= \yii\helpers\Url::to(['site/search']) ?>" method="get">
                                  <input type="text" class="blog_address" name ='q' placeholder="Search from blog">
                                  <button class="lnk btn-main bgs-btn rounded-circle bg-light">
                                    <i class="fa fa-search bb"></i>
                                  </button>
                                </form>
                              </div>
                            </div>
                    </div>
                    <div class="col-4 order-3 order-md-3">
                        <!--<select class="mdb-select md-form colorful-select dropdown-primary" id="category">-->
                        <!--    <option value="1">Date</option>-->
                        <!--    <option value="2">2020</option>-->
                        <!--    <option value="3">2019</option>-->
                        <!--    <option value="4">2019</option>-->
                        <!--    <option value="5">2018</option>-->
                        <!--  </select>-->
                        <button class="btn text-light mt-4 font-weight-bold dropdown-toggle"  id="category" type="button" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">Date</button>
                        
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">2020</a>
                          <a class="dropdown-item" href="#">2019</a>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        <div class="col-md-1"></div>
      </div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10" id="blog_oo_page">
          <div class="row">
            <?php if (isset($query)): ?>
            <div class="blog_pages_pg">
                 <div class="news_blog_pages" id="index_blog_newss">
                    <?php foreach($query as $key => $one): ?>
                        <div class="bug">
                            <a href="<?=Url::to(['site/inner','id'=>$one->id])?>">
                            <div class="image" style="background-image: url('<?=$url.'/'.$one->image?>');background-position: center;
                background-size: cover;"></div>
                            <div class="lr">
                                <div class="eye">
                                    <span><i class="fa fa-calendar"></i> <?=Yii::$app->formatter->asDate($one->created, 'dd.MM.yyyy')?> </span>
                                    <span><i class="fa fa-eye"></i> <?=$one->view?></span>
                                </div>
                                <div class="category">
                                    <?=$one->postCat->name() ?>
                                </div>
                                <div class="news_title">
                                <?=$one->title()?>
                                </div>
                                
                            </div>
                            <div class="morenews">
                                        <p class="text_p"><a class="link-decorative text-light" href="#">more</a></p>
                                </div>
                        </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php else: ?>
                <h1 class="text-center" style="font-family: Sans-Serif;font-weight: bold">The requested information was not found</h1>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </section>