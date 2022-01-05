<?php
require '/var/www/html/inc/HeaderBuilder.php';

use inc\HeaderBuilder;

$header = new HeaderBuilder("SkyWarsReloaded", "skywars/rewrite");
$header->subtitle("Information and spoilers")
    ->metaDescription("The latest information and spoilers of the new SkyWarsReloaded rewrite: version 6. The best Skywars plugin ever made!")
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
                                        <h3 class="entry-title">
                                            A new <span class="green">SkyWars</span>!
                                        </h3>
                                    </div>
                                    <div class="entry-content darkblue">
                                        <p>
                                            The GCNT Dev Team is working on a complete rewrite of the popular SkyWarsReloaded plugin.<br>
                                            We are striving for platform expandability, easy and stupid-proof setups, and a bug and lag-free experience.<br>
                                            For the developers here, this project will completely consist of interfaces and abstract classes, which allows you
                                            to easily overwrite default features and add your own, as well as write this plugin for an entirely different
                                            platform (eg. forge).
                                        </p>
                                        <h3><span class="green">Lag free</span> experience</h3>
                                        <p>We are aiming for the new Skywars rewrite to be as lag free as possible, with efficient world loading and saving.
                                            This is
                                            why version 6 will no longer be using Bukkit world folders to save arenas, but instead will be using either
                                            WorldEdit
                                            <u>Schematics or SlimeWorlds</u> to efficiently load and save maps. These two options allow us to load in the blocks
                                            efficiently, and mostly asynchronously.
                                            We will also make it possible to have multiple games
                                            running on one map. Because of this, we have decided to call maps <span class="green">templates</span> now, with the
                                            template containing all the game info such as chest- and spawnlocations and the schematic/SlimeWorld.
                                        </p>

                                        <h3>A better template setup</h3>
                                        <p>
                                            From now on, as said above, world templates will be stored as schematics or SlimeWorlds. In order for us to limit
                                            the
                                            size of the schematic as much as possible, we will be introducing a world border that indicates the boundaries of
                                            your template map setup. And of course, it is possible to change the size of the world border to your arena size
                                            accordingly.
                                            <br>
                                            We will also be introducing setup steps, todo lists, and add more titles and other messages to let you know how many
                                            things there are left to set up for your template.
                                            And for the Hypixel replicas among us, we will make it easier for you to create duo and trio games.
                                            <br><br>
                                            <i>Psst... we're also brining back beacons for player spawns &#128064;</i>
                                        </p>

                                        <h3>Other new features</h3>
                                        <p>
                                            Besides all the technical stuff, we will also introduce some new features such as the ability for players to buy
                                            kits, cages, and other cosmetics, which was a highly requested feature. But also a variety of party plugins support,
                                            kill and win effects.
                                            <br><br>
                                            If you have any suggestions for the new rewrite, please head over to <a href="/discord"
                                                                                                                    title="Join our Discord server">our Discord
                                                server</a> and use <span class="mark">/suggest</span> to suggest your feature.
                                        </p>

                                        <p class="cz-table-warning"><i>We currently do not have an ETA of the release of v6, so make sure to join our
                                                Discord (linked above) for any updates.</i></p>

                                    </div>
                                    <div class="entry-content cz-d-flex cz-flex-lg-row cz-flex-column cz-align-items-sm-center cz-justify-content-md-start"
                                         style="gap: 20px;row-gap: 20px;max-width:100%">
                                        <img src="../inc/img/sw-border-preview.png" alt="border preview"
                                             style="height:fit-content;max-height: 500px;width:fit-content;border-radius:12px;box-shadow: rgba(0,0,0,0.4) 0px 5px 50px;display:inline;margin:0;">
                                        <div class="cz-d-flex cz-flex-row cz-flex-wrap cz-align-content-start cz-align-items-sm-center cz-justify-content-sm-center cz-justify-content-md-start"
                                             style="gap: 20px;row-gap: 20px;margin:0;">
                                            <img src="../inc/img/sw-spawn-removed-preview.png" alt="border preview"
                                                 style="height:fit-content;max-height: 500px;width:fit-content;max-width:100%;border-radius:12px;box-shadow: rgba(0,0,0,0.4) 0px 5px 50px;display:inline;margin:0;">
                                            <img src="../inc/img/sw-spawn-removed-chat-preview.png" alt="border preview"
                                                 style="height:fit-content;max-height: 500px;width:fit-content;max-width:100%;border-radius:12px;box-shadow: rgba(0,0,0,0.4) 0px 5px 50px;display:inline;margin:0;">
                                            <img src="../inc/img/sw-chest-preview.png" alt="border preview"
                                                 style="height:fit-content;max-height: 500px;width:fit-content;max-width:100%;border-radius:12px;box-shadow: rgba(0,0,0,0.4) 0px 5px 50px;display:inline;margin:0;">
                                            <img src="../inc/img/sw-save-message-preview.png" alt="border preview"
                                                 style="height:fit-content;max-height: 500px;width:fit-content;max-width:100%;border-radius:12px;box-shadow: rgba(0,0,0,0.4) 0px 5px 50px;display:inline;margin:0;">

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