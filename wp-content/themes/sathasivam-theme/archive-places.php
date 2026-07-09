<?php
/**
 * The archive template for Places posts
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

<section class="sabbi-section stage_places_post stage_places_post-archive">
    <div class="container">
        <div class="places_post_archive-sagment">

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">

                    <header class="archive-header">
                        <h1 class="sabbi-events-title font-md__x">
                            Places Connected to Prof. A. Sathasivam
                        </h1>

                        <div class="archive-description">
                            <p>
                                Prof. A. Sathasivam’s life and scholarship were shaped by several important places across Sri Lanka and the wider academic world. His journey began in Araly South, Jaffna, continued through Colombo and Peradeniya, and later extended to major international centres of learning such as Oxford, Philadelphia, Berkeley, Thanjavur and Tokyo.
                            </p>

                            <p>
                                This section presents the geographic places connected to his life, education, teaching and research. While the education section focuses on schools and universities, this places section highlights the towns, cities and regions that formed the wider setting of his personal and academic journey.
                            </p>
                        </div>
                    </header>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <h2 class="sagment-title">
                        Towns, Cities and Regions in His Journey
                    </h2>

                    <p>
                        Browse the places connected to Prof. A. Sathasivam’s birth, education, academic appointments and international research activity.
                    </p>
                </div>
            </div>

            <?php if ( have_posts() ) : ?>

                <div class="row events-item-media-scoup">

                    <?php
                    while ( have_posts() ) :
                        the_post();
                    ?>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <article id="post-<?php the_ID(); ?>" <?php post_class( 'sabbi-events-item sabbi-places-item' ); ?>>

                                <a href="<?php the_permalink(); ?>" class="sabbi-events-link">
                                    <h3 class="sabbi-events-title">
                                        <?php the_title(); ?>
                                    </h3>
                                </a>

                                <div class="events-item-meta">
                                    <?php
                                    if ( has_excerpt() ) {
                                        the_excerpt();
                                    } else {
                                        echo wp_kses_post(
                                            wpautop(
                                                wp_trim_words(
                                                    get_the_content(),
                                                    22,
                                                    '...'
                                                )
                                            )
                                        );
                                    }
                                    ?>
                                </div>

                                <a href="<?php the_permalink(); ?>" class="btn btn-unsolemn">
                                    <?php esc_html_e( 'Read More', 'academix' ); ?>
                                </a>

                            </article>
                        </div>

                    <?php endwhile; ?>

                </div>

                <div class="row">
                    <div class="col-sm-12 text-center">
                        <?php
                        the_posts_pagination(
                            array(
                                'mid_size'  => 2,
                                'prev_text' => esc_html__( 'Previous', 'academix' ),
                                'next_text' => esc_html__( 'Next', 'academix' ),
                            )
                        );
                        ?>
                    </div>
                </div>

            <?php else : ?>

                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <p><?php esc_html_e( 'No places found.', 'academix' ); ?></p>
                    </div>
                </div>

            <?php endif; ?>

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <div class="archive-closing-content">
                        <p>
                            These places help map the intellectual geography of Prof. Sathasivam’s life. From Jaffna’s Tamil educational tradition to international research centres in Britain, the United States, India and Japan, each location adds context to his work as a Tamil linguist, professor and pioneer of Sumero–Dravidian studies.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
get_footer();