<?php 

    $className = 'cta';
    if ( !empty( $block['className'] ) ) {
        $className .= ' ' . $block[ 'className' ] ;
    }

    // Variables
    $ctaText    = get_field( 'cta_text' );
    $ctaButton  = get_field( 'cta_button_text' );
    $ctaLink    = get_field( 'cta_button_link' );

?>

<section class="<?php echo esc_attr( $className ); ?>">

    <!-- Call To Action -->
        <div class="container">
            <div class="row justify-content-center align-content-center">
            <div class="col-lg-7 col-md-8 col-sm-12">
                <h3><?php echo $ctaText; ?></h3>
            </div>
            <div class="col-lg-2 col-md-8 col-sm-6 px-md-0">
                <a href="<?php echo $ctaLink; ?>">
                    <button class="btn btn-block btn-mygym"><?php echo $ctaButton; ?> <i class="fas fa-chevron-right" aria-hidden="true"></i></button>
                </a>
            </div>
            </div>
        </div>

</section>