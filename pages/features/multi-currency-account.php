<?php
$title = "Open a Multi-Currency Account";
$description = "Explore the advantages of multi-currency accounting for your business. Easily send and receive payments in the currencies that suit you and your customers best.";
$key_words = "multi-currency account, multi-currency business account, international business account, how to open international account";
include '../../header.php';




$supported_currencies = [
    ['name' => 'Australian Dollar (AUD)', 'flag' => 'au.svg'],
    ['name' => 'Indian Rupee (INR)', 'flag' => 'in.svg'],
    ['name' => 'Norwegian Krone (NOK)', 'flag' => 'no.svg'],
    ['name' => 'Swedish Krona (SEK)', 'flag' => 'se.svg'],

    ['name' => 'Bahrain Dinar (BHD)', 'flag' => 'bh.svg'],
    ['name' => 'Indonesian Rupiah (IDR)', 'flag' => 'id.svg'],
    ['name' => 'Omani Rial (OMR)', 'flag' => 'om.svg'],
    ['name' => 'Swiss Franc (CHF)', 'flag' => 'ch.svg'],

    ['name' => 'Bulgarian Lev (BGN)', 'flag' => 'bg.svg'],
    ['name' => 'Israeli Shekel (ILS)', 'flag' => 'il.svg'],
    ['name' => 'Philippine Peso (PHP)', 'flag' => 'ph.svg'],
    ['name' => 'Thai Baht (THB)', 'flag' => 'th.svg'],

    ['name' => 'Canadian Dollar (CAD)', 'flag' => 'ca.svg'],
    ['name' => 'Japanese Yen (JPY)', 'flag' => 'jp.svg'],
    ['name' => 'Polish Zloty (PLN)', 'flag' => 'pl.svg'],
    ['name' => 'Turkish Lira (TRY)', 'flag' => 'tr.svg'],

    ['name' => 'Chinese Yuan (CNY)', 'flag' => 'cn.svg'],
    ['name' => 'Kenyan Shilling (KES)', 'flag' => 'ke.svg'],
    ['name' => 'Qatar Rial (QAR)', 'flag' => 'qa.svg'],
    ['name' => 'Ugandan Shilling (UGX)', 'flag' => 'ug.svg'],

    ['name' => 'Czech Koruna (CZK)', 'flag' => 'cz.svg'],
    ['name' => 'Kuwait Dinar (KWD)', 'flag' => 'kw.svg'],
    ['name' => 'Romanian Leu (RON)', 'flag' => 'ro.svg'],
    ['name' => 'UK Sterling (GBP)', 'flag' => 'gb.svg'],

    ['name' => 'Danish Krone (DKK)', 'flag' => 'dk.svg'],
    ['name' => 'Malaysian Ringgit (MYR)', 'flag' => 'my.svg'],
    ['name' => 'Saudi Riyal (SAR)', 'flag' => 'sa.svg'],
    

    ['name' => 'Euro (EUR)', 'flag' => 'eu.svg'],
    ['name' => 'Mexican Peso (MXN)', 'flag' => 'mx.svg'],
    ['name' => 'Singapore Dollar (SGD)', 'flag' => 'sg.svg'],
    ['name' => 'US Dollar (USD)', 'flag' => 'us.svg'],

    ['name' => 'Hong Kong Dollar (HKD)', 'flag' => 'hk.svg'],
    ['name' => 'New Zealand Dollar (NZD)', 'flag' => 'nz.svg'],
    ['name' => 'South African Rand (ZAR)', 'flag' => 'za.svg'],
    ['name' => 'Hungarian Forint (HUF)', 'flag' => 'hu.svg'],
    ['name' => 'United Arab Emirates Dirham (AED)', 'flag' => 'ae.svg'],
];






?>

<section class="container mt-5 mb-3" id="top-container">
    <div class="row">
        <div class="col-12">
            <section class="masthead">
                <div>
                    <div class="masthead__inner">
                        <div class="masthead__content text-center">
                            <div>
                                <h1 class="masthead__title">
                                    <span class="animated-text-wrap">
                                        <span>
                                            Open
                                        </span>
                                    </span>
                                    <span class="animated-text-wrap">
                                        <span>
                                            Multi-Currency
                                        </span>
                                    </span>
                                    <span class="animated-text-wrap">
                                        <span>
                                            Account
                                        </span>
                                    </span>
                                </h1>
                                <p class="fade-animation animated">
                                    Explore the advantages of multi-currency accounting for your business. Easily send
                                    and receive payments in the currencies that suit you and your customers best.Send
                                    and receive money in 38 currencies. <br> Expand into new global territories with
                                    same-day
                                    and next-working-day transfers.
                                </p>
                            </div>
                            <div class="fade-animation animated">
                                <a href="<?php echo $open_account_url ?>" target="__blank" class="btn-main">
                                    Open Account
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div>
                                <p class="visa_card_title text-center" style="font-weight:800;padding-bottom:70px">
                                    Currencies We Support

                                </p>
                            </div>
                            <?php foreach ($supported_currencies as $currency): ?>
                                <div class="col-12 col-md-6 col-lg-4 col-xl-3 text-center">
                                    <div class="pt-3 pb-3 d-flex ">
                                        <img src="<?php echo $url ?>assets/images/square-flags/<?php echo $currency['flag']; ?>"
                                            alt="<?php echo $currency['name']; ?>"
                                            style="width: 50px; height: auto;padding-right:10px">
                                        <div>
                                            <span style="font-size:16px"><?php echo $currency['name']; ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="d-none">
                            <div class="masthead__image masthead__image_shadow slide-up-animation animated">
                                <img src="<?php echo $url ?>assets/images/multiple-currency-account.png"
                                    alt="Open a Multiple Currency Account" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="section__inner ">
                <p class="visa_card_title text-center" style="font-weight:800;padding-bottom:70px">
                    Business Industries Already Benefiting from Metax Payment's Features
                </p>
                <div class="row gx-5 gy-4">
                    <div class="col-xl-6" style="display:flex;flex-direction:column">
                        <div class="row p-3 flex-grow-1"
                            style="background-color:white;border-radius:20px;box-shadow:0 4px 38px 0 rgba(143, 39, 199, 0.10)">
                            <div class="row">
                                <div class="col-xl-8 offset-xl-4"
                                    style="padding-top: 20px;align-items: center;display: flex;">
                                    <h3 class="pluses-v3__title" style="font-weight:900">Ecommerce</h3>
                                </div>
                            </div>

                            <div class="col-xl-4 align-items-center d-flex">
                                <img src="<?php echo $url ?>assets/images/ecommerce-icon.png" alt="Metax Image 2"
                                    height="200px" width="200px">
                            </div>
                            <div class="col-xl-8" style="padding-bottom:10px">
                                <div class="pt-3 pb-3">
                                    <div class="d-flex pb-2">
                                        <div>
                                            <img src="<?php echo $url ?>assets/images/figure-4-small.png"
                                                style="height:20px;width:20px" alt="Metax Image 1">
                                        </div>
                                        <span style="padding-top:2px;padding-left:10px">Web Stores</span>
                                    </div>

                                    <div class="d-flex pb-2">
                                        <div>
                                            <img src="<?php echo $url ?>assets/images/figure-4-small.png"
                                                style="height:20px;width:20px" alt="Metax Image 1">
                                        </div>
                                        <span style="padding-top:2px;padding-left:10px">Dropshipping</span>
                                    </div>

                                    <div class="d-flex">
                                        <div>
                                            <img src="<?php echo $url ?>assets/images/figure-4-small.png"
                                                style="height:20px;width:20px" alt="Metax Image 1">
                                        </div>
                                        <span style="padding-top:2px;padding-left:10px">Goods and
                                            Services</span>
                                    </div>
                                </div>
                            </div>


                            <div class="text-center" style="margin-top: auto;padding-bottom:30px">
                                <a href="<?php echo $url ?>pages/features/ecommerce-industry"
                                    style="padding: 10px 20px; outline: 2px solid purple; border-radius: 20px;">Learn
                                    More</a>
                            </div>
                        </div>

                    </div>


                    <div class="col-xl-6" style="display:flex;flex-direction:column">
                        <div class="row p-3 flex-grow-1"
                            style="background-color:white;border-radius:20px;box-shadow:0 4px 38px 0 rgba(143, 39, 199, 0.10)">
                            <div class="row">
                                <div class="col-xl-8 offset-xl-4"
                                    style="padding-top: 20px;align-items: center;display: flex;">
                                    <h3 class="pluses-v3__title" style="font-weight:900">
                                        Corporates
                                    </h3>
                                </div>
                            </div>

                            <div class="col-xl-4 align-items-center d-flex">
                                <img src="<?php echo $url ?>assets/images/corporate-icon.png" alt="Metax Image 2"
                                    height="200px" width="200px">
                            </div>
                            <div class="col-xl-8" style="padding-bottom:10px">

                                <div class="pt-3 pb-3">
                                    <div class="d-flex pb-2">
                                        <div>
                                            <img src="<?php echo $url ?>assets/images/figure-4-small.png"
                                                style="height:20px;width:20px" alt="Metax Image 1">
                                        </div>
                                        <span style="padding-top:2px;padding-left:10px">Professional Services
                                            Firms</span>
                                    </div>

                                    <div class="d-flex pb-2">
                                        <div>
                                            <img src="<?php echo $url ?>assets/images/figure-4-small.png"
                                                style="height:20px;width:20px" alt="Metax Image 1">
                                        </div>
                                        <span style="padding-top:2px;padding-left:10px">Legal Firms</span>
                                    </div>

                                    <div class="d-flex">
                                        <div>
                                            <img src="<?php echo $url ?>assets/images/figure-4-small.png"
                                                style="height:20px;width:20px" alt="Metax Image 1">
                                        </div>
                                        <span style="padding-top:2px;padding-left:10px">Corporate Structuring
                                            Services</span>
                                    </div>
                                </div>
                            </div>


                            <div class="text-center" style="margin-top: auto;padding-bottom:30px">
                                <a href="<?php echo $url ?>pages/features/corporate-fund-administrators"
                                    style="padding: 10px 20px; outline: 2px solid purple; border-radius: 20px;">Learn
                                    More</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-6" style="display:flex;flex-direction:column">
                        <div class="row p-3 flex-grow-1"
                            style="background-color:white;border-radius:20px;box-shadow:0 4px 38px 0 rgba(143, 39, 199, 0.10)">
                            <div class="row">
                                <div class="col-xl-8 offset-xl-4"
                                    style="padding-top: 20px;align-items: center;display: flex;">
                                    <h3 class="pluses-v3__title" style="font-weight:900">Travel & Tourism</h3>
                                </div>
                            </div>

                            <div class="col-xl-4 align-items-center d-flex">
                                <img src="<?php echo $url ?>assets/images/travel-icon.png" alt="Metax Image 2"
                                    height="200px" width="200px">
                            </div>
                            <div class="col-xl-8" style="padding-bottom:10px">

                                <div class="pt-3 pb-3">
                                    <div class="d-flex pb-2">
                                        <div>
                                            <img src="<?php echo $url ?>assets/images/figure-4-small.png"
                                                style="height:20px;width:20px" alt="Metax Image 1">
                                        </div>
                                        <span style="padding-top:2px;padding-left:10px">Tourism and Hospitality Agencies
                                        </span>
                                    </div>

                                    <div class="d-flex pb-2">
                                        <div>
                                            <img src="<?php echo $url ?>assets/images/figure-4-small.png"
                                                style="height:20px;width:20px" alt="Metax Image 1">
                                        </div>
                                        <span style="padding-top:2px;padding-left:10px">Tourism organizations
                                        </span>
                                    </div>

                                    <div class="d-flex">
                                        <div>
                                            <img src="<?php echo $url ?>assets/images/figure-4-small.png"
                                                style="height:20px;width:20px" alt="Metax Image 1">
                                        </div>
                                        <span style="padding-top:2px;padding-left:10px">Tour operator</span>
                                    </div>
                                </div>


                            </div>


                            <div class="text-center" style="margin-top: auto;padding-bottom:30px">
                                <a href="<?php echo $url ?>pages/features/travel-industry"
                                    style="padding: 10px 20px; outline: 2px solid purple; border-radius: 20px;">Learn
                                    More</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-6" style="display:flex;flex-direction:column">
                        <div class="row p-3 flex-grow-1"
                            style="background-color:white;border-radius:20px;box-shadow:0 4px 38px 0 rgba(143, 39, 199, 0.10)">
                            <div class="row">
                                <div class="col-xl-8 offset-xl-4"
                                    style="padding-top: 20px;align-items: center;display: flex;">
                                    <h3 class="pluses-v3__title" style="font-weight:900">Technology</h3>
                                </div>
                            </div>


                            <div class="col-xl-4 align-items-center d-flex">
                                <img src="<?php echo $url ?>assets/images/tech-icon.png" alt="Metax Image 2"
                                    height="200px" width="200px">
                            </div>
                            <div class="col-xl-8" style="padding-bottom:10px">

                                <div class="pt-3 pb-3">
                                    <div class="d-flex pb-2">
                                        <div>
                                            <img src="<?php echo $url ?>assets/images/figure-4-small.png"
                                                style="height:20px;width:20px" alt="Metax Image 1">
                                        </div>
                                        <span style="padding-top:2px;padding-left:10px">Software Development
                                            Partners</span>
                                    </div>

                                    <div class="d-flex pb-2">
                                        <div>
                                            <img src="<?php echo $url ?>assets/images/figure-4-small.png"
                                                style="height:20px;width:20px" alt="Metax Image 1">
                                        </div>
                                        <span style="padding-top:2px;padding-left:10px">IT Outsourcing
                                            Companies</span>
                                    </div>

                                    <div class="d-flex">
                                        <div>
                                            <img src="<?php echo $url ?>assets/images/figure-4-small.png"
                                                style="height:20px;width:20px" alt="Metax Image 1">
                                        </div>
                                        <span style="padding-top:2px;padding-left:10px">Telecommunications
                                            Providers</span>
                                    </div>
                                </div>


                            </div>


                            <div class="text-center" style="margin-top: auto;padding-bottom:30px">
                                <a href="<?php echo $url ?>pages/features/it-industry"
                                    style="padding: 10px 20px; outline: 2px solid purple; border-radius: 20px;">Learn
                                    More</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-6" style="display:flex;flex-direction:column">
                        <div class="row p-3 flex-grow-1"
                            style="background-color:white;border-radius:20px;box-shadow:0 4px 38px 0 rgba(143, 39, 199, 0.10)">
                            <div class="row">
                                <div class="col-xl-8 offset-xl-4"
                                    style="padding-top: 20px;align-items: center;display: flex;">
                                    <h3 class="pluses-v3__title" style="font-weight:900">Import & Export</h3>
                                </div>
                            </div>


                            <div class="col-xl-4 align-items-center d-flex">
                                <img src="<?php echo $url ?>assets/images/import-export-icon.png" alt="Metax Image 2"
                                    height="200px" width="200px">
                            </div>
                            <div class="col-xl-8" style="padding-bottom:10px">

                                <div class="pt-3 pb-3">
                                    <div class="d-flex pb-2">
                                        <div>
                                            <img src="<?php echo $url ?>assets/images/figure-4-small.png"
                                                style="height:20px;width:20px" alt="Metax Image 1">
                                        </div>
                                        <span style="padding-top:2px;padding-left:10px">Export Management
                                            Companies</span>
                                    </div>

                                    <div class="d-flex pb-2">
                                        <div>
                                            <img src="<?php echo $url ?>assets/images/figure-4-small.png"
                                                style="height:20px;width:20px" alt="Metax Image 1">
                                        </div>
                                        <span style="padding-top:2px;padding-left:10px">Import/Export
                                            Merchants</span>
                                    </div>

                                    <div class="d-flex">
                                        <div>
                                            <img src="<?php echo $url ?>assets/images/figure-4-small.png"
                                                style="height:20px;width:20px" alt="Metax Image 1">
                                        </div>
                                        <span style="padding-top:2px;padding-left:10px">Freight Forwarders</span>
                                    </div>
                                </div>


                            </div>


                            <div class="text-center" style="margin-top: auto;padding-bottom:30px">
                                <a href="<?php echo $url ?>pages/features/import-export-industry"
                                    style="padding: 10px 20px; outline: 2px solid purple; border-radius: 20px;">Learn
                                    More</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-6" style="display:flex;flex-direction:column">
                        <div class="row p-3 flex-grow-1"
                            style="background-color:white;border-radius:20px;box-shadow:0 4px 38px 0 rgba(143, 39, 199, 0.10)">
                            <div class="row">
                                <div class="col-xl-8 offset-xl-4"
                                    style="padding-top: 20px;align-items: center;display: flex;">
                                    <h3 class="pluses-v3__title" style="font-weight:900">Construction</h3>
                                </div>
                            </div>


                            <div class="col-xl-4 align-items-center d-flex">
                                <img src="<?php echo $url ?>assets/images/construction-icon.png" alt="Metax Image 2"
                                    height="200px" width="200px">
                            </div>
                            <div class="col-xl-8" style="padding-bottom:10px">

                                <div class="pt-3 pb-3">
                                    <div class="d-flex pb-2">
                                        <div>
                                            <img src="<?php echo $url ?>assets/images/figure-4-small.png"
                                                style="height:20px;width:20px" alt="Metax Image 1">
                                        </div>
                                        <span style="padding-top:2px;padding-left:10px">Interior Decorators</span>
                                    </div>

                                    <div class="d-flex pb-2">
                                        <div>
                                            <img src="<?php echo $url ?>assets/images/figure-4-small.png"
                                                style="height:20px;width:20px" alt="Metax Image 1">
                                        </div>
                                        <span style="padding-top:2px;padding-left:10px">Builders & Developers</span>
                                    </div>

                                    <div class="d-flex">
                                        <div>
                                            <img src="<?php echo $url ?>assets/images/figure-4-small.png"
                                                style="height:20px;width:20px" alt="Metax Image 1">
                                        </div>
                                        <span style="padding-top:2px;padding-left:10px">Consultant Firms</span>
                                    </div>
                                </div>


                            </div>


                            <div class="text-center" style="margin-top: auto;padding-bottom:30px">
                                <a href="<?php echo $url ?>pages/features/construction-industry"
                                    style="padding: 10px 20px; outline: 2px solid purple; border-radius: 20px;">Learn
                                    More</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-6" style="display:flex;flex-direction:column;">
                        <div class="row p-3 flex-grow-1"
                            style="background-color:white;border-radius:20px;box-shadow:0 4px 38px 0 rgba(143, 39, 199, 0.10); ">
                            <div class="row">
                                <div class="col-xl-8 offset-xl-4"
                                    style="padding-top: 20px;align-items: center;display: flex;">
                                    <h3 class="pluses-v3__title" style="font-weight:900">Oil & Gas</h3>
                                </div>
                            </div>


                            <div class="col-xl-4 align-items-center d-flex">
                                <img src="<?php echo $url ?>assets/images/oil-gas-icon.png" alt="Metax Image 2"
                                    height="200px" width="200px">
                            </div>
                            <div class="col-xl-8" style="padding-bottom:10px">

                                <div class="pt-3 pb-3">
                                    <div class="d-flex pb-2">
                                        <div>
                                            <img src="<?php echo $url ?>assets/images/figure-4-small.png"
                                                style="height:20px;width:20px" alt="Metax Image 1">
                                        </div>
                                        <span style="padding-top:2px;padding-left:10px">Oilfield Services Company
                                        </span>
                                    </div>
                                    <div class="d-flex pb-2">
                                        <div>
                                            <img src="<?php echo $url ?>assets/images/figure-4-small.png"
                                                style="height:20px;width:20px" alt="Metax Image 1">
                                        </div>
                                        <span style="padding-top:2px;padding-left:10px">Drilling Contractors
                                        </span>
                                    </div>
                                    <div class="d-flex">
                                        <div>
                                            <img src="<?php echo $url ?>assets/images/figure-4-small.png"
                                                style="height:20px;width:20px" alt="Metax Image 1">
                                        </div>
                                        <span style="padding-top:2px;padding-left:10px">Petrochemical Company</span>
                                    </div>
                                </div>
                            </div>



                            <div class="text-center" style="margin-top: auto;padding-bottom:30px">
                                <a href="<?php echo $url ?>pages/features/oil-gas-industry"
                                    style="padding: 10px 20px; outline: 2px solid purple; border-radius: 20px;">Learn
                                    More</a>
                            </div>

                        </div>
                    </div>


                    <div class="col-xl-6" style="display:flex;flex-direction:column">
                        <div class="row p-3 flex-grow-1"
                            style="background-color:white;border-radius:20px;box-shadow:0 4px 38px 0 rgba(143, 39, 199, 0.10)">
                            <div class="row">
                                <div class="col-xl-8 offset-xl-4"
                                    style="padding-top: 20px;align-items: center;display: flex;">
                                    <h3 class="pluses-v3__title" style="font-weight:900">Real Estate</h3>
                                </div>
                            </div>


                            <div class="col-xl-4 align-items-center d-flex">
                                <img src="<?php echo $url ?>assets/images/real-estate-icon.png" alt="Metax Image 2"
                                    height="200px" width="200px">
                            </div>
                            <div class="col-xl-8" style="padding-bottom:10px">

                                <div class="pt-3 pb-3">
                                    <div class="d-flex pb-2">
                                        <div>
                                            <img src="<?php echo $url ?>assets/images/figure-4-small.png"
                                                style="height:20px;width:20px" alt="Metax Image 1">
                                        </div>
                                        <span style="padding-top:2px;padding-left:10px">Sales and Marketing</span>
                                    </div>

                                    <div class="d-flex pb-2">
                                        <div>
                                            <img src="<?php echo $url ?>assets/images/figure-4-small.png"
                                                style="height:20px;width:20px" alt="Metax Image 1">
                                        </div>
                                        <span style="padding-top:2px;padding-left:10px">Property Management
                                        </span>
                                    </div>

                                    <div class="d-flex">
                                        <div>
                                            <img src="<?php echo $url ?>assets/images/figure-4-small.png"
                                                style="height:20px;width:20px" alt="Metax Image 1">
                                        </div>
                                        <span style="padding-top:2px;padding-left:10px"> Leasing Consultant</span>
                                    </div>
                                </div>

                            </div>

                            <div class="text-center" style="margin-top: auto;padding-bottom:30px">
                                <a href="<?php echo $url ?>pages/features/real-estate-industry"
                                    style="padding: 10px 20px; outline: 2px solid purple; border-radius: 20px;">Learn
                                    More</a>
                            </div>
                        </div>

                    </div>
                </div>



            </div>
        </div>

        <div class="section__inner section__inner_secondary d-none">
            <p class="section__title text-center">
                Elevate your business with a Multi-Currency Account
            </p>
            <div class="row g-0 justify-content-center">
                <div class="col-sm-10 col-md-12">
                    <ul class="box-carousel row row-cols-md-2 row-cols-xl-3 g-5">



                        <li>
                            <div class="box-carousel__item">
                                <div>
                                    <img class="box-carousel__icon"
                                        src="<?php echo $url ?>assets/images/mission-2-1.png" alt="Metax Image 1"
                                        loading="lazy" style="transform: rotate(180deg);">
                                </div>
                                <div>
                                    <h3 class="box-carousel__title">
                                        Bespoke
                                    </h3>
                                    <p>
                                        Each client is allocated an expert currency exchange consultant who supports
                                        their specific needs, with timely market analysis and valuable strategic
                                        solutions.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="box-carousel__item">
                                <div>
                                    <img class="box-carousel__icon"
                                        src="<?php echo $url ?>assets/images/mission-2-1.png" alt="Metax Image 2"
                                        loading="lazy">
                                </div>
                                <div>
                                    <h3 class="box-carousel__title">
                                        Secure
                                    </h3>
                                    <p>
                                        We adopt stringent standards of risk management, governance and regulatory
                                        compliance to ensure your funds are transferred in the safest way possible.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="box-carousel__item">
                                <div>
                                    <img class="box-carousel__icon box-carousel__icon_last"
                                        src="<?php echo $url ?>assets/images/mission-2-1.png" alt="Metax Image 3"
                                        loading="lazy" style="transform: rotate(90deg);">
                                </div>
                                <div>
                                    <h3 class="box-carousel__title">
                                        Transparent
                                    </h3>
                                    <p>
                                        We clearly communicate all pricing charge upfront so you aren’t surprised by
                                        any hidden bank charges after the transaction takes place.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="section  mt-5 mb-3 d-none">
            <div>
                <div class="box">
                    <div class="row g-0">
                        <div class="col-xl-3">
                            <img class="box__image box__image_short box__image_right"
                                src="<?php echo $url ?>assets/images/figure-9-bg-2.png"
                                alt="International Business Account" loading="lazy">
                        </div>
                        <div class="col-xl-9 order-xl-first">
                            <div class="box__content">
                                <h2 class="section__title">
                                    Top multi-currency business account offered by Metax:
                                </h2>
                                <ul class="row row-cols-1 gy-4 gy-lg-5 box-card-list">
                                    <li>
                                        <div class="box-card">
                                            <h3 class="box-card__title">
                                                Enhance relationships with customers and suppliers by opening a
                                                foreign currency account
                                            </h3>
                                            <p>
                                                By providing them with a single account number regardless of
                                                currency, you streamline their experience and reduce unnecessary
                                                hassle. This also minimizes confusion in transaction details,
                                                ultimately preventing payment delays.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="box-card">
                                            <h3 class="box-card__title">
                                                Streamline your bookkeeping process
                                            </h3>
                                            <p>
                                                With the ability to bill customers and receive payments in the same
                                                currency, you eliminate the need for extensive preparation of
                                                reconciliation statements and other reports.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="box-card">
                                            <h3 class="box-card__title">
                                                Reduce currency exchange fees with a multi-currency account
                                            </h3>
                                            <p>
                                                Unlike a mono-currency account, where incoming payments in different
                                                currencies require conversion and may incur additional fees, a
                                                multi-currency account accepts funds without extra manipulation.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="box-card">
                                            <h3 class="box-card__title">
                                                Manage your cash flow effectively
                                            </h3>
                                            <p>
                                                With all international payments directed to one account regardless
                                                of currency, you can easily track transactions, maintain transparent
                                                reporting, and swiftly furnish financial information to various
                                                authorities.
                                            </p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section class="d-block mt-5 mb-3">
            <div class="ifx-row ifx-row-content_grid ifx-row-3" style="--bg-page:#f5f6f9;">
                <style>
                    @media (min-width:992px) {
                        div#main section .ifx-row.ifx-row-3 .ifx-row-wrapper {
                            padding-top: 0;
                        }
                    }
                </style>
                <style>
                    div#main section .ifx-row.ifx-row-3,
                    div#main section .ifx-row.ifx-row-3 a.button:after {
                        background-color: #F5F6F9;
                    }
                </style>
                <div class="ifx-row-wrapper">
                    <div class="container mt-3 pt-3 p-5" style="background-color: #f9f0ff;border-radius: 20px;">
                        <div class="tiles__wrapper tiles__wrapper-new">

                            <div class="row">
                                <div class="col-12 pt-5 pb-5 text-center">
                                    <div class="text-center">
                                        <h2 class="section__title" style="margin-bottom:30px;">What Our Clients Use
                                            Our Solution For</h2>
                                    </div>
                                </div>
                            </div>


                            <div class="row">


                                <div class="col-12 col-md-6 col-lg">

                                    <div class="tile h-100 d-md-flex flex-md-column p-5"
                                        style="background-color: #ffffff; background-image: url('');border-radius:20px;">
                                        <div class="tile__content text-' . $text_colour . '">
                                            <img width="628" height="410"
                                                src="<?php echo $url ?>assets/images/Global-payroll.png"
                                                class="img-fluid tile-image mb-4" alt="" decoding="async"
                                                fetchpriority="high" sizes="(max-width: 628px) 100vw, 628px">

                                            <div class="text-center">
                                                <h4 style="font-weight:700">Global <br> Payroll</h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="col-12 col-md-6 col-lg">

                                    <div class="tile h-100 d-md-flex flex-md-column p-5"
                                        style="background-color: #ffffff; background-image: url('');border-radius:20px;">
                                        <div class="tile__content text-' . $text_colour . '">
                                            <img width="629" height="410"
                                                src="<?php echo $url ?>assets/images/International-supplier-payments.png"
                                                class="img-fluid tile-image mb-4" alt="" decoding="async"
                                                sizes="(max-width: 629px) 100vw, 629px">
                                            <div class="text-center">
                                                <h4 style="font-weight:700">International Supplier Payments</h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="col-12 col-md-6 col-lg">

                                    <div class="tile h-100 d-md-flex flex-md-column p-5"
                                        style="background-color: #ffffff; background-image: url('');border-radius:20px;">
                                        <div class="tile__content text-' . $text_colour . '">
                                            <img width="706" height="455"
                                                src="<?php echo $url ?>assets/images/Multi-currency-scheduling.png"
                                                class="img-fluid tile-image mb-4" alt="" decoding="async"
                                                sizes="(max-width: 706px) 100vw, 706px">
                                            <div class="text-center">
                                                <h4 style="font-weight:700">Multi-Currency <br> Payment Scheduling</h4>
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


        <section class="d-block  mt-5 mb-3 ">
            <div class="p-5" style="background-color:#f9f0ff;border-radius:20px;">
                <div class="">
                    <div class="container">
                        <div class="row flex-md-row-reverse">
                            <div class="col-12 col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="image-text__image"><img width="616" height="500"
                                        src="<?php echo $url ?>assets/images/Corporate-FX.png"
                                        class="attachment-full size-full" alt="" decoding="async" fetchpriority="high"
                                        sizes="(max-width: 616px) 100vw, 616px"></div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-5 d-flex align-items-center">
                                <div class="image-text__introduction">
                                    <h2 class="section__title" style="margin-bottom:30px;">Corporate Clients </h2>
                                    <p>By taking the time to understand our clients’ specific objectives and
                                        priorities, we minimise the effects of currency fluctuations on their bottom
                                        line. Our expertise support businesses in a variety of areas, including but
                                        not limited to:<br>
                                        <br>
                                        • Paying international suppliers<br>
                                        • International expansion<br>
                                        • Mergers and acquisitions
                                    </p>
                                    <a href="https://metaxpayments.com/wallet/register-client" target="__blank"
                                        class="btn-main cta-block__link">
                                        Sign Up
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="d-block mt-5 mb-3  ">
            <div class="p-5" style="background-color:#f9f0ff;border-radius:20px;">
                <div class="">
                    <div class="container">
                        <div class="row ">
                            <div class="col-12 col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="image-text__image"><img width="620" height="501"
                                        src="<?php echo $url ?>assets/images/Private-FX.png"
                                        class="attachment-full size-full" alt="" decoding="async"
                                        sizes="(max-width: 620px) 100vw, 620px"></div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-5 d-flex align-items-center">
                                <div class="">
                                    <h2 class="section__title" style="margin-bottom:30px;">Private Clients </h2>
                                    <p>Transferring large amounts of money overseas can be an intimidating process.
                                        Seemingly small fluctuations in foreign exchange rates can dramatically
                                        impact the amount you pay. Our expert consultants can support you with:<br>
                                        <br>
                                        • Buying or selling a property abroad<br>
                                        • Transferring funds across borders<br>
                                        • Moving pensions or savings internationally<br>
                                    </p>
                                    <a href="https://metaxpayments.com/wallet/register-client" target="__blank"
                                        class="btn-main cta-block__link">
                                        Sign Up
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>








        <section class="section mt-5 mb-3">
            <div>
                <div class="box">
                    <div class="row g-0">
                        <div class="col-xl-3">

                            <img class="box__image box__image_short"
                                src="<?php echo $url ?>assets/images/figure-15v-2.png"
                                alt="How to Open International Account" loading="lazy">
                        </div>
                        <div class="col-xl-9">
                            <div class="box__content">
                                <div class="row row-cols-1 gx-0 gy-4 gy-md-5">
                                    <div>
                                        <h2 class="section__title">
                                            How to open a Multi-Currency Business Account:
                                        </h2>
                                        <p>
                                            <span style="font-weight:600">Ready to embrace a new approach to
                                                commerce?</span> <br> Don't delay opening an
                                            account that enables seamless receipt, storage, and transfer of funds
                                            across currencies. <br> With a quick and easy process, there's no reason to
                                            wait until tomorrow.
                                        </p>
                                    </div>
                                    <div>
                                        <ul class="row g-3 g-md-4">
                                            <li class="col-lg-6">
                                                <div class="step">
                                                    <span class="step__number">
                                                        01
                                                    </span>
                                                    <div>
                                                        <h3 class="step__title">
                                                            Sign up on the Metax website
                                                        </h3>
                                                        <p class="step__desc">
                                                            Sign up on the Metax website by providing your username,
                                                            password, and phone number in the designated fields.
                                                            Remember to select whether you're creating a personal or
                                                            business account. Then, proceed to receive the
                                                            verification code to complete the process.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-lg-6">
                                                <div class="step">
                                                    <span class="step__number">
                                                        02
                                                    </span>
                                                    <div>
                                                        <h3 class="step__title">
                                                            Proceed to add an <br> account
                                                        </h3>
                                                        <p class="step__desc">
                                                            Next, proceed to add an account by providing the
                                                            required details for either an individual or a company.
                                                            Upload scanned copies of the necessary documents, which
                                                            will vary depending on the type of account you selected
                                                            earlier.


                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="step">
                                                    <span class="step__number">
                                                        03
                                                    </span>
                                                    <div>
                                                        <h3 class="step__title">
                                                            Wait for confirmation for the created multi-currency
                                                            account
                                                        </h3>
                                                        <p class="step__desc">
                                                            After creating your multi-currency account, please await
                                                            confirmation, which may take several days due to the
                                                            verification process. Once confirmed, you'll receive
                                                            notification that your account is open. Should you have
                                                            any inquiries, feel free to reach out to your designated
                                                            personal manager for assistance.
                                                        </p>
                                                    </div>
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

        <section class="section mt-5 mb-5" id="faq">
            <div class="">
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
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What are the disadvantages of a multi-currency account?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>One major downside is the significant risk linked to exchange rate
                                            fluctuations. Additionally, there are typically lower interest rates and
                                            extra transaction fees to consider.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What is the benefit of a multi-currency account?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="accordion__content">
                                            These accounts enable swift and cost-effective international payments,
                                            provide 24/7 access to your funds from anywhere, streamline accounting
                                            processes, and enhance relationships with customers and suppliers.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        What is the minimum balance for a multi-currency account?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="accordion__content">
                                            Our online application process is swift and user-friendly, and
                                            typically, foreign currency account holders are not required to maintain
                                            a minimum balance.
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        How do I use a multi-currency account?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="accordion__content">
                                            These accounts can be utilized to receive or send money, as well as to
                                            hold savings in various currencies.
                                        </p>
                                    </div>
                                </div>
                            </div>



                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        What is the best foreign currency account?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="accordion__content">
                                            Metax provides the premier multi-currency business account. We
                                            ensure a straightforward and rapid registration process, continuous
                                            access to your account, and secure transactions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="section text-center mb-5">
            <div class="">
                <div class="cta-block cta-block_other">
                    <h2 class="cta-block__title">

                        Open a Metax <span style="font-weight:700;color:#542374">Multi-Currency Business Account</span>
                        and leave behind the hassle of international
                        payments.

                    </h2>
                    <a href="<?php echo $open_account_url ?>" target="__blank" class="btn-main cta-block__link">
                        Open Account
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>



<?php
include '../../footer.php';
?>