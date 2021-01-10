<section id="start">
  <div class="fullscreen-bg">
    <div class="overlay">
      <div class="row p-3 p-md-5">
        <div class="col-12 col-md-10 col-lg-8 ml-md-5 mr-auto">
          <p>Оптическое производство в Санкт-Петербурге</p>
          <p>Изготовление оптических поверхностей, разработка станков для шлифовки и полировки, продажа шлифовальных
            порошков</p>
          <a href="public/media/video.mp4" target="_blank" class="btn btn-start">Смотреть видео</a>
        </div>
      </div>
    </div>
    <video loop muted autoplay poster="public/media/stanok-5.jpg" class="fullscreen-bg__video">
      <source src="public/media/video.mp4" type="video/mp4">
      <source src="public/media/video.mp4" type="video/webm">
    </video>
  </div>
</section><!--END #start -->

<section class="substrate text-m weight-500" id="about">
  <div class="container">
    <header>
      <h1>Деятельность</h1>
      <hr>
    </header>

    <div class="row justify-content-between mb-9">
      <div class="col-12 col-md-4 mb-4 mb-md-0">
        <div class="row justify-content-center justify-content-md-start">
          <div class="col-2">
            <img src="public/media/number-1.svg" alt="1"></div>
          <div class="col-9 pl-2">
            Изготовление плоских и сферических оптических поверхностей с шероховатостью менее 1Å из ситалла и Ziradur
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4 mb-4 mb-md-0">
        <div class="row justify-content-center justify-content-md-start">
          <div class="col-2">
            <img src="public/media/number-2.svg" alt="2">
          </div>

          <div class="col-9 pl-2">
            Разработка и изготовление станков для шлифовки и полировки прецизионных оптических деталей
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <div class="row justify-content-center justify-content-md-start">
          <div class="col-2">
            <img src="public/media/number-3.svg" alt="3">
          </div>

          <div class="col-9 pl-2">
            Продажа вспомогательных материалов для оптической промышленности
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-between">
      <div class="col-12 col-md-3 mb-5 mb-md-0">
        <p class="numbers">
          10 лет опыта
        </p>
        <p class="text-center">
          обработки деталей с шероховатостью менее 1Å
        </p>
      </div>

      <div class="col-12 col-md-4 mb-5 mb-md-0">
        <p class="numbers">
          4 полировально-доводочных станка
        </p>
        <p class="text-center">
          изготовлено и реализовано
        </p>
      </div>

      <div class="col-12 col-md-3">
        <p class="numbers">
          более 10.000 деталей
        </p>
        <p class="text-center">
          произведено и реализовано за время работы
        </p>
      </div>
    </div>
  </div>
</section><!--END #about -->

<section id="products">
  <div class="container">
    <header>
      <h1>Каталог продукции</h1>
      <hr>
    </header>

    <ul class="nav tab justify-content-end mb-3" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-machines-tab" data-toggle="pill" href="#pills-machines" role="tab"
           aria-controls="pills-machines" aria-selected="true">Станки</a>
      </li>
      <li class="xs-hide sm-hide">|</li>
      <li class="nav-item text-right ml-4 ml-md-0">
        <a class="nav-link" id="pills-materials-tab" data-toggle="pill" href="#pills-materials" role="tab"
           aria-controls="pills-materials" aria-selected="false">Вспомогательные материалы</a>
      </li>
    </ul>

    <div class="tab-content mb-4" id="pills-tab-content">
      <div class="tab-pane fade show active" id="pills-machines" role="tabpanel" aria-labelledby="pills-machines-tab">
        <div class="row justify-content-center mb-5">
          <?php foreach ($machines as $machine): ?>
            <div class="col-12 col-md-5 col-lg-4 mr-md-4 mb-3 mb-md-0">
              <div class="card card-material card-transform">
                <a href="/machines/<?= $machine['id']; ?>">
                  <img src="<?= $machine['image_path_1']; ?>" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title"><?= $machine['title']; ?></h5>
                  <p class="card-text"><?= $machine['description']; ?></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="row justify-content-center">
          <a href="/machines" class="btn btn-base text-xl">Смотреть весь каталог</a>
        </div>
      </div>

      <div class="tab-pane fade" id="pills-materials" role="tabpanel" aria-labelledby="pills-materials-tab">
        <div class="row autoplay responsive slider">
          <?php foreach ($materials as $material): ?>
            <div class="px-3">
              <div class="card card-material card-transform">
                <a href="/materials/<?= $material['sef_url']; ?>">
                  <?php if (!empty($material['image_path_1'])): ?>
                    <img src="<?= $material['image_path_1']; ?>" class="card-img-top" alt="...">
                  <?php else: ?>
                    <img src="public/media/placeholder.jpg" class="card-img-top" alt="...">
                  <?php endif; ?>
                </a>
                <div class="card-body">
                  <h5 class="card-title"><?= $material['title']; ?></h5>
                  <p class="card-text"><?= $material['description']; ?></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="row justify-content-center">
          <a href="/materials" class="btn btn-base text-xl">Смотреть весь каталог</a>
        </div>
      </div>
    </div>
  </div>
</section><!--END #products -->

<section class="substrate" id="services">
  <div class="container">
    <header>
      <h1>Услуги</h1>
      <hr>
    </header>

    <div class="row justify-content-between justify-content-md-around justify-content-lg-center mb-5">
      <div class="col-12 col-md-3 mr-md-4 mb-3 mb-md-0">
        <img src="public/media/placeholder-square.jpg" width="100%" class="rounded-circle mx-auto" alt="...">
      </div>

      <div class="col-12 col-md-7">
        <h2 class="text-xl text-blue mb-3">Изготовление оптических деталей</h2>
        <p class="text-m mb-3">

        </p>
        <a href="/izgotovleniye-opticheskikh-detaley" class="btn btn-base">Подробнее »</a>
      </div>
    </div>

    <div class="row justify-content-between justify-content-lg-center">
      <div class="col-12 col-md-3 mr-md-4 mb-3 mb-md-0">
        <img src="public/media/placeholder-square.jpg" width="100%" class="rounded-circle mx-auto" alt="...">
      </div>

      <div class="col-12 col-md-7">
        <h2 class="text-xl text-blue mb-3">Проектирование технологического оборудования</h2>
        <p class="text-m mb-3">
        </p>
        <a href="/proyektirovaniye-tekhnologicheskogo-oborudovaniya" class="btn btn-base">Подробнее »</a>
      </div>
    </div>
  </div>
</section><!--END #services -->

<section id="partners">
  <div class="container">
    <header>
      <h1>Партнеры</h1>
      <hr>
    </header>

    <div class="row justify-content-md-between justify-content-lg-around">
      <div class="col-12 col-md-6 col-lg-5 text-center align-self-center p-0 pr-md-4 mb-5 mb-md-0">
        <img src="public/media/logo-lasex.svg" alt="Лазекс" width="262" class="mb-4">
        <h2 class="text-xl text-dark mb-4">АО «ЛАЗЕКС»</h2>
        <p class="text-l weight-500 mb-4">
          Разработчик и производитель навигационных систем для гражданской авиации
        </p>
        <a href="https://www.polyus.info/" target="_blank" class="btn btn-base">На сайт »</a>
      </div>

      <div class="col-12 col-md-6 col-lg-5 text-center align-self-center p-0 pl-md-4">
        <img src="public/media/logo-polus.svg" alt="Полюс" width="262" class="mb-4">
        <h2 class="text-xl text-dark mb-4">АО «НИИ «Полюс» им. М.Ф. Стельмаха»</h2>
        <p class="text-l weight-500 mb-4">
          Ведущий научный центр в области лазерных технологий. Входит в холдинг «Швабе»
          Госкорпорации «Ростех»
        </p>
        <a href="https://www.polyus.info/" target="_blank" class="btn btn-base">На сайт »</a>
      </div>
    </div>
  </div>
</section><!--END #partners -->

<section id="contact">
  <div class="container">

    <div class="row justify-content-between">
      <div class="col-12 col-lg-5 order-2 order-lg-1">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d340404.2934306117!2d29.837891207441057!3d59.90037440871705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4696162b2302848b%3A0x1f537d1fa9ffcbaf!2z0YPQuy4g0KHQstC-0LHQvtC00YssIDQ4LCDQmtGA0LDRgdC90L7QtSDQodC10LvQviwg0KHQsNC90LrRgi3Qn9C10YLQtdGA0LHRg9GA0LMsIDE5ODMyMA!5e0!3m2!1sru!2sru!4v1571512753903!5m2!1sru!2sru"
          width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>

      <div class="col-12 col-lg-7 order-1 order-lg-2 pl-lg-5 mb-4 mb-lg-0">
        <header>
          <h1>Контакты</h1>
          <hr>
        </header>
        <?php require("_contact.php"); ?>
      </div>
    </div>
  </div>
</section><!--END #contact -->
