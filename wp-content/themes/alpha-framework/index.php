<?php 

// echo THEMEROOT;
// echo SCRIPTS . '/main.js';
// echo FRAMEWORK;

?>

<?php 
    /* Load header.php */
    get_header(); 
?>

<div class="container-fluid bg-grey thc-content">
	<div class="row">
		<div class="col-md-8 main-content">
			<div class="lastest-blog" id="blog">
				<div class="lb-text row">
					<h2 class="lb-h2">Blog</h2>
				</div>
				<div class="lb-slider row">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-md-4">
                    <?php 
                        /* Load content.php */
                        get_template_part('content', get_post_format()); 
                    ?>
                    </div>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <?php 
                        /* Load content-none.php */
                        get_template_part('content', 'none'); 
                    ?>
                    <?php endif; ?>
				</div>
			</div>
        </div>
        
		<div class="col-md-3 offset-md-1 sidebar">
        <?php 
            /* Load sidebar.php */
            get_sidebar();
        ?>
		</div>
	</div>
</div>







<?php
    /* Load template-contact.php */
    // get_template_part('template', 'contact'); 

    /* Load footer.php */
    get_footer();
?>

<?php
