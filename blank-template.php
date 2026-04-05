<?php
/**
 * Template Name: Blank
 * Description: Completely empty page — no header, no footer.
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body style="margin:0; padding:0;">

<?php
while ( have_posts() ) :
    the_post();
    the_content();
endwhile;
?>

<?php wp_footer(); ?>
</body>
</html>