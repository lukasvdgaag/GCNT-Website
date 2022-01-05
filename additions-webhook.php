    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Discord Webhook</title>
    </head>

    <body>

    Welcome to the AdditionsPlus Discord webhook page.<br>
    If you are a normal user, there is not much to do here for you. Just go back to your game :)<br>
    If you are an AdditionsPlus plugin copy owner, then there's also nothing to do for you here.<br><br>
    This page is used to send messages from the AdditionsPlus to a custom webhook that you specified.<br>
    I know, it's pretty cool. Ideas are by LizardNetwork (go play on that server).<br><br>
    Our website: https://www.gcnt.net/

    <script>
        <?php
                $webhookLink = isset($_GET['webhook']) ? $_GET['webhook'] : "";
                $webhookUsername = isset($_GET['username']) ? $_GET['username'] : "AdditionsPlus Messenger";
                $webhookMessage = isset($_GET['message']) ? $_GET['message'] : "This message comes from the custom AdditionsPlus Discord Hook - created by GaagjesCraft Network Team (GCNT).\nhttps://gaagjescraft.net/";
                $webhookIcon = isset($_GET['icon']) ? $_GET['icon'] : "";
        ?>


        var request = new XMLHttpRequest();
        request.open("POST", "<?php echo  $webhookLink; ?>");
        request.setRequestHeader('Content-type', 'application/json');

        var date = new Date();

        var params = {
            username: "<?php echo $webhookUsername; ?>",
            content: "<?php echo $webhookMessage; ?>",
            <?php
                if ($webhookIcon !== "") {
                    echo 'avatar_url: "' . $webhookIcon . '"';
                }
            ?>
        };

        request.send(JSON.stringify(params));
    </script>

    </body>

    </html>