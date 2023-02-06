<?php
// define('PASSWORD', 'private');
// include 'certification.php';
?>

<?php
date_default_timezone_set('Asia/Tokyo');
require 'functions.php';
?>

<?php
$page_infos =
[
  ''      => '',
  'posts' => '投稿一覧',
  'bookmark' => 'ブックマーク',
  'messages' => 'メッセージ',
  'my-page' => 'マイページ',
  'help' => 'ヘルプ'
];

$href = urldecode($_SERVER['REQUEST_URI']);
$href = explode('?', $href)[0];
$hrefs = explode('/', $href);
array_splice($hrefs, 0, 3);
$page_name = $page_infos[$hrefs[0]];
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
  <?php
  LoadItemWithNoCache('css/style.css');
  LoadItemWithNoCache('css/style-mobile.css');
  LoadItemWithNoCache('include/post-card/post-card.css');
  LoadItemWithNoCache('include/post-card/post-card-mobile.css');
  ?>

  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <?php
  LoadItemWithNoCache('js/script.js');
  LoadItemWithNoCache('include/post-card/post-card.js');
  ?>
  
  <title><?php echo $page_name !== '' ? $page_name.' | ' : ''; ?>7校合同マッチングシステム</title>
</head>

<body>
  <div class="main-contents-wrapper">
    <?php
    if ($hrefs[0] === '')
    {
      include_once 'pages/00-home.php';
    }
    /**
     * 投稿一覧
     */
    if ($hrefs[0] === 'posts')
    {
      include_once 'pages/01-posts.php';
    }
    /**
     * ブックマーク
     */
    if ($hrefs[0] === 'bookmark')
    {
      include_once 'pages/02-bookmark.php';
    }

    /**
     * マイページ
     */
    if ($hrefs[0] === 'my-page')
    {
      include_once 'pages/04-my-page.php';
    }
    ?>
  </div>

  <!-- Top Menu -->
  <?php
  if ($hrefs[0] === 'posts')
  {
    include_once 'include/top-menu.php';
  }
  if ($hrefs[0] === 'bookmark' ||
      $hrefs[0] === 'messages' ||
      $hrefs[0] === 'my-page' ||
      $hrefs[0] === 'help')
  {
    $caption_only_mode = true;
    include_once 'include/top-menu.php';
  }
  ?>

  <!-- Tab Menu -->
  <?php
  include_once 'include/tab-menu.php';
  ?>

  <!-- Guide Menu -->
  <?php
  if ($hrefs[0] === 'posts')
  {
    include_once 'include/guide-menu.php';
  }
  ?>
</body>

</html>