<?php
require '/var/www/html/inc/HeaderBuilder.php';

use inc\HeaderBuilder;

$header = new HeaderBuilder("SkyWarsReloaded", "skywars/creating-arenas");
$header->subtitle("How to create an arena?")
    ->displayFeaturedPlugin(true)
    ->featured("skywarsreloaded")
    ->metaDescription("Learn how to create a new arena for SkyWarsReloaded. The best Skywars plugin ever made!")
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
                                    <li class="cz-list-group-item">You must have set the lobby spawnpoint.</li>
                                </ul>
                            </div>
                            <div class="cz-col-xl-4 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 1</h3>
                                <p>
                                    Create your first arena using <strong>/swm create [name]</strong>. Replace the [name]
                                    variable with the name of the arena.
                                    After you've done this, you will get teleported to a void world. You're all set to start
                                    building and setting the properties now.
                                </p>
                            </div>
                            <div class="cz-col-xl-4 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 2</h3>
                                <p>
                                    After you've built your map, or pasted a schematic, you're ready to set the player and
                                    spectate spawnpoints.
                                    Fly to the places you want a player to spawn and type <strong>/swm spawn player</strong>.
                                    This will place
                                    a diamond block at your current location. If you remove that block, the player
                                    spawnpoint will be removed. Do this for every player spawn.
                                    Then fly to the place you want the dead players to spawn as spectators. Then type
                                    <strong>/swm
                                        spawn spec</strong> which will set the spectators spawnpoint.
                                </p>
                            </div>
                            <div class="cz-col-xl-4 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 3</h3>
                                <p>
                                    Now add the chests to the arena. If you don't register the chests, the plugin will NOT
                                    add items to the chests when the game starts!
                                    If you're building the arena by hand, you can just place the chests and they will
                                    automatically register the chests. If you want to unregister a chest, you simply
                                    remove it.<br><br>
                                    But if you pasted a schematic or something else, you can do two things:
                                </p>
                                <ol>
                                    <li>Remove all chests and place them again.</li>
                                    <li>Use the command <strong>/swm legacyload</strong> to automatically register all chests, and beacons as spawnpoints.
                                        Note that this command will also remove all chests and spawnpoints.
                                    </li>
                                </ol>
                            </div>
                            <div class="cz-col-xl-4 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 4</h3>
                                <p>
                                    Once you've done all that, the easy things come. You're now ready to set all meta
                                    settings. These meta settings are things like the minPlayers, creator, and displayName of
                                    the arena.
                                    Use <strong>/swm min [amount]</strong> to set the minimum amount of players for the
                                    arena to let
                                    it start. Replace the [amount] variable with the player amount. This must be higher than
                                    1 and lower than your player spawns amount.
                                    Perform <strong>/swm creator [creator]</strong> to set the creator of the map. Replace
                                    the [creator]
                                    variable with the name of the creator.
                                    Use <strong>/swm name [display]</strong> to set the display name of the map. Replace the
                                    [display]
                                    variable with the display name. This supports color codes (&).
                                </p>
                            </div>
                            <div class="cz-col-xl-4 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 5</h3>
                                <p>
                                    There it is, the final step. The only thing that keeps you from playing your map is
                                    saving and registering it.
                                    To save your arena, you'll have to do <strong>/swm save [map]</strong>. This will teleport you to the
                                    lobby spawn and saves your map. But you will have to register it to 'enable' your map.
                                    Just do <strong>/swm register [map]</strong> to register your map. Once you've done that, you can start
                                    playing the arena!
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