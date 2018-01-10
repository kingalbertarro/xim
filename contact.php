<?php include 'header.php'; ?>

 <div id="p-banner"> <!-- #p-banner -->
	<section class="other-banner">
    <img src="images/common/img-mail.png" alt="">
    <h2>CONTACT</h2>
    <p>お問い合わせ</p>
  </section>
 </div> <!--// #p-banner -->

<div id="p-contents-wrap"> <!-- #p-contents-wrap -->
  <div id="p-contents"> <!-- #p-contents -->

    <section class="contact-form">
      <aside class="container">
        <p class="c-intro">
          フォームに必要事項をご記入のうえ、<br>
          「送信する」ボタンを押してください。
        </p>
        <form action="">
          <table class="table-form">
            <tr>
              <td><p>お客様情報</p></td>
              <td></td>
              <td>
                <label class="wrapper">法人のお客様
                  <input type="radio" name="customer-information" value="corporate">
                  <span class="checkmark"></span>
                </label>
                <label class="wrapper">個人のお客様
                  <input type="radio" name="customer-information" value="corporate">
                  <span class="checkmark"></span>
                </label>
                <label class="wrapper">採用面接をご希望の方
                  <input type="radio" name="customer-information" value="corporate">
                  <span class="checkmark"></span>
                </label>
              </td>
            </tr>
            <tr>
              <td><p>会社名</p></td>
              <td><span class="required">必須</span></td>
              <td><input type="text" name="company-name" placeholder="例. Xim,inc"></td>
            </tr>
            <tr>
              <td><p>部署</p></td>
              <td></td>
              <td><input type="text" name="department" placeholder="例. 営業部"></td>
            </tr>
            <tr>
              <td><p>役職</p></td>
              <td></td>
              <td><input type="text" name="position" placeholder="例. 部長"></td>
            </tr>
            <tr>
              <td><p>氏名</p></td>
              <td><span class="required">必須</span></td>
              <td><input type="text" name="name" placeholder="例. 山田 太郎"></td>
            </tr>
            <tr>
              <td><p>フリガナ</p></td>
              <td><span class="required">必須</span></td>
              <td><input type="text" name="phonetic" placeholder="例. ヤマダ タロウ"></td>
            </tr>
            <tr>
              <td><p>電話番号</p></td>
              <td><span class="required">必須</span></td>
              <td><input type="text" name="phone" placeholder="例. 000-000-0000"></td>
            </tr>
            <tr>
              <td><p>E-mail</p></td>
              <td><span class="required">必須</span></td>
              <td><input type="text" name="email" placeholder="例. info@xim.com"></td>
            </tr>
            <tr>
              <td><p>URL</p></td>
              <td></td>
              <td>
                <input type="text" name="url" placeholder="例. http://info@xim.com">
              </td>
            </tr>
            <tr>
              <td><p>お問い合わせ内容</p></td>
              <td><span class="required">必須</span></td>
              <td><textarea name="message" rows="8" cols="80"></textarea></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>
                <p class="screening">
                  皆様から頂いた個人情報は選考の目的においてのみ使用致します。<br>
                  また選考中は責任を持って保管し、選考終了時に、当社の責任を持って消去・廃棄致します。
                </p>
                <input type="submit" name="submit" value="送信する">
                <p class="contact-phone">
                  <span class="bold">お電話でもお問い合わせいただけます。</span><br>
                  <strong>TEL</strong> <span class="ooki">03-4405-5577</span>(受付時間：10:00〜19:00）<br>
                </p>
                <p class="head-office">
                  北参道本社<br>
                  〒151-0051 東京都渋谷区千駄ヶ谷4-16-7北参道DTビル5F
                </p>
              </td>
            </tr>
          </table>
        </form>
      </aside>
    </section>



	</div> <!-- // #p-contents -->
 </div> <!-- // #p-contents-wrap -->

 <?php include 'footer.php'; ?>
