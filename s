



            MY CODE



            <!doctype <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Westeros Theme</title>
    <?php wp_head(); ?>
</head>

<?php
if (is_front_page()):
    $awesome_classes = array('awesome-class', 'my-class');
else:
    $awesome_classes = array('no-awesome-class');
endif;

?>

<body <?php body_class($awesome_classes); ?>>
    <div class="container-fluid"> <!-- Open of Main Wrapper -->

        <header class='row'> <!-- The theme header -->

            <div class='col-sm-6'>
                <?php the_custom_logo(); ?>
                <?php // bloginfo('name'); ?>
            </div>

            <div class='col-sm-6'>
                <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
            </div>

            <img src="<?php header_image(); ?>" height="<?php get_custom_header()->height; ?>"
                width="<?php get_custom_header()->width; ?>" alt="" />


        </header>














        CONTENT CODE



        
<h3 class='post-entry-title'>
            <a href=" <?php the_permalink() ?>"> <?php the_title(); ?> </a>
        </h3>
        <p class='post-entry-info'>Post on: <?php the_date(); ?> </p>
        <p class='post-entry-info'>by <?php the_time(); ?></p>
        <p class='post-entry-info'>in <?php the_category() ?></p>
        <p class='post-entry-info'><?php the_tags(); ?></p>

     <?php   the_post_thumbnail('medium'); ?>


        <div>
            <?php the_content(); ?>
        </div>
        <hr>




        FOOTER CODE 


        
<footer>
<p> The footer</p>
<?php wp_nav_menu(array('theme_location' => 'secondary')); ?>

</footer>

<?php

wp_footer();

?>

    </div> <!-- close of Main Wrapper -->
</body>
</html>