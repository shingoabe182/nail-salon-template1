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
        speed: 600, // アニメーション速度を調整
        autoplay: {
            delay: 4000, // 自動再生の間隔を調整
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
              slidesPerGroup: 1, // 1枚ずつスライド
              spaceBetween: 20
            },
            // 768px以上の場合
            768: {
              slidesPerView: 4,
              slidesPerGroup: 1, // 1枚ずつスライド
              spaceBetween: 30
            }
        }
    });
});
