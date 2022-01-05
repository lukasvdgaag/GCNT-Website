<?php
require '/var/www/html/inc/HeaderBuilder.php';

use inc\HeaderBuilder;

$header = new HeaderBuilder("StreakRewards", "streakrewards/creating-shapes");
$header->subtitle("How to create a custom shape?")
    ->displayFeaturedPlugin(true)
    ->featured("streakrewards")
    ->metaDescription("Learn how to create a custom menu shape for StreakRewards. Daily streaked rewards!")
    ->build();
?>

    <main class="site-content" role="main">
        <section>
            <div class="featured-posts white-background">
                <div class="width-container">
                    <div class="cz-container">
                        <div class="cz-row">
                            <div class="cz-col-xl-4 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 1</h3>
                                <p>
                                    First, make sure that the config is not using a pre-configured shape by setting the option <span
                                            class="mark">menu_shape</span> in the config to
                                    <i>CUSTOM</i>. This allows you to set custom slots for days in the rewards menu.
                                </p>
                            </div>
                            <div class="cz-col-xl-4 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 2</h3>
                                <p>
                                    Now, head to the rewards.yml and add the following for every day (check the config.yml to see how many days you have to
                                    set).
                                    For every day, add <span class="mark">day-DAYNUMBER:</span> and replace DAYNUMBER with the number of the day.
                                    Then under that section you just created, add <span class="mark">slot: SLOTNUMBER</span> where SLOTNUMBER is the number of
                                    the slot
                                    starting at 0.
                                    <iframe onload="this.height= (this.contentWindow.document.body.scrollHeight + 10) + 'px'" width="100%" scrolling="no"
                                            frameborder="0" allowtransparency="true" allowfullscreen="true"
                                            src="https://www.gcnt.net/my-gcnt/paste/paste-html?paste_name=oPA5jUCW">
                                    </iframe>
                                </p>
                            </div>
                            <div class="cz-col-xl-4 cz-col-lg-12 cz-col-sm-12 cz-col-md-12">
                                <h3>Step 3</h3>
                                <p>
                                    Once you've done all that, make sure to save all files and reload the plugin by using <strong>/daily reload</strong>.
                                    Check your new, customized menu by performing <strong>/daily</strong> in-game. If you see all days, then you successfully
                                    created your own shape!
                                </p>
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