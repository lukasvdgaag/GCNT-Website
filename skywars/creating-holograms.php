<?php
require '/var/www/html/inc/HeaderBuilder.php';

use inc\HeaderBuilder;

$header = new HeaderBuilder("SkyWarsReloaded", "skywars/creating-holograms");
$header->subtitle("How to create a hologram?")
    ->displayFeaturedPlugin(true)
    ->featured("skywarsreloaded")
    ->metaDescription("Learn how to create a stats hologram for SkyWarsReloaded. The best Skywars plugin ever made!")
    ->build();
?>

    <main class="site-content" role="main">
        <section>
            <div class="featured-posts white-background">
                <div class="width-container">
                    <div class="cz-container">
                        <div class="cz-row">
                            <div class="cz-col-xl-6 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Requirements</h3>
                                <ul class="cz-list">
                                    <li class="cz-list-group-item">You must have the SkywarsReloaded plugin installed and
                                        running.
                                    </li>
                                    <li class="cz-list-group-item">You must have installed the Holographic Displays
                                        plugin.
                                    </li>
                                </ul>
                            </div>
                            <div class="cz-col-xl-6 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 1</h3>
                                <p>
                                    In order to use Holograms, you will need to have the option holograms.enabled set to
                                    true in the config.yml (see image).
                                    Once you've done that, you go to the leaderboards section in the config.yml. You will
                                    have to enable all stats you want to use their. By default is only the ELO stat enabled.
                                    Now reload the plugin using /sw reload
                                </p>
                                <img loading="lazy" src="https://i.imgur.com/RnZTXDi.png" alt="config screenshot">
                            </div>
                            <div class="cz-col-xl-6 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 2</h3>
                                <p>
                                    Now go to your the folder plugins>Skywars and open the holograms.yml file. In this file,
                                    all formats are stored.
                                    You will see a section for all stat types (ELO, wins, kills, etc.). It's not possible to
                                    add your own stat, but it is possible to create your own format. Formats are the
                                    subsections you see in the stat type sections. For ELO it's leaders and topplayer by
                                    default.
                                    You can add, change, remove formats if you want. Then reload the plugin again.
                                </p>
                            </div>
                            <div class="cz-col-xl-6 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 3</h3>
                                <p>
                                    Now you can create your holograms using the ingame command: <strong>/sw hologram [stat]
                                        [format]</strong>.
                                    As you read in the previous step, is the [stat] variable the stat type. So this could be
                                    either wins, kills, deaths, ELO, losses or XP
                                    The [format] variable are formats of those stat types, as you also read in the previous
                                    step.
                                    An example command could be <strong>/sw hologram elo leaders</strong> where 'elo' is the stat, and
                                    'leaders' the format. A hologram will now be placed at your eye location.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="featured-posts video-container white-background cz-text-center cz-align-content-center">
                <div class="width-container">
                    <h2>Tired of reading?<br><span class="green">Watch the video!</span></h2>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/eAVWkmZf5DY" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </div>
        </section>
    </main>

<?php
include_once "../inc/footer.php";
?>