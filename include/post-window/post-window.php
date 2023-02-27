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

        <p>タグ（一つ以上選択してください）：</p>
        <p>
          <label><input type="checkbox" name="checkbox" value="1">アプリ</label>
          <label><input type="checkbox" name="checkbox" value="1">イラスト</label>
          <label><input type="checkbox" name="checkbox" value="1">医療</label>
          <label><input type="checkbox" name="checkbox" value="1">ゲーム</label>
          <label><input type="checkbox" name="checkbox" value="1">語学</label>
          <label><input type="checkbox" name="checkbox" value="1">CG</label>
          <label><input type="checkbox" name="checkbox" value="1">スポーツ</label>
          <label><input type="checkbox" name="checkbox" value="1">デザイン</label>
          <label><input type="checkbox" name="checkbox" value="1">ネイル</label>
          <label><input type="checkbox" name="checkbox" value="1">ヘアメイク</label>
          <label><input type="checkbox" name="checkbox" value="1">保育</label>
          <label><input type="checkbox" name="checkbox" value="1">ホームページ</label>
          <label><input type="checkbox" name="checkbox" value="1">服飾、衣装</label>
          <label><input type="checkbox" name="checkbox" value="1">音楽</label>
          <label><input type="checkbox" name="checkbox" value="1">音声加工</label>
        </p>
        <p>自由タグ（スペースで区切り）：<input type="text" name="" id="" placeholder="#タグ"></p>

        <p>プロジェクトの種類：
          <label><input type="radio" name="radio" value="1">依頼</label>
          <label><input type="radio" name="radio" value="2">宣伝</label>
        </p>
        <p>概要：</p>
        <p>
          <textarea></textarea>
        </p>

        <p>
          画像はこちらから！（4枚まで）<input type="file" multiple>
          <span class="filename">ファイル名1.png<i class="fa-solid fa-xmark"></i>, ファイル名2.png<i class="fa-solid fa-xmark"></i></span>
        </p>

        <p>期限：
          <label><input type="radio" name="radio" value="1">1週間</label>
          <label><input type="radio" name="radio" value="2">2週間</label>
          <label><input type="radio" name="radio" value="2">30日</label>
        </p>

        <p><a href="./" target="_blank">マッチング規約</a>に同意する</p>

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