<!doctype html>
<html lang="en">
<?php
$url = 'https://metaxpayments.com/';
$GLOBALS['url'] = 'https://metaxpayments.com/';
$open_account_url = 'https://metaxpayments.com/wallet/register-client';
$login_url = 'https://metaxpayments.com/wallet/login';
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-K6W5HNZ4');</script>
    <!-- End Google Tag Manager -->

    <!-- Google tag Analytics (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LXGCL0FGHV"></script>
    <!-- <script src="https://cdn.lordicon.com/lordicon.js"></script> -->
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-LXGCL0FGHV');
    </script>


    <!-- Google tag Adwords (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16455195953"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'AW-16455195953');
    </script>

    <!-- Event snippet for Sign-up conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
        function gtag_report_conversion(url) {
            var callback = function () {
                if (typeof (url) != 'undefined') {
                    window.location = url;
                }
            };
            gtag('event', 'conversion', {
                'send_to': 'AW-16455327414/0idDCKujnpAZELa9waY9',
                'event_callback': callback
            });
            return false;
        }
    </script>


    <!-- favicon -->
    <link rel="icon" href="<?php echo $url ?>/assets/images/logo-nov-x.png" type="image/png" sizes="16x16">



    <style>
        :root {
            --bg-body: #FAFBFD;
            --font-base: 'Raleway', sans-serif;
            --font-size: 20px;
            --black: #1D1B1F;
            --dark: #1E293B;
            --light: #B2AEB4;
            --white: white;
            --navy: #0B055A;
            --accent: #8F27C7;
            --violet: #EFDAFF;
            --violet-light: #F9F0FF;
            --cartoon: ease-in-out .25s;
            --ray: 8px;
        }

        body {
            font-family: var(--font-base);
            font-size: 20px;
            color: var(--black);
            padding: 0;
            margin: 0 ;
            background-color: var(--bg-body);

        }

        .logo {
            /* width: 250px; */
            width: 180px;
        }

        .header {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 10px;
            height: 70px;
            background-color: var(--white);
            border-radius: calc(3* var(--ray));
            position: relative;
        }

        .btn-main {
            font-size: 18px;
            font-weight: 600;
            line-height: 24px;
            text-transform: none;
            text-align: center;
            text-decoration: none;
            color: var(--white);
            padding: 5px 20px;
            background-color: var(--accent);
            display: inline-flex;
            align-items: center;
            border: 1px solid var(--accent);
            border-radius: 5px;
            height: 38px;
            outline: 2px solid #8f27c7;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-transition: var(--cartoon);
            transition: var(--cartoon);
            cursor: pointer;
            outline: none;
            white-space: nowrap;
        }

        .btn-main:hover {
            color: var(--white);
            background-color: var(--accent);
            border-color: var(--accent);
            -webkit-animation-name: pulse;
            animation-name: pulse;
            -webkit-animation-duration: 1.5s;
            animation-duration: 1.5s;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
        }
        .roboto{
            --font-style: 'Roboto', sans-serif;
            font-family: var(--font-style);
            font-size: 18px;
        }
        .raleway{
            --font-style2: 'Raleway', sans-serif;
            font-family: var(--font-style2);
            font-size: 18px;
        }

        .btn-second {
            color: var(--black);
            padding: 0 24px;
            background-color: transparent;
            border-color: var(--navy);
        }

        /* .navs-link {
            font-size: 24px;
            font-weight: 600;
            color: black;
            position: relative;
        } */

        .dropmenu {
            position: relative;
        }

        .navbar-new {
            gap: 37px;
            display: flex;
            margin: 0px;
            padding: 0px;
        }

        .navbar-new li {
            list-style: none;
        }

        .navbar-new li a {
            text-decoration: none;
            color: var(--black);
            /* font-size: 20px; */
            margin: 0px;
            padding: 0px;
        }

        .fixed-header {
            background-color: var(--white);
            -webkit-box-shadow: 0 0 14px 0 rgba(143, 39, 199, .15);
            box-shadow: 0 0 14px 0 rgba(143, 39, 199, .15);
            top: 0;
            position: fixed;
            z-index: 999999;
        }

        .navbar-new li a:hover {
            color: var(--accent);
        }

        .btn-second:hover {
            color: var(--accent);
            background-color: transparent;
            border-color: var(--accent);
            -webkit-animation: none;
            animation: none;
        }

        .dropdown-menu-title::after {
            content: "";
            display: block;
            width: 14px;
            height: 14px;
            background-image: url(<?php echo $url ?>/assets/images/icons/chevron-bottom.svg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            position: absolute;
            top: 50%;
            right: 0;
            -webkit-transform: translateY(-50%) rotate(0deg);
            transform: translateY(-50%) rotate(0deg);
            -webkit-transition: var(--cartoon);
            transition: var(--cartoon);
        }

        .dropmenulist {
            width: 300px;
            padding: 20px;
            background-color: var(--white);
            border-radius: calc(2* var(--ray));
            -webkit-box-shadow: 0 0 15px 0 rgba(143, 39, 199, .15);
            box-shadow: 0 0 15px 0 rgba(143, 39, 199, .15);
            position: absolute;
            left: 0;
            -webkit-transform: translateY(74px);
            transform: translateY(74px);
            opacity: 0;
            visibility: hidden;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            row-gap: 5px;
            -webkit-transition: var(--cartoon);
            transition: var(--cartoon);
        }

        .dropmenulist li {
            width: 100%;
        }

        .dropmenulist li a {
            font-size: 16px;
            font-weight: 600;
            line-height: 1.5;
            color: var(--black);
            padding: 10px;
            background-color: var(--white);
            border-radius: var(--ray);
            display: flex;
            width: 100%;
        }

        .dropmenulist li a:hover {
            background-color: rgba(178, 174, 180, .075);
        }

        .footer-box {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            row-gap: 60px;
            padding: 60px;
            background-color: var(--white);
            border-radius: calc(4* var(--ray));
        }

        .footer-menu {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            row-gap: 20px;
            margin-top: 60px;
            row-gap: 5px;
            margin: 0;
            padding: 0;

        }

        .social-v2 {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-column-gap: 30px;
            -moz-column-gap: 30px;
            column-gap: 18px;

        }

        .footer__menu-title {
            font-size: 17px;
            line-height: 1.2;
            font-weight: 600;
            display: block;
            margin-bottom: 20px;
        }

        .footer__link-list {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            -webkit-column-gap: 30px;
            -moz-column-gap: 30px;
            column-gap: 30px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-menulink {
            font-weight: 400;
            color: var(--black);
            display: block;
            font-size: 16px;
        }

        .footer-menuitem {
            list-style: none;
        }

        a {
            text-decoration: none;
            color: var(--accent);
            -webkit-transition: var(--cartoon);
            transition: var(--cartoon);
            outline: none;
            cursor: pointer;
        }

        .social-v2 .sociallink {
            font-weight: 500;
            font-size: 18px;
        }

        .footer__link {
            font-weight: 500;
        }


        .social-v2 .sociallink:hover {
            color: black;
        }

        .footer__link:hover {
            color: black;
        }

        .footer__email {
            font-weight: 700;
            color: var(--black);
        }

        .footer__copyright {
            font-weight: 700;
            color: var(--black);
        }

        .footer__text-block {
            color: rgba(29, 27, 31, .75);
        }

        .footer__text {
            font-weight: 500;
            text-align: justify;
            color: var(--black);
            margin: 0;
        }

        .appstore-link {
            font-size: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            padding: 15px 24px;
            background-color: #1A1A1A;
            border-radius: calc(2* var(--ray));
        }

        .appstore-link:hover {
            background-color: var(--accent);
        }

        .title__main {
            font-weight: 700;
            font-size: 35px;
        }

        .main__heading {
            font-size: 55px;
        }

        .main__desc {
            font-size: 18px;
            font-weight: 400;
        }


        .slide-up-animation.animated {
            margin-top: 100px;
            transform: translateY(0);
            opacity: 1;
        }

        .section__inner {
            margin-top: 120px;
            font-size: 20px;
            box-sizing: border-box;
            padding: 60px;
            background-color: #ffffff;
            border-radius: calc(4 * var(--ray));
            overflow: hidden;
        }
.now{
    line-height: 0.0001;
}
        .section__title {
            font-size: 18px;
            font-weight: 600;
            padding-top: 10px;
            line-height: 1.2;
            margin-bottom: 60px;
        }

        .section__title__secondary {
            font-size: 50px;
            font-weight: 700;
            padding-top: 10px;
            line-height: 1.2;
            margin-bottom: 60px;
        }

        .section__title__main {
            font-size: 35px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 60px;
        }

        .section__subtitle {
            font-size: 65px;
            font-weight: 700;
            padding-top: 10px;
            line-height: 1.2;
            margin-bottom: 60px;
        }

        .text-center {
            text-align: center;
        }

        .currency {
            font-size: 20px;
            list-style: none;
            cursor: pointer;
            color: black;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: center;
            column-gap: 16px;
        }

        .currency__code {
            cursor: pointer;
            color: black;
            box-sizing: border-box;
            font-size: 25px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .currency__image {
            color: #0d6efd;
            height: 36px;
            box-sizing: border-box;
            vertical-align: middle;
        }

        .mini-block-v3_h100-xxl {
            height: 100%;
        }

        .mini-block-v3 {
            display: flex;
            flex-direction: column;
            row-gap: 60px;
            padding: 60px;
            background-color: var(--violet-light);
            border-radius: calc(4* var(--ray));
            overflow: hidden;
        }

        .text-xxl-left {
            text-align: left;
        }

        a {
            text-decoration: none;
        }

        .visa_card_title {
            font-size: 60px;
            font-weight: 500;
            line-height: 1.3;
            padding: 0;
            margin: 0;
        }

        .pluses-v3 {
            gap: 24px;
            height: 100%;
            display: flex;
            flex-wrap: wrap;
        }

        .pluses-v3__item {
            width: calc(50% - 12px);
            padding: 30px;
            background-color: white;
            border-radius: calc(3* var(--ray));
            position: relative;
        }

        .pluses-v3__title {
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 12px;
            line-height: 1.2;
        }

        .pluses-v3__badge {
            font-size: 16px;
            font-weight: 600;
            display: inline-block;
            padding: 8px 20px;
            background-color: var(--violet-light);
            border-radius: 30px;
            margin-bottom: 12px;
        }

        .box {
            border-radius: calc(4* var(--ray));
            overflow: hidden;
            position: relative;
        }

        .box__content {
            height: 100%;
            padding: 60px;
            background-color: white;
        }

        .mini-block-v2 {
            flex-direction: column;
            column-gap: 0;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            row-gap: 60px;
            padding: 60px;
            background-color: var(--violet-light);
            border-radius: calc(4* var(--ray));
            overflow: hidden;
        }

        .mini-block__title {
            margin-bottom: 20px;
            font-size: 40px;
            font-weight: 600;
            line-height: 1.2;
            box-sizing: border-box;
        }

        .mini-block__image {
            width: 400px;
            box-sizing: border-box;
            vertical-align: middle;
            height: auto;
            max-width: 400px;
        }

        .box__image {
            width: 100%;
            max-width: none;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            -o-object-position: center;
            object-position: center;
        }

        .section__title {
            font-size: 35px;
            font-weight: 500;
            line-height: 1.2;
            margin-bottom: 60px;
        }

        .mini-block__title {
            font-size: 50px;
            font-weight: 500;
            margin-bottom: 15px;
        }

        .pluses-vsitem {
            padding: 30px;
            background-color: var(--white);
            border-radius: calc(3* var(--ray));
            height: 500px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }

        .pluses-v2title {
            font-size: 30px;
            font-weight: 500;
            margin-bottom: 12px;
        }

        .pluses-v2icon-box {
            display: inline-block;
            text-align: center;
        }

        .pluses-v2icon {
            width: auto;
            max-width: none;
            height: 100px;
        }

        .box-card {
            padding-left: 60px;
            position: relative;
        }

        .box-card::before {
            content: "";
            width: 40px;
            height: 40px;
            display: inline-block;
            background-image: url(<?php echo $url ?>/assets/images/figure-4-small.png);
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            position: absolute;
            left: 0;
            top: 0;
        }


        .box-card__title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .section__title1 {
            font-size: 35px;
            font-weight: 500;
            line-height: 1.2;
            margin-bottom: 30px;
        }

        .step {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            row-gap: 30px;
            height: 100%;
            padding: 24px;
            background-color: var(--violet-light);
            border-radius: calc(3* var(--ray));
        }

        .step__number {
            font-size: 41px;
            font-weight: 500;
            line-height: 1.2;
        }

        .step_last {
            background-color: var(--violet);
        }



        .box {
            border-radius: calc(4* var(--ray));
            overflow: hidden;
            position: relative;
        }

        .box_violet {
            background-color: var(--violet);
        }



        .box__content {
            height: 100%;
            background-color: var(--white);
        }

        .box__content_violet {
            background-color: var(--violet);
        }

        .phone-bottom-wrapper {
            position: relative;
        }

        .phone-bottom {
            width: 60%;
            position: absolute;
            top: 60px;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .box-faq {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            row-gap: 50px;
            height: 100%;
            padding: 30px;
            background-color: var(--violet-light);
            border-radius: calc(4* var(--ray));
            overflow: hidden;
        }

        .box-faq__title {
            font-size: 50px;
            font-weight: 500;
            margin: 0;
        }
        

        .accordion-item {
            padding: 24px;
            background-color: var(--white);
            border-radius: calc(3* var(--ray));
            margin: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .accordion-button:not(.collapsed) {
            color: black !important;
            background-color: transparent !important;
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .125);
        }

        .accordion-button {
            font-size: 24px;
            font-weight: 500;
        }

        .accordion-item:first-of-type {
            border-top-left-radius: calc(3* var(--ray));
            border-top-right-radius: calc(3* var(--ray));
        }



        .accordion-button::after {
            flex-shrink: 0;
            width: 40px;
            height: 40px;
            content: "";
            background-image: url('data:image/svg+xml;utf8,<svg width="24" height="24" viewBox="0 0 24 24" fill="%231D1B1F" xmlns="http://www.w3.org/2000/svg"><path d="M13 4L13 16.17L18.59 10.58L20 12L12 20L4 12L5.41 10.59L11 16.17L11 4L13 4Z"/></svg>');
            background-repeat: no-repeat;
            background-size: 25px;
            background-position: center;
            transition: transform .2s ease-in-out;
            border-radius: calc(2* var(--ray));
            border: 1px solid var(--black);
        }

        .accordion-button:not(.collapsed)::after {
            background-image: url('data:image/svg+xml;utf8,<svg width="24" height="24" viewBox="0 0 24 24" fill="%238F27C7" xmlns="http://www.w3.org/2000/svg"><path d="M13 20L13 7.83L18.59 13.42L20 12L12 4L4 12L5.41 13.41L11 7.83L11 20L13 20Z"/></svg>');
            transform: rotate(0deg);
        }

        .accordion-button:focus {
            z-index: 3;
            border-color: transparent;
            outline: 0;
            box-shadow: none;
        }

        .body {
            margin-top: 140px;
        }

        .accordion-item:last-of-type {
            border-bottom-left-radius: calc(3* var(--ray));
            border-bottom-right-radius: calc(3* var(--ray));
        }

        .cta-block {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 50px;
            background-color: var(--violet);
            border-radius: calc(4* var(--ray));
        }

        .cta-block__title {
            font-size: 50px;
            font-weight: 500;
        }

        .masthead__title {
            font-size: 100px;
            font-weight: 700;
            margin-bottom: 20px;
            overflow: hidden;
            margin-top: 70px;
        }

        .masthead__title__secondary {
            font-size: 80px;
            font-weight: 700;
            margin-bottom: 20px;
            overflow: hidden;
            margin-top: 70px;
        }

        .box-note {
            font-weight: 600;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-column-gap: 30px;
            -moz-column-gap: 30px;
            column-gap: 30px;
            padding: 12px 24px;
            background-color: var(--violet-light);
            border-radius: calc(3* var(--ray));
        }

        .box-note__image {
            max-width: 150px;
        }

        .section__inner_secondary {
            background-color: var(--violet-light);
        }

        .box-carousel__item {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            row-gap: 30px;
        }

        .box-carousel__item_center {
            text-align: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .plus__title {
            font-size: 30px;
            font-weight: 500;
        }

        .plus__title {
            line-height: 1.2;
        }

        .box__screen-wrapper {
            height: 100%;
            min-height: 750px;
            background-color: var(--violet-light);
            border-radius: calc(4* var(--ray));
            position: relative;
            overflow: hidden;
        }

        .box__icon {
            width: 60px;
        }

        .text-600 {
            font-weight: 600;
        }

        .box__screen {
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            border-radius: calc(3* var(--ray));
            -webkit-box-shadow: 0 4px 50px rgba(143, 39, 199, .15);
            box-shadow: 0 4px 50px rgba(143, 39, 199, .15);
            position: absolute;
            overflow: hidden;
            top: 60px;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        .section__title-small {
            font-size: 34px;
            font-weight: 600;
            margin-bottom: 50px;
            display: block;
        }

        p {
            font-size: 20px;
            font-weight: 400;
            line-height: 1.5;
            margin: 0;
        }

        .masthead__content {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            row-gap: 50px;
        }

        .masthead__inner {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            row-gap: 80px;
        }

        .text-center {
            text-align: center;
        }

        .mt-5 {
            margin-top: 120px !important;
        }


        .mb-5 {
            margin-bottom: 120px !important;
        }

        .cta-block__link {
            margin-top: 60px;
        }

        .text-lead {
            font-size: 25px;
            font-weight: 600;
        }

        p+p {
            margin-top: 20px;
        }

        .carousel-case__box {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 100%;
            height: 230px;
            background-color: var(--violet-light);
            border-radius: calc(4* var(--ray));
        }

        .owl-carousel .owl-item img {
            -o-object-fit: contain;
            object-fit: contain;
        }

        .owl-carousel .owl-item img {
            display: block;
            width: 100%;
        }

        .carousel-case__text{
            font-size: 15px;
        }

        .carousel-case__icon {
            max-width: 75%;
            margin: 0 auto;
        }
.metax{
    color:#6d00a7;
}
        .carousel-case__name {
            font-size: 25px;
            font-weight: 600;
            line-height: 1.2;
            padding: 0 10px;
        }

        .carousel-case__item {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            row-gap: 16px;
        }

        .account-card__bottom {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            row-gap: 40px;
            padding: 40px;
            background-color: var(--violet-light);
            border-radius: calc(4* var(--ray));
        }

        .account-card__price-list {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            row-gap: 20px;
            padding: 24px;
            background-color: var(--white);
            border-radius: calc(3* var(--ray));
        }

        .account-card__price-item {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .account-card__price-name {
            font-weight: 600;
        }

        .tables tbody tr:nth-child(odd) {
            background-color: var(--bg-body);
        }

        .tables tr td:first-child {
            padding-left: 30px;
            border-radius: calc(4* var(--ray)) 0 0 calc(4* var(--ray));
        }

        .tables td {
            font-weight: 600;
            line-height: 1.2;
            padding: 30px;
        }

        .tables th {
            font-size: 30px;
            font-weight: 500;
            line-height: 1.2;
            padding: 30px;
        }

        .tables th:not(:first-child) {
            text-align: center;
        }

        .tables td:not(:first-child) {
            text-align: center;
            font-size: 25px;
        }

        .mini-block {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            row-gap: 60px;
            padding: 60px;
            background-color: var(--violet-light);
            border-radius: calc(4* var(--ray));
            min-height: 680px;
            overflow: hidden;
        }

        .mini-block {
            height: 100%;
        }

        .plus {
            height: 100%;
            padding: 24px;
            background-color: var(--white);
            border-radius: calc(3* var(--ray));
            min-height: 350px;
        }

        .ap-plus {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            row-gap: 30px;
        }

        .ap-plus__image {
            width: 100%;
            height: auto;
            min-height: 250px;
            border-radius: calc(4* var(--ray));
            -o-object-fit: cover !important;
            object-fit: cover !important;
        }

        .ap-plus__title {
            font-size: 25px;
            font-weight: 600;
            line-height: 1.2;
            margin-bottom: 16px;
        }

        .ap-plus__text {
            font-size: 16px;
        }

        .box__image-v2 {
            width: 100%;
            max-width: none;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            -o-object-position: center;
            object-position: center;
        }

        .contact {
            width: 600px;
            height: 100%;
            background-color: var(--violet-light);
            border-radius: 0 calc(4* var(--ray)) calc(4* var(--ray)) 0;
            position: relative;
            overflow: hidden;
        }

        .contact__figure-back {
            width: 120%;
            position: absolute;
            top: 25%;
            right: -25%;
            z-index: 1;
        }

        .contact__figure-front {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 60%;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            z-index: 5;
        }

        .contact-info {
            padding: 60px;
            background-color: var(--white);
            border-radius: calc(4* var(--ray)) 0 0 calc(4* var(--ray));
        }

        .business {
            height: 100%;
            padding: 60px 60px 100px 60px;
            background-color: var(--violet-light);
            border-radius: calc(4* var(--ray));
            position: relative;
            overflow: hidden;
        }

        .business__title {
            font-size: 35px;
            font-weight: 600;
            margin-bottom: 25px;
        }

        .business__inner {
            width: 70%;
            position: relative;
            z-index: 10;
        }

        .business__figure-top {
            width: 500px;
            height: 500px;
            top: -200px;
            right: -300px;
            -webkit-transform: rotate(43deg);
            transform: rotate(43deg);
        }

        .business__figure-bottom {
            width: 800px;
            height: 800px;
            right: -50px;
            bottom: -500px;
            -webkit-transform: rotate(197deg);
            transform: rotate(197deg);
            opacity: 0.4;
        }

        .form {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            row-gap: 24px;
        }

        .feedback {
            height: 100%;
            padding: 60px 100px;
            background-color: var(--violet-light);
            border-radius: calc(4* var(--ray));
        }

        .form__box {
            width: 100%;
            padding-top: 16.4px;
            position: relative;
        }

        .label {
            font-size: 16px;
            font-weight: 400;
            color: var(--black);
            display: inline-block;
            padding: 0 10px;
            background-color: var(--violet-light);
            margin: 0;
            position: absolute;
            top: 0;
            left: 10px;
        }

        .input {
            font-size: 20px;
            font-weight: 400;
            line-height: 3;
            color: var(--black);
            caret-color: var(--black);
            display: block;
            width: 100%;
            height: 60px;
            padding: 0 20px;
            background-color: transparent;
            background-clip: padding-box;
            border: 1px solid var(--black);
            border-radius: var(--ray);
            -webkit-transition: var(--cartoon);
            transition: var(--cartoon);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            outline: none;
        }

        .checkbox {
            opacity: 0;
            width: 24px;
            height: 24px;
            z-index: 1;
        }

        .textarea {
            font-size: 20px;
            font-weight: 400;
            line-height: 1.6;
            color: var(--black);
            display: block;
            width: 100%;
            padding: 14px 20px;
            background-color: transparent;
            background-clip: padding-box;
            border: 1px solid var(--black);
            border-radius: var(--ray);
            -webkit-transition: var(--cartoon);
            transition: var(--cartoon);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            outline: none;
            resize: none;
        }

        .checkbox+.span-checkbox {
            position: absolute;
            width: 24px;
            height: 24px;
            background-color: transparent;
            background-repeat: no-repeat;
            background-position: center;
            background-size: 15px;
            background-clip: padding-box;
            border: 1px solid var(--black);
            border-radius: calc(.75* var(--ray));
            -webkit-transition: var(--cartoon);
            transition: var(--cartoon);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            outline: none;
        }

        .checkbox:checked+span.span-checkbox {
            background-image: url(<?php echo $url ?>/assets/images/icons/check.svg);
        }

        .business__figure-top,
        .business__figure-bottom {
            position: absolute;
            z-index: 1;
        }

        .business__figure-top,
        .business__figure-bottom {
            position: absolute;
            z-index: 1;
        }

        .form__checkbox {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-column-gap: 10px;
            column-gap: 10px;
            width: 100%;
        }

        .label_checkbox {
            padding: 0;
            background-color: transparent;
            position: static;
        }

        .form__button {
            width: 100%;
            padding-top: 20px;
        }

        .contact-box {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            row-gap: 5px;
        }

        .contact-box__title {
            font-size: 25px;
            font-weight: 600;
            line-height: 1.2;
            color: var(--light);
            display: inline-block;
        }

        .contact-box__link {
            font-size: 30px;
            font-weight: 500;
            color: var(--black);
            display: inline-block;
        }

        .contact-box__text {
            font-size: 1.5rem;
            font-weight: 500;
            color: var(--black);
            display: inline-block;
        }

        .welcome {
            height: 100%;
            background-color: var(--violet-light);
            border-radius: 0 calc(4* var(--ray)) calc(4* var(--ray)) 0;
            position: relative;
            overflow: hidden;
        }

        .welcome__inner {
            width: 40%;
            position: absolute;
            bottom: 0;
            left: 50%;
            -webkit-transform: translate(-50%);
            transform: translate(-50%);
        }

        .welcome__image {
            width: 100%;
            height: auto;
        }

        .welcome-text {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            height: 100%;
            padding: 60px;
            background-color: var(--white);
            border-radius: calc(4* var(--ray)) 0 0 calc(4* var(--ray));
        }

        .mission {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            row-gap: 30px;
        }

        .owl-carousel .owl-item .mission__image {
            width: 120px;
            height: auto;
        }

        .how {
            height: 100%;
            background-color: var(--violet-light);
            border-radius: calc(4* var(--ray)) 0 0 calc(4* var(--ray));
            position: relative;
            overflow: hidden;
        }

        .how__inner {
            width: 90%;
            position: absolute;
            top: 50px;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        .how__image {
            width: 100%;
            height: auto;
        }

        .how-text {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            height: 100%;
            padding: 60px;
            background-color: var(--white);
            border-radius: 0 calc(4* var(--ray)) calc(4* var(--ray)) 0;
        }

        .values {
            height: 100%;
            background-color: var(--violet-light);
            border-radius: calc(4* var(--ray));
            position: relative;
            overflow: hidden;
        }
        .pad{
            padding-top: 150px;
        }

        .values__inner {
            width: 80%;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .values__title {
            font-size: 25px;
            font-weight: 600;
        }

        .values__desc {
            font-size: 16px;
            margin-top: 10px;
        }

        .ready__title {
            font-size: 50px;
            font-weight: 500;
            margin-bottom: 40px;
        }

        .ready__figure_top {
            top: -40%;
            right: -15%;
            transform: rotate(31deg);
        }

        .ready__figure {
            width: 800px;
            height: 800px;
            position: absolute;
            z-index: 1;
        }

        .ready__figure_bottom {
            bottom: -40%;
            left: -20%;
            transform: rotate(223deg);
        }

        .ready-screen {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-column-gap: 30px;
            column-gap: 30px;
            padding: 0;
            margin-top: 40px;
            margin-bottom: -400px;
            position: relative;
            z-index: 5;
        }

        .ready-screen__image {
            border-radius: calc(3* var(--ray));
            -webkit-box-shadow: 0 4px 60px rgba(143, 39, 199, 0.25);
            box-shadow: 0 4px 60px rgba(143, 39, 199, 0.25);
        }

        .section__inner_wrap {
            position: relative;
            overflow: hidden;
        }

        .slide-up-animation.animated {
            -webkit-transform: translateY(0);
            transform: translateY(0);
            opacity: 1;
        }

        .masthead__image_shadow {
            -webkit-filter: drop-shadow(0 4px 60px rgba(143, 39, 199, 0.15));
            filter: drop-shadow(0 4px 60px rgba(143, 39, 199, 0.15));
        }

        .masthead__image {
            overflow: hidden;
        }

        .box-carousel__item {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            row-gap: 30px;
        }

        .box-carousel__icon {
            width: 120px;
            height: auto;
        }

        .box-carousel__title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .owl-carousel .owl-item img {
            display: block;
            width: 100%;
        }

        .box-carousel__item_center {
            text-align: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .box-carousel.owl-carousel .owl-item img {
            width: 120px;
        }

        .owl-carousel .owl-item img {
            -o-object-fit: contain;
            object-fit: contain;
        }

        .box-image {
            width: calc(100% + 12rem);
            max-width: none;
            height: calc(100% + 6rem);
            -o-object-fit: cover;
            object-fit: cover;
            -o-object-position: center left;
            object-position: center left;
            margin: -3rem -3rem -3rem -9rem;
        }

        .box-image2 {
            width: 100%;
            max-width: none;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            -o-object-position: center left;
            object-position: right;
        }

        .box-cta__title {
            font-size: 50px;
            font-weight: 500;
            margin-bottom: 30px;
        }

        .box-cta__desc {
            font-weight: 600;
        }

        .box-cta {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            row-gap: 60px;
            position: relative;
            z-index: 5;
        }

        .pricing-hero__block::before {
            content: '';
            width: 2rem;
            height: 2rem;
            display: inline-block;
            background-image: url(<?php echo $url ?>assets/images/figure-4-small.png);
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            position: absolute;
            left: 0;
            top: 0;
        }

        .pricing-hero__block {
            padding-left: 60px;
            position: relative;
        }

        .pricing-hero__lead {
            font-size: 35px;
            font-weight: 600;
            margin-bottom: 60px;
            display: block;
        }

        .scroll-to-top {
            font-size: 0;
            position: fixed;
            bottom: 50px;
            right: 30px;
            width: 50px;
            height: 50px;
            background-color: #fff;
            z-index: 8;
            text-align: center;
            transition: 0.3s ease;
            border: 0;
            box-shadow: 1px 0 32px -9px rgba(0, 0, 0, 0.4);
            text-decoration: none;
            display: flex;
            justify-content: center;
            border-radius: calc(2* var(--ray));
        }

        .scroll-to-top:before {
            content: url(<?php echo $url ?>assets/images/icons/top-up1.svg);
            display: flex;
            margin: auto;
        }

        /* For Firefox */

        /* For Chrome, Safari, and Opera */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: var(--accent);
        }

        ::-webkit-scrollbar-thumb {
            background: #000;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #fff;
        }

        ::-webkit-scrollbar-corner {
            background: #0d6efd;
        }

        .nav-pills .nav-link {
            background: 0 0;
            border: 0;
            border-radius: calc(4* var(--ray));
            background-color: #f9f0ff;
            padding: 24px 12px;
            color: var(--black);
            font-size: 34px;
            font-weight: 600;
        }

        .nav-pills {
            border-radius: calc(4* var(--ray));
            background-color: #f9f0ff;
            position: sticky;
            top: 150px;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: var(--accent);
            background-color: #efdaff;
        }

        .hamburger {
            font-size: 0;
            line-height: normal;
            color: var(--black);
            padding: .75rem;
            width: 2.75rem;
            height: 2.5rem;
            background-color: transparent;
            border-color: var(--navy);
            overflow: hidden;
            display: none;
            vertical-align: middle;
            border: 1px solid var(--accent);
            border-radius: calc(2* var(--ray));
        }

        .hamburger__box {
            display: inline-block;
            width: 100%;
            height: 2px;
            background-color: var(--black);
            border-radius: 1px;
            position: relative;
            transition: var(--cartoon);
        }

        .hamburger__box::before,
        .hamburger__box::after {
            content: "";
            display: inline-block;
            height: 100%;
            background-color: var(--black);
            border-radius: 1px;
            position: absolute;
            left: 0;
            transition: var(--cartoon);
        }

        .hamburger__box::before {
            width: 50%;
            top: -6px;
        }

        .hamburger__box::after {
            width: 75%;
            bottom: -6px;
        }

        .footer-menu__link:hover {
            color: var(--accent);
        }

        .footer__link:hover {
            color: var(--navy);
        }

        .btn-main {
            justify-content: center;
        }

        a:hover {
            color: #8f27c7;
        }

        .nav-mobile {
            display: flex;
            position: fixed;
            width: 100vw;
            height: 100vh;
            background: #FCFAFD;
            z-index: 1234;
            top: -100%;
            padding: 10px;
            padding-top: 140px;
            flex-direction: column;
            opacity: 0;
            animation: slideDown 0.5s forwards;
            visibility: hidden;
        }

        .nav-mobile.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        /* Blog CSS */

        .last_post {
            width: 100%;
            padding: 60px;
            border-radius: 32px;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .blog__title {
            margin: 40px 0 50px;
            font-weight: 500;
            font-size: 50px;
            line-height: 140%;
            text-align: center;
            color: var(--black);
        }

        .kama_breadcrumbs {
            margin: 30px 0;
        }

        .kama_breadcrumbs .kb_sep {
            margin: 0 28px 0 10px;
            font-weight: 500;
            font-size: 20px;
            line-height: 29px;
            color: #1F1E1F;
        }

        .kama_breadcrumbs .kb_title {
            font-weight: 500;
            font-size: 20px;
            line-height: 29px;
            color: var(--accent);
        }

        .blog__category_list {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 20px;
            list-style: none;
        }

        .blog__category_list li {
            margin: 0 30px 30px 0;
            font-size: 0;
            background: var(--white);
        }

        .blog__category_list li a {
            display: block;
            padding: 8px 12px;
            font-weight: 500;
            font-size: 20px;
            line-height: 24px;
            color: #1F1E1F;
            border-radius: 6px;
            cursor: pointer;
        }

        .blog__category_list li:hover a {
            background-color: #5F1786;
            color: var(--white);
        }

        .grid-block,
        .grid-block-second {
            display: flex;
            flex-wrap: wrap;
            gap: 47px 30px;
            grid-template-columns: repeat(2, 1fr);
        }

        .grid-block .grid-block__item.last_post {
            overflow: hidden;
            grid-column-start: 1;
            grid-column-end: -1;
            background-size: cover;
        }

        .grid-block .grid-block__item,
        .grid-block-second .grid-block__item {
            overflow: hidden;
            width: 100%;
            background: var(--white);
            border-radius: 32px;
        }

        .last_post__info {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 41px;
        }

        .last_post__time_read {
            margin-right: 40px;
            background: url(<?php echo $url ?>assets/blog/images/cup.svg) no-repeat center left;
        }

        .last_post__date,
        .last_post__time_read {
            display: flex;
            align-items: center;
            margin-right: 30px;
            margin-bottom: 0;
            padding-left: 28px;
            font-weight: 400;
            font-size: 16px;
            line-height: 160%;
            color: var(--white);
        }

        .grid-block .grid-block__item a,
        .grid-block-second .grid-block__item a {
            display: inline-block;
            height: 100%;
        }

        .last_post a {
            display: block;
        }

        .last_post__category {
            margin-bottom: 0;
            padding: 8px;
            border-radius: 6px;
            background: var(--white);
            font-weight: 600;
            font-size: 20px;
            line-height: 160%;
            color: var(--black);
        }

        .last_post__content {
            max-width: 460px;
        }

        .last_post__title {
            margin-bottom: 10px;
        }

        .last_post__excerpt {
            margin-bottom: 42px;
            ont-weight: 400;
            font-size: 20px;
            line-height: 160%;
            color: var(--white);
        }

        .last_post__author {
            display: flex;
            margin-bottom: 0;
            font-weight: 600;
            font-size: 20px;
            line-height: 160%;
            color: var(--white);
        }

        .last_post__author img {
            width: 30px;
            margin-right: 5px;
            border: 2px solid var(--accent);
            border-radius: 50%;
        }

        .grid-block .grid-block__item a,
        .grid-block-second .grid-block__item a {
            display: inline-block;
            height: 100%;
        }

        .last_post__title a {
            font-weight: 600;
            font-size: 35px;
            line-height: 120%;
            color: var(--white);
        }

        .owl-item {
            width: 33%;
        }

        .grid-block .grid-block__item,
        .grid-block-second .grid-block__item {
            overflow: hidden;
            width: 100%;
            background: var(--white);
            border-radius: 32px;
        }

        .grid-block .grid-block__item:not(:first-child),
        .grid-block-second .grid-block__item:not(:first-child) {
            gap: 30px;
            width: calc(50% - 15px);
        }

        .grid-block .grid-block__item .post__thumbnail,
        .grid-block-second .grid-block__item .post__thumbnail {
            position: relative;
            height: 250px;
            overflow: hidden;
        }

        .grid-block .grid-block__item .post__thumbnail img,
        .grid-block-second .grid-block__item .post__thumbnail img {
            width: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            -o-object-position: top center;
            object-position: top center;
        }

        .grid-block .grid-block__item .post__thumbnail .category__list,
        .grid-block-second .grid-block__item .post__thumbnail .category__list {
            position: absolute;
            bottom: 27px;
            left: 53px;
        }

        .grid-block .grid-block__item .post__thumbnail .category__list .post__category,
        .grid-block-second .grid-block__item .post__thumbnail .category__list .post__category {
            display: inline-block;
            margin-right: 8px;
            padding: 8px;
            background: var(--white);
            font-weight: 600;
            font-size: 20px;
            line-height: 160%;
            color: var(--navy);
            border-radius: 6px;
        }

        .grid-block .grid-block__item a,
        .grid-block-second .grid-block__item a {
            display: inline-block;
            height: 100%;
        }

        .grid-block .grid-block__item .post__content,
        .grid-block-second .grid-block__item .post__content {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 382px;
            padding: 30px 50px;
        }

        .grid-block .grid-block__item .post__info,
        .grid-block-second .grid-block__item .post__info {
            margin-bottom: 40px;
        }

        .grid-block .grid-block__item .post__info .post__date,
        .grid-block-second .grid-block__item .post__info .post__date {
            margin-right: 30px;
            background: url(<?php echo $url ?>assets/blog/images/calendar.svg) no-repeat left center;
        }

        .grid-block .grid-block__item .post__info .post__date,
        .grid-block .grid-block__item .post__info .post__time_read,
        .grid-block-second .grid-block__item .post__info .post__date,
        .grid-block-second .grid-block__item .post__info .post__time_read {
            margin-bottom: 0;
            padding-left: 30px;
            font-weight: 500;
            font-size: 16px;
            line-height: 160%;
            color: var(--black);
        }

        .grid-block .grid-block__item .post__info .post__time_read,
        .grid-block-second .grid-block__item .post__info .post__time_read {
            background: url(<?php echo $url ?>assets/blog/images/cup.svg) no-repeat left center;
        }

        .grid-block .grid-block__item .post__info .post__date,
        .grid-block .grid-block__item .post__info .post__time_read,
        .grid-block-second .grid-block__item .post__info .post__date,
        .grid-block-second .grid-block__item .post__info .post__time_read {
            margin-bottom: 0;
            padding-left: 30px;
            font-weight: 500;
            font-size: 16px;
            line-height: 160%;
            color: var(--black);
        }

        .grid-block .grid-block__item .post__title,
        .grid-block-second .grid-block__item .post__title {
            margin: 0 0 10px;
        }

        .grid-block .grid-block__item .post__title a,
        .grid-block-second .grid-block__item .post__title a {
            font-weight: 500;
            font-size: 30px;
            line-height: 130%;
            color: var(--navy);
        }

        .grid-block .grid-block__item .post__excerpt,
        .grid-block-second .grid-block__item .post__excerpt {
            margin-bottom: 45px;
            font-style: normal;
            font-weight: 500;
            font-size: 20px;
            line-height: 160%;
            color: var(--navy);
        }

        .grid-block .grid-block__item .post__author,
        .grid-block-second .grid-block__item .post__author {
            display: flex;
            margin: 0;
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 160%;
            color: var(--navy);
            text-transform: capitalize;
        }

        .grid-block .grid-block__item .post__author img,
        .grid-block-second .grid-block__item .post__author img {
            width: 32px;
            margin-right: 10px;
            border-radius: 100%;
            border: 2px solid var(--accent);
        }
.space{
    width: 85%;
}


        .text-box {
            padding-left: 70px;
        }

        .industry-headings {
            font-size: 80px;
        }


        .temporary-margin {
            margin-left: 120px;
            margin-right: 120px;
        }

        .list-style {
            list-style: none;
            display: flex;
        }

        .right-aligned {
            text-align: right;
        }

        .left-aligned {
            text-align: left;
        }

        .list-gap {
            gap: 200px;
            display: flex;
            list-style-type: disc;
        }
        .heading{
            font-size: 40px;
            font-weight: 700;
        }

        .iban-title {
            font-size: 60px;
        }

        .iban-subheading {
            font-size: 30px;
        }
        .section-title{
            font-size: 27px;
            font-weight: 700
        }
        .banner{
            height: 500px;
        }
        .iban_subheading{
            font-size: 25px;
            font-weight: 600;
        }
        .cross_border{
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 50px;

            .inner_width{
                width: 50%;
            }
        }


        /* Media Screens */

        @media (max-width: 1199px) {
            .cross_border{
                flex-direction: column;
                text-align: center;
                .inner_width{
                    width: 100%;
                }
            }
            .banner{
                height: 750px;
            }
            .box-faq {
                height: 300px;
                position: relative;
                .box-faq-v2__image{
                    object-fit: contain;
                    height: 200px;
                    width: 200px;
                    position: absolute;
                    bottom: 50px;
                    right: 40%;
                }
            }
            .box-faq__title{
                font-size: 20px;
            }
            .title__main{
                font-size: 30px;!important
            }
            .img1{
                display: none;
                
            }
            .ready__figure {
                display: none;
            }


            .ready-screen {
                display: none;
            }

            .btn-main {
                justify-content: center;
                font-size: 18px;
                padding: 0 10px;
                height: 40px;
            }

            .navs-link {
                font-size: 18px;
            }

            .dropdown-menu-title {
                display: inline-block;
                position: relative;
                width: 100%;
            }

            .mobile_menu_wrapper {
                max-width: 100%;
                padding: 20px;
                border-radius: 24px;
                background: #fff;

            }

            .main-menu {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                justify-content: flex-start;
                column-gap: 0;
                row-gap: 10px;
                position: static;
                transform: none;
                width: 100%;
                margin-top: 10px;
            }

            .main-menu__item {
                width: 100%;
                padding: 10px;
                background: #FCFAFD;
                border-radius: 16px;
            }

            .dropdownmob {
                display: flex;
                flex-direction: column;
                row-gap: 10px;
                margin-top: 10px;
                font-size: 14px;
            }


            .hamburger {
                display: block;
            }

            .navbar-new {
                display: none;
            }

            .navbuttons {
                display: none !important;
            }

            .pluses-v3__item {
                width: 100%;
            }

            .box__image {
                display: none;
            }

            .box__screen-wrapper {
                display: none;
            }

            .box-image2 {
                display: none;
            }

            .box-cta__title {
                font-size: 40px;
            }

        }

        @media (max-width: 768px) {
            .banner{
                height: 600px;
            }
            .iban_subheading{
                font-size: 20px;
            }
            .box-faq {
                height: 300px;
                position: relative;
                .box-faq-v2__image{
                    object-fit: contain;
                    height: 200px;
                    width: 200px;
                    position: absolute;
                    bottom: 50px;
                    right: 35%;
                }
            }
            .nav-mobile {
                padding-top: 78px;
            }
            .logo {
                width: 100px;
            }

            .title__main {
                font-size: 45px;
            }

            .main__heading {
                font-size: 50px;
            }

            .section__title {
                font-size: 35px;
            }

            .section__title__secondary {
                font-size: 35px;

            }

            .section__title__main {
                font-size: 35px;

            }

            .iban-title {
                font-size: 35px;
            }

            .card-btns {
                flex-direction: column;
            }

            .section__subtitle {
                font-size: 25px;

            }

            .visa_card_title {
                font-size: 35px;
            }

            .footer__link-list {
                flex-direction: column;
            }

            .masthead__title {
                font-size: 35px;
            }

            .masthead__title__secondary {
                font-size: 35px;
            }

            .cta-block__title {
                font-size: 23px;
            }

            .cta-block {
                padding: 18px;
            }

            .accordion-item {
                padding: 12px;
            }

            .mini-block__title {
                font-size: 28px;
            }

            .text-box {
                padding: 30px;
                flex-direction: column;
                padding-bottom: 0px;
                padding-top: 0px;
            }

            .industry-headings {
                font-size: 60px;
            }

            .temporary-margin {
                margin-left: 0px;
                margin-right: 0px;
            }

            .list-style {
                display: block;
                width: 100%;
            }

            .list-text {
                padding: 20px;
            }

            .active-list-text {
                padding: 20px;
            }

            .list-gap {

                display: block;
                list-style-type: disc;
            }

            .mobile-spacing {
                margin-bottom: 20px;
                margin-top: 20px;
            }
        }

        @media (max-width: 576px) {
            .around{
                width: 100%;
            }
            .heading{
                font-size: 30px;
            }
            .box-faq {
                height: 300px;
                position: relative;
                .box-faq-v2__image{
                    object-fit: contain;
                    height: 200px;
                    width: 200px;
                    position: absolute;
                    bottom: 50px;
                    right: 25%;
                }
            }
            .pad{
                padding-top: 70px
            }
            .box-note {
                flex-direction: column;
            }

            .footer-box {
                /* padding: 20px; */
            }

            .section__inner {
                /* padding:0 40px 0 40px; */
            }

            .text-box {
                padding: 30px;
                flex-direction: column;
                padding-bottom: 0px;
                padding-top: 0px;
            }

            .industry-headings {
                font-size: 40px;
            }

            .list-style {
                display: block;
                width: 100%;
            }

            .right-aligned {
                text-align: left;
            }

            .left-aligned {
                text-align: left;
            }

            .col-image {
                order: 1;
                /* Always show the image first */
            }

            .col-text {
                order: 2;
                /* Text comes second */
            }
        }

        @media (max-width: 480px) {
            .space{
                width: 95%;
            }
            .title__main {
                font-size: 30px !important;
            }

            .main__heading {
                font-size: 30px !important;
                /* line-height: 1; */
            }

            .section-title {
                font-size: 25px;
                padding-bottom: 10px;
                font-weight: 700;
            }

            .section__title__secondary {
                font-size: 40px;
            }

            .section__title__main {
                font-size: 40px;

            }

            .iban-title {
                font-size: 30px;
            }

            .section__subtitle {
                font-size: 30px;

            }

            .visa_card_title {
                font-size: 30px;
            }

            .section__inner {
                padding: 20px;
            }

            .mini-block-v3 {
                padding: 20px;
            }


            .mini-block-v2 {
                padding: 20px;
            }

            .mt-5 {
                margin-top: 40px !important;
            }

            .mb-5 {
                margin-bottom: 40px !important;
            }

            .box__screen-wrapper {
                display: none;
            }

            .tables td {
                font-weight: 600;
                line-height: 1.2;
                padding: 10px;
                font-size: 14px;
                max-width: 33vw;
            }

            .tables tr td:first-child {
                padding-left: 10px;
                border-radius: calc(4* var(--ray)) 0 0 calc(4* var(--ray));
            }

            .tables th {
                font-size: 30px;
                font-weight: 500;
                line-height: 1.2;
                padding: 10px;
                font-size: 14px;
            }
            .videoMain{
                height: 300px;
            }

            .account-card__price-list {
                padding: 10px;
            }

            .account-card__bottom {
                padding: 10px;
            }

            .account-card__price-name {
                font-weight: 600;
                font-size: 14px;
            }

            .account-card__price-value {
                font-size: 14px;
            }

            .tables td:not(:first-child) {
                text-align: center;
                font-size: 14px;
            }


            .mini-block {
                padding: 20px;
            }

            .welcome-text {
                padding: 20px;
            }

            .owl-item {
                width: 100%;
            }

            .how-text {
                padding: 20px;
            }

            .ready__title {
                font-size: 30px;
            }

            .contact-info {
                padding: 20px;
            }

            .contact-box__link {
                font-size: 14px;
            }

            .contact-box__title {
                font-size: 20px;
            }


            .contact-box__text {
                font-size: 14px;
            }

            .business__figure-top {
                display: none;
            }

            .business__figure-bottom {
                display: none;
            }

            .business {
                padding: 20px;
            }

            .business__inner {
                width: 100%;
            }

            .feedback {
                padding: 20px;
            }

            .body {
                margin-top: 120px;
            }

            .text-box {
                padding: 30px;
                flex-direction: column;
                padding-bottom: 0px;
                padding-top: 0px;
            }

            .industry-headings {
                font-size: 35px;
            }

            .list-style {
                display: block;
                width: 100%;
            }

            .right-aligned {
                text-align: left;
            }

            .left-aligned {
                text-align: left;
            }

            .col-image {
                order: 1;
                /* Always show the image first */
            }

            .col-text {
                order: 2;
                /* Text comes second */
            }

        }





        @keyframes pulse {
            0% {
                -webkit-box-shadow: none;
                box-shadow: none
            }

            50% {
                -webkit-box-shadow: 0 0 20px rgba(143, 39, 199, 0.75);
                box-shadow: 0 0 20px rgba(143, 39, 199, 0.75)
            }

            100% {
                -webkit-box-shadow: none;
                box-shadow: none
            }
        }

        @keyframes slideDown {
            0% {
                top: -100%;
            }

            100% {
                top: 0;
            }
        }


        .icon-box {
            width: 120px;
            height: 120px;
            background: #F5FAFF;
            border-radius: 100%;
            margin: 0;
            align-self: center;
            align-content: center;
        }

        .small-btn {
            font-size: 20px;
            padding: 10px 10px;
            margin: 0;
            line-height: 20px;
            height: auto;
        }

        .dropdown-menu-title {
            padding-right: 22px;
        }

        .scroller {
            overflow: hidden;
            white-space: nowrap;
            width: 100%;
        }

        .scroller__inner {
            display: flex;
            transition: transform 0.5s ease;
        }

        .scroller__item {
            flex: 0 0 auto;

            margin-right: 10px;
        }

        .scroller {
            overflow: hidden;
            position: relative;
        }

        .scroller__inner {
            display: flex;
            animation: scroll 10s linear infinite;
        }

        .scroller__inner_reverse {
            display: flex;
            animation: scrollReverse 10s linear infinite;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        @keyframes scrollReverse {
            0% {
                transform: translateX(-50%);
            }

            100% {
                transform: translateX(0%);
            }
        }

        .animated-card {
            background-color: #fafbfd;
            border-radius: 15px;
            box-shadow: 0px 0px 5px 0px #2334451F
        }

        .industries-categories-list {
            background-size: cover;
            height: 150px;
            background-position: center;
            /* width: 100%; */
            border-radius: 10px;
            cursor: pointer;
        }

        .industries-overlay {
            background-color: rgba(0, 0, 0, 0.4);
            height: 100%;
            width: 100%;
            border-radius: 10px;
            align-items: center;
            text-align: center;
            display: flex;
            justify-content: center;
        }

        #industries-section {
            display: none;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;

        }

        #industries-section.show {
            display: block;
            opacity: 1;
        }

        .zoom-card {
            transition: transform 0.3s ease;
            /* Smooth transition for the zoom effect */
        }

        .zoom-card:hover {
            transform: scale(1.05);
            /* Zoom in the entire card to 105% on hover */
        }

        .zoom-image {
            transition: transform 0.5s ease;
            /* Smooth transition for the zoom effect */
        }

        .zoom-image:hover {
            transform: scale(1.1);
            /* Zoom in the entire card to 105% on hover */
        }

        .subtitle {
            max-width: 500px;
            margin-bottom: 50px;
            color: #1F1E1F;
            font-family: raleway;
            font-size: 24px;
            font-style: normal;
            font-weight: 600;
            line-height: 130%;
        }



        .industry-main-box {
            background-size: cover;
            height: 200px;
            background-position: center;
            width: 100%;
            border-radius: 20px;
            height: 100%;
        }

        .industry-overlay {
            background-color: rgba(0, 0, 0, 0.5);
            height: 100%;
            width: 100%;
            border-radius: 20px;
            text-align: left;
            min-height: 600px;
            display: flex;
            align-items: center;

        }

        .industry-solution-box {
            background-color: #f9f0ff;
            border-radius: 20px;
        }

        .blur-background {
            filter: blur(10px);
            transition: filter 0.3s ease;
            /* Smooth transition */
        }
    </style>


    <title>MetaX <?php echo $title ? ' | ' . $title : '' ?></title>

    <!-- meta description -->
    <meta name="description"
        content="<?php echo $description ? $description : 'Global Payment Solutions for Business Owners' ?>">

    <!-- meta keywords -->
    <?php
    $default_keywords = 'MetaX, digital wallet, store, send, receive, digital currencies, sepa, swift, business account, euorpe';
    ?>
    <meta name="keywords" content="<?php echo $keywords ? $default_keywords . $keywords : $default_keywords ?>">
</head>
<section class="fixed-header w-100">
    <div class="w-100 header container">
        <div class=" w-100" style="display:flex; justify-content:space-between;align-items:center;">
            <a class="" href="<?php echo $url ?>"><img class="logo" style="width: 130px!important;"
                    src="<?php echo $url; ?>assets/images/new_logo_global.png" alt="MetaX"></a>
            <div class="">
                <ul class="navbar-new" style="font-weight:600">
                    <li class="dropmenu">
                        <a class="dropmenu" href="#">
                            <span class="dropdown-menu-title ">Products</span>
                        </a>

                        <ul class="dropmenulist">

                            <!-- <li>
                                <a href="<?php echo $url ?>pages/features/euro-account">EUR Account</a>
                            </li>
                            <li>
                                <a href="<?php echo $url ?>pages/features/usd-account">USD Account</a>
                            </li>
                            <li>
                                <a href="<?php echo $url ?>pages/features/gbp-account">GBP Account</a>
                            </li> -->
                            <li>
                                <a href="<?php echo $url ?>pages/features/gbp-account">UK Faster Payments</a>
                            </li>
                            <li>
                                <a href="<?php echo $url ?>pages/features/sepa-payments">SEPA Payments</a>
                            </li>
                            <li>
                                <a href="<?php echo $url ?>pages/features/swift-payments">SWIFT Payments</a>
                            </li>
                            <!-- <li>
                                <a href="<?php echo $url ?>pages/features/multi-currency-account">Multi-currency
                                    Account</a>
                            </li> -->
                            <!-- <li>
                                <a href="<?php echo $url ?>pages/features/start-up-business">Start-up Business
                                    Account</a>
                            </li> -->
                            <!-- <li>
                                <a href="<?php echo $url ?>pages/features/non-canadian-resident">Non-Canadian
                                    Resident</a>
                            </li> -->
                            <li>
                                <a href="<?php echo $url ?>pages/features/apple-pay">Apple Pay</a>
                            </li>

                            <li>
                                <a href="<?php echo $url ?>pages/features/metax-app">Metax Mobile App</a>
                            </li>

                            <li>
                                <a href="<?php echo $url ?>pages/features/corporate-visa">Corporate Visa Card</a>
                            </li>
                        </ul>

                    </li>
                    <!-- <li class="dropmenu">
                        <a class="navs-link dropmenu" href="#">
                            <span class="dropdown-menu-title">Pricing</span>
                        </a>

                        <ul class="dropmenulist">
                            <li>
                                <a href="<?php echo $url ?>pages/pricing/pricing-for-business">Pricing for Business</a>
                            </li>
                            <li>
                                <a href="<?php echo $url ?>pages/pricing/pricing-for-individual">Pricing for
                                    Individual</a>
                            </li>
                        </ul>
                    </li> -->
                    <li class="">
                        <a  href="<?php echo $url ?>pages/pricing/pricing-for-business">Business</a>
                    </li>
                    <li class="">
                        <a  href="<?php echo $url ?>pages/pricing/pricing-for-individual">Personal</a>
                    </li>





                    <li class="dropmenu industries position-relative" id="industries-menu">
                        <a class=" dropmenu" href="#">
                            <span class=" dropdown-menu-title">Industries</span>
                        </a>

                        <div class="dropdown-full-width">

                        </div>
                    </li>






                    <li class="">
                        <a href="<?php echo $url ?>pages/blog">Blog</a>
                    </li>
                    <li class="">
                        <a href="<?php echo $url ?>pages/about-us">About Us</a>
                    </li>
                    <li class="">
                        <a href="<?php echo $url ?>pages/contact-us">Contact Us</a>
                    </li>

                </ul>
            </div>
            <div class="d-flex gap-4 navbuttons">
                <a href="<?php echo $login_url ?>" class="btn-main btn-second">
                    Login
                </a>

                <button onclick="gtag_report_conversion('/wallet/register-client')" class="btn-main">Sign Up</button>
                <!-- <a onclick="gtag_report_conversion('/wallet/register-client')" href="<?php echo $open_account_url ?>" class="btn-main">
                    Sign Up
                </a> -->
            </div>
            <button id="hamburger" type="button" class="btn hamburger d-xxl-none">
                Menu
                <span class="hamburger__box"></span>
            </button>
        </div>
    </div>

    <div id="industries-section" style="display: none;justify-content:center;width:100%">
        <div class="text-start" style="padding:30px 20px 60px 20px">
        <div class="">
                <h2 class="pb-3" style="text-align:start;color:#8f27c7;font-weight:700;margin-bottom:0px;padding-bottom:0px;">
                    We’re Regulated & Authorized
                </h2>
            </div>
            <span style=""">
                Metax Payments offers personalised payment services to multiple industries across the globe.<br> <span class="pt-3">Here
                are
                some examples of industries we support:</span>
            </span>

            
        </div>

      <main  class=" container pb-5" >
     
        <div class="row d-flex flex-wrap gap-2">

            <div class="col-2">
                <a href="<?php echo $url ?>pages/features/ecommerce-industry">
                    <div class="industries-categories-list zoom-image"
                        style="background-image: url('<?php echo $url ?>/assets/images/industry-e-commerce.webp');">
                        <div class="industries-overlay">
                            <h4 style="font-size:18px;color:white">
                                E-commerce
                            </h4>
                        </div>
                    </div>
                </a>

            </div>


            <div class="col-2">
                <a href="<?php echo $url ?>pages/features/corporate-fund-administrators">
                    <div class="industries-categories-list  zoom-image"
                        style="background-image: url('<?php echo $url ?>/assets/images/corporate.webp'); ">
                        <div class="industries-overlay">
                            <h4 style="font-size:18px;color:white;text-align:center">
                                Corporates
                            </h4>
                        </div>
                    </div>
                </a>

            </div>

            <div class="col-2">
                <a href="<?php echo $url ?>pages/features/travel-industry">
                    <div class="industries-categories-list  zoom-image"
                        style="background-image: url('<?php echo $url ?>/assets/images/travel.webp');">
                        <div class="industries-overlay">
                            <h4 style="font-size:18px;color:white">
                                Travel & Tourism
                            </h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-2">
                <a href="<?php echo $url ?>pages/features/it-industry">
                    <div class="industries-categories-list  zoom-image"
                        style="background-image: url('<?php echo $url ?>/assets/images/it.webp'); ">
                        <div class="industries-overlay">
                            <h4 style="font-size:18px;color:white">
                                Technology
                            </h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-2">
                <a href="<?php echo $url ?>pages/features/import-export-industry">
                    <div class="industries-categories-list  zoom-image"
                        style="background-image: url('<?php echo $url ?>/assets/images/import-export.webp');">
                        <div class="industries-overlay">
                            <h4 style="font-size:18px;color:white">
                                Import & Export
                            </h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-2">
                <a href="<?php echo $url ?>pages/features/construction-industry">
                    <div class="industries-categories-list  zoom-image"
                        style="background-image: url('<?php echo $url ?>/assets/images/construction.webp'); ">
                        <div class="industries-overlay">
                            <h4 style="font-size:18px;color:white">
                                Construction
                            </h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-2">
                <a href="<?php echo $url ?>pages/features/oil-gas-industry">
                    <div class="industries-categories-list zoom-image"
                        style="background-image: url('<?php echo $url ?>/assets/images/oil-gas.webp'); ">
                        <div class="industries-overlay">
                            <h4 style="font-size:18px;color:white">
                                Oil & Gas
                            </h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-2">
                <a href="<?php echo $url ?>pages/features/real-estate-industry">
                    <div class="industries-categories-list zoom-image"
                        style="background-image: url('<?php echo $url ?>/assets/images/real-estate.webp'); ">
                        <div class="industries-overlay">
                            <h4 style="font-size:18px;color:white">
                                Real Estate
                            </h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
      </main>

       


    </div>
</section>

<div class="nav-mobile" id="nav-mob">
    <div class="mobile_menu_wrapper">
        <div class="d-flex gap-4">
            <a href="<?php echo $login_url ?>" class="btn-main btn-second">
                Login
            </a>

            <a href="<?php echo $open_account_url ?>" class="btn-main">
                Sign Up
            </a>
        </div>
        <div class="">
            <ul class="main-menu">
                <li class="main-menu__item dropmenu">
                    <a class="navs-link dropmenu" href="#">
                        <span class="dropdown-menu-title">Products</span>
                    </a>

                    <ul class="dropdownmob d-none">

                        <!-- <li>
                            <a href="<?php echo $url ?>pages/features/euro-account">EUR Account</a>
                        </li>
                        <li>
                            <a href="<?php echo $url ?>pages/features/usd-account">USD Account</a>
                        </li>
                        <li>
                            <a href="<?php echo $url ?>pages/features/gbp-account">GBP Account</a>
                        </li> -->
                        <li>
                            <a href="<?php echo $url ?>pages/features/gbp-account">UK Faster Payments</a>
                        </li>
                        <li>
                            <a href="<?php echo $url ?>pages/features/sepa-payments">SEPA Payments</a>
                        </li>
                        <li>
                            <a href="<?php echo $url ?>pages/features/swift-payments">SWIFT Payments</a>
                        </li>
                        <!-- <li>
                            <a href="<?php echo $url ?>pages/features/multi-currency-account">Multi-currency
                                Account</a>
                        </li> -->

                        <!-- <li>
                            <a href="<?php echo $url ?>pages/features/start-up-business">Start-up Business Account</a>
                        </li> -->
                        <!-- <li>
                            <a href="<?php echo $url ?>pages/features/non-canadian-resident">Non-Canadian Resident</a>
                        </li> -->
                        <li>
                            <a href="<?php echo $url ?>pages/features/apple-pay">Apple Pay</a>
                        </li>

                        <li>
                            <a href="<?php echo $url ?>pages/features/metax-app">Metax Mobile App</a>
                        </li>

                        <li>
                            <a href="<?php echo $url ?>pages/features/corporate-visa">Corporate Visa Card</a>
                        </li>
                    </ul>

                </li>
                <li class="main-menu__item dropmenu">
                    <a class="navs-link dropmenu" href="#">
                        <span class="dropdown-menu-title">Pricing</span>
                    </a>

                    <ul class="dropdownmob d-none">
                        <li>
                            <a href="<?php echo $url ?>pages/pricing/pricing-for-business">Pricing for Business</a>
                        </li>
                        <li>
                            <a href="<?php echo $url ?>pages/pricing/pricing-for-individual">Pricing for Individual</a>
                        </li>
                    </ul>
                </li>

                <li class="main-menu__item dropmenu">
                    <a class="navs-link dropmenu" href="#">
                        <span class="dropdown-menu-title">Industry</span>
                    </a>

                    <ul class="dropdownmob d-none px-md-5 px-2" style="max-height: 400px;overflow-y: auto;padding-bottom:80px">
                        <li>
                            <div class="text-center" style="padding-bottom:30px;padding-top:10px">
                                <span style="font-size:16px">
                                    Metax Payments offers personalised payment services to multiple industries across
                                    the globe. Here are
                                    some examples of industries we support.
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="<?php echo $url ?>pages/features/ecommerce-industry">
                                <div class="industries-categories-list zoom-image"
                                    style="background-image: url('<?php echo $url ?>/assets/images/industry-e-commerce.webp');">
                                    <div class="industries-overlay">
                                        <h4 style="font-size:25px;font-weight:700;color:white">
                                            E-commerce
                                        </h4>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo $url ?>pages/features/corporate-fund-administrators">
                                <div class="industries-categories-list  zoom-image"
                                    style="background-image: url('<?php echo $url ?>/assets/images/corporate.webp'); ">
                                    <div class="industries-overlay">
                                        <h4 style="font-size:25px;font-weight:700;color:white;text-align:center">
                                            Corporate & Fund Administrators
                                        </h4>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo $url ?>pages/features/travel-industry">
                                <div class="industries-categories-list  zoom-image"
                                    style="background-image: url('<?php echo $url ?>/assets/images/travel.webp');">
                                    <div class="industries-overlay">
                                        <h4 style="font-size:25px;font-weight:700;color:white">
                                            Travel
                                        </h4>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo $url ?>pages/features/it-industry">
                                <div class="industries-categories-list  zoom-image"
                                    style="background-image: url('<?php echo $url ?>/assets/images/it.webp'); ">
                                    <div class="industries-overlay">
                                        <h4 style="font-size:25px;font-weight:700;color:white">
                                            IT & Technology
                                        </h4>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo $url ?>pages/features/import-export-industry">
                                <div class="industries-categories-list  zoom-image"
                                    style="background-image: url('<?php echo $url ?>/assets/images/import-export.webp');">
                                    <div class="industries-overlay">
                                        <h4 style="font-size:25px;font-weight:700;color:white">
                                            Import & Export
                                        </h4>
                                    </div>
                                </div>
                            </a>
                        </li>


                        <li>
                            <a href="<?php echo $url ?>pages/features/construction-industry">
                                <div class="industries-categories-list  zoom-image"
                                    style="background-image: url('<?php echo $url ?>/assets/images/construction.webp'); ">
                                    <div class="industries-overlay">
                                        <h4 style="font-size:25px;font-weight:700;color:white">
                                            Construction
                                        </h4>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo $url ?>pages/features/oil-gas-industry">
                                <div class="industries-categories-list zoom-image"
                                    style="background-image: url('<?php echo $url ?>/assets/images/oil-gas.webp'); ">
                                    <div class="industries-overlay">
                                        <h4 style="font-size:25px;font-weight:700;color:white">
                                            Oil & Gas
                                        </h4>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo $url ?>pages/features/real-estate-industry">
                                <div class="industries-categories-list zoom-image"
                                    style="background-image: url('<?php echo $url ?>/assets/images/real-estate.webp'); ">
                                    <div class="industries-overlay">
                                        <h4 style="font-size:25px;font-weight:700;color:white">
                                            Real Estate
                                        </h4>
                                    </div>
                                </div>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="main-menu__item">
                    <a class="navs-link" href="<?php echo $url ?>pages/blog">Blog</a>
                </li>
                <li class="main-menu__item">
                    <a class="navs-link" href="<?php echo $url ?>pages/about-us">About Us</a>
                </li>
                <li class="main-menu__item">
                    <a class="navs-link" href="<?php echo $url ?>pages/contact-us">Contact Us</a>
                </li>

            </ul>
        </div>
    </div>
</div>

<script>
    // javascript for hover dropdown
    const dropdown = document.querySelectorAll('.dropmenu');
    dropdown.forEach((drop) => {
        drop.addEventListener('mouseover', () => {
            drop.querySelector('.dropmenulist').style.opacity = '1';
            drop.querySelector('.dropmenulist').style.top = '5px';
            drop.querySelector('.dropmenulist').style.visibility = 'visible';
            drop.querySelector('.dropdown-menu-title').style.transform = 'translateY(-50%) rotate(180deg)';
        });
        drop.addEventListener('mouseout', () => {
            drop.querySelector('.dropmenulist').style.opacity = '0';
            drop.querySelector('.dropmenulist').style.visibility = 'hidden';
            drop.querySelector('.dropdown-menu-title').style.transform = 'translateY(-50%) rotate(0deg)';
        });
    });

    // javascript for mobile menu
    const hamburger = document.getElementById('hamburger');
    const navMob = document.getElementById('nav-mob');
    hamburger.addEventListener('click', () => {
        navMob.classList.toggle('show');
    });

    const dropdownmob = document.querySelectorAll('.dropmenu');
    dropdownmob.forEach((drop) => {
        drop.addEventListener('click', () => {
            drop.querySelector('.dropdownmob').classList.toggle('d-none');
        });
    });



    const scrollers = document.querySelectorAll(".scroller");

    if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
        addAnimation();
    }

    function addAnimation() {
        scrollers.forEach((scroller) => {

            scroller.setAttribute("data-animated", true);

            const scrollerInner = scroller.querySelector(".scroller__inner");
            const scrollerContent = Array.from(scrollerInner.children);

            scrollerContent.forEach((item) => {
                const duplicatedItem = item.cloneNode(true);
                duplicatedItem.setAttribute("aria-hidden", true);
                scrollerInner.appendChild(duplicatedItem);
            });
        });
    }



    document.addEventListener('DOMContentLoaded', function () {
        const industriesMenu = document.querySelector('.industries');
        const industriesSection = document.getElementById('industries-section');
        const body = document.getElementById('top-container');


        let hideTimeout;

        // Function to show the section
        const showSection = () => {
            clearTimeout(hideTimeout);
            industriesSection.style.display = 'flex';
            industriesSection.classList.add('show'); // Adds a fade-in effect
            // body.classList.add('blur-background');

        };

        // Function to hide the section
        const hideSection = () => {
            hideTimeout = setTimeout(() => {
                industriesSection.classList.remove('show'); // Starts fade-out effect
                industriesSection.style.display = 'none'; // Hide after fade-out
                body.classList.remove('blur-background');
            }, 100);
        };

        industriesMenu.addEventListener('mouseenter', showSection);
        industriesMenu.addEventListener('mouseleave', hideSection);

        industriesSection.addEventListener('mouseenter', showSection);
        industriesSection.addEventListener('mouseleave', hideSection);
    });











    document.addEventListener('DOMContentLoaded', function () {
        const cards = document.querySelectorAll('.stack-card');
        const numCards = cards.length;
        const containerHeight = window.innerHeight;

        // Event listener for scroll
        window.addEventListener('scroll', () => {
            const scrollTop = window.scrollY;
            const triggerPoint = Math.floor(scrollTop / (containerHeight / numCards));

            // Ensure only the correct card is active based on scroll position
            cards.forEach((card, index) => {
                if (index <= triggerPoint) {
                    card.classList.add('active');
                } else {
                    card.classList.remove('active');
                }
            });
        });
    });







</script>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K6W5HNZ4" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<section class="body">