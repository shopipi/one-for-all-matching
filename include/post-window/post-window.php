<?php
LoadItemWithNoCache('include/post-window/post-window.css');
LoadItemWithNoCache('include/post-window/post-window.js');
?>
<!-- <div class="post-window-php"> -->

  <!-- モーダルエリアここから -->
  <section class="modalArea">
    <div id="modalBg" class="modalBg"></div>
    <div class="modalWrapper">
      <div class="modalContents">
        <form>
          <h1>投稿フォーム</h1>
          <p>プロジェクト名：<input type="text"></p>
          <p>プロジェクトの種類：
            <label><input type="radio" name="radio" value="1">依頼</label>
            <label><input type="radio" name="radio" value="2">宣伝</label>
          </p>
          <p>概要：</p>
          <p><textarea cols="50" rows="5"></textarea></p>
          <p>画像はこちらから！<input type="file" multiple></p>
          <p>マッチング規約に同意する</p>
          <label><input type="checkbox" name="radio" value="1">はい</label>
          <p style="display: flex; flex-direction: rows; align-items: center;">
            <input type="submit" value="投稿する">
          </p>
        </form>
      </div>
      <div id="closeModal" class="closeModal">
        ×
      </div>
    </div>
  </section>
  <!-- モーダルエリアここまで -->
<!-- </div> -->