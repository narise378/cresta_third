<?php include('header.php'); ?>
<main>
    <!-- TOPVIEW -->
    <section id="" class="topview">
        <div class="topview__bg"></div>
        <div class="topview__logo">
            <a href="/"><img src="/img/site-logo.svg" alt="LOGO"></a>
        </div>
        <div class="topview__mainimage">
            <img src="/img/kv-img.png" alt="MAIN IMAGE">
        </div><!-- topview__mainimage -->
        <div class="topview__inner">
            <p class="topview__head">デザインで人を笑顔にする会社</p>
            <p class="topview__head">DIGSMILE INC.</p>
            <h1 class="topview__title">DESIGN<br>FORM<br>SMILE.</h1>
        </div><!-- topview__inner -->
        <div class="scroll">SCROLL</div>
    </section><!-- TOPVIEW -->

    <div class="container">
        <!-- ABOUT US -->
        <section class="about" id="about">
            <div class="about__mainimage">
                <img src="/img/about.png" alt="ABOUT">
            </div><!-- about__mainimage -->
            <div class="about__inner">
                <div class="about__wrapper">
                    <h2 class="about__title">ABOUT US</h2>
                    <p class="about__text">DIGSMILEは、デザインで人を笑顔にする会社。
                        なんでもない日常に少しのワクワクと遊び心を提供します。笑顔には世界を変える力がある、デザインには人を幸せにする力がある。毎日に幸せを感じて生きていきたい。
                        DIGSMILEの社名にはそんな想いが込められています。
                    </p>
                    <div class="about__btn">
                        <a href="about.php" class="btn">READ MORE</a>
                    </div>
                </div><!-- about__wrapper -->
            </div><!-- about__inner -->
        </section><!-- ABOUT US -->

        <!-- WORKS -->
        <section class="works" id="works">
            <div class="container">
                <div class="works__cards">
                    <div class="works__card">
                        <h3 class="works__title">WORKS</h3>
                        <figure class="works__img">
                            <img src="/img/works.png" alt="WORKS">
                        </figure>
                        <div class="works__text">
                            <p>DIGSMILEの制作実績を紹介します。</p>
                        </div>
                        <div class="work__btn">
                            <button class="btn">READ MORE</button>
                        </div>
                    </div>

                    <div class="works__card">
                        <h3 class="works__title">CULTURE</h3>
                        <figure class="works__img">
                            <img src="/img/culture.png" alt="CULTURE">
                        </figure>
                        <div class="works__text">
                            <p>DIGSMILEの社内文化について紹介します。</p>
                        </div>
                        <div class="works__btn">
                            <button class="btn">READ MORE</button>
                        </div>
                    </div>
                </div><!-- works__cards -->
            </div><!-- container -->
        </section><!-- WORKS -->

        <!-- TOPICS -->
        <section class="topics" id="topics">
            <h2 class="topics__title">LATEST TOPICS</h2>
            <ul class="topics__newslists">
                <li class="topics__newslist">
                    <a href="#">
                    <div class="topics__time">
                    <time datetime="2020.4.30">2020.4.30</time>
                    </div>
                    <p class="topics__text">イベントレポート「VRクリエイター座談会 〜5Gの次に来るもの〜」</p>
                    </a>
                </li>
                <li class="topics__newslist">
                    <a href="#">
                    <div class="topics__time">
                        <time datetime="2020.4.30">2020.4.30</time>
                    </div>
                    <p class="topics__text">プレスリリースのお知らせ DIGGIN’ RECORDS</p>
                    </a>
                </li>
                <li class="topics__newslist">
                    <a href="#">
                    <div class="topics__time">
                        <time datetime="2020.4.30">2020.4.30</time>
                    </div>
                    <p class="topics__text">新年明けましておめでとうございます</p>
                    </a>
                </li>
                <div class="topics__btn">
                    <button class="btn">READ MORE</button>
                </div>
            </ul>
        </section><!-- TOPICS -->

        <!-- CONTACT -->
        <section class="contact" id="contact">
            <div class="container">
                <div class="contact__cards">
                    <div class="contact__card">
                        <h3 class="contact__title">CONTACT</h3>
                        <div class="contact__text">
                            <p>
                                制作の依頼、取材の依頼、IRや採用についての連絡・お問い合わせはコンタクトページから承っております。
                                まずはお気軽にご連絡ください。担当者から改めて返信いたします。
                            </p>
                        </div>
                        <div class="contact__btn">
                            <a href="contact.php" class="btn">READ MORE</a>
                        </div>
                    </div>
                    <div class="contact__card">
                        <figure class="contact__img">
                            <img src="/img/contact.png" alt="contact">
                        </figure>
                    </div>
                </div><!-- contact__cards -->
            </div><!-- container -->
        </section><!-- CONTACT -->
    </div><!-- container -->
</main>
<?php include('footer.php'); ?>