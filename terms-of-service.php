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
                                <h3 style="margin-bottom: 10px;">Definitions</h3>
                            </div>
                            <div class="entry-content" style="color: rgba(30,36,79,.74)">
                                <p style="margin-bottom: 10px">
                                    When we say "GCNT", "we", "us", or "our", we mean GCNT. When we say "you", "your", "client", or "purchaser", we mean you,
                                    the user of our products or services.<br><br>

                                    When we say "network" or "company" we mean the legal entity that is using any GCNT products or services.<br><br>

                                    When we say "products" or "services" in these terms, we mean GCNT services, projects, and other products.<br><br>

                                    When we say "chargebacks", we mean money that is being reclaimed by the purchaser of the product
                                    or a sudden cancellation of the product without proper compensation for any made hours.
                                </p>
                            </div>
                        </div>

                        <div class="cz-col-12">
                            <div>
                                <h3 style="margin-bottom: 10px">
                                    1. General terms for all products and services
                                </h3>
                            </div>
                            <div class="entry-content" style="color: rgba(30,36,79,.74)">
                                <p style="margin-bottom:5px">
                                    By downloading, installing, using, or purchasing any of our products or services, you agree to the following terms:
                                </p>
                                <ol class="terms-list">
                                    <li>You are not allowed to redistribute or sell our products and services in any way, unless you have our written
                                        permission.
                                    </li>
                                    <li>You are not allowed to claim our products or services as your own.</li>
                                    <li>GCNT is not liable for any damages caused by our products or services.</li>
                                    <li>GCNT is not liable for any financial loss caused by our products or services.</li>
                                    <li>GCNT is not required to provide warranty for our products or services.</li>
                                    <li>We are not required to update GCNT products and services. However, we will try our best to support our products and
                                        services.
                                    </li>
                                    <li>Products or services that are marked outdated or unstable in any way, will not receive any support whatsoever.</li>
                                    <li>Chargebacks are not tolerated. Doing so may result in a ban from all platform. We expect all clients to have made an
                                        informed decision before purchasing any of our products or services.
                                        Legal action may be taken against clients who violate this term.
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="cz-col-12">

                            <div>
                                <h3 style="margin-bottom: 10px">
                                    2. Free products and services
                                </h3>
                            </div>
                            <div class="entry-content" style="color: rgba(30,36,79,.74)">
                                <p style="margin-bottom:5px">
                                    By downloading, installing, or using a free product or service from GCNT, on whatever platform, you agree to follow the
                                    terms as stated below:
                                </p>
                                <ol class="terms-list">
                                    <li>You are allowed to make changes to the product by altering the code (GitHub or decompiled), but are not allowed to
                                        change the product name or remove any of the original authors or any signs of affiliation to GCNT. It is prohibited to
                                        redistribute this altered product in
                                        any way.
                                    </li>
                                    <li>You are allowed to use free products and services on as many networks as you would like.</li>
                                </ol>
                            </div>
                        </div>

                        <div class="cz-col-12">
                            <div>
                                <h3 style="margin-bottom: 10px">
                                    3. Premium products and services
                                </h3>
                            </div>
                            <div class="entry-content" style="color: rgba(30,36,79,.74)">
                                <p style="margin-bottom:5px">
                                    By buying or using a premium resource from GCNT, on whatever platform, you agree to follow the terms as stated below:
                                </p>
                                <ol class="terms-list">
                                    <li id="3.1">You are only allowed to use the product within one network or company.
                                        Every network has to purchase a personal license of the project in order to gain authorization to use the product.
                                        If you require the use of product on multiple networks,
                                        please contact us in our <a href="https://www.gcnt.net/discord">Discord server</a>.
                                    </li>
                                    <li>Up to 25% of the payment issued by the client can be refunded within 14 days after delivery of the product
                                        at our sole discretion if we acknowledge any shortcomings of the product.
                                        Dissatisfied customers should contact us in our <a href="https://www.gcnt.net/discord">Discord server</a>
                                        at all times before any refunds will be provided.
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
                            </div>
                        </div>

                        <div class="cz-col-12">
                            <div>
                                <h3 style="margin-bottom: 10px">
                                    4. Commissioned products and services
                                </h3>
                            </div>
                            <div class="entry-content" style="color: rgba(30,36,79,.74)">
                                <p style="margin-bottom:5px">
                                    By ordering or using a custom product from GCNT, you agree to follow the terms as stated below:
                                </p>
                                <ol class="terms-list">
                                    <li>You are only allowed to use the product within one network or company (<a href="#3.1">see article 3.1</a>).</li>
                                    <li>No refunds will be given under any circumstance.</li>
                                    <li>This is by default a one-time service. We are not required to keep the product updated.</li>
                                    <li>We will keep developing the product or service requested until all primary features*<sup>2</sup> are functional.</li>
                                    <li id="3.8">Secondary features/requests*<sup>3</sup> are not included in the original price and will be charged separately.
                                        Only primary features are included in the price.
                                    </li>
                                    <li>
                                        Any issues that are caused by first-party faulty code will be corrected free of charge within 30 days after delivery.
                                        Any corrections due to third-party modifications/issues will be charged to the client.
                                    </li>
                                    <li>The following terms apply to payment(s):
                                        <ol>
                                            <li>Transactions will only be issued through PayPal or iDEAL.</li>
                                            <li>All prices, invoices, and other payments are in EUR (€).</li>
                                            <li>Transactions are solely done by invoicing the client. We will not accept other forms of payment.</li>
                                            <li>You will be charged hourly. Please see <a href="https://www.gcnt.net/pricing">our pricing</a> for the base
                                                rates.
                                            </li>
                                            <li>An estimate of development hours or cost can be provided in advance of the development to aid the client.
                                                This number is solely an estimate: the actual hours of development may vary, and thus will the final price.
                                                We can update invoices accordingly.
                                            </li>
                                            <li>A down payment with a minimum of 50% of the initial price must be paid before the development will start.</li>
                                            <li>When cancelling the project mid-development, any non-compensated development time is expected to be paid for.
                                                If the time is not fully paid for, we will assume that the client has issued a chargeback.
                                            </li>
                                            <li>The final product will not be provided to the client until all invoices have been fully paid.</li>
                                            <li>Invoices will be sent to the client and will always be issued by a verified GCNT member. If you are unsure about
                                                the invoice, please contact us in our <a href="https://www.gcnt.net/discord">Discord server</a>.
                                            </li>
                                        </ol>
                                    </li>
                                    <li>
                                        Unless agreed upon otherwise in a written statement, the client does not withhold copyright over the finished
                                        product or the source code even if they are provided with a copy of either. If you want to negotiate a special license,
                                        please contact us in our <a href="https://www.gcnt.net/discord">Discord server</a>.
                                    </li>
                                    <li>
                                        GCNT reserves the right to redistribute any products that have not been utilized by the client within 6 months after
                                        the delivery of the product.
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
                                <h3 style="margin-bottom: 10px">
                                    5. Privacy
                                </h3>
                            </div>
                            <div class="entry-content" style="color: rgba(30,36,79,.74)">
                                <p style="margin-bottom:5px">
                                    At GCNT, we take your privacy very seriously. Your personal information is not shared with any third parties.
                                    Your personal information may be shared with trusted staff members of GCNT and may be used to contact you or verify your
                                    identity.
                                </p>
                                <p style="text-decoration: underline">
                                    By agreeing with our terms, you also agree to the fact that we are allowed
                                    to change the terms and conditions at any time without notice.
                                </p>
                                <p>
                                    <i>Last update: September 4th, 2022 at 02:00 CET</i>
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