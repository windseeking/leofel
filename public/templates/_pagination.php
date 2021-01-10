<?php if ($pages > 1): ?>
  <nav aria-label="Page navigation products" class="mt-5">
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <?php $page_num = ($prev_page == 0) ? '#' : $prev_page; ?>
        <a class="page-link" href="<?= $page_name; ?>?page=<?= $page_num; ?>" aria-label="Previous">
          <?php $class = ($cur_page == 1) ? 'disabled' : ''; ?>
          <span class="icon icon-prev <?= $class; ?>" aria-hidden="true"></span>
        </a>
      </li>
      <?php foreach ($pages as $page): ?>
        <?php $class = ($page == $cur_page) ? 'active' : ''; ?>
        <li class="page-item <?= $class; ?>"><a class="page-link"
                                                href="<?= $page_name; ?>?page=<?= $page; ?>"><?= $page; ?></a></li>
      <?php endforeach; ?>
      <li class="page-item">
        <?php $page_num = ($cur_page == $pages_count) ? '' : $next_page; ?>
        <a class="page-link " href="<?= $page_name; ?>?page=<?= $page_num; ?>" aria-label="Next">
          <?php $class = ($cur_page == $pages_count) ? 'disabled' : ''; ?>
          <span class="icon icon-next <?= $class; ?>" aria-hidden="true"></span>
        </a>
      </li>
    </ul>
  </nav>
<?php endif; ?>
