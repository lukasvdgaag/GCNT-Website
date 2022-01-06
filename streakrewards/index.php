<?php
require '/var/www/html/inc/HeaderBuilder.php';

use inc\HeaderBuilder;

$header = new HeaderBuilder("StreakRewards", "streakrewards/index");
$header->subtitle("Advanced streaked daily rewards")
    ->displayFeaturedPlugin(false)
    ->metaDescription("StreakRewards is a menu-based daily rewards plugin that works with streaks! Read all about it here.")
    ->build();
?>

    <main id="content" class="site-content" role="main">
        <section>
            <div class="featured-posts">
                <div class="width-container">
                    <div class="cz-container">
                        <div class="cz-row">
                            <div id="primary" class="cz-col-12">
                                <div class="primary-sub-wrapper">
                                    <div>
                                        <h3 class="entry-title">
                                            About <span class="green">StreakRewards</span>
                                        </h3>
                                    </div>
                                    <div class="entry-content" class="darkblue">
                                        <p>
                                            StreakRewards is this super good, fancy, configurable plugin for daily rewards.
                                            Let's say it's the best one you could get on SpigotMC.
                                            It's pretty much all menu-based. And they're all configurable in configs and other files.<br>
                                            You can set x days per month cycle. Players can claim one reward per day, their daily reward.
                                            If they claim the first day, then the next day they can claim their next one (day 2).
                                            If the player manages to claim their daily reward without missing a day, their streak will be increased.
                                            If they miss one day, it will be reset and they will have to start from day one.
                                            When the player reaches the last day of the month cycle, their streak will be continued, but their day will
                                            be the 1st one once again.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="featured-posts white-background">
                    <div class="width-container">
                        <div class="cz-container">
                            <h2>FAQ</h2>
                            <div class="cz-row cz-justify-content-center cz-align-content-center card-wrapper">
                                <div class="cz-col-11 cz-col-sm-6 cz-col-md-4 cz-col-lg-4 cz-col-xl-4">
                                    <div class="cz-card">
                                        <a href="https://www.gcnt.net/streakrewards/creating-shapes">
                                        <span class="categories">
                                            <span class="category">Easy</span>
                                        </span>
                                            <div class="featured-image-wrapper easy"></div>
                                        </a>
                                        <div class="cz-card-body">
                                        <span class="byline">
                                            <a href="https://www.gcnt.net/streakrewards/creating-shapes">
                                                <h5 class="cz-card-title">How to create a custom shape?</h5>
                                            </a>
                                        </span>
                                            <span class="byline">
                                            <span class="author vcard">
                                                <a class="url fn n lowercase" href="https://www.gcnt.net/streakrewards/creating-shapes">Click here to see how to create a custom shape for the menus.</a>
                                            </span>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
include_once "../inc/footer.php";
?>