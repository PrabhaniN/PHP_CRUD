<?php 
include_once 'conn.php';

if (isset($_GET['delete_id'])){
  $sql = "DELETE FROM materials WHERE mat_code=".$_GET['delete_id'];
  $conn->query($sql);
  header('Location:index.php');
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Update Stock</title>
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
      <form action="update_stock.php" method="get">
        <div class="row">
          <div class="col-sm-8">
            <div class="form-group">
              <label for="search">Search Material</label>
              <input type="search" class="form-control" name="update_id" placeholder="Enter Material Code to search">
            </div>
          </div>
          <div class="col-sm-1">
            <button type="submit" class="search-btn">Search</button></a>
          </div>
        </div>
      </form>

      <?php 
      if(isset($_GET['update_id'])){
        $update_id = $_GET['update_id'];
    
        $sql = "SELECT * FROM materials WHERE mat_code=$update_id";
        $result = $conn->query($sql);
        
        if($result->num_rows > 0){
          $row = $result->fetch_assoc();
      ?>

      <table class="table">
        <tr>
          <th>Material Code</th>
          <th>Material Name</th>
          <th>No of Colour Available</th>
          <th>Available Quantity</th>
          <th>Price(per meter)</th>
        </tr>

        <tr>
          <td><?php echo $update_id ?></td>
          <td><?php echo $row['mat_name'] ?></td>
          <td><?php echo $row['no_of_colors'] ?></td>
          <td><?php echo $row['quantity'] ?></td>
          <td><?php echo $row['price'] ?></td>
        </tr>
      </table>
      <div class="d-flex justify-content-end mb-2">
        <button class="edit-btn" onclick="location.href='edit_stock.php?edit_id='+<?php echo $update_id?>">Edit</button>
        <button class="delete-btn" onclick="location.href='update_stock.php?delete_id='+<?php echo $update_id?>">Delete</button>
      </div>

          <?php 
          } else {
              ?>

        Invalid Material Code!

        <?php
          } 
        
        } else {
        ?>

        <!-- Enter Material Code to search -->

        <?php
        }

        $conn->close();
        ?>

    </div>
  </div>
</body>

</html>