<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $displayTitle ?></title>
    <link rel="stylesheet" href="/inc/style.css?version=1641410946" type="text/css">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <script>WebFontConfig = {google: {families: ['Lato:400,900']}};</script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,900" media="all">

    <meta name="description" content="<?= $metaDescription ?>">
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="author" content="GCNT Development">

    <link rel="icon" href="https://www.gcnt.net/inc/img/logo.png">
    <link rel="apple-touch-icon" href="https://www.gcnt.net/inc/img/logo.png">

    <meta property="og:locale" content="en_US">
    <meta property="og:title" content="<?= $displayTitle ?>">
    <meta property="og:type" content="website">
    <meta property="og:description" content="<?= $metaDescription ?>">
    <meta property="og:url" content="https://www.gcnt.net/<?= $metaLink ?>">
    <meta property="og:site_name" content="GCNT Development">
    <meta property="og:image" content="https://www.gcnt.net/inc/img/logo.png">
    <meta property="og:image:secure_url" content="https://www.gcnt.net/inc/img/logo.png">


    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
          integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156445832-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-156445832-1');
    </script>


    <script>
        $(window).on("scroll", function () {
            if ($(window).scrollTop() > 10) {
                $(".container-header").addClass("hover");
            } else {
                //remove the background property so it comes transparent again (defined in your css)
                $(".container-header").removeClass("hover");
            }
        });
    </script>
</head>

<body class="home blog device-md" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0"
      data-gr-c-s-loaded="true">

<div id="componentz-wrapper" class="componentz-layout-widewidth">
    <header id="componentz-header" class="header-v1 sticky-header">
        <div class="header-background">
            <div class="container-header cz-container cz-px-0">
                <div class="container-sticky-header-background"></div>
                <div class="width-container">
                    <div class="cz-row cz-flex-nowrap cz-justify-content-between cz-align-items-center">
                        <div class="cz-col-2 cz-col-sm-3 cz-col-lg-4 cz-d-flex cz-justify-content-start">
                            <nav class="cz-navbar cz-menu cz-primary-menu componentz-theme-menu cz-navbar-expand-lg cz-d-none cz-d-lg-flex"
                                 role="navigation">
                                <button class="cz-navbar-toggler" type="button" data-toggle="cz-collapse"
                                        data-target="#componentz-primary-menu-collapse"
                                        aria-controls="componentz-primary-menu-collapse" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                <span class="cz-navbar-toggler-icon">
                                    <i class="fas fa-bars"></i>
                                </span>
                                </button>
                                <div id="componentz-primary-menu-collapse" class="cz-collapse cz-navbar-collapse">
                                    <ul id="menu-main-menu" class="cz-nav cz-navbar-nav">
                                        <!--
                                        Here all the items on the top of the menu will be displayed
                                        The device is then big
                                        -->
                                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                            id="menu-item-1922"
                                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active menu-item-1922 cz-nav-item">
                                            <a title="Home" href="https://www.gcnt.net/" class="cz-nav-link">Home</a>
                                        </li>
                                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                            id="menu-item-1974"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children cz-dropdown menu-item-1974 cz-nav-item">
                                            <a title="Pages" href="#" class="cz-dropdown-toggle cz-nav-link"
                                               id="menu-item-dropdown-1974">Plugins</a>
                                            <a href="#" class="cz-submenu-collapse" tabindex="-1">
                                            </a>
                                            <ul class="cz-dropdown-menu" aria-labelledby="menu-item-dropdown-1974"
                                                role="menu">
                                                <li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-1994"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1994 cz-nav-item">
                                                    <a title="AdditionsPlus"
                                                       href="https://www.gcnt.net/additionsplus"
                                                       id="menu-item-dropdown-1994"
                                                       class="cz-dropdown-item">AdditionsPlus</a>

                                                    <ul class="cz-dropdown-menu" aria-labelledby="menu-item-dropdown-1994"
                                                        role="menu">
                                                        <a title="AdditionsPlus"
                                                           href="https://www.gcnt.net/additionsplus/actions"
                                                           class="cz-dropdown-item">Actions</a>
                                                    </ul>


                                                </li>
                                                <li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-1975"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1975 cz-nav-item">
                                                    <a title="StreakRewards"
                                                       href="https://www.gcnt.net/streakrewards"
                                                       class="cz-dropdown-item">StreakRewards</a></li>
                                                <li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-1975"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1975 cz-nav-item">
                                                    <a title="SkyWarsReloaded"
                                                       href="https://www.gcnt.net/skywars"
                                                       class="cz-dropdown-item">SkyWarsReloaded</a></li>
                                            </ul>
                                        </li>
                                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                                            id="menu-item-1974"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children cz-dropdown menu-item-1974 cz-nav-item">
                                            <a title="Pages" href="#" class="cz-dropdown-toggle cz-nav-link"
                                               id="menu-item-dropdown-1642">Javadocs</a>
                                            <a href="#" class="cz-submenu-collapse" tabindex="-1">
                                            </a>
                                            <ul class="cz-dropdown-menu" aria-labelledby="menu-item-dropdown-1642"
                                                role="menu">
                                                <li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-1642"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1977 cz-nav-item">
                                                    <a title="AdditionsPlus"
                                                       href="https://www.gcnt.net/javadocs/additions"
                                                       class="cz-dropdown-item">AdditionsPlus</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <nav class="cz-navbar cz-menu cz-side-nav cz-mobile-menu cz-px-0 cz-pl-sm-3 cz-d-flex cz-d-lg-none"
                                 role="navigation">
                                <button class="cz-navbar-toggler cz-collapsed" type="button" onclick="toggleNavbar()">
                                <span class="cz-navbar-toggler-icon">
                                    <i class="fas fa-bars"></i>
                                </span>
                                </button>

                                <!-- old place of the small device sidebar -->

                            </nav>
                        </div>
                        <div class="cz-col-8 cz-col-sm-6 cz-col-lg-4 cz-text-center">
                            <div id="componentz-logo" class="cz-logo-title">
                                <h2>
                                    <a href="https://www.gcnt.net" title="GaagjesCraft Network Team (GCNT)">
                                        GCNT </a></h2></div>
                        </div>
                        <div class="cz-col-2 cz-col-sm-3 cz-col-lg-4 cz-d-flex cz-justify-content-end">
                            <nav class="cz-navbar cz-menu cz-menu-right cz-px-0 cz-pr-sm-3" role="navigation">
                                <ul class="cz-nav cz-align-items-center">
                                    <!--
                                    Here all items on the right will be displayed
                                    when the device is big
                                    -->
                                    <li class="cz-d-none cz-d-lg-block" itemscope="itemscope"
                                        itemtype="https://www.schema.org/SiteNavigationElement">
                                        <a href="https://www.gcnt.net/spigot" target="_blank" class="cz-menu-link"
                                           title="Link to Spigot page">
                                            <i class="fab fa-bitbucket"></i> Spigot</a>
                                    </li>
                                    <li class="cz-d-none cz-d-lg-block" itemscope="itemscope"
                                        itemtype="https://www.schema.org/SiteNavigationElement">
                                        <a href="https://my.gcnt.net/" target="_blank" class="cz-menu-link"
                                           title="My GCNT">
                                            <i class="fas fa-user"></i> My GCNT
                                        </a>
                                    </li>
                                    <li class="cz-d-none cz-d-lg-block" itemscope="itemscope"
                                        itemtype="https://www.schema.org/SiteNavigationElement">
                                        <a href="https://www.gcnt.net/discord" target="_blank" class="cz-menu-link"
                                           title="My GCNT">
                                            <i class="fab fa-discord"></i> Discord
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <nav class="cz-navbar cz-menu cz-primary-menu componentz-theme-menu cz-mobile-menu cz-px-0 cz-pl-sm-3 cz-d-flex cz-d-lg-none"
                                 role="navigation">
                                <div id="componentz-logo" class="cz-logo-title">
                                    <h2>
                                        <a href="https://www.gcnt.net/discord" target="_blank" title="GCNT Discord">
                                            <i class="fab fa-discord"></i>
                                        </a>
                                    </h2>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="navigator-backdrop" onclick="toggleNavbar()"></div>
            <div class="navigator">
                <button onclick="toggleNavbar()" class="closeButton">
                    <svg class="closeIcon" width="12" height="12" viewBox="0 0 12 12">
                        <g fill="none" fill-rule="evenodd" aria-hidden="true">
                            <path d="M0 0h12v12H0"></path>
                            <path fill="currentColor"
                                  d="M9.5 3.205L8.795 2.5 6 5.295 3.205 2.5l-.705.705L5.295 6 2.5 8.795l.705.705L6 6.705 8.795 9.5l.705-.705L6.705 6"></path>
                        </g>
                    </svg>
                </button>

                <a href="/" class="navigator-headlink">
                    <span class="green">GCNT</span>
                </a>
                <div class="navigator-spacer"></div>
                <div class="sectionName">General</div>

                <a href="/" id="index"
                   class="navigator-linklist">
                    <span>Home</span>
                </a>

                <div class="navigator-spacer"></div>

                <div class="sectionName">Plugin Info</div>

                <a href="/additionsplus" id="additionsplus/"
                   class="navigator-linklist">
                    <span>AdditionsPlus</span>
                </a>
                <a href="/streakrewards" id="streakrewards/"
                   class="navigator-linklist">
                    <span>StreakRewards</span>
                </a>
                <a href="/skywars" id="skywars/"
                   class="navigator-linklist">
                    <span>SkyWarsReloaded</span>
                </a>
                <div class="navigator-spacer"></div>

                <div class="sectionName">Javadocs</div>
                <a href="/javadocs/additions" class="navigator-linklist">
                    <span>AdditionsPlus</span>
                </a>

                <div class="navigator-spacer"></div>
                <div class="sectionName">Other Useful Links</div>
                <a href="/spigot" class="navigator-linklist">
                    <span>Spigot</span>
                </a>
                <a href="https://my.gcnt.net" class="navigator-linklist">
                    <span>My GCNT</span>
                </a>
                <a href="/discord" class="navigator-linklist">
                    <span>Discord</span>
                </a>
                <a href="/youtube" class="navigator-linklist">
                    <span>YouTube</span>
                </a>
                <a href="/donate" class="navigator-linklist">
                    <span>Donate (PayPal)</span>
                </a>
            </div>

            <script>
                function toggleNavbar() {
                    const nav = document.getElementsByClassName("navigator")[0];
                    const overlay = document.getElementsByClassName("navigator-backdrop")[0];
                    if (nav.style.left === "0px") {
                        document.body.style.overflowY = "auto";
                        nav.style.left = "-350px";
                        overlay.style.display = "none";
                    } else {
                        document.body.style.overflowY = "hidden";
                        nav.style.left = "0px";
                        overlay.style.display = "block";
                    }
                }
            </script>


            <?php
            if ($background): ?>
                <div class="simpleParallax">
                    <div class="simpleParallax cz-overflow-hidden"><img loading="lazy" alt="background image"
                                                                        src="/inc/img/background.jpg"
                                                                        data-src="/inc/img/background.jpg"
                                                                        class="header-image"></div>
                    <noscript><img loading="lazy"
                                   src="/inc/img/background.jpg" alt="background image"
                                   class="header-image"></noscript>
                </div>
            <?php endif; ?>
            <div class="cz-container page-header cz-text-center cz-py-5 cz-overflow-hidden">
                <h1 class="page-title cz-align-items-center aos-init aos-animate cz-d-block" data-aos="zoom-in-up"
                    data-aos-duration="800">
                    <?= $title; ?>
                </h1>

                <span class="sticky-post page-title cz-align-items-center cz-d-block aos-init aos-animate"
                      data-aos="zoom-in-up" data-aos-duration="800">
                    <?= $subtitle; ?>
                </span>
                <br>
                <?php
                if ($displayFeaturedPlugin): ?>
                    <a href="<?= $featuredLink ?>" class="cz-menu-link">
                        <span class="sticky-post page-sub cz-align-items-center cz-d-inline-flex aos-init aos-animate featured-link"
                              data-aos="zoom-in-up" data-aos-duration="800">
                      Featured Plugin
                    </span>
                    </a>
                    <div data-aos="zoom-in-up" data-aos-duration="800" class="aos-init aos-animate">
                        <ul class="cz-d-block post-meta">
                                <span class="cat-links">
                                    <li>
                                        <a href="<?= $featuredLink ?>" target="_blank" title="<?= $featuredName ?>">
                                            <?= $featuredName ?>
                                        </a>
                                    </li>
                                </span>
                        </ul>
                        <ul class="cz-d-block post-meta">
                            <li>
                                    <span class="byline">
                                        <span class="author vcard">
                                            <a href="<?= $featuredLink ?>" target="_blank" title="Brief plugin description">
                                                "<?= $featuredDescription ?>"
                                            </a>
                                        </span>
                                    </span>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </header>
</div>
