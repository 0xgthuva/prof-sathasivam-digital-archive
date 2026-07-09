<?php
/**
 * The template for displaying single Career posts
 *
 * Save as: single-career.php
 * CPT slug/post_type: career
 *
 * @package academix
 */

get_header();
?>

<?php
global $academix_options;
?>

<style>
    .stage_career_post {
        padding-top: 160px;
        padding-bottom: 70px;
        background: #fff;
    }

    .stage_career_post .container {
        max-width: 1140px;
        width: 100%;
    }

    .career_post_single-sagment {
        width: 100%;
    }

    .stage_career_post .career-single-header {
        margin-bottom: 34px;
    }

    .stage_career_post h1,
    .stage_career_post h2,
    .stage_career_post h3 {
        font-family: Arial, Helvetica, sans-serif;
        color: #111;
    }

    .stage_career_post h1 {
        font-size: 34px;
        line-height: 1.22;
        font-weight: 700;
        margin: 0 0 22px;
    }

    .stage_career_post p,
    .stage_career_post .events-item-meta {
        font-size: 14px;
        line-height: 1.8;
        color: #000;
    }

    .stage_career_post-single .events-item-meta {
        max-width: 760px;
        margin-left: auto;
        margin-right: auto;
        text-align: left;
    }

    .stage_career_post-single .career-single-header {
        text-align: center;
    }

    .stage_career_post-single .sabbi-events-item {
        border: 0;
        box-shadow: none;
        padding: 0;
        width: 100%;
        height: 100%;
        background: #fff;
    }

    .stage_career_post-single .sabbi-events-item:hover {
        transform: none;
        box-shadow: none;
    }

    .stage_career_post .sabbi-events-title {
        color: #111;
    }

    .sabbi-career-featured-image {
        max-width: 760px;
        margin: 0 auto 28px;
    }

    .stage_career_post .sabbi-events-img {
        width: 100%;
        height: auto;
    }

    .stage_career_post-single .events-item-meta img {
        max-width: 100%;
        height: auto;
    }

    .stage_career_post-single .events-item-meta h2 {
        font-size: 25px;
        line-height: 1.35;
        margin-top: 32px;
        margin-bottom: 14px;
    }

    .stage_career_post-single .events-item-meta h3 {
        font-size: 21px;
        line-height: 1.35;
        margin-top: 28px;
        margin-bottom: 12px;
    }

    .stage_career_post-single .events-item-meta ul,
    .stage_career_post-single .events-item-meta ol {
        margin-left: 22px;
        margin-bottom: 20px;
        line-height: 1.8;
    }

    @media (max-width: 1199px) {
        .stage_career_post {
            padding-top: 150px;
        }

        .stage_career_post .container {
            max-width: 960px;
        }
    }

    @media (max-width: 991px) {
        .stage_career_post {
            padding-top: 140px;
            padding-bottom: 58px;
        }

        .stage_career_post h1 {
            font-size: 30px;
        }
    }

    @media (max-width: 767px) {
        .stage_career_post {
            padding-top: 125px;
            padding-bottom: 48px;
        }

        .stage_career_post .container {
            padding-left: 22px;
            padding-right: 22px;
        }

        .stage_career_post h1 {
            font-size: 26px;
            line-height: 1.25;
            margin-bottom: 18px;
        }

        .stage_career_post p,
        .stage_career_post .events-item-meta {
            font-size: 14px;
            line-height: 1.75;
        }

        .stage_career_post-single .events-item-meta {
            text-align: left;
        }
    }

    @media (max-width: 480px) {
        .stage_career_post {
            padding-top: 115px;
        }

        .stage_career_post .container {
            padding-left: 18px;
            padding-right: 18px;
        }

        .stage_career_post h1 {
            font-size: 24px;
        }
    }
</style>

<?php
while ( have_posts() ) :
    the_post();
?>

<section class="sabbi-section stage_career_post stage_career_post-single">
    <div class="container">
        <div class="career_post_single-sagment">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'sabbi-events-item sabbi-career-item' ); ?>>

                        <header class="career-single-header">
                            <h1 class="sabbi-events-title font-md__x">
                                <?php the_title(); ?>
                            </h1>
                        </header>

                        <?php if ( has_post_thumbnail() ) : ?>
                            <figure class="sabbi-career-featured-image">
                                <?php
                                the_post_thumbnail(
                                    'full',
                                    array(
                                        'class' => 'sabbi-events-img img-responsive',
                                    )
                                );
                                ?>
                            </figure>
                        <?php endif; ?>

                        <div class="events-item-meta">
                            <?php the_content(); ?>

                            <?php
                            wp_link_pages(
                                array(
                                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'academix' ),
                                    'after'  => '</div>',
                                )
                            );
                            ?>
                        </div>

                    </article>

                </div>
            </div>
        </div>
    </div>
</section>

<?php
endwhile;

get_footer();
