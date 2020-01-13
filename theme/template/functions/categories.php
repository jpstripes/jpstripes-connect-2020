<?php
/**
 * DRYed category names.
 */
define('NEWS_CATEGORY', 'news');
define('SPEAKER_SPONSORED', 'sponsored-speakers');
define('SPEAKER_COMMUNITY', 'community-speakers');
define('SPONSOR_PLATINUM', 'platinum-sponsors');
define('SPONSOR_GOLD', 'gold-sponsors');
define('SPONSOR_SILVER', 'silver-sponsors');

/**
 * Page names.
 */
define('SPEAKERS_PAGE', 'speakers');
define('SPONSORS_PAGE', 'sponsors');

/**
 * Initializer script to add categories.
 * You must visit WP admin screen to run this step.
 */
function setup_categories()
{
  // Predefined categories.
  $categories = [
    (object) [
      'slug' => NEWS_CATEGORY,
      'title' => 'News'
    ],
    (object) [
      'slug' => SPEAKER_SPONSORED,
      'title' => 'Speakers (Sponsored)'
    ],
    (object) [
      'slug' => SPEAKER_COMMUNITY,
      'title' => 'Speakers (Community)'
    ],
    (object) [
      'slug' => SPONSOR_PLATINUM,
      'title' => 'Sponsors (Platinum)'
    ],
    (object) [
      'slug' => SPONSOR_GOLD,
      'title' => 'Sponsors (Gold)'
    ],
    (object) [
      'slug' => SPONSOR_SILVER,
      'title' => 'Sponsors (Silver)'
    ],
  ];

  foreach ($categories as $c) {
    $exists = get_category_by_slug($c->slug);

    if ($exists) {
      continue;
    }

    $params = [
      'cat_name' => $c->title,
      'category_nicename' => $c->slug,
      'category_parent' => ''
    ];

    $got = wp_insert_category($params, true);

    if ($got->errors) {
      print_r($got);
      die(
        'failed to create category {$c->slug}, see theme functions/categories.php for more information'
      );
    }
  }
}

add_action('admin_init', 'setup_categories');