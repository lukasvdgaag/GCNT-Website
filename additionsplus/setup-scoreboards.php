<?php
require '/var/www/html/inc/HeaderBuilder.php';

use inc\HeaderBuilder;

$header = new HeaderBuilder("AdditionsPlus", "additionsplus/setup-scoreboards");
$header->subtitle("How to setup scoreboards?")
    ->displayFeaturedPlugin(true)
    ->featured("AdditionsPlus")
    ->metaDescription("Learn how to setup custom (per world) scoreboards for AdditionsPlus. Expand your server with Additions!")
    ->build();
?>

    <main class="site-content" role="main">
        <section>
            <div class="featured-posts white-background">
                <div class="width-container">
                    <div class="cz-container">
                        <div class="cz-row">
                            <div class="cz-col-12">
                                <div class="link-buttons" id="links">
                                    <a href="/additionsplus" class="button-active">◄ Go Back</a>
                                    <a href="/ap" target="_blank">Download</a>
                                    <a href="https://my.gcnt.net/plugins/AdditionsPlus">Features & Dependencies</a>
                                    <a href="/additionsplus/actions">Actions</a>
                                    <a href="/additionsplus/commands">Commands & Permissions</a>
                                </div>
                            </div>

                            <div class="cz-col-xl-4 cz-col-lg-4 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 1</h3>
                                <p>
                                    In the <i>config.yml</i> file, under "scoreboards", make sure that you have <span class="mark">enabled</span>
                                    set to true. If you want to have the ability to apply different scoreboards to different worlds,
                                    you can enable the <span class="mark">perWorld</span> option as well.<br>
                                    It's also possible to change the update interval of the scoreboards. This number has to be specified in
                                    ticks and is 200 (10 seconds) by default.
                                </p>
                            </div>
                            <div class="cz-col-xl-4 cz-col-lg-4 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 2</h3>
                                <p>
                                    Now head to the <i>scoreboards.yml</i> file. Let's start with customizing the main scoreboard.
                                    This is the scoreboard that will be displayed when you have the <i>perWorld</i> option disabled.
                                    The main scoreboard section is labeled "scoreboard" in the configuration. To make it work, make sure
                                    that you have the option <span class="mark">enabled</span> set to true under "scoreboard".
                                </p>
                            </div>
                            <div class="cz-col-xl-4 cz-col-lg-4 cz-col-sm-12 cz-col-md-12" id="step-3">
                                <h3>Step 3</h3>
                                <p>
                                    Let's change the scoreboard title and lines now. Under "scoreboard", you see the option
                                    <span class="mark">title</span> which represents the scoreboard title.
                                    You will also an option called <span class="mark">lines</span>. This represents all scoreboard
                                    lines. This has to be a list (indicated with -).<br>
                                    Both the title and the lines support color codes (&) and (MVdW)PlaceholderAPI.
                                </p>
                                <p class="cz-table-warning" style="padding:10px">
                                    Please note that there is a maximum of 16 lines and 32 characters per line (128 on 1.13+).
                                    Both the title and the lines support color codes (&) and (MVdW)PlaceholderAPI.
                                </p>
                            </div>
                            <div class="cz-col-xl-8 cz-col-lg-8 cz-col-sm-12 cz-col-md-12" id="step-4">
                                <h3>Step 4 (per world)</h3>
                                <p>
                                    If you want per-world scoreboards, you need to add the world name(s) you want the scoreboards in
                                    under the "worlds" section like the example below. You will have to make sure that enabled is set to true.
                                    You can now add the title and lines properties (<a href="#step-3">see step 3</a>).
                                </p>
                                <iframe onload="this.height= (this.contentWindow.document.body.scrollHeight + 10) + 'px'" width="100%" scrolling="no"
                                        frameborder="0" allowtransparency="true" allowfullscreen="true"
                                        src="https://www.gcnt.net/my-gcnt/paste/paste-html?paste_name=sLtfCzxZ">
                                </iframe>
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