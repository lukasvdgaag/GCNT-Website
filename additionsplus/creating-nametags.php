<?php
require '/var/www/html/inc/HeaderBuilder.php';

use inc\HeaderBuilder;

$header = new HeaderBuilder("AdditionsPlus", "additionsplus/creating-nametags");
$header->subtitle("How to create a nametag?")
    ->displayFeaturedPlugin(true)
    ->featured("AdditionsPlus")
    ->metaDescription("Learn how to create custom (animated) nametags for AdditionsPlus. Expand your server with Additions!")
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
                                    You will have to make sure that the <i>Additions</i> folder contains the
                                    <i>nametags.yml</i> file. If it doesn't, create it.
                                    Make sure that the following is in the file. You can modify it if you want.
                                </p>
                                <iframe onload="resizeIframe(this)" width="100%" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true"
                                        src="https://www.gcnt.net/my-gcnt/paste/paste-html?paste_name=v0Q6yEoa">
                                </iframe>
                            </div>
                            <div class="cz-col-xl-4 cz-col-lg-4 cz-col-sm-12 cz-col-md-6">
                                <h3>Step 2</h3>
                                <p>
                                    Now you can add your own group and set the <span class="mark">order</span> of it.
                                    The order is determinative if a player is assigned to more than one nametag group. The
                                    tag with
                                    the lowest order will then be set as their nametag.
                                </p>
                                <p class="cz-table-warning" style="padding:10px;">
                                    <i>To assign players to a group, they need the permission: <strong>additions.nametag.GROUPNAME</strong>
                                        where GROUPNAME is the name of the group as specified in the configuration.</i>
                                </p>
                            </div>
                            <div class="cz-col-xl-4 cz-col-lg-4 cz-col-sm-12 cz-col-md-12">
                                <h3>Step 3</h3>
                                <p>
                                    Now you will have to set the actual tag of the nametag group. This could be either
                                    animated or static.
                                    If you want it to be static, just use <span class="mark">tag: '&eMVP &6%player%'</span>.<br>
                                    If you want it to be animated, you will have to make it a list (see example below) and
                                    add the option
                                    <span class="mark">updateInterval</span> to the group. This is the time for the
                                    animation to go to the next
                                    string in ticks. 1 second = 20 ticks.
                                </p>
                            </div>
                        </div>
                        <div class="cz-row">
                            <div class="cz-col-12 cz-align-content-start">
                                <h2><span class="green">Examples</span></h2>
                            </div>
                            <div class="cz-col-xl-6 cz-col-lg-6 cz-col-sm-12 cz-col-md-12">
                                <iframe onload="this.height= (this.contentWindow.document.body.scrollHeight + 10) + 'px'" width="100%" scrolling="no"
                                        frameborder="0" allowtransparency="true" allowfullscreen="true"
                                        src="https://www.gcnt.net/my-gcnt/paste/paste-html?paste_name=kJNnOCeY">
                                </iframe>
                                <div class="cz-text-center">
                                    <img loading="lazy" alt="static tag showcase"
                                         src="https://www.gcnt.net/inc/img/nametag-static.png">
                                </div>
                            </div>
                            <div class="cz-col-xl-6 cz-col-lg-6 cz-col-sm-12 cz-col-md-12">
                                <iframe onload="this.height= (this.contentWindow.document.body.scrollHeight + 10) + 'px'" width="100%" scrolling="no"
                                        frameborder="0" allowtransparency="true" allowfullscreen="true"
                                        src="https://www.gcnt.net/my-gcnt/paste/paste-html?paste_name=stkcw5iT">
                                </iframe>
                                <div class="cz-text-center">
                                    <img loading="lazy" alt="animated tag showcase"
                                         src="https://www.gcnt.net/inc/img/nametag-animated.gif">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        function resizeIframe(iframe) {
            iframe.height = (iframe.contentWindow.document.body.scrollHeight + 10) + "px";
        }
    </script>

<?php
include_once "../inc/footer.php";
?>