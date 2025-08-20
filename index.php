<?php get_header(); ?>

    <main>
        <section id="hero">
            <div class="hero-image">
                <!-- メインビジュアル画像 -->
            </div>
            <div class="hero-message">
                <h2>The nail salon</h2>
                <p>毎日がもっと輝く、特別なネイル体験を。</p>
            </div>
        </section>

        <section id="concept" class="section">
            <h2 class="section-title">Concept</h2>
            <div class="concept-container">
                <div class="concept-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/concept-photo.jpg" alt="サロンのコンセプト画像">
                </div>
                <div class="concept-text">
                    <h3>あなただけの特別な時間を、指先から。</h3>
                    <p>
                        当サロンでは、お客様一人ひとりの爪の健康を第一に考え、丁寧なカウンセリングと施術を心がけています。<br>
                        日常を忘れさせるような落ち着いた空間で、心からリラックスできるひとときをお過ごしください。<br>
                        最新のデザインから、オフィス向けのシンプルなデザインまで、あなたの「なりたい」を叶えます。
                    </p>
                </div>
            </div>
        </section>

        <section id="news" class="section">
            <h2 class="section-title">News</h2>
            <ul class="news-list">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5, // 5件表示
                );
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>
                <li class="news-item">
                    <a href="<?php the_permalink(); ?>">
                        <span class="news-date"><?php the_time('Y.m.d'); ?></span>
                        <span class="news-title"><?php the_title(); ?></span>
                    </a>
                </li>
                <?php
                    endwhile;
                else:
                ?>
                    <p>お知らせはまだありません。</p>
                <?php
                endif;
                wp_reset_postdata();
                ?>
            </ul>
        </section>

        <section id="menu" class="section">
            <h2 class="section-title">Menu & Price</h2>
            <div class="menu-grid">
                <div class="menu-card">
                    <h3 class="menu-card-title">ハンドケアコース</h3>
                    <p class="menu-card-description">爪の形を整え、甘皮処理、表面磨きで健康的な自爪に導きます。</p>
                    <p class="menu-card-price">¥4,000</p>
                </div>
                <div class="menu-card">
                    <h3 class="menu-card-title">ワンカラー</h3>
                    <p class="menu-card-description">お好きなカラー1色を爪全体に。オフィスネイルにもおすすめです。</p>
                    <p class="menu-card-price">¥6,000</p>
                </div>
                <div class="menu-card">
                    <h3 class="menu-card-title">デザインコース</h3>
                    <p class="menu-card-description">フレンチ、グラデーションなど、お好きなデザインを施します。</p>
                    <p class="menu-card-price">¥8,000〜</p>
                </div>
                <div class="menu-card">
                    <h3 class="menu-card-title">ネイルオフ</h3>
                    <p class="menu-card-description">ジェルネイルの付け替えや、自爪に戻す際のオフのみのメニューです。</p>
                    <p class="menu-card-price">¥2,000</p>
                </div>
            </div>
        </section>

        <section id="gallery" class="section">
            <h2 class="section-title">Gallery</h2>
            <!-- Slider main container -->
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery-01.jpg" alt="ネイルデザイン 1"></div>
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery-02.jpg" alt="ネイルデザイン 2"></div>
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery-03.jpg" alt="ネイルデザイン 3"></div>
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery-04.jpg" alt="ネイルデザイン 4"></div>
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery-05.jpg" alt="ネイルデザイン 5"></div>
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery-06.jpg" alt="ネイルデザイン 6"></div>
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery-07.jpg" alt="ネイルデザイン 7"></div>
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/gallery-08.jpg" alt="ネイルデザイン 8"></div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>

        <section id="access" class="section">
            <h2 class="section-title">Access</h2>
            <div class="access-container">
                <div class="map-container">
                    <iframe src="https://maps.google.com/maps?q=%E6%9D%B1%E4%BA%AC%E9%A7%85&t=&z=15&ie=UTF8&iwloc=&output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="access-info">
                    <p class="salon-name">Nail Salon Template</p>
                    <p>〒100-0005 東京都千代田区丸の内１丁目<br>
                        JR「東京駅」丸の内中央口より徒歩1分</p>
                    <p><strong>営業時間:</strong> 10:00〜20:00<br>
                        <strong>定休日:</strong> 火曜日</p>
                </div>
            </div>
        </section>

        <section id="contact" class="section">
            <h2 class="section-title">Reserve</h2>
            <p class="contact-message">お電話、または以下のボタンからご予約いただけます。<br>お気軽にお問い合わせください。</p>
            <a href="#" class="cta-button">オンラインで予約する</a>
        </section>
    </main>

<?php get_footer(); ?>