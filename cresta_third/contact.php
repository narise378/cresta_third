<?php include('header.php'); ?>
<main>
    <!-- contact-topview -->
    <section id="" class="contact-topview">
        <div class="contact-topview__bg"></div>
        <div class="contact-topview__logo">
            <a href="/"><img src="/img/site-logo.svg" alt="LOGO"></a>
        </div>
        <div class="contact-topview__mainimage">
            <img src="/img/contact_head.png" alt="MAIN IMAGE">
        </div><!-- contact-topview__mainimage -->
        <div class="contact-topview__inner">
            <h1 class="contact-topview__title">CONTACT</h1>
            <p class="contact-topview__head">お問い合わせ</p>
        </div><!-- contact-topview__inner -->
        <div class="scroll">SCROLL</div>
    </section><!-- contact-topview -->

    <div class="container">
    <!-- CONTACT-FORM -->
    <section class="contact-form">
        <div class="contact-form__inner">
            <h3 class="contact-form__head">ご依頼やご相談についてのご質問やご要望がございましたら、下記フォームよりお気軽にお問い合わせください。送付いただいた内容を確認の上、担当者からご連絡させていただきます。</h3>
            <form action="#" method="#">
                <label class="contact-form__title">お問い合わせ種別<p class="contact-form__necessary"><span class="contact-form__necessary--text">必須</span></p></label>
                <div class="contact-form__check">
                    <div class="contact-form__radiobutton">
                        <label for="1" class="contact-form__checkboxlabel"><input type="checkbox" id="1" name="checkbox[1]" class="contact-form__checkbox">制作依頼</label>
                    </div>

                    <div class="contact-form__radiobutton">
                        <label for="2" class="contact-form__checkboxlabel"><input type="checkbox" id="2" name="checkbox[2]" class="contact-form__checkbox">採用</label>
                    </div>

                    <div class="contact-form__radiobutton">
                        <label for="3" class="contact-form__checkboxlabel"><input type="checkbox" id="3" name="checkbox[3]" class="contact-form__checkbox">IR</label>
                    </div>

                    <div class="contact-form__radiobutton">
                        <label for="4" class="contact-form__checkboxlabel"><input type="checkbox" id="4" name="checkbox[4]" class="contact-form__checkbox">その他</label>
                    </div>
                </div>

                <label class="contact-form__title" for="name" name="company">会社名・団体名<p class="contact-form__necessary"><span class="contact-form__necessary--text">必須</span></p></label>
                <div class="contact-form__name">
                    <input class="contact-form__input" type="text" name="name" id="company">
                </div>

                <label class="contact-form__title" for="name" name="name">お名前<p class="contact-form__necessary"><span class="contact-form__necessary--text">必須</span></p></label>
                <div class="contact-form__name">
                    <input class="contact-form__input" type="text" name="name" id="name">
                </div>

                <label class="contact-form__title" for="email" name="email">メールアドレス<p class="contact-form__necessary"><span class="contact-form__necessary--text">必須</span></p></label>
                <div class="contact-form__email">
                    <input class="contact-form__input" type="email" name="email" id="email">
                </div>

                <label class="contact-form__title" for="tel" name="tel">電話番号</label>
                <div class="contact-form__tel">
                    <input class="contact-form__input" type="tel" name="tel" id="tel">
                </div>

                <label class="contact-form__title" for="textarea">お問い合わせ<p class="contact-form__necessary"><span class="contact-form__necessary--text">必須</span></p></label>
                <div class="contact-form__text">
                    <textarea class="contact-form__textarea" name="textarea" id="textarea"></textarea>
                </div>

                <label class="contact-form__title--privacy" for="privacy">PRIVACY POLICY</label>
                <div class="contact-form__text">
<!-- プライバシーポリシーブラウザ対応のため見にくくなってます -->
<textarea class="contact-form__textarea--privacy" name="privacy" id="privacy" placeholder="
個人情報保護方針

株式会社DIGSMILE（以下、当社）では、個人情報の重要性を認識し、
以下の基準に従って、適切な管理、保護に努めます。

1.個人情報の収集、利用
当社では、お客様との取引、サービスの提供のために個人情報を適法に収集し、
収集した目的の範囲内で、個人情報を利用いたします。

2.個人情報の第三者への開示と提供
収集したお客様の個人情報は、法的な要請等によらない限り、
お客様の承諾を得ない第三者に対して提供・開示はいたしません。
業務の都合上、業務委託先に個人情報を提供する場合は、
機密保持契約等によって業務委託先に個人情報保護を義務付けるとともに、
業務委託先が適切に個人情報を取り扱うように管理いたします。

3.個人情報の保護
当社では、個人情報の紛失、破壊、改ざん、不正アクセス、
および漏えい等を防止するため、適切な対策を行います。

4.法令および関連規範の遵守
当社は、個人情報の取り扱いに関して、
個人情報保護法をはじめとする個人情報に関する法令および関連する規範を遵守します。

5.個人情報の開示・訂正・削除
当社では、個人情報の開示・訂正・削除等の依頼があった場合、
情報提供者本人であることを確認の上、すみやかに対応いたします。
法令や当社方針により、プライバシー・ポリシーを予告なく改訂することがあります。

お問い合わせ窓口

当社の個人情報の取扱いに関するお問い合わせは下記までご連絡お願いいたします。
株式会社ファイアープレイス

044-589-4333
"></textarea>
<!-- プライバシーポリシーブラウザ対応のため見にくくなってます -->
                </div>
            </form>
        </div><!-- contact-form__inner -->
        <div class="confilm">
            <label for="confilm" class="confilm__checkboxlabel">
                <input type="checkbox" value="confilm" id="confilm" name="checkbox[]" class="confilm__checkbox">
                <span class="confilm__parts">個人情報の取り扱いについて同意のうえ送信します。</span>
            </label>
        </div>
        <div class="contact-form__btn">
            <button class="btn" type="submit">送信</button>
        </div>
    </section><!-- contact-form -->
    </div>
</main>
<?php include('footer.php'); ?>