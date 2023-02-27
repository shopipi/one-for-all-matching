<?php
LoadItemWithNoCache('pages/01-posts.css');
?>
<div class="posts-wrapper">

  <div class="scroller">

    <span class="title">自分のプロジェクト</span>
    <?php
    include 'include/post-card/post-card.php';
    ?>
  
    <div class="dummy-space"></div>
    
    <span class="title">コンタクト中</span>
    <?php
    include 'include/post-card/post-card.php';
    ?>

    <div class="dummy-space"></div>

    <span class="title">進行中のプロジェクト</span>
    <?php
    include 'include/post-card/post-card.php';
    ?>

    <div class="dummy-space"></div>

    <span class="title">完了したプロジェクト</span>
    <?php
    include 'include/post-card/post-card.php';
    include 'include/post-card/post-card.php';
    ?>
  </div>

</div>

<div class="chat-wrapper">
  <div class="chat-container">
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