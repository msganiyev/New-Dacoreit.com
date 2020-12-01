<?php
$url = Yii::getAlias("@fronted_domain");
?>
<section>
    <div class="container-fluid" id="header_bg_oo">
        <div class="image_o py-5 mt-5">
            <img src="/img/ooo.png" width="" alt="">
        </div>
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-md-12 py-5">
                        <p class="team_p text-center" style="font-size: 36px">Team</p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <p class="team_cat">Adminstarator</p>
                    </div>
                    <?php foreach($team as $key=>$one):    ?>
                    <div class="col-md-3">
                        <div class="team shadow" style="background-color: #2C115B;">
                            <div class="image_team">
                                <img src="<?=$url.'/'.$one->image?>" width="100%" height="310px" alt="">
                            </div>
                            <div class="px-3 py-2">
                                <span class="team_name"><?=$one->fio?></span>
                                <div style="display: flex; justify-content: space-between;">
                                    <div>
                                        <div class="team_small_text">Lorem ipson doller</div>
                                    </div>
                                    <div>
                                        <span class="icon_size">
                                            <i class="fab fa-linkedin"></i>
                                            <i class="fab fa-instagram"></i>
                                            <i class="fab fa-twitter"></i>
                                            <i class="fab fa-facebook"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="row mt-5 pt-5">
                    <div class="col-md-12">
                        <p class="team_cat">Web developers</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <?php foreach($team_dev as $key=>$one):?>
                    <div class="col-md-3">
                        <div class="team shadow" style="background-color: #2C115B;">
                            <div class="image_team">
                                <img src="<?=$url.'/'.$one->image?>" width="100%" height="310px" alt="">
                            </div>
                            <div class="px-3 py-2">
                                <span class="team_name"><?=$one->fio?></span>
                                <div style="display: flex; justify-content: space-between;">
                                    <div>
                                        <div class="team_small_text">Lorem ipson doller</div>
                                    </div>
                                    <div>
                                        <span class="icon_size">
                                            <i class="fab fa-linkedin"></i>
                                            <i class="fab fa-instagram"></i>
                                            <i class="fab fa-twitter"></i>
                                            <i class="fab fa-facebook"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
<!--                    <div class="col-md-3">-->
<!--                        <div class="team_join shadow h-100" style="background-color: #2C115B;">-->
<!---->
<!--                            <div class="px-3 py-4">-->
<!--                                <span class="for_job">Looking for a job?</span>-->
<!--                                <div>-->
<!--                                    <div class="join_us">Join us</div>-->
<!--                                    <div class="text-center pt-5 d-flex justify-content-center">-->
<!--                                        <a href="" class="text-center">-->
<!--                                            <p class="bnt_button">Send resume</p>-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
                <div class="row mt-5 pt-5">
                    <div class="col-md-12">
                        <p class="team_cat">Software developers</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <?php foreach($team_soft as $key=>$one):?>
                        <div class="col-md-3">
                            <div class="team shadow" style="background-color: #2C115B;">
                                <div class="image_team">
                                    <img src="<?=$url.'/'.$one->image?>" width="100%" height="310px" alt="">
                                </div>
                                <div class="px-3 py-2">
                                    <span class="team_name"><?=$one->fio?></span>
                                    <div style="display: flex; justify-content: space-between;">
                                        <div>
                                            <div class="team_small_text">Lorem ipson doller</div>
                                        </div>
                                        <div>
                                        <span class="icon_size">
                                            <i class="fab fa-linkedin"></i>
                                            <i class="fab fa-instagram"></i>
                                            <i class="fab fa-twitter"></i>
                                            <i class="fab fa-facebook"></i>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="col-md-3">
                        <div class="team_join shadow h-100" style="background-color: #2C115B;">

                            <div class="px-3 py-4">
                                <span class="for_job">Looking for a job?</span>
                                <div>
                                    <div class="join_us">Join us</div>
                                    <div class="text-center pt-5 d-flex justify-content-center">
                                        <a href="" class="text-center">
                                            <p class="bnt_button">Send resume</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 pt-5">
                    <div class="col-md-12">
                        <p class="team_cat">Graphic designers</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <?php foreach($team_disgin as $key=>$one):?>
                        <div class="col-md-3">
                            <div class="team shadow" style="background-color: #2C115B;">
                                <div class="image_team">
                                    <img src="<?=$url.'/'.$one->image?>" width="100%" height="310px" alt="">
                                </div>
                                <div class="px-3 py-2">
                                    <span class="team_name"><?=$one->fio?></span>
                                    <div style="display: flex; justify-content: space-between;">
                                        <div>
                                            <div class="team_small_text">Lorem ipson doller</div>
                                        </div>
                                        <div>
                                        <span class="icon_size">
                                            <i class="fab fa-linkedin"></i>
                                            <i class="fab fa-instagram"></i>
                                            <i class="fab fa-twitter"></i>
                                            <i class="fab fa-facebook"></i>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="col-md-3">
                        <div class="team_join shadow h-100" style="background-color: #2C115B;">

                            <div class="px-3 py-4">
                                <span class="for_job">Looking for a job?</span>
                                <div>
                                    <div class="join_us">Join us</div>
                                    <div class="text-center pt-5 d-flex justify-content-center">
                                        <a href="" class="text-center">
                                            <p class="bnt_button">Send resume</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
    </div>
</section>
