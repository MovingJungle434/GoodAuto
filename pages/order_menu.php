<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoodAuto</title>
    <link rel="stylesheet" href="/css/scss.css">
    <link rel="shortcut icon" href="/image/Rater_Group_Logo_2.png" type="image/x-icon">
</head>

<body>
    <?php require_once ("../include/db.php");
    $id = $_REQUEST['id'];
    $cars = mysqli_query($esql, "SELECT * FROM `cars` WHERE `id` = '$id'");
    foreach ($cars as $car) { ?>
        <section class="menu">
            <div class="show_more_close">
                <a href="/pages/show_more.php?id=<?php echo $car['id'] ?>" class="more_product"><i
                        class="fa-solid fa-arrow-left"></i>
                    <p>More products</p>
                </a>
                <a href="/pages/show_more.php?id=<?php echo $car['id'] ?>" class="icon_xmar"><i
                        class="fa-solid fa-xmark"></i></a>
            </div>
            <div class="container">
                <form id="myForm" onsubmit="return validateForm()" method="POST" action="admin/handl/download_order.php">
                    <h1>Submit Your Application</h1>
                    <div class="input-container">
                        <label for="name">Full Name:</label>
                        <input type="text" id="name" name="name">
                        <div id="name-error" class="error-message"></div>
                    </div>

                    <div class="input-container">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email">
                        <div id="email-error" class="error-message"></div>
                    </div>

                    <div class="input-container">
                        <label for="phone">Phone Number:</label>
                        <input type="tel" id="phone" name="phone">
                        <div id="phone-error" class="error-message"></div>
                    </div>
                    <button type="submit" class="submit-button">Submit</button>
                    <input type="hidden" id="order_menu_hidden" name="order_menu_hidden" value="<?php echo $car['name'] ?>">
                </form>
            </div>
        </section>
    <?php } ?>
    <script src="/js/form.js"></script>
    <script src="https://kit.fontawesome.com/3e6f2e281b.js" crossorigin="anonymous"></script>
</body>

</html>