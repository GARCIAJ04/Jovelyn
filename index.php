<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "jovelyn";


$conn = new mysqli($severname, $username, $password,$dbname);    


if (!$conn->connect_error){
  
  echo $conn->connect_error;
}

$sql = "SELECT * FROM bsis";
$bsis = $conn->query($sql) or die ($conn->error);
$row = $bsis->fetch_assoc();

//   do{

//      echo $row['first_name']." " .$row['Last_name'] . "</br>";

//    }while($row = $bsis->fetch_assoc());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <mete http-equiv="X-UA-Compatible">
      
    <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<title>Student Management System</title>
</head>

<body>
<nav class="navbar navbar-light justify-content-center fs-5 mb-5" style="background-color: #ADD8E6;" >
Student Management System
</nav>

<div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }
  ?>
  <a href="add-new.php" class="btn btn-dark mb-3">Add Me</a>

  <table class="table table-hover text-center">
    <thead class="table-dark">
   
    <title>Bachelor of Science in Information System</title>
    <style>
            body {
               font-family: "Arial";
              background-color: #A9A9A9;
            }
           
            h1{
              text-align: center;
              font-family: "Serif";
              
            }
          table {
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
          }
            th {
              border: 1px solid black;
              text-align: center;
              padding : 8px;
              border-bottom: 1px solid #ddd;
              font-family: "Georgia";
            }

             td{
            border: 1px solid black;
            text-align: center;
            padding : 8px;
            border-bottom: 1px solid #ddd;
            font-family: "Georgia";
            
          }
            tr:nth-child(even) {
              background-color: #f2f2f2;
            }
          </style>
</head>
<body>
      <h1>Bachelor of Science in Information System</h1>
      <table>
        <thead>
          <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Address</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Action</th>
            
          </tr>
        </thead>
            <tbody>
            <?php do{ ?>
            <tr>
              <td><?php echo $row['Firstname']; ?></td>
              <td><?php echo $row['Lastname']; ?></td>
              <td><?php echo $row['Address']; ?></td>
              <td><?php echo $row['Age']; ?></td>
              <td><?php echo $row['Gender']; ?></td>
              
              <td>
              <a href="edit.php?id=<?php echo $row["Id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete.php?id=<?php echo $row["Id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
            </tr>
            <?php }while($row = $bsis->fetch_assoc()) ?>

         </tbody>   
      </table>   

</body>
</html>
