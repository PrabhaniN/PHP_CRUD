<?php 
include_once 'conn.php';

if (isset($_GET['edit_id'])){
  $edit_id = $_GET['edit_id'];
?>
<!-- check for the get request's id to rest of the code to be executed -->


<!DOCTYPE html>
<html>

<head>
  <title>Edit Stock</title>
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

    <?php 
    $sql = "SELECT * FROM materials WHERE mat_code=$edit_id";
    $result = $conn->query($sql);
            
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
    
    ?>
    <!-- check the id and get rest of the details under the given id -->

      <form action="edit_handler.php" method="post">
        <div class="inputs">
          <p>Material code</p>
          <input type="number" name="mat-code" class="form-control form-control-lg" placeholder="Ex: 8180987656" value="<?php echo $row['mat_code'] ?>">
        </div>
        <div class="inputs">
          <p>Material Name</p>
          <input type="text" name="mat-name" class="form-control form-control-lg" placeholder="Ex: Cotton" value="<?php echo $row['mat_name'] ?>">
        </div>
        <div class="inputs">
          <p>No of Colours</p>
          <input type="number" name="no-of-colours" class="form-control form-control-lg" placeholder="Ex: 6" value="<?php echo $row['no_of_colors'] ?>">
        </div>
        <div class="inputs">
          <p>Available Quantity (m)</p>
          <input type="text" name="quantity" class="form-control form-control-lg" placeholder="Ex: 1500" value="<?php echo $row['quantity'] ?>">
        </div>
        <div class="inputs">
          <p>Price (per meter)</p>
          <input type="number" name="price" class="form-control form-control-lg" placeholder="Ex: 175.00" value="<?php echo $row['price'] ?>">
        </div>
        <!-- created a post request to show the details of the given material code -->
        <button class="update-btn">Update</button>
      </form>

      <?php
      }
      
      $conn->close();
      ?>
    </div>
  </div>
</body>

</html>

<?php 
} else {
  echo "No material code found!";
}
// error message if the inserted material code does not exist in the database
?>
