<?php
get_header();
?>

<article class="w-4/12  mx-auto " id="single">
    <?php
    // Mulai loop
    while (have_posts()) : the_post();

        // Tampilkan judul
        the_title('<h1>', '</h1>');
        // Dapatkan ID penulis
        $author_id = get_the_author_meta('ID');
        echo get_avatar($author_id, 120);

        $post_date = get_the_date();

        // Dapatkan URL ke halaman arsip penulis
        $author_url = get_author_posts_url($author_id);

        // Tampilkan nama penulis dengan hyperlink
        echo 'Artikel ini ditulis oleh: <a href="' . $author_url . '">' . get_the_author() . '</a> pada ' . $post_date;


        // Tampilkan konten
        the_content();

    // Tampilkan nama penulis

    endwhile; // Akhir loop
    ?>




</article>


<?php
get_footer();
?>