<?php
require '/var/www/html/inc/HeaderBuilder.php';

use inc\HeaderBuilder;

$pluginArray = array("additions", "streakrewards", "skywarsreloaded");
$randomNum = array_rand($pluginArray);

$header = new HeaderBuilder("GaagjesCraft Network Team", "index");
$header->background(true)
    ->subtitle("Professional Minecraft plugins development")
    ->displayFeaturedPlugin(true)
    ->featured($pluginArray[$randomNum])
    ->build();
?>

<main id="content" class="site-content" role="main">
    <section>
        <div class="featured-posts">
            <div class="cz-container"><h2>Our Plugins</h2>
                <div class="cz-row cz-justify-content-center card-wrapper">
                    <div class="cz-col-6 cz-col-md-4 cz-col-lg-4 cz-col-xl-3">
                        <div class="cz-card">
                            <a href="https://www.gcnt.net/manhunt"
                               title="Manhunt">
                        <span class="categories">
                            <span class="category">
                                Game Mode
                            </span>
                             <span class="category">
                                Fun
                            </span>
                            <span class="category" id="pl-ver-92136">
                                NaN
                            </span>
                        </span>
                                <div class="featured-image-wrapper">
                                    <img loading="lazy" data-lazyloaded="1"
                                         src="https://www.gcnt.net/inc/img/manhunt-logo.jpg"
                                         class="cz-card-img-top litespeed-loaded"
                                         data-src="https://www.gcnt.net/inc/img/manhunt-logo.jpg"
                                         alt="Manhunt logo" data-was-processed="true">
                                    <noscript>
                                        <img loading="lazy" class="cz-card-img-top"
                                             src="https://www.gcnt.net/inc/img/manhunt-logo.jpg"
                                             alt="Manhunt logo">
                                    </noscript>
                                </div>
                            </a>
                            <div class="cz-card-body">
                        <span class="byline">
                            <span class="author vcard">
                                <a id="pl-info-92136" class="url fn n" href="https://www.gcnt.net/manhunt">€8.50 - 6 downloads</a>
                            </span>
                            <span class="dot cz-mx-2"></span>
                        </span>
                                <a href="https://www.gcnt.net/manhunt" title="Manhunt">
                                    <h5 class="cz-card-title">
                                        Manhunt
                                    </h5>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="cz-col-6 cz-col-md-4 cz-col-lg-4 cz-col-xl-3">
                        <div class="cz-card">
                            <a href="https://www.gcnt.net/ap"
                               title="AdditionsPlus">
                        <span class="categories">
                            <span class="category">
                                Utilities
                            </span>
                             <span class="category">
                                Misc
                            </span>
                            <span class="category" id="pl-ver-67706">
                                NaN
                            </span>
                        </span>
                                <div class="featured-image-wrapper">
                                    <img loading="lazy" data-lazyloaded="1"
                                         src="https://www.gcnt.net/inc/img/additions-logo.jpg"
                                         class="cz-card-img-top litespeed-loaded"
                                         data-src="https://www.gcnt.net/inc/img/additions-logo.jpg"
                                         alt="AdditionsPlus logo" data-was-processed="true">
                                    <noscript>
                                        <img loading="lazy" class="cz-card-img-top"
                                             src="https://www.gcnt.net/inc/img/additions-logo.jpg"
                                             alt="AdditionsPlus logo">
                                    </noscript>
                                </div>
                            </a>
                            <div class="cz-card-body">
                        <span class="byline">
                            <span class="author vcard">
                                <a id="pl-info-67706" class="url fn n" href="https://www.gcnt.net/ap">€6.99 - 68 downloads</a>
                            </span>
                            <span class="dot cz-mx-2"></span>
                        </span>
                                <a href="https://www.gcnt.net/ap" title="AdditionsPlus">
                                    <h5 class="cz-card-title">
                                        Additions Plus
                                    </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--- -->
                    <div class="cz-col-6 cz-col-md-4 cz-col-lg-4 cz-col-xl-3">
                        <div class="cz-card">
                            <a href="https://www.gcnt.net/sr"
                               title="StreakRewards">
                        <span class="categories">
                            <span class="category">
                                Misc
                            </span>
                             <span class="category">
                                Fun
                            </span>
                            <span class="category" id="pl-ver-68195">
                                NaN
                            </span>
                        </span>
                                <div class="featured-image-wrapper">
                                    <img loading="lazy" data-lazyloaded="1"
                                         src="https://www.gcnt.net/inc/img/streakrewards-logo.jpg"
                                         class="cz-card-img-top litespeed-loaded"
                                         data-src="https://www.gcnt.net/inc/img/streakrewards-logo.jpg"
                                         alt="StreakRewards logo" data-was-processed="true">
                                    <noscript>
                                        <img loading="lazy" class="cz-card-img-top"
                                             src="https://www.gcnt.net/inc/img/streakrewards-logo.jpg"
                                             alt="StreakRewards logo">
                                    </noscript>
                                </div>
                            </a>
                            <div class="cz-card-body">
                        <span class="byline">
                            <span class="author vcard">
                                <a id="pl-info-68195" class="url fn n" href="https://www.gcnt.net/sr">€3.40 - 53 downloads</a>
                            </span>
                            <span class="dot cz-mx-2"></span>
                        </span>
                                <a href="https://www.gcnt.net/sr" title="StreakRewards">
                                    <h5 class="cz-card-title">
                                        Streak Rewards
                                    </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--- -->
                    <div class="cz-col-6 cz-col-md-4 cz-col-lg-4 cz-col-xl-3">
                        <div class="cz-card">
                            <a href="https://www.gcnt.net/swr"
                               title="SkyWarsReloaded">
                        <span class="categories">
                            <span class="category">
                                Game Mode
                            </span>
                             <span class="category">
                                Fun
                            </span>
                            <span class="category" id="pl-ver-69436">
                                NaN
                            </span>
                        </span>
                                <div class="featured-image-wrapper">
                                    <img loading="lazy" data-lazyloaded="1"
                                         src="https://www.gcnt.net/inc/img/skywarsreloaded-logo.jpg"
                                         class="cz-card-img-top litespeed-loaded"
                                         data-src="https://www.gcnt.net/inc/img/skywarsreloaded-logo.jpg"
                                         alt="SkyWarsReloaded logo" data-was-processed="true">
                                    <noscript>
                                        <img loading="lazy" class="cz-card-img-top"
                                             src="https://www.gcnt.net/inc/img/skywarsreloaded-logo.jpg"
                                             alt="SkyWarsReloaded logo">
                                    </noscript>
                                </div>
                            </a>
                            <div class="cz-card-body">
                        <span class="byline">
                            <span class="author vcard">
                                <a id="pl-info-69436" class="url fn n"
                                   href="https://www.gcnt.net/swr">50000 downloads</a>
                            </span>
                            <span class="dot cz-mx-2"></span>
                        </span>
                                <a href="https://www.gcnt.net/swr" title="SkyWarsReloaded">
                                    <h5 class="cz-card-title">
                                        SkyWars Reloaded
                                    </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--- -->
                    <div class="cz-col-6 cz-col-md-4 cz-col-lg-4 cz-col-xl-3">
                        <div class="cz-card">
                            <a href="https://www.gcnt.net/swre"
                               title="SkyWarsReloaded Extension">
                        <span class="categories">
                            <span class="category">
                                Misc
                            </span>
                            <span class="category" id="pl-ver-69111">
                                1.8 - 1.15
                            </span>
                        </span>
                                <div class="featured-image-wrapper">
                                    <img loading="lazy" data-lazyloaded="1"
                                         src="https://www.gcnt.net/inc/img/skywarsextension-logo.jpg"
                                         class="cz-card-img-top litespeed-loaded"
                                         data-src="https://www.gcnt.net/inc/img/skywarsextension-logo.jpg"
                                         alt="SkyWarsReloaded Extension logo" data-was-processed="true">
                                    <noscript>
                                        <img loading="lazy" class="cz-card-img-top"
                                             src="https://www.gcnt.net/inc/img/skywarsextension-logo.jpg"
                                             alt="SkyWarsReloaded Extension logo">
                                    </noscript>
                                </div>
                            </a>
                            <div class="cz-card-body">
                        <span class="byline">
                            <span class="author vcard">
                                <a id="pl-info-69111" class="url fn n"
                                   href="https://www.gcnt.net/swre">341 downloads</a>
                            </span>
                            <span class="dot cz-mx-2"></span>
                        </span>
                                <a href="https://www.gcnt.net/swre" title="SkyWarsReloaded Extension">
                                    <h5 class="cz-card-title">
                                        SkyWars Reloaded Extension
                                    </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--- -->
                    <div class="cz-col-6 cz-col-md-4 cz-col-lg-4 cz-col-xl-3">
                        <div class="cz-card">
                            <a href="https://www.gcnt.net/cp"
                               title="Checkpoints">
                        <span class="categories">
                            <span class="category">
                                Game Mode
                            </span>
                            <span class="category">
                                Fun
                            </span>
                            <span class="category" id="pl-ver-50451">
                                NaN
                            </span>
                        </span>
                                <div class="featured-image-wrapper">
                                    <img loading="lazy" data-lazyloaded="1"
                                         src="https://www.gcnt.net/inc/img/checkpoints-logo.jpg"
                                         class="cz-card-img-top litespeed-loaded"
                                         data-src="https://www.gcnt.net/inc/img/checkpoints-logo.jpg"
                                         alt="Checkpoints logo" data-was-processed="true">
                                    <noscript>
                                        <img loading="lazy" class="cz-card-img-top"
                                             src="https://www.gcnt.net/inc/img/checkpoints-logo.jpg"
                                             alt="Checkpoints logo">
                                    </noscript>
                                </div>
                            </a>
                            <div class="cz-card-body">
                        <span class="byline">
                            <span class="author vcard">
                                <a id="pl-info-50451" class="url fn n"
                                   href="https://www.gcnt.net/cp">1234 downloads</a>
                            </span>
                            <span class="dot cz-mx-2"></span>
                        </span>
                                <a href="https://www.gcnt.net/cp" title="Checkpoints">
                                    <h5 class="cz-card-title">
                                        Checkpoints
                                    </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--- -->
                    <div class="cz-col-6 cz-col-md-4 cz-col-lg-4 cz-col-xl-3">
                        <div class="cz-card">
                            <a href="https://spigotmc.org/resources/57317" rel="nofollow"
                               title="RealRadio">
                        <span class="categories">
                            <span class="category">
                                Misc
                            </span>
                            <span class="category">
                                Fun
                            </span>
                            <span class="category" id="pl-ver-57317">
                                NaN
                            </span>
                        </span>
                                <div class="featured-image-wrapper">
                                    <img loading="lazy" data-lazyloaded="1"
                                         src="https://www.gcnt.net/inc/img/realradio-logo.jpg"
                                         class="cz-card-img-top litespeed-loaded"
                                         data-src="https://www.gcnt.net/inc/img/realradio-logo.jpg"
                                         alt="RealRadio logo" data-was-processed="true">
                                    <noscript>
                                        <img loading="lazy" class="cz-card-img-top"
                                             src="https://www.gcnt.net/inc/img/realradio-logo.jpg"
                                             alt="RealRadio logo">
                                    </noscript>
                                </div>
                            </a>
                            <div class="cz-card-body">
                        <span class="byline">
                            <span class="author vcard">
                                <a id="pl-info-57317" class="url fn n" href="https://spigotmc.org/resources/57317"
                                   rel="nofollow">1234 downloads</a>
                            </span>
                            <span class="dot cz-mx-2"></span>
                        </span>
                                <a href="https://spigotmc.org/resources/57317" rel="nofollow" title="RealRadio">
                                    <h5 class="cz-card-title">
                                        RealRadio
                                    </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--- -->
                    <div class="cz-col-6 cz-col-md-4 cz-col-lg-4 cz-col-xl-3">
                        <div class="cz-card">
                            <a href="https://spigotmc.org/resources/60281" rel="nofollow"
                               title="Metal Detectors">
                        <span class="categories">
                            <span class="category">
                                Fun
                            </span>
                            <span class="category" id="pl-ver-60281">
                                NaN
                            </span>
                        </span>
                                <div class="featured-image-wrapper">
                                    <img loading="lazy" data-lazyloaded="1"
                                         src="https://www.gcnt.net/inc/img/metaldetectors-logo.jpg"
                                         class="cz-card-img-top litespeed-loaded"
                                         data-src="https://www.gcnt.net/inc/img/metaldetectors-logo.jpg"
                                         alt="Metal Detectors logo" data-was-processed="true">
                                    <noscript>
                                        <img loading="lazy" class="cz-card-img-top"
                                             src="https://www.gcnt.net/inc/img/metaldetectors-logo.jpg"
                                             alt="RealRadio logo">
                                    </noscript>
                                </div>
                            </a>
                            <div class="cz-card-body">
                        <span class="byline">
                            <span class="author vcard">
                                <a id="pl-info-60281" class="url fn n" href="https://spigotmc.org/resources/60281"
                                   rel="nofollow">500 downloads</a>
                            </span>
                            <span class="dot cz-mx-2"></span>
                        </span>
                                <a href="https://spigotmc.org/resources/60281" title="Metal Detectors" rel="nofollow">
                                    <h5 class="cz-card-title">
                                        Metal Detectors
                                    </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="grid-container">
            <div class="cz-row cz-justify-content-center cz-align-content-center">
                <div class="cz-col-md-6 cz-col-sm-12 cz-col-xl-6 cz-col-lg-6 cz-align-self-center mtop-2rem">
                    <div class="elementor-text-editor elementor-clearfix cz-text-center main-par">
                        <h3>
                            My GCNT
                            <br>
                            <span class="green">User Platform.</span>
                        </h3>
                        <p>We created a platform where our products and its users come together: My GCNT.
                            It is the one place where you can download all our plugins, including custom and premium
                            ones.
                            We are also offering some useful tools for certain plugins that make configuring certain
                            files a lot easier.
                        </p>
                        <h4>Pastes</h4>
                        <p>Copy. Create. Share.</p>
                        <p>With MyGCNT Pastes, you can create an online Paste containing text. You can share the Paste
                            by copying the link in the browser.
                            If the Paste is linked to your MyGCNT account, you are also able to edit and delete the
                            paste after you created it.<br></p>
                        <a href="https://my.gcnt.net/" class="button">
                            LEARN MORE
                        </a>
                    </div>
                </div>


                <div class="cz-col-md-6 cz-col-sm-12 cz-col-xl-6 cz-col-lg-6 cz-align-self-center mtop-2rem">
                    <div class="elementor-widget-wrap cz-text-center">
                        <img loading="lazy" class="elementor-widget-image cz-text-center"
                             src="https://www.gcnt.net/inc/img/mygcnt-showcasing.png" width="90%"
                             alt="my gcnt showcase">
                    </div>
                </div>
            </div>
            <div class="cz-row cz-justify-content-center cz-align-content-center">
                <div class="cz-col-md-6 cz-col-sm-12 cz-col-xl-6 cz-col-lg-6 cz-align-self-center cz-text-center mtop-2rem">
                    <div class="cz-text-center cz-d-block">
                        <div class="cz-text-center">
                            <span class="language">Java</span>
                            <span class="language">HTML</span>
                            <br>
                            <span class="language">PHP</span>
                            <span class="language">CSS</span>
                            <br>
                            <span class="language">JavaScript</span>
                        </div>
                    </div>
                </div>

                <div class="cz-col-md-6 cz-col-sm-12 cz-col-xl-6 cz-col-lg-6 cz-align-self-center mtop-2rem">
                    <div class="elementor-text-editor elementor-clearfix cz-text-center main-par">
                        <h3>
                            About Us.
                        </h3>
                        <p>
                            GCNT is short for GaagjesCraft Network Team: a group of advanced Minecraft plugin developers
                            that create custom and public Bukkit and Spigot plugins for Minecraft servers.
                            The word "GaagjesCraft" comes from an old Dutch Minecraft server that we started with same
                            family members
                            when we were younger. "Gaag" was our family name.<br>
                            As we all ages and school became more important, we decided to discontinue the server
                            and start focussing on other servers and their (custom) plugin development instead.<br>
                            Now, 3 people from all the Netherlands, France, and the United States have gathered together
                            as a team to develop (custom) Minecraft server plugins.<br>
                            And so the <strong>GaagjesCraft Network Team</strong>, better known as <strong>GCNT</strong>,
                            was born.
                        </p>
                    </div>
                </div>
            </div>
            <div class="cz-row cz-justify-content-center cz-align-content-center">
                <div class="cz-col-md-6 cz-col-sm-12 cz-col-xl-6 cz-col-lg-6 cz-align-self-center mtop-2rem">
                    <div class="elementor-text-editor elementor-clearfix cz-text-center main-par"
                         style="margin-bottom:1rem">
                        <h3>
                            Connect with <span class="green">Discord.</span>
                        </h3>
                        <p>Imagine a place where GCNT products and its users come together.<br>
                            In our official Discord server, we are offering premium support, inform you about new
                            products and services, allow our users to connect with each other and share their tips,
                            and offer giveaways every once in a while.</p>
                        <p>Join hundreds of GCNT users and server owners. Discuss, get assistance, and make friends, all
                            in the GCNT Community Discord server!</p>
                        <a href="/discord" class="button">
                            JOIN OUR DISCORD
                        </a>
                    </div>
                </div>


                <div class="cz-col-md-6 cz-col-sm-12 cz-col-xl-6 cz-col-lg-6 cz-align-self-center mtop-2rem">
                    <div class="cz-text-center">
                        <iframe class="cz-text-center"
                                src="https://discordapp.com/widget?id=536178805828485140&theme=dark" width="350"
                                height="400" allowtransparency="true" frameborder="0"
                                sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
                    </div>
                </div>
            </div>
        </div>

    </section>

</main>

<?php
include_once "./inc/footer.php";
?>

<script>

    window.onload = function () {
        getDownloads(69436);
        getDownloads(68195);
        getDownloads(67706);
        getDownloads(69111);
        getDownloads(50451);
        getDownloads(60281);
        getDownloads(57317);
        getDownloads(92136);
    };


    function getDownloads(id) {
        $.ajax({
            url: "https://api.spiget.org/v2/resources/" + id,
            userAgent: 'GCNTbot/2.0 (https://www.gcnt.net/)',
            async: true,
            dataType: 'json',
            cache: false,
            success: function (data) {
                let abc = "";
                const versions = data.testedVersions;
                const vString = versions[0] + " - " + versions[versions.length - 1];
                var average = parseFloat(data.rating.average);

                average = Math.round(average * 10) / 10;

                if (data.premium === "true" || data.premium === true) {
                    abc = "<i class=\"fas fa-euro-sign\" ></i>" + data.price + " - <i class=\"fas fa-download\"></i>" + data.downloads +
                        " - <i class=\"fas fa-star\" ></i>" + average;
                } else {
                    abc = "<i class=\"fas fa-download\" ></i>" + data.downloads + " - <i class=\"fas fa-star\" ></i>" + average;
                }

                document.getElementById('pl-ver-' + id).innerHTML = vString;
                document.getElementById('pl-info-' + id).innerHTML = abc;
            }
        });
    }

</script>

<div class="content-overlay"></div>

