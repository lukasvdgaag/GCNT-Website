<?php
require '/var/www/html/inc/HeaderBuilder.php';

use inc\HeaderBuilder;

$header = new HeaderBuilder("SkyWarsReloaded", "skywars/importing-arenas");
$header->subtitle("How to import an arena?")
    ->displayFeaturedPlugin(true)
    ->featured("skywarsreloaded")
    ->metaDescription("Learn how to import an existing world/arena into SkyWarsReloaded. The best Skywars plugin ever made!")
    ->build();
?>

    <main class="site-content" role="main">
        <section>
            <div class="featured-posts white-background">
                <div class="width-container">
                    <div class="cz-container">
                        <div class="cz-row">
                            <div class="cz-col-xl-12 cz-col-lg-12 cz-col-sm-12 cz-col-md-12">
                                <div>
                                    <h4>Some information about this guide</h4>
                                    <p>
                                        There are three ways to import a skywars world (turn a regular world into a skywars
                                        arena). Two of them are pretty easy, but one is pretty hard.
                                        Because the one is hard, we made it easy for you: we created an extension for the
                                        SkywarsReloaded plugin which makes it possible to import
                                        an arena by using one simple command. Download it <a
                                                title="SkyWarsReloaded Extension"
                                                href="https://www.gcnt.net/swre">here</a>.<br>
                                        Below you will see three different courses: <i>Extension</i>, <i>WorldEdit</i>, and
                                        <i>Folders</i>. There are sorted from easy to difficult.
                                        It's up to you which one you choose to follow.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="cz-row">
                            <div class="cz-col-xl-12 cz-col-lg-12 cz-col-sm-12 cz-col-md-12 ia-extra">
                                <h3><span class="green">Extension</span></h3>
                            </div>
                            <div class="cz-col-xl-6 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Requirements</h3>
                                <ul class="cz-list">
                                    <li class="cz-list-group-item">You must have the SkywarsReloaded plugin installed and
                                        running.
                                    </li>
                                    <li class="cz-list-group-item">You must have installed the <a
                                                href="https://www.gcnt.net/swre">SkyWarsReloaded Extension</a></li>
                                </ul>
                            </div>
                            <div class="cz-col-xl-6 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 1</h3>
                                <p>
                                    There's only one thing you need to do: perform a command.<br>
                                    <strong>/swm import [world]</strong> where [world] is the name of the world you
                                    want to import. This world will then be turned into a Skywars map where
                                    the arena name is the world name you entered.
                                </p>
                            </div>
                        </div>
                        <div class="cz-row gray-background">
                            <div class="cz-col-xl-12 cz-col-lg-12 cz-col-sm-12 cz-col-md-12 ia-extra">
                                <h3><span class="green">WorldEdit</span></h3>
                            </div>
                            <div class="cz-col-xl-6 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Requirements</h3>
                                <ul class="cz-list">
                                    <li class="cz-list-group-item">You must have the SkywarsReloaded plugin installed and
                                        running.
                                    </li>
                                    <li class="cz-list-group-item">You must have installed <a
                                                href="https://dev.bukkit.org/projects/worldedit">WorldEdit</a></li>
                                    <li class="cz-list-group-item">You've installed a world management system such as
                                        <a href="https://dev.bukkit.org/projects/multiverse-core">MultiverseCore</a></li>
                                </ul>
                            </div>
                            <div class="cz-col-xl-6 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 1</h3>
                                <p>
                                    Start by coping your arena with WorldEdit by using the following commands.
                                    Go stand in a left-bottom corner of your map, make sure all blocks are in the 'block'
                                    and
                                    perform the command <strong>//pos1</strong>. Now head to the right-top corner of the map
                                    and perform <strong>//pos2</strong>.<br>
                                    Now copy the map using <strong>//copy</strong>.
                                </p>
                            </div>
                            <div class="cz-col-xl-6 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 2</h3>
                                <p>
                                    Now create the void skywars map using <strong>/swm create [name]</strong>. Do not remove
                                    the
                                    actual world yet! You should also not restart your server as you will then lose your
                                    selection.
                                </p>
                            </div>
                            <div class="cz-col-xl-6 cz-col-lg-6 cz-col-sm-12 cz-col-md-12">
                                <h3>Step 3</h3>
                                <p>
                                    Paste your schematic or selection by using <strong>//paste</strong>. Once you did that,
                                    it might take a while for your selection to load based on the size.
                                    Now just save and register the map using <strong>/swm save [name]</strong> and <strong>/swm
                                        register [name]</strong>.
                                    Then, edit your arena using <strong>/swm edit [name]</strong> and set all other arena
                                    options.
                                </p>
                            </div>
                        </div>
                        <div class="cz-row">
                            <div class="cz-col-xl-12 cz-col-lg-12 cz-col-sm-12 cz-col-md-12 ia-extra">
                                <h3><span class="green">Folders</span></h3>
                            </div>
                            <div class="cz-col-xl-4 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Requirements</h3>
                                <ul class="cz-list">
                                    <li class="cz-list-group-item">You must have the SkywarsReloaded plugin installed and
                                        running.
                                    </li>
                                    <li class="cz-list-group-item">You must have access to the files of the server.
                                    </li>
                                </ul>
                            </div>
                            <div class="cz-col-xl-4 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 1</h3>
                                <p>
                                    Head to the main folder of your server where all worlds are located and click on the
                                    world you want to import.
                                    You will now see some files. Copy the following files: <i>data, region, level.dat,
                                        uid.dat</i>. Do not remove the folder yet.
                                    Some file management programs require the main folder to be there when you paste the
                                    files.
                                </p>
                            </div>
                            <div class="cz-col-xl-4 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 2</h3>
                                <p>
                                    Now create a new arena using <strong>/swm create [name]</strong>. Save it, register it
                                    nad leave it like it is.
                                    Don't change anything (yet). Though, you can already change the arena display name,
                                    minimum players etc.
                                </p>
                            </div>
                            <div class="cz-col-xl-6 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 3</h3>
                                <p>
                                    Now you will have to head to the <i>plugins/Skywars/maps</i> folder and click the folder
                                    of the world you just created.
                                    Clear that folder, so make sure there are no files left in it. Then when it's empty,
                                    paste your copied files there.
                                </p>
                            </div>
                            <div class="cz-col-xl-6 cz-col-lg-12 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 4</h3>
                                <p>
                                    Now you need to restart your server.<br>
                                    Then check if the world transfer succeeded using <strong>/swm edit [name]</strong>. You
                                    might want to legacy load
                                    the arena to register all chests and player spawns.
                                    If everything is set, save and register the arena. If you do not do this, the world will
                                    be reset when you restart the server.
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
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/n4d7kQnICYg-yE" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </div>
        </section>
    </main>

<?php
include_once "../inc/footer.php";
?>