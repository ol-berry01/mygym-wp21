<?php 

    $className = 'features';
    if ( !empty( $block['className'] ) ) {
        $className .= ' ' . $block[ 'className' ] ;
    }
    if ( !empty( $block['align'] ) ) {
        $className .= 'align' . $block[ 'align' ] ;
    }

?>

<section class="<?php echo esc_attr( $className ); ?>">
    <div class="container-fluid">
        <div class="row">

            <?php
                if ( have_rows( 'features' ) ) : 
                    while ( have_rows( 'features' ) ) : the_row();

                    // Variables
                    $featureTitle   = get_sub_field( 'feature_title' );
                    $featureContent = get_sub_field( 'feature_content' );
                    $featureImage   = get_sub_field( 'feature_image' );
                    $featureLink    = get_sub_field()
            ?>

                <div class="col-md-4 col-sm-12 px-0">
                    <div class="feature-item item-bg d-flex flex-column" style="background: linear-gradient(rgba(33, 37, 31, 0.75), rgba(33, 37, 31, 0.75)), url('<?php echo $featureImage['url'] ?>'); background-size: cover;">
                        <h3><?php echo $featureTitle; ?></h3>
                        <p class="mx-auto"><?php echo $featureContent; ?></p>
                        <button class="btn btn-mygym mx-auto mt-auto">Learn More <i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>

            <?php 
                    
                    endwhile;
                    
                endif; 
                
            ?>

        </div>
    </div>
</section>
