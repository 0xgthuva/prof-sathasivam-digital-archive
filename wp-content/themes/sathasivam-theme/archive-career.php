<?php
/**
 * The archive template for Career posts
 *
 * Save as: archive-career.php
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

    .career_post_archive-sagment {
        width: 100%;
    }

    .stage_career_post .archive-header {
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

    .stage_career_post .sagment-title {
        font-size: 25px;
        line-height: 1.3;
        font-weight: 400;
        margin: 28px 0 14px;
    }

    .stage_career_post p,
    .stage_career_post .events-item-meta {
        font-size: 14px;
        line-height: 1.8;
        color: #000;
    }

    .stage_career_post .archive-description,
    .stage_career_post .archive-closing-content {
        max-width: 760px;
        margin-left: auto;
        margin-right: auto;
    }

    .stage_career_post .archive-description p {
        margin-bottom: 16px;
    }

    /*
     * Career timeline: rounded horizontal cards matching the screenshot
     */
    .career-timeline-wrap {
        max-width: 760px;
        margin: 46px auto 56px;
        text-align: left;
    }

    .career-timeline {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .career-timeline-item {
        width: 100%;
        margin-bottom: 20px;
        padding: 0;
        background: #eef4f7;
        border-radius: 40px;
        overflow: hidden;
        transition: transform 0.2s ease, background 0.2s ease;
    }

    .career-timeline-item:hover {
        transform: translateY(-2px);
        background: #e7f0f4;
    }

    .career-timeline-link {
        display: flex;
        align-items: center;
        width: 100%;
        min-height: 74px;
        padding: 18px 28px;
        color: #000;
        text-decoration: none !important;
    }

    .career-timeline-link:hover,
    .career-timeline-link:focus {
        color: #000;
        text-decoration: none !important;
    }

    .career-timeline-year {
        width: 130px;
        flex: 0 0 130px;
        padding-right: 22px;
        text-align: right;
        font-size: 14px;
        line-height: 1.4;
        color: #000;
        white-space: nowrap;
    }

    .career-timeline-content {
        flex: 1;
        padding-left: 22px;
        border-left: 1px solid rgba(0, 0, 0, 0.12);
    }

    .career-timeline-title {
        display: block;
        margin: 0 0 4px;
        font-size: 15px;
        line-height: 1.25;
        font-weight: 700;
        color: #000;
    }

    .career-timeline-place {
        margin: 0;
        font-size: 14px;
        line-height: 1.45;
        color: #000;
    }

    /*
     * Archive cards
     */
    .stage_career_post .events-item-media-scoup {
        margin-top: 34px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .stage_career_post .events-item-media-scoup > div {
        float: none;
        display: flex;
        margin-bottom: 30px;
    }

    .stage_career_post .sabbi-events-item {
        width: 100%;
        height: 100%;
        background: #fff;
        padding: 26px 24px;
        border: 1px solid #eee;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.04);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .stage_career_post .sabbi-events-item:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
    }

    .stage_career_post .sabbi-events-link {
        display: block;
        text-decoration: none;
    }

    .stage_career_post .sabbi-events-title {
        color: #111;
    }

    .stage_career_post .events-item-media-scoup h3 {
        font-size: 21px;
        line-height: 1.12;
        font-weight: 700;
        margin: 0 0 18px;
    }

    .stage_career_post .events-item-meta {
        margin-top: 12px;
    }

    .stage_career_post .events-item-meta p {
        margin-bottom: 14px;
    }

    .stage_career_post .events-item-media-img {
        width: 100%;
        height: auto;
        margin-bottom: 18px;
    }

    .stage_career_post .btn.btn-unsolemn {
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

    .stage_career_post .btn.btn-unsolemn:hover {
        color: #D30015;
        text-decoration: underline;
        background: transparent;
    }

    .stage_career_post .archive-closing-content {
        margin-top: 42px;
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

        .stage_career_post .sagment-title {
            font-size: 23px;
        }

        .stage_career_post .events-item-media-scoup > div {
            width: 50%;
        }

        .career-timeline-wrap {
            max-width: 720px;
        }

        .career-timeline-link {
            padding-left: 24px;
            padding-right: 24px;
        }

        .career-timeline-year {
            width: 118px;
            flex-basis: 118px;
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

        .stage_career_post .sagment-title {
            font-size: 22px;
            line-height: 1.3;
            margin-top: 24px;
        }

        .stage_career_post p,
        .stage_career_post .events-item-meta {
            font-size: 14px;
            line-height: 1.75;
        }

        .career-timeline-wrap {
            margin-top: 36px;
            margin-bottom: 44px;
        }

        .career-timeline-item {
            border-radius: 28px;
        }

        .career-timeline-link {
            align-items: flex-start;
            min-height: auto;
            padding: 18px 20px;
        }

        .career-timeline-year {
            width: 92px;
            flex-basis: 92px;
            padding-right: 16px;
            font-size: 13px;
            text-align: right;
        }

        .career-timeline-content {
            padding-left: 16px;
        }

        .career-timeline-title {
            font-size: 14px;
        }

        .career-timeline-place {
            font-size: 13px;
        }

        .stage_career_post .events-item-media-scoup {
            margin-top: 28px;
        }

        .stage_career_post .events-item-media-scoup > div {
            width: 100%;
            margin-bottom: 22px;
        }

        .stage_career_post .sabbi-events-item {
            padding: 24px 20px;
            text-align: left;
        }

        .stage_career_post .events-item-media-scoup h3 {
            font-size: 20px;
            line-height: 1.18;
        }

        .stage_career_post .archive-closing-content {
            margin-top: 30px;
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

        .stage_career_post .sagment-title {
            font-size: 20px;
        }

        .career-timeline-item {
            border-radius: 24px;
        }

        .career-timeline-link {
            padding: 16px 16px;
        }

        .career-timeline-year {
            width: 72px;
            flex-basis: 72px;
            padding-right: 12px;
            font-size: 12px;
        }

        .career-timeline-content {
            padding-left: 12px;
        }

        .career-timeline-title {
            font-size: 13px;
        }

        .career-timeline-place {
            font-size: 12px;
        }

        .stage_career_post .sabbi-events-item {
            padding: 22px 18px;
        }

        .stage_career_post .events-item-media-scoup h3 {
            font-size: 19px;
        }
    }
</style>

<section class="sabbi-section stage_career_post stage_career_post-archive">
    <div class="container">
        <div class="career_post_archive-sagment">

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">

                    <header class="archive-header">
                        <h1 class="sabbi-events-title font-md__x">
                            Academic Career &amp; University Service of Prof. A. Sathasivam
                        </h1>

                        <div class="archive-description">
                            <p>
                                Prof. A. Sathasivam’s academic career developed across the <a href="<?php echo esc_url( home_url( '/education/university-of-ceylon-peradeniya/' ) ); ?>">University of Ceylon, Peradeniya</a>, the University of Ceylon, Colombo, the Colombo Campus and later the <a href="<?php echo esc_url( home_url( '/education/university-of-ceylon-peradeniya/' ) ); ?>">University of Peradeniya</a>. From his appointment as Assistant Lecturer in Tamil in 1952 to his later service as Professor of Tamil, his career reflects a sustained contribution to Tamil studies, linguistics, teaching and university leadership.
                            </p>

                            <p>
                                This section brings together the major appointments, departmental responsibilities and research connections that shaped his professional life. It helps readers follow his development from early university teaching to senior academic leadership, curriculum development and international scholarly engagement.
                            </p>
                        </div>
                    </header>

                </div>
            </div>

            <div class="career-timeline-wrap">
                <ul class="career-timeline">

                    <li class="career-timeline-item">
                        <a class="career-timeline-link" href="<?php echo esc_url( home_url( '/career/early-academic-career-at-peradeniya-1952-1965/' ) ); ?>">
                            <div class="career-timeline-year">1952</div>
                            <div class="career-timeline-content">
                                <strong class="career-timeline-title">
                                    Assistant Lecturer in Tamil
                                </strong>
                                <p class="career-timeline-place">
                                    University of Ceylon, Peradeniya (University of Peradeniya, Sri Lanka)
                                </p>
                            </div>
                        </a>
                    </li>

                    <li class="career-timeline-item">
                        <a class="career-timeline-link" href="<?php echo esc_url( home_url( '/career/early-academic-career-at-peradeniya-1952-1965/' ) ); ?>">
                            <div class="career-timeline-year">1956 - 1965</div>
                            <div class="career-timeline-content">
                                <strong class="career-timeline-title">
                                    Senior Lecturer in Tamil
                                </strong>
                                <p class="career-timeline-place">
                                    University of Ceylon, Peradeniya (University of Peradeniya, Sri Lanka)
                                </p>
                            </div>
                        </a>
                    </li>

                    <li class="career-timeline-item">
                        <a class="career-timeline-link" href="<?php echo esc_url( home_url( '/career/tamil-department-leadership-in-colombo-1965-1969/' ) ); ?>">
                            <div class="career-timeline-year">1965 - 1967</div>
                            <div class="career-timeline-content">
                                <strong class="career-timeline-title">
                                    Head, Department of Tamil
                                </strong>
                                <p class="career-timeline-place">
                                    University of Ceylon, Colombo (University of Colombo, Sri Lanka)
                                </p>
                            </div>
                        </a>
                    </li>

                    <li class="career-timeline-item">
                        <a class="career-timeline-link" href="<?php echo esc_url( home_url( '/career/tamil-department-leadership-in-colombo-1965-1969/' ) ); ?>">
                            <div class="career-timeline-year">1967 - 1969</div>
                            <div class="career-timeline-content">
                                <strong class="career-timeline-title">
                                    Head, Department of Tamil
                                </strong>
                                <p class="career-timeline-place">
                                    Colombo Campus, University of Ceylon.
                                </p>
                            </div>
                        </a>
                    </li>

                    <li class="career-timeline-item">
                        <a class="career-timeline-link" href="<?php echo esc_url( home_url( '/career/professor-and-head-at-colombo-campus-1970-1980/' ) ); ?>">
                            <div class="career-timeline-year">1970</div>
                            <div class="career-timeline-content">
                                <strong class="career-timeline-title">
                                    Professor of Tamil
                                </strong>
                                <p class="career-timeline-place">
                                    Colombo Campus, University of Ceylon.
                                </p>
                            </div>
                        </a>
                    </li>

                    <li class="career-timeline-item">
                        <a class="career-timeline-link" href="<?php echo esc_url( home_url( '/career/professor-and-head-at-colombo-campus-1970-1980/' ) ); ?>">
                            <div class="career-timeline-year">1970 - 1980</div>
                            <div class="career-timeline-content">
                                <strong class="career-timeline-title">
                                    Professor and Head, Department of Tamil
                                </strong>
                                <p class="career-timeline-place">
                                    Colombo Campus, University of Ceylon.
                                </p>
                            </div>
                        </a>
                    </li>

                    <li class="career-timeline-item">
                        <a class="career-timeline-link" href="<?php echo esc_url( home_url( '/career/professor-of-tamil-at-peradeniya-1981-1988/' ) ); ?>">
                            <div class="career-timeline-year">1981 - 1988</div>
                            <div class="career-timeline-content">
                                <strong class="career-timeline-title">
                                    Professor of Tamil
                                </strong>
                                <p class="career-timeline-place">
                                    University of Ceylon, Peradeniya (University of Peradeniya, Sri Lanka)
                                </p>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <h2 class="sagment-title">
                        Career Posts and Academic Milestones
                    </h2>

                    <p>
                        Browse the career pages connected to Prof. A. Sathasivam’s university appointments, Tamil department leadership, teaching work and international research activity.
                    </p>
                </div>
            </div>

            <?php
            $paged = max( 1, get_query_var( 'paged' ), get_query_var( 'page' ) );

            $career_posts = new WP_Query(
                array(
                    'post_type'      => 'career',
                    'post_status'    => 'publish',
                    'posts_per_page' => 12,
                    'paged'          => $paged,
                    'orderby'        => array(
                        'menu_order' => 'ASC',
                        'date'       => 'ASC',
                    ),
                )
            );
            ?>

            <?php if ( $career_posts->have_posts() ) : ?>

                <div class="row events-item-media-scoup">

                    <?php
                    while ( $career_posts->have_posts() ) :
                        $career_posts->the_post();
                    ?>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <article id="post-<?php the_ID(); ?>" <?php post_class( 'sabbi-events-item sabbi-career-item' ); ?>>

                                <a href="<?php the_permalink(); ?>" class="sabbi-events-link">

                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <figure>
                                            <?php
                                            the_post_thumbnail(
                                                'academix-event-gallery-thumb',
                                                array(
                                                    'class' => 'img-responsive events-item-media-img',
                                                )
                                            );
                                            ?>
                                        </figure>
                                    <?php endif; ?>

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
                        $big = 999999999;

                        echo paginate_links(
                            array(
                                'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format'    => '?paged=%#%',
                                'current'   => $paged,
                                'total'     => $career_posts->max_num_pages,
                                'mid_size'  => 2,
                                'prev_text' => esc_html__( 'Previous', 'academix' ),
                                'next_text' => esc_html__( 'Next', 'academix' ),
                            )
                        );
                        ?>
                    </div>
                </div>

                <?php wp_reset_postdata(); ?>

            <?php else : ?>

                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <p><?php esc_html_e( 'No career records found.', 'academix' ); ?></p>
                    </div>
                </div>

            <?php endif; ?>

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <div class="archive-closing-content">
                        <p>
                            Together, these appointments show the development of Prof. Sathasivam’s academic life: early teaching at Peradeniya, leadership in Colombo, senior professorial service and international research engagement. This career archive connects his institutional work with his wider contribution to Tamil grammar, lexicography, Dravidian linguistics and Sumero–Dravidian studies.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
get_footer();
