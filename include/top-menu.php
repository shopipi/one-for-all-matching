<?php
$category_map =
[
  'creative'    => 'カテゴリ1',
  'skill'       => 'カテゴリ2',
  'event-staff' => 'カテゴリ3'
];
$category_str = isset($_GET['c']) ? $category_map[$_GET['c']] : '全て';

$order_by_map =
[
  'newest' => '新しい順',
  'oldest' => '古い順'
];
$order_by_str = isset($_GET['o']) ? $order_by_map[$_GET['o']] : $order_by_map['newest'];

$caption_only_mode = isset($caption_only_mode) ? $caption_only_mode : false;
$caption = isset($caption) ? $caption : $page_name;
?>
<?php if (!$caption_only_mode): ?>
<div class="top-menu">
<?php else: ?>
<div class="top-menu-caption-only">
<?php endif; ?>
  <?php if (!$caption_only_mode): ?>
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
            <a>カテゴリ1</a>
          </li>
          <li>
            <a>カテゴリ2</a>
          </li>
          <li>
            <a>カテゴリ3</a>
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
  <?php else: ?>
    <span>
      <?php echo $caption; ?>
    </span>
  <?php endif; ?>
</div>