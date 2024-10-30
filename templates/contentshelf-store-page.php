<?php get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <section id="store">

            <header id="header">

                <div id="header-inner">

                    <!-- Content Shelf code. Please do not remove this line otherwise your Content Shelf shopping cart will not work properly. -->
                    <?php echo do_shortcode('[contentshelf_store_page]'); ?>

                    <!-- Content Shelf code end -->
                </div><!-- #header-inner -->
            </header>
        </section>
    </main>
</div><!-- #main-content -->
<?php get_footer(); ?>
