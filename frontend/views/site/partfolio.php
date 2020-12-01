<?php
 use yii\helpers\Url;
$url = Yii::getAlias("@fronted_domain");
?>
<!--<div class="rdDots" style="padding-top:200px">-->
<!--    <img src="../../front_assets/img/dots.svg" alt="">-->
<!--</div>-->
<div class="rdPortfolioContent">
    <div id="rdPortfolioFilter" class="rdPortfolioFilter">
        <button class="btn z-depth-1 active" onclick="filterSelection('all')">All</button>
        <?php foreach($procat as $key => $one):?>
        <button class="btn z-depth-1" onclick="filterSelection('one_<?=$one->id?>')"><?=$one->name()?></button>
        <?php endforeach; ?>
    </div>
    <div class="rdPortfolioItems" id="blog_bg_oo_about_left_porti">
        <?php foreach($project as $key=>$one):?>
        <div class="rdItem one_<?=$one->proCat->id?>">
            <a href="<?=Url::to(['site/project','id'=>$one->id])?>">
                <div class="rdImg" style="background-image: url('<?=$url.'/'.$one->image?>');" ></div>
                <div class="rdContent">
                    <span class="rdName">
                        <a href="<?=Url::to(['site/project','id'=>$one->id])?>" class="text-light"><?=$one->name?></a>
                    </span><br><br>
                    <div class="rdCaption">
                        <span>
                            <?=$one->description?>
                        </span>
                    </div><br>
                    <a class="rdGoTo" target="_blank" href="<?=$one->link?>">Go to website <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>



</div>
