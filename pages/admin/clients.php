<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/scss.css">
</head>

<body>
    <section class="clients1">
        <div class="container">
            <div class="clients_a">
                <a href="choose.php">Back</a>
            </div>
            <?php require_once ("../../include/db.php");
            session_start();
            $clients = mysqli_query($esql, "SELECT * FROM `clients`");
            foreach ($clients as $client) { ?>
                <div class="client">
                    <div>
                        <h1>Name</h1>
                        <p><?php echo $client['fullName'] ?></p>
                    </div>
                    <div>
                        <h1>Gmail</h1>
                        <p><?php echo $client['email'] ?></p>
                    </div>
                    <div>
                        <h1>Phone</h1>
                        <p><?php echo $client['phone'] ?></p>
                    </div>
                    <div>
                        <div class="choose_admin">

                            <?php if ($client['admin'] == 1) { ?>
                                <div>
                                    <h1>Admin</h1>
                                    <form action="handl/download_toggle_admin.php" method="post">
                                        <input type="hidden" name="client_id" value="<?php echo $client['id']; ?>">
                                        <input type="hidden" name="action" value="remove_admin">
                                        <button type="submit">Remove Admin</button>
                                    </form>
                                </div>

                            <?php } else { ?>

                                <div>
                                    <h1>Client</h1>
                                    <form action="handl/download_toggle_admin.php" method="post">
                                        <input type="hidden" name="client_id" value="<?php echo $client['id']; ?>">
                                        <input type="hidden" name="action" value="make_admin">
                                        <button type="submit">Make Admin</button>
                                    </form>
                                </div>

                            <?php } ?>

                            <div class="div_delete1">
                                <h1>DELETE</h1>
                                <a class="delete1"
                                    href="handl/download_delete_clients.php?id=<?php echo $client['id'] ?>">X</a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            <?php } ?>
        </div>
    </section>
</body>

</html>