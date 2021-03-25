<?php 

    $className = 'hero-section';
    if ( !empty( $block['className'] ) ) {
        $className .= ' ' . $block[ 'className' ] ;
    }
    if ( !empty( $block['align'] ) ) {
        $className .= 'align' . $block[ 'align' ] ;
    }

?>

<section class="<?php echo esc_attr( $className ); ?>">
    <div id="heroCarousel" class="carousel slide" data-ride="carousel" data-interval="8000">

        <!-- Indicators dot nav -->
        <ol class="carousel-indicators">
            <?php $indicator = 0;
                while( have_rows('carousel') ): the_row();
                    if ($indicator === 0) {
                        echo '<li data-target="#heroCarousel" data-slide-to="0" class="active"></li>';
                    } else {
                        echo '<li data-target="#heroCarousel" data-slide-to="'.$indicator.'"></li>';
                    }
                $indicator++;
            endwhile; ?>
        </ol>

        <!-- Carousel Inner -->
        <div class="carousel-inner">

            <?php 
                $slide = 0;
                if ( have_rows( 'carousel' ) ) : 
                    while ( have_rows( 'carousel' ) ) : the_row();

                    // Variables
                    $carouselImg        = get_sub_field( 'carousel_img' );
                    $carouselTitle      = get_sub_field( 'carousel_title' );
                    $carouselSubtitle   = get_sub_field( 'carousel_subtitle' );
                    $carouselBtn        = get_sub_field( 'carousel_button' );
                    $carouselLink       = get_sub_field( 'carousel_link' );
                    $carouselAlign      = get_sub_field( 'carousel_align' );
                    $carouselCountDown  = get_sub_field( 'carousel_countdown' );

                    $carouselTimer  = '<div id="carousel-countdown">
                                            <div class="metric">
                                                <h3 id="days"></h3>
                                                <p><small>Days</small></p>
                                            </div>
                                            <div class="metric">
                                                <h3 id="hours"></h3>
                                                <p><small>Hours</small></p>
                                            </div>
                                            <div class="metric">
                                                <h3 id="mins"></h3>
                                                <p><small>Minutes</small></p>
                                            </div>
                                            <div class="metric">
                                                <h3 id="secs"></h3>
                                                <p><small>Seconds</small></p>
                                            </div>
                                        </div>';
                    
                    $carouselContent    = ( $carouselCountDown ? 
                                            '<h1 id="carousel">' . $carouselTitle . '</h1><h1 id="carousel-end"></h1>' . $carouselTimer : '<h1>' . $carouselTitle . '</h1><p class="lead">' . $carouselSubtitle . '</p>');
                    $carouselButton     = '<a href="' . $carouselLink . '"><button class="btn btn-lg btn-mygym btn-block">' . $carouselBtn . ' <i class="fas fa-chevron-right" aria-hidden="true"></i></button></a>';

            ?>
                <div class="carousel-item  <?php echo ( $slide === 0 ? 'active' : '' ); ?>">
                    <img class="d-block w-100" src="<?php echo $carouselImg[ 'url' ]; ?>" alt="<?php echo $carouselImg['alt'] ?>" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row align-content-center">

                                <?php echo ( $carouselBtn ? 
                                    '<div class="col-lg-12 col-xl-8 align-self-center">
                                    ' . $carouselContent . '
                                    </div>
                                    <div class="col-lg-12 col-xl-4 align-self-center">
                                        ' . $carouselButton . '
                                    </div>' : 
                                    '<div class="col align-self-center" style="text-align:' . $carouselAlign . '">'
                                        . $carouselContent . 
                                    '</div>'); 
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            <?php
                    $slide++;
                    endwhile;
                    wp_reset_postdata(); 
                endif;     
            ?>

        </div>
        <!-- End: Carousel Inner -->
            
        <?php 
            echo ( $slide > 1 ? 
            '<a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>' : 
            '' );
        ?>
    </div>
</section>