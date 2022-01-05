<?php
require '/var/www/html/inc/HeaderBuilder.php';

use inc\HeaderBuilder;

$header = new HeaderBuilder("AdditionsPlus", "additionsplus/index");
$header->subtitle("Expand your server with Additions!")
    ->displayFeaturedPlugin(true)
    ->featured("AdditionsPlus")
    ->metaDescription("AdditionsPlus is an all-in-one utility plugin for every Minecraft server. With custom menus, items, scoreboards, actions, tablists, and more. Expand your server with Additions!")
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
                                    <div>
                                        <h3 class="entry-title" id="about">
                                            About <span class="green">AdditionsPlus</span>
                                        </h3>
                                    </div>
                                    <div class="entry-content darkblue">
                                        <p>
                                            AdditionsPlus is a Spigot plugin that adds a LOT of possibilities to your server and allows everything to be fully
                                            customized.
                                            It is very light-weight and updated often. It allows you create custom commands, items, menus, books, scoreboards,
                                            nametags, tab lists,
                                            signs, events, and much more.<br>
                                            Additions has the power to do great things if you know how to use the features. We'll help you understand them here!
                                            We can assure you that this plugin can replace at least two plugins on your server.
                                            For instance, you can ditch your joinMessenger plugin, remove your scoreboard plugin and delete your menu and items
                                            plugin.
                                            <br><br>
                                            Don't be shy, check it out on SpigotMC! Click the Download button below.<br>
                                            <strong>Turn your creativity into reality with AdditionsPlus!</strong>
                                        </p>
                                        <div class="link-buttons" id="links">
                                            <a href="/ap" target="_blank">Download</a>
                                            <a href="https://my.gcnt.net/plugins/AdditionsPlus">Features & Dependencies</a>
                                            <a href="/additionsplus/actions">Actions</a>
                                            <a href="/additionsplus/commands">Commands & Permissions</a>
                                        </div>
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
                        <div class="cz-container" id="faq">
                            <h2>FAQ</h2>

                            <div class="cz-row cz-justify-content-center cz-align-content-center card-wrapper">
                                <div class="cz-col-11 cz-col-sm-6 cz-col-md-4 cz-col-lg-4 cz-col-xl-4">
                                    <div class="cz-card">
                                        <a href="creating-nametags">
                                        <span class="categories">
                                            <span class="category">Easy</span>
                                        </span>
                                            <div class="featured-image-wrapper easy"></div>
                                        </a>
                                        <div class="cz-card-body">
                                        <span class="byline">
                                            <a href="creating-nametags">
                                                <h5 class="cz-card-title">How to create a nametag?</h5>
                                            </a>
                                        </span>
                                            <span class="byline">
                                            <span class="author vcard">
                                                <a class="url fn n lowercase" href="creating-nametags">Click here to learn how to create a nametag.</a>
                                            </span>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cz-col-11 cz-col-sm-6 cz-col-md-4 cz-col-lg-4 cz-col-xl-4">
                                    <div class="cz-card">
                                        <a href="setup-scoreboards">
                                        <span class="categories">
                                            <span class="category">Easy</span>
                                        </span>
                                            <div class="featured-image-wrapper easy"></div>
                                        </a>
                                        <div class="cz-card-body">
                                        <span class="byline">
                                            <a href="setup-scoreboards">
                                                <h5 class="cz-card-title">How to setup scoreboards?</h5>
                                            </a>
                                        </span>
                                            <span class="byline">
                                            <span class="author vcard">
                                                <a class="url fn n lowercase"
                                                   href="setup-scoreboards">Click here to learn how to setup (per world) scoreboards.</a>
                                            </span>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="width-container">
                        </div>
                    </div>
        </section>
    </main>

<?php
include_once "../inc/footer.php";
?>