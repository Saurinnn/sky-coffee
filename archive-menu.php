<?php get_header(); ?>
<article>
  <?php
    if(have_posts()):
      while(have_posts()) : the_post();
      ?>
      <section>
        <img src="<?php the_field('image'); ?>" width=154 height=154>
        <h2><?php the_title(); ?></h2>
        <p><?php the_field('price'); ?>yen</p>
        <p><?php the_field('description'); ?></p>
      </section>
  <?php
      endwhile;
    else:
  ?>
  <p>お探しの記事はありませんでした</p>
  <?php endif; ?>
</article>

<?php get_footer(); ?>