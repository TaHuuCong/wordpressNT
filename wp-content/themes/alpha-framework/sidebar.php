<h2 class="rp-h2">Recent Posts</h2>
<?php if ( have_posts() ) : ?>
    <ul class="row">

    <?php while ( have_posts() ) : the_post(); ?>
        <li class="col-md-12">
            <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
        </li>
    <?php endwhile; ?>

    </ul>
<?php endif;