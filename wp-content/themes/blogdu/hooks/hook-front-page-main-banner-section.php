<?php
if (!function_exists('blogdu_front_page_banner_section')) :
    /**
     *
     * @since blogdu
     *
     */
    function blogdu_front_page_banner_section()
    {
        if (is_front_page() || is_home()) {
            $blogus_enable_main_slider = get_theme_mod('show_main_news_section', 1);
            if ($blogus_enable_main_slider) : ?>
                <div class="col-12 cc">
                    <div class="homemain bs swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="bs-slide two back-img" style="background-image: url('http://localhost:8888/yokohama-tire-portal-site/wp-content/uploads/2022/11/blog2.webp');">
                                    <div class="inner">
                                        <h4 class="title">
                                            <?php pll_e('Slider 1'); ?>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bs-slide two back-img" style="background-image: url('http://localhost:8888/yokohama-tire-portal-site/wp-content/uploads/2022/11/blog3.webp');">
                                    <div class="inner">
                                        <h4 class="title">
                                            <?php pll_e('Slider 2'); ?>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bs-slide two back-img" style="background-image: url('http://localhost:8888/yokohama-tire-portal-site/wp-content/uploads/2020/01/blog5.webp');">
                                    <div class="inner">
                                        <h4 class="title">
                                            <?php pll_e('Slider 3'); ?>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <!--==/ Home Slider ==-->
            <?php endif; ?>
            <!-- end slider-section -->
<?php }
    }
endif;
add_action('blogdu_action_front_page_main_section_1', 'blogdu_front_page_banner_section', 40); ?>