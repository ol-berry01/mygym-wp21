<?php 

    $className = 'map';
    if ( !empty( $block['className'] ) ) {
        $className .= ' ' . $block[ 'className' ] ;
    }
    if ( !empty( $block['align'] ) ) {
        $className .= 'align' . $block[ 'align' ] ;
    }

?>

<section class="<?php echo esc_attr( $className ); ?>">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10028.56648508936!2d-1.7905968!3d51.0689357!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6bfd3ab649a2e591!2sMyGym%20The%20Art%20Of%20Lifting!5e0!3m2!1sen!2suk!4v1592388702835!5m2!1sen!2suk" height="100%" style="border: 0;" allowfullscreen=""></iframe>
    <div class="map-contact-detalis">
        <div class="open-time">
            <h5>Opening Hours</h5>
            <ul class="mt-3">
            <?php 
                $today = date('Y M jS');
                $args = array(  
                    'post_type'         => 'opening_hours',
                    'post_status'       => 'publish',
                    'posts_per_page'    => 1,
                    // 'meta_key'          => 'season_to',
                    'orderby'           => 'meta_value',
                    'order'             => 'ASC',
                    // 'meta_query'        => array(
                    //     array(
                    //         'key'       => 'season_to',
                    //         'compare'   => '>=',
                    //         'value'     => $today
                    //     )
                    // )
                );

                $openingHours = new WP_Query( $args ); 
                    
                while ( $openingHours->have_posts() ) : 
                    $openingHours->the_post(); 

                    $checkDay       = date('w');
                    $checkHour      = date('ga');
                    $seasonTitle    = get_the_title();

                    $validFrom      = get_field( 'valid_from' );
                    $validTo        = get_field( 'valid_to' );
                    $hours          = get_field( 'hours' );

                    // Check rows exists.
                    if( have_rows($hours) ):

                        // Loop through rows.
                        while( have_rows($hours) ) : the_row();

                            // Load sub field value.
                            $days = get_sub_field( 'days' );
                            $opening = get_sub_field( 'opening' );
                            $closing = get_sub_field( 'closing' );
                            
                            echo `
                                something
                            `;

                        // End loop.
                        endwhile;

                    // No value.
                    else :
                        // Do something...
                    endif;
                endwhile;

                wp_reset_postdata(); 
              ?>
                <li>Monday - Thursday: <span>06:30 - 21:00</span></li>
                <li>Friday: <span>06:30 - 20:00</span></li>
                <li>Saturday: <span>08:00 - 17:00</span></li>
                <li>Sunday: <span>08:00 - 16:00</span></li>
            </ul>
        </div>
        <div class="map-contact-form">
            <h5>Contact MyGym</h5>
            <form action="#">
            <input type="text" placeholder="Name" />
            <input type="text" class="phone" placeholder="Phone" />
            <textarea placeholder="Message"></textarea>
            <button type="submit" class="btn btn-block btn-mygym">Send Message</button>
            </form>
        </div>
    </div>
</section>