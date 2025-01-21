<?php
include '../../header.php';
?>

<section class="container mt-5 mb-3" id="top-container">
    <div class="row">
        <div class="col-12">
            <div class="row justify-content-center">
                <div class="col-lg-11">

                    <section class="masthead">
                        <div class="container">
                            <div class="masthead__inner">
                                <div class="masthead__content text-center">
                                    <div>
                                        <h1 class="masthead__title">
                                            <span class="animated-text-wrap">
                                                <span>
                                                    Seamless banking at
                                                </span>
                                            </span>
                                            <span class="animated-text-wrap">
                                                <span>
                                                    your fingertips
                                                </span>
                                            </span>
                                            <br>
                                            <span class="animated-text-wrap">
                                                <span>
                                                    with our app
                                                </span>
                                            </span>
                                        </h1>
                                        <div class="fade-animation animated">
                                            <p>
                                                Check your balance, make payments and manage your cards directly from
                                                your smartphone.
                                            </p>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-5">
                                            <img src="<?php echo $url ?>assets/images/play_store_qr_code.png" style="width:150px"
                                                alt="image">
                                                <div class="pt-3">
                                                <a href="https://play.google.com/store/apps/details?id=com.metaxpayments.bank" target="_blank"><img src="<?php echo $url ?>assets/images/google_play.png"
                                                style="width: 150px;" alt="image"></a>
                                                </div>
                                        </div>

                                        <div class="col-2">

                                        </div>

                                        <div class="col-5">
                                            <img src="<?php echo $url ?>assets/images/app_store_qr_code.png" style="width:150px"
                                                alt="image">
                                                <div class="pt-3">
                                                <a href="https://apps.apple.com/us/app/metax-payments/id6505099167" target="_blank"><img src="<?php echo $url ?>assets/images/app_store.png"
                                                style="width: 150px;" alt="image"></a>
                                                </div>
                                        </div>

                                    </div>


                                    <!-- <div
                                        class="button-group d-flex align-items-center flex-wrap pt-3 pb-3 justify-content-center">
                                        <a href="#"><img src="<?php echo $url ?>assets/images/google_play.png"
                                                style="width: 148px;" alt="image"></a>
                                        <a href="#"><img src="<?php echo $url ?>assets/images/app_store.png"
                                                style="width: 148px; height: 60px;" alt="image"></a>
                                    </div> -->

                                    <div style="text-align:center;" class="d-none">
                                        <a href="#" class="btn-main">
                                            Coming Soon
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>

        </div>
    </div>

    <div class="row pt-5 d-flex justify-content-center">
        <div class="row gy-4 gy-xl-0">
            <div class="col-xl-5">
                <div class="mini-block-v2 h-100">

                    <h2 class="mini-block__title">
                        Banking in your pocket
                        wherever you go
                    </h2>
                    <p>
                        With the MetaX app, you can easily meet all your daily banking needs – from checking your
                        account balance to sending payments on the fly, and much more.
                    </p>

                    <div>
                        <img class="mini-block__image" src="<?php echo $url ?>assets/images/ap-wallet-xxl.png"
                            width="400" height="400" alt="Why Metax" loading="lazy">
                    </div>
                </div>
            </div>


            <div class="col-xl-7">
                <div class="pluses-v2 row mb-3">
                    <div class="col-xl-6 mb-2">
                        <div class="pluses-vsitem" style="justify-content:flex-start;">

                            <div>
                                <h3 class="pluses-v2title" style="margin-top:30px;">
                                    Stay on top of your finances with a real-time payments list
                                </h3>

                                <!-- <span class="pluses-v3__badge">
                                    coming soon
                                </span> -->
                                <p style="margin-top:30px;">
                                    With a convenient interface, get the full picture by tracking all incoming and
                                    outgoing payments in real-time.
                                </p>

                            </div>

                        </div>
                    </div>
                    <div class="col-xl-6 mb-2">
                        <div class="pluses-vsitem" style="justify-content:flex-start;">
                            <div>
                                <h3 class="pluses-v2title" style="margin-top:30px;">
                                    Send payments effortlessly
                                </h3>

                                <!-- <span class="pluses-v3__badge">
                                    coming soon
                                </span> -->
                                <p style="margin-top:30px;">
                                    A colleague paid for your lunch? Get even immediately. With just a few taps, send
                                    money from any of your accounts.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="pluses-v2 row">
                    <div class="col-xl-6 mb-2">
                        <div class="pluses-vsitem" style="justify-content:flex-start;">
                            <div>
                                <h3 class="pluses-v2title" style="margin-top:30px;">
                                    Manage your business and private cards
                                </h3>

                                <span class="pluses-v3__badge">
                                    coming soon
                                </span>
                                <p style="margin-top:30px;">
                                    Seamlessly access and manage all your Metax VISA Debit cards via the app. Check
                                    the card’s PIN, status, and validity, or freeze the card, if you need to.
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-6 mb-2">
                        <div class="pluses-vsitem" style="justify-content:flex-start;">
                            <div>
                                <h3 class="pluses-v2title" style="margin-top:30px;">
                                    Get secure authentication
                                </h3>

                                <!-- <span class="pluses-v3__badge">
                                    coming soon
                                </span> -->
                                <p style="margin-top:30px;">
                                    The Metax app ensures secure and hassle-free authentication for logging in to
                                    your Online Banking system: receive an authentication code and easily approve it via
                                    the app.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include '../../footer.php';
?>