<?php get_header();?>

      <?php get_template_part('template-parts/content', 'test'); ?>
      <?php do_action("action_test"); ?>
      
      <?php while(have_posts()):the_post(); ?>
            <a href="<?php the_permalink()?>"><?php the_title(); ?></a>
            <?php the_content(); ?>
      <?php endwhile; ?>

<?php get_footer();?>
