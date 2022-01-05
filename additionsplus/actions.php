<?php
require '/var/www/html/inc/HeaderBuilder.php';

use inc\HeaderBuilder;

$header = new HeaderBuilder("AdditionsPlus", "additionsplus/actions");
$header->subtitle("Actions")
    ->displayFeaturedPlugin(false)
    ->metaDescription("An extensive list of all AdditionsPlus actions, with descriptions and examples. Expand your server with Additions!")
    ->build();
?>

<main id="content" class="site-content" role="main">
    <section>
        <div class="features-posts">
            <div class="width-container">
                <div class="cz-container">
                    <div class="cz-row">
                        <div class="cz-col-12 cz-lowermargin-bottom">
                            <div class="link-buttons" id="links">
                                <a href="/additionsplus" class="button-active">◄ Go Back</a>
                                <a href="/ap" target="_blank">Download</a>
                                <a href="https://my.gcnt.net/plugins/AdditionsPlus">Features & Dependencies</a>
                                <a href="/additionsplus/actions">Actions</a>
                                <a href="/additionsplus/commands">Commands & Permissions</a>
                            </div>
                        </div>

                        <div id="primary" class="cz-col-12">
                            <div class="primary-sub-wrapper">
                                <div>
                                    <h3 class="entry-title">
                                        About the <span class="green">actions</span>
                                    </h3>
                                </div>
                                <div class="entry-content">
                                    <p>
                                        An action is a string that performs a certain operation. These actions are mainly used in the <a href="/ap"
                                                                                                                                         target="_blank">AdditionsPlus</a>
                                        plugin, but there are several other plugins that use them as well. Actions are always wrapped between square brackets []
                                        and the action identifiers
                                        are case-insensitive. An example is: [message].<br>
                                        Actions are often followed by a string, because most actions require more things to be specified than just the
                                        identifier. For example:
                                        <i>[message]this is a message</i>.<br><br>
                                        There are several action types:<br>
                                        <strong>INNER</strong> <i>([action=...])</i> : require inline arguments; these often return true/false, if false the
                                        action won't be executed; example: [permission].<br>
                                        <strong>OUTER</strong> <i>([action]...[/action])</i> : require an opening and closing tag; often have a return value;
                                        example: [math].<br>
                                        <strong>STANDALONE</strong> <i>([action])</i> : do not require any arguments; example: [safelanding].<br>
                                        <strong>NORMAL</strong> <i>([action]...)</i> : require arguments; most common one; example: [message].<br>
                                        <strong>COMBINED</strong> <i>([action][anotherAction])</i> : does nothing on its own; must be combined with another
                                        action; example: [everyone].<br>
                                        <br>
                                        All INNER, OUTER and COMBINED actions can be combined with normal ones. This way, you can create dynamic actions.
                                        For example, you can use an INNER action to check if a player has a certain permission, if true, send the player a
                                        message:
                                        <i>[permission=my.perm][message]you have the permission my.perm!</i>
                                        <br><br>

                                        Below is the list with all actions with their descriptions and a few examples for every action.<br>
                                        Please note that this list is based on the <span class="underline">latest version</span> of AdditionsPlus.
                                    </p>
                                    <p style="margin-bottom:0">Click an action in the list below to get more info about
                                        it.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cz-row">
                        <div id="primary" class="cz-col-12 actionListHolder">
                            <div class="primary-sub-wrapper">
                                <table class="cz-d-table break-all">
                                    <thead>
                                    <tr class="cz-d-table-row">
                                        <th>Actions</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>

                                    <style>
                                        .cz-d-table-row {
                                            cursor: pointer;
                                        }
                                    </style>

                                    <script>
                                        var current = "";

                                        function toggleInfo(td) {
                                            var action = td.id;

                                            var newthing = document.getElementById(action + "-popup");

                                            if (newthing.style.display !== "none") {
                                                newthing.style.display = "none";
                                                current = "";
                                            } else {
                                                if (current !== action && current !== "") {
                                                    document.getElementById(current + "-popup").style.display = "none";
                                                }
                                                newthing.style.display = "table-row";
                                                current = action;
                                            }
                                        }
                                    </script>

                                    <tbody>
                                    <tr class="cz-d-table-row" style="cursor:pointer;" id="message"
                                        onclick="toggleInfo(this)">
                                        <th>[message]</th>
                                        <td>Send a message to a player</td>
                                    </tr>
                                    <tr id="message-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Aliases:</strong>
                                            <span>[msg]</span>
                                            <br>
                                            <strong>Examples:</strong>
                                            <span>[message]This is a message only sent to you!</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="command" onclick="toggleInfo(this)">
                                        <th>[command]</th>
                                        <td>Perform a command as a player</td>
                                    </tr>
                                    <tr id="command-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Aliases:</strong>
                                            <span>[player]</span>
                                            <br>
                                            <strong>Examples:</strong>
                                            <span>[player]say hi</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="console" onclick="toggleInfo(this);">
                                        <th>[console]</th>
                                        <td>Perform a command as the console</td>
                                    </tr>
                                    <tr id="console-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Examples:</strong>
                                            <span>[console]give %player% stick 1</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="title" onclick="toggleInfo(this);">
                                        <th>[title]</th>
                                        <td>This will send a title to the player. Use \n to switch to the subtitle. Supports
                                            color codes.
                                        </td>
                                    </tr>
                                    <tr id="title-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Examples:</strong>
                                            <span>[title]&a&Welcome!\n&7%player%</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="actionbar" onclick="toggleInfo(this)">
                                        <th>[actionbar]</th>
                                        <td>This will send an actionbar to a player. Supports color codes.</td>
                                    </tr>

                                    <tr id="actionbar-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Aliases:</strong>
                                            <span>[action]</span>
                                            <br>
                                            <strong>Examples:</strong>
                                            <span>[actionbar]&6Welcome to our server!</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="json" onclick="toggleInfo(this);">
                                        <th>[json]</th>
                                        <td>This will send a json message to a player. Use a generator like this to create
                                            json messages.
                                        </td>
                                    </tr>
                                    <tr id="json-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Aliases:</strong>
                                            <span>[jsonmessage], [jsonmsg]</span>
                                            <br>
                                            <strong>Examples:</strong>
                                            <span>[json]["",{"text":"Text","color":"green","hoverEvent":{"action":"show_text","value":{"text":"","extra":[{"text":"More text"}]}}}]</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="everyone" onclick="toggleInfo(this)">
                                        <th>[everyone]</th>
                                        <td>This will perform the action for all online players instead of the event player
                                            only.
                                        </td>
                                    </tr>

                                    <tr id="everyone-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> COMBINED</span><br>
                                            <strong>Examples:</strong>
                                            <span>[msg][everyone]&a%player% joined the server!</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="center" onclick="toggleInfo(this);">
                                        <th>[center]</th>
                                        <td>This will send a json message to a player. Use a generator like this to create
                                            json messages.
                                        </td>
                                    </tr>
                                    <tr id="center-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> COMBINED</span><br>
                                            <strong>Examples:</strong>
                                            <span>[msg][center]&aThis is a centered message</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="language" onclick="toggleInfo(this)">
                                        <th>[language]</th>
                                        <td>This will only perform the action if the player has a certain Minecraft
                                            language/locale. You can find a list of Minecraft locales here. If the player
                                            does not have that locale, the action will be skipped for that player. This
                                            action works with [everyone]. Use [language=""] as base, then put the target
                                            locale between the double quotes.
                                        </td>
                                    </tr>

                                    <tr id="language-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> INNER</span><br>
                                            <strong>Examples:</strong>
                                            <span>[msg][everyone][language="en_us"]&aYour language is English (United States)</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="delay" onclick="toggleInfo(this);">
                                        <th>[delay]</th>
                                        <td>This will delay the action with the specified amount of ticks (1 sec = 20
                                            ticks). Use [delay=""] as base, then put the delay time, in ticks, between the
                                            double quotes.
                                        </td>
                                    </tr>
                                    <tr id="delay-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> INNER</span><br>
                                            <strong>Examples:</strong>
                                            <span>[msg][delay="100"]&7This message is 5 seconds delayed.</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="connect" onclick="toggleInfo(this)">
                                        <th>[connect]</th>
                                        <td>This will connect the player to another server. This can only be used on a
                                            bungeeCord server and the specified server must be connected to it. The names of
                                            the server are the same as the ones in the config.yml on your bungee host.
                                        </td>
                                    </tr>
                                    <tr id="connect-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Examples:</strong>
                                            <span>[connect]pvp</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="money" onclick="toggleInfo(this);">
                                        <th>[money]</th>
                                        <td>This will deposit/withdraw money to/from a player's balance. Vault must be
                                            installed in order to use this.
                                        </td>
                                    </tr>
                                    <tr id="money-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Examples:</strong>
                                            <br>
                                            <span>[money]10<br>[money]-10<br>[money]+10</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="menu" onclick="toggleInfo(this)">
                                        <th>[menu]</th>
                                        <td>This will open a custom menu. Just add the menu name (without .yml) after it.
                                        </td>
                                    </tr>
                                    <tr id="menu-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Examples:</strong>
                                            <span>[menu]example</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="close" onclick="toggleInfo(this);">
                                        <th>[close]</th>
                                        <td>This will close the player's inventory. Do not use this after you specified the
                                            [menu] action. The menu will not open then.
                                        </td>
                                    </tr>
                                    <tr id="close-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> STANDALONE</span><br>
                                            <strong>Examples:</strong>
                                            <span>[close]</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="permission" onclick="toggleInfo(this)">
                                        <th>[permission]</th>
                                        <td>This checks if the player has the specified permission and discontinues the
                                            action if the player doesn't have it.
                                        </td>
                                    </tr>
                                    <tr id="permission-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> INNER</span><br>
                                            <strong>Examples:</strong>
                                            <span>[permission=myperm][msg]&aYou have the specified permission</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="vgroup" onclick="toggleInfo(this);">
                                        <th>[vgroup]</th>
                                        <td>This checks if the player is a member of the specified group. Vault is required
                                            in order to use this action. Also, a permission plugin is needed which should be
                                            supported by Vault.
                                        </td>
                                    </tr>
                                    <tr id="vgroup-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> INNER</span><br>
                                            <strong>Aliases:</strong>
                                            <span>[vaultgroup]</span>
                                            <br>
                                            <strong>Examples:</strong>
                                            <span>[msg][vgroup="donator"]&dYou are a donator</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="chance" onclick="toggleInfo(this)">
                                        <th>[chance]</th>
                                        <td>This adds chances to the action. This should be a percentual amount between
                                            0-100. If you set it to 50, there will be 50% chance for the action to be
                                            performed.
                                        </td>
                                    </tr>
                                    <tr id="chance-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> INNER</span><br>
                                            <strong>Examples:</strong>
                                            <span>[msg][chance=50]&aThere is 50% chance of getting this message</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="sound" onclick="toggleInfo(this);">
                                        <th>[sound]</th>
                                        <td>This plays a sound for a player. Make sure to play sounds matching your server
                                            version.
                                        </td>
                                    </tr>
                                    <tr id="sound-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Examples:</strong>
                                            <span>[sound]NOTE_PLING</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="customitem" onclick="toggleInfo(this)">
                                        <th>[customitem]</th>
                                        <td>Give a custom Additions item to a player.
                                        </td>
                                    </tr>
                                    <tr id="customitem-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Aliases:</strong>
                                            <span>[citem]</span>
                                            <br>
                                            <strong>Examples:</strong>
                                            <span>[customitem]myFirstItem</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="book" onclick="toggleInfo(this);">
                                        <th>[book]</th>
                                        <td>Give a custom book to a player
                                        </td>
                                    </tr>
                                    <tr id="book-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Examples:</strong>
                                            <span>[book]myBook</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="safelanding" onclick="toggleInfo(this)">
                                        <th>[safelanding]</th>
                                        <td>This teleports a player to the highest location at their x,z coordinates.
                                        </td>
                                    </tr>
                                    <tr id="safelanding-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> STANDALONE</span><br>
                                            <strong>Examples:</strong>
                                            <span>[safelanding]</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="kick" onclick="toggleInfo(this);">
                                        <th>[kick]</th>
                                        <td>Kick a player from the server
                                        </td>
                                    </tr>
                                    <tr id="kick-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Examples:</strong>
                                            <span>[kick]&c&lU got kicked suckaa!</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="teleport" onclick="toggleInfo(this)">
                                        <th>[teleport]</th>
                                        <td>Teleports a player to the specified location
                                        </td>
                                    </tr>
                                    <tr id="teleport-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Examples:</strong>
                                            <br>
                                            <span>[teleport]player<br>
                                        [teleport]x y z<br>
                                        [teleport]World x y z<br>
                                        [teleport]x y z pitch yaw<br>
                                        [teleport]World x y z pitch yaw</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="fly" onclick="toggleInfo(this);">
                                        <th>[fly]</th>
                                        <td>Toggle/set the flight of a player
                                        </td>
                                    </tr>
                                    <tr id="fly-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Examples:</strong><br>
                                            <span>[fly]true<br>
                                        [fly]</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="allowfly" onclick="toggleInfo(this)">
                                        <th>[allowfly]</th>
                                        <td>Toggles the flying allowance of a player
                                        </td>
                                    </tr>
                                    <tr id="allowfly-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Examples:</strong><br>
                                            <span>[allowfly]true<br>
                                        [allowfly]</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="food" onclick="toggleInfo(this);">
                                        <th>[food]</th>
                                        <td>Sets the foodbar of a player
                                        </td>
                                    </tr>
                                    <tr id="food-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Examples:</strong>
                                            <span>[food]20</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="health" onclick="toggleInfo(this)">
                                        <th>[health]</th>
                                        <td>Sets the health of a player
                                        </td>
                                    </tr>
                                    <tr id="health-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Examples:</strong>
                                            <span>[health]20</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="kill" onclick="toggleInfo(this);">
                                        <th>[kill]</th>
                                        <td>Kills a player
                                        </td>
                                    </tr>
                                    <tr id="kill-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> STANDALONE</span><br>
                                            <strong>Examples:</strong>
                                            <span>[kill]</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="clear" onclick="toggleInfo(this)">
                                        <th>[clear]</th>
                                        <td>Clears the inventory of a player
                                        </td>
                                    </tr>
                                    <tr id="clear-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> STANDALONE</span><br>
                                            <strong>Examples:</strong>
                                            <span>[clear]</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="clearchat" onclick="toggleInfo(this);">
                                        <th>[clearchat]</th>
                                        <td>Clears the chat of a player. (Actually just spams the chat with empty messages)
                                        </td>
                                    </tr>
                                    <tr id="clearchat-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> STANDALONE</span><br>
                                            <strong>Examples:</strong>
                                            <span>[clearchat]</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="weather" onclick="toggleInfo(this)">
                                        <th>[weather]</th>
                                        <td>Sets the weather (of a world). Weather types are: SUN, RAIN and STORM.
                                        </td>
                                    </tr>
                                    <tr id="clear-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Examples:</strong><br>
                                            <span>[weather]SUN<br>
                                        [weather]World STORM</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="playerweather"
                                        onclick="toggleInfo(this);">
                                        <th>[playerweather]</th>
                                        <td>Sets the player's personal weather. Weather types are: SUN, RAIN and RESET.</td>
                                    </tr>
                                    <tr id="playerweather-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Aliases:</strong>
                                            <span>[pweather]</span>
                                            <br>
                                            <strong>Examples:</strong>
                                            <span>[playerweather]RESET</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="time" onclick="toggleInfo(this)">
                                        <th>[time]</th>
                                        <td> Sets the time (of a world). Time type could either be DAY, NIGHT or some
                                            specific integer.
                                        </td>
                                    </tr>
                                    <tr id="time-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Examples:</strong><br>
                                            <span>[time]DAY<br>
                                        [time]300</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="playertime"
                                        onclick="toggleInfo(this);">
                                        <th>[playertime]</th>
                                        <td>Sets the player's personal time. Time type could either be DAY, NIGHT, RESET or
                                            some specific integer.
                                        </td>
                                    </tr>
                                    <tr id="playertime-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Aliases:</strong>
                                            <span>[ptime]</span>
                                            <br>
                                            <strong>Examples:</strong>
                                            <span>[playertime]RESET</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="gamemode" onclick="toggleInfo(this)">
                                        <th>[gamemode]</th>
                                        <td>Sets the gamemode of the player. Gamemode can either be SURVIVAL, ADVENTURE,
                                            CREATIVE or SPECTATOR. Version 1.1.0 also supports the numbers 0, 1, 2 and 3.
                                        </td>
                                    </tr>
                                    <tr id="gamemode-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Examples:</strong><br>
                                            <span>[gamemode]CREATIVE<br>
                                        [gamemode]1</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="flyspeed"
                                        onclick="toggleInfo(this);">
                                        <th>[flyspeed]</th>
                                        <td>Sets the flying speed of the player. This should be an integer between 0 and 1!
                                            Do not use ints greater than 1.
                                        </td>
                                    </tr>
                                    <tr id="flyspeed-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Aliases:</strong>
                                            <span>[fspeed]</span>
                                            <br>
                                            <strong>Examples:</strong>
                                            <span>[flyspeed]0.5</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="walkspeed"
                                        onclick="toggleInfo(this);">
                                        <th>[flyspeed]</th>
                                        <td>Sets the walking speed of the player. This should be an integer between 0 and 1!
                                            Do not use ints greater than 1.
                                        </td>
                                    </tr>
                                    <tr id="walkspeed-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Aliases:</strong>
                                            <span>[wspeed]</span>
                                            <br>
                                            <strong>Examples:</strong>
                                            <span>[walkspeed]0.5</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="speed"
                                        onclick="toggleInfo(this);">
                                        <th>[speed]</th>
                                        <td>Sets the walking/flying speed of a player. Depends whether a player is flying or
                                            not. This should be an integer between 0 and 1! Do not use ints greater than 1.
                                        </td>
                                    </tr>
                                    <tr id="speed-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Examples:</strong>
                                            <span>[speed]0.3</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="chat" onclick="toggleInfo(this);">
                                        <th>[chat]</th>
                                        <td>Sends a chat message as the player
                                        </td>
                                    </tr>
                                    <tr id="chat-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Examples:</strong>
                                            <span>[chat]I am saying something :)</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="target" onclick="toggleInfo(this);">
                                        <th>[target]</th>
                                        <td>This sets the action target to the specified player(s). The action will then not
                                            be performed for the 'main' player. If you want multiple players, split them by
                                            adding a , between the names/placeholders. No spaces. This especially can be
                                            used in combination with command arguments.
                                        </td>
                                    </tr>
                                    <tr id="target-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> INNER</span><br>
                                            <strong>Examples:</strong><br>
                                            <span>[target=%player%,LukasIsTheName][msg]&aYou are a target</span><br>
                                            <span>[target={arg1}][message]Tell him I said hi.</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="rng" onclick="toggleInfo(this);">
                                        <th>[randomnumbergenerator]</th>
                                        <td>This isn't a real action. This turns into a number you can specify. RNG stands
                                            for Random Number Generator. You can specify one or two numbers. And it will
                                            then pick a random number between them. If you only specify one, it will go from
                                            0 to your specified number. The / on the end of the tag is required!
                                        </td>
                                    </tr>
                                    <tr id="rng-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> INNER</span><br>
                                            <strong>Aliases:</strong>
                                            <span>[rng]</span>
                                            <br>
                                            <strong>Examples:</strong>
                                            <span>[msg]This is a number between 10 and 100: [rng=10,100]</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="math" onclick="toggleInfo(this);">
                                        <th>[math]</th>
                                        <td>This calculates everything between the opening and closing math tag. The opening
                                            tag is [math] and the closing tag is [/math]. So the math tags will be turned
                                            into the solution.
                                        </td>
                                    </tr>
                                    <tr id="math-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> OUTER</span><br>
                                            <strong>Examples:</strong>
                                            <span>[msg]Solution 1*3+7-4 = &a[math]1 * 3 + 7 - 4[/math]</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="price" onclick="toggleInfo(this);">
                                        <th>[price]</th>
                                        <td>This checks if the player has the specified amount of money. Requires Vault.
                                            This does not withdraw any money from the player's account!
                                        </td>
                                    </tr>
                                    <tr id="price-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> INNER</span><br>
                                            <strong>Examples:</strong>
                                            <span>[price=100][msg]&7You got a minimum of $100</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="targetworld" onclick="toggleInfo(this);">
                                        <th>[targetworld]</th>
                                        <td>This sets the action target to the player(s) in the specified world(s). The
                                            action will then not be performed for the 'main' player. If you want multiple
                                            players, split them by adding a , between the world names/placeholders. No
                                            spaces.
                                        </td>
                                    </tr>
                                    <tr id="targetworld-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> INNER</span><br>
                                            <strong>Examples:</strong>
                                            <span>[targetworld=%world%][msg]&aSome message for this world</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="resourcepack" onclick="toggleInfo(this);">
                                        <th>[resourcepack]</th>
                                        <td>This will send a resource pack installation request to the player. You need to
                                            specify a link.
                                        </td>
                                    </tr>
                                    <tr id="resourcepack-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Examples:</strong>
                                            <span>[resourcepack]https://mylink.com/resourcepack</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="nopermission"
                                        onclick="toggleInfo(this);">
                                        <th>[nopermission]</th>
                                        <td>This will check if the player does not have a certain permission.
                                        </td>
                                    </tr>
                                    <tr id="nopermission-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> INNER</span><br>
                                            <strong>Examples:</strong>
                                            <span>[nopermission=admin.perm][msg]&cYou are not allowed to do this</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="novaultgroup" onclick="toggleInfo(this);">
                                        <th>[novaultgroup]</th>
                                        <td>This will check if the player is not in a certain vault group.
                                        </td>
                                    </tr>
                                    <tr id="novaultgroup-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> INNER</span><br>
                                            <strong>Examples:</strong>
                                            <span>[novaultgroup=admin][msg]&cYou are not allowed to do this</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="isconsole" onclick="toggleInfo(this);">
                                        <th>[isconsole]</th>
                                        <td>This will check if the sender is the console. Useful for commands that are
                                            compatible with console and players.
                                        </td>
                                    </tr>
                                    <tr id="isconsole-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> COMBINED</span><br>
                                            <strong>Examples:</strong>
                                            <span>[isconsole][msg]&cYou are the console</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="isplayer" onclick="toggleInfo(this);">
                                        <th>[isplayer]</th>
                                        <td>This will check if the sender is a player. Useful for commands that are
                                            compatible with console and players.
                                        </td>
                                    </tr>
                                    <tr id="isplayer-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> COMBINED</span><br>
                                            <strong>Examples:</strong>
                                            <span>[isplayer][msg]&cYou are a player</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="world" onclick="toggleInfo(this);">
                                        <th>[world]</th>
                                        <td>This will check if the current world is equal to something.
                                        </td>
                                    </tr>
                                    <tr id="world-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> INNER</span><br>
                                            <strong>Examples:</strong>
                                            <span>[world=myworldname][msg]You are in the world &bmyworldname</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="return" onclick="toggleInfo(this);">
                                        <th>[return]</th>
                                        <td>You can use this action to stop the plugin from executing further actions in the
                                            list. You can just put this in any action, doesn't have to be in one by itself.
                                            You can use this e.g. to do different things when players have
                                            different permissions.
                                        </td>
                                    </tr>
                                    <tr id="return-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> COMBINED</span><br>
                                            <strong>Examples:</strong><br>
                                            <span>[permission=rank.mpv][msg]Hi there you are an MVP<br>
                                        [permission=rank.staff][msg]&cYou are a staff member[return]<br>
                                        [msg]&cYou are a normal player</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="if" onclick="toggleInfo(this);">
                                        <th>[if]</th>
                                        <td>This feature executes a custom Javascript code and uses the value as return.
                                            So make sure that when you're using this, the return object of the code is always a boolean (true/false)!
                                            If you are using placeholders in your javascript code, make sure to put them between double quotes, because
                                            otherwise
                                            the plugin will think that it's a variable.
                                        </td>
                                    </tr>
                                    <tr id="if-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> INNER</span><br>
                                            <strong>Examples:</strong>
                                            <span>[if="{arg1}" === "yeet");][msg]You said yeet</span><br>
                                            <span>[if="%player%".startsWith("a");][msg]Your username starts with an a</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="placeholders" onclick="toggleInfo(this);">
                                        <th>[placeholders]</th>
                                        <td>You can use this to use other online players' placeholders in an action.
                                        </td>
                                    </tr>
                                    <tr id="placeholders-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> INNER</span><br>
                                            <strong>Examples:</strong>
                                            <span>[placeholders={arg1}][msg]{arg1}'s UUID is: %uuid%</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="discord" onclick="toggleInfo(this);">
                                        <th>[discord]</th>
                                        <td>This tag can be used to send custom messages to a custom discord webhook in your Discord server.
                                            The discord hook has to be enabled and configured in the config.yml to make it work!
                                        </td>
                                    </tr>
                                    <tr id="discord-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Examples:</strong>
                                            <span>[discord]This is a message sent from minecraft using AdditionsPlus</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="http-request" onclick="toggleInfo(this);">
                                        <th>[httprequest]</th>
                                        <td>This tag can be used to send HTTP Requests to a website. This could be useful for API usages.
                                        </td>
                                    </tr>
                                    <tr id="http-request-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Examples:</strong>
                                            <span>[httprequest]https://example.com/my-api.php?online-players=%sever_online%</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="operator" onclick="toggleInfo(this);">
                                        <th>[operator]</th>
                                        <td>This tag will perform a command as the player as if they were an operator, without needing any additional
                                            permissions.
                                        </td>
                                    </tr>
                                    <tr id="operator-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Aliases:</strong>
                                            <span>[op]</span><br>
                                            <strong>Examples:</strong>
                                            <span>[operator]essentials:fly</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="renameitem" onclick="toggleInfo(this);">
                                        <th>[renameitem]</th>
                                        <td>This tag renames any item in the player's hand with the given value.
                                        </td>
                                    </tr>
                                    <tr id="renameitem-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Examples:</strong>
                                            <span>[renameitem]&bMy Cool Item</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="holdsitem" onclick="toggleInfo(this);">
                                        <th>[holdsitem]</th>
                                        <td>This tag will require a player to hold any/a specific item. Leave the tag arguments empty for any item, or specify
                                            the material name or custom item id in the tag arguments.
                                        </td>
                                    </tr>
                                    <tr id="holdsitem-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> INNER</span><br>
                                            <strong>Examples:</strong><br>
                                            <span>[holdsitem][message]&aYou are holding an item!</span><br>
                                            <span>[holdsitem=STICK][message]&aYou are holding a stick!</span><br>
                                            <span>[holdsitem=ci-diamond][message]&aYou are holding the custom diamond from Additions!</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="experience" onclick="toggleInfo(this);">
                                        <th>[experience]</th>
                                        <td>This tag adds/removes/sets experience of a player. Use the prefix '+' to add experience, use '-' to remove, and use
                                            just the number to set the experience.
                                        </td>
                                    </tr>
                                    <tr id="experience-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Aliases:</strong><br>
                                            <span>[exp]</span><br>
                                            <span>[xp]</span><br>
                                            <strong>Examples:</strong><br>
                                            <span>[experience]+20 # adds 20 exp to the user's total.</span><br>
                                            <span>[experience]-20 # removes 20 exp from the user's total.</span><br>
                                            <span>[experience]20 # sets the user's total exp to 20.</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="levels" onclick="toggleInfo(this);">
                                        <th>[levels]</th>
                                        <td>This tag adds/removes/sets levels of a player. Use the prefix '+' to add levels, use '-' to remove, and use just the
                                            number to set the level.
                                        </td>
                                    </tr>
                                    <tr id="levels-popup" class="gray-background" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> NORMAL</span><br>
                                            <strong>Aliases:</strong><br>
                                            <span>[level]</span><br>
                                            <span>[lvl]</span><br>
                                            <strong>Examples:</strong><br>
                                            <span>[levels]+5 # adds 5 exp levels to the user's total.</span><br>
                                            <span>[levels]-5 # removes 5 exp levels from the user's total.</span><br>
                                            <span>[levels]5 # sets the user's exp level to 5.</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row" id="hasexperience" onclick="toggleInfo(this);">
                                        <th>[hasexperience]</th>
                                        <td>This tag checks if a player has a certain number of experience. This number must be an integer (no decimals), and
                                            positive.
                                        </td>
                                    </tr>
                                    <tr id="hasexperience-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> INNER</span><br>
                                            <strong>Aliases:</strong><br>
                                            <span>[hasexp]</span><br>
                                            <span>[hasxp]</span><br>
                                            <strong>Examples:</strong><br>
                                            <span>[hasexperience=20][msg]You have at least 20 EXP!</span>
                                        </td>
                                    </tr>

                                    <tr class="cz-d-table-row gray-background" id="haslevels" onclick="toggleInfo(this);">
                                        <th>[haslevels]</th>
                                        <td>This tag checks if a player has a certain number of experience. This number must be an integer (no decimals), and
                                            positive.
                                        </td>
                                    </tr>
                                    <tr id="haslevels-popup" style="display:none">
                                        <td style="padding-top:0" colspan="2">
                                            <strong>Type:</strong><span> INNER</span><br>
                                            <strong>Aliases:</strong><br>
                                            <span>[haslevel]</span><br>
                                            <span>[haslvl]</span><br>
                                            <strong>Examples:</strong><br>
                                            <span>[haslevels=5][msg]You are at least level 5!</span>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
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
