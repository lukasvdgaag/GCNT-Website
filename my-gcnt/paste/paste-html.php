<?php
$invalid = false;
$title = "Invalid paste";
$mygcnt = isset($_GET['mygcnt']) ? "true" : "false";
$content = "Something went wrong whilst getting the contents of this paste.
Maybe it doesn't exist?";
$language = "";
if (isset($_GET['paste_name'])) {
    $pasteName = $_GET['paste_name'];

    $fname = "/home/pastes/" . $pasteName . '.txt';
    if (file_exists($fname)) {
        require_once "/var/www/secret-files/config.php";
        $result = mysqli_query($link, "SELECT `title` FROM `pastes` WHERE `name` = '$pasteName'");
        $title = $result->fetch_assoc()['title'];
        $content = htmlspecialchars(file_get_contents($fname));

        $a = $content;

        $a = str_ireplace("[bold]", "<strong>", $a);
        $a = str_ireplace("[/bold]", "</strong>", $a);
        $a = str_ireplace("[strike]", "<span style=\"text-decoration: line-through;\">", $a);
        $a = str_ireplace("[/strike]", "</span>", $a);
        $a = str_ireplace("[underline]", "<span style='text-decoration: underline'>", $a);
        $a = str_ireplace("[/underline]", "</span>", $a);
        $a = str_ireplace("[italic]", "<i>", $a);
        $a = str_ireplace("[/italic]", "</i>", $a);
        $a = str_ireplace("[center]", "<span style='text-align:center;text-align:-moz-center;text-align:-webkit-center'>", $a);
        $a = str_ireplace("[/center]", "</span>", $a);
        $a = str_ireplace("[left]", "<span style='text-align:left;text-align:-moz-left;text-align:-webkit-left'>", $a);
        $a = str_ireplace("[/left]", "</span>", $a);
        $a = str_ireplace("[right]", "<span style='text-align:right;text-align:-moz-right;text-align:-webkit-right'>", $a);
        $a = str_ireplace("[/right]", "</span>", $a);

        $a = str_ireplace("[h1]", "<h1 style='padding:0;margin:0;display:inline'>", $a);
        $a = str_ireplace("[/h1]", "</h1>", $a);
        $a = str_ireplace("[h2]", "<h2 style='padding:0;margin:0;display:inline'>", $a);
        $a = str_ireplace("[/h2]", "</h2>", $a);
        $a = str_ireplace("[h3]", "<h3 style='padding:0;margin:0;display:inline'>", $a);
        $a = str_ireplace("[/h3]", "</h3>", $a);
        $a = str_ireplace("[h4]", "<h4 style='padding:0;margin:0;display:inline'>", $a);
        $a = str_ireplace("[/h4]", "</h4>", $a);
        $a = str_ireplace("[h5]", "<h5 style='padding:0;margin:0;display:inline'>", $a);
        $a = str_ireplace("[/h5]", "</h5>", $a);
        $a = str_ireplace("[h6]", "<h6 style='padding:0;margin:0;display:inline'>", $a);
        $a = str_ireplace("[/h6]", "</h6>", $a);

        $a = str_ireplace("[img]", "<img loading='lazy' src='", $a);
        $a = str_ireplace("[/img]", "' style='max-width:100%;'>", $a);

        $a = str_ireplace("*[*", "[", $a);
        $a = str_ireplace("*]*", "]", $a);

        $a = str_ireplace('"', '\\"', $a);
        $content = $a;

        if (strpos(strtolower($title), "yml") !== false || strpos(strtolower($title), "yaml") !== false) {
            $language = "yaml";
        }
        if (strpos(strtolower($title), "txt") !== false || strpos(strtolower($title), "text") !== false) {
            $language = "nohighlight";
        }
        if (strpos(strtolower($title), "java") !== false) {
            $language = "java";
        }

    } else {
        $invalid = true;
    }
}
?>

<?php
if ($mygcnt === "false") {
    echo '
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://my.gcnt.net/inc/tomorrow.css">
<link rel="stylesheet" href="https://www.gcnt.net/my-gcnt/paste/paste-style.css?' . time() . '">
<script src="http://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous"></script>
</head>
<body>
<script charset="utf-8" src="https://my.gcnt.net/inc/js/highlight.pack.js?1586169429426"></script>
<div class="paste-container">
    <div class="paste-file">
        <div class="paste-header">
            <p><a target="_blank" href="https://my.gcnt.net/paste/' . $pasteName . '" title="Open this paste in a new tab">' . $title . '</a></p>
        </div>
        <div class="paste-data">';
}
?>

<div class="paste-wrapper">
    <?php
    if ($mygcnt === "true") {
        echo '<div class="pasteButtonContainer">
    <span class="pasteButton">raw</span>
   <span class="pasteButton">download</span>
    <span class="pasteButton">print</span></div>';
    }
    ?>
    <div id="finalPasteContent-<?php echo $pasteName ?>">
    <pre style="margin:0 .5rem; max-height: 500px"><code class="<?php echo $language ?>" id="pasteContent-<?php echo $pasteName; ?>"><?php echo $content; ?></code></pre>
    </div>
</div>

<?php
if ($mygcnt === "false") {
    echo '
        </div>
        <div class="paste-footer">
            <a class="p-link" target="_blank" href="https://my.gcnt.net/paste/' . $pasteName . '/raw" style="float: right">view
                raw</a>
            <a target="_blank" href="https://my.gcnt.net/paste">This paste is hosted by GCNT</a>
        </div>
    </div>
</div>';

}
?>
<script>
    function resizeIframe(iframe) {
        iframe.height = (iframe.contentWindow.document.body.scrollHeight + 10) + "px";
    }

    function welp() {
        const name = '<?php echo $pasteName; ?>';
        document.querySelectorAll("code#pasteContent-" + name).forEach((block) => {
            hljs.highlightBlock(block);
        });

        var codeArea = document.getElementById("pasteContent-" + name);
        var pasteContent = codeArea.innerHTML;
        var array = pasteContent.split("\n");

        var table = "<table class='pasteTable'><tbody>";

        for (var i = 0; i < array.length; i++) {
            table += "<tr>";
            table += "<td data-line-number='" + (i + 1) + "' class='paste-linenumber'></td>";
            table += "<td class='paste-linecontent'>" + array[i] + "</td>";
            table += "</tr>";
        }
        table += "</tbody></table>";

        codeArea.innerHTML = table;
    }
    welp();
</script>
<?php
if ($mygcnt === "false") echo '</body></html>'; ?>