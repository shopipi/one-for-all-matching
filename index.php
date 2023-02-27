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
array_splice($hrefs, 0, count($hrefs) - 1);
$page_name = $page_infos[$hrefs[0]];
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Icon -->
  <link rel="shortcut icon" href="https://yt3.ggpht.com/ytc/AMLnZu9uxqOEFZxOgo2-8sMlgAYXdJ_uYhbzNWxaz2iT=s900-c-k-c0x00ffffff-no-rj">

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
  
  <title><?php echo $page_name !== '' ? $page_name.' | ' : ''; ?>学生マッチングサイト</title>
</head>

<body>
  <?php
  include_once 'include/post-card-detail/post-card-detail.php';
  ?>
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
      include_once 'include/post-window/post-window.php';
    }
    /**
     * ブックマーク
     */
    if ($hrefs[0] === 'bookmark')
    {
      include_once 'pages/02-bookmark.php';
    }
    /**
     * メッセージ
     */
    if ($hrefs[0] === 'messages')
    {
      include_once 'pages/03-messages.php';
    }
    if ($hrefs[0] === 'help')
    {
      include_once 'pages/04-help.php';
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
</body>

</html>