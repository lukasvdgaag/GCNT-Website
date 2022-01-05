<?php
require '/var/www/html/inc/HeaderBuilder.php';

use inc\HeaderBuilder;

$header = new HeaderBuilder("SkyWarsReloaded", "skywars/installing-plugin");
$header->subtitle("How to install the plugin?")
    ->displayFeaturedPlugin(true)
    ->featured("skywarsreloaded")
    ->metaDescription("Learn how to install and set up SkyWarsReloaded. The best Skywars plugin ever made!")
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
                                    Let's start with downloading the plugin. You can do this by clicking <a
                                            href="https://www.gcnt.net/swr">here</a>.
                                    After clicking the link, you will se a "Download Now" button on that page. Click that
                                    button to start the download. This will download the latest version of SkywarsReloaded.
                                </p>
                            </div>
                            <div class="cz-col-xl-4 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 2</h3>
                                <p>
                                    Now we're going to install the plugin on your server. Do this by going to your server
                                    files, then click the 'plugins' folder. Now upload the .jar file.
                                    Now restart your server or use a plugin like <a
                                            href="https://dev.bukkit.org/projects/plugman">PlugMan</a> to load the plugin
                                    (/plugman load
                                    Skywars).
                                </p>
                            </div>
                            <div class="cz-col-xl-4 cz-col-lg-12 cz-col-sm-12 cz-col-md-12">
                                <h3>Step 3</h3>
                                <p>
                                    Now that the plugin is installed and enabled, you will have to do one lst thing before
                                    creating arenas: setting the lobby spawnpoint.
                                    It is not possible to create or edit arenas without the lobby spawnpoint being set. So
                                    do this using /sw setspawn.

                                    Players will spawn here after they left their game or when it ended. They will also be
                                    teleported to this spawn when you have one of the options 'teleportToSpawnOnJoin' or
                                    'teleportToSpawnOnWorldEnter' enabled in the config.yml.
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