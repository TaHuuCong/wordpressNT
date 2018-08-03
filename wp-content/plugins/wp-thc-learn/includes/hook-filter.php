<?php

// Hàm bổ sung string vào title
function add_string_to_title($title)
{
    return 'thc - ' . $title;  
    // khi mở project lên sẽ thấy kết quả là: thc - Hello world!
}
 
// Thêm hàm add_string_to_title vào hook filter the_title
add_filter('the_title', 'add_string_to_title', 10, 1);
