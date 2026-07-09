<?php
/**
 * The template for displaying single Places posts
 *
 * @package academix
 */

get_header();
?>

<?php
global $academix_options;
?>

<style>
    .stage_places_post,
    .stage_education_post {
        padding-top: 160px;
        padding-bottom: 70px;
        background: #fff;
    }

    .stage_places_post .container,
    .stage_education_post .container {
        max-width: 1140px;
        width: 100%;
    }

    .places_post_archive-sagment,
    .education_post_archive-sagment,
    .places_post_single-sagment,
    .education_post_single-sagment {
        width: 100%;
    }

    .stage_places_post .archive-header,
    .stage_education_post .archive-header,
    .stage_places_post .places-single-header,
    .stage_education_post .education-single-header {
        margin-bottom: 34px;
    }

    .stage_places_post h1,
    .stage_education_post h1,
    .stage_places_post h2,
    .stage_education_post h2,
    .stage_places_post h3,
    .stage_education_post h3 {
        font-family: Arial, Helvetica, sans-serif;
        color: #111;
    }

    .stage_places_post h1,
    .stage_education_post h1 {
        font-size: 34px;
        line-height: 1.22;
        font-weight: 700;
        margin: 0 0 22px;
    }

    .stage_places_post .sagment-title,
    .stage_education_post .sagment-title {
        font-size: 25px;
        line-height: 1.3;
        font-weight: 400;
        margin: 28px 0 14px;
    }

    .stage_places_post p,
    .stage_education_post p,
    .stage_places_post .events-item-meta,
    .stage_education_post .events-item-meta {
        font-size: 14px;
        line-height: 1.8;
        color: #000;
    }

    .stage_places_post .archive-description,
    .stage_education_post .archive-description,
    .stage_places_post .archive-closing-content,
    .stage_education_post .archive-closing-content,
    .stage_places_post-single .events-item-meta,
    .stage_education_post-single .events-item-meta {
        max-width: 760px;
        margin-left: auto;
        margin-right: auto;
    }

    .stage_places_post .archive-description p,
    .stage_education_post .archive-description p {
        margin-bottom: 16px;
    }

    .stage_places_post .events-item-media-scoup,
    .stage_education_post .events-item-media-scoup {
        margin-top: 34px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .stage_places_post .events-item-media-scoup > div,
    .stage_education_post .events-item-media-scoup > div {
        float: none;
        display: flex;
        margin-bottom: 30px;
    }

    .stage_places_post .sabbi-events-item,
    .stage_education_post .sabbi-events-item {
        width: 100%;
        height: 100%;
        background: #fff;
        padding: 26px 24px;
        border: 1px solid #eee;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.04);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .stage_places_post .sabbi-events-item:hover,
    .stage_education_post .sabbi-events-item:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
    }

    .stage_places_post-single .sabbi-events-item,
    .stage_education_post-single .sabbi-events-item {
        border: 0;
        box-shadow: none;
        padding: 0;
    }

    .stage_places_post-single .sabbi-events-item:hover,
    .stage_education_post-single .sabbi-events-item:hover {
        transform: none;
        box-shadow: none;
    }

    .stage_places_post .sabbi-events-link,
    .stage_education_post .sabbi-events-link {
        display: block;
        text-decoration: none;
    }

    .stage_places_post .sabbi-events-title,
    .stage_education_post .sabbi-events-title {
        color: #111;
    }

    .stage_places_post .events-item-media-scoup h3,
    .stage_education_post .events-item-media-scoup h3 {
        font-size: 21px;
        line-height: 1.12;
        font-weight: 700;
        margin: 0 0 18px;
    }

    .stage_places_post .events-item-meta,
    .stage_education_post .events-item-meta {
        margin-top: 12px;
    }

    .stage_places_post .events-item-meta p,
    .stage_education_post .events-item-meta p {
        margin-bottom: 14px;
    }

    .stage_education_post .events-item-media-img {
        width: 100%;
        height: auto;
        margin-bottom: 18px;
    }

    .stage_places_post .btn.btn-unsolemn,
    .stage_education_post .btn.btn-unsolemn {
        display: inline-block;
        margin-top: 8px;
        padding: 0;
        border: 0;
        background: transparent;
        color: #D30015;
        font-size: 12px;
        line-height: 1.4;
        font-weight: 700;
        text-transform: none;
        text-decoration: none;
    }

    .stage_places_post .btn.btn-unsolemn:hover,
    .stage_education_post .btn.btn-unsolemn:hover {
        color: #D30015;
        text-decoration: underline;
        background: transparent;
    }

    .stage_places_post .archive-closing-content,
    .stage_education_post .archive-closing-content {
        margin-top: 42px;
    }

    .stage_places_post-single .events-item-meta,
    .stage_education_post-single .events-item-meta {
        text-align: left;
    }

    .stage_places_post-single .places-single-header,
    .stage_education_post-single .education-single-header {
        text-align: center;
    }

    .stage_places_post-single .events-item-meta img,
    .stage_education_post-single .events-item-meta img {
        max-width: 100%;
        height: auto;
    }

    .stage_places_post-single .events-item-meta h2,
    .stage_education_post-single .events-item-meta h2 {
        font-size: 25px;
        line-height: 1.35;
        margin-top: 32px;
        margin-bottom: 14px;
    }

    .stage_places_post-single .events-item-meta h3,
    .stage_education_post-single .events-item-meta h3 {
        font-size: 21px;
        line-height: 1.35;
        margin-top: 28px;
        margin-bottom: 12px;
    }

    .stage_places_post-single .events-item-meta ul,
    .stage_education_post-single .events-item-meta ul,
    .stage_places_post-single .events-item-meta ol,
    .stage_education_post-single .events-item-meta ol {
        margin-left: 22px;
        margin-bottom: 20px;
        line-height: 1.8;
    }

    @media (max-width: 1199px) {
        .stage_places_post,
        .stage_education_post {
            padding-top: 150px;
        }

        .stage_places_post .container,
        .stage_education_post .container {
            max-width: 960px;
        }
    }

    @media (max-width: 991px) {
        .stage_places_post,
        .stage_education_post {
            padding-top: 140px;
            padding-bottom: 58px;
        }

        .stage_places_post h1,
        .stage_education_post h1 {
            font-size: 30px;
        }

        .stage_places_post .sagment-title,
        .stage_education_post .sagment-title {
            font-size: 23px;
        }

        .stage_places_post .events-item-media-scoup > div,
        .stage_education_post .events-item-media-scoup > div {
            width: 50%;
        }
    }

    @media (max-width: 767px) {
        .stage_places_post,
        .stage_education_post {
            padding-top: 125px;
            padding-bottom: 48px;
        }

        .stage_places_post .container,
        .stage_education_post .container {
            padding-left: 22px;
            padding-right: 22px;
        }

        .stage_places_post h1,
        .stage_education_post h1 {
            font-size: 26px;
            line-height: 1.25;
            margin-bottom: 18px;
        }

        .stage_places_post .sagment-title,
        .stage_education_post .sagment-title {
            font-size: 22px;
            line-height: 1.3;
            margin-top: 24px;
        }

        .stage_places_post p,
        .stage_education_post p,
        .stage_places_post .events-item-meta,
        .stage_education_post .events-item-meta {
            font-size: 14px;
            line-height: 1.75;
        }

        .stage_places_post .events-item-media-scoup,
        .stage_education_post .events-item-media-scoup {
            margin-top: 28px;
        }

        .stage_places_post .events-item-media-scoup > div,
        .stage_education_post .events-item-media-scoup > div {
            width: 100%;
            margin-bottom: 22px;
        }

        .stage_places_post .sabbi-events-item,
        .stage_education_post .sabbi-events-item {
            padding: 24px 20px;
            text-align: left;
        }

        .stage_places_post .events-item-media-scoup h3,
        .stage_education_post .events-item-media-scoup h3 {
            font-size: 20px;
            line-height: 1.18;
        }

        .stage_places_post .archive-closing-content,
        .stage_education_post .archive-closing-content {
            margin-top: 30px;
        }

        .stage_places_post-single .events-item-meta,
        .stage_education_post-single .events-item-meta {
            text-align: left;
        }
    }

    @media (max-width: 480px) {
        .stage_places_post,
        .stage_education_post {
            padding-top: 115px;
        }

        .stage_places_post .container,
        .stage_education_post .container {
            padding-left: 18px;
            padding-right: 18px;
        }

        .stage_places_post h1,
        .stage_education_post h1 {
            font-size: 24px;
        }

        .stage_places_post .sagment-title,
        .stage_education_post .sagment-title {
            font-size: 20px;
        }

        .stage_places_post .sabbi-events-item,
        .stage_education_post .sabbi-events-item {
            padding: 22px 18px;
        }

        .stage_places_post .events-item-media-scoup h3,
        .stage_education_post .events-item-media-scoup h3 {
            font-size: 19px;
        }
    }
</style>

<?php
while ( have_posts() ) :
    the_post();
?>

<section class="sabbi-section stage_places_post stage_places_post-single">
    <div class="container">
        <div class="places_post_single-sagment">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'sabbi-events-item sabbi-places-item' ); ?>>

                        <header class="places-single-header">
                            <h1 class="sabbi-events-title font-md__x">
                                <?php the_title(); ?>
                            </h1>
                        </header>

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