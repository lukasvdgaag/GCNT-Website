<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="https://www.gcnt.net/inc/img/additions-logo.jpg">
    <title>AdditionsPlus Discord Webhook Messenger | GCNT</title>

    <style>
        body {
            margin: 0;
            background-color: #2C2F33;
            color: #dcddde;
            font-family: Whitney, Helvetica Neue, Helvetica, Arial, sans-serif;
        }

        a {
            color: #fff;
            text-decoration: none;
        }

        h1, h2, h3, h4, h5 {
            color: #fff;
            margin-top: 0;
        }

        .info {
            padding: 20px;
            background-color: #7289DA;
        }

        .tester {
            padding: 20px;
        }

        .tester label {
            display: block;
            margin-bottom: 8px;
            color: #fff;
            opacity: .5;
            font-size: 15px;
            line-height: 20px;
            font-weight: 500;
        }

        .tester input {
            display: block;
            border: 1px solid #0404054f;
            padding: 10px;
            height: 20px;
            font-size: 16px;
            width: calc(100% - 20px);
            color: #dcddde;
            background-color: rgba(0, 0, 0, .1);
            outline: 0;
            font-weight: 400;
            border-radius: 3px;
        }

        .tester textarea {
            display: block;
            border: 1px solid #0404054f;
            padding: 10px;
            height: 60px;
            font-size: 16px;
            width: calc(100% - 20px);
            color: #dcddde;
            background-color: rgba(0, 0, 0, .1);
            outline: 0;
            font-weight: 400;
            border-radius: 3px;
            resize: none;
        }

        .tester button {
            color: #fff;
            background-color: #7289DA;
            font-size: 16px;
            line-height: 24px;
            margin-bottom: 8px;
            width: 100%;
            outline: none;
            height: 30px;
            border: none;
            border-radius: 3px;
        }

        .footer {
            padding: 40px 20px;
            font-size: 24px;
            background-color: #212227;
            text-align: -webkit-center;
            text-align: center;
            text-align: -moz-center;
        }

        .footer h5 {
            margin: 0;
        }

        .footer h5 span {
            font-weight: normal;
        }

        .output {
            padding: 20px;
        }

        .output p {
            margin-bottom: 0;
        }

        @media screen and (min-width: 1000px) {
            .tester {
                padding: 20px 5px 20px 20px;
                display: inline-block;
                width: calc(50% - 25px);
                float: left;
                clear: both;
            }

            .tester input, .tester textarea {
                width: calc(100% - 20px) !important;
                max-width: calc(100% - 20px) !important;
            }

            .output {
                padding: 20px 20px 20px 5px;
                display: inline-block;
                width: calc(50% - 25px);
            }

            .preview {
                max-width: calc(100% - 20px) !important;
            }

        }

        pre.config {
            border-radius: 4px;
            padding: 0;
            font-size: 0.75rem;
            line-height: 1rem;
            white-space: pre-wrap;
            background-clip: border-box;
            margin: 6px 0 0 0;
            border: 0;
            font-weight: inherit;
            font-style: inherit;
            vertical-align: baseline;
            user-select: text;
            box-sizing: border-box;
        }

        code.config {
            font-size: 0.875rem;
            line-height: 1.125rem;
            text-indent: 0;
            white-space: pre-wrap;
            background: #2f3136;
            border: 1px solid #202225;
            padding: .5rem;
            border-radius: 4px;
            display: block;
            color: #b9bbbe;
            margin: 0;
            min-width: 25%;
            max-width: calc(100% - 20px);
            word-break: break-all;
            width: fit-content;
            vertical-align: baseline;
        }

        @media screen and (max-width: 500px) {
            code.config {
                width: calc(100% - 20px)
            }
        }

        @media screen and (min-width: 600px) {
            .tester input, .tester textarea {
                max-width: 600px;
            }

            .tester button {
                width: 50%;
                max-width: 300px;
                text-align: center;
                margin: auto;
            }

            code.config {
                width: 100%;
            }
        }


        .inline {
            width: auto;
            height: auto;
            padding: .2em;
            margin: -.2em 0;
            border-radius: 3px;
            background: #202225;
            text-indent: 0;
            border: none;
            white-space: pre-wrap;
        }


        .messageHeader h1 {
            display: inline;
            vertical-align: baseline;
            color: rgb(255, 255, 255);
            font-size: 1rem;
            font-weight: 500;
            line-height: 1.375rem;
            overflow-wrap: break-word;
            cursor: pointer;
            margin: 0 0.25rem 0 0;
        }

        .messageHeader .bot {
            position: relative;
            top: -0.1rem;
            min-height: 1.275em;
            max-height: 1.275em;
            color: rgb(255, 255, 255);
            font-size: 0.625em;
            font-weight: 500;
            line-height: 1.3;
            vertical-align: baseline;
            margin: 0.075em 0.25rem 0 0;
            padding: 0.071875rem 0.275rem;
            border-radius: 3px;
            background: rgb(114, 137, 218);
        }

        .messageHeader .time {
            display: inline-block;
            height: 1.25rem;
            color: rgb(114, 118, 125);
            margin-left: 0.25rem;
            font-size: 0.75rem;
            font-weight: 500;
            line-height: 1.375rem;
            vertical-align: baseline;
        }

        .messageHeader .time:before {
            content: 'Today at ';
        }

        .messageContent {
            white-space: inherit;
            overflow-wrap: break-word;
            line-height: 1.375;
        }

        .preview {
            position: relative;
            margin-top: 1rem;
            min-height: 2.75rem;
            flex: 0 0 auto;
            padding: 10px 16px 10px 4.5rem;
            max-width: 535px;
            background: rgb(54, 57, 63);
        }

        .preview a {
            color: rgb(0, 176, 244);
            text-decoration: none;
        }

        .preview code.inline {
            font-size: 16px;
            line-height: 1.125rem;
            white-space: pre-wrap;
            padding: 0.2em;
            margin: -0.2em 0;
            border-radius: 3px;
        }

        .messageHeader img {
            height: 2.5rem;
            width: 2.5rem;
            position: absolute;
            left: 0;
            top: 10px;
            object-fit: cover;
            cursor: pointer;
            margin: 0 1rem;
            border-radius: 50%;
        }


    </style>
</head>

<body>

<div class="info">
    <h1>AdditionsPlus Discord Webhook Messenger</h1>
    <p>Welcome to the AdditionsPlus Discord webhook page.<br>
        If you are a normal user, there is not much to do here for you. Just go back to your game :)<br>
        If you are an AdditionsPlus plugin copy owner, then there's also nothing to do for you here.<br><br>
        This page is used to send messages from the AdditionsPlus to a custom webhook that you specified.<br>
        I know, it's pretty cool. Ideas are by LizardNetwork (go play on that server).<br><br>
        Our website: <a href="https://www.gcnt.net/">https://www.gcnt.net/</a>
    </p>
</div>

<div style="position: relative;display:inline-block;width:100%">

    <div class="tester">
        <h3>Try it out!</h3>
        <form action="index.php" method="get" name="test" id="test">
            <label for="webhook">
                Webhook link
            </label>
            <input type="url" id="webhook" name="webhook" oninput="update('webhookURL', this.value)">
            <br>
            <label for="icon">
                Webhook icon url</label>
            <input type="url" id="icon" name="icon" oninput="update('icon_url', this.value)"
                   value="https://www.gcnt.net/inc/img/additions-logo.jpg">
            <br>
            <label for="username" id="usernameLabel">
                Webhook username (23 / 80)</label>
            <input type="text" id="username" oninput="update('bot_name', this.value)" name="username" maxlength="80"
                   value="AdditionsPlus Messenger">
            <br>
            <label for="message" id="messageLabel">
                Message (0 / 2000)</label>
            <textarea type="text" maxlength="2000" id="message" name="message" required
                      oninput="update('msg', this.value)"></textarea>
            <br>

            <button type="submit" form="test">Test</button>
        </form>
    </div>

    <div class="output">
        <h3>Preview</h3>

        <div class="preview">
            <div class="messageHeader">
                <img loading="lazy" id="iconContent" alt="icon" src="https://www.gcnt.net/inc/img/additions-logo.jpg">
                <h1 id="nameContent">AdditionsPlus Messenger</h1>
                <span class="bot">BOT</span>
                <span class="time">11:00 PM</span>
            </div>

            <div class="messageContent" id="msgContent">
                message here
            </div>

        </div>

        <h3 style="margin-top: 15px">Configuration</h3>

        <p>Put the information below in your <span class="inline">config.yml</span> to make the [discord] action work.
        </p>

        <pre class="config"><code class="config"><span>discord:</span><br><span>  enableHook: true</span><br><span>  hostURL: 'https://additions.gcnt.net/index.php'</span><br><span
                        id="webhookURL">  webhookURL: ''</span><br><span
                        id="bot_name">  bot_name: 'AdditionsPlus Messenger'</span><br><span id="icon_url">  icon_url: 'https://www.gcnt.net/inc/img/additions-logo.jpg'</span></code></pre>

        <p>Use the action below to send the message to the Discord channel as the webhook:</p>

        <pre class="config"><code class="config"><span id="msg">'[discord]'</span></code></pre>
    </div>

    <script>
        function update(type, value) {
            if (type !== "msg") {
                document.getElementById(type).innerHTML = "  " + type + ": '" + value + "'";
                if (type === "icon_url") {
                    if (value === "") {
                        value = "https://www.gcnt.net/inc/img/additions-logo.jpg";
                    }
                    document.getElementById("iconContent").src = value;
                } else if (type === "bot_name") {
                    if (value === "") {
                        value = "AdditionsPlus Messenger";
                    }
                    document.getElementById('usernameLabel').innerHTML = "Webhook username (" + value.length + " / 80)";
                    document.getElementById("nameContent").innerHTML = value;
                }
            } else {
                // type = msg
                var val = value;
                val = val.replace(/\n/g, "<br>");

                var split = val.split(" ");
                var italic = false;
                var bold = false;
                var strike = false;
                var inlineCode = false;
                for (var i = 0; i < split.length; i++) {

                    if (split[i].startsWith("https://") || split[i].startsWith("http://")) {
                        var slash = split[i].endsWith("/") ? "" : "/";
                        split[i] = "<a href='" + split[i] + slash + "'>" + split[i] + slash + "</a>";
                    }

                    if (split[i].includes("**")) {
                        if (split[i].includes("**") && !bold) {
                            bold = true;
                            split[i] = split[i].replace("**", "<strong>");
                        }
                        if (split[i].includes("**") && bold) {
                            bold = false;
                            split[i] = split[i].replace("**", "</strong>");
                        }
                    } else if (split[i].includes("*")) {
                        if (split[i].includes("*") && !italic) {
                            italic = true;
                            split[i] = split[i].replace("*", "<em>");
                        }
                        if (split[i].includes("*") && italic) {
                            italic = false;
                            split[i] = split[i].replace("*", "</em>");
                        }
                    }

                    if (split[i].includes("`") && !inlineCode) {
                        inlineCode = true;
                        split[i] = split[i].replace("`", "<code class='inline'>");
                    }
                    if (split[i].includes("`") && inlineCode) {
                        inlineCode = false;
                        split[i] = split[i].replace("`", "</code>");
                    }


                    if (split[i].includes("~~") && !strike) {
                        strike = true;
                        split[i] = split[i].replace("~~", "<del>");
                    }
                    if (split[i].includes("~~") && strike) {
                        strike = false;
                        split[i] = split[i].replace("~~", "</del>");
                    }
                }

                document.getElementById('msgContent').innerHTML = split.join(" "); // val

                document.getElementById('messageLabel').innerHTML = "Message (" + value.length + " / 2000)";

                value = value.replace(/'/g, "''").replace(/\n/g, "\\n");
                document.getElementById("msg").innerHTML = "'[discord]" + value + "'";
            }
        }
    </script>
</div>

<div class="footer">
    <h5><a href="https://www.gcnt.net/">GaagjesCraft Network Team</a>
        <br>
        <span style="font-size:15px">&copy; 2016 - 2021</span></h5>
</div>

<?php

$webhookLink = isset($_GET['webhook']) ? $_GET['webhook'] : "";
$webhookUsername = isset($_GET['username']) ? $_GET['username'] : "AdditionsPlus Messenger";
$webhookMessage = isset($_GET['message']) ? $_GET['message'] : "This message comes from the custom AdditionsPlus Discord Hook - created by GaagjesCraft Network Team (GCNT).\nhttps://www.gcnt.net/";
$webhookIcon = isset($_GET['icon']) ? $_GET['icon'] : "https://www.gcnt.net/inc/img/additions-logo.jpg";

if ($webhookLink !== "" && $webhookMessage !== "") {

    $json_data = json_encode([
        "content" => $webhookMessage,
        "username" => $webhookUsername,
        "avatar_url" => $webhookIcon,
        "tts" => false,

    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

    $ch = curl_init($webhookLink);

    /* $title = "Announcement title";
     $c  ontent = "Some announcement content\nwith more text.";
     $username = "Grant";
     $date = new DateTime();



     $fieldArray = array("name" => $title, "value" => $content);
     $footerArray = array("text" => "Sent by " . $username, "icon_url" => "https://www.gcnt.net/inc/img/logo.png");
     $embedsArray = array($fieldArray, $footerArray, "timestamp" => $date->format("Y-m-d") . "T" . $date->format("H:i:s.000") . "Z");


     $json_data = json_encode([
         "username" => "Announcement",
         "avatar_url" => "https://my.gcnt.net/inc/img/discord-announcement-logo.png",
         "tts" => false,
         $embedsArray
     ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

     $ch = curl_init("https://discordapp.com/api/webhooks/710971626916675596/ZTp2cXJObhiHdxhWhldb3Dq40mBpSkDuqLkg_N5wNIhd5y0TzyV-oFy8JlP1Io3CFcZK");*/

    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_exec($ch);

    curl_close($ch);
}
?>

</body>

</html>