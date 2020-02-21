<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
div{
height: 500px;
  
background-image: url('Education_omaowo.jpg');
}
p {
  font-family: "Times New Roman";
  font-size: 20px;
  font-weight: bold;
  color: green;
}
</style>
</head>
<body>  
<div>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $idErr = "";
$name = $email = $id = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = ($_POST["name"]);
   
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = ($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["id"])) {
    $idErr = "id is required";
  } else {
    $id = ($_POST["id"]);
    
  }

 
}


?>

<!-- Here the user can put his or her information and then we recive them -->
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Student ID: <input type="text" name="id" value="<?php echo $id;?>">
  <span class="error">* <?php echo $idErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
 
 
  <input type="submit" name="submit" value="Submit">  
</form>






<br></br>





<?php
echo "<h2> We recieved Your Inormation:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $id;
echo "<br>";

echo "<h3> Please make sure to return the book after 10 days form now </h3>";
?>





<a href="index.php">
            <button > BACK </button>
        </a>



<div>
</body>
</html>
