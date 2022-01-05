<footer id="componentz-footer">
    <div class="componentz-widgets">
        <div class="cz-container">
            <div class="cz-row cz-justify-content-center">
                <div class="componentz-copyright">
                    <a href="https://www.gcnt.net/" class="site-title">
                        <span>GaagjesCraft Network Team</span>
                    </a>
                    <div class="componentz-copyright-theme cz-text-center">
                        <a href="https://www.gcnt.net/">
                            &copy; 2016 - 2021 </a></div>
                    <div class="componentz-copyright-theme cz-text-center">
                        <a href="https://www.gcnt.net/terms-of-service" class="underline">
                            terms of service
                        </a>
                    </div>
                    <div class="componentz-copyright-theme cz-text-center">
                        <a href="/spigot" title="View our profile and resources on SpigotMC!" style="background:none"><img alt="Spigot" src="/inc/img/spigot-logo.png" style="height: 50px;margin: 0 5px 0 5px;"></a>
                        <a href="/donate" title="Sponsor us by donating money through PayPal!" style="background:none"><img alt="PayPal" src="/inc/img/paypal-logo.png" style="height: 35px;margin: 0 5px 0 5px;"></a>
                        <a href="/discord" title="Join our Discord server - get involved!" style="background:none"><img alt="Discord" src="/inc/img/discord-logo.png" style="height: 50px;margin: 0 5px 0 5px;"></a>
                        <a href="/youtube" title="Watch our tutorial videos on YouTube!" style="background:none"><img alt="YouTube" src="/inc/img/youtube-logo.png" style="height: 30px;margin: 0 5px 0 5px;"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    function loadSidebar() {
        var links = document.getElementsByClassName('navigator-linklist');
        for (var i = 0; i < links.length; i++) {
            var linkDiv = links.item(i);
            var id = linkDiv.id === "" ? "wjXn" : linkDiv.id;
            if (window.location.href.replace("https://www.gcnt.net/", "").indexOf(id) === 0 || (
                id === "index" && window.location.href.replace("https://www.gcnt.net/", "") === ""
            )) {
                linkDiv.classList.add("activeLink");
            }
        }
    }

    loadSidebar();
</script>

</body>
</html>