<?php

$conn = new mysqli('localhost:3307', 'root', '', 'portfolio');

if (!isset($_GET['id'])) {

    echo "no data available";
    echo "<a href='./index.php?id=1'>id</a>";
    exit;

} else {

    $id = $_GET['id'];

    $bannerTable = $conn->query("SELECT * FROM `banner` where  `user_id` = $id ");
    $aboutTable = $conn->query("SELECT * FROM `about` where  `user_id` = $id limit 8");
    $factTable = $conn->query("SELECT * FROM `fact` WHERE `user_id`= $id");
    $skillTable = $conn->query("SELECT * FROM `skill` WHERE `user_id`= $id");
    $resumeTable = $conn->query("SELECT * FROM `resume` WHERE `user_id`= $id");
    $serviceTable = $conn->query("SELECT * FROM `service` WHERE `user_id`= $id");
    $testimonialTable = $conn->query("SELECT * FROM `testimonial` WHERE `user_id`= $id");
    $commonTable = $conn->query("SELECT * FROM `common` WHERE `user_id`= $id");
    $generalTable = $conn->query("SELECT * FROM `general` WHERE `user_id`= $id");
    $socialTable = $conn->query("SELECT * FROM `social_link` WHERE `user_id`= $id");


    $BANNER = $bannerTable->fetch_row();
    $aboutData = $aboutTable->fetch_assoc();
    $commonData = $commonTable->fetch_assoc( );
    $generalData = $generalTable->fetch_assoc( );
    $socialData = $socialTable->fetch_all(MYSQLI_ASSOC);


}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MyResume Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

<!-- ======= Mobile nav toggle button ======= -->
<!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
<!-- ======= Header ======= -->
<header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
        <ul>
            <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
            <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
            <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a>
            </li>
            <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a>
            </li>
            <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a>
            </li>
            <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a>
            </li>
        </ul>
    </nav><!-- .nav-menu -->

</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center"
         style="background: url('./assets/img/<?php if(isset($BANNER[2])) { echo $BANNER[2]; } else{ echo " ";} ?>')   top right no-repeat; background-size: cover;width: 100%">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
        <h1><?php if(isset($BANNER[3])) {echo $BANNER[3];} else{echo "";} ?></h1>
        <p>I'm <span class="typed" data-typed-items="<?php if(isset($BANNER[4])) {echo $BANNER[4];} else{echo "";} ?>"></span></p>
        <div class="social-links">

            <?php
               if(isset($socialData)){
                   foreach ($socialData as $value){ ?>
                       <a href="<?= $value['link']; ?>" class="twitter"><i class="fa fa-<?= $value['icon']; ?>"></i></a>

            <?php
                   }
               }

            ?>
        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><?php if (isset($aboutData['title'])) {
                        echo $aboutData['title'];
                    } else {
                        echo "About Me";
                    } ?></h2>
                <p><?php if (isset($aboutData['subTitle'])) {
                        echo $aboutData['subTitle'];
                    } else {
                        echo "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,";
                    } ?></p>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <?php
                    if (isset ($aboutData['img'])) { ?>
                        <img src="assets/img/<?= $aboutData['img']; ?>" class="img-fluid" alt="">
                        <?php
                    } else { ?>
                        <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
                        <?php
                    }

                    ?>

                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content">
                    <h3><?php if (isset($aboutData['subTitle'])) {
                            echo $aboutData['subTitle'];
                        } else {
                            echo "Demo Position";
                        } ?></h3>
                    <p class="fst-italic">
                        <?php if (isset($aboutData['bioDescription'])) {
                            echo $aboutData['bioDescription'];
                        } else {
                            echo "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,";
                        } ?>
                    </p>
                    <div class="row">


                        <div class="col-lg-6">
                            <ul>
                                <?php
                                if(isset($aboutData['biodata'])){
                                    $json = json_decode($aboutData['biodata']);
                                }

                                $i = 0;
                                foreach ($json as $key => $item) {
                                    ++$i;
                                    if ($i % 2 != 0) {
                                        ?>
                                        <li><i class="bi bi-chevron-right"></i> <strong><?php echo $key; ?>:</strong>
                                            <span><?php echo $item; ?></span></li>
                                        <?php
                                    }
                                }

                                ?>


                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <?php

                                $i = 0;
                                foreach ($json as $key => $item) {
                                    ++$i;
                                    if ($i % 2 == 0) {
                                        ?>
                                        <li><i class="bi bi-chevron-right"></i> <strong><?php echo $key; ?>:</strong>
                                            <span><?php echo $item; ?></span></li>
                                        <?php
                                    }
                                }

                                ?>


                            </ul>
                        </div>
                    </div>
                    <p>
                        <?php if (isset($aboutData['bioDescription'])) {
                            echo $aboutData['bioDescription'];
                        } else {
                            echo "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,";
                        } ?>
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><?php if(isset($commonData['fact_title'])){echo $commonData['fact_title'];} else{echo "";} ?></h2>
                <p><?php if (isset($commonData['fact_desc'])){ echo $commonData['fact_desc'];} else{echo "";} ?></p>
            </div>

            <div class="row">

                <?php
                while ($factData = $factTable->fetch_assoc()) { ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="fa fa-<?php if (isset($factData['icon'])){ echo $factData['icon'];} else{echo "";} ?>"></i>
                            <span data-purecounter-start="0" data-purecounter-end="<?php if (isset($factData['fact_title'])){ echo $factData['fact_title'];} else{echo "";} ?>"
                                  data-purecounter-duration="1" class="purecounter"></span>
                            <p><?php if (isset($factData['fact_description'])){ echo $factData['fact_description'];} else{echo "";} ?></p>
                        </div>
                    </div>

                    <?php
                }
                ?>


            </div>

        </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><?php if (isset($commonData['skill_title'])){ echo $commonData['skill_title'];} else{echo "";} ?></h2>
                <p><?php if (isset($commonData['skill_desc'])){ echo $commonData['skill_desc'];} else{echo "";} ?></p>
            </div>

            <div class="row skills-content">

                <?php
                $skillData = $skillTable->fetch_all(MYSQLI_ASSOC);
                ?>
                <div class="col-lg-6">

                    <?php
                    $i=0;
                    if(isset($skillData)){
                    foreach ($skillData as $skillElement) {
                           ++$i;
                           if($i%2 != 0){ ?>

                               <div class="progress">
                                    <span class="skill"><?=   $skillElement['skill_name']; ?> <i
                                    class="val"><?= $skillElement['skill_percent']; ?> %</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?= $skillElement['skill_percent']; ?>" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                               </div>

                        <?php
                           }
                        ?>

                        <?php
                    }
                    }
                    ?>


                </div>

                <div class="col-lg-6">

                    <?php
                    $i=0;
                    if(isset($skillData)){
                        foreach ($skillData as $skillElement) {
                            ++$i;
                            if($i%2 == 0){ ?>

                                <div class="progress">
                                    <span class="skill"><?=   $skillElement['skill_name']; ?> <i
                                                class="val"><?= $skillElement['skill_percent']; ?> %</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <?php
                            }
                            ?>

                            <?php
                        }
                    }
                    ?>


                </div>
            </div>
        </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><?= $commonData['resume_title']; ?></h2>
                <p><?= $commonData['resume_desc']; ?></p>
            </div>

            <?php
               $resumeData = $resumeTable->fetch_all(MYSQLI_ASSOC);

            ?>
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="resume-title">Summery</h3>
                    <?php
                       if(isset($resumeData)){
                           foreach ($resumeData as $value){
                               if($value['resume_type'] == 'summery'){ ?>

                                   <div class="resume-item pb-0">
                                       <h4><?= $value['course_title']; ?></h4>
                                       <p><em><?= $value['course_desc']; ?></em></p>
<!--                                                                          <ul>-->
<!--                                                                              <li>Portland par 127,Orlando, FL</li>-->
<!--                                                                              <li>(123) 456-7891</li>-->
<!--                                                                              <li>alice.barkley@example.com</li>-->
<!--                                                                          </ul>-->
                                   </div>
                    <?php
                               }
                           }
                       }

                    ?>


                    <h3 class="resume-title">Education</h3>
                    <?php
                    if(isset($resumeData)){
                        foreach ($resumeData as $value){
                            if($value['resume_type'] == 'education'){ ?>

                                <div class="resume-item pb-0">
                                    <h4><?= $value['course_title']; ?></h4>
                                    <h4><?= $value['course_duration']; ?></h4>
                                    <p><em><?= $value['course_desc']; ?></em></p>
                                </div>
                                <?php
                            }
                        }
                    }

                    ?>


                </div>
                <div class="col-lg-6">
                    <h3 class="resume-title">Professional Experience</h3>
                    <?php
                    if(isset($resumeData)){
                        foreach ($resumeData as $value){
                            if($value['resume_type'] == 'experience'){ ?>

                                <div class="resume-item pb-0">
                                    <h4><?= $value['course_title']; ?></h4>
                                    <h4><?= $value['course_duration']; ?></h4>
                                    <p><em><?= $value['course_desc']; ?></em></p>
                                </div>
                                <?php
                            }
                        }
                    }

                    ?>
                </div>
            </div>

        </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->

    <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <?php
            $query = "select * from `portfolio` WHERE `user_id` = $id group by port_category order by port_category asc";
                                $result = $conn->query($query);
                                $resultData = $result->fetch_all(MYSQLI_ASSOC);

                                foreach($resultData as $data){
                                    $category = $data['port_category'];

                                    ?>
                        <li data-filter=".filter-<?= strtolower($category)?>"><?= strtoupper($category)?></li>
                        <?php }?>

                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                <?php foreach ($resultData as $data ):?>

                <div class="col-lg-4 col-md-6 portfolio-item filter-<?= strtolower($data['port_category'])?>">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/<?= $data['img']?>" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><?= $data['port_title']?></h4>
                            <p><?= $data['port_category']?></p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/<?= $data['img']?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $data['port_title']?>"><i class="bx bx-plus"></i></a>
                                <a href="/myphp.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>



            </div>

        </div>
    </section><!-- End Portfolio Section -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><?php if(isset($commonData['service_title'])) { echo $commonData['service_title']; } else{ echo "Services";} ?></h2>
                <p><?php if(isset($commonData['service_desc'])) { echo $commonData['service_desc']; } else{ echo "Services Description";} ?></p>
            </div>

            <div class="row">

                <?php
                while ($serviceData = $serviceTable->fetch_assoc()) { ?>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                         data-aos-delay="300">
                        <div class="icon-box iconbox-teal">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                          d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                                </svg>
                                <i class="fa fa-<?= $serviceData['service_icon']; ?>"></i>
                            </div>
                            <h4><a href=""><?= $serviceData['service_title']; ?></a></h4>
                            <p><?= $serviceData['service_desc']; ?></p>
                        </div>
                    </div>
                    <?php
                }
                ?>


            </div>
        </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><?php if(isset($commonData['testi_title'])) { echo $commonData['testi_title']; } else{ echo "Testimonials";} ?></h2>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <?php
                    while ($testiData = $testimonialTable->fetch_assoc()) { ?>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/<?php if(isset($testiData['testi_img'])) { echo $testiData['testi_img']; } else{ echo "testimonials-4.jpg";} ?>"
                                     class="testimonial-img" alt="">
                                <h3><?php if(isset($testiData['testi_name'])) { echo $testiData['testi_name']; } else{ echo "Demo Name";} ?></h3>
                                <h4><?php if(isset($testiData['testi_position'])) { echo $testiData['testi_position']; } else{ echo "Demo Position";} ?></h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    <?php if(isset($testiData['testi_desc'])) { echo $testiData['testi_desc']; } else{ echo "Demo Description";} ?>
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <?php
                    }
                    ?>


                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><?php if(isset($commonData['contact_title'])) { echo $commonData['contact_title']; } else{ echo "Demo Title";} ?></h2>
            </div>

            <div class="row mt-1">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p><?php if(isset($generalData['addr'])){ echo $generalData['addr']; }  else{ echo 'Demo Address';} ?></p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p><?php if(isset($generalData['email'])){ echo $generalData['email']; }  else{ echo 'Demo@email.com';} ?></p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p><?php if(isset($generalData['phone'])){ echo $generalData['phone']; }  else{ echo '876483';} ?></p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                       required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                       placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                   required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                      required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <h3><?php if(isset($BANNER[3])){ echo $BANNER[3]; }  else{ echo 'Demo Address';} ?></h3>
        <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi
            placeat.</p>
        <div class="social-links">

            <?php
                if(isset($socialData)){
                    foreach ($socialData as $value){ ?>
                        <a href="<?= $value['link']; ?>" class="twitter"><i class="fa fa-<?= $value['icon']; ?>"></i></a>

                        <?php
                    }
                }

            ?>
        </div>
        <div class="copyright">
            <?php if(isset($generalData['footer_text'])){ echo $generalData['footer_text']; }  else{ echo 'Demo Address';} ?>
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/typed.js/typed.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>