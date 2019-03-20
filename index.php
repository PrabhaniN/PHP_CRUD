<?php
include_once 'conn.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Stock Details</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <header>
            <h1>
                <a href="index.php">Stock Details</a>
            </h1>
        </header>
        <div class="row">
            <div class="col-sm-3">
                <nav>
                    <ul style="list-style-type:none;" class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <button>Marterial Details</button>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="add_stock.html">
                                <button>Add Stock</button>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="update_stock.php">
                                <button>Update Stock</button>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-sm-9">
                <table class="table table-borderless">
                    <tr>
                        <th>Material Code</th>
                        <th>Material Name</th>
                        <th>No of Colour Available</th>
                        <th>Available Quantity</th>
                        <th>Price(per meter)</th>
                    </tr>

                    <?php
                    $sql = "SELECT * FROM materials";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                        while ($row = $result->fetch_assoc()){
                            
                    ?>
                    <!-- get details from the materials tables and display in the table in index.php page by assigning a row by row in the database to the $row variable -->

                    <tr>
                        <td><?php echo $row['mat_code']; ?></td>
                        <td><?php echo $row['mat_name']; ?></td>
                        <td><?php echo $row['no_of_colors']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                    </tr>

                    <?php 
                        }
                    }

                    $conn->close();
                    ?>
                </table>
            </div>
        </div>
    </body>
</html>