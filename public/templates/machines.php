<section class="substrate">
  <div class="container">
    <header>
      <h1><?= $title; ?></h1>
      <hr>
    </header>

    <?php if (!empty($machines)): ?>
      <div class="row justify-content-center">
        <?php foreach ($machines as $machine): ?>
          <div class="col-12 col-md-6 col-lg-5 px-3 mb-5">
            <div class="card">
              <a href="machines/<?= $machine['id']; ?>">
                <img src="<?= $machine['image_path_1']; ?>" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <h3><?= $machine['title']; ?></h3>
                <p><?= $machine['description']; ?></p>
              </div>
              <div class="card-footer border-0 bg-white text-right text-md-left px-3 pb-3">
                <a href="/machines/<?= $machine['id']; ?>" class="btn btn-base">Подробнее »</a>
              </div>
            </div>
          </div>
        <?php endforeach;; ?>
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
