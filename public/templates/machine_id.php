<section>
    <div class="container">
        <header>
            <h1 class="text-blue"><?= $title; ?></h1>
            <hr>
        </header>

        <div class="row mb-5">
            <div class="col-12 col-md-6 pr-md-3 mb-5 mb-md-0">
                <?php if (!empty($machine['image_path_1'])): ?>
                    <div id="carouselExaontrols" class="carousel slide" data-ride="carousel" data-interval="false">
                        <div class="carousel-inner">
                            <?php if (!empty($machine['image_path_1'])): ?>
                                <div class="carousel-item active">
                                    <img src="<?= $machine['image_path_1']; ?>" class="d-block w-100" alt="...">
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($machine['image_path_2'])): ?>
                                <div class="carousel-item">
                                    <img src="<?= $machine['image_path_2']; ?>" class="d-block w-100" alt="...">
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($machine['image_path_3'])): ?>
                                <div class="carousel-item">
                                    <img src="<?= $machine['image_path_3']; ?>" class="d-block w-100" alt="...">
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($machine['image_path_4'])): ?>
                                <div class="carousel-item">
                                    <img src="<?= $machine['image_path_4']; ?>" class="d-block w-100" alt="...">
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($machine['image_path_5'])): ?>
                                <div class="carousel-item">
                                    <img src="<?= $machine['image_path_5']; ?>" class="rounded w-100" alt="...">
                                </div>
                            <?php endif; ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExaontrols" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExaontrols" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                <?php else: ?>
                    <img src="public/media/placeholder.jpg" alt="">
                <?php endif; ?>
            </div>

            <div class="col-12 col-md-6 pl-md-3">
                <p class="description mb-3">
                    <?= $machine['description']; ?>
                </p>

                <?php if (!empty($machine['passport_url'])): ?>
                    <p class="mb-2">
                        <a href="<?= $machine['passport_url']; ?>" class="btn btn-base" download=""><span
                                    class="icon icon-doc"></span>Технический паспорт</a>
                    </p>
                <?php endif; ?>

                <?php if (!empty($machine['conditions_url'])): ?>
                    <p class="mb-2">
                        <a href="<?= $machine['conditions_url']; ?>" class="btn btn-base" download=""><span
                                    class="icon icon-pdf"></span>Технические условия</a>
                    </p>
                <?php endif; ?>

                <?php if (!empty($machine['manual_url'])): ?>
                    <p>
                        <a href="<?= $machine['manual_url']; ?>" class="btn btn-base" download=""><span
                                    class="icon icon-doc"></span>Руководство
                            по эксплуатации</a>
                    </p>
                <?php endif; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-6 pr-lg-3 mb-5 mb-lg-0">
                <h2>Технические характеристики</h2>
                <div class="substrate p-3">
                    <table class="w-100 td-center">
                        <tr>
                            <th>Диаметр обрабатываемых деталей или блоков</th>
                            <td><?= $machine['diameter']; ?> мм</td>
                        </tr>
                        <tr>
                            <th>Количество шпинделей</th>
                            <td><?= $machine['spills_number']; ?> шт</td>
                        </tr>
                        <tr>
                            <th>Частота вращения шпинделя</th>
                            <td><?= $machine['spills_rotation']; ?> об/мин</td>
                        </tr>
                        <?php if (!empty($machine['eccentric_rotation'])): ?>
                            <tr>
                                <th>Частота вращения эксцентрика</th>
                                <td><?= $machine['eccentric_rotation']; ?></td>
                            </tr>
                        <?php endif; ?>
                        <tr>
                            <th>Скорость качания поводка</th>
                            <td><?= $machine['lead_speed']; ?></td>
                        </tr>
                        <tr>
                            <th>Мощность двигателя шпинделя</th>
                            <td><?= $machine['spills_driver_power']; ?> кВт</td>
                        </tr>
                        <?php if (!empty($machine['lead_driver_power'])): ?>
                        <tr>
                            <th>Мощность двигателя поводка</th>
                            <td><?= $machine['lead_driver_power']; ?> кВт</td>
                        </tr>
                        <?php endif; ?>
                        <?php if (!empty($machine['source_power'])): ?>
                        <tr>
                            <th>Напряжение питания/частота тока</th>
                            <td><?= $machine['source_power']; ?> В / <?= $machine['frequency']; ?> Гц</td>
                        </tr>
                        <?php endif; ?>
                        <?php if (!empty($machine['engine_type'])): ?>
                        <tr>
                            <th>Тип двигателей</th>
                            <td><?= $machine['engine_type']; ?></td>
                        </tr>
                        <?php endif; ?>
                        <tr>
                            <th>Суммарная мощность всех электродвигателей</th>
                            <td><?= $machine['total_capacity']; ?> кВт</td>
                        </tr>
                        <tr class="borderless">
                            <th>Габаритные размеры станка</th>
                        </tr>
                        <tr class="borderless">
                            <td>– длина</td>
                            <td><?= $machine['length']; ?> мм</td>
                        </tr>
                        <tr class="borderless">
                            <td>– ширина</td>
                            <td><?= $machine['width']; ?> мм</td>
                        </tr>
                        <tr>
                            <td class="pb-2">– высота</td>
                            <td><?= $machine['height']; ?> мм</td>
                        </tr>
                        <tr class="borderless">
                            <th>Точность образца обработанного на станке</th>
                        </tr>
                        <tr class="borderless">
                            <td>– предельное отклонение стрелки прогиба, выраженное числом интерференционных колец</td>
                            <td><?= $machine['accuracy_deflection']; ?></td>
                        </tr>
                        <tr class="borderless">
                            <td>– предельное отклонение формы поверхности, выраженное числом интерференционных колец
                            </td>
                            <td><?= $machine['accuracy_form']; ?></td>
                        </tr>
                        <tr class="borderless">
                            <td>– шероховатость обработанной поверхности не более</td>
                            <td><?= $machine['surface_undulation']; ?></td>
                        </tr>
                        <tr class="borderless">
                            <td>– при полировании</td>
                            <td><?= $machine['undulation_finish']; ?></td>
                        </tr>
                        <tr>
                            <td>– при супер полировании</td>
                            <td><?= $machine['undulation_superfinish']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="col-12 col-lg-6 pl-lg-3">
                <div class="row mb-5">
                    <h2>Основные сведения об изделии и изготовителе</h2>
                    <div class="substrate p-3">
                        <table class="w-100">
                            <tr>
                                <th>Наименование изделия</th>
                                <td><?= $machine['name']; ?></td>
                            </tr>
                            <tr>
                                <th>Обозначение (тип, модель)</th>
                                <td><?= $machine['model']; ?></td>
                            </tr>
                            <tr>
                                <th>Назначенный срок службы</th>
                                <td><?= $machine['durability']; ?></td>
                            </tr>
                            <tr>
                                <th>Изготовитель</th>
                                <td><?= $machine['manufacturer']; ?></td>
                            </tr>
                            <tr>
                                <th>Почтовый и юридический адрес</th>
                                <td><?= $machine['address']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="row" id="contact">
                    <h2>Цены и другую информацию уточняйте у наших специалистов</h2>
                    <?php require("_contact.php"); ?>
                </div>
            </div>
        </div>
    </div>
</section>