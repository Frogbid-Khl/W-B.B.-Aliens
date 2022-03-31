<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
    include("include/cdn.php");
    ?>

    <?php
    include("include/css.php");
    ?>
    <style>
        body {
            margin: 0;
            background-color: #040234;
            font-family: chubb;
        }

        @font-face {
            font-family: chubb;
            src: url('fonts/Roboto-Regular.otf');
        }

    </style>
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="container"><a class="logo" href="index.php"><img src="images/logo.png" alt=""></a>
            <nav class="nav js-nav">
                <ul class="header-btn">
                    <li><a href="#about" style="color: #FFFFFF;">ABOUT</a></li>
                    <li><a href="#minting" style="color: #FFFFFF;">Private Sale</a></li>
                    <li><a href="#instructions" style="color: #FFFFFF;">Collection </a></li>
                    <li><a href="#roadmap" style="color: #FFFFFF;">ROADMAP</a></li>
                </ul>
                <a class="btn pl-4 ml-3" href="#minting" type="button">Opensea</a>
            </nav>
            <div class="burger js-burger"><span></span><span></span><span></span></div>
        </div>
    </header>
    <main class="main">
        <section class="intro-section">
            <div class="container">
                <div class="intro-links" data-aos="fade-up" data-aos-duration="1100" data-aos-once="true">
                    <a class="link" href="https://twitter.com/bbaliensnft" target="_blank">twitter</a>
                    <a class="link" href="https://discord.com/invite/wTwqja43Uy" target="_blank">discord</a>
                    <a class="link" href="https://www.instagram.com/b.b.aliens/" target="_blank">instagram</a>

                </div>
                <h1 class="main-title" data-aos="fade-up" data-aos-duration="1200" data-aos-once="true"
                    data-text="Chubb Club">BOOM BOOM ALIENS</h1><span class="subtitle" data-aos="fade-up"
                                                               data-aos-duration="1250" data-aos-once="true">
                    BBA is a collection of 7,000 ALIENS NFTs<br>
                    unique digital collectibles living forever on the <br> Ethereum blockchain (ERC-721)
                    </span>
                <div class="info" data-aos="fade-up" data-aos-duration="1300" data-aos-once="true">
                    <div class="info__wrap">
                        <p class="info__text">Minting Date TBC</p>
                    </div>
                </div>
            </div>
        </section>


        <h2 class="mint__title section-title" style="margin-top: 50px;"> Boom Boom Aliens Private Sale</h2>
        <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-6">
                <a href="#" class="payment">1</a>
                <h3 class="mt-3">Bank Transfer</h3>
                <p>A/C No: 012-594-0-004878-7 <br> A/C Name: Hkbc Media Ltd.</p>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6">
                <a href="#" class="payment">2</a>
                <h3 class="mt-3">Check pay in the order of: HKBC Media Ltd.</h3>
                <img src="images/qr.png" style="width: 120px; height: 120px; margin-top: 10px">
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6">
                <a href="#" class="payment">3</a>
                <h3 class="mt-3">Deposit ETH/USDT (ERC20) to </h3>
                <h3 class="mt-3">Wallet address:</h3>
                <h3 class="mt-3">0x8ee39 0BE5d8 85d8F0Bd B093dee3859 9722C6d1D9</h3>
            </div>
        </div>
        </div>
        <div class="container">
            <div class="row m-5">
                <img src="images/banner.png" class="img-fluid" alt="Responsive image">

            </div>
        </div>

        <!--<section class="mint-section" id="minting">
            <div class="container">
                <div class="mint">
                    <div class="mint__wrap">

                        <h2 class="mint__title section-title">Boom Boom Alien</h2>
                        <p class="mint__text">
                            0.08 Eth + Gas fee per B. B. Aliens</p>
                        <form class="form" action="#">
                            <div class="form__wrap">
                                <div class="form__row">
                                    <div class="form__field">
                                        <button class="form__btn-add" type="button" id="minus" onclick="des()">-</button>
                                        <input class="form__input mint-input" type="number" name="#" id="field" value="1">
                                        <button class="form__btn-add" type="button" id="plus" onclick="incr()">+</button>
                                    </div>
                                </div>
                                <div class="form__row">
                                    <button class="form__btn-value" type="button" onclick="show(10)">10</button>
                                    <button class="form__btn-value" type="button" onclick="show(20)">20</button>
                                    <button class="form__btn-value" type="button" onclick="show(50)">50</button>
                                    <button class="form__btn-value" type="button" onclick="show(80)">80</button>
                                    <button class="form__btn-value" type="button" onclick="show(100)">100</button>
                                    <button class="form__btn-value" type="button" onclick="show(150)">150</button>
                                </div>
                                <button class="form__btn mint-button" type="button">Contact</button>
                            </div>
                        </form>
                        <div class="links-wrap"><a class="mint__link"
                                                   href="#"
                                                   target="_blank" style="none;">View Contract </a>
                        </div>
                        <p class="mint__descr">Please use Chrome/Firefox with metamask extension for PC or metamask app
                            for mobile</p>
                    </div>
                </div>
            </div>
        </section>-->

        <section class="avatar-section">
            <div class="container">
                <div class="avatar-wrap">
                    <div class="avatar-info">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="info-list" data-aos="fade-up" data-aos-duration="1200" data-aos-once="true"
                                    style="color: black">
                                    <li>When you buy a BB ALIENS , you’re not simply buying an avatar for future valuation. </li>
                                    <li>You can access a network of music industries across the world . </li>
                                    <li>
                                        Let your Boom Boom Alien be your pass to the musical world of Web 3.0
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h2 class="section-title" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">BOOM BOOM ALIENS</h2>
                                <p class="sub-text" data-aos="fade-up" data-aos-duration="1100" data-aos-once="true">
                                    BBA is a collection of 7,000 ALIENS NFTs</br>
                                    Your Aliens avatar can grant you access to artistic/music events all over the world
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="avatar-section">
            <div class="container">
                <h2 class="section-title text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">Team Members</h2>
                <div class="avatar-img">
                    <div class="card-wrap">
                        <div class="row">
                            <div class="col-md-3 col-sm-12">
                                <div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                                    <div class="card__wrap">
                                        <div class="card__img-wrap">
                                            <div class="card__img"><img src="images/o01.png" alt=""></div>
                                        </div>
                                        <button class="card__link btn secondary" type="button" style="font-size: 13px; font-family: pixel">Thomas - Owner</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="card" data-aos="fade-up" data-aos-duration="1200" data-aos-once="true">
                                    <div class="card__wrap">
                                        <div class="card__img-wrap">
                                            <div class="card__img"><img src="images/o11.png" alt=""></div>
                                        </div>
                                        <button class="card__link btn secondary" type="button" style="font-size: 13px; font-family: pixel">Mike - CEO</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="card" data-aos="fade-up" data-aos-duration="1400" data-aos-once="true">
                                    <div class="card__wrap">
                                        <div class="card__img-wrap">
                                            <div class="card__img"><img src="images/o21.png" alt=""></div>
                                        </div>
                                        <button class="card__link btn secondary" type="button" style="font-size: 13px; font-family: pixel">Francis - COO</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="card" data-aos="fade-up" data-aos-duration="1400" data-aos-once="true">
                                    <div class="card__wrap">
                                        <div class="card__img-wrap">
                                            <div class="card__img"><img src="images/o31.png" alt=""></div>
                                        </div>
                                        <button class="card__link btn secondary" type="button" style="font-size: 13px; font-family: pixel">Pinky - CMO</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="story-section" id="about">
            <div class="container">
                <div class="map-wrap">
                    <div class="item">
                        <div class="item__wrap">
                        <div class="item__img">
                            <img src="images/story-bg.jpg" width="600px">
                        </div>
                            <div class="item__descr">
                                <h2 class="section-title" data-aos="fade-up" data-aos-duration="1100" data-aos-once="true">
                                    The story</h2>
                                <p class="map-desc scroll scroll-wrap" data-aos="fade-up" data-aos-duration="1200"
                                   data-aos-once="true">BBA is a collection of 7,000 ALIENS NFTs—unique digital collectibles living
                                    forever on the Ethereum blockchain (ERC-721) . Your Aliens avatar can grant you access to
                                    artistic/music events all over the world, the first of which is access to our royalty
                                    program on BOOMBOX, a streaming platform that is based on the IPFS. Future royalties
                                    and perks can be unlocked by the community through roadmap activation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="item-section" id="equipment">
            <div class="container">
                <div class="item-wrap">
                    <div class="item">
                        <div class="item__wrap">
                            <div class="item__img">
                                <div class="item-slider">
                                    <div class="item-slider js-item-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="item-img"><img src="images/1.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="item-img"><img src="images/2.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="item-img"><img src="images/3.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="item-img"><img src="images/5.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="item-img"><img src="images/6.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="item-img"><img src="images/7.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="item-img"><img src="images/8.png" alt=""></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item__descr">
                                <h2 class="item__title section-title" data-aos="fade-up" data-aos-duration="1100"
                                    data-aos-once="true">Traits and Rarity:</h2>
                                <p class="item__text" data-aos="fade-up" data-aos-duration="1200" data-aos-once="true">
                                    The BOOM BOOM ALIENS has lots unique attributes with the possibility of creating over a 7,000 different combinations
                                    with different rarity.</p>
                                <a class="btn primary"
                                   href="https://discord.com/invite/wTwqja43Uy"
                                   target="_blank" data-aos="fade-up"
                                   data-aos-duration="1400"
                                   data-aos-once="true">Join the
                                    discord</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="instruction-section" id="instructions">
            <h2 class="section-title">Collection</h2>
            <!--<p class="instruction-text base-text"> More info will be released shortly along with more sneak peek🍭!!</p>-->
            <div class="instr-wrap">
                <div class="instr">
                    <div class="instr__wrap">
                        <div class="instr__row" style="background-image: url('images/ss1.png');"></div>
                        <div class="instr__row" style="background-image: url('images/ss2.png');"></div>
                    </div>
                </div>
            </div>
        </section>



        <section class="map-section" id="roadmap">
            <div class="container">
                <div class="map-wrap">
                    <div class="map-block map-block_road">
                        <h2 class="section-title" data-aos="fade-up" data-aos-duration="1100" data-aos-once="true">
                            Roadmap</h2>
                        <p class="map-desc scroll scroll-wrap" data-aos="fade-up" data-aos-duration="1200"
                           data-aos-once="true"></p>
                        <div class="map__item" data-aos="fade-up" data-aos-duration="1100" data-aos-once="true">
                            <span class="map__percent">Phase-1 Enter Music-Verse with B.B.A.</span>
                            <ul class="info-list" data-aos="fade-up" data-aos-duration="1200" data-aos-once="true">
                                <li>2688 pieces will be whitelisted initially and 4312 pieces will be for the public sale.</li>
                                <li>Rare pieces with song copyrighted ownership: There are 7000 pieces that will own a copyright ownership of our first royalty-based NFT.
                                    NFT ERC-721 to own the copy of AVA-metaverse (LINK) </li>
                            </ul>

                        </div>
                    </div>
                    <div class="map-block map-block_fits">
                        <div class="map" style="margin-top: 105px">
                            <div class="map__item" data-aos="fade-up" data-aos-duration="1200" data-aos-once="true">
                                <span class="map__percent">Phase-2 Music Development and profit sharing</span>
                                <ul class="info-list" data-aos="fade-up" data-aos-duration="1200" data-aos-once="true">
                                    <li>Every nft owner also owns 1/7000 right of Ava, our first avatar performer in the metaverse, via a DAO mechanism</li>
                                    <li>Unlock rare NFTs utilities reward - Song streaming and the royalty generated will be shared to the all holders</li>
                                    <li>Musifi’s DAO mechanism is in full swing with voting on Musifi's distribution of profits.</li>
                                    <li>Unlock chances of you whitelisting for our exclusive artists’ underground NFT sale.</li>
                                </ul>
                            </div>
                            <div class="map__item" data-aos="fade-up" data-aos-duration="1100" data-aos-once="true">
                                <span class="map__percent">Phase-3 MetaVerse</span>
                                <ul class="info-list" data-aos="fade-up" data-aos-duration="1200" data-aos-once="true">
                                    <li>Enter Metaverse: Secret virtual concert and back-stage passes</li>
                                    <li>Unlock special instruments and beats</li>
                                    <li>As a world renowned first music collectible that has reached upto 100X of the original value.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="faq-section" id="faq">
            <div class="container">
                <h2 class="section-title">FAQ</h2>
                <div class="accordion">
                    <div class="accordion__item">
                        <div class="accordion__title-wrap">
                            <h3 class="accordion__title">What is an NFT?</h3>
                            <div class="accordion__icon"></div>
                        </div>
                        <div class="accordion__content">
                            <p class="accordion__desc">Non-Fungible Token (NFT) is a unique and non-interchangeable unit of data on the blockchain stored on a digital ledger. Its purpose is to establish the proof of ownership of digital assets such as jpg, videos, gifs and more.</p>
                        </div>
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__title-wrap">
                            <h3 class="accordion__title">How can I get a BBA?</h3>
                            <div class="accordion__icon"></div>
                        </div>
                        <div class="accordion__content">
                            <p class="accordion__desc">In order to get an Aliens, all you need is a MetaMask wallet with some Ethereum in it, then you are good to go!</p>
                        </div>
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__title-wrap">
                            <h3 class="accordion__title">Where can I get my BBA?</h3>
                            <div class="accordion__icon"></div>
                        </div>
                        <div class="accordion__content">
                            <p class="accordion__desc">You can get a BBA through our website when our presale and public sale launches. After that, it will be available for purchase on Opensea for second hand purchases</p>
                        </div>
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__title-wrap">
                            <h3 class="accordion__title">When can I get my BBA?</h3>
                            <div class="accordion__icon"></div>
                        </div>
                        <div class="accordion__content">
                            <p class="accordion__desc">Stay tuned for updates on our Twitter, Official Website, Discord Channel for any news regarding to the launch time and our future plans!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section class="bottom-section">
            <div class="container"><img src="images/bottom-bg.png" alt="">
                <div class="bot-content">
                    <div class="bot-block">
                        <div class="bot-block-wrap"><span style="font-family: chubb"></span></div>
                    </div>
                    <div class="bot-block">
                        <div class="bot-block-wrap"><span style="font-family: chubb"></span></div>
                    </div>
                    <div class="bot-block">
                        <div class="bot-block-wrap"><span style="font-family: chubb"></span></div>
                    </div>
                    <div class="bot-block">
                        <div class="bot-block-wrap"><span style="font-family: chubb"></span></div>
                    </div>
                    <div class="bot-block">
                        <div class="bot-block-wrap"><span style="font-family: chubb"></span></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer-head"><a class="logo" href="#"><img src="images/logo.png" alt=""></a>
                <nav class="nav"><span class="nav-title mr-3">Menu</span>
                    <ul>
                        <li><a href="#about" style="color: white">ABOUT</a></li>
                        <li><a href="#minting" style="color: white">Private Sale</a></li>
                        <li><a href="#instructions" style="color: white">Collection</a></li>
                        <li><a href="#roadmap" style="color: white">ROADMAP</a></li>
                    </ul>
                </nav>
            </div>
            <p class="copyright">COPYRIGHT © B.B. Aliens <br> ALL RIGHTS RESERVED</p>
        </div>
    </footer>
    <div class="mask js-mask"></div>
    <div class="popup js-popup">
        <div class="popup__wrap">
            <h3 class="popup__title">Mint error</h3>
            <button class="popup__close js-popup-close" type="button"></button>
            <div class="popup__body">
                <p class="insufficient-funds">Insufficient funds. Check your wallet balance.</p>
                <p class="funds-need"></p>
                <p class="wallet-address"></p>
            </div>
        </div>
    </div>
</div>

<?php
include("include/js.php");
?>

<script>
    function show (count){
        document.getElementById("field").value=count;
    }

    function incr(){
        var x = document.getElementById("field").value;
        if (x < 149){
            x++;
            document.getElementById("field").value = x;
        }
    }

    function des(){
        var x = document.getElementById("field").value;
        if (x > 1){
            x--;
            document.getElementById("field").value = x;
        }
    }
</script>


</body>

</html>