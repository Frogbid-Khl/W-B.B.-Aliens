<!DOCTYPE html>
<html lang="en">
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
            src: url("fonts/newFont.otf");
        }

        .eightbit-btn {
            background: #92CD41;
            display: inline-block;
            position: relative;
            text-align: center;
            font-size: 30px;
            padding: 20px;
            font-family: "Press Start 2P", cursive;
            text-decoration: none;
            color: white;
            box-shadow: inset -4px -4px 0px 0px #4AA52E;
        }
        .eightbit-btn:hover, .eightbit-btn:focus {
            background: #76c442;
            box-shadow: inset -6px -6px 0px 0px #4AA52E;
        }
        .eightbit-btn:active {
            box-shadow: inset 4px 4px 0px 0px #4AA52E;
        }
        .eightbit-btn:before, .eightbit-btn:after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            box-sizing: content-box;
        }
        .eightbit-btn:before {
            top: -6px;
            left: 0;
            border-top: 6px #ffffff solid;
            border-bottom: 6px #ffffff solid;
        }
        .eightbit-btn:after {
            left: -6px;
            top: 0;
            border-left: 6px #ffffff solid;
            border-right: 6px #ffffff solid;
        }
        .eightbit-btn--proceed {
            background: #F7D51D;
            box-shadow: inset -4px -4px 0px 0px #E59400;
        }
        .eightbit-btn--proceed:hover, .eightbit-btn--proceed:focus {
            background: #F2C409;
            box-shadow: inset -6px -6px 0px 0px #E59400;
        }
        .eightbit-btn--proceed:active {
            box-shadow: inset 4px 4px 0px 0px #E59400;
        }

    </style>
</head>
<body>
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
<section class="mint-section" id="minting">
    <div class="container">
        <div class="mint">
            <div class="mint__wrap">
                <h2 class="mint__title section-title">Mint DINOVERSE</h2>
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
                        <a href="javascript:void(0)" class="eightbit-btn eightbit-btn--proceed" style="none;"><span style="font-family: chubb; color: #000000">Mint Now</span></a>
                        <button class="form__btn mint-button" type="button">MINT DINOVERSE</button>
                    </div>
                </form>
                <div class="links-wrap"><a class="mint__link"
                                           href="#"
                                           target="_blank" style="none;">View Contract </a></div>
                <p class="mint__descr">Please use Chrome/Firefox with metamask extension for PC or metamask app
                    for mobile</p>
            </div>
        </div>
    </div>
</section>
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

</body>
</html>