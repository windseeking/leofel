<section class="substrate">
  <div class="container">
    <header>
      <h1><?= $title; ?></h1>
      <hr>
    </header>

    <?php if (!empty($materials)): ?>
      <div class="row justify-content-start">
        <?php foreach ($materials as $material): ?>
          <div class="col-12 col-md-6 col-lg-4 px-3 mb-4">
            <div class="card">
              <a href="/materials/<?= $material['sef_url']; ?>">
                <?php if (!empty($material['image_path_1'])): ?>
                  <img src="<?= $material['image_path_1']; ?>" class="card-img-top" alt="...">
                <?php else: ?>
                  <img src="public/media/placeholder.jpg" class="card-img-top" alt="...">
                <?php endif; ?>
              </a>
              <div class="card-body px-3">
                <h5 class="card-title"><?= $material['title']; ?></h5>
                <p class="card-text"><?= $material['description']; ?></p>
              </div>
              <div class="card-footer border-0 bg-white text-right text-md-left px-3 pb-3">
                <a href="/materials/<?= $material['sef_url']; ?>" class="btn btn-base text-right">Подробнее »</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <?php if ($pages_count > 1): ?>
      <?= include_template("_pagination.php", [
        'pages' => $pages,
        'pages_count' => $pages_count,
        'cur_page' => $cur_page,
        'next_page' => $next_page,
        'prev_page' => $prev_page,
        'page_name' => $page_name
      ])
      ?>
    <?php endif; ?>
  </div>
</section>