<?php
require '/var/www/html/inc/HeaderBuilder.php';

use inc\HeaderBuilder;

$header = new HeaderBuilder("Pricing", "pricing");
$header->displayFeaturedPlugin(false)
    ->metaDescription("Pricing for custom plugins. See what you pay for instantly with the customizable service selector.")
    ->addCustomCSS("./inc/css/pricing.css?v=1.6.1")
    ->build();

$fromTicket = isset($_GET['id']) && isset($_GET['token']) && isset($_GET['ticket_id']);
$justUpdated = false;

$tierNumbers = [
    1 => "budget",
    2 => "premium",
    3 => "pro"
];

$selectedType = "1";
$selectedTesting = "2";
$selectedMI = "1";
$selectedCommands = "1";
$selectedVersion = "1";
$allowPublication = false;
$updated = false;
$discordChannel = "";

$pageTitle = "Let's set up your budget!";

if ($fromTicket) {
    include_once "/var/www/secret-files/config.php";

    $exists = getSQLResults($link, "SELECT p.*, t.discord_channel_id FROM plugin_request_pricing AS p LEFT JOIN plugin_request_ticket AS t ON p.ticket = t.id WHERE p.id = ? AND p.token = ? AND p.ticket = ?", "ssi", $_GET['id'], $_GET['token'], $_GET['ticket_id']);
    if ($exists === false) {
        $fromTicket = false;
    } else {
        $split = str_split($exists['selections']);
        if (sizeof($split) >= 4) {
            $selectedType = $split[0];
            $selectedTesting = $split[1];
            $selectedMI = $split[2];
            $selectedCommands = $split[3];
            $selectedVersion = $split[4];
        }
        $allowPublication = $exists['allow_publication'] == 1;
        $updated = $exists['updated'];
        $discordChannel = $exists['discord_channel_id'];
    }

    if ($fromTicket && isset($_POST['type']) && isset($_POST['testing']) && isset($_POST['messages']) && isset($_POST['commands'])
        && isset($_POST['versions']) && isset($_POST['allow_publication'])) {
        $computed = $_POST['type'] . $_POST['testing'] . $_POST['messages'] . $_POST['commands'] . $_POST['versions'];
        $res = getSQLResults($link, "UPDATE plugin_request_pricing SET selections = ?, allow_publication = ?, updated = TRUE WHERE id = ? AND token = ? AND ticket = ?", "sissi",
            $computed,
            $_POST['allow_publication'], $_GET['id'], $_GET['token'], $_GET['ticket_id']);
        $justUpdated = true;
        $updated = true;

        $selectedType = $_POST['type'];
        $selectedTesting = $_POST['testing'];
        $selectedMI = $_POST['messages'];
        $selectedCommands = $_POST['commands'];
        $selectedVersion = $_POST['versions'];
        $allowPublication = $_POST['allow_publication'] == "true";

        $json_data = json_encode(array(
            "id" => $_GET['id'],
            "token" => $_GET['token'],
            "ticket_id" => $_GET['ticket_id'],
            "type" => $tierNumbers[$selectedType],
            "testing" => $tierNumbers[$selectedTesting],
            "messages" => $tierNumbers[$selectedMI],
            "commands" => $tierNumbers[$selectedCommands],
            "versions" => $tierNumbers[$selectedVersion],
            "allow_publication" => $allowPublication,
            "computed_selection" => $computed,
            "discord_channel_id" => $discordChannel
        ));

        $ch = curl_init("http://localhost:3001/ticketPricingUpdate/" . $_GET['id'] . "/" . $_GET['ticket_id']);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json', 'Auth: JRjd}bt7vL9(=`#_]qXhn~>[$/NJcg"D7!`Hcde{PQ4Zkd@(8%r;K+xZmSfCntp'));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_exec($ch);
        curl_close($ch);
    }
    unset($_POST);
}

if ($updated) {
    $pageTitle = "Here's your final budget!";
}

?>

<main id="content" class="site-content" role="main">
    <section>
        <div class="content-container">
            <?php if ($fromTicket): ?>
                <h2 class="cz-mb-4 fs-larger"><?= $pageTitle ?></h2>
            <?php endif; ?>

            <?php if ($justUpdated): ?>
                <div class="cz-alert mb-4 cz-alert-success">
                    <div class="cz-alert-heading cz-font-weight-bold">
                        Budget submitted!
                    </div>
                    This pricing has successfully been submitted!<br>
                </div>

            <?php elseif ($updated): ?>
                <div class="cz-alert mb-4 cz-alert-danger">
                    <div class="cz-alert-heading cz-font-weight-bold">
                        Final pricing!
                    </div>
                    This pricing has already been submitted and can no longer be altered.<br>
                    <i>Any changes you make will not be saved.</i>
                </div>
            <?php endif; ?>

            <p class="desc mb-4 fs-m">
                The below form can be used to determine the hourly rate that you are expected to pay based on the features that you are expecting in a
                custom plugin.
                For each individual feature, you can select a plan type (budget, premium, or pro) by clicking on a description. The total price will update
                accordingly at the bottom of the page.<br>
                Regardless of the <i>additional</i> features you choose, there will always be a base hourly rate of 12 EUR. All budget features are included in
                this hourly rate.
            </p>

            <div class="row">
                <div class="col-12 col-md-3 plan-feat mb-4 mb-md-0">
                    <h2>Features</h2>
                    <hr class="push d-none d-md-block">
                </div>
                <div class="col-4 col-md-3 plan-feat cheap">
                    <h3 class="d-none d-md-block">budget</h3>
                    <h3 class="d-md-none" style="font-size: 15px">budget</h3>
                    <hr class="mt-2 mt-md-4">
                </div>
                <div class="col-4 col-md-3 plan-feat premium">
                    <h3 class="d-none d-md-block">premium</h3>
                    <h3 class="d-md-none" style="font-size: 15px">premium</h3>
                    <hr class="mt-2 mt-md-4">
                </div>
                <div class="col-4 col-md-3 plan-feat pro">
                    <h3 class="d-none d-md-block">pro</h3>
                    <h3 class="d-md-none" style="font-size: 15px">pro</h3>
                    <hr class="mt-2 mt-md-4">
                </div>
            </div>
            <div class="row plan-feat mt-2">
                <div class="col-12 col-md-3 mb-4 mb-md-0 flex">
                    <div>
                        <h4>Type</h4>
                        <p class="desc">The sort of plugin to develop.</p>
                    </div>
                    <hr class="d-none d-md-block">
                </div>
                <div class="col-4 col-md-3 cheap selectable <?= $selectedType === '1' ? 'selected' : '' ?>" aria-label="type" aria-valuetext="budget">
                    <p>Utility plugin.</p>
                </div>
                <div class="col-4 col-md-3 premium selectable <?= $selectedType === '2' ? 'selected' : '' ?>" aria-label="type" aria-valuetext="premium">
                    <p>Game plugin <u>without</u> BungeeCord support.</p>
                </div>
                <div class="col-4 col-md-3 pro selectable <?= $selectedType === '3' ? 'selected' : '' ?>" aria-label="type" aria-valuetext="pro">
                    <p>Game plugin <u>with</u> BungeeCord support.</p>
                </div>
            </div>

            <div class="row plan-feat mt-2">
                <div class="col-12 col-md-3 mb-4 mb-md-0 flex">
                    <div>
                        <h4>Testing</h4>
                        <p class="desc">The thoroughness of the testing.</p>
                    </div>
                    <hr class="d-none d-md-block">
                </div>
                <div class="col-4 col-md-3 cheap selectable <?= $selectedTesting === '1' ? 'selected' : '' ?>" aria-label="testing" aria-valuetext="budget">
                    <p>Rapid test before delivery.<br>Only tested on one version-specific testing environment. Just testing if everything works as expected.</p>
                </div>
                <div class="col-4 col-md-3 premium selectable <?= $selectedTesting === '2' ? 'selected' : '' ?>" aria-label="testing" aria-valuetext="premium">
                    <p>Quick system test after adding new functionalities.<br>Tested on 2-4 different environments and most functionalities will be tested
                        before delivery.</p>
                </div>
                <div class="col-4 col-md-3 pro selectable <?= $selectedTesting === '3' ? 'selected' : '' ?>" aria-label="testing" aria-valuetext="pro">
                    <p>Thorough smoke tests after adding new functionalities.<br>Tested on as many setups and configurations that we can, every feature will be
                        tested on each configuration.</p>
                </div>
            </div>
            <div class="row plan-feat">
                <div class="col-12 col-md-3 mb-4 mb-md-0 flex">
                    <div>
                        <h4>Messages & Items</h4>
                        <p class="desc">The customization rate of the messages and items.</p>
                    </div>
                    <hr class="d-none d-md-block">
                </div>
                <div class="col-4 col-md-3 cheap selectable <?= $selectedMI === '1' ? 'selected' : '' ?>" aria-label="messages" aria-valuetext="budget">
                    <p>Not customizable. All messages are predefined by the project owner and are hard-coded in.</p>
                </div>
                <div class="col-4 col-md-3 premium selectable <?= $selectedMI === '2' ? 'selected' : '' ?>" aria-label="messages" aria-valuetext="premium">
                    <p>Messages are customizable. Item data such as materials, amounts, and display names are hard-coded in.</p>
                </div>
                <div class="col-4 col-md-3 pro selectable <?= $selectedMI === '3' ? 'selected' : '' ?>" aria-label="messages" aria-valuetext="pro">
                    <p>All messages and items are customizable.</p>
                </div>
            </div>
            <div class="row plan-feat">
                <div class="col-12 col-md-3 mb-4 mb-md-0 flex">
                    <div>
                        <h4>Commands</h4>
                        <p class="desc">The functionalities of the commands.</p>
                    </div>
                    <hr class="d-none d-md-block">
                </div>
                <div class="col-4 col-md-3 cheap selectable <?= $selectedCommands === '1' ? 'selected' : '' ?>" aria-label="commands" aria-valuetext="budget">
                    <p>Regular commands to execute tasks.</p>
                </div>
                <div class="col-4 col-md-3 premium selectable <?= $selectedCommands === '2' ? 'selected' : '' ?>" aria-label="commands"
                     aria-valuetext="premium">
                    <p>Regular commands to execute tasks, with auto-completion for subcommands and their values.</p>
                </div>
                <div class="col-4 col-md-3 pro selectable <?= $selectedCommands === '3' ? 'selected' : '' ?>" aria-label="commands" aria-valuetext="pro">
                    <p>Config commands to change certain configuration options.</p>
                </div>
            </div>
            <div class="row plan-feat">
                <div class="col-12 col-md-3 mb-4 mb-md-0 flex">
                    <div>
                        <h4>Version Support</h4>
                        <p class="desc">How good this plugin should function in different environments.</p>
                    </div>
                    <hr class="d-none d-md-block">
                </div>
                <div class="col-4 col-md-3 cheap selectable <?= $selectedVersion === '1' ? 'selected' : '' ?>" aria-label="versions" aria-valuetext="budget">
                    <p>Written for one specific Minecraft version. Other versions are unsupported if NMS is required.</p>
                </div>
                <div class="col-4 col-md-3 premium selectable <?= $selectedVersion === '2' ? 'selected' : '' ?>" aria-label="versions" aria-valuetext="premium">
                    <p>The ability to run on 1.12- and 1.13+ environments. Only one NMS version supported if required.</p>
                </div>
                <div class="col-4 col-md-3 pro selectable <?= $selectedVersion === '3' ? 'selected' : '' ?>" aria-label="versions" aria-valuetext="pro">
                    <p>The ability to run on a maximum of 4 (flagship) Minecraft versions, with full NMS supported if required.</p>
                </div>
            </div>

            <div class="row plan-feat pd-dc-c">
                <div class="col-12 col-md-3 mb-md-0 flex pd-dc-h">
                    <div>
                        <h4>Publication Discount</h4>
                        <p class="desc">Get a discount on your total price if you let us publish your plugin to the public.</p>
                    </div>
                </div>
                <div class="row col-12 col-md-9 selectable des">
                    <p>
                        In exchange for a 15 EUR discount, I authorize GCNT to publish this plugin as a premium resource one month after the first version was
                        made available to me.*
                        <span class="price">&euro;15 DISCOUNT</span>
                    </p>
                    <div class="select" id="allow_publication">
                        <div class="select-img"></div>
                        <span class="select-val">Publication not allowed</span>
                    </div>
                </div>
            </div>


            <div class="row plan-feat">
                <div class="col-12 col-md-3 mb-4 mb-md-0 flex">
                    <div>
                        <h4 style="font-size: 18px;font-weight: 800">Total price:</h4>
                    </div>
                </div>
                <div class="col-12 col-md-9 selectable des" id="price">
                    <p class="desc" style="font-size: 18px;font-weight: 800">&euro;12 / hour + &euro;7,50</p>
                    <p class="desc">
                        All budget features are included in the hourly rate.
                        <br>
                        <i>Switching to different feature plans is not possible after the initial payment. The hourly rate will then
                            be used for the time spent on additional plan changes such as better testing.</i>
                        <br><br>
                        <i>* It is not guaranteed that you will receive this discount. This plugin proposal has to be reviewed first. Only plugins that are
                            interesting for the greater public, and do not contain any server-specific code can receive this discount. This is
                            nonnegotiable.</i>
                    </p>
                </div>
            </div>

            <?php if ($fromTicket && !$updated): ?>
                <div class="row">
                    <div class="cz-col-12 flex cz-align-items-center">
                        <div class="cz-col-8 link-buttons">
                            <form method="post">
                                <input type="text" name="type" value="<?= $selectedType ?>" hidden>
                                <input type="text" name="testing" value="<?= $selectedTesting ?>" hidden>
                                <input type="text" name="messages" value="<?= $selectedMI ?>" hidden>
                                <input type="text" name="commands" value="<?= $selectedCommands ?>" hidden>
                                <input type="text" name="versions" value="<?= $selectedVersion ?>" hidden>
                                <input type="text" name="allow_publication" value="<?= $allowPublication ?>" hidden>
                                <button class="cz-w-100" type="submit">Submit this selection</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
include_once "./inc/footer.php";
?>


<script>
    let selectedOptions = {
        type: '<?=$tierNumbers[$selectedType]?>',
        testing: '<?=$tierNumbers[$selectedTesting]?>',
        messages: '<?=$tierNumbers[$selectedMI]?>',
        commands: '<?=$tierNumbers[$selectedCommands]?>',
        versions: '<?=$tierNumbers[$selectedVersion]?>',
        authorize_selling: <?=$allowPublication ? 'false' : 'true' // this is switched because it will negate this later on load. ?>
    };
    const prices = {
        type: {
            budget: 12,
            premium: 14,
            pro: 16
        },
        testing: {
            budget: 0,
            premium: 5,
            pro: 10
        },
        messages: {
            budget: 0,
            premium: 5,
            pro: 10
        },
        commands: {
            budget: 0,
            premium: 2.5,
            pro: 5
        },
        versions: {
            budget: 0,
            premium: 5,
            pro: 15
        }
    }

    function formatInt(num, addSign = false) {
        const origin = num;
        if (num !== 0) {
            num = num.toString();
            const split = num.split("\.");
            if (split.length === 2) {
                const eur = split[0];
                const cent = split[1].toString()
                if (cent.length === 1) {
                    num = eur + "," + cent + "0";
                } else {
                    num = eur + "," + cent;
                }
            }
        } else {
            num = "FREE";
        }

        return addSign && origin !== 0 ? "&euro;" + num : num;
    }

    function updateTotalPrice() {
        const el = $("#price p:first");
        let total = 0;
        let hourly = 12;

        for (let key in selectedOptions) {
            if (key === "authorize_selling") {
                if (selectedOptions[key] === true) total -= 15;
                continue;
            }

            const keyVal = selectedOptions[key];
            const price = prices[key][keyVal];
            if (key !== "type") total += price;
            else {
                hourly = price;
            }
        }

        const type = getPlanNumber(selectedOptions.type);
        const testingNum = getPlanNumber(selectedOptions.testing);
        if (testingNum <= type) {
            total -= prices.testing[selectedOptions.type];
        }

        $("input[name='type']").val(getPlanNumber(selectedOptions.type));
        $("input[name='testing']").val(getPlanNumber(selectedOptions.testing));
        $("input[name='messages']").val(getPlanNumber(selectedOptions.messages));
        $("input[name='commands']").val(getPlanNumber(selectedOptions.commands));
        $("input[name='versions']").val(getPlanNumber(selectedOptions.versions));
        $("input[name='allow_publication']").val(selectedOptions.authorize_selling);

        if (total === 0) el.html(`&euro;${hourly} / hour`);
        else {
            if (total > 0) {
                el.html(`&euro;${hourly} / hour <span style="font-weight: 500">+ &euro;${formatInt(total)}</span>`);
            } else {
                el.html(`&euro;${hourly} / hour <span style="font-weight: 500">- &euro;${formatInt(total * -1)}</span>`);
            }
        }
    }

    function getPlanNumber(plan) {
        switch (plan) {
            case 'budget':
                return 1;
            case 'premium':
                return 2;
            case 'pro':
                return 3;
        }
    }

    function updatePrice(el, included = false) {
        const parent = el.parent();

        const childs = el.find(".price");

        let value;
        if (included) value = `Included in ${selectedOptions.type}`;
        else {
            const hourly = parent.attr("aria-label") === "type" ? `<span style="font-weight: 500"> / hour</span>` : "";
            value = `${formatInt(prices[parent.attr("aria-label")][parent.attr("aria-valuetext")], true) + hourly}`;
        }

        value = `<span class="price">${value}</span>`;

        if (childs.length === 0) {
            el.html(el.html() + value);
        } else {
            childs.html(value);
        }
    }

    function updateType(type) {
        const testing = $(".selectable[aria-label='testing']");
        const typeNumber = getPlanNumber(type);
        const currentType = selectedOptions.testing;
        const currentTypeNumber = getPlanNumber(currentType);

        let i = 1;
        testing.each(function () {
            const item = $(this);
            if (i < typeNumber) {
                item.addClass("disabled");
                item.removeClass("selected");
                updatePrice(item.children("p"))
            } else if (i === typeNumber) {
                console.log("current: " + currentTypeNumber);
                console.log("new: " + typeNumber);
                if (currentTypeNumber <= typeNumber) {
                    selectedOptions.testing = type;
                    item.addClass("selected");
                }
                item.removeClass("disabled");
                updatePrice(item.children("p"), typeNumber !== 1);
            } else if (i > typeNumber) {
                if (i !== currentTypeNumber) {
                    item.removeClass("selected");
                }
                item.removeClass("disabled");
                updatePrice(item.children("p"));
            }
            i++;
        });
    }

    const selectables = $(".selectable:not(.des) p");
    selectables.each(function () {
        updatePrice($(this));
    });

    function updatePublicationInput(updatePrice = true) {
        const current = $('#allow_publication');
        if (selectedOptions.authorize_selling) {
            selectedOptions.authorize_selling = false;
            current.find(".select-val").html("Publication not allowed");
            current.removeClass("authorized");
        } else {
            selectedOptions.authorize_selling = true;
            current.find(".select-val").html("Publication allowed");
            current.addClass("authorized");
        }
        $("input[name='allow_publication']").val(selectedOptions.authorize_selling);
        if (updatePrice) updateTotalPrice();
    }

    $("#allow_publication").on("click", updatePublicationInput);

    selectables.on("click", function () {
        const current = $(this).parent();
        if (current.hasClass("disabled") || current.hasClass("des")) return;

        const label = current.attr("aria-label");
        const value = current.attr("aria-valuetext");
        const selectables = $(`.selectable[aria-label='${label}']`);

        selectables.each(function () {
            const selectable = $(this);
            if (selectable.attr("aria-valuetext") === value) {
                selectable.addClass("selected");
                selectedOptions[label] = value;
            } else {
                console.log('removing from ' + selectable);
                selectable.removeClass("selected");
            }
        });

        if (label === "type") {
            updateType(selectedOptions.type);
        }
        updateTotalPrice();
    });

    updatePublicationInput(false);
    updateTotalPrice();
</script>
