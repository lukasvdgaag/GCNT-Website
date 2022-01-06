<?php
require '/var/www/html/inc/HeaderBuilder.php';
use inc\HeaderBuilder;

$header = new HeaderBuilder("Terms of Service", "terms-of-service");
$header->displayFeaturedPlugin(false)
    ->metaDescription("Read about GCNT's Terms of Service.")
    ->build();
?>

    <main id="content" class="site-content" role="main">
        <section>
            <div class="featured-posts">
                <div class="cz-container">
                    <div class="cz-row cz-justify-content-center">
                        <div class="cz-col-12">
                            <div>
                                <h4 class="entry-title">
                                    <span style="font-size:30px">1. Free products and services</span>
                                </h4>
                            </div>
                            <div class="entry-content" style="color: rgba(30,36,79,.74)">
                                <p style="margin-bottom:5px">
                                    By downloading, installing, or using a free product or service from GCNT, on whatever platform, you agree to follow the terms as stated below:
                                </p>
                                <ol class="terms-list">
                                    <li>You are not allowed to redistribute or sell the plugin in any way.</li>
                                    <li>You are not allowed to claim the project as your own.</li>
                                    <li>You are allowed to make changes to the product by altering the code (GitHub or decompiled), but are not allowed to change the product name or remove authors. You also cannot redistribute this altered project in any way.</li>
                                    <li>You are allowed to use the plugin on as many (BungeeCord) servers as you would like.</li>
                                    <li>We are not required to keep the plugin updated.</li>
                                    <li>Products that are marked outdated or unstable will not receive any support whatsoever.</li>
                                </ol>
                            </div>
                        </div>

                        <div class="cz-col-12">
                            <div>
                                <h4 class="entry-title">
                                    <span style="font-size:30px">2. Premium products and services</span>
                                </h4>
                            </div>
                            <div class="entry-content" style="color: rgba(30,36,79,.74)">
                                <p style="margin-bottom:5px">
                                    By buying or using a premium resource from GCNT, on whatever platform, you agree to follow the terms as stated below:
                                </p>
                                <ol class="terms-list">
                                    <li>You are not allowed to resell the plugin.</li>
                                    <li>You are not allowed to redistribute the plugin in any way.</li>
                                    <li>Chargebacks are not tolerated and will result in a ban from all platforms.</li>
                                    <li>You are only allowed to use the plugin on one (BungeeCord) server.</li>
                                    <li>No refunds will be given.*</li>
                                    <li>We are not required to keep the plugin updated, though will we try to keep it
                                        up-to-date as much as possible.
                                    </li>
                                    <li>You will only receive premium plugin support if you can prove that you have
                                        bought the resource. You can do this by following the steps as listed below. We do not give support to people that claim to be helping other people or people that received the product from someone else.
                                        You need to be the actual owner, or verify yourself as spokesperson for someone else's purchase.
                                        <ul>
                                            <li>Step 1 - Connect your SpigotMC account to your MyGCNT account via our <a href="https://www.gcnt.net/discord">Discord</a>.</li>
                                            <li>Step 2 - Verify your PayPal payment by entering your email and purchase date in our Discord.</li>
                                        </ul>
                                    </li>
                                    <li>If you are a verified member of the official GCNT Discord server, you are eligible to apply for the partial 25% Discord-member refund.
                                    This can only be claimed once per purchase and is 25% of the net received amount of the purchase.</li>
                                </ol>
                                <p style="font-size:12px" class="terms-list">
                                    * No refunds will be given other than the 25% partial discord-member refund.
                                </p>
                            </div>
                        </div>

                        <div class="cz-col-12">
                            <div>
                                <h4 class="entry-title">
                                    <span style="font-size:30px">3. Custom products and services</span>
                                </h4>
                            </div>
                            <div class="entry-content" style="color: rgba(30,36,79,.74)">
                                <p style="margin-bottom:5px">
                                    By buying or using a custom resource from GCNT, you agree to follow the terms as stated below:
                                </p>
                                <ol class="terms-list">
                                    <li>You are not allowed to resell the plugin.</li>
                                    <li>You are not allowed to redistribute the plugin in any way.</li>
                                    <li>
                                        Chargebacks are not tolerated.
                                        <ol>
                                            <li>You will be banned from all platforms.*<sup>1</sup></li>
                                            <li>Legal actions may be taken if not solved properly.</li>
                                        </ol>
                                    </li>
                                    <li>You are only allowed to use the plugin on one (BungeeCord) server.</li>
                                    <li>No refunds will be given.</li>
                                    <li>This is by default a one-time service. We are not required to keep the plugin updated.</li>
                                    <li>We will keep the plugin updated until all primary features*<sup>2</sup> are added and
                                        working.
                                    </li>
                                    <li>Secondary features/requests*<sup>3</sup> are likely to cost extra money. Only primary features are
                                        included in the price.
                                    </li>
                                    <li>The following rules apply to the payment(s):
                                        <ol>
                                            <li>We only accept payments through PayPal and iDEAL.</li>
                                            <li>All prices, invoices, and other payments are in EUR (€).</li>
                                            <li>You are invoiced before we will start the development. We will start developing once a minimum of 50% of the total price has been paid.
                                                You can choose to pay the other half of the invoice after the project has finished. It is possible to pay the entire invoice in advance.
                                            </li>
                                            <li>If we have agreed to work on an hourly rate instead, you will be invoiced periodically or once after finishing the development.</li>
                                            <li>The final product will not be given until the entire invoice has been paid.</li>
                                            <li>Invoices will be sent to the project owner and will always come from the email <kbd>gaagjescraft@gmail.com</kbd>.</li>
                                        </ol>
                                    </li>
                                </ol>
                                <p style="font-size:12px" class="terms-list">
                                    *<sup>1</sup> MyGCNT, SpigotMC, and the official GCNT Discord server.<br>
                                    *<sup>2</sup> Primary features/requests are features that are known by us from the moment that
                                    we started the project development.<br>
                                    *<sup>3</sup> Secondary features/requests are features that are quested during or after the finishing of the project development.
                                </p>
                            </div>
                        </div>

                        <div class="cz-col-12">
                            <div>
                                <h4 class="entry-title">
                                    <span style="font-size:30px">4. Privacy</span>
                                </h4>
                            </div>
                            <div class="entry-content" style="color: rgba(30,36,79,.74)">
                                <p style="margin-bottom:5px">
                                    The following terms apply to all GCNT services.
                                </p>
                                <ol class="terms-list">
                                    <li>Information that you entered will not be shared with third-parties.</li>
                                    <li>We are allowed to share your information among GCNT members if relevant.
                                        <ol>
                                            <li>Passwords will not be shared in any way</li>
                                            <li>GCNT members* can request data to verify a purchase, service, or third-party account.</li>
                                        </ol>
                                    </li>
                                    <li>All email addresses and (third-party) accounts that you entered can be used to contact you if needed.</li>
                                </ol>
                                <p>
                                    * This could be emails from <kbd>gaagjescraft@gmail.com</kbd>, or users in the official GCNT Discord server with the role 'GCNT Member'.
                                </p>
                                <p style="text-decoration: underline">
                                    By agreeing with our terms, you also agree to the fact that we are allowed
                                    to change the terms and conditions at any time without notice.
                                </p>
                                <p>
                                    <i>Last update: August 29th, 2021 at 23:55 CET</i>
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
    </main>

<?php
include_once "./inc/footer.php";
?>