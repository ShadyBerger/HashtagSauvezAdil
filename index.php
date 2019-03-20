<?php 
//https://developer.wordpress.org/themes/basics/template-files/#using-template-files
get_header();
?>

<?php
get_template_part('templates/about');
get_template_part('templates/services');
get_template_part('templates/portfolio');
get_template_part('templates/contact');
?>

<?php
get_footer();
?>
