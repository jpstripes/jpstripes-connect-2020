<?php
$speaker = get_speaker_metas($post->ID); ?>
<header class="header header--subpage">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <section class="subpage__hero">
          <h1 class="subpage__hero-title">
            Sessions
          </h1>
        </section>
      </div>
    </div>
  </div>
</header>

<section class="wrapper">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <main class="article">
          <?= $post->post_content ?>

          <h2>
            登壇者について
          </h2>

          <?php
// Using Microformats2 here
?>
          <section class="row h-card speaker__profile">
            <div class="col-12 col-sm-4">
              <?php if ($speaker->iconUrl): ?>
                <img class="u-photo speaker__profile-image" src="<?= $speaker->iconUrl ?>">
              <?php else: ?>
                <img class="u-photo speaker__profile-image" src="<?= get_template_directory_uri() ?>/assets/images/placeholder.png">
              <?php endif; ?>
            </div>

            <div class="col-12 col-sm-8">
              <header class="speaker__profile-header">
                <div>
                  <div class="p-name speaker__profile-name">
                    <?= $speaker->name ?>
                  </div>

                  <div class="p-org speaker__profile-company">
                    <?= $speaker->company ?>
                  </div>
                   
                </div>

                <div class="speaker__profile-header-icons">
                  <?php if ($speaker->twitter): ?>
                    <a class="u-url speaker__profile-icon speaker__profile-icon--twitter" target="_blank" href="<?= $speaker->twitter ?>"></a>
                  <?php endif; ?>

                  <?php if ($speaker->facebook): ?>
                    <a class="u-url speaker__profile-icon speaker__profile-icon--facebook" target="_blank" href="<?= $speaker->facebook ?>"></a>
                  <?php endif; ?>
                </div>
              </header>

              <div class="p-note speaker__profile-detail">
                <?= $speaker->profile ?>
              </div>
            </div>
          </section>

          <hr>

          <a href="/sessions/">
            一覧に戻る
          </a>
        </main>
      </div>
    </div>
  </div>
</section>