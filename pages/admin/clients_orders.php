<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/scss.css">
</head>

<body>
    <section class="clients">
        <div class="container">
            <div class="clients_a">
                <a href="choose.php">Back</a>
            </div>
            <?php require_once ("../../include/db.php");
            $orders = mysqli_query($esql, "SELECT * FROM `orders`");
            foreach ($orders as $order) { ?>
                <div class="client">
                    <div>
                        <h1>Name</h1>
                        <p><?php echo $order['name'] ?></p>
                    </div>
                    <div>
                        <h1>Gmail</h1>
                        <p><?php echo $order['email'] ?></p>
                    </div>
                    <div>
                        <h1>Phone</h1>
                        <p><?php echo $order['phone'] ?></p>
                    </div>
                    <div>
                        <h1>Order</h1>
                        <p><?php echo $order['order'] ?></p>
                    </div>
                    <div class="div_delete">
                        <div>
                            <h1>Copy to Clietnts</h1>
                            <form action="handl/download_clients_copy.php?id=<?php echo $order['id'] ?>" method="post">
                                <button type="submit" name="copy_data">Copy Data</button>
                            </form>
                        </div>
                        <div>
                            <h1>Delete</h1>
                            <a class="delete" href="handl/download_delete_orders.php?id=<?php echo $order['id'] ?>">X</a>
                        </div>
                    </div>
                </div>
                <hr>
            <?php } ?>
        </div>
    </section>
</body>

</html>