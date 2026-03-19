window.onscroll = function (e) {
    let scroll = window.pageYOffset || document.documentElement.scrollTop
    if( scroll > 100 ) {
        document.getElementById("header").classList.add("scrolling")
    } else {
        document.getElementById("header").classList.remove("scrolling")
    }
}

function toggleMenu()
{
    const menu = document.getElementById('mobile_menu')
    if( menu.classList.contains('active') )
        menu.classList.remove('active')
    else
        menu.classList.add('active')
}

const swiper = new Swiper('.partner-slider', {
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    slidesPerView: 'auto',
    centeredSlides: false,
    spaceBetween: 50,
    autoplay: true,
    pagination: false,
    scrollbar: false
})

const workshop_swiper = new Swiper('.workshop-list', {
    //loop: true,
    //loopFillGroupWithBlank: true,
    navigation: {
        prevEl: '.swiper-button-prev',
    },
    freeMode: {
        enabled: true,
        sticky: false
    },
    centeredSlides: true,
    centerInsufficientSlides:true,
    spaceBetween: 50,
    arrows: false,
    pagination: false,
    scrollbar: false,
})