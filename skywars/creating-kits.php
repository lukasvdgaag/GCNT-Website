<?php
require '/var/www/html/inc/HeaderBuilder.php';

use inc\HeaderBuilder;

$header = new HeaderBuilder("SkyWarsReloaded", "skywars/creating-kits");
$header->subtitle("How to create an in-game kit?")
    ->displayFeaturedPlugin(true)
    ->featured("skywarsreloaded")
    ->metaDescription("Learn how to create a custom in-game kit for SkyWarsReloaded. The best Skywars plugin ever made!")
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
                                    <li class="cz-list-group-item">You must have the SkywarsReloaded plugin installed and running.</li>
                                </ul>
                            </div>
                            <div class="cz-col-xl-4 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 1</h3>
                                <p>
                                    Create your kits using <strong>/swk create [name]</strong>. Replace the [name] variable
                                    with the name of
                                    the kit.
                                    All items that are in your inventory then, will be added to the content of the kit. So
                                    make sure that you only have the kit items in your inventory.
                                    If you forgot to add items to the kit, use <strong>/swk update [name]</strong>. Replace
                                    the [name]
                                    variable with the name of the kit. This will update the kit with your current inventory.
                                </p>
                            </div>
                            <div class="cz-col-xl-4 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 2</h3>
                                <p>
                                    Once you've created the kit and added the items, you can set the (lock) item of the kit.
                                    You can set the icon with <strong>/swk icon [kit]</strong>. The item in your hand will
                                    then be set as the
                                    kit's icon.
                                    The locked kit icon can be set using <strong>/swk lockicon [kit]</strong>. The item in
                                    your hand will
                                    then be set as the locked kit icon of that kit.
                                    These icons will be displayed in the kit select menu when the player doesn't have the
                                    kit (locked icon) or has the kit (icon).
                                </p>
                            </div>
                            <div class="cz-col-xl-4 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 3</h3>
                                <p>
                                    Now, let's set the lore of the kit. You can do this by using <strong>/swk lore [kit]
                                        [loreNumber] [lore]</strong>. The [loreNumber] variable must be between 1-16 and
                                    represents the
                                    line of the lore. The [lore] variable is a string that support color codes (&).
                                    You can also set the locked item's lore using <strong>/swk lore [kit] locked
                                        [lore]</strong>.
                                </p>
                            </div>
                            <div class="cz-col-xl-4 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 4</h3>
                                <p>
                                    Only a few more things to do. Now, set the display name. Use <strong>/swk name [kit]
                                        [name]</strong> for
                                    that. Replace the [name] variable with the display name of the kit. This supports color
                                    codes (&). This name will be displayed in the kit selection menu.
                                </p>
                            </div>
                            <div class="cz-col-xl-4 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 5</h3>
                                <p>
                                    Now there are some optional thing to do. You can toggle whether a kit needs permission
                                    to be selected and you can set the kit position in the kit selection menu.
                                    You can toggle the kit-requires-permission option using <strong>/swk perm [kit]</strong>. By default, no
                                    permission is required.
                                    Set the kit position in the kit selection menu using <strong>/swk position [kit] [position]</strong>.
                                    Now just do <strong>/swk enable [kit]</strong> to enable the kit.
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