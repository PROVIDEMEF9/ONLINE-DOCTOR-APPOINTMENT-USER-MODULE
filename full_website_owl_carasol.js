const left='<img src="arrow_left.svg" alt="">';
    const right='<img src="arrow_right.svg" alt="">';
$('.logo_portion').owlCarousel({
    loop:true,
    margin:20,
    navText:[left,right],
    autoplay:false,
    nav:true,
    autoplayTimeout:2000,
    stagePadding:50,
    responsive:{
        0:{
            items:1
        },
        400:{
            items:2
        },
        700:{
            items:3
        },
        900:{
            items:3
        },
        1300:{
            items:5
        }
    }
})

$('.care_portion').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay:true,
    dots:false,
    autoplayTimeout:2000,
    stagePadding:50,
    responsive:{
        0:{
            items:1
        },
        400:{
            items:1
        },
        750:{
            items:2
        },
        950:{
            items:3
        },
        1400:{
            items:4
        }
    }
})