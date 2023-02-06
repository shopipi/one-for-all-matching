<?php
define('URL', '/OneForAll/マッチングシステム')
?>
<div class="tab-menu">

  <div class="menu-btn">
    <i class="fa-solid fa-bars"></i>
  </div>

  <a href="<?php echo URL?>">
    <div class="menu-btn <?php if ($hrefs[0] === '') echo 'select'; ?>" tab="home">
      <i class="fa-solid fa-house"></i>
      <div class="menu-text">ホーム</div>
    </div>
  </a>

  <a href="<?php echo URL?>/posts">
    <div class="menu-btn <?php if ($hrefs[0] === 'posts') echo 'select'; ?>" tab="list">
      <i class="fa-solid fa-table-list"></i>
      <div class="menu-text">
        <?php echo $page_infos['posts']; ?>
      </div>
    </div>
  </a>

  <a href="<?php echo URL?>/bookmark">
    <div class="menu-btn <?php if ($hrefs[0] === 'bookmark') echo 'select'; ?>" tab="bookmark">
      <i class="fa-regular fa-bookmark"></i>
      <div class="menu-text">
        <?php echo $page_infos['bookmark']; ?>
      </div>
    </div>
  </a>

  <a href="<?php echo URL?>/messages">
    <div class="menu-btn <?php if ($hrefs[0] === 'messages') echo 'select'; ?>" tab="messages">
      <i class="fa-regular fa-envelope"></i>
      <div class="menu-text">
        <?php echo $page_infos['messages']; ?>
      </div>
    </div>
  </a>

  <a href="<?php echo URL?>/my-page">
    <div class="menu-btn <?php if ($hrefs[0] === 'my-page') echo 'select'; ?>" tab="my-page">
      <i class="fa-regular fa-folder"></i>
      <div class="menu-text">
        <?php echo $page_infos['my-page']; ?>
      </div>
    </div>
  </a>

  <a href="<?php echo URL?>/help">
    <div class="menu-btn <?php if ($hrefs[0] === 'help') echo 'select'; ?>" tab="help">
      <i class="fa-regular fa-circle-question"></i>
      <div class="menu-text">
        <?php echo $page_infos['help']; ?>
      </div>
    </div>
  </a>

</div>