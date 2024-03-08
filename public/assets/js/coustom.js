var swiper = new Swiper(".heroslider", {
    pagination: {
        el: ".swiper-pagination",
    },
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
});

// ===========Product-slider=========

var swiper = new Swiper(".sellProduct", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1280: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
    },
});

// ============New product load more==============
$(function () {
    $(".new-product").slice(0, 4).show();
    $("body").on('click touchstart', '.load-more', function (e) {
        e.preventDefault();
        $(".new-product:hidden").slice(0, 4).slideDown();
        if ($(".new-product:hidden").length == 0) {
            $(".load-more").css('visibility', 'hidden');
        }
        // $('html,body').animate({
        //     scrollTop: $(this).offset().top
        // }, 500);
    });
});
// ============New product load more==============
$(function () {
    $(".toprated").slice(0, 4).show();
    $("body").on('click touchstart', '.topretedProload', function (e) {
        e.preventDefault();
        $(".toprated:hidden").slice(0, 4).slideDown();
        if ($(".toprated:hidden").length == 0) {
            $(".topretedProload").css('visibility', 'hidden');
        }
        // $('html,body').animate({
        //     scrollTop: $(this).offset().top
        // }, 500);
    });
});


jQuery(function ($) {
    $('.menu-btn').click(function () {
        $('.dropdown').toggleClass('expand')
    })
})


// =============password-hode-show==========
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}


// ====================product-slider============
var swiper = new Swiper(".product_slider", {
    cssMode: true,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
    },
    mousewheel: true,
    keyboard: true,
});


// =============Blog-slider==========
var swiper = new Swiper(".blogSwiper", {
    slidesPerView: 3,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
});
// ===============Offer-slider=============
var swiper = new Swiper(".offer-slider", {
    pagination: {
        el: ".swiper-pagination",
    },
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
});
// ================Modal==================
window.onload = function () {
    const modal = document.getElementById('modal');
    const closeButton = document.getElementById('button');

    // Function to open the modal
    function openModal() {
        modal.style.display = 'block';
    }

    // Function to close the modal
    function closeModal() {
        modal.style.display = 'none';
    }

    // Event listener to open the modal when needed
    openModal();

    // Event listener to close the modal when the close button is clicked
    closeButton.onclick = closeModal;

    // Event listener to close the modal when clicking anywhere outside of it
    window.addEventListener('click', function (event) {
        if (event.target === modal) {
            closeModal();
        }
    });
};
