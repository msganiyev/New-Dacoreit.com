 <?php
    use yii\helpers\Url;
    use yii\helpers\Html;
    use yii\helpers\Helper;
    use common\models\Menu;
    $url = Yii::getAlias("@fronted_domain");
    $languageItem = new cetver\LanguageSelector\items\DropDownLanguageItem([
     'languages' => [
         'en' => '<span class="flag-icon flag-icon-us"></span> En',
        //  'ru' => '<span class="flag-icon flag-icon-ru"></span> Ru',
         'uz' => '<span class="flag-icon flag-icon-de"></span> Uz',
     ],
     'options' => ['encode' => false],
 ]);
    
?>

<header class="header_nav">
    <div class="left_side_nav">
         <?=\yii\bootstrap\Nav::widget([
             'options' => ['class' => 'text-light font-weigth-bold','style'=>'font-weight: bold;
    color: white;'],
             'items' => [
                 $languageItem->toArray()
             ]
         ]);?>
        <!--<form>-->
        <!--    <select name="" id="">-->
        <!--        <option value="">EN</option>-->
        <!--        <option value="">RU</option>-->
        <!--        <option value="">UZ</option>-->
        <!--    </select>-->
        <!--</form>-->
    </div>
    <div class="content_nav">
        <div class="mobile_header">
            <div>
                <span id="openButton"><i class="fa fa-bars"></i></span>
                <span id="closeButton"><i class="far fa-times-circle"></i></span>
                <span><a href=""><img src="<?=$url.'/'.$logonavbar->image?>" class="header_logo" width="125px"  alt="logo is not found"></a></span>
                <span><i class="fas fa-ellipsis-v"></i></span>
            </div>
        </div>
        <div class="nav_links" id="navlinks">
        <?php  foreach ($menu_left as $key => $one): ?>
            <a href="<?=$one->link?>" class="wow animated bounce infinite"><?=$one->name()?></a>
        <?php endforeach; ?>
            <a href=""><img src="<?=$url.'/'.$logonavbar->image?>" width="125px" class="header_logo" alt="logo is not found"></a>
            <?php foreach ($menu_right as $key => $one): ?>
            <a href="<?=$one->link?>" class="wow animated bounce infinite"><?=$one->name()?></a>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="right_side_nav"></div>
</header>


<?php
$script = <<< JS
    $('.select ul li.option').click(function() {
    $(this).siblings().children().remove();
    var a = $(this).siblings().toggle();
    console.log($(a).is(":visible"));
    $(this).siblings().append('');
    // $(this).addClass('darr');
    //alert($(this).attr("values"));

  })
JS;
$this->registerJs($script);
?>
          