<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!--<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,600,700,900" rel="stylesheet">-->
    <!--<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>-->
    <title>Dacore IT</title>
    <?php $this->head() ?>
    
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar">
  
<?php $this->beginBody() ?>
    
            <?= \frontend\widgets\HeaderWidget::widget() ?>
                <?= $content ?>
            <?= \frontend\widgets\FooterWidget::widget() ?>
        
<?php $this->endBody() ?>
<script>
    window.replainSettings = {
      id: 'ff6b6ef0-0993-49a0-98d8-ed0cfed9378a'
    };
    (function(u) {
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = u;
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
    })('https://widget.replain.cc/dist/client.js');
  </script>
<script type="text/javascript">
    $('.mb_block_silck').slick({
        infinite: true,
        arrows: false,
        slidesToShow: 3,
        slidesToScroll: 3
    });
    $('.rdSliderText').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    autoplay: false,
    fade: true,
    asNavFor: '.rdSliderCards'
    });

    $('.rdSliderCards').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }],
    asNavFor: '.rdSliderText',
    dots: false,
    infinite: true,
    autoplay: false,
    CenterMode: false,
    focusOnSelect: true,
    prevArrow: '<button class="rdSliderBtn rdPrev"><img src="/img/left.png" style="width: 19px !important;"/></button>',
    nextArrow: '<button class="rdSliderBtn rdNext"><img src="/img/right.png" style="width: 19px !important;"/></button>'
    });
    $(document).ready(function() {
     
        // Gets the video src from the data-src on each button
        var $videoSrc;
        $(".video-btn").click(function() {
            $videoSrc = $(this).attr("data-src");
            console.log("button clicked" + $videoSrc);
        });
        
        // when the modal is opened autoplay it
        $("#myModal").on("shown.bs.modal", function(e) {
            console.log("modal opened" + $videoSrc);
            // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
            $("#video").attr(
                "src",
                $videoSrc + "?amp;showinfo=0&amp;modestbranding=1&amp;autoplay=1"
            );
        });

        // stop playing the youtube video when I close the modal
        $("#myModal").on("hide.bs.modal", function(e) {
            // a poor man's stop video
            $("#video").attr("src", $videoSrc);
        });

        // document ready
    });
        filterSelection("all") // Выполните функцию и покажите все столбцы
    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("rdItem");
        if (c == "all") c = "";
        // Добавить класс "show" (display:block) к фильтрованным элементам, и извлеките класс "show" из элементов, которые не выбраны
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            x[i].setAttribute('isDisabled', 'true');
            if (x[i].className.indexOf(c) > -1){
                w3AddClass(x[i], "show");
                x[i].removeAttribute('isDisabled');
            }
        }
    }

    // Показать отфильтрованные элементы
    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
                element.outerHTML = "<div class='" + arr1[0] + " " + arr1[1] + " show'>" + element.innerHTML + "</div>";

            }
        }
    }

    // Скрыть элементы, которые не выбраны
    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
                element.outerHTML = "<item style='display:none' class='" + arr1[0] + " " + arr1[1] + "'>" + element.innerHTML + "</item>";
            }
        }
        element.className = arr1.join(" ");
        //$( this ).replaceWith( "<div>" + $( this ).text() + "</div>" );
    }

    // Добавить активный класс к текущей кнопке (выделите ее)
    var btnContainer = document.getElementById("rdPortfolioFilter");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function(){
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
    var btnss = document.getElementsByClassName("test_nav");
    for (var i = 0; i < btnss.length; i++) {
        btnss[i].addEventListener("click", function(){
            var current = document.getElementsByClassName("actives");
            current[0].className = current[0].className.replace("actives", "");
            this.className += "actives";
        });
    }
    
    

</script>

</body>
</html>
<?php $this->endPage() ?>
