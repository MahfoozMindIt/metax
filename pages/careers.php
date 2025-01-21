<?php
$title = "Careers";
$description = "Join us on the journey to success and elevate your professional life to new heights. Grow with our team and unlock endless opportunities for advancement and fulfillment.";
$keywords = "careers, job openings, metax, metax careers, metax job openings";
include '../header.php';
?>

<style>
    .jobs__available {
        margin-top: 50px;
    }

    .job {
        margin-top: auto;
        max-width: 200px;
    }

    .job__category {
        background: white;
        max-width: fit-content;
        padding: 10px 15px 10px 15px;
        border-radius: 20px;
    }

    .title {
        margin: 30px;
        font-weight: 700;
    }
</style>
<section class="container mt-5 mb-3" id="top-container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div style="text-align:center;">
                <h1 class="masthead__title">
                    Unlock Your Career at Metax
                </h1>
                <div class="fade-animation animated">
                    <p>
                        Join us on the journey to success and elevate your professional life to new heights. Grow with
                        our team and unlock endless opportunities for advancement and fulfillment.
                    </p>
                </div>
            </div>

            <div class="jobs__available">
                <div class="row mb-60">
                    <div class="col-lg-6 col-md-6 p-4">
                        <div class="step" id="new-single-box" style="min-height: 323px;">
                            <p class="job__category">Management</p>
                            <h3>Office State Manager</h3>
                            <p>The Office State Manager is responsible for overseeing the daily operations of multiple
                                office locations within a specific state. This role involves managing office staff,
                                ensuring compliance with company policies and regulations, and optimizing operational
                                efficiency. The ideal candidate will have strong leadership skills, a keen eye for
                                detail, and the ability to handle a variety of administrative tasks.</p>
                            <a href="mailto:careeers@metaxuae.com" class="btn-main job">Apply Now</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 p-4">
                        <div class="step" id="new-single-box" style="min-height: 323px;">
                            <p class="job__category">Developer</p>
                            <h3>Senior Backend Developer</h3>
                            <p>Every day, we’re translating vision into reality by tackling new and exciting
                                challenges head-on. This is a breakthrough stage in our company, and you’ll
                                experience firsthand the infectious enthusiasm of our employees.</p>
                            <a href="mailto:careeers@metaxuae.com" class="btn-main job">Apply Now</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 p-4">
                        <div class="step" id="new-single-box" style="min-height: 323px;">
                            <p class="job__category">Management</p>
                            <h3>Finance Manager</h3>
                            <p>The Finance Manager is responsible for overseeing the financial operations of the
                                company, including budgeting, forecasting, and financial reporting. This role involves
                                managing financial staff, ensuring compliance with accounting standards and regulations,
                                and providing strategic financial insights to support business decisions. The ideal
                                candidate will have strong analytical skills, a solid understanding of financial
                                principles, and excellent leadership abilities.</p>
                            <a href="mailto:careeers@metaxuae.com" class="btn-main job">Apply Now</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 p-4">
                        <div class="step" id="new-single-box" style="min-height: 323px;">
                            <p class="job__category">Design</p>
                            <h3>Full Stack Developer</h3>
                            <p>We are currently seeking a qualified Full Stack Developer to join our team at MetaX
                                and contribute to the development of our products.
                            </p>
                            <a href="mailto:careeers@metaxuae.com" class="btn-main job">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center ">
                    <div class="col-lg-9 mt-4 pt-3" style="text-align:center;">

                        <h1 class="title">Can't find the perfect position?</h1>
                        <p style="margin-bottom:30px;">Feel free to email us your resume regardless! We'll keep it in
                            our records for future positions that align with your qualifications. Our team is always
                            seeking out top talent.</p>
                        <a href="<?php echo $url ?>/pages/contact-us" class="btn-main">Contact Us</a>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
include '../footer.php';
?>