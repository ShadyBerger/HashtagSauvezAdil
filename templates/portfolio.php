<?php
$test = null !== get_option('nombre_portfolio_home');
$args = [
  'post_type' => 'post',
  // nous récupérons maintenant la valeur de l'option qui va elle déterminé le nombre à affiché
  'posts_per_page' => (null !== get_option('nombre_portfolio_home')) ? get_option('nombre_portfolio_home') : 6,
  'category_name' => 'portfolio'
];
$query = new WP_Query($args);
?>

<!-- Portfolio Section -->
<section id="portfolio">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="<?php the_permalink(); ?>">
                    <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">
                            Category
                        </div>
                        <div class="project-name">
                            Project Name
                        </div>
                    </div>
                </a>
            </div>
            <?php
          endwhile;
          wp_reset_postdata();
          ?>
        </div>
    </div>
</section> 