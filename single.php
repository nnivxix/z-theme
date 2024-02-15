<?php
get_header();
?>

<article class="max-w-7xl mx-auto grid grid-cols-8">
    <div class="col-span-5">
        <?php
        the_content();
        ?>
    </div>
    <div class="col-span-2 col-start-7">
        Latest Posts
    </div>

</article>


<?php
get_footer();
?>