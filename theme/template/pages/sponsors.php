<?php
/**
 * List of Sponsors
 */

$cats = [
  SPONSOR_PLATINUM => get_category_by_slug(SPONSOR_PLATINUM),
  SPONSOR_GOLD => get_category_by_slug(SPONSOR_GOLD),
  SPONSOR_SILVER => get_category_by_slug(SPONSOR_SILVER),
];

// Retrieve all posts.
$posts = [
  SPONSOR_PLATINUM => get_posts(['category' => $cats[SPONSOR_PLATINUM]->cat_ID]),
  SPONSOR_GOLD => get_posts(['category' => $cats[SPONSOR_GOLD]->cat_ID]),
  SPONSOR_SILVER => get_posts(['category' => $cats[SPONSOR_SILVER]->cat_ID]),
];
?>
<section class="wrapper">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="sponsor__header">
          Platinum Sponsors
        </h1>
      </div>
    </div>

    <div class="row sponsor__list sponsor__list--platinum">
      <?php foreach($posts[SPONSOR_PLATINUM] as $p): ?>
        <div class="col-12 col-sm-3">
          <a class="sponsor__summary" href="<?= get_permalink($p->ID); ?>">
            <img class="sponsor__summary-image img-fluid" src="<?= get_template_directory_uri() ?>/assets/images/placeholder.png">

            <p class="sponsor__summary-name">
              <?= $p->post_title; ?>
            </p>

            <p class="sponsor__summary-message">
              <?= wp_strip_all_tags($p->post_content); ?>
            </p>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="sponsor__header">
          Gold Sponsors
        </h1>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-sm-10 offset-sm-1">
        <div class="row sponsor__list sponsor__list--gold">
          <?php foreach($posts[SPONSOR_PLATINUM] as $p): ?>
            <div class="col-6 col-sm-3">
              <a class="sponsor__summary" href="<?= get_permalink($p->ID); ?>">
                <img class="sponsor__summary-image img-fluid" src="<?= get_template_directory_uri() ?>/assets/images/placeholder.png">

                <p class="sponsor__summary-name">
                  <?= $p->post_title; ?>
                </p>

                <p class="sponsor__summary-message">
                  <?= wp_strip_all_tags($p->post_content); ?>
                </p>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="sponsor__header">
          Silver Sponsors
        </h1>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-sm-10 offset-sm-1">
        <div class="row sponsor__list sponsor__list--gold">
          <?php foreach($posts[SPONSOR_PLATINUM] as $p): ?>
            <div class="col-4 col-sm-2">
              <a class="sponsor__summary" href="<?= get_permalink($p->ID); ?>">
                <img class="sponsor__summary-image img-fluid" src="<?= get_template_directory_uri() ?>/assets/images/placeholder.png">
              </a>
            </div>
          <?php endforeach; ?>

          <footer class="col-12">
            <hr>

            <div class="col-12 col-sm-6 offset-sm-3">
              <p class="text-center">
                スポンサーになって一緒にイベントを盛り上げませんか？
              </p>

              <a class="btn btn-block btn-lg btn-primary" href="/supporters">
                スポンサーになる！
              </a>
            </div>
          </footer>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>