const counters = document.querySelectorAll('.counter');
const speed = 200;
$('.toggle').click(function() {
      $('.map').toggle('slow');
  });
counters.forEach(counter => {
    const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const count = + counter.innerText;
        const inc = target / speed;
        // console.log(count);
        if (count < target) {
            counter.innerText = Math.ceil(count + inc);
            setTimeout(updateCount, 1);
        }
        else {
            count.innerText = target;
        }
    }
    updateCount();
});
$('#banner_sld .owl-carousel').owlCarousel({
    loop:true,
    nav:true,
    items:3,
    autoplay:true,
    autoplayTimeout:7000,
    autoplayHoverPause:false,
    dots: true,
    responsive:{
        0:{
            items:1,
            loop:false,
            nav:false,
        },
        600:{
            items:1,
            loop:false,
            nav:false,
        },
        1000:{
            items:1,
            loop:true,
            nav:false,
        }
    }
})

$('#part .owl-carousel').owlCarousel({
    loop: false,
    margin: 10,
    responsiveClass: true,
    responsive: {
        0: {
            items: 3,
            nav: false
        },
        786: {
            items: 3,
            nav: false
        },
        1300: {
            items: 6,
            nav: false
        },
        1400: {
            items: 8,
            nav: false,
            loop: false
        }
    }
});
$('image_project .owl-carousel').owlCarousel({
    loop: false,
    margin: 10,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        786: {
            items: 1,
            nav: false
        },
        1300: {
            items: 1,
            nav: false
        },
        1400: {
            items: 1,
            nav: false,
            loop: false
        }
    }
});
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})
$('#client .owl-carousel').owlCarousel({
    loop: false,
    nav: true,
    navText: [
        "<i class='fas fa-arrow-left p-3 mx-1' style='background: linear-gradient(90.08deg, #FE6201 0.05%, #ED4B7C 99.92%);box-shadow: 0px 4px 4px rgba(254, 98, 1, 0.3);border-radius: 24px;'></i>",
        "<i class='fas fa-arrow-right p-3 mx-1' style='background: linear-gradient(90.08deg, #FE6201 0.05%, #ED4B7C 99.92%);box-shadow: 0px 4px 4px rgba(254, 98, 1, 0.3);border-radius: 24px;'></i>"
    ],
    margin: 10,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        600: {
            items: 1,
            nav: true
        },
        1000: {
            items: 1,
            nav: true,
            loop: false
        }
    }
});
$('.team .owl-carousel').owlCarousel({
    loop: false,
    nav: true,
    navText: [
        "<i class='fas fa-arrow-left p-3 mx-1' style='background: linear-gradient(90.08deg, #FE6201 0.05%, #ED4B7C 99.92%);box-shadow: 0px 4px 4px rgba(254, 98, 1, 0.3);border-radius: 24px;'></i>",
        "<i class='fas fa-arrow-right p-3 mx-1' style='background: linear-gradient(90.08deg, #FE6201 0.05%, #ED4B7C 99.92%);box-shadow: 0px 4px 4px rgba(254, 98, 1, 0.3);border-radius: 24px;'></i>"
    ],
    margin: 10,
    responsiveClass: true,
    responsive: {
        0: {
            items: 5,
            nav: true
        },
        600: {
            items: 3,
            nav: true
        },
        1000: {
            items: 3,
            nav: true,
            loop: false
        }
    }
})
$(document).ready(function () {
    new WOW().init();
});
// MDB Lightbox Init
// $(function () {
//     $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
// });
filterSelection("all")
function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("column");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
}

function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
    }
}

function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}

// project name
$('.image_project .owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
// Add active class to the current button (highlight it)
// var btnContainer = document.getElementById("myBtnContainer");
// var btns = btnContainer.getElementsByClassName("btn");
// for (var i = 0; i < btns.length; i++) {
//     btns[i].addEventListener("click", function(){
//         var current = document.getElementsByClassName("active");
//         current[0].className = current[0].className.replace(" active", "");
//         this.className += " active";
//     });
// }


