<?php
$url = Yii::getAlias("@fronted_domain");
use yii\helpers\Html;
use yii\helpers\Url;
?>
<section class="py-3">
    <div class="container-fluid" id="header_bg_oo">
        <!--<div class="image_o">-->
        <!--    <img src="/img/ooo.png" width="" alt="">-->
        <!--</div>-->
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="container-fluid mt-5">
                    <div class="row pb-3">
                    <div class="col-md-12">
                        <div class="pt-3">
                            <a href="<?=Url::to(['site/index'])?>" class="text-light"><span><i class="fas fa-arrow-left"></i> &nbsp; Home</a> <a href="<?=Url::to(['site/partfolio'])?>" class="text-light"> / Project</a> / <?=$project->id?></span>
                        </div>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-md-12">
                        <p class="project_name">
                            <?=$project->name?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <p class="p_text_inner">
                            <?=$project->description?>
                        </p>
                    </div>
                    <div class="col-md-5"></div>
                    <div class="col-md-2">
                        <div><span class="span_client"><b>Client:</b>&nbsp;<?=(isset($project->client->fio))?$project->client->fio:''?></span></div>
                        <?php if(isset($project->client->logo)): ?>
                        <div><span><img src="<?=$url.'/'.$project->client->logo?>" style="width: 129px;height:48px;" alt=""></span></div>
                        <?php else:?>
                        <div>not logo</div> 
                        <?php endif; ?>
                        <?php if(isset($project->client->date)): ?>
                       <div><span class="span_client"><b>Date:</b>&nbsp;<?=Yii::$app->formatter->asDate($project->client->date, 'dd.MM.yyyy')?></span></div>
                        <?php else:?>
                        <div>not data</div> 
                        <?php endif; ?>
                        
                    </div>
                </div>
                    <div class="row py-5">
                        <div class="col-md-12"  id="portifolio_ooo_inner">
                            <div class="image_project" style="width: 100%; margin: 0 auto;">
                                <img src="<?=$url.'/'.$project->image?>" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="row py-5">
                        <div class="col-md-12">
                            <div id="image_project" style="width: 100%; margin: 0 auto;">
                                <div class="owl-carousel owl-theme">
                                    <?php foreach ($gallery as $key=>$one ):?>
                                    <div class="item">
                                        <img src="<?=$url.'/'.$one['img']?>" width="100%" alt="">
                                    </div>
                                    <?php endforeach;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="client_port"  style="width: 90%; margin: 0 auto;">
                                <div class="row py-5" id="portifolio_ooo_inner_client">
                                    <div class="col-md-7">
                                        <?php if(isset($project->client->video)): ?>
                                            <iframe width="100%" height="350px" style="border: none;"
                                                                    src="https://www.youtube.com/embed/<?=$project->client->video?>">
                                                            </iframe>
                                            <?php else:?>
                                            <div>not video</div> 
                                            <?php endif; ?>
                                       
                                    </div>
                                    <div class="col-md-5" style="padding-left:5rem">
                                        <div>
                                            <p class="pb-5 project_feedback">Feedback</p>
                                        </div>
                                        <div class="client_image_project">
                                            <?php if(isset($project->client->image)): ?>
                                             <div style="width:130px; float:left;height:130px;background-image:url('<?=$url.'/'.$project->client->image?>');border-radius: 50%;background-size:cover;background-position: center;"></div>
                                            <?php else:?>
                                            <div>not image</div> 
                                            <?php endif; ?>
                                           
                                            
                                           
                                            <div style="padding-left: 11rem;">
                                                <?php if(isset($project->client->fio)): ?>
                                                 <span><i><?=$project->client->fio?></i></span>
                                                <br>
                                                <?php else:?>
                                                <div>not fio</div> 
                                                <?php endif; ?>
                                                <?php if(isset($project->client->company)): ?>
                                                <span><i><?=$project->client->company?></i></span>
                                                <br>
                                                <?php else:?>
                                                <div>not company</div> 
                                                <?php endif; ?>
                                               
                                                
<!--                                                <span><i>Director</i></span>-->
                                            </div>
                                        </div>
                                        <div style="float: left;
    padding-top: 30px;">
                                            <p class="p_text_inner">
                                                 <?php if(isset($project->client->content)): ?>
                                                <small>
                                                   <i> <?=$project->client->content?></i>
                                                </small>
                                                <?php else:?>
                                                <div>not content</div> 
                                                <?php endif; ?>
                                                
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section>

