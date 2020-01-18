<?php
require_once('header.php');
$data = require_once('data.php');
?>
<body>
<header class="main-header container-fluid">
    <div class="container">
        <div class="nav-container">
            <div class="row align-content-start align-items-center">
                <div class="col">
                    <a href="<?php echo $data['siteUrl']?>"><img src="<?php echo $data['siteLogo']?>" alt="Logo"></a>
                </div>
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <?php
                                foreach ($data['menu'] as $menuItem) {
                                ?>
                                <li class="nav-item">
                                    <a class="nav-link navbar-link-color" href="<?php echo $menuItem['url']?>">
                                        <?php echo $menuItem['title']?></a>
                                </li>
                                <?php
                                }
                                ?>
                                <li class="nav-item">
                                    <a class="nav-link navbar-link-color" href="#"><img src="assets/img/search.png"
                                                                                        alt="Search"></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <?php
        foreach ($data['mainSlider'] as $sliderItem) {
        ?>
        <div class="carousel-wrapper">
            <div id="carouselHeader" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-caption">
                            <h1><?php echo $sliderItem['title']['main'] . ' ' . $sliderItem['title']['second']?></h1>
                            <p><?php echo $sliderItem['description']?></p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselHeader" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselHeader" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <button type="button" class="btn btn-primary header-button"><?php echo $sliderItem['link']['text']?></button>
        <?php
        }
        ?>
        <div class="bullets">
            <div class="bullet"></div>
            <div class="bullet"></div>
            <div class="bullet"></div>
            <div class="bullet"></div>
            <div class="bullet"></div>
        </div>
        <div class="down-wrapper">
            <a href="#about-us" class="down-wrapper"><img src="assets/img/downArrow.png" alt="down arrow"></a>
        </div>
    </div>
</header>
<section class="about-us container" id="about-us">
    <div class="text-content text-center">
        <h2><?php echo $data['aboutHeader']['title']?></h2>
        <p><?php echo $data['aboutHeader']['description']?></p>
    </div>
    <div class="row justify-content-md-center">
        <?php
        foreach ($data['aboutList'] as $aboutItems) {
        ?>
        <div class="col-sm-12 col-md-6 col-lg-3 content-item">
            <div class="pict-container">
                <img src="<?php echo $aboutItems['picture']['pictSrc']?>"
                     alt="<?php echo $aboutItems['picture']['pictAlt']?>" class="about-us-img">
            </div>
            <h3><?php echo $aboutItems['description']['main']?></h3>
            <p><?php echo $aboutItems['description']['second']?></p>
        </div>
        <?php
        }
        ?>
    </div>
    <button type="button" class="btn btn-primary main-button"><?php echo $data['buttonText']?></button>
</section>
<section>
    <h2 class="invisible-title"><?php $data['photosSection']?></h2>
    <?php
    foreach ($data['photos'] as $photoItem) {
    ?>
    <div class="container-fluid photos <?php
    if ($photoItem['lightBg']) {
        echo 'light-bg';
    }
    ?>">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-sm-12 col-md-6 order-1
                <?php
                if ($photoItem['floatRight']) {
                    echo 'order-md-2';
                }
                ?>">
                    <img src="<?php echo $photoItem['photo']['photoSrc']?>"
                         alt="<?php echo $photoItem['photo']['photoAlt']?>" class="img-fluid ">
                </div>
                <div class="col-sm-12 col-md-6 order-2
                <?php
                if ($photoItem['floatRight']) {
                    echo 'order-md-1';
                }
                ?> text-content">
                    <h3><?php echo $photoItem['description']['main']?></h3>
                    <p><?php echo $photoItem['description']['second']?></p>
                    <button type="button" class="btn btn-primary main-button btn-margin">
                        <?php echo $data['buttonText']?></button>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
</section>
<section class="container-fluid options-wrapper">
    <div class="container">
        <?php
        foreach ($data['clients'] as $clientItem) {
        ?>
        <div class="row header-top-padding options align-items-center justify-content-center">
            <div class="col-1 sides"><a href="#">&lsaquo;</a></div>
            <div class="col">
                <div>
                    <img src="<?php echo $clientItem['photo']['photoSrc']?>"
                         alt="<?php echo $clientItem['photo']['photoAlt']?>">
                </div>
                <h2><span><?php echo $clientItem['feedback']['mainTitle']?>
                    </span><?php echo $clientItem['feedback']['content']?></h2>
                <p><?php echo $clientItem['feedback']['person']?></p>
            </div>
            <div class="col-1 sides"><a href="#">&rsaquo;</a></div>
        </div>
        <?php
        }
        ?>
        <div class="bullets">
            <div class="bullet"></div>
            <div class="bullet"></div>
            <div class="bullet"></div>
            <div class="bullet"></div>
            <div class="bullet"></div>
        </div>
    </div>
</section>
<section class="container-fluid light-bg">
    <div class="container">
        <div class="row services text-content align-items-start justify-content-center">
            <div class="col-12 text-center">
                <h2><?php echo $data['generalService']['title']?></h2>
                <p><?php echo $data['generalService']['description']?></p>
            </div>
            <?php
            foreach ($data['services'] as $serviceItem) {
            ?>
            <div class="col-sm-2 col-md-1 icon-ring">
                <img src="<?php echo $serviceItem['icon']['iconSrc']?>"
                     alt="<?php echo $serviceItem['icon']['iconAlt']?>">
            </div>
            <div class="col-sm-10 col-md-5 service-description">
                <h3><?php echo $serviceItem['description']['main']?></h3>
                <p><?php echo $serviceItem['description']['second']?></p>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<section class="container">
    <div class="row align-items-start justify-content-center team-header text-content">
        <div class="col-12 text-center">
            <h2><?php echo $data['generalTeam']['title']?></h2>
            <p><?php echo $data['generalTeam']['description']?></p>
        </div>
    </div>
    <div class="team">
        <?php
        foreach ($data['team'] as $teamItem) {
        ?>
        <div class="member text-center">
                <img src="<?php echo $teamItem['photo']['photoSrc']?>"
                     alt="<?php echo $teamItem['photo']['photoAlt']?>" class="member-photo">
                <div class="member-name">
                    <h3><a href="#"><?php echo $teamItem['name']?></a></h3>
                </div>
        </div>
        <?php
        }
        ?>
    </div>
</section>
<section class="container-fluid light-bg">
    <div class="container">
        <div class="row header-top-padding align-items-start justify-content-center">
            <div class="col-12 text-content pricing text-center">
                <h2><?php echo $data['generalPrice']['title']?></h2>
                <p><?php echo $data['generalPrice']['description']?></p>
            </div>
            <?php
            foreach ($data['good'] as $goodItem) {
            ?>
            <div class="col-sm-12 col-md-6 col-lg-3 good">
                <div class="row align-items-start justify-content-start">
                    <div class="col-12 text-content good-price">
                        <h3><?php echo $goodItem['price']?></h3>
                        <p><?php echo $goodItem['name']?></p>
                    </div>
                    <div class="col-12 text-content good-description">
                        <p><?php echo $goodItem['description']?></p>
                    </div>
                    <div class="col-12 purchase">
                        <div class="row purchase-button align-items-center justify-content-center">
                            <div class="col-9"><?php echo $data['purchase']['text']?></div>
                            <div class="col-3"><img src="<?php echo $data['purchase']['iconSrc']?>"
                                alt="<?php echo $data['purchase']['iconAlt']?>"></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<section class="container container-fluid">
    <h2 class="invisible-title"><?php echo $data['world']['mainTitle']?></h2>
    <div class="container photos">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6 order-2 order-md-1 text-content header-top-padding">
                <h3><?php echo $data['world']['title']?></h3>
                <p><?php echo $data['world']['description']?></p>
                <button type="button" class="btn btn-primary main-button btn-margin"><?php echo $data['buttonText']?></button>
            </div>
            <div class="col-sm-12 col-md-6 order-1 order-md-2">
                <img src="<?php echo $data['world']['map']['mapSrc']?>"
                     alt="<?php echo $data['world']['map']['mapAlt']?>" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<section class="container-fluid template">
    <div class="container">
        <div class="row header-top-padding align-items-center justify-content-center">
            <div class="col-12">
                <h2><?php echo $data['company']['text']?>
                    <span><?php echo $data['company']['main']?></span><?php echo $data['company']['name']?></h2>
            </div>
            <div class="col-12">
                <button type="button" class="btn btn-primary main-button"><?php echo $data['company']['button']?></button>
            </div>
        </div>
    </div>
</section>
<footer class="container-fluid footer-wrapper">
    <div class="container">
        <div class="row align-items-center">
                <div class="col-6 justify-content-start small-logo-wrapper">
                    <img src="<?php echo $data['footerLogo']['logo']['logoSrc']?>"
                        alt="<?php echo $data['footerLogo']['logo']['logoAlt']?>" class="small-logo">
                        <?php echo $data['footerLogo']['text']?>
                </div>
            <div class="col-6 justify-content-end">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarFooter"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarFooter">
                        <ul class="navbar-nav">
                            <?php
                            foreach ($data['menu'] as $menuItem){
                            ?>
                            <li class="nav-item">
                                <a class="nav-link navbar-link-color" href="<?php echo $menuItem['url']?>">
                                    <?php echo $menuItem['title']?></a>
                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</footer>
<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>