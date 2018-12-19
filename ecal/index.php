<?php include "include/headerinc.php"; ?>

<style>
    .daydeal h2 {
        color: darkgray
    }
    
    .owl-carousel img {
        width: 1200px !important;
        height: 650px !important
    }
    
    .owl-carousel a {
        color: white;
    }
    
    .owl-carousel a:hover {
        color: gray;
        font-weight: 300px !important;
    }

    @media screen and (max-width: 700px) {
        .daydeal h2 {
            font-size: 20px;
        }
        .daydeal img {
            height: 120px !important;
        }
        .owl-carousel img {
            width: 350px !important;
            height: 350px !important;
        }
        .owl-carousel .article-title {
            font-size: 11px !important
        }
    }

    @media screen and (max-width: 650px) {
        .daydeal img {
            width: 100px !important;
            height: 100px !important;
        }
    
        .img1 img {
            height: 160px;
        }
    }

    @media screen and (max-width: 400px) {
        .daydeal h2 {
            font-size: 12px;
        }
    }
</style>

<!-- Owl Carousel 1 -->
<div id="owl-carousel-4" class="owl-carousel owl-theme owl-loaded center-owl-nav" data-interval="10000" style="top: 0px">

    <!-- ARTICLE 1 -->
    <article class="article thumb-article">
        <div class="article-img">
            <img src="./wwwroot/img/elect.jpg" alt="">
        </div>
        <div class="article-body">

            <a href="http://" class="article-title h3">Electronics</a>

        </div>
    </article>
    <!-- /ARTICLE 1 -->

    <!-- ARTICLE 2 -->
    <article class="article thumb-article">
        <div class="article-img">
            <img src="./wwwroot/img/fashion.jpg" alt="">
        </div>
        <div class="article-body">

            <a href="http://" class="article-title h3">Fashion</a>

        </div>
    </article>
    <!-- /ARTICLE 2 -->

    <!-- ARTICLE 3 -->
    <article class="article thumb-article">
        <div class="article-img">
            <img src="./wwwroot/img/gadgets.jpg" alt="">
        </div>
        <div class="article-body">

            <a href="http://" class="article-title h3">Gadget</a>

        </div>
    </article>
    <!-- /ARTICLE 3 -->

    <!-- ARTICLE 4 -->
    <article class="article thumb-article">
        <div class="article-img">
            <img src="./wwwroot/img/comp&P.jpg" alt="">
        </div>
        <div class="article-body">

            <a href="http://" class="article-title h3">Computer and phones</a>

        </div>
    </article>
    <!-- /ARTICLE 4 -->


    <!-- ARTICLE 5 -->
    <article class="article thumb-article">
        <div class="article-img">
            <img src="./wwwroot/img/foods&D.jpg" alt="">
        </div>
        <div class="article-body">

            <a href="http://" class="article-title h3">Foods and Drink</a>

        </div>
    </article>
    <!-- /ARTICLE 5 -->

    <!-- ARTICLE 6 -->
    <article class="article thumb-article">
        <div class="article-img">
            <img src="./wwwroot/img/autoM.jpg" alt="">
        </div>
        <div class="article-body">

            <a href="http://" class="article-title h3">Automobiles</a>

        </div>
    </article>
    <!-- /ARTICLE 6 -->

</div>
<!-- /Owl Carousel 1 -->
<br /><br />
<!-- Div Container For Body Contents-->
        <!-- <div class="container-fluid" style="margin:0 auto 0 auto;width:99.999%;">
        </div> -->
        <div class="img1 p-1 jumbotron" style="background-color: lightgrey">
            <div class="container-fluid" style="width:100%">
                <div class="row">
                    <div class="col-4" style="padding:3px;">
                        <img src="./wwwroot/img/comp&P.jpg" class="img-fluid h-100" alt="KOREAN" />
                    </div>
                    <div class="col-4" style="padding:3px;">
                        <img src="./wwwroot/img/gadgets.jpg" class="img-fluid h-100" alt="KOREAN" />
                    </div>
                    <div class="col-4" style="padding:3px;">
                        <img src="./wwwroot/img/fashion.jpg" class="img-fluid h-100" alt="KOREAN" />
                    </div>
                </div>
                <br />

                <div class="py-3 pr-3 jumbotron daydeal">
                    <div class="well">
                        <div class="row">
                            <div class="mt-5 m-auto offset-sm-3 offset-md-3 col-7 col-sm-6 col-md-5">
                                <h2>Deals of The Day!</h2>
                            </div>
                            <div class="col-5">
                                <img src="./wwwroot/img/elect.jpg" class="img-fluid h-100" alt="KOREAN" style="height:300px;width:100%" />
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-4" style="padding:3px;">
                        <img src="./wwwroot/img/foods&D - res.jpg" class="img-fluid h-100" alt="KOREAN" />
                    </div>
                    <div class="col-4" style="padding:3px;">
                        <img src="./wwwroot/img/elect.jpg" class="img-fluid h-100" alt="KOREAN" />
                    </div>
                    <div class="col-4" style="padding:3px;">
                        <img src="./wwwroot/img/autoM.jpg" class="img-fluid h-100" alt="KOREAN" />
                    </div>
                </div>
            </div>
        </div>
<script src="./wwwroot/owlcarousel/main.js"></script>