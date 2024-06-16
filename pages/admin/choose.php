<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/scss.css">
</head>

<body>
    <section class="choose">
        <div class="container">
            <?php require_once ("../../include/db.php");
            session_start();
            ?>
            <a href="/">Back</a>
            <div class="clients_orders">
                <a href="clients.php" class="clients">Clients</a>
                <a href="clients_orders.php">Orders</a>
            </div>
            <div>
                <form action="handl/download_car.php" method="POST">
                    <button>Add car</button>
                </form>
                <a href="show_car.php">Show cars</a>
            </div>
        </div>
    </section>
</body>

</html>