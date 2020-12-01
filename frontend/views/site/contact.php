<?php
 use yii\widgets\ActiveForm;
 use \yii\helpers\Html;
 $url = Yii::getAlias("@fronted_domain");
?>
<style>
    input.transparent-input{
        background-color:transparent !important;
        border:none !important;
    }
</style>
<div class="container-fluid">
      <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
              <div class="row py-4">
                  <div class="col-md-12"><h1 class="text-center font-weight-bold">Contact us</h1></div>
              </div>
              <div class="row pt-5">
                  <div class="col-md-5" >
                    <div class="questions_contact"  id="contact_bg_oo_about_left">
                        <p class="font-weight-bold text-level-1" style="position: relative;z-index: 2222;">Feel free to contact us  with any questions.</p>
                    </div>
                    <div class="contact-form pt-5">
                            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                            <p class="form-group">
                                <?= $form->field($model, 'name')->textInput(['class'=>'name_contact form-control','placeholder'=>'Name','style'=>'background-color:transparent !important;'])->label(false) ?>
                            </p>
                            <p class="form-group">
                                <?= $form->field($model, 'email')->textInput(['class'=>'email_contact form-control','placeholder'=>'Enter email address','style'=>'background-color:transparent !important;'])->label(false) ?>
                            </p>
                            <p class="form-group">
                                <?= $form->field($model, 'subject')->textInput(['class'=>'name_contact form-control','placeholder'=>'Subject','style'=>'background-color:transparent !important;'])->label(false) ?>
                            </p>
                            <p class="form-group">
                                <?= $form->field($model, 'message')->textarea(['rows'=>4,'class'=>'name_contact form-control','placeholder'=>'Your message','style'=>'background-color:transparent !important;'])->label(false) ?>
                            </p>
                            <div class="text-center">
                                <?= Html::submitButton('Send message', ['class' => 'btn btn-lg btn_con font-wight-bold text-white', 'style'=>'font-size:18px;background: #4452FE;box-shadow: 0px 4px 31px rgba(0, 0, 0, 0.15);border-radius: 15px;','name' => 'signup-button']) ?>
                            </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                  </div>
                  <div class="col-md-7" style="display: flex;justify-content: center;align-items: center;">
                      <div class="contect_imge"> 
                          <?php if (isset($img)):?> 
                          <img src="<?=$url.'/'.$img->image?>" class="w-100">
                      <?php endif; ?>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-1"></div>
      </div>
      <div class="row">
        <div class="col-md-12" style="display: flex; justify-content: center">
          <a class="toggle">
              <div class="ml-4"><img src="/img/clarity_mouse-line.png"  alt=""></div>
              <div class="text-white">See on map</div>
          </a>
        </div>
      </div>
  </div>
  <section class="map">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 m-0 p-0">
          <iframe style="width:100% !important;height:500px !important" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2997.705372793981!2d69.26324961542294!3d41.29351627927286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8ac2c011f19b%3A0xc051e69a9082880c!2zMTUg0YPQu9C40YbQsCDQqNC-0YLQsCDQoNGD0YHRgtCw0LLQtdC70LgsINCi0LDRiNC60LXQvdGC!5e0!3m2!1sru!2s!4v1605806943173!5m2!1sru!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
    </div>
  </section>