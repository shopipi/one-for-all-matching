<?php
/**
 * コンタクトボタンとブックマークボタンを表示しないものを使用するかどうか
 */
$no_buttons = isset($no_buttons) ? $no_buttons : false;

/**
 * モード
 * 0か1
 * 0: 依頼
 * 1: 宣伝
 */
$mode = isset($mode) ? $mode : 0;
$modes =
[
  'irai',
  'senden'
];

/**
 * 自分のプロジェクトかどうか
 */
$my_project = isset($my_project) ? $my_project : false;
?>

<div class="post-card-wrapper
  <?php if ($no_buttons) echo 'no-buttons' ?>
  <?php echo $modes[$mode]; ?>
  <?php if ($my_project) echo 'my-project'; ?>"
  >
  <div class="main-body">
    <div class="time">投稿: 2022/11/30 11:21:47　残り30日</div>
    <div class="overview">
      <a class="profile" href="https://example.com/profile/S2199219" target="_blank">
        <div class="avatar"></div>
        <div class="name">川崎 翔一</div>
      </a>
      <div class="summary">
        <a class="project-name">プロジェクト名</a>
        <div class="desc">
          プロジェクトの説明です。
          プロジェクトの説明です。
          プロジェクトの説明です。
          プロジェクトの説明です。
          プロジェクトの説明です。
          プロジェクトの説明です。
          プロジェクトの説明です。
          プロジェクトの説明です。
          プロジェクトの説明です。
          プロジェクトの説明です。
          プロジェクトの説明です。
          プロジェクトの説明です。
          プロジェクトの説明です。
          プロジェクトの説明です。
          プロジェクトの説明です。
          プロジェクトの説明です。
          プロジェクトの説明です。
          プロジェクトの説明です。
          プロジェクトの説明です。
        </div>
      </div>
    </div>
    <div class="bottom">
      <div class="action-1">
        <a href="./messages">
          <button class="message">
            <i class="fa-regular fa-envelope"></i>
            <div class="tooltip">コンタクト</div>
          </button>
        </a>
        <button class="bookmark">
          <i class="fa-regular fa-bookmark"></i>
          <div class="tooltip">保存</div>
        </button>
      </div>
      <div class="tags">
        <a href="">#YDA</a>,
        <a href="">#プロジェクト</a>,
        <a href="">#タグ</a>
      </div>
    </div>
  </div>
  <div class="images">
    <div class="img" style="background: url(https://media.istockphoto.com/id/614836688/photo/full-frame-shot-of-various-hand-tools-arranged-on-wood.jpg?s=170667a&w=0&k=20&c=TAhEHoUN4TMK_YcWBRFIccgR3ntmLzJyJkKXldqeA6w=);"></div>
    <div class="img" style="background: url(https://www.axisbank.com/images/default-source/revamp_new/loans/mobile/home-loan-mob.jpg);"></div>

    <!-- 画像が3つの時、3つ目はこれを使用。4つ以上の時は使用しない -->
    <div class="img" style="grid-column: span 2; background: url(img/宣伝ポスター.jpg);"></div>

    <!-- <div class="img" style="background: url(https://www.axisbank.com/images/default-source/revamp_new/loans/mobile/home-loan-mob.jpg);"></div> -->
    <!-- <div class="img" style="background: url(https://www.axisbank.com/images/default-source/revamp_new/loans/mobile/home-loan-mob.jpg);"></div> -->
  </div>
</div>