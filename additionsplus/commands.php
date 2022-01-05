<?php
require '/var/www/html/inc/HeaderBuilder.php';

use inc\HeaderBuilder;

$header = new HeaderBuilder("AdditionsPlus", "additionsplus/commands");
$header->subtitle("Commands & Permissions")
    ->displayFeaturedPlugin(false)
    ->metaDescription("A list of all commands that the AdditionsPlus plugin has, including their permissions and usage. Expand your server with Additions!")
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


                        <div id="primary" class="cz-col-12 actionListHolder">
                            <div class="primary-sub-wrapper">
                                <div>
                                    <h3 class="entry-title">
                                        AdditionsPlus <span class="green">General Permissions</span>
                                    </h3>
                                </div>
                                <div class="entry-content">
                                    <table class="cz-d-table break-all">
                                        <thead>
                                        <tr class="cz-d-table-row">
                                            <th class="cz-d-table-cell">Permission</th>
                                            <th class="cz-d-table-cell">Description</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td>additions.createsigns</td>
                                            <td>Ability to create custom additions signs</td>
                                        </tr>
                                        <tr>
                                            <td>additions.removesigns</td>
                                            <td>Ability to remove custom additions signs</td>
                                        </tr>
                                        <tr>
                                            <td>additions.colorsigns</td>
                                            <td>Ability to use color codes (&) on signs</td>
                                        </tr>
                                        <tr>
                                            <td>additions.coloranvils</td>
                                            <td>Ability to use color codes (&) in anvils</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="primary" class="cz-col-12 actionListHolder">
                            <div class="primary-sub-wrapper">
                                <div>
                                    <h3 class="entry-title">
                                        AdditionsPlus <span class="green">Commands</span> & <span class="green">Perms</span>
                                    </h3>
                                </div>
                                <div class="entry-content">
                                    <table class="cz-d-table break-all">
                                        <thead>
                                        <tr class="cz-d-table-row">
                                            <th>Command</th>
                                            <th>Description</th>
                                            <th>Permission</th>
                                        </tr>
                                        </thead>


                                        <tr class="cz-d-table-row cursor-pointer" onclick="toggleGroup('mainCommand');">
                                            <th colspan="3">Main Command (/additions)</th>
                                        </tr>
                                        <tbody id="mainCommand">
                                        <tr class="cz-d-table-row">
                                            <td>/additions</td>
                                            <td>Main command</td>
                                            <td>additions.command</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/additions togglescoreboard</td>
                                            <td>Toggle the player scoreboard</td>
                                            <td>additions.command.togglescoreboard</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/additions menus</td>
                                            <td>List of registered menus</td>
                                            <td>additions.command.menus</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/additions books</td>
                                            <td>List of registered books</td>
                                            <td>additions.command.books</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/additions commands</td>
                                            <td>List of registered commands</td>
                                            <td>additions.command.commands</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/additions items</td>
                                            <td>List of registered items</td>
                                            <td>additions.command.items</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/additions reload</td>
                                            <td>Reload the plugin files</td>
                                            <td>additions.command.reload</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/additions giveitem &lt;item> [player]</td>
                                            <td>Give an item to yourself/a player</td>
                                            <td>additions.command.giveitem</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/additions givebook &lt;book> [player]</td>
                                            <td>Give a book to yourself/a player</td>
                                            <td>additions.command.givebook</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/additions openmenu &lt;menu> [player]</td>
                                            <td>Open a menu for a player</td>
                                            <td>additions.command.openmenu</td>
                                        </tr>
                                        </tbody>

                                        <tr class="cz-d-table-row cursor-pointer" onclick="toggleGroup('customItemCommand')">
                                            <th colspan="3">Custom Item (/customitem)</th>
                                        </tr>
                                        <tbody id="customItemCommand">
                                        <tr class="cz-d-table-row">
                                            <td>/customitem</td>
                                            <td>Get a list of custom item commands</td>
                                            <td>additions.command</td>
                                        </tr>

                                        <tr class="cz-d-table-row">
                                            <td>/customitem create &lt;name></td>
                                            <td>Create a new custom item</td>
                                            <td>additions.command.customitem</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/customitem remove &lt;item></td>
                                            <td>Remove a custom item</td>
                                            <td>additions.command.customitem</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/customitem info &lt;item></td>
                                            <td>Get all info of a custom item</td>
                                            <td>additions.command.customitem</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/customitem setamount &lt;item> &lt;amount></td>
                                            <td>Set the material amount of an item</td>
                                            <td>additions.command.customitem</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/customitem setdisplayname &lt;item> &lt;display></td>
                                            <td>Set the display name of an item</td>
                                            <td>additions.command.customitem</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/customitem setslot &lt;item> &lt;slot></td>
                                            <td>Set the appearing inventory slot of an item</td>
                                            <td>additions.command.customitem</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/customitem setcooldown &lt;item> &lt;cooldown></td>
                                            <td>Set the cooldown of an item in ticks (20 ticks = 1 second)</td>
                                            <td>additions.command.customitem</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/customitem setcooldownMessage &lt;item> &lt;message></td>
                                            <td>Set the message to be displayed when an item is on cooldown</td>
                                            <td>additions.command.customitem</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/customitem setpermission &lt;item> &lt;permission></td>
                                            <td>Set the permission node of an item</td>
                                            <td>additions.command.customitem</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/customitem setNoPermission &lt;item> &lt;message></td>
                                            <td>Set the no permission message of an item</td>
                                            <td>additions.command.customitem</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/customitem actions &lt;item></td>
                                            <td>Get a list of current action of an item</td>
                                            <td>additions.command.customitem</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/customitem addaction &lt;item> &lt;action></td>
                                            <td>Add a new action string to the item</td>
                                            <td>additions.command.customitem</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/customitem removeaction &lt;item> &lt;number></td>
                                            <td>Remove an action string from the item</td>
                                            <td>additions.command.customitem</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/customitem lore &lt;item></td>
                                            <td>Get a list of lore lines of an item</td>
                                            <td>additions.command.customitem</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/customitem addlore &lt;item> &lt;lore></td>
                                            <td>Add a new lore line to the item lore</td>
                                            <td>additions.command.customitem</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/customitem removelore &lt;item> &lt;number></td>
                                            <td>Remove a lore line from the item lore</td>
                                            <td>additions.command.customitem</td>
                                        </tr>

                                        </tbody>

                                        <tr class="cz-d-table-row cursor-pointer" onclick="toggleGroup('customCommandCommand')">
                                            <th colspan="3">Custom Command (/customcommand)</th>
                                        </tr>

                                        <tbody id="customCommandCommand">
                                        <tr class="cz-d-table-row cz-table-warning">
                                            <td colspan="3">It is possible to create a command with multiple arguments (containing spaces). If you want to
                                                edit a command with multiple arguments, put where the argument &lt;name> as displayed below between double
                                                quotation marks (").<br>
                                                Example: <i>/cc addaction "help party" [message]&dParty help:</i></td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/customcommand list</td>
                                            <td>Get a list of custom commands</td>
                                            <td>additions.command.commands</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/customcommand create &lt;name></td>
                                            <td>Create a new custom command</td>
                                            <td>additions.command.commands</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/customcommand remove &lt;name></td>
                                            <td>Remove an existing custom command</td>
                                            <td>additions.command.commands</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/customcommand addaction &lt;name> &lt;action></td>
                                            <td>Add a new action to the custom command</td>
                                            <td>additions.command.commands</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/customcommand removeaction &lt;name> &lt;number></td>
                                            <td>Remove a number from the custom command actions</td>
                                            <td>additions.command.commands</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/customcommand actions &lt;name></td>
                                            <td>Get a list of custom command actions</td>
                                            <td>additions.command.commands</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/customcommand setpermission &lt;name> &lt;permission></td>
                                            <td>Set the permission node of a custom command</td>
                                            <td>additions.command.commands</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/customcommand setNoPermission &lt;name> &lt;message></td>
                                            <td>Set the no permission message of a custom command</td>
                                            <td>additions.command.commands</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/customcommand setcooldown &lt;name> &lt;cooldown></td>
                                            <td>Set the cooldown of a custom command in ticks (20 ticks = 1 second)</td>
                                            <td>additions.command.commands</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/customcommand setcooldownMessage &lt;name> &lt;message></td>
                                            <td>Set the message to be displayed when a command is on cooldown</td>
                                            <td>additions.command.commands</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/customcommand setregistered &lt;name> &lt;true/false></td>
                                            <td>Set whether or not the command should be registered to bukkit</td>
                                            <td>additions.command.commands</td>
                                        </tr>
                                        </tbody>

                                        <tr class="cz-d-table-row cursor-pointer" onclick="toggleGroup('customMenuCommand')">
                                            <th colspan="3">Custom Menu (/custommenu)</th>
                                        </tr>

                                        <tbody id="customMenuCommand">
                                        <tr class="cz-d-table-row">
                                            <td>/custommenu</td>
                                            <td>Get a list of custom menu commands</td>
                                            <td>additions.command</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/custommenu create</td>
                                            <td>Create a new custom menu. This will open the menu editor. If you already editing a menu, this will resume the
                                                one you're creating
                                            </td>
                                            <td>additions.command.custommenu</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/custommenu discard</td>
                                            <td>Discard the menu you're currently creating. This cannot be undone, so be careful!</td>
                                            <td>additions.command.custommenu</td>
                                        </tr>
                                        <tr class="cz-d-table-row">
                                            <td>/custommenu save &lt;name></td>
                                            <td>Save the menu you're currently creating/editing. This will save the changes to the file (somename.yml)</td>
                                            <td>additions.command.custommenu</td>
                                        </tr>
                                        </tbody>


                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function toggleGroup(css) {
            const el = document.getElementById(css);
            if (el.style.display !== "none") {
                el.style.display = "none";
            } else {
                el.style.display = "table-row-group";
            }
        }
    </script>

</main>

<?php
include_once "../inc/footer.php";
?>
