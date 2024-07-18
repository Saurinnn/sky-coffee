<?php get_header(); ?>

<main>
  <div class="blog-title">
    <h2 class="home-text17">blog</h2>
    <p class="home-text19">ブログ</p>
  </div>

  <article>
    <div class="blog-info-body">
    <ul class="news-list column-center">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 10,
        'paged' => get_query_var('paged') ? intval(get_query_var('paged')) : 1,
        'no_found_rows' => false,
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()):
        while ($the_query->have_posts()):
          $the_query->the_post();
          ?>
          <li class="news-list-item">
            <div class="blog-cont">
              <div class="blog-thumb">
                <?php echo has_post_thumbnail() ? get_the_post_thumbnail(get_the_ID(), array(270, 180)) : '<img src="https://via.placeholder.com/270x180/?text=[No Image]">'; ?>
              </div>
              <div class="blog-info">
                <p><?php the_time('Y/n/j'); ?></p>
                <div class="blog-title"><h3>
              <?php
              if (mb_strlen($post->post_title) > 20) {
                $title = mb_substr($post->post_title, 0, 20);
                echo $title . '...';
              } else {
                echo $post->post_title;
              }
              ?>
            </h3>
            </div>
              </div>
            </div>
          </li>
          <?php
        endwhile;
      else:
        ?>
        <li class="news-list-item">お探しの記事はありませんでした</li>
      <?php endif; ?>
    </ul>
    </div>
  </article>

  <?php $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages; ?>
  <nav class="posts-navigation">
    <div class="nav-links">
      <?php
      if (get_query_var('paged') > 0):
        echo '<div class="nav-first"><a href="/news/"></a></div>';
      else:
        echo '<div class="nav-first off"><span></span></div>';
      endif;
      ?>
      <?php
      if (get_previous_posts_link()):
        echo '<div class="nav-left">';
        previous_posts_link('');
        echo '</div>';
      else:
        echo '<div class="nav-left off">';
        echo '<span></span>';
        echo '</div>';
      endif;
      ?>
      <div class="nav-page">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $max_page = $wp_query->max_num_pages;
        echo $paged . ' / ' . $max_page;
        ?>
      </div>
      <?php
      if (get_next_posts_link()):
        echo '<div class="nav-right">';
        next_posts_link('');
        echo '</div>';
      else:
        echo '<div class="nav-right off">';
        echo '<span></span>';
        echo '</div>';
      endif;
      ?>
      <?php
      if (get_query_var('paged') < $max_page && $max_page != 1):
        echo '<div class="nav-last"><a href="/news/page/' . $max_page . '/"></a></div>';
      else:
        echo '<div class="nav-last off"><span></span></div>';
      endif;
      ?>
    </div>
  </nav>
  <?php wp_reset_postdata(); ?>
</main>

<?php get_footer(); ?>