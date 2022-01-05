<?php
require '/var/www/html/inc/HeaderBuilder.php';

use inc\HeaderBuilder;

$header = new HeaderBuilder("SkyWarsReloaded", "skywars/creating-custom-cages");
$header->subtitle("How to create a schematic cage?")
    ->displayFeaturedPlugin(true)
    ->featured("skywarsreloaded")
    ->metaDescription("Learn how to create a custom schematic cage for SkyWarsReloaded. The best Skywars plugin ever made!")
    ->build();
?>

    <main class="site-content" role="main">
        <section>
            <div class="featured-posts gray-background">
                <div class="width-container">
                    <div class="cz-container">
                        <div class="cz-row">
                            <div class="cz-col-xl-4 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Requirements</h3>
                                <ul class="cz-list">
                                    <li class="cz-list-group-item">You must have the SkywarsReloaded plugin installed and
                                        running.
                                    </li>
                                    <li class="cz-list-group-item">You must have installed WorldEdit.</li>
                                </ul>
                            </div>
                            <div class="cz-col-xl-4 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 1</h3>
                                <p>
                                    We are just gonna jump right in and start creating the schematic. First, grab the
                                    WorldEdit wand using <strong>//wand</strong>.
                                    Now select the first position of your cage (left-click a block), and then set the second
                                    position as well (right-click a block).
                                    Make sure all blocks your cage consists of are in the region you just created.
                                </p>
                            </div>
                            <div class="cz-col-xl-4 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 2</h3>
                                <p>
                                    Now you are going to copy it using <strong>//copy</strong>. BUT WAIT BEFORE DOING THAT!
                                    <span class="underline">Make sure you stand IN the cage when copying copying it.</span>
                                    If you don't do this, the player will spawn outside the cage or in some block and we
                                    don't want that.
                                </p>
                            </div>
                            <div class="cz-col-xl-4 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 3</h3>
                                <p>
                                    So now that you copied your cage, we are going to turn it into a schematic using <i>//schem
                                        save [name]</i> where
                                    [name] is the name you want the cage to have.<br>
                                    So that was the first part :)
                                </p>
                            </div>
                            <div class="cz-col-xl-4 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 4</h3>
                                <p>
                                    Now let's do the second part. Head to your server files and find the folder <i>plugins/WorldEdit/schematics</i>.
                                    If you did everything right, the [cagename].schematic file should be in that folder.
                                    Just copy that schematic file (or move it, idc) and put it in the <i>plugins/Skywars/cages</i>
                                    folder.
                                    If you don't see a <i>cages</i> folder, you will have to create it manually.
                                </p>
                            </div>
                            <div class="cz-col-xl-4 cz-col-lg-6 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 5</h3>
                                <p>
                                    So the one thing left is adding it to the glass color/cages selecting menu. So head to
                                    the <i>glasscolors.yml</i>
                                    file. Just scroll to the bottom and add the following thing, and make sure to follow the
                                    instructions after the #.
                                </p>
                                <?php echo file_get_contents("https://www.gcnt.net/my-gcnt/paste/paste-html?paste_name=TAbitlSu"); ?>
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
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/nvCrJ8aJ-yE" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </div>
        </section>
    </main>

<?php
include_once "../inc/footer.php";
?>