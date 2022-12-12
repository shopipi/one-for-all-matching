<?php
// define('PASSWORD', 'private');
// include 'certification.php';
?>

<?php
date_default_timezone_set('Asia/Tokyo');
require 'functions.php';
?>

<?php
$category_map =
[
  'creative'    => '制作協力?',
  'skill'       => '技術サポート?',
  'event-staff' => 'イベントスタッフ?'
];
$category_str = isset($_GET['c']) ? $category_map[$_GET['c']] : '全て';

$order_by_map =
[
  'newest' => '新しい順',
  'oldest' => '古い順'
];
$order_by_str = isset($_GET['o']) ? $order_by_map[$_GET['o']] : $order_by_map['newest'];
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
  <?php
  LoadItemWithNoCache('style.css');
  LoadItemWithNoCache('style-mobile.css');
  LoadItemWithNoCache('post-card.css');
  LoadItemWithNoCache('post-card-mobile.css');
  ?>

  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <?php
  LoadItemWithNoCache('script.js');
  LoadItemWithNoCache('post-card.js');
  ?>
  
  <title>7校合同マッチングシステム</title>
</head>

<body>
  <div class="main-contents-wrapper">
    <?php
    include 'post-card.php';
    include 'post-card.php';
    include 'post-card.php';
    include 'post-card.php';
    include 'post-card.php';
    ?>
  </div>
  <div class="top-menu">
    <div class="search-box">
      <input type="search" id="search-text" placeholder="#もしくはキーワードで検索">
      <i class="fa-solid fa-magnifying-glass"></i>
    </div>
    <button class="filter mobile-only">
      <i class="fa-solid fa-sliders"></i>
    </button>
    <div class="input-container">
      <div class="sort-box">
        <div class="dropdown">
          <div class="inner">
            <p>
              <?php echo $category_str; ?>
            </p>
            <i class="fa-solid fa-chevron-down"></i>
          </div>
          <ul>
            <li>
              <a href="c=all">全て</a>
            </li>
            <li>
              <a href="c=creative">制作協力?</a>
            </li>
            <li>
              <a href="c=skill">技術サポート?</a>
            </li>
            <li>
              <a href="c=event-staff">イベントスタッフ?</a>
            </li>
          </ul>
        </div>
        <div class="dropdown">
          <div class="inner">
            <p>
              <?php echo $order_by_str; ?>
            </p>
            <i class="fa-solid fa-chevron-down"></i>
          </div>
          <ul>
            <li>
              <a href="o=newest">新しい順</a>
            </li>
            <li>
              <a href="o=oldest">古い順</a>
            </li>
          </ul>
        </div>
      </div>
      <button class="new-post" onclick="">
        <i class="fa-solid fa-pen"></i> 投稿する
      </button>
    </div>
  </div>
  <div class="tab-menu">
    <div class="menu-btn">
      <i class="fa-solid fa-bars"></i>
    </div>
    <div class="menu-btn" tab="home">
      <i class="fa-solid fa-house"></i>
    </div>
    <div class="menu-btn select" tab="list">
      <i class="fa-solid fa-table-list"></i>
    </div>
    <div class="menu-btn" tab="bookmark">
      <i class="fa-regular fa-bookmark"></i>
    </div>
    <div class="menu-btn" tab="messages">
      <i class="fa-regular fa-envelope"></i>
    </div>
    <div class="menu-btn" tab="my-page">
      <i class="fa-regular fa-folder"></i>
    </div>
    <div class="menu-btn" tab="help">
      <i class="fa-regular fa-circle-question"></i>
    </div>
  </div>
  <div class="guide-menu">
    <div class="poster"></div>

    <div class="filters">

      <p class="filter-caption">
        <i class="fa-solid fa-filter"></i> 絞り込み検索
      </p>

      <div class="filter-group">
        <p class="caption">学校</p>
        
        <div class="filter"><input type="checkbox" id="cb0" checked><label for="cb0">情報科学</label></div>
        <div class="filter"><input type="checkbox" id="cb1" checked><label for="cb1">横浜医療情報</label></div>
        <div class="filter"><input type="checkbox" id="cb2" checked><label for="cb2">横浜デジタルアーツ</label></div>
        <div class="filter"><input type="checkbox" id="cb3" checked><label for="cb3">横浜fカレッジ</label></div>
        <div class="filter"><input type="checkbox" id="cb4" checked><label for="cb4">横浜リハビリテーション</label></div>
        <div class="filter"><input type="checkbox" id="cb5" checked><label for="cb5">横浜保育福祉</label></div>
        <div class="filter"><input type="checkbox" id="cb6" checked><label for="cb6">横浜実践看護</label></div>
      </div>

      <div class="filter-group">
        <p class="caption">フィルター</p>
        
        <div class="filter"><input type="checkbox" id="cb7"><label for="cb7">チェック1</label></div>
        <div class="filter"><input type="checkbox" id="cb8"><label for="cb8">チェック2</label></div>
        <div class="filter"><input type="checkbox" id="cb9"><label for="cb9">チェック3</label></div>
      </div>

    </div>
  </div>
</body>

</html>