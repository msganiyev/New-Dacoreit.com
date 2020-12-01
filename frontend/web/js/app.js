const openbtn = document.getElementById('openButton');
const closebtn = document.getElementById('closeButton');
const navlinks = document.getElementById('navlinks');

openbtn.addEventListener('click', () => {
    navlinks.style.display = "block";
    closebtn.style.display = "block"
    openbtn.style.display = "none"
})

closebtn.addEventListener('click', () => {
    navlinks.style.display = "none";
    closebtn.style.display = "none"
    openbtn.style.display = "block"
})


$('.content_main .owl-carousel').owlCarousel({
    loop: true,
    dots: false,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1,

        }
    }
});
$('#image_project .owl-carousel').owlCarousel({
    loop: false,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1,

        }
    }
});
$('.about_carusel .owl-carousel').owlCarousel({
    loop: true,
    dots: false,
    margin: 20,
    navText: ["<img src='/img/left.png' style='width: 19px !important;'/> ", "<img src='/img/right.png'style='width: 19px !important;'/> "],
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1,

        }
    }
});
$('.part_owl .owl-carousel').owlCarousel({
    loop: false,
    margin: 10,
    dots: false,
    responsive: {
        0: {
            items: 3
        },
        600: {
            items: 3
        },
        1000: {
            items: 8,

        }
    }
});
$('#about_pages .owl-carousel').owlCarousel({
    loop: false,
    margin: 15,
    dots: false,
    responsive: {
        0: {
            items: 3
        },
        600: {
            items: 3
        },
        1000: {
            items: 6,

        }
    }
});
$('.client_carusel .owl-carousel').owlCarousel({
    loop: true,
    dots: false,
    margin: 10,
    navText: ["<img src='./img/left.png'/>", "<img src='./img/right.png'/>"],
    // navText: ["<i class='fas fa-arrow-left' ></i>", "<i class='fas fa-arrow-right'></i>"],
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1,
        }
    }
});
// tabJs = (navContainer, navItems, navTabs, contentTab, contains) => {

//     let tabs = Array.prototype.slice.apply(document.querySelectorAll(navTabs));
//     let items = Array.prototype.slice.apply(document.querySelectorAll(navItems));
//     let panels = Array.prototype.slice.apply(document.querySelectorAll(contentTab));

//     document.getElementById(navContainer).addEventListeners('on', function(e) {
//         if (e.target.classList.contains(contains)) {
//             let i = tabs.indexOf(e.target)
//             tabs.map(tab => tab.classList.remove('active'))
//             tabs[i].classList.add('active')
//             items.map(item => item.classList.remove('gds-nav-tabs__list-item--active'))
//             items[i].classList.add('gds-nav-tabs__list-item--active')
//             panels.map(tab => tab.classList.remove('active'))
//             panels[i].classList.add('active')
//         }
//     })
// }

// tabJs('tabContainer', '.gds-nav-tabs__list-item ', '.itm', '.tabs', 'itm');