<ul class="nav tab justify-content-end mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link <?= $write_active; ?>" id="pills-write-tab" data-toggle="pill" href="#pills-write" role="tab"
       aria-controls="pills-write" aria-selected=" <?= $write_selected; ?>">Написать</a>
  </li>
  <li class="xs-hide">|</li>
  <li class="nav-item ml-4 ml-sm-0">
    <a class="nav-link <?= $call_active; ?>" id="pills-call-tab" data-toggle="pill" href="#pills-call" role="tab"
       aria-controls="pills-call" aria-selected=" <?= $call_selected; ?>">Заказать звонок</a>
  </li>
</ul>

<div class="tab-content" id="pills-tab-content">
  <div class="tab-pane fade <?= $write_tab; ?>" id="pills-write" role="tabpanel"
       aria-labelledby="pills-write-tab">
    <form class="substrate" method="post" action="<?= $action; ?>">
      <div class="form-row justify-content-between mb-3">
        <div class="form-group col-12 col-md-5 mb-3 mb-md-0">
          <label for="write-name">Имя<sup title="Обязательно для заполнения">*</sup></label>
          <?php $class = isset($write_errors['name']) ? 'is-invalid' : '';
          $value = isset($write_contact['name']) ? $write_contact['name'] : ''; ?>
          <input name="write_contact[name]" type="text" class="form-control <?= $class; ?>" id="write-name"
                 value="<?= $value; ?>">
          <?php if (isset($write_errors['name'])): ; ?>
            <div class="invalid-feedback">
              <?= $write_errors['name']; ?>
            </div>
          <?php endif; ?>
        </div>

        <div class="form-group col-12 col-md-6">
          <label for="write-email">Email<sup title="Обязательно для заполнения">*</sup></label>
          <?php $class = isset($write_errors['email']) ? 'is-invalid' : '';
          $value = isset($write_contact['email']) ? $write_contact['email'] : ''; ?>
          <input name="write_contact[email]" type="email" class="form-control <?= $class; ?>" id="write-email"
                 placeholder="example@mail.com"
                 value="<?= $value; ?>">
          <?php if (isset($write_errors['email'])): ; ?>
            <div class="invalid-feedback">
              <?= $write_errors['email']; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <div class="form-group mb-3">
        <label for="message">Сообщение<sup title="Обязательно для заполнения">*</sup></label>
        <?php $class = isset($write_errors['message']) ? 'is-invalid' : '';
        $value = isset($write_contact['message']) ? $write_contact['message'] : ''; ?>
        <textarea name="write_contact[message]" class="form-control <?= $class; ?>" id="message"
                  rows="4"><?= $value; ?></textarea>
        <?php if (isset($write_errors['message'])): ; ?>
          <div class="invalid-feedback">
            <?= $write_errors['message']; ?>
          </div>
        <?php endif; ?>
      </div>

      <div class="form-row justify-content-between">
        <div class="form-group col-12 col-md-5 col-lg-12 text-right text-md-left mb-3 mb-md-0 mb-lg-3">
          <button type="submit" class="btn btn-form">Отправить</button>
        </div>

        <div class="form-group col-12 col-md-7 col-lg-12">
          <p class="text-xs text-light">
            Нажимая кнопку «Отправить», вы даёте своё согласие на обработку персональных данных в соответствии с
            «<a href="/documents/privacy">Политикой конфиденциальности</a>»
          </p>
        </div>
      </div>
      <?php if (isset($_SESSION['write-errors'])): ?>
        <div class="alert alert-danger mt-3" role="alert">
          <span class="icon icon-error"></span>
          <?= $_SESSION['write-errors'];
          unset($_SESSION['write-errors']); ?>
        </div>
      <?php endif; ?>

      <?php if (isset($_SESSION['write-success'])): ?>
        <div class="alert alert-success mt-3" role="alert">
          <span class="icon icon-success"></span>
          <?= $_SESSION['write-success'];
          unset($_SESSION['write-success']); ?>
        </div>
      <?php endif; ?>
    </form>
  </div>

  <div class="tab-pane fade <?= $call_tab; ?>" id="pills-call" role="tabpanel"
       aria-labelledby="pills-call-tab">
    <form class="substrate" method="post" action="<?= $action; ?>">
      <div class="form-row justify-content-between mb-3">
        <div class="form-group col-12 col-md-5 mb-3 mb-md-0">
          <label for="call-name">Имя<sup title="Обязательно для заполнения">*</sup>
            <?php $class = isset($call_errors['name']) ? 'is-invalid' : '';
            $value = isset($call_contact['name']) ? $call_contact['name'] : ''; ?>
            <input name="call_contact[name]" type="text" class="form-control <?= $class; ?>" id="call-name"
                   value="<?= $value; ?>">
            <?php if (isset($call_errors['name'])): ; ?>
              <div class="invalid-feedback">
                <?= $call_errors['name']; ?>
              </div>
            <?php endif; ?>
        </div>

        <div class="form-group col-12 col-md-6">
          <label for="call-phone">Телефон<sup title="Обязательно для заполнения">*</sup></label>
          <?php $class = isset($call_errors['phone']) ? 'is-invalid' : '';
          $value = isset($call_contact['phone']) ? $call_contact['phone'] : ''; ?>
          <input name="call_contact[phone]" type="tel" class="form-control <?= $class; ?>" id="call-phone"
                 placeholder="+7 (900) 000-00-00" value="<?= $value; ?>">
          <?php if (isset($call_errors['phone'])): ; ?>
            <div class="invalid-feedback">
              <?= $call_errors['phone']; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <div class="form-group mb-3">
        <label for="call-time">Удобное время для звонка<sup title="Обязательно для заполнения">*</sup></label>
        <?php $class = isset($call_errors['time']) ? 'is-invalid' : '';
        $value = isset($call_contact['time']) ? $call_contact['time'] : ''; ?>
        <textarea name="call_contact[time]" class="form-control <?= $class; ?>" id="call-time"
                  rows="1"><?= $value; ?></textarea>

        <?php if (isset($call_errors['time'])): ; ?>
          <div class="invalid-feedback">
            <?= $call_errors['time']; ?>
          </div>
        <?php endif; ?>
      </div>

      <div class="form-row justify-content-between">
        <div class="form-group col-12 col-sm-6 col-lg-12 mb-3 mb-sm-0 mb-lg-3">
          <button type="submit" class="btn btn-form">Заказать звонок</button>
        </div>

        <div class="form-group col-12 col-sm-6 col-lg-12">
          <p class="text-xs text-light">
            Нажимая кнопку «Заказать звонок», вы даёте своё согласие на обработку персональных данных в соответствии с
            «<a href="/documents/privacy">Политикой конфиденциальности</a>»
          </p>
        </div>
      </div>
      <?php if (isset($_SESSION['call-errors'])): ?>
        <div class="alert alert-danger mt-3" role="alert">
          <span class="icon icon-error"></span>
          <?= $_SESSION['call-errors'];
          unset($_SESSION['call-errors']); ?>
        </div>
      <?php endif; ?>

      <?php if (isset($_SESSION['call-success'])): ?>
        <div class="alert alert-success mt-3" role="alert">
          <span class="icon icon-success"></span>
          <?= $_SESSION['call-success'];
          unset($_SESSION['call-success']); ?>
        </div>
      <?php endif; ?>
    </form>
  </div>
</div>
