<?php
require '/var/www/html/inc/HeaderBuilder.php';

use inc\HeaderBuilder;

$header = new HeaderBuilder("SkyWarsReloaded", "skywars/setup-chests");
$header->subtitle("How to customize chest loot?")
    ->displayFeaturedPlugin(true)
    ->featured("skywarsreloaded")
    ->metaDescription("Learn how to create and customize chest loot for SkyWarsReloaded. The best Skywars plugin ever made!")
    ->build();
?>

    <main class="site-content" role="main">
        <section>
            <div class="featured-posts white-background">
                <div class="width-container">
                    <div class="cz-container">
                        <div class="cz-row">
                            <div class="cz-col-xl-4 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Requirements</h3>
                                <ul class="cz-list">
                                    <li class="cz-list-group-item">You must have the SkywarsReloaded plugin installed and
                                        running.
                                    </li>
                                </ul>
                            </div>
                            <div class="cz-col-xl-4 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 1</h3>
                                <p>
                                    Setting up chests is necessary for your game to be playable. By default, the chests are
                                    empty, which means that there won't be any items in the chests when the game starts.
                                    To fix this, you will need to customize the chest loot. You can simply do this in-game
                                    without having to edit any files.
                                </p>
                            </div>
                            <div class="cz-col-xl-4 cz-col-lg-12 cz-col-sm-12 cz-col-md-12">
                                <h3>Step 2</h3>
                                <p>
                                    Add items to your chests by using the command <strong>/sw chestadd [type] [method] [percentage]</strong>.
                                    In this command, the [type] variable could be either 'basic', 'basiccenter', 'normal',
                                    'normalcenter', 'op', or 'opcenter'. This is the chest type that should receive the items.
                                    The [method] variable could be either HAND or INV. Use 'hand' to only add the item that
                                    is in your main hand, and use 'inv' to add all inventory items at once.
                                    The [percentage] variable should be an integer between 1-100 that represents the rarity
                                    of the item for the chests. Meaning that when the percentage is 100, the item will be in
                                    all chests, and when the percentage is 1, there will only be 1% for the item to be in
                                    the chest.<br>

                                    Correct usage: <strong>/sw chestadd normal hand 50</strong>.
                                    This will add your hand item to the NORMAL chests with a rarity of 50%.
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