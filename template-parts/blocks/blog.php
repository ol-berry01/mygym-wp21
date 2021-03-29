<section class="blog-section">

    <div class="container">

      <div class="row">
        <h2 class="my-4 mx-auto">Club News</h2>
      </div>

        <div class="grid">

          <?php

            $blogSectionPosts = new WP_Query(array(
              'post_per_page' => 9
            ));

            while( $blogSectionPosts->have_posts() ) {
              $blogSectionPosts->the_post();

              $postTitle    = get_the_title();
              $postContent  = get_the_content(); 
              $postImg      = get_the_post_thumbnail();
              $postLink     = get_the_permalink();

              echo 
              '<div class="grid-item mygym-shadow">
                <div class="grid-item-container">
                  <a href="' . $postLink . '"><h4>' . $postTitle . '</h4></a>
                  <small style="color:#999999">Created on ' . get_the_time('jS F Y') . '</small>
                  ' . ( $postImg ? '</div>' . $postImg . '<div class="grid-item-container">' : '' ) . '
                  <p style="color:#999999">' . wp_trim_words($postContent, 15) . '</p>
                </div>
                <a href="' . $postLink . '"><button class="btn btn-mygym-alt">Read More <i class="fas fa-chevron-right" aria-hidden="true"></i></button></a>
              </div>';
            }
            wp_reset_postdata();
          ?>
          
        </div>
        <div class="row justify-content-center py-3" style="">
          <div class="col-sm-12 col-md-6 col-lg-4">

            <a href=""><button class="btn btn-block btn-outline-light btn-mygym-alt" style="">View All News <i class="fas fa-chevron-right" aria-hidden="true"></i></button></a>
          </div>
        </div>
    </div>
</section>