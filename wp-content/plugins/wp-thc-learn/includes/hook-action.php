<?php

// Hàm thêm vào cặp thẻ <head> của theme
function thc_author_tag() {
    echo "<link rel=\"author\" href=\"https://www.facebook.com\" />\n";
    // khi view element lên sẽ thấy kết quả: <link rel="author" href="https://www.facebook.com">
}

// Thêm hàm thc_author_tag vào hook action wp_head
add_action( 'wp_head', 'thc_author_tag' );