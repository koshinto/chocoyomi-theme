<?php

update_user_meta( 1, 'show_admin_bar_front', 'true' );

// アイキャッチ画像
add_theme_support('post-thumbnails');

// 概要の文字数
function mb_length($length) {
  return 55;
}
add_filter('excerpt_mblength', 'mb_length');
