<?php
$getFirstPosts = new WP_Query((array('showposts' => 3, 'orderby' => 1)));

$firstPost = null;
$thumbnail = null;
$excerpt = null;
$permalink = null;
$categories = null;

// var_dump($getFirstPosts);
/**TODO
 * 
 * must be get post with category "Featured"
 */
if ($getFirstPosts->have_posts()) {
    $firstPost =  $getFirstPosts->posts[0];
    $excerpt = get_the_excerpt($firstPost->ID) ?? "";
    $permalink = get_permalink($firstPost->ID) ?? "";
    $categories = wp_get_post_categories($firstPost->ID);

    if (has_post_thumbnail($firstPost?->ID)) {
        $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($firstPost?->ID), 'medium_large')[0];
    }
}
// var_dump($firstPost);

?>
<a href="<?php echo $permalink ?>" class="font-serif group max-w-2xl mx-auto mt-5 text-center flex items-center flex-col border-b-2 pb-3 border-gray-900">
    <img width="800" src="<?php echo $thumbnail ?>" alt="<?php echo $firstPost->post_title; ?>" srcset="">
    <h1 class="text-3xl font-bold py-3 group-hover:underline group:nderline-offset-8 "><?php echo $firstPost->post_title ?> </h1>
    <p class="text-lg group-hover:underline group:nderline-offset-8 "><?php echo $excerpt ?> </p>
</a>