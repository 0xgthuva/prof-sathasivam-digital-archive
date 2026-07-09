<?php
/**
 * The archive template for Education posts
 *
 * @package academix
 */

get_header();
?>

<?php
global $academix_options;
?>

<style>
    .stage_education_post {
        padding-top: 160px;
        padding-bottom: 70px;
        background: #fff;
    }

    .stage_education_post .container {
        max-width: 1140px;
        width: 100%;
    }

    .education_post_archive-sagment {
        width: 100%;
    }

    .stage_education_post .archive-header {
        margin-bottom: 34px;
    }

    .stage_education_post h1,
    .stage_education_post h2,
    .stage_education_post h3 {
        font-family: Arial, Helvetica, sans-serif;
        color: #111;
    }

    .stage_education_post h1 {
        font-size: 34px;
        line-height: 1.22;
        font-weight: 700;
        margin: 0 0 22px;
    }

    .stage_education_post .sagment-title {
        font-size: 25px;
        line-height: 1.3;
        font-weight: 400;
        margin: 28px 0 14px;
    }

    .stage_education_post p,
    .stage_education_post .events-item-meta {
        font-size: 14px;
        line-height: 1.8;
        color: #000;
    }

    .stage_education_post .archive-description,
    .stage_education_post .archive-closing-content {
        max-width: 760px;
        margin-left: auto;
        margin-right: auto;
    }

    .stage_education_post .archive-description p {
        margin-bottom: 16px;
    }

    /*
     * Education timeline tree
     */
    .education-timeline-wrap {
        max-width: 760px;
        margin: 46px auto 56px;
        text-align: left;
    }

    .education-timeline {
        position: relative;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .education-timeline:before {
        content: "";
        position: absolute;
        top: 8px;
        bottom: 8px;
        left: 118px;
        width: 6px;
        background: #f1f1f1;
        border-radius: 6px;
    }

    .education-timeline-item {
        position: relative;
        display: flex;
        align-items: flex-start;
        gap: 34px;
        margin-bottom: 28px;
    }

    .education-timeline-card-link {
        position: absolute;
        top: -10px;
        right: -12px;
        bottom: -10px;
        left: -12px;
        z-index: 1;
        border-radius: 12px;
        text-decoration: none;
    }

    .education-timeline-card-link:focus {
        outline: 2px solid #111;
        outline-offset: 4px;
    }

    .education-timeline-item:hover .education-timeline-title {
        text-decoration: underline;
    }

    .education-timeline-year,
    .education-timeline-dot,
    .education-timeline-content {
        position: relative;
        z-index: 2;
        pointer-events: none;
    }

    .stage_education_post .archive-description a,
    .stage_education_post .archive-closing-content a,
    .stage_education_post .sagment-intro-link {
        color: #D30015;
        text-decoration: none;
        font-weight: 700;
    }

    .stage_education_post .archive-description a:hover,
    .stage_education_post .archive-closing-content a:hover,
    .stage_education_post .sagment-intro-link:hover {
        text-decoration: underline;
    }

    .education-timeline-year {
        width: 90px;
        flex: 0 0 90px;
        padding-top: 1px;
        text-align: right;
        font-size: 14px;
        line-height: 1.4;
        color: #000;
        white-space: nowrap;
    }

    .education-timeline-dot {
        position: relative;
        z-index: 2;
        flex: 0 0 13px;
        width: 13px;
        height: 13px;
        margin-top: 4px;
        border-radius: 50%;
        background: #5ec75e;
    }

    .education-timeline-dot.dot-orange {
        background: #f6b21a;
    }

    .education-timeline-dot.dot-red {
        background: #ff737c;
    }

    .education-timeline-dot.dot-blue {
        background: #5d8edc;
    }

    .education-timeline-content {
        flex: 1;
        padding-bottom: 4px;
    }

    .education-timeline-title {
        display: block;
        margin: 0 0 4px;
        font-size: 17px;
        line-height: 1.15;
        font-weight: 700;
        color: #111;
    }

    .education-timeline-title.title-green {
        color: #4fbd4f;
    }

    .education-timeline-title.title-orange {
        color: #ffa500;
    }

    .education-timeline-title.title-red {
        color: #ff6f78;
    }

    .education-timeline-title.title-blue {
        color: #5d8edc;
    }

    .education-timeline-place {
        margin: 0;
        font-size: 14px;
        line-height: 1.45;
        font-style: italic;
        color: #333;
    }

    /*
     * Archive cards
     */
    .stage_education_post .events-item-media-scoup {
        margin-top: 34px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .stage_education_post .events-item-media-scoup > div {
        float: none;
        display: flex;
        margin-bottom: 30px;
    }

    .stage_education_post .sabbi-events-item {
        width: 100%;
        height: 100%;
        background: #fff;
        padding: 26px 24px;
        border: 1px solid #eee;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.04);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .stage_education_post .sabbi-events-item:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
    }

    .stage_education_post .sabbi-events-link {
        display: block;
        text-decoration: none;
    }

    .stage_education_post .sabbi-events-title {
        color: #111;
    }

    .stage_education_post .events-item-media-scoup h3 {
        font-size: 21px;
        line-height: 1.12;
        font-weight: 700;
        margin: 0 0 18px;
    }

    .stage_education_post .events-item-meta {
        margin-top: 12px;
    }

    .stage_education_post .events-item-meta p {
        margin-bottom: 14px;
    }

    .stage_education_post .events-item-media-img {
        width: 100%;
        height: auto;
        margin-bottom: 18px;
    }

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

    .stage_education_post .btn.btn-unsolemn:hover {
        color: #D30015;
        text-decoration: underline;
        background: transparent;
    }

    .stage_education_post .archive-closing-content {
        margin-top: 42px;
    }

    @media (max-width: 1199px) {
        .stage_education_post {
            padding-top: 150px;
        }

        .stage_education_post .container {
            max-width: 960px;
        }
    }

    @media (max-width: 991px) {
        .stage_education_post {
            padding-top: 140px;
            padding-bottom: 58px;
        }

        .stage_education_post h1 {
            font-size: 30px;
        }

        .stage_education_post .sagment-title {
            font-size: 23px;
        }

        .stage_education_post .events-item-media-scoup > div {
            width: 50%;
        }

        .education-timeline-wrap {
            max-width: 720px;
        }

        .education-timeline:before {
            left: 108px;
        }

        .education-timeline-year {
            width: 80px;
            flex-basis: 80px;
        }
    }

    @media (max-width: 767px) {
        .stage_education_post {
            padding-top: 125px;
            padding-bottom: 48px;
        }

        .stage_education_post .container {
            padding-left: 22px;
            padding-right: 22px;
        }

        .stage_education_post h1 {
            font-size: 26px;
            line-height: 1.25;
            margin-bottom: 18px;
        }

        .stage_education_post .sagment-title {
            font-size: 22px;
            line-height: 1.3;
            margin-top: 24px;
        }

        .stage_education_post p,
        .stage_education_post .events-item-meta {
            font-size: 14px;
            line-height: 1.75;
        }

        .education-timeline-wrap {
            margin-top: 36px;
            margin-bottom: 44px;
        }

        .education-timeline:before {
            left: 92px;
            width: 5px;
        }

        .education-timeline-item {
            gap: 24px;
            margin-bottom: 28px;
        }

        .education-timeline-year {
            width: 68px;
            flex-basis: 68px;
            font-size: 13px;
        }

        .education-timeline-title {
            font-size: 16px;
            line-height: 1.18;
        }

        .education-timeline-place {
            font-size: 13px;
        }

        .stage_education_post .events-item-media-scoup {
            margin-top: 28px;
        }

        .stage_education_post .events-item-media-scoup > div {
            width: 100%;
            margin-bottom: 22px;
        }

        .stage_education_post .sabbi-events-item {
            padding: 24px 20px;
            text-align: left;
        }

        .stage_education_post .events-item-media-scoup h3 {
            font-size: 20px;
            line-height: 1.18;
        }

        .stage_education_post .archive-closing-content {
            margin-top: 30px;
        }
    }

    @media (max-width: 480px) {
        .stage_education_post {
            padding-top: 115px;
        }

        .stage_education_post .container {
            padding-left: 18px;
            padding-right: 18px;
        }

        .stage_education_post h1 {
            font-size: 24px;
        }

        .stage_education_post .sagment-title {
            font-size: 20px;
        }

        .education-timeline:before {
            left: 82px;
        }

        .education-timeline-item {
            gap: 20px;
            margin-bottom: 26px;
        }

        .education-timeline-year {
            width: 58px;
            flex-basis: 58px;
            font-size: 12px;
        }

        .education-timeline-dot {
            width: 12px;
            height: 12px;
            flex-basis: 12px;
        }

        .education-timeline-title {
            font-size: 15px;
        }

        .education-timeline-place {
            font-size: 12px;
        }

        .stage_education_post .sabbi-events-item {
            padding: 22px 18px;
        }

        .stage_education_post .events-item-media-scoup h3 {
            font-size: 19px;
        }
    }
</style>

<section class="sabbi-section stage_education_post stage_education_post-archive">
    <div class="container">
        <div class="education_post_archive-sagment">

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">

                    <header class="archive-header">
                        <h1 class="sabbi-events-title font-md__x">
                            Educational Institutions Connected to Prof. A. Sathasivam
                        </h1>

                        <div class="archive-description">
                            <p>
                                Prof. A. Sathasivam’s academic journey passed through several important schools, colleges and universities in Sri Lanka and abroad. From his early education at <?php echo wp_kses_post( '<a href="' . esc_url( home_url( '/education/araly-saraswathy-vidyalayam/' ) ) . '">Araly Saraswathy Vidyalayam</a>' ); ?> and <?php echo wp_kses_post( '<a href="' . esc_url( home_url( '/education/araly-hindu-english-school/' ) ) . '">Araly Hindu English School</a>' ); ?>, through <?php echo wp_kses_post( '<a href="' . esc_url( home_url( '/education/jaffna-college-vaddukoddai/' ) ) . '">Jaffna College, Vaddukoddai</a>' ); ?> and <?php echo wp_kses_post( '<a href="' . esc_url( home_url( '/education/ananda-college-colombo/' ) ) . '">Ananda College, Colombo</a>' ); ?>, to the <?php echo wp_kses_post( '<a href="' . esc_url( home_url( '/education/university-of-ceylon-peradeniya/' ) ) . '">University of Ceylon, Peradeniya</a>' ); ?> and the <?php echo wp_kses_post( '<a href="' . esc_url( home_url( '/education/university-of-oxford/' ) ) . '">University of Oxford</a>' ); ?>, each institution helped shape his development as a Tamil scholar, linguist and comparative researcher.
                            </p>

                            <p>
                                This section brings together the educational institutions connected to his life and work. It includes the schools where he received his early training, the universities where he studied and taught, and the international academic centres associated with his research in Tamil grammar, lexicography, Dravidian linguistics and the Sumero–Dravidian hypothesis.
                            </p>
                        </div>
                    </header>

                </div>
            </div>

            <div class="education-timeline-wrap">
                <ul class="education-timeline">

                    <li class="education-timeline-item">
                        <a class="education-timeline-card-link" href="<?php echo esc_url( home_url( '/education/araly-saraswathy-vidyalayam/' ) ); ?>" aria-label="Read about Araly Saraswathy Vidyalayam"></a>
                        <div class="education-timeline-year">1930 - 1941</div>
                        <span class="education-timeline-dot"></span>
                        <div class="education-timeline-content">
                            <strong class="education-timeline-title title-green">
                                Primary and Secondary Education
                            </strong>
                            <p class="education-timeline-place">
                                Araly Saraswathy Vidyalaya, Jaffna.
                            </p>
                        </div>
                    </li>

                    <li class="education-timeline-item">
                        <a class="education-timeline-card-link" href="<?php echo esc_url( home_url( '/education/araly-hindu-english-school/' ) ); ?>" aria-label="Read about Araly Hindu English School"></a>
                        <div class="education-timeline-year">1941</div>
                        <span class="education-timeline-dot dot-orange"></span>
                        <div class="education-timeline-content">
                            <strong class="education-timeline-title title-orange">
                                Senior School Certificate (Tamil medium), First Division
                            </strong>
                            <p class="education-timeline-place">
                                Araly Hindu English School, Jaffna.
                            </p>
                        </div>
                    </li>

                    <li class="education-timeline-item">
                        <a class="education-timeline-card-link" href="<?php echo esc_url( home_url( '/education/jaffna-college-vaddukoddai/' ) ); ?>" aria-label="Read about Jaffna College, Vaddukoddai"></a>
                        <div class="education-timeline-year">1942 - 1945</div>
                        <span class="education-timeline-dot dot-red"></span>
                        <div class="education-timeline-content">
                            <strong class="education-timeline-title title-red">
                                Secondary studies and Advanced Tamil and religious studies.
                            </strong>
                            <p class="education-timeline-place">
                                Jaffna College of Education - Vaddukoddai
                            </p>
                        </div>
                    </li>

                    <li class="education-timeline-item">
                        <a class="education-timeline-card-link" href="<?php echo esc_url( home_url( '/education/jaffna-college-vaddukoddai/' ) ); ?>" aria-label="Read about Jaffna College, Vaddukoddai"></a>
                        <div class="education-timeline-year">1943</div>
                        <span class="education-timeline-dot dot-blue"></span>
                        <div class="education-timeline-content">
                            <strong class="education-timeline-title title-blue">
                                Teacher's Entrance Exam/ Pravesa Panditha Examination - Passed in First Class
                            </strong>
                            <p class="education-timeline-place">
                                Jaffna College of Education - Vaddukoddai
                            </p>
                        </div>
                    </li>

                    <li class="education-timeline-item">
                        <a class="education-timeline-card-link" href="<?php echo esc_url( home_url( '/education/ananda-college-colombo/' ) ); ?>" aria-label="Read about Ananda College, Colombo"></a>
                        <div class="education-timeline-year">1945 - 1947</div>
                        <span class="education-timeline-dot"></span>
                        <div class="education-timeline-content">
                            <strong class="education-timeline-title">
                                Prepared for university entrance examinations.
                            </strong>
                            <p class="education-timeline-place">
                                Ananda College Colombo
                            </p>
                        </div>
                    </li>

                    <li class="education-timeline-item">
                        <a class="education-timeline-card-link" href="<?php echo esc_url( home_url( '/education/ananda-college-colombo/' ) ); ?>" aria-label="Read about Ananda College, Colombo"></a>
                        <div class="education-timeline-year">1947</div>
                        <span class="education-timeline-dot"></span>
                        <div class="education-timeline-content">
                            <strong class="education-timeline-title">
                                Higher School Certificate and Mathurai Pandit Examination
                            </strong>
                            <p class="education-timeline-place">
                                Qualifying for university-level Tamil studies.
                            </p>
                        </div>
                    </li>

                    <li class="education-timeline-item">
                        <a class="education-timeline-card-link" href="<?php echo esc_url( home_url( '/education/university-of-ceylon-peradeniya/' ) ); ?>" aria-label="Read about University of Ceylon, Peradeniya"></a>
                        <div class="education-timeline-year">1948 - 1952</div>
                        <span class="education-timeline-dot"></span>
                        <div class="education-timeline-content">
                            <strong class="education-timeline-title">
                                B.A. (Tamil Special), First Division
                            </strong>
                            <p class="education-timeline-place">
                                University of Ceylon, Peradeniya
                            </p>
                        </div>
                    </li>

                    <li class="education-timeline-item">
                        <a class="education-timeline-card-link" href="<?php echo esc_url( home_url( '/education/university-of-ceylon-peradeniya/' ) ); ?>" aria-label="Read about University of Ceylon, Peradeniya"></a>
                        <div class="education-timeline-year">1954</div>
                        <span class="education-timeline-dot"></span>
                        <div class="education-timeline-content">
                            <strong class="education-timeline-title">
                                M.A. (Tamil)
                            </strong>
                            <p class="education-timeline-place">
                                University of Ceylon, Peradeniya
                            </p>
                        </div>
                    </li>

                    <li class="education-timeline-item">
                        <a class="education-timeline-card-link" href="<?php echo esc_url( home_url( '/education/university-of-oxford/' ) ); ?>" aria-label="Read about University of Oxford"></a>
                        <div class="education-timeline-year">1954 - 1956</div>
                        <span class="education-timeline-dot"></span>
                        <div class="education-timeline-content">
                            <strong class="education-timeline-title">
                                D.Phil. (Oxon) in Linguistics
                            </strong>
                            <p class="education-timeline-place">
                                University of Oxford, United Kingdom.
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <h2 class="sagment-title">
                        Schools, Universities and Research Institutions
                    </h2>

                    <p>
                        Browse the institutions connected to Prof. A. Sathasivam’s education, teaching career and international research work.
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
                            <article id="post-<?php the_ID(); ?>" <?php post_class( 'sabbi-events-item sabbi-education-item' ); ?>>

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
                        <p><?php esc_html_e( 'No education records found.', 'academix' ); ?></p>
                    </div>
                </div>

            <?php endif; ?>

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <div class="archive-closing-content">
                        <p>
                            Together, these institutions show the range of Prof. Sathasivam’s scholarly world: local Tamil education in Jaffna, university training at <?php echo wp_kses_post( '<a href="' . esc_url( home_url( '/education/university-of-ceylon-peradeniya/' ) ) . '">Peradeniya</a>' ); ?>, doctoral research at <?php echo wp_kses_post( '<a href="' . esc_url( home_url( '/education/university-of-oxford/' ) ) . '">Oxford</a>' ); ?>, and later academic engagement across major international centres. Linking these institutions helps readers follow the development of his scholarship from early Tamil learning to advanced comparative linguistics.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
get_footer();