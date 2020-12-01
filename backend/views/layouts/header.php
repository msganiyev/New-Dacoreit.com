<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
?>
<nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" id="pushmenu" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=Url::to(['head/index'])?>">Services inner page</a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" onclick="window.history.back()">
                <i class="fa fa-reply"></i>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge" id="badge_count" style="color: #2a20ff; font-size: 10px;"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header"><span id="badge_count_div"></span> Уведомления</span>
                <div class="dropdown-divider"></div>
                <a href="<?= \yii\helpers\Url::to(['contact/index']) ?>" class="dropdown-item">
                    <i class="fas fa-phone-square mr-2"></i> <span id="contactCount"></span> Новый контакт
                </a>

            </div>
        </li>
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <span class="d-none d-md-inline"><?=Yii::$app->user->identity->username?></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            
                  <!-- User image -->
                  <li class="user-header bg-primary">
                      <?= Html::img('@web/dist/img/AdminLTELogo.png', ['alt' => 'User Image', 'class' => 'img-circle elevation-2']) ?>
                      <p>
                      <?=Yii::$app->user->identity->username?> - Web Developer
                          <small>Member since Nov. 2012</small>
                      </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                      <a href="#" class="btn btn-default btn-flat">Профиль</a>
                      <?= Html::a('Выход', ['/site/logout'], ['class' => 'btn btn-default btn-flat float-right', 'data-method' => 'post', 'title' => 'Выход']) ?>
                  </li>
          </li>
             
            </ul>
        </li>
    </ul>
</nav>
<?php
$this->registerJs(<<<JS
    
$(document).ready(function(){
    
    notifications();
    
    function notifications(){
        $.ajax({
          url: window.baseUrl + 'notification/index',
          method: 'GET',
          data:{},
          dataType: 'json',
          success: function(data){
              document.getElementById('badge_count').innerHTML = data.contactCount; 
              document.getElementById('badge_count_div').innerHTML = data.contactCount;
              document.getElementById('contactCount').innerHTML = data.contactCount;
          }
        });   
    }
       
    setInterval(notifications, 10000); // 10 secunt
    
});
    
JS
);
?>

