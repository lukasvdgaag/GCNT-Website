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
                                    By downloading, installing, or using a free product or service from GCNT, on whatever platform, you agree to follow the
                                    terms as stated below:
                                </p>
                                <ol class="terms-list">
                                    <li>You are not allowed to redistribute or sell the plugin in any way.</li>
                                    <li>You are not allowed to claim the project as your own.</li>
                                    <li>You are allowed to make changes to the product by altering the code (GitHub or decompiled), but are not allowed to
                                        change the product name or remove any of the original authors. It is prohibited to redistribute this altered project in
                                        any way.
                                    </li>
                                    <li>You are allowed to use the plugin on as many (BungeeCord) servers as you would like.</li>
                                    <li>We are not required to keep the plugin updated.</li>
                                    <li>Products or versions that are marked outdated or unstable will not receive any support whatsoever.</li>
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
                                    <li id="2.4">You are only allowed to use the plugin on one (BungeeCord) server.
                                        Every network has to purchase a personal copy of the project to be allowed to use it.
                                        If you want to use the plugin on multiple networks,
                                        please contact us in our <a href="https://www.gcnt.net/discord">Discord server</a>.
                                    </li>
                                    <li>No refunds will be given.*</li>
                                    <li>We are not required to keep the plugin updated, though will we try to keep it
                                        up-to-date as much as possible.
                                    </li>

                                    <li>
                                        Premium support will only be provided to those who have verified their purchase.
                                        Only the actual purchaser of the product or their spokesperson will be able to receive support.
                                        Verification takes place in the <a href="https://www.gcnt.net/discord">Discord server</a> and requires a <a
                                                href="https://my.gcnt.net/register">MyGCNT account</a>. This proces is automated for users that were in the
                                        Discord server when they made their purchase.
                                        Purchases from non-MyGCNT platforms may need to wait up to 4 hours to be able to get verified or claimed.
                                    </li>
                                </ol>
                                <p style="font-size:12px" class="terms-list">
                                    * Refunds can be provided up to 25% at our discretion if we acknowledge any shortcomings to the product. Dissatisfied
                                    customers should contact us in our <a href="https://www.gcnt.net/discord">Discord server</a> at all times before refunds
                                    will be provided.
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
                                    By buying or using a custom product from GCNT, you agree to follow the terms as stated below:
                                </p>
                                <ol class="terms-list">
                                    <li>You are not allowed to resell the product in any way.</li>
                                    <li>You are not allowed to redistribute the product in any way.</li>
                                    <li>
                                        Chargebacks are not tolerated.
                                        <ol>
                                            <li>You will be banned from all platforms.*<sup>1</sup></li>
                                            <li>Legal actions may be taken if not solved properly.</li>
                                        </ol>
                                    </li>
                                    <li>You are only allowed to use the plugin on one (BungeeCord) server (<a href="#2.4">see article 2.4</a>).</li>
                                    <li>No refunds will be given in any circumstance.</li>
                                    <li>This is by default a one-time service. We are not required to keep the plugin updated.</li>
                                    <li>We will keep the plugin updated until all primary features*<sup>2</sup> are added and working.</li>
                                    <li id="3.8">Secondary features/requests*<sup>3</sup> are not included in the original price and will be charged separately.
                                        Only
                                        primary features are included in the price. Bugs that are caused by coding mistakes are free of charge.
                                    </li>
                                    <li>
                                        Fixes for bugs that are caused by faulty code are free of charge. Fixes for bugs that are caused by third-parties will
                                        be charged for (<a href="#3.8">see article 3.8</a>).
                                    </li>
                                    <li>The following rules apply to payment(s):
                                        <ol>
                                            <li>Transaction will only be issued through PayPal or iDEAL.</li>
                                            <li>All prices, invoices, and other payments are in EUR (€).</li>
                                            <li>Transactions are solely done by invoicing the product owner. We will not accept manual payments.</li>
                                            <li>You will be charged hourly. Please see <a href="https://www.gcnt.net/pricing">our pricing</a> for the base
                                                rates.
                                            </li>
                                            <li>An estimate of development hours is made in advance of the development to base the appraisal on.
                                                This number is solely an estimate - the actual hours of development may vary and thus will the end price.
                                                We can update invoices accordingly.
                                            </li>
                                            <li>A down payment with a minimum of 50% of the initial price must be paid before development will start.</li>
                                            <li>Hours that developers make will be logged.</li>
                                            <li>The final product will not be provided to the product owner until all invoices have been fully paid.</li>
                                            <li>Invoices will be sent to the product owner and will always come from the email <kbd>gaagjescraft@gmail.com</kbd>.
                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                                <p style="font-size:12px" class="terms-list">
                                    *<sup>1</sup> MyGCNT, SpigotMC, Mc-Market, and the official GCNT Discord server.<br>
                                    *<sup>2</sup> Primary features/requests are features that are known by us from the moment that
                                    we started the project development and thus are included in the base price.<br>
                                    *<sup>3</sup> Secondary features/requests are features that are requested during or after finishing the project
                                    development and thus are not included in the base price.
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
                                    * This could be emails from <kbd>gaagjescraft@gmail.com</kbd> or emails that end with <kbd>@gcnt.net</kbd>, or members of the
                                    official GCNT Discord server with the role 'GCNT Member'.
                                </p>
                                <p style="text-decoration: underline">
                                    By agreeing with our terms, you also agree to the fact that we are allowed
                                    to change the terms and conditions at any time without notice.
                                </p>
                                <p>
                                    <i>Last update: July 2nd, 2022 at 14:00 CET</i>
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