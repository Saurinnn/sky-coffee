<?php get_header(); ?>

<div class="concept">
  <div class="concept-inner">
    <div class="concept-img face-pic btn">
      <img src="<?php echo get_template_directory_uri(); ?>/images/external/concept167-gkh9-600h.png" alt="concept167"
        class="home-concept" />
    </div>
    <div class="concept-text-out">
      <div class="concept-text">
        <h4 class="home-text08 fadein txt">Concept</h4>
        <h3 class="home-text06 fadein txt">心静かにコーヒーを</h3>
        <div class="home-text10 fadein txt">
          <span class="con-text fadein txt">立ち止まって、</span>
          <br />
          <span class="con-text fadein txt">空の青さを眺めて、</span>
          <br />
          <span class="con-text fadein txt">一息つきましょう</span>
        </div>
      </div>
    </div>
  </div>
</div>
<article>
  <div class="blog-title">
    <h2 class="home-text17">blog</h2>
    <p class="home-text19">ブログ</p>
  </div>
  <div class="blog-content">
  <ul class="blog-ul">
    <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 5,
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()):
      while ($the_query->have_posts()):
        $the_query->the_post();
        ?>

        <li class="blog-li">
          <a href="<?php the_permalink(); ?>">
            <?php echo has_post_thumbnail() ? get_the_post_thumbnail(get_the_ID(), array(270, 180)) : '<img src="https://via.placeholder.com/270x180/?text=[No Image]">'; ?>
            <h3>
              <?php
              if (mb_strlen($post->post_title) > 20) {
                $title = mb_substr($post->post_title, 0, 20);
                echo $title . '...';
              } else {
                echo $post->post_title;
              }
              ?>
            </h3>
            <p><?php the_time('Y/n/j'); ?></p>
          </a>
        </li>
      </ul>
      <?php
      endwhile;
    else:
      ?>
    <li>お探しの記事はありませんでした</li>
  <?php endif; ?>
  </ul>
  </div>
  <div class="wp-blog">
    <button>
      <a class="home-text48" href="<?php echo home_url(); ?>/news/">ブログ一覧</a>
      <img src="<?php echo get_template_directory_uri(); ?>/images/external/iconarrowright195-wo5q.svg"
        alt="iconarrowright195" class="home-iconarrowright">
    </button>
  </div>
</article>

<?php get_footer(); ?>