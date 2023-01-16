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
            <a>全て</a>
          </li>
          <li>
            <a>制作協力?</a>
          </li>
          <li>
            <a>技術サポート?</a>
          </li>
          <li>
            <a>イベントスタッフ?</a>
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
            <a>新しい順</a>
          </li>
          <li>
            <a>古い順</a>
          </li>
        </ul>
      </div>
    </div>
    <button class="new-post" onclick="">
      <i class="fa-solid fa-pen"></i> 投稿する
    </button>
  </div>
</div>