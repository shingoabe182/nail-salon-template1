document.addEventListener('DOMContentLoaded', function() {
    // ハンバーガーメニュー
    const hamburger = document.getElementById('js-hamburger');
    const nav = document.getElementById('js-nav');

    if (hamburger && nav) {
        hamburger.addEventListener('click', function() {
            hamburger.classList.toggle('is-active');
            nav.classList.toggle('is-active');
        });
    }

    // Swiperスライダー
    const swiper = new Swiper('.swiper-container', {
        // パラメータ設定
        loop: true,
        speed: 800,
        autoplay: {
            delay: 5000, // 5秒ごとに自動再生
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        // レスポンシブ設定
        breakpoints: {
            // 320px以上の場合
            320: {
              slidesPerView: 2,
              slidesPerGroup: 2,
              spaceBetween: 20
            },
            // 768px以上の場合
            768: {
              slidesPerView: 4,
              slidesPerGroup: 4,
              spaceBetween: 30
            }
        }
    });
});
