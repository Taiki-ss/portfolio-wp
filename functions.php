<?php

remove_action("wp_head", "wp_generator"); // WordPressのバージョン
remove_action("wp_head", "wp_shortlink_wp_head"); // 短縮URLのlink
remove_action("wp_head", "wlwmanifest_link"); // ブログエディターのマニフェストファイル
remove_action("wp_head", "rsd_link"); // 外部から編集するためのAPI
remove_action("wp_head", "feed_links_extra", 3); // フィードへのリンク
remove_action("wp_head", "print_emoji_detection_script", 7); // 絵文字に関するJavaScript
remove_action("wp_head", "rel_canonical"); // カノニカル
remove_action("wp_print_styles", "print_emoji_styles"); // 絵文字に関するCSS
remove_action("admin_print_scripts", "print_emoji_detection_script"); // 絵文字に関するJavaScript
remove_action("admin_print_styles", "print_emoji_styles"); // 絵文字に関するCSS

// CSSとJS読み込み
function pf_scripts()
{
    wp_enqueue_style("pf_style", get_theme_file_uri("/assets/css/style.css"));
    wp_enqueue_script("jquery");
    wp_enqueue_script(
        "pf_script",
        get_theme_file_uri("/assets/js/main.js"),
        [],
        false,
        true
    );
}
add_action("wp_enqueue_scripts", "pf_scripts");

// jQueryのmousewheel読み込み
function jquery_mousewheel_scripts()
{
    wp_enqueue_script(
        "jquery_mousewheel_script",
        get_theme_file_uri("/assets/js/jquery-mousewheel.js")
    );
}
add_action("wp_enqueue_scripts", "jquery_mousewheel_scripts");

// 各種セットアップ
function pf_setup()
{
    add_theme_support("title-tag");

    // アイキャッチ画像を使用可能にする
    add_theme_support("post-thumbnails");

    add_image_size("pf-thumbnail", 300, 200, true);

    add_image_size("pf-hero", 1200, 630, true);

    register_nav_menus([
        "global" => "Global Menu",
    ]);
}
add_action("after_setup_theme", "pf_setup");

// 記事を古い順に並び替える
function pf_posts_order($query)
{
    $query->set("order", "ASC");
    $query->set("orderby", "date");
}
add_action("pre_get_posts", "pf_posts_order");
