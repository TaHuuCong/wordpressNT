

    <div <?php post_class( 'lb-item ' ); ?>>
        <div class="lb-item-img">
            <a href="" class="lb-item-link"></a>
            <?php
                // Lấy toàn bộ nội dung bài post
                $post_content = get_the_content();

                // $matches sẽ là mảng chứa tất cả các src của các image trong content của bài post
                preg_match_all('/src="([^"]*)"/', $post_content, $matches);
                // print_r($matches);
                foreach ( $matches as $match ) {
                    $post_img_src = $match[0];  // chỉ số 0 là ảnh đầu tiên trong mỗi bài post
                } 

                // Lấy ID bài post
                $post_ID = get_the_ID();

                // Lấy danh sách category
                $categories = get_the_category();
                foreach ( $categories as $category ) {
                    $cate_name = $category->name;
                } 
            ?>
            <div class="lb-item-bg item-bg-1" style="background-image: url('<?php echo $post_img_src; ?>');"></div>
            <div class="lb-item-option">
                <?php echo $cate_name; ?>
            </div>
        </div>
        <div class="lb-item-text">
            <h4 class="lb-item-h4">
                <?php
                    echo '<a href="' . get_the_permalink() . '">' . get_the_title() . '</a>';
                ?>
            </h4>
            <div class="lb-item-date">
                by <?php echo get_the_author_meta('display_name'); ?> on <?php echo get_the_date(); ?>
            </div>

            
            <?php 
                // Loại bỏ hình ảnh trong content của post, hiển thị số lượng word giới hạn + xem thêm
                $numberWord = 20;
                $content = preg_replace("/<img[^>]+\>/i", " ", $post_content);          
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]>', $content);
                $content = wp_trim_words( $content, $numberWord, '');
                $content = $content.'... <a class="read-more" href="' . get_the_permalink() . '">Read more</a>';
            ?>

            <p class="lb-item-p"><?php echo $content; ?></p>
        </div>
    </div>
