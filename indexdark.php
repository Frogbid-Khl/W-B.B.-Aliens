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
            background-color: #000000;
            font-family: chubb;
        }

        @font-face {
            font-family: chubb;
            src: url(fonts/newFont.ttf);
        }

    </style>
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="container"><a class="logo" href="index-2.html"><img src="images/logo.png" alt=""></a>
            <nav class="nav js-nav">
                <ul class="header-btn">
                    <li><a href="#about" style="color: #FFFFFF;">ABOUT</a></li>
                    <li><a href="#game" style="color: #FFFFFF;">Game</a></li>
                    <li><a href="#instructions" style="color: #FFFFFF;">Collection </a></li>
                    <li><a href="#roadmap" style="color: #FFFFFF;">ROADMAP</a></li>
                </ul>
                <a class="btn" href="#minting" type="button">MINT</a>
                <a class="btn pl-4 ml-3" href="#minting" type="button">Opensea</a>
            </nav>
            <div class="burger js-burger"><span></span><span></span><span></span></div>
        </div>
    </header>
    <main class="main">
        <section class="intro-section">
            <div class="container">
                <div class="intro-links" data-aos="fade-up" data-aos-duration="1100" data-aos-once="true">
                    <a class="link" href="#" target="_blank">twitter</a>
                    <a class="link" href="#" target="_blank">discord</a>
                    <a class="link" href="#" target="_blank">instagram</a>

                </div>
                <h1 class="main-title" data-aos="fade-up" data-aos-duration="1200" data-aos-once="true"
                    data-text="Chubb Club">DinoVerse</h1><span class="subtitle" data-aos="fade-up"
                                                               data-aos-duration="1250" data-aos-once="true">
                    🦖Meta Jurassic era is coming, time to get your egg<br>
                    🐣 and hatch for your most powerful pet!!</span>
                <div class="info" data-aos="fade-up" data-aos-duration="1300" data-aos-once="true">
                    <div class="info__wrap">
                        <p class="info__text">Minting Date TBC</p>
                    </div>
                </div>
            </div>
        </section>
        <!--<section class="mint-section" id="minting">
            <div class="container">
                <div class="mint">
                    <div class="mint__wrap">
                        <h2 class="mint__title section-title">Mint Lorem Ipsum</h2>
                        <p class="mint__text">
                            Total minted: <span class="total-minted">0 / 5000</span></p>
                        <p class="mint__text">
                            0.05 Eth + Gas fee <br>Max 20 Lorem per transaction</p>
                        <form class="form" action="#">
                            <div class="form__wrap">
                                <div class="form__row">
                                    <div class="form__field">
                                        <button class="form__btn-add input-wrap-left" type="button">-</button>
                                        <input class="form__input mint-input" type="number" name="#" id="#" value="1">
                                        <button class="form__btn-add input-wrap-right" type="button">+</button>
                                    </div>
                                    <button class="form__btn-value input-five-button" type="button">5</button>
                                    <button class="form__btn-value input-ten-button" type="button">10</button>
                                    <button class="form__btn-value input-twenty-button" type="button">20</button>
                                </div>
                                <button class="form__btn js-popup-open" type="button">Connect wallet</button>
                                <button class="form__btn mint-button" type="button">MINT Lorem</button>
                            </div>
                        </form>
                        <div class="links-wrap"><a class="mint__link"
                                                   href="#"
                                                   target="_blank">View Contract </a></div>
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
                                <h2 class="section-title" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">DinoVerse</h2>
                                <p class="sub-text" data-aos="fade-up" data-aos-duration="1100" data-aos-once="true">
                                    Your access pass to Meta Jurassic!</br>
                                    Only 5,000 will ever be created!
                                </p>
                            </div>
                            <div class="col-md-6">
                                <ul class="info-list" data-aos="fade-up" data-aos-duration="1200" data-aos-once="true"
                                    style="color: black">
                                    <li>-Every Dinos will be born from dino eggs and it will accompany with you forever!</li>
                                    <li>-In future, you can hatch them, feed them, play with them!</li>
                                    <li>
                                        -For every Dinos holder, you can explore Meta Jurassic Park in the metaverse!
                                    </li>
                                </ul>
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
                                        <button class="card__link btn secondary" type="button">Charles - Mastermind</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="card" data-aos="fade-up" data-aos-duration="1200" data-aos-once="true">
                                    <div class="card__wrap">
                                        <div class="card__img-wrap">
                                            <div class="card__img"><img src="images/o11.png" alt=""></div>
                                        </div>
                                        <button class="card__link btn secondary" type="button">Ashley - Marketing Director</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="card" data-aos="fade-up" data-aos-duration="1400" data-aos-once="true">
                                    <div class="card__wrap">
                                        <div class="card__img-wrap">
                                            <div class="card__img"><img src="images/o21.png" alt=""></div>
                                        </div>
                                        <button class="card__link btn secondary" type="button">Jessica - Art Director</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="card" data-aos="fade-up" data-aos-duration="1200" data-aos-once="true">
                                    <div class="card__wrap">
                                        <div class="card__img-wrap">
                                            <div class="card__img"><img src="images/o31.png" alt=""></div>
                                        </div>
                                        <button class="card__link btn secondary" type="button">Franky - CTO</button>
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
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="section-title" data-aos="fade-up" data-aos-duration="1100" data-aos-once="true">//
                                The story</h2>
                            <p class="map-desc scroll scroll-wrap" data-aos="fade-up" data-aos-duration="1200"
                               data-aos-once="true">We are the scientists who have been studying dinosaurs and the Jurassic
                                era for decades. We are proud to announce that we have successfully transferred them into
                                Web 3 and Metaverse! Prepare to get yours and hatch it! More Detail and info will be
                                released accordingly.</p>
                        </div>
                        <div class="col-md-6">
                            <img src="images/story-bg.jpg" width="600px">
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
                                    The DinoVerse has lots unique attributes with the possibility of creating over a 5,000 different combinations with different rarity.</p>
                               <a class="btn primary"
                                                                                href="https://discord.gg/HRHRU46K2V"
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
            <p class="instruction-text base-text"> More info will be released shortly along with more sneak peek🍭!!</p>
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
                        <h2 class="section-title" data-aos="fade-up" data-aos-duration="1100" data-aos-once="true">//
                            Roadmap</h2>
                        <p class="map-desc scroll scroll-wrap" data-aos="fade-up" data-aos-duration="1200"
                           data-aos-once="true"></p>
                        <div class="map__item" data-aos="fade-up" data-aos-duration="1100" data-aos-once="true">
                            <span class="map__percent">Phase One - Minting take place</span>
                            <p class="map-desc">Total 5,000 of Dinos available in Meta Jurassic era. You will start with an egg and after revealed it will turn into your unique bb dinosaur.</p>
                        </div>
                        <div class="map__item" data-aos="fade-up" data-aos-duration="1100" data-aos-once="true">
                            <span class="map__percent">Phase Three - MetaVerse</span>
                            <p class="map-desc"> The dinosaur Metaverse will be opened to all holders, we will be using the Jurassic era as a background. Also, more utility will be available at this stage.</p>
                        </div>
                    </div>
                    <div class="map-block map-block_fits">
                        <div class="map" style="margin-top: 105px">
                            <div class="map__item" data-aos="fade-up" data-aos-duration="1200" data-aos-once="true">
                                <span class="map__percent">Phase Two - Game</span>
                                <p class="map-desc">We don’t stop at the bb dinosaur stage, after you hatch you will then feed them will food and snacks to earn exp, you will also need to take care of the environment such as cleaning up the poo or your bb dinosaur will get sick.
                                    We also have some mini-games(mobile compatible) that you could play with your bb dinosaur to earn exp.
                                    <br>Once your bb dinosaur earns enough exp you can have him evolve into a Juvie dinosaur and adult dinosaur.</p>
                            </div>
                            <div class="map__item" data-aos="fade-up" data-aos-duration="1200" data-aos-once="true">
                                <span class="map__percent">Phase Four - Branded items and more!</span>
                                <p class="map-desc"> We will be creating physical collectible items for our dinosaur and gifting them to its NFT holder.</p>
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
                            <h3 class="accordion__title">What is a Dino?</h3>
                            <div class="accordion__icon"></div>
                        </div>
                        <div class="accordion__content">
                            <p class="accordion__desc">DinoVerse is an NFT created by a team of NFT enthusiasts who would like to build a community full of fun and games! </p>
                        </div>
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__title-wrap">
                            <h3 class="accordion__title">What can I do with my Dinos?</h3>
                            <div class="accordion__icon"></div>
                        </div>
                        <div class="accordion__content">
                            <p class="accordion__desc">Each Dinos acts as a membership card to join our community where many different events such as poker nights, video game contests, art contests, trivia game awaits you. You will also be able to buy merchandises as well as receiving other benefits exclusive to Dinoverse owners. Be sure to change your social media’s profile picture and tell your friends and family about it!</p>
                        </div>
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__title-wrap">
                            <h3 class="accordion__title">How can I get a Dino?</h3>
                            <div class="accordion__icon"></div>
                        </div>
                        <div class="accordion__content">
                            <p class="accordion__desc">In order to get a Dino, all you need is a MetaMask wallet with some Ethereum in it, then you are good to go!</p>
                        </div>
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__title-wrap">
                            <h3 class="accordion__title">Where can I get my Dino?</h3>
                            <div class="accordion__icon"></div>
                        </div>
                        <div class="accordion__content">
                            <p class="accordion__desc">You can get a Dino through our website when our presale and public sale launches. After that, it will be available for purchase on Opensea for second hand purchases.</p>
                        </div>
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__title-wrap">
                            <h3 class="accordion__title">When can I get my Dino?</h3>
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
                        <div class="bot-block-wrap"><span style="font-family: chubb">DinoVerse</span></div>
                    </div>
                    <div class="bot-block">
                        <div class="bot-block-wrap"><span style="font-family: chubb">DinoVerse</span></div>
                    </div>
                    <div class="bot-block">
                        <div class="bot-block-wrap"><span style="font-family: chubb">DinoVerse</span></div>
                    </div>
                    <div class="bot-block">
                        <div class="bot-block-wrap"><span style="font-family: chubb">DinoVerse</span></div>
                    </div>
                    <div class="bot-block">
                        <div class="bot-block-wrap"><span style="font-family: chubb">DinoVerse</span></div>
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
                        <li><a href="#game" style="color: white">Game</a></li>
                        <li><a href="#instructions" style="color: white">Collection</a></li>
                        <li><a href="#roadmap" style="color: white">ROADMAP</a></li>
                    </ul>
                </nav>
            </div>
            <p class="copyright">COPYRIGHT © DINOVERSE. ALL RIGHTS RESERVED</p>
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
</body>

</html>