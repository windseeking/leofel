<section>
  <div class="container">
    <header>
      <h1 class="text-blue">Документы</h1>
      <hr>
    </header>

    <div class="row">
      <div class="col-12 col-lg-4 tab-x pr-lg-3 mb-3 mb-md-0">
        <div class="nav flex-column" aria-orientation="vertical">
          <a class="nav-link <?php echo (!isset($_GET['tab']) || $_GET['tab'] == 'invoice') ? 'active' : ''; ?>" href="documents/invoice">Реквизиты</a>
          <a class="nav-link <?php echo ($_GET['tab'] == 'terms') ? 'active' : ''; ?>" href="documents/terms">Пользовательское соглашение</a>
          <a class="nav-link <?php echo ($_GET['tab'] == 'privacy') ? 'active' : ''; ?>" href="documents/privacy">Политика обработки персональных данных</a>
        </div>
      </div>
      <div class="col-12 col-lg-8 pl-lg-3">
        <div class="substrate p-4">
          <?= $document; ?>
        </div>
      </div>
    </div>
  </div>
</section>
