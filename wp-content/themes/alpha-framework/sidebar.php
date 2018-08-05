<div class="row recent-posts">
    <h2 class="rp-h2">Recent Posts</h2>
    <?php if (have_posts()) : ?>
        <ul class="row">

        <?php while (have_posts()) : the_post(); ?>
            <li class="col-md-12">
                <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
            </li>
        <?php endwhile; ?>

        </ul>
    <?php endif; ?>
</div>

<div class="row recent-comments">
    <h2 class="rp-h2">Recent Comments</h2>
    <?php if (have_posts()) : ?>
        <ul class="row">

            <?php 
            while (have_posts()) : the_post();
            $recent_comments = get_comments(array(
                'post_id' => get_the_ID(),
                'number' => '3',
                'orderby' => 'comment_date',
                'order' => 'DESC',
            ));

            foreach ($recent_comments as $comment) {
                if (!empty($comment)) {
                    $comment_author = $comment->comment_author;
                } 
                    // print_r($comment_author);
            }
            ?>
            <?php if (!empty($comment)) : ?>
            <li class="col-md-12">
                <?php echo $comment_author . ' '; ?>on<a href="<?php the_permalink(); ?>"><?php echo ' ' . get_the_title(); ?></a>
            </li>
            <?php endif; ?>
            <?php endwhile; ?>

        </ul>
    <?php endif; ?>
</div>

<div class="row categories">
    <h2 class="rp-h2">Categories</h2>
    <?php if (have_posts()) : ?>
        <ul class="row">

        <?php while (have_posts()) : the_post(); ?>
            <li class="col-md-12">
                <?php 
                    $categories = get_the_category();
                    foreach ($categories as $category) {
                        $cate_name = $category->name;
                    }
                ?>
                <a href=""><?php echo $cate_name; ?></a>                
            </li>
        <?php endwhile; ?>

        </ul>
    <?php endif; ?>
</div>
