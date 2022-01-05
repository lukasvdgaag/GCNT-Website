<?php

require '/var/www/html/inc/HeaderBuilder.php';
use inc\HeaderBuilder;

$header = new HeaderBuilder("SkyWarsReloaded", "skywars/index");
$header->subtitle("The best Skywars plugin ever made!")
    ->displayFeaturedPlugin(false)
    ->metaDescription("SkyWarsReloaded is the most popular Skywars plugin ever created for Bukkit and Spigot servers, developed by GCNT and Walrusone! Read all about it here.")
    ->build();
?>

    <main id="content" class="site-content" role="main">
        <section>
            <div class="features-posts">
                <div class="width-container">
                    <div class="cz-container">
                        <div class="cz-row">
                            <div id="primary" class="cz-col-12">
                                <div class="primary-sub-wrapper">
                                    <p class="cz-alert-primary" style="padding:10px">
                                        <strong class="cz-alert-heading has-medium-font-size">SkyWarsReloaded Rewrite v6</strong><br>
                                        <i>We are currently working on a complete rewrite of the SkyWarsReloaded plugin: version 6. Striving for platform
                                            expandability, easy and stupid-proof setups, and a bug and lag-free experience.
                                            <br>
                                            <a href="rewrite" title="Read all about the new rewrite" class="cz-alert-link underline">Click here to read all about the update.</a>
                                        </i>
                                    </p>
                                    <div>
                                        <h3 class="entry-title">
                                            About <span class="green">SkyWarsReloaded</span>
                                        </h3>
                                    </div>
                                    <div class="entry-content darkblue">
                                        <p>
                                            Okay, so SkywarsReloaded is the most downloaded game mode EVER published on
                                            SpigotMC
                                            (and
                                            Bukkit). It has nearly 315k downloads.
                                            It is fully customizable and has amazing features and version support. And the
                                            great
                                            thing:
                                            we are now maintaining the resource Walrusone
                                            created someday. We are adding new features, fixing bugs and such things. Cool
                                            right?
                                        </p>
                                        <h3>But what is Skywars?</h3>
                                        <p>Skywars is pretty much just a WAR in the SKY. Each player has its own island
                                            with some chests with goodies inside. Usually, you can use the goodies
                                            to gear up and build to other players' islands. The goal is to kill every other
                                            player (or
                                            not) and make yourself the last player standing. Because the last
                                            player standing wins the game.</p>
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
                                        <a href="https://www.gcnt.net/skywars/installing-plugin">
                                        <span class="categories">
                                            <span class="category">Easy</span>
                                        </span>
                                            <div class="featured-image-wrapper easy"></div>
                                        </a>
                                        <div class="cz-card-body">
                                        <span class="byline">
                                            <a href="https://www.gcnt.net/skywars/installing-plugin">
                                                <h5 class="cz-card-title">How to install the plugin?</h5>
                                            </a>
                                        </span>
                                            <span class="byline">
                                            <span class="author vcard">
                                                <a class="url fn n lowercase"
                                                   href="https://www.gcnt.net/skywars/installing-plugin">Click here to see how to install and setup the plugin.</a>
                                            </span>
                                        </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="cz-col-11 cz-col-sm-6 cz-col-md-4 cz-col-lg-4 cz-col-xl-4">
                                    <div class="cz-card">
                                        <a href="https://www.gcnt.net/skywars/creating-kits">
                                        <span class="categories">
                                            <span class="category">Easy</span>
                                        </span>
                                            <div class="featured-image-wrapper easy"></div>
                                        </a>
                                        <div class="cz-card-body">
                                        <span class="byline">
                                            <a href="https://www.gcnt.net/skywars/creating-kits">
                                                <h5 class="cz-card-title">How to create an in-game kit?</h5>
                                            </a>
                                        </span>
                                            <span class="byline">
                                            <span class="author vcard">
                                                <a class="url fn n lowercase"
                                                   href="https://www.gcnt.net/skywars/creating-kits">Click here to see how to create kits.</a>
                                            </span>
                                        </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="cz-col-11 cz-col-sm-6 cz-col-md-4 cz-col-lg-4 cz-col-xl-4">
                                    <div class="cz-card">
                                        <a href="https://www.gcnt.net/skywars/creating-arenas">
                                        <span class="categories">
                                            <span class="category">Medium</span>
                                        </span>
                                            <div class="featured-image-wrapper medium"></div>
                                        </a>
                                        <div class="cz-card-body">
                                        <span class="byline">
                                            <a href="https://www.gcnt.net/skywars/creating-arenas">
                                                <h5 class="cz-card-title">How to create an arena?</h5>
                                            </a>
                                        </span>
                                            <span class="byline">
                                            <span class="author vcard">
                                                <a class="url fn n lowercase"
                                                   href="https://www.gcnt.net/skywars/creating-arenas">Click here to learn how to create and setup arenas.</a>
                                            </span>
                                        </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="cz-col-11 cz-col-sm-6 cz-col-md-4 cz-col-lg-4 cz-col-xl-4">
                                    <div class="cz-card">
                                        <a href="https://www.gcnt.net/skywars/setup-chests">
                                        <span class="categories">
                                            <span class="category">Medium</span>
                                        </span>
                                            <div class="featured-image-wrapper medium"></div>
                                        </a>
                                        <div class="cz-card-body">
                                        <span class="byline">
                                            <a href="https://www.gcnt.net/skywars/setup-chests">
                                                <h5 class="cz-card-title">How to customize the chest loot?</h5>
                                            </a>
                                        </span>
                                            <span class="byline">
                                            <span class="author vcard">
                                                <a class="url fn n lowercase"
                                                   href="https://www.gcnt.net/skywars/setup-chests">Click here to learn how to create your own chest loot.</a>
                                            </span>
                                        </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="cz-col-11 cz-col-sm-6 cz-col-md-4 cz-col-lg-4 cz-col-xl-4">
                                    <div class="cz-card">
                                        <div class="medium" style="height: 150px;">
                                            <iframe style="width:100%;max-height:150px;" width="560" height="315"
                                                    src="https://www.youtube.com/embed/eAVWkmZf5DY" frameborder="0"
                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen=""></iframe>
                                        </div>
                                        <div class="cz-card-body">
                                        <span class="byline">
                                            <a href="https://www.gcnt.net/skywars/creating-holograms">
                                                <h5 class="cz-card-title">How to create holograms?</h5>
                                            </a>
                                        </span>
                                            <span class="byline">
                                            <span class="author vcard">
                                                <a class="url fn n lowercase"
                                                   href="https://www.gcnt.net/skywars/creating-holograms">Click here to see how to create holograms (or watch the video).</a>
                                            </span>
                                        </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="cz-col-11 cz-col-sm-6 cz-col-md-4 cz-col-lg-4 cz-col-xl-4">
                                    <div class="cz-card">
                                        <div class="medium" style="height: 150px;">
                                            <iframe style="width:100%;max-height:150px;" width="560" height="315"
                                                    src="https://www.youtube.com/embed/nvCrJ8aJ-yE" frameborder="0"
                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen=""></iframe>
                                        </div>
                                        <div class="cz-card-body">
                                        <span class="byline">
                                            <a href="https://www.gcnt.net/skywars/creating-custom-cages">
                                                <h5 class="cz-card-title">How to create custom schematic cages?</h5>
                                            </a>
                                        </span>
                                            <span class="byline">
                                            <span class="author vcard">
                                                <a class="url fn n lowercase"
                                                   href="https://www.gcnt.net/skywars/creating-custom-cages">Click here to learn how to create custom schematic cages using WorldEdit (or watch the video).</a>
                                            </span>
                                        </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="cz-col-11 cz-col-sm-6 cz-col-md-4 cz-col-lg-4 cz-col-xl-4">
                                    <div class="cz-card">
                                        <div class="medium" style="height: 150px;">
                                            <iframe style="width:100%;max-height:150px;" width="560" height="315"
                                                    src="https://www.youtube.com/embed/n4d7kQnICYg" frameborder="0"
                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen=""></iframe>
                                        </div>
                                        <div class="cz-card-body">
                                        <span class="byline">
                                            <a href="https://www.gcnt.net/skywars/importing-arenas">
                                                <h5 class="cz-card-title">How to import an arena from a map?</h5>
                                            </a>
                                        </span>
                                            <span class="byline">
                                            <span class="author vcard">
                                                <a class="url fn n lowercase"
                                                   href="https://www.gcnt.net/skywars/importing-arenas">Click here to learn how to turn an already-existing map into an arena.</a>
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