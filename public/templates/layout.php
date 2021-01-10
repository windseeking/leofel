<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <base href="https://leofel.ru/">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Slick Slider -->
  <link rel="stylesheet" type="text/css" href="public/css/slick.css">
  <link rel="stylesheet" type="text/css" href="public/css/slick-theme.css">

  <link rel="stylesheet" href="public/css/style.css">

  <title><?= $title; ?> • Леофел</title>
  <meta name="description" content="<?= $description; ?>">
  <meta name="keywords" content="шлифовальный станок, шлифовально полировальный станок, плоскошлифовальный станок,
доводочно полировальный станок, изготовление оптических деталей, оптическое производство спб, шлифовальный порошок,
шлифпорошок, полировка оптического стекла">

  <meta property="og:title" content="<?= $title; ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://leofel.ru">
  <meta property="og:image" content="<?= $img; ?>">
  <meta property="og:site_name" content="Леофел">
  <link rel="canonical" href="https://leofel.ru">

  <!-- Общие настройки иконок -->
  <link rel="icon" href="public/media/favicon.png" sizes="32x32">
  <link rel="shortcut icon" href="public/media/favicon.png" type="image/png">

  <!-- Иконки для Apple -->
  <link rel="apple-touch-icon" href="public/media/favicon.png">

  <!-- Закладка Yandex.Browser -->
  <meta name="yandex-tableau-widget" content="logo=https:/leofel.ru/public/media/yandex-tab.png,color=#70B991">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function () {
          $(window).scroll(function () {
              if ($(this).scrollTop() > 100) {
                  $('.scrollup').fadeIn();
              } else {
                  $('.scrollup').fadeOut();
              }
          });
          $('.scrollup').click(function () {
              $("html, body").animate({scrollTop: 0}, 600);
              return false;
          });
      });
  </script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light px-0 py-2 mb-3">
  <div class="container justify-content-between align-items-center py-2 mb-3 mb-lg-0">
    <div class="col-1">
      <a class="navbar-brand m-0 p-0" href="https://leofel.ru">
        <img src="public/media/logo-leofel.svg" width="200%" alt="Леофел" title="Леофел">
      </a>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#toggler"
            aria-controls="toggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="toggler">
      <div class="col justify-content-lg-between p-0 my-3 my-lg-0 mx-auto">
        <div class="row">
          <div class="col-lg-10 p-0 mx-auto">
            <form class="mb-3" action="/search">
              <input class="form-control mr-sm-2" name="q" type="search" autocomplete="off" placeholder="Поиск"
                     aria-label="Search" required>
            </form>
          </div>

          <ul class="navbar-nav mr-auto mx-lg-auto">
            <li class="nav-item <?php echo ($title == 'Главная') ? 'active' : ''; ?> mr-5">
              <a class="nav-link p-0" href="https://leofel.ru">Главная</a>
            </li>
            <li class="nav-item dropdown <?php echo ($subtitle == 'Продукты') ? 'active' : ''; ?> mr-5">
              <a class="nav-link dropdown-toggle p-0" href="" role="button" data-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false">
                Продукты
              </a>
              <div class="dropdown-menu mb-3 mb-lg-0" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/machines">Станки для шлифовки и полировки оптических деталей</a>
                <a class="dropdown-item" href="/materials">Вспомогательные материалы для оптического
                  производства</a>
              </div>
            </li>
            <li class="nav-item dropdown <?php echo ($subtitle == 'Услуги') ? 'active' : ''; ?> mr-5">
              <a class="nav-link dropdown-toggle p-0" href="" role="button" data-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false">
                Услуги
              </a>
              <div class="dropdown-menu mb-3 mb-lg-0" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/izgotovleniye-opticheskikh-detaley">Изготовление оптических
                  деталей</a>
                <a class="dropdown-item" href="/proyektirovaniye-tekhnologicheskogo-oborudovaniya">Проектирование
                  технологического
                  оборудования</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link p-0" href="index#contact">Контакты</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-lg-3 p-0">
        <ul class="list-unstyled mb-0">
          <li class="text-nowrap mb-3">
            <span class="icon icon-phone"></span>
            <a href="tel:+79112729059">+7 (911) 272-90-59</a>
          </li>
          <li class="text-nowrap">
            <span class="icon icon-mail"></span>
            <a href="mailto:leofel@list.ru">leofel@list.ru</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<main>
  <?= $content; ?>
</main>

<footer>
  <div class="container">
    <div class="row justify-content-lg-between align-items-start mb-3 mb-md-5">
      <div class="col-12 col-lg-5 pr-lg-1 mb-4 mb-lg-0" id="contacts">
        <ul class="list-unstyled">
          <li class="text-nowrap mb-2">
            <span class="icon icon-phone"></span>
            <a href="tel:+79112729059" class="phone">+7 (911) 272-90-59</a>
          </li>
          <li class="text-nowrap mb-2">
            <span class="icon icon-mail"></span>
            <a href="mailto:leofel@list.ru" class="email">leofel@list.ru</a>
          </li>
          <li>
            <address><span class="icon icon-place"></span>
              Санкт-Петербург, Красное Село, ул. Свободы, 48
            </address>
          </li>
        </ul>
      </div>

      <div class="col-12 col-lg-3 footer-nav pr-lg-1">
        <h2>Продукты</h2>
        <ul class="list-unstyled">
          <li><a href="/machines">Станки для шлифовки и полировки оптических деталей</a></li>
          <li><a href="/materials">Вспомогательные материалы для оптического производства</a></li>
        </ul>
      </div>

      <div class="col-12 col-lg-3 footer-nav pl-lg-1 mb-3 mb-md-0">
        <h2>Услуги</h2>
        <ul class="list-unstyled">
          <li><a href="/izgotovleniye-opticheskikh-detaley">Изготовление оптических деталей</a></li>
          <li><a href="/proyektirovaniye-tekhnologicheskogo-oborudovaniya">Проектирование технологического оборудования</a></li>
        </ul>
      </div>
    </div>

    <div class="row justify-content-md-between align-items-center">
      <div class="col-12 col-md-2 text-center text-md-left order-2 order-md-1 mb-2 mb-md-0">
        <img src="public/media/logo-leofel.svg" width="25%" alt="Леофел" title="Леофел">
      </div>

      <div class="col-12 col-md-6 order-1 order-md-2 px-md-3 mx-md-auto mb-5 mb-md-0" id="docs">
        <ul class="list-inline text-center">
          <li class="list-inline-item mr-sm-3"><a href="/documents/invoice">Реквизиты</a></li>
          <li class="list-inline-item mr-sm-3 mr-md-0 mr-lg-3"><a href="/documents/terms">Соглашение</a></li>
          <li class="list-inline-item"><a href="/documents/privacy">Конфеденциальность</a></li>
        </ul>
      </div>

      <div class="col-12 col-md-4 col-lg-3 order-3">
        <p class="text-center text-md-right text-grey text-m">© ИП Леснов Олег, 2019</p>
      </div>
    </div>
  </div>
</footer>
<!-- jQuery first, Popper.js, Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

<!-- jQuery плагин Masked Input -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="public/js/jquery.maskedinput.min.js"></script>

<!-- Slick Slider -->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script type="text/javascript" src="public/js/slick.js"></script>

<script>
    $(document).ready(function () {
        $("#call-phone").mask("+7 (999) 99-99-999");
    });

    $('.responsive').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

</script>

<a href="#" class="scrollup">Наверх</a>
</body>
</html>