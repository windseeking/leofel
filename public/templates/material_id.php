<section>
    <div class="container">
        <header>
            <h1 class="text-blue"><?= $title; ?></h1>
            <hr>
        </header>

        <div class="row mb-5">
            <div class="col-12 col-md-6 pr-md-3 mb-5 mb-md-0">
                <?php if (!empty($material['image_path_1'])): ?>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
                        <div class="carousel-inner">
                            <?php if (!empty($material['image_path_1'])): ?>
                                <div class="carousel-item active">
                                    <img src="<?= $material['image_path_1']; ?>" class="d-block w-100" alt="...">
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($material['image_path_2'])): ?>
                                <div class="carousel-item">
                                    <img src="<?= $material['image_path_2']; ?>" class="d-block w-100" alt="...">
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($material['image_path_3'])): ?>
                                <div class="carousel-item">
                                    <img src="<?= $material['image_path_3']; ?>" class="d-block w-100" alt="...">
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($material['image_path_4'])): ?>
                            <div class="carousel-item">
                                <img src="<?= $material['image_path_4']; ?>" class="d-block w-100" alt="...">
                            </div>
                            <?php endif; ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                <?php else: ?>
                    <img src="public/media/placeholder.jpg" class="rounded w-100" alt="">
                <?php endif; ?>
            </div>

            <div class="col-12 col-md-6 pl-md-3">
                <p class="description">
                    <?= $material['description']; ?>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-6 pr-lg-3 mb-5 mb-lg-0">
                <h2>Основные характеристики</h2>
                <div class="substrate p-3">
                    <table class="w-100">
                        <tr>
                            <th>Материал</th>
                            <td><?= $material['matter']; ?></td>
                        </tr>
                        <tr>
                            <th>Размер зерна</th>
                            <td><abbr title="По ГОСТ 3647"><?= $material['grain_gost']; ?></abbr> / <abbr
                                        title="По FEPA"><?= $material['grain_fepa']; ?></abbr></td>
                        </tr>
                        <tr>
                            <th>Фасовка</th>
                            <td><?= $material['packing']; ?></td>
                        </tr>
                        <?php if (!empty($material['price'])): ?>
                            <tr class="price">
                                <th>Цена</th>
                                <td><?= $material['price']; ?> руб.</td>
                            </tr>
                        <?php endif; ?>
                    </table>
                </div>
            </div>

            <div class="col-12 col-lg-6 pl-lg-3" id="contact">
                <h2>Дополнительную информацию уточняйте у наших специалистов</h2>
                <?php require("_contact.php"); ?>
            </div>
        </div>
    </div>
</section>
