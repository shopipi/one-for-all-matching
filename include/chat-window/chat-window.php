<?php
LoadItemWithNoCache('pages/01-posts.css');
?>
<div class="posts-wrapper col">

  <div class="scroller">

    <?php
    $no_buttons = true;
    ?>
  
    <span class="title">自分のプロジェクト</span>
    <?php
    $my_project = true;
    ?>
    
    <?php
    include 'include/post-card/post-card.php';
    ?>
  
    <div class="dummy-space"></div>
    
    <span class="title">コンタクト中</span>
    <?php
    $my_project = false;
    ?>
    
    <?php
    include 'include/post-card/post-card.php';
    ?>

    <div class="dummy-space"></div>

    <span class="title">コンタクト終了</span>
    <?php
    include 'include/post-card/post-card.php';
    include 'include/post-card/post-card.php';
    ?>
  </div>

</div>

<div class="chat-wrapper">
  <div class="user-select-wrapper">

    <div class="from-user new">
      <a href="https://example.com/profile/S2199219" target="_blank">
        <div class="avatar"></div>
      </a>
      <div class="name">YDA 3年ゲーム科 川崎翔一</div>
      <div class="new"></div>
    </div>

    <div class="from-user">
      <a href="https://example.com/profile/S2199219" target="_blank">
        <div class="avatar"></div>
      </a>
      <div class="name">ISC ****科 User1</div>
    </div>
    
    <div class="from-user">
      <a href="https://example.com/profile/S2199219" target="_blank">
        <div class="avatar"></div>
      </a>
      <div class="name">fカレッジ ****科 User2</div>
    </div>

  </div>
  <div class="chat-container">

    <div class="close">
      <i class="fa-solid fa-chevron-left"></i>
    </div>
  
    <div class="container">

      <div class="imessage">

        <p class="from-me no-tail margin-b_none">こんにちは！</p>
        <p class="from-me no-tail">メッセージ。メッセージ。メッセージ。メッセージ。メッセージ。メッセージ。メッセージ。メッセージ。メッセージ。メッセージ。メッセージ。</p>
        <p class="from-me margin-b_none">よろしくお願いします。</p>

        <p class="from-them no-tail margin-b_none">はじめまして。</p>
        <p class="from-them margin-b_one margin-t_one">こんにちは。</p>

        <p class="from-me no-tail margin-b_none">こんにちは！</p>
        <p class="from-me no-tail">メッセージ。メッセージ。メッセージ。メッセージ。メッセージ。メッセージ。メッセージ。メッセージ。メッセージ。メッセージ。メッセージ。</p>
        <p class="from-me margin-b_none">よろしくお願いします。</p>

        <p class="from-them no-tail margin-b_none">はじめまして。</p>
        <p class="from-them margin-b_one margin-t_one">こんにちは。</p>

        <p class="from-me no-tail margin-b_none">こんにちは！</p>
        <p class="from-me no-tail">メッセージ。メッセージ。メッセージ。メッセージ。メッセージ。メッセージ。メッセージ。メッセージ。メッセージ。メッセージ。メッセージ。</p>
        <p class="from-me margin-b_none">よろしくお願いします。</p>

        <p class="from-them no-tail margin-b_none">はじめまして。</p>
        <p class="from-them margin-b_one margin-t_one">こんにちは。</p>

      </div>

    </div>
  </div>
  <div class="input-container">
    <input type="text">
    <button class="send">
      <i class="fa-solid fa-paper-plane"></i>
    </button>
  </div>
</div>