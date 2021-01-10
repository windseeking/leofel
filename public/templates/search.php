<section>
  <div class="container">
    <?php if (empty($machines) && empty($materials)): ?>
      <p class="text-xl mb-4">По запросу «<span class="weight-500"><?= $search; ?></span>» ничего не найдено</p>
    <?php else: ?>
      <p class="text-xl mb-4">По запросу «<span class="weight-500"><?= $search; ?></span>» найдены следующие позиции:
      </p>
    <?php endif; ?>

    <?php if (!empty($machines)): ?>
      <header>
        <h1 class="text-blue">Станки</h1>
        <hr>
      </header>

      <div class="row justify-content-start mb-5">
        <?php foreach ($machines as $machine): ?>
          <div class="col-12 col-md-5 px-3 mb-4">
            <div class="card">
              <a href="machines/<?= $machine['id']; ?>">
                <img src="<?= $machine['image_path_1']; ?>" class="card-img-top" alt="<?= $machine['title']; ?>">
              </a>
              <div class="card-body">
                <h5 class="card-title"><?= $machine['title']; ?></h5>
                <p class="card-text"><?= $machine['description']; ?></p>
                <a href="machines/<?= $machine['id']; ?>" class="btn btn-base">Подробнее »</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <?php if (!empty($materials)): ?>
      <header>
        <h1 class="text-blue">Вспомогательные материалы</h1>
        <hr>
      </header>
      <div class="row justify-content-start">
        <?php foreach ($materials as $material): ; ?>
          <div class="col-12 col-md-4 px-3 mb-4">
            <div class="card">
              <a href="materials/<?= $material['sef_url']; ?>">
                <?php if (!empty($material['image_path_1'])): ?>
                <img src="<?= $material['image_path_1']; ?>" class="card-img-top" alt="<?= $material['title']; ?>">
                <?php else: ?>
                <img src="public/media/placeholder.jpg" class="card-img-top" alt="...">
                <?php endif; ?>
              </a>
              <div class="card-body">
                <h5 class="card-title"><?= $material['title']; ?></h5>
                <p class="card-text"><?= $material['description']; ?></p>
                <a href="materials/<?= $material['sef_url']; ?>" class="btn btn-base">Подробнее »</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <!--<header>
      <h1 class="text-blue">Услуги</h1>
      <hr>
    </header>
    <div class="row substrate justify-content-start mb-4 p-4">
        <div class="col-2 pr-3">
          <img src="../img/placeholder-square.jpg" width="100%" class="rounded-circle mx-auto" alt="...">
        </div>

        <div class="col-10 pl-3">
          <h2 class="text-blue">Изготовление оптических деталей</h2>
          <p>
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat
            nulla pariatur
          </p>
          <a href="..." class="btn btn-base">Подробнее »</a>
        </div>
      </div>
    </div>-->
  </div>
</section>