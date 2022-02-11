<?php
$servername = "localhost"; //127.0.0.1
$user = "root";
$password = "";
$dbase = "wdt092021";
//establish a connection to mysql server
$conn = mysqli_connect($servername, $user, $password, $dbase);
session_start();

$sql_query = "SELECT * FROM `rcustomers` where username = username LIMIT 1";
$result = mysqli_query($conn, $sql_query);
while ($row = mysqli_fetch_array($result)) {

if(isset($_POST['delete'])){
    $idnum =  $_POST['idnum'];
    $query = "DELETE FROM rcustomers WHERE $idnum = cid";
    $conn->query($sql_query) or die($conn->error);
    if(mysqli_query($conn,$query)){
        echo "Record Delete Successfully!";
    }else{
        echo "Error : " . mysqli_error($conn);
    }

    mysqli_close($conn);
     header("location: logout.php");
     
     
   

}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">-
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account - Radiant</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>

      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #ff3333;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #ff3333;
        font-size: 150px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
</head>

    <body class="bg-danger">
        <div class="content">
        <div class="card" style="width:1000px">
        <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
            <i class="checkmark">!</i>
        </div>
        <form action="" method="POST">
            <?php   
            $sql_query = "SELECT * FROM `rcustomers` where username ='".$_SESSION['fullname']."' LIMIT 1";
            $result = mysqli_query($conn, $sql_query);
            while ($row = mysqli_fetch_array($result)) {
            
            ?>
            <br>
            <div class="" style="align-items: center;">
                <p style="font-text:3rem">Your ID Number: </p>
                <input type="text" name="idnum" class="form-control" style="text-align: center;font-size:2rem" 
                placeholder="" readonly value="<?php echo $row["cid"]?>">
            </div>
            
            <?php
            }
            ?>
            <br>
            <div>
                <h1>Are You Sure You Want To<br><b>DELETE ACCOUNT?</b></h1> 
                <p>This account will be deleted immediately.<br>You can't undo this action.</p>
            </div>
                <br><br>
                <button type="button" onclick="location.href='index.php'" class="btn btn-outline-success btn-lg" style="margin:0px; width:300px; height:100px">Cancel Now!<br></button>
                <br>
                <button type="submit" name="delete" class="btn btn btn-danger btn-lg" style="color:#000000; margin:40px">Yes, I Want Delete This Account.</button>
        </form>
    </body>
</html>