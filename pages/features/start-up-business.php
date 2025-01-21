<?php
$title = "Start-Up Business Account";
$description = "Opening a start-up business account is a crucial step in founding and expanding a successful business. Metax provides accounts for businesses equipped with time-saving tools and support designed to help your start-up flourish.";
$keyword = "start-up business account";
include '../../header.php';

?>

<style>
    /* Default styles for larger screens */
    .price-container {
        display: flex;
        flex-direction: row;
        align-items: flex-start;
    }

    .price-info {
        display: inline-block;
    }

    /* Styles for mobile screens */
    @media (max-width: 768px) {
        .price-container {
            flex-direction: column;
            align-items: center;
        }

        .price-info {
            display: block;
            text-align: center;
            margin-bottom: 10px;
            /* Optional: Adds some space between lines */
        }

        .price-info:last-child {
            margin-bottom: 0;
            /* Remove bottom margin for the last element */
        }
    }
</style>

<section class="container mt-5 mb-3" id="top-container">
    <div class="row">
        <div class="col-12">
            <section class="masthead">
                <div class="container">
                    <div class="masthead__inner">
                        <div class="masthead__content text-center">
                            <div>
                                <h1 class="masthead__title">
                                    <span class="animated-text-wrap">
                                        <span>
                                            Launch Your
                                        </span>
                                    </span>
                                    <span class="animated-text-wrap">
                                        <span>
                                            Start-Up
                                        </span>
                                    </span>
                                    <span class="animated-text-wrap">
                                        <span>
                                            Business Account
                                        </span>
                                    </span>
                                </h1>
                                <div class="fade-animation animated">
                                    <p>
                                        Opening a start-up business account is a crucial step in founding and expanding
                                        a successful business. Metax provides accounts for businesses equipped with
                                        time-saving tools and support designed to help your start-up flourish.
                                    </p>
                                </div>
                            </div>
                            <div class="fade-animation animated">
                                <a href="<?php echo $open_account_url ?>" target="_blank" class="btn-main">
                                    Open Account
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="slide-up-animation animated mt-5 mb-5">
                <div class="">
                    <div class="box">
                        <div class="row g-0">
                            <div class="col-xl-5 col-xxl-6">
                                <img class="box__image" src="<?php echo $url ?>assets/images/figure-9-bg-1.png"
                                    alt="Reasons to Have a Business Account For Start-Ups" loading="lazy">
                            </div>
                            <div class="col-xl-7 col-xxl-6">
                                <div class="box__content">
                                    <h2 class="section__title">
                                        Why Start-Ups Should Have a Business Account?
                                    </h2>
                                    <p>
                                        Deciding whether a start-up business account is necessary depends on various
                                        factors, including the type of business and personal financial management
                                        preferences. Metax has developed a payment platform for companies of all sizes
                                        and structures. The application process is designed to understand the unique
                                        requirements of a new business.
                                    </p>
                                    <p>
                                        For freelancers, self-employed individuals, or sole traders, the decision to
                                        open and use a start-up account is entirely up to you. However, for start-ups
                                        structured as limited companies or limited liability partnerships, a registered
                                        business account is mandatory, even if you are the sole employee.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <style>
                .carousel-indicators [data-bs-target] {

                    box-sizing: content-box;
                    flex: 0 1 auto;
                    width: 10px;
                    height: 10px;
                    padding: 0;
                    margin-right: 3px;
                    margin-left: 3px;
                    cursor: pointer;
                    background-color: black;
                    color: #f9f0ff background-clip: padding-box;
                    border: 0;
                    border-top: 10px solid transparent;
                    border-bottom: 10px solid transparent;
                    opacity: .5;
                    transition: opacity .6s ease;
                    border-radius: 50%;
                    margin-top: 300px;
                }

                @media (min-width: 768px) {
                    .container_mobile {
                        display: none;
                    }
                }

                @media (max-width: 768px) {
                    .container_desktop {
                        display: none;
                    }
                }
            </style>

            <section class="section mt-5 mb-5">
                <div class="">
                    <div class="box">
                        <div class="row g-0">
                            <div class="col-xl-3">
                                <img class="box__image box__image_short"
                                    src="<?php echo $url ?>assets/images/figure-v.png"
                                    alt="International Business Account" loading="lazy">
                                </picture>
                            </div>
                            <div class="col-xl-9 order-xl-first">
                                <div class="box__content">
                                    <div class="row gx-0 gy-4 gy-md-5">
                                        <div>
                                            <h2 class="section__title">
                                                Why this can be beneficial and even essential for the success of a small
                                                business:
                                            </h2>
                                            <ul class="row g-4 g-lg-5 box-card-list">
                                                <li class="col-12 col-md-6 col-xxl-5">
                                                    <div class="box-card">
                                                        A dedicated business account in the EU is opened in the name of
                                                        a company and is used solely for processing transactions related
                                                        to its activities.
                                                    </div>
                                                </li>
                                                <li class="col-12 col-md-6 col-xxl-5">
                                                    <div class="box-card">
                                                        Moreover, a business account offers specific features and
                                                        financial services tailored to meet the needs of companies and
                                                        sole traders.
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <div class="box-note box-note_mtop">
                                                <div>
                                                    <img class="box-note__image"
                                                        src="<?php echo $url ?>assets/images/globe.png"
                                                        alt="Metax offer lower fees">
                                                </div>
                                                <div>
                                                    <p class="text-center text-md-left">
                                                        Moreover, start-up business accounts in the EU offer more than
                                                        just basic day-to-day operations and transfers. They provide
                                                        additional benefits, management tools, and time-saving
                                                        advantages.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section text-center mt-5 mb-5">
                <div class="">
                    <div class="section__inner">
                        <div class="row row-cols-1 gx-0 gy-5 justify-content-center">
                            <div class="col-xl-8">
                                <h2 class="section__title">
                                    Meet All Your Business Needs with Metax
                                </h2>
                                <p>
                                    Now, Metax offers a range of payment solutions tailored to the specific needs of
                                    today's businesses, helping them simplify their financial operations and focus on
                                    growth. This provides you with access to a comprehensive set of financial tools for
                                    easy cash flow management:
                                </p>
                            </div>




                            <div class="col-xl-5 container_mobile">
                                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleCaptions"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions"
                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions"
                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions"
                                            data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    </div>
                                    <div class="carousel-inner" style="display:flex; gap:1.2rem;">
                                        <div class="carousel-item active">
                                            <div class="carousel-case__item">
                                                <div class="carousel-case__box">
                                                    <div>
                                                        <img class="carousel-case__icon"
                                                            src="<?php echo $url ?>assets/images/fully-digital-payment.png"
                                                            alt="Fully digital payment">
                                                    </div>
                                                </div>
                                                <span class="carousel-case__name">
                                                    Fully digital
                                                </span>
                                                <p class="carousel-case__text" style="margin-bottom:70px;">
                                                    The registration of business start-up accounts and onboarding
                                                    process is fully digital, from anywhere in the world
                                                </p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-case__item">
                                                <div class="carousel-case__box">
                                                    <div>
                                                        <img class="carousel-case__icon"
                                                            src="<?php echo $url ?>assets/images/secured-payment.png"
                                                            alt="Secured payment">
                                                    </div>
                                                </div>
                                                <span class="carousel-case__name">
                                                    Secured
                                                </span>
                                                <p class="carousel-case__text" style="margin-bottom:70px;">
                                                    All funds are secured by European Banks, so your capital is always
                                                    fully protected
                                                </p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-case__item">
                                                <div class="carousel-case__box">
                                                    <div>
                                                        <img class="carousel-case__icon"
                                                            src="<?php echo $url ?>assets/images/mobile-payment.png"
                                                            alt="Mobile payment">
                                                    </div>
                                                </div>
                                                <span class="carousel-case__name">
                                                    Mobile
                                                </span>
                                                <p class="carousel-case__text" style="margin-bottom:70px;">
                                                    Ability to make payments, export transaction history, and more on
                                                    the go using the iOS app or your smartphone browser
                                                </p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-case__item">
                                                <div class="carousel-case__box">
                                                    <div>
                                                        <img class="carousel-case__icon"
                                                            src="<?php echo $url ?>assets/images/secure-software-payment.png"
                                                            alt="Secure software payment">
                                                    </div>
                                                </div>
                                                <span class="carousel-case__name">
                                                    Secure software
                                                </span>
                                                <p class="carousel-case__text" style="margin-bottom:70px;">
                                                    The most secure software, developed by professionals according to
                                                    ISO 9001:2015 and ISO/IEC 27001:2013
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    </button>
                                </div>
                            </div>





                            <div class="container_desktop">
                                <div class="row g-5 justify-content-center">
                                    <div class="col-md-5 col-lg-5 col-xl-3">
                                        <div class="item">
                                            <div class="carousel-case__item">
                                                <div class="carousel-case__box">
                                                    <div>
                                                        <img class="carousel-case__icon"
                                                            src="<?php echo $url ?>assets/images/fully-digital-payment.png"
                                                            alt="Fully digital payment">
                                                    </div>
                                                </div>
                                                <span class="carousel-case__name">
                                                    Fully digital
                                                </span>
                                                <p class="carousel-case__text">
                                                    The registration of business start-up accounts and
                                                    onboarding process is fully digital, from anywhere in the
                                                    world
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-lg-5 col-xl-3">
                                        <div class="item">
                                            <div class="carousel-case__item">
                                                <div class="carousel-case__box">
                                                    <div>
                                                        <img class="carousel-case__icon"
                                                            src="<?php echo $url ?>assets/images/secured-payment.png"
                                                            alt="Secured payment">
                                                    </div>
                                                </div>
                                                <span class="carousel-case__name">
                                                    Secured
                                                </span>
                                                <p class="carousel-case__text">
                                                    All funds are secured by European Banks, so your capital is
                                                    always fully protected
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-lg-5 col-xl-3">
                                        <div class="item">
                                            <div class="carousel-case__item">
                                                <div class="carousel-case__box">
                                                    <div>
                                                        <img class="carousel-case__icon"
                                                            src="<?php echo $url ?>assets/images/mobile-payment.png"
                                                            alt="Mobile payment">
                                                    </div>
                                                </div>
                                                <span class="carousel-case__name">
                                                    Mobile
                                                </span>
                                                <p class="carousel-case__text">
                                                    Ability to make payments, export transaction history, and
                                                    more on the go using the iOS app or your smartphone browser
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-lg-5 col-xl-3">
                                        <div class="item">
                                            <div class="carousel-case__item">
                                                <div class="carousel-case__box">
                                                    <div>
                                                        <img class="carousel-case__icon"
                                                            src="<?php echo $url ?>assets/images/secure-software-payment.png"
                                                            alt="Secure software payment">
                                                    </div>
                                                </div>
                                                <span class="carousel-case__name">
                                                    Secure software
                                                </span>
                                                <p class="carousel-case__text">
                                                    The most secure software, developed by professionals
                                                    according to ISO 9001:2015 and ISO/IEC 27001:2013
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>









                            <div class="col-xl-10">
                                <p>
                                    Metax provides a flexible array of payment methods in 10 different currencies,
                                    enabling new businesses to manage their finances efficiently according to their
                                    specific needs. With transparent account fees, prices, and policies, Metax offers
                                    all the resources and support necessary for growth. You can also manage your account
                                    effortlessly and monitor all financial activities in real time.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section mt-5 mb-5">
                <div class="">
                    <div class="section__inner section__inner_extra">
                        <h2 class="section__title text-center">
                            Startup Pricing
                        </h2>
                        <p class="text-lead d-block" style="text-align: center; margin-bottom: 3rem;">You have your own
                            goals, unique approach, and specific needs—we understand that. Here is our most popular
                            package for startups. Contact us to check your eligibility.
                        </p>
                        <div class="row g-0 justify-content-center">
                            <div class="col-xl-12 col-xxl-9">
                                <div class="account-card__bottom" style="row-gap: 20px;">
                                    <ul class="account-card__price-list">
                                        <li class="account-card__price-item">
                                            <span class="account-card__price-name">
                                                Onboarding Fees (KYC/KYB)
                                            </span>
                                            <span class="account-card__price-value">
                                                <!-- *50 EUR  -->
                                                150 EUR
                                            </span>
                                        </li>
                                        <li class="account-card__price-item">
                                            <span class="account-card__price-name">
                                                Account Monthly Fee
                                            </span>
                                            <span class="account-card__price-value">
                                                30 EUR
                                            </span>
                                        </li>
                                        <li class="account-card__price-item">
                                            <span class="account-card__price-name">
                                                Annual turnover up to
                                            </span>
                                            <span class="account-card__price-value">
                                                125,000.00 EUR
                                            </span>
                                        </li>

                                    </ul>

                                    <!-- <span style="font-size: 12px; text-align: center;">
                                    *Our normal onboarding fee is EUR 100, This is a special offer valid upto 1st January 2025. And only applies to standard tariffs.
                                    </span> -->

                                </div>

                                <div class="tabs__content">
                                    <div class="tabs__pane tabs__pane_show">
                                        <table class="tables">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>
                                                        Incoming
                                                    </th>
                                                    <th>
                                                        Outgoing
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Internal
                                                    </td>
                                                    <td>
                                                        Free
                                                    </td>
                                                    <td>
                                                        Free
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        SEPA Instant/SEPA (EUR)
                                                    </td>
                                                    <td>
                                                        0.30%
                                                    </td>
                                                    <td>
                                                        0.45%<span style="color:red;">*</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Faster Payments, BACS, CHAPS (GBP)
                                                    </td>
                                                    <td>
                                                        <!-- 0.60% -->
                                                        0.50%
                                                    </td>
                                                    <td>
                                                        <!-- £ 45 + 0.60% -->
                                                        0.50%<span style="color:red;">**</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        SWIFT (USD, EUR, GBP,

                                                        JPY, AUD, HKD, SGD,

                                                        NZD, CNH, NZD, CHF,

                                                        NOK, DKK, SEK)
                                                    </td>
                                                    <td>
                                                        <!-- 0.60% -->
                                                        0.50%
                                                    </td>
                                                    <td>
                                                        <!-- $ 45 + 0.60% -->
                                                        0.50%<span style="color:red;">***</span>
                                                    </td>
                                                </tr>
                                                <!-- <tr>
                                                    <td>
                                                        TARGET2 (EUR)
                                                    </td>
                                                    <td>
                                                        15 EUR
                                                    </td>
                                                    <td>
                                                        30 EUR
                                                    </td>
                                                </tr> -->
                                                <tr>
                                                    <td>
                                                        Currency Exchange
                                                    </td>
                                                    <td>
                                                        <!-- 0.60% -->
                                                        0.50%
                                                    </td>
                                                    <td>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                 

                                    <div class="pt-3 px-3 justify-content-center d-flex">
                                        <div class="price-container" style="justify-content:flex-start;">
                                            <span class="price-info" style="font-size: 12px;margin-right:10px;">
                                                <span style="color:red;">*</span>Price charged will be EUR 2 or 0.45%
                                                (whichever is higher).
                                            </span>
                                            <span class="price-info" style="font-size: 12px;margin-right:10px;">
                                                <span style="color:red;">**</span>Price charged will be GBP 5 or 0.60%
                                                (whichever is higher).
                                            </span>
                                            <span class="price-info" style="font-size: 12px;margin-right:10px;">
                                                <span style="color:red;">***</span>Price charged will be GBP 45 or 0.60%
                                                (whichever is higher).
                                            </span>
                                        </div>
                                    </div>



                                    <!-- <div class="pt-3 px-3 justify-content-center d-flex">
                                        <div style="jusify-content:flex-start;">
                                                <span style="font-size: 12px;margin-right:10px;">
                                                    <span style="color:red;">*</span>Price charged will be EUR 2 or
                                                    0.45%
                                                    (whichever is higher).
                                                </span>
                                            <span style="font-size: 12px;margin-right:10px;">
                                                <span style="color:red;"> **</span>Price charged will be GBP 5 or
                                                0.60%
                                                (whichever is higher).
                                            </span>
                                        </div>
                                    </div>

                                    <div class="justify-content-center d-flex px-3">
                                        <div style="justify-content:flex-start">
                                            <div>
                                                <span style="font-size: 12px;margin-right:10px;">
                                                    <span style="color:red;"> ***</span>Price charged will be GBP 45 or
                                                    0.60%
                                                    (whichever is higher).
                                                </span>
                                            </div>
                                        </div>
                                    </div> -->


                                </div>


                                <div class="account-card__bottom mt-5" style="text-align:center;">
                                    <div>
                                        <p>The actual pricing may vary based on the specific characteristics of your
                                            business and could be higher or lower than the rates mentioned above. You
                                            will receive a precise pricing plan tailored to your business when you open
                                            your account.</p>
                                    </div>
                                    <div class="text-align:center;">
                                        <a href="<?php echo $open_account_url ?>" target="_blank" class="btn-main"
                                            style="width:fit-content">
                                            Open Account
                                        </a>
                                    </div>


                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </section>

            <section class="section mt-5 mb-5">
                <div class="">
                    <div class="box">
                        <div class="row g-0">
                            <div class="col-xl-3">

                                <img class="box__image box__image_short"
                                    src="<?php echo $url ?>assets/images/figure-15v.png"
                                    alt="How to Open a Start-Up Business Account With Metax" loading="lazy">

                            </div>
                            <div class="col-xl-9">
                                <div class="box__content">
                                    <div class="row gx-0 gy-4 gy-md-5">
                                        <div class="col-xxl-11">
                                            <h2 class="section__title">
                                                How to Set Up a Start-Up Business Account with Metax
                                            </h2>
                                            <p>
                                                The whole process takes no more than three days.
                                                All you have to do is follow a few simple steps:
                                            </p>
                                        </div>
                                        <div>
                                            <ul class="row g-3 g-md-4">
                                                <li class="col-md-6 col-xxl-5">
                                                    <div class="step">
                                                        <span class="step__number">
                                                            01
                                                        </span>
                                                        <p>
                                                            Register your profile and complete the online onboarding
                                                            process.
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="col-md-6 col-xxl-5">
                                                    <div class="step">
                                                        <span class="step__number">
                                                            02
                                                        </span>
                                                        <p>
                                                            Provide supporting documentation with your business details.
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="col-md-6 col-xxl-5">
                                                    <div class="step">
                                                        <span class="step__number">
                                                            03
                                                        </span>
                                                        <p>
                                                            Undergo the approval process and meet with your account
                                                            manager.
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section mt-5 mb-5">
                <div class="">
                    <div class="box">
                        <div class="row g-0">
                            <div class="col-xl-7 col-xxl-6">
                                <div class="box__content text-center text-xl-left">
                                    <h2 class="section__title">
                                        Today, Metax provides tailored assistance to every individual client.
                                    </h2>
                                    <p>
                                        Rather than relying on chatbots, our company assigns a dedicated manager to
                                        collaborate with you and address all your requests personally. This customized
                                        account service is accessible to businesses of any size or setup. We recognize
                                        the uniqueness of each situation, hence we dedicate the necessary time to
                                        identify the optimal solution tailored to your specific requirements.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-5 col-xxl-6">
                                <img class="box__image box__image_large"
                                    src="<?php echo $url ?>assets/images/modal-1.jpg"
                                    alt="Today Metax offers personalized support to each client" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section mt-5 mb-5">
                <div class="">
                    <div class="section__inner">
                        <div class="row gx-xxl-5 gy-5 gy-xl-0">
                            <div class="col-xl-5">
                                <div class="box__screen-wrapper">
                                    <div class="box__image box__image_large">
                                        <img class="box__image" src="<?php echo $url ?>assets/images/screen-9.png"
                                            alt="Opening a business account for UK residents has many advantages">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="row row-cols-1 gx-0 gy-5">
                                    <div>
                                        <h2 class="section__title-small">
                                            Documents Needed to Open a Start-Up Account
                                        </h2>
                                        <p>
                                            You won't need to spend time gathering documents or visiting a physical
                                            branch. To fully utilize the Metax service, you'll simply need to register
                                            and provide the following documents:
                                        </p>
                                    </div>
                                    <ul class="row row-cols-1 gy-4 gy-lg-5 box-card-list">
                                        <li>
                                            <div class="box-card">
                                                <h3 class="box-card__title">
                                                    Proof of Identification
                                                </h3>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="box-card">
                                                <h3 class="box-card__title">
                                                    Proof of EU Address
                                                </h3>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="box-card">
                                                <h3 class="box-card__title">
                                                    Business Registration Document
                                                </h3>
                                            </div>
                                        </li>

                                    </ul>

                                    <p>
                                        You may also be required to provide financial information about your business,
                                        such as its primary activity, number of employees, sources of income, projected
                                        turnover for the next 12 months, and tax status.
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section class="section section mt-5 mb-5" id="faq">
                <div>
                    <div class="row gy-4 gy-xl-0">
                        <div class="col-xl-5">
                            <div class="box-faq">
                                <div>
                                    <h2 class="box-faq__title">
                                        FAQ
                                    </h2>
                                </div>
                                <div class="text-center">
                                    <img class="box-faq-v2__image" src="<?php echo $url ?>assets/images/figure-12.png"
                                        width="512" height="621" alt="Metax FAQ" loading="lazy">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 order-xl-first">


                            <div class="accordion d-flex gap-4" id="accordionExample" style="flex-direction: column;">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            What is a Start-up Business Account?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>These accounts are tailored specifically for new businesses. They
                                                typically come with monthly fees and provide additional features
                                                designed to meet the unique needs of start-ups, such as enhanced support
                                                and online accounting tools.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Can Any Business Open a Start-up Account?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="accordion__content">
                                                To open a start-up business account, you must be a UK resident and
                                                operate a business entity like a sole trader, limited liability
                                                partnership, or limited company registered with Companies House.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Can I Open a Start-up Business Account if My Business is Not Registered Yet?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="accordion__content">
                                                In the UK, it is generally necessary to have a registered business
                                                before you can open a start-up business account.
                                            </p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            Can I Receive and Make International Payments Through My Start-up Business
                                            Account?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="accordion__content">
                                                Yes, it is generally possible. With Metax, you can make fast payments
                                                within the UK, as well as in Europe and the USA.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="section text-center mt-5 mb-5">
                <div class="">
                    <div class="cta-block cta-block_other">
                        <h2 class="cta-block__title">
                            Explore the tools and support available with our start-up account to foster your business
                            growth.
                        </h2>
                        <p>
                            Metax offers payment services with straightforward and equitable pricing.
                        </p>
                        <a href="<?php echo $open_account_url ?>" target="_blank" class="btn-main cta-block__link">
                            Open Account
                        </a>
                    </div>
                </div>
            </div>

            <!-- <section class="section text-center">
                <div class="container">
                    <div class="section__inner">
                        <h2 class="section__title">
                            Feedback from our clients and partners
                        </h2>
                        <div class="row g-0 justify-content-center">
                            <div class="col-xl-11 col-xxl-9 trustpilot-box">
                                <div
                                    style="padding:2rem 0;background-color:var(--bg-body);border-radius:calc(4*var(--ray));">
                                    <div class="trustpilot-widget" data-locale="en-US"
                                        data-template-id="5419b6a8b0d04a076446a9ad"
                                        data-businessunit-id="640f045157ac207eef722a68" data-style-height="24px"
                                        data-style-width="100%" data-theme="light" data-min-review-count="0"
                                        data-style-alignment="center" style="position: relative;"><iframe
                                            title="Customer reviews powered by Trustpilot" loading="auto"
                                            src="https://widget.trustpilot.com/trustboxes/5419b6a8b0d04a076446a9ad/index.html?templateId=5419b6a8b0d04a076446a9ad&amp;businessunitId=640f045157ac207eef722a68#locale=en-US&amp;styleHeight=24px&amp;styleWidth=100%25&amp;theme=light&amp;minReviewCount=0&amp;styleAlignment=center"
                                            style="position: relative; height: 24px; width: 100%; border-style: none; display: block; overflow: hidden;"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->


        </div>
    </div>
</section>

<?php
include '../../footer.php';
?>