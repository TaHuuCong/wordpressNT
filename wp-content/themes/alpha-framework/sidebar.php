<div class="row recent-posts">
    <div class="rp-title">
        <h2 class="rp-h2">Recent Posts</h2>
    </div>
    
    <?php if ( have_posts() ) : ?>
    <div class="rp-content">
        <ul class="row">

        <?php while ( have_posts() ) : the_post(); ?>
            <li class="col-md-12">
                <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
            </li>
        <?php endwhile; ?>

        </ul>
    </div>
    <?php endif; ?>
</div>

<div class="row recent-comments">
    <div class="rp-title">
        <h2 class="rp-h2">Recent Comments</h2>
    </div>
    <?php if ( have_posts() ) : ?>
    <div class="rp-content">
        <ul class="row">

            <?php 
            while ( have_posts() ) : the_post();
            $recent_comments = get_comments( array(
                'post_id' => get_the_ID(),
                'number' => '3',
                'orderby' => 'comment_date',
                'order' => 'DESC',
            ) );

            foreach ( $recent_comments as $comment ) {
                if ( !empty( $comment ) ) {
                    $comment_author = $comment->comment_author;
                } 
                    // print_r($comment_author);
            }
            ?>
            <?php if ( !empty( $comment ) ) : ?>
            <li class="col-md-12">
                <?php echo $comment_author . ' '; ?>on<a href="<?php the_permalink(); ?>"><?php echo ' ' . get_the_title(); ?></a>
            </li>
            <?php endif; ?>
            <?php endwhile; ?>

        </ul>
    </div>
    <?php endif; ?>

</div>

<div class="row categories">
    <div class="rp-title">
        <h2 class="rp-h2">Categories</h2>
    </div>
    <div class="rp-content">
        <ul class="row">
        <?php 
            $categories = get_categories();
            foreach ( $categories as $category ) {
        ?>
            <li class="col-md-12">
                <a href=""><?php echo $category->name; ?></a>                
            </li>
        <?php 
            }
        ?>
            

        </ul>
    </div>
</div>
