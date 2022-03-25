<?php get_header(); ?>
    <main>
        <div class="main_visual">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main-visual1.png" alt="トップ画像" class="main_visual__img1 main_visual_pc">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main-visual2.png" alt="トップ画像" class="main_visual__img2 main_visual_pc">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main-visual1sp.png" alt="トップ画像" class="main_visual__img1_sp main_visual_sp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main-visual2sp.png" alt="トップ画像" class="main_visual__img2_sp main_visual_sp">
            <div class="main_catch">
                <div class="main_catch__jp">
                    ”あなたらしさ”<span class="wo">を</span><br>
                    応援したい
                </div>
                <div class="main_catch__en">
                    We want to support your personality
                </div>
            </div>
            <div class="main_catch"></div>
        </div>
        <section class="top-about" id="about">
            <div class="_container">
                <div class="sec-title sec-title_about">
                    <h1 class="sec-title__en">ABOUT</h1>
                    <h1 class="sec-title__jp">Bifreeについて</h1>
                </div>
                <div class="top-about_us">
                    <p class="_justify">
                        合同会社Bifreeは2021年2月22日、LGBTQ当事者とその理解者・支援者であるアライの人々により結成された任意団体が母体です。メンバーも日本人のみならず、海外から参加をしてくれる…そんなインターナショナルな組織へと変貌も遂げました。<br>事業を展開する中で更に多くのLGBTQ当事者に限らない人々を巻き込み、全ての人がその人らしく生きていける、そんな世界を目指してこの先も邁進していきます。
                    </p>
                </div>
                <div class="readmore__btn">
                    READ MORE
                </div>
                <div class="contact-btn">
                    新メンバー募集のお知らせ
                </div>
            </div>
        </section>
        <section class="top-service" id="service">
            <div class="_container">
                <div class="sec-title sec-title_about">
                    <h1 class="sec-title__en">SERVICE</h1>
                    <h1 class="sec-title__jp">事業内容</h1>
                </div>
                <ul class="top-service_list">
                    <li class="top-service_list_item top-service__list_web">
                        <div class="top-service__list_text">
                            <div class="top-service__list_top">
                                <h3 class="top-service__list_number">
                                    #01
                                </h3>
                            </div>
                            <p class="_justify">
                                LGBTQ当事者の雇用をもっと促進したい…その為のきっかけとなるべく始めたこの事業は、今やBifreeの根幹を大きく担っています。クライアントからのヒアリングを重視し、それを黙々と形にする、地味ですがとてもやりがいのある業務です。個人でなく、組織で行っているからこそのスピード感と、柔軟性は日々磨きをかけているところです。
                            </p>
                        </div>
                    </li>
                    <li class="top-service_list_item top-service__list_media">
                        <div class="top-service__list_text">
                            <div class="top-service__list_top">
                                <h3 class="top-service__list_number">
                                    #02
                                </h3>
                            </div>
                            <p class="_justify">
                                登録者数600人に迫る「じゃらんじゃらんちゃんねる」ではLGBTQ当事者へのインタビューをメインに行っており、「LGBTQ当事者はどこにでもいる、当たり前の存在なんだ」とみなさまに知っていただくきっかけ作りを行っています。RPAの技術やPremiere
                                Proを使っての編集がメインです。現状、動画制作の受託案件は承っておりません。
                            </p>
                        </div>
                    </li>
                    <li class="top-service_list_item service__list_edu">
                        <div class="top-service__list_text">
                            <div class="top-service__list_top">
                                <h3 class="top-service__list_number">
                                    #03
                                </h3>
                            </div>
                            <p class="_justify">
                                Bifreeでは活動で得た収益の一部を、毎月LGBTQ関係の支援団体様へ寄付しております。他、ニーズがあれば当事者による講演会や勉強会・その出演も承っておりますのでお声掛けください。これから先、更に多くの人に「特別な存在でないこと」を発信していければと考えております。
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="top-article" id="article">
            <div class="sec-title">
                <h1 class="sec-title__en">
                    ARTICLE
                </h1>
                <p class="sec-title__jp">
                    新着記事
                </p>
            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php
                    $args = array (
                        'posts_per_page' => 4
                    );
                    $posts = get_posts($args);
                    foreach ($posts as $post):
                    setup_postdata( $post );
                    ?>
                    <div class="swiper-slide">
                        <a href="<?php the_permalink(); ?>">
                            <div class="article_thumnail">
                                <?php the_post_thumbnail( 'medium' ); ?>
                            </div>
                            <div class="article_body">
                                <div class="article_body_title">
                                    <?php the_title();?>
                                </div>
                                <div class="article_body_time">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/time.png" alt="" class="article_body_time_img">
                                    <time class="article_body_time_day"><?php echo get_the_date('Y.n.j'); ?></time>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                        endforeach;
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
        </section>
        <section class="top-contact" id="contact">
            <div class="sec-title sec-title_contact">
                <h1 class="sec-title__en">
                    CONTACT
                </h1>
                <h1 class="sec-title__jp">
                    お問い合わせ
                </h1>
            </div>
            <div class="_container">
                <p class="_center">仕事依頼、ご質問・ご相談など、<br class="sp-block">お気軽にお問合せください。</p>
                <div class="top-form">
                    <?php echo do_shortcode('[contact-form-7 id="11" title="form"]');?>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>