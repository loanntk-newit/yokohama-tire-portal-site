<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * @package Blogdu
 */
get_header(); ?>
<main id="content" class="min-h-screen">
    <!--container-->
    <div class="container mt-5">
        <!--row-->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 slideInDown animated">
                <h4 class="title text-center">
                    <?php pll_e('Home Introduction'); ?>
                </h4>
                <p class="text-center"><?php pll_e('Home Memo'); ?></p>
            </div>
            <div class="col-md-12 col-lg-10 mt-5">
                <div id="grid" class="row  animated">
                    <?php
                    $args = array(
                        'type'      => 'post',
                        'number'    => 10,
                        'parent'    => 0,
                        'orderby'   => 'cat_ID',
                        'order'     => 'DESC',
                    );
                    $categories = get_categories($args);
                    foreach ($categories as $key => $category) {
                        if ($category->slug != 'all-item' && $category->slug != 'all-item-jp') { ?>
                            <div class="col-md-6">
                                <div class="bs-blog-post home-categories">
                                    <a href="<?php echo esc_url(home_url("/category/$category->slug")) ?>" alt="View all posts in <?php echo $category->name; ?>">
                                        <article class="small">
                                            <div class="bs-blog-category">
                                                <div class="bs-blog-category">
                                                    <span class="blogus-categories category-color-<?php echo ($key + 1); ?>">
                                                        <?php echo $category->name; ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <p><?php echo $category->description; ?></p>
                                        </article>
                                    </a>
                                </div>
                            </div>

                    <?php }
                    } ?>

                </div>
            </div>

        </div><!--/row-->
    </div><!--/container-->
</main>
<?php
get_footer();
?>