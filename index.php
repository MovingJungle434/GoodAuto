<?php require_once("include/db.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gefestion</title>
    <link rel="shortcut icon" href="/image/6937158.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/css/scss.css">
    <script src="/js/onscroll.js" defer></script>
</head>

<body>
    <?php
    session_start()
        ?>
    <header>
        <div class="container">
            <div class="header_img">
                <img src="/image/82a6e4ff8ed166816a62193497fd3e15.jpg" alt="">
            </div>
            <hr>
            <div class="header_div">
                <a href="#about_us" class="opacity">About us</a>
                <a href="#advantages" class="opacity1">Advantages</a>
                <a href="#our_clients" class="opacity2">Our clients</a>
                <a href="#contact" class="opacity3">Contacts</a>
                <span>
                    <?php if (isset($_SESSION['admin'])) {
                        if ($_SESSION['admin'] == 1) {
                            ?>
                            <a href="pages/admin/choose.php" class="opacity4">Admin</a>
                            <?php
                        }
                    } ?>
                </span>
            </div>
            <hr>
        </div>
    </header>
    <section class="header_slider">
        <div class="slider">
            <div class="item">
                <img src="/image/2023-Audi-RS6-Avant-.jpg">
                <p>CARS THAT DEFINE YOUR LIFESTYLE</p>
            </div>
            <div class="item">
                <img src="/image/2023-Porsche-911-Spo.jpg">
                <p>DRIVE THE DREAM, LIVE THE ADVENTURE</p>
            </div>
            <div class="item">
                <img src="/image/2024-Mercedes-AMG-CL.jpg">
                <p>YOUR JOURNEY STARTS HERE, BEHIND THE WHEEL</p>
            </div>

            <a class="previous" onclick="previousSlide()">&#10094;</a>
            <a class="next" onclick="nextSlide()">&#10095;</a>
        </div>
    </section>
    <section class="about_us" id="about_us">
        <div class="container">
            <div class="about_us_left" id="about_us_left" style="visibility: hidden;">
                <h1>About us</h1>
                <p>Our passion for automobiles drives us. We're
                    committed to providing a seamless experience, offering a
                    curated selection of vehicles that embody quality, performance, and style. At our dealership,
                    expertise
                    meets personalized service to ensure every customer finds their perfect ride. Whether it's luxury,
                    efficiency, or reliability you seek, we're here to make your car-buying journey memorable and
                    rewarding
                </p>
            </div>
            <div class="about_us_right">
                <div class="div_mercedes">
                    <img class="mercedes" src="/image/2024-Mercedes-AMG-CL (1).jpg" alt="" id="div_mercedes">
                </div>
            </div>
        </div>
    </section>
    <section class="roll" id="roll">
        <div class="container">
            <div class="relative" id="relative" style="visibility: hidden;">
                <?php $cars = mysqli_query($esql, "SELECT * FROM `cars`"); ?>
                <?php foreach ($cars as $car) { ?>
                    <div class="child">
                        <div>
                            <img src="<?php echo $car['main_image'] ?>" alt="">
                        </div>
                        <div>
                            <?php if (!empty($car['name'])) { ?>
                                <h1>
                                    <?php echo $car['name'] ?>
                                </h1>
                            <?php }
                            if (!empty($car['origin'])) { ?>
                                <div>
                                    <h2>Origin</h2>
                                    <p><?php echo $car['origin'] ?></p>
                                </div>
                            <?php }
                            if (!empty($car['mileage'])) { ?>
                                <div>
                                    <h2>Mileage</h2>
                                    <p><?php echo $car['mileage'] ?> km</p>
                                </div>
                            <?php }
                            if (!empty($car['cubic_capacity'])) { ?>
                                <div>
                                    <h2>Cubic Capacity</h2>
                                    <p><?php echo $car['cubic_capacity'] ?> ccm</p>
                                </div>
                            <?php }
                            if (!empty($car['power'])) { ?>
                                <div>
                                    <h2>Power</h2>
                                    <p><?php echo $car['power'] ?></p>
                                </div>
                            <?php }
                            if (!empty($car['fuel'])) { ?>
                                <div>
                                    <h2>Fuel</h2>
                                    <p><?php echo $car['fuel'] ?></p>
                                </div>
                            <?php }
                            if (!empty($car['availability'])) { ?>
                                <div>
                                    <h2>Availability</h2>
                                    <p><?php echo $car['availability'] ?></p>
                                </div>
                            <?php }
                            if (!empty($car['vehicle_condition'])) { ?>
                                <div>
                                    <h2>Vehicle Condition</h2>
                                    <p><?php echo $car['vehicle_condition'] ?></p>
                                </div>
                            <?php }
                            if (!empty($car['price'])) { ?>
                                <div class="price">
                                    <h2>$<?php echo $car['price'] ?></h2>
                                </div>
                            <?php } ?>
                            <a href="pages/show_more.php?id=<?php echo $car['id'] ?>">Learn more</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <section class="show" id="advantages">
        <div class="container">
            <div class="show_left" id="show_left" style="visibility: hidden;">
                <div class="section">
                    <div class="show_img">
                        <img src="/image/choice.png" alt="">
                    </div>
                    <div class="show_text">
                        <h1>Diverse Selection</h1>
                        <p>Explore a wide range of top-quality vehicles, from sleek sedans to robust SUVs, ensuring
                            there's
                            a perfect fit for every lifestyle and preference.</p>
                    </div>
                </div>
                <div class="section">
                    <div class="show_img">
                        <img src="/image/onboarding.png" alt="">
                    </div>
                    <div class="show_text">
                        <h1>Transparent Process</h1>
                        <p>We believe in honesty and transparency. Our team provides clear, upfront information about
                            every vehicle's history, condition, and pricing.</p>
                    </div>
                </div>
                <div class="section">
                    <div class="show_img">
                        <img src="/image/expert.png.webp" alt="">
                    </div>
                    <div class="show_text">
                        <h1>Expert Guidance</h1>
                        <p>Our knowledgeable staff is dedicated to assisting you at every step, offering expert advice
                            and guidance to help you make an informed decision.</p>
                    </div>
                </div>
                <div class="section">
                    <div class="show_img">
                        <img src="/image/accounting.png" alt="">
                    </div>
                    <div class="show_text">
                        <h1>Tailored Financing</h1>
                        <p>We work with you to find flexible financing options that suit your budget and needs, making
                            owning your dream car a reality.</p>
                    </div>
                </div>
                <div class="section">
                    <div class="show_img">
                        <img src="/image/help-desk.png" alt="">
                    </div>
                    <div class="show_text">
                        <h1>Ongoing Support</h1>
                        <p>Our commitment doesn't end at the sale. Count on us for continued support, servicing, and
                            assistance throughout your ownership journey.</p>
                    </div>
                </div>
                <div class="section">
                    <div class="show_img">
                        <img src="/image/testimonials.png" alt="">
                    </div>
                    <div class="show_text">
                        <h1>Customer Satisfaction</h1>
                        <p>Your satisfaction is our priority. We strive to exceed expectations, delivering exceptional
                            service and building lasting relationships with our valued customers.</p>
                    </div>
                </div>
            </div>
            <div class="show_right" id="show_right" style="visibility: hidden;">
                <div class="show_right_img">
                    <img src="/image/2022-Tesla-Model-X-P.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="car" id="our_clients">
        <div class="black">
        </div>
        <div class="container">
            <div class="car_top" id="car_top" style="visibility: hidden">
                <h1>We love our clients</h1>
                <h2>Our favourite customers share their impressions. Got one? Leave a review!</h2>
            </div>
            <div class="car_botton" id="car_botton">
                <div>
                    <img src="image/Tilda_Icons_33_inter.svg" alt="">
                    <h2>Bulk Solutions</h2>
                    <p>We specialize in catering to businesses seeking multiple vehicles. Our experts understand the
                        demands of bulk purchases and work to provide tailored solutions.</p>
                </div>
                <div>
                    <img src="image/27as_axis.svg" alt="">
                    <h2>Fleet Test Drives</h2>
                    <p>Explore our extensive inventory and schedule fleet test drives, ensuring the quality and
                        suitability of vehicles for your business needs</p>
                </div>
                <div>
                    <img src="image/Tilda_Icons_43_logis.svg" alt="">
                    <h2>Transparent Fleet Information</h2>
                    <p>We offer comprehensive details on each vehicle in bulk, encompassing their history, conditions,
                        and pricing, ensuring transparent and informed decision-making.</p>
                </div>
                <div>
                    <img src="image/Tilda_Icons_28_law_f.svg" alt="">
                    <h2>Flexible Wholesale Financing</h2>
                    <p>Our team assists in structuring flexible financing options suitable for bulk purchases, working
                        within your budget and requirements.</p>
                </div>
                <div>
                    <img src="image/Tilda_Icons_32_profe.svg" alt="">
                    <h2>Ongoing Wholesale Support</h2>
                    <p>Post-sale, our commitment continues. We provide ongoing support, including maintenance and
                        further assistance for your fleet.</p>
                </div>
                <div>
                    <img src="image/Layer_1.svg" alt="">
                    <h2>Wholesale Partner Satisfaction</h2>
                    <p>We prioritize the satisfaction of our wholesale partners. Our aim is to facilitate a seamless,
                        efficient, and reliable experience throughout the bulk purchase process.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="small">
        <div class="container">
            <div id="small_left" style="visibility: hidden">
                <h2>697</h2>
                <hr>
                <h3>VEHICLES SALED</h3>
            </div>
            <div id="small_between" style="visibility: hidden">
                <h2>237</h2>
                <hr>
                <h3>TOP CARS SALED</h3>
            </div>
            <div id="small_right" style="visibility: hidden">
                <h2>1368<h2>
                        <hr>
                        <h3>PEOPLE LIKES</h3>
            </div>
        </div>
    </section>
    <section class="form" id="form">
        <div class="form_left">
        </div>
        <div class="form_right">

            <form id="myForm" onsubmit="return validateForm()" method="POST"
                action="pages/admin/handl/download_clients.php">
                <h1 id="sign_up">Sign Up</h1>
                <div class="input-container" id="full_name">
                    <label for="name">Full Name:</label>
                    <input type="text" id="name" name="name">
                    <div id="name-error" class="error-message"></div>
                </div>

                <div class="input-container" id="email1">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                    <div id="email-error" class="error-message"></div>
                </div>

                <div class="input-container" id="phone1">
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone">
                    <div id="phone-error" class="error-message"></div>
                </div>

                <button type="submit" class="submit-button" id="sign_up_button">Sign Up</button>
            </form>

        </div>
    </section>
    <footer>
        <h1 id="contact" style="visibility: hidden;">Feel free to write, call, and visit us. We really love to
            communicate with our clients.</h1>
        <h2 id="contact1" style="visibility: hidden;">Гефестион ЕООД</h2>
        <h2 id="contact2" style="visibility: hidden;">+359886172155</h2>
    </footer>
    <script src="/js/onscroll.js"></script>
    <script src="/js/slider.js"></script>
    <script src="/js/form.js"></script>
</body>

</html>