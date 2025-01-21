<?php
$title = 'Contact Us';
$description = 'Have queries, complaints, or feedback? We are here to help and look forward to serving you.';
$keywords = 'contact us, support email, live chat, whatsapp';
include '../header.php';

$dispalert = 'none';
$dispform = 'block';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $bodymessage = $_POST['message'];

    $to = 'info@metaxpayments.com, info@metaxuae.com';
    $subject = 'New Contact Form Submission from MetaX UAE Website';
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nCompany Name: $company\n\nMessage:\n$bodymessage\n";
    $headers = 'From: info@metaxuae.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);

    $dispalert = 'block';
    $dispform = 'none';
}
?>

<section class="container mt-5 mb-3" id="top-container">
    <div class="row">
        <div class="col-12">
            <section class="section_small">
                <div class="d-none">
                    <div class="row justify-content-center g-0">
                        <div class="col-12 col-xl">
                            <div class="">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo $url ?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <section>
                    <!-- <section class="section_small mt-3 mb-5">
                        <div class="">
                            <div class="row justify-content-center g-0">
                                <div class="col-12 col-xl">
                                    <div class="contact-info">
                                        <h1 class="section__title">
                                            Contact us
                                        </h1>
                                        <ul class="row gx-xl-0 gy-4 gy-md-5">
                                            <li class="col-md-6">
                                                <div class="contact-box">
                                                    <span class="contact-box__title">
                                                        Email
                                                    </span>
                                                    <a class="contact-box__link"
                                                        href="mailto:support@metaxpayments.com">
                                                        support@metaxpayments.com
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="col-12">
                                                <div class="contact-box">
                                                    <span class="contact-box__title">
                                                        Address
                                                    </span>
                                                    <span class="contact-box__text">
                                                        5577 153A Street, Suite 207 Surrey BC, Surrey, BC, Canada,
                                                        British Columbia
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-auto">
                                    <div class="contact">
                                        <div class="contact__figure-back">
                                            <img src="<?php echo $url ?>assets/images/contact-us.png" alt="Figure 7">
                                        </div>
                                        <div class="contact__figure-front">
                                            <img class="contact__figure-front__image"
                                                src="<?php echo $url ?>assets/images/figure-6.png"
                                                alt="Figure 6">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> -->






                    <section class="section_small mt-3 mb-5">
                        <div class="">
                            <div class="row justify-content-center g-0">
                                <div class="col-12 col-xl">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-11">
                                                <div class="section-header text-center">
                                                    <h5 class="masthead__title">Contact Us For All Your Needs</h5>
                                                    <h2 class="title mb-3">Need Additional Assistance?</h2>
                                                    <p style="color:black;">Have queries, complaints, or feedback? We are here to help and look forward to serving you.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row cus-mar mt-5 pt-2">
                                            <div class="col-md-4 mb-3" style="text-align:center;">
                                                <div class="step" id="new-single-box"
                                                    style="justify-content: normal!important;">
                                                    <h3 style="font-weight:800;margin-top:20px;">Support Email</h3>
                                                    <div class="icon-box"> <img
                                                            src="<?php echo $url?>assets/images/support-ico-email.png" alt="icon"> </div>
                                                    <div style="margin: 23px 0 9px;"></div>
                                                    <p>
                                                        <a class="wplink" href="mailto:support@metaxpayments.com">
                                                            support@metaxpayments.com
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3" style="text-align:center;">
                                                <div class="step" id="new-single-box"
                                                    style="justify-content: normal!important;">
                                                    <h3 style="font-weight:800;margin-top:20px;">Live Chat</h3>
                                                    <div class="icon-box">
                                                        <style>
                                                            .icon-box svg {
                                                                fill: var(--accent);
                                                                width:70px;
                                                                height:70px;
                                                            }
                                                        </style>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 800"
                                                            height="50px" width="50px" role="img" alt="Chat icon"
                                                            class="tawk-min-chat-icon">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M400 26.2c-193.3 0-350 156.7-350 350 0 136.2 77.9 254.3 191.5 312.1 15.4 8.1 31.4 15.1 48.1 20.8l-16.5 63.5c-2 7.8 5.4 14.7 13 12.1l229.8-77.6c14.6-5.3 28.8-11.6 42.4-18.7C672 630.6 750 512.5 750 376.2c0-193.3-156.7-350-350-350zm211.1 510.7c-10.8 26.5-41.9 77.2-121.5 77.2-79.9 0-110.9-51-121.6-77.4-2.8-6.8 5-13.4 13.8-11.8 76.2 13.7 147.7 13 215.3.3 8.9-1.8 16.8 4.8 14 11.7z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <!-- <div style="margin: 23px 0 9px;"></div> -->
                                                    <p >Monday to Friday</p>
                                                    <p style="margin-top:0">Timings: 10:00 AM to 05:00 PM (CET)</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3" style="text-align:center;">
                                                <div class="step" id="new-single-box"
                                                    style="justify-content: normal!important;">
                                                    <h3 style="font-weight:800;margin-top:20px;">WhatsApp</h3>
                                                    <div class="icon-box"> <img style="width:70px;height:70px;" src="<?php echo $url?>assets/images/wp-icon1.png"
                                                            alt="icon"> </div>
                                                    <div style="margin: 23px 0 9px;"></div>

                                                    <div class="row w-100">
                                                        <div class="col-4 d-flex"
                                                            style="flex-direction: column; text-align: right;  align-items: center; justify-content: center;">
                                                            <p class="w-100" style="text-align: right;">
                                                                <strong>Canada:</strong> </p>
                                                            <p class="w-100" style="text-align: right;">
                                                                <strong>UAE:</strong> </p>
                                                        </div>
                                                        <div class="col-8 d-flex"
                                                            style="flex-direction: column; text-align: right;  align-items: center; justify-content: center;">
                                                            <p class="w-100" style="text-align: left;"> <a
                                                                    class="wplink" href="https://wa.me/17787453531"> +1
                                                                    (778) 745 3531</a> </p>
                                                            <p class="w-100" style="text-align: left;"> <a
                                                                    class="wplink" href="https://wa.me/971505979972">
                                                                    +971 50 597 9972</a> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                </div>

                            </div>
                        </div>
                    </section>












                    <section class="section mt-5 mb-5">
                        <div>
                            <div class="row row-cols-xl-2 gy-4 gy-xl-0">
                                <div>
                                    <div class="business">
                                        <h2 class="business__title">
                                            Businesses Are Different <br class="d-none d-sm-table">and We Acknowledge It
                                        </h2>
                                        <div class="business__inner">
                                            <p>
                                                You have your own goals, one-of-a-kind approach and specific needs — we
                                                know it. We believe
                                                no chatbot or neurolink can recognise that. That's why we have built a
                                                business payment
                                                platform for businesses of every size and structure.
                                            </p>
                                            <p>
                                                Our application process is built in a way that allows us to learn about
                                                your business and
                                                your individual requirements. Once your application is pre-approved, our
                                                manager will
                                                contact you to offer tailored pricing plan, and guide you through
                                                the onboarding process.
                                            </p>
                                        </div>

                                        <div class="business__figure-top">
                                            <img src="<?php echo $url ?>assets/images/figure-5.png" alt="Figure Top">
                                        </div>
                                        <div class="business__figure-bottom">
                                            <img src="<?php echo $url ?>assets/images/figure-5.png" alt="Figure Bottom">
                                        </div>
                                    </div>
                                </div>
                                <div style="display: <?php echo $dispform;?>;">
                                    <form class="feedback form" id="contact-form" action="contact-us" method="POST">
                                        
                                    <div class="form__box">
                                            <label class="label" for="name">
                                                Your name
                                            </label>
                                            <input class="input" name="name" id="name" type="tel" required="">
                                        </div>
                                        <div class="form__box">
                                            <label class="label" for="phone">
                                                Your phone
                                            </label>
                                            <input class="input" name="phone" id="phone" type="tel" required="">
                                        </div>
                                        
                                        <div class="form__box">
                                            <label class="label" for="email">
                                                Your email
                                            </label>
                                            <input class="input" name="email" id="email" type="email"
                                                required="">
                                        </div>
                                        
                                        <div class="form__box">
                                            <label class="label" for="company">
                                                Company
                                            </label>
                                            <input class="input" name="company" id="company" type="text" minlength="3"
                                                required="">
                                        </div>
                                        <div class="form__box">
                                            <label class="label" for="message">
                                                Message
                                            </label>
                                            <textarea class="textarea" name="message" id="message" rows="4"></textarea>
                                        </div>
                                        <div class="form__checkbox">
                                            <input class="checkbox" type="checkbox" name="privacy-policy"
                                                id="privacy-policy" checked="" required="">
                                            <span class="span-checkbox"></span>
                                            <label class="label label_checkbox" for="privacy-policy">
                                                I agree to <a href="#" class="form__link">privacy policy</a>
                                            </label>
                                        </div>
                                        <div class="form__button">
                                            <button class="btn-main" type="submit">
                                                Submit
                                            </button>
                                        </div>
                                    </form>

                                    
                                </div>
                                <div style="display: <?php echo $dispalert;?>;">
                                <div class="feedback form">
                                        <p>Your message has been sent successfully. We will contact you very soon!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
            </section>
        </div>
    </div>
</section>

<?php
include '../footer.php';
?>