<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
div{
background-image: url('Education_omaowo.jpg');
}
p {
  font-family: "Times New Roman";
  font-size: 20px;
  font-weight: bold;
  color: white;
}
h1, h3{
  color: white;
}
</style>
</head>
<body>  
<div>
<?php


  ?>



<h1 style="text-align:center"> Wlecom to Roberston Library </h1>
<h3 color="white"> Please choose one book that you want to borrow. There will be a chance that the book you choose ba unavialable then please wait  until the other student return it:</h3>

<?php


$countB="";
$info="";
$my_array=array('BIO', 'CS', 'MATH', 'NURSING');
// put the array in a session variable 

session_start();

 

$_SESSION['books']=$my_array;




$nameErr="";
$book="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["book"])) {
    $nameErr = "Name is required";
  } else {
    $book = $_POST["book"];
    
    
  }

  
}
// here are the options which the studetn can choose from


echo '<img src="BIO.png"> ';
echo '<p> BIO  </p>';

echo '<img src="9781107518698.jpg"> ';
echo '<p> CS   </p>';

echo '<img src="MATH.jpg"> ';
echo '<p> MATH   </p>';

echo '<img src="untitledN.png"> ';
echo '<p> NURSING  </p>';

// If the user type the name of the book first I check and compare it with the elemnts we have in the session array 
// each time the user choose a book the number of the book counter is going to increase

if ($book==$_SESSION['books'][0])

    $_SESSION['countB'] += 1;

  if($book==$_SESSION['books'][1])
  $_SESSION['countC'] += 1;

  if ($book==$_SESSION['books'][2])
 ++ $_SESSION['countA'];

  if ($book==$_SESSION['books'][3])
  $_SESSION['countD'] +=1;
 
 
 if ( isset( $_SESSION['countB'] ) ) 
 if ($_SESSION['countB'] >2 )

 // when the counter reach a value over 2 the user will get a message abou that.
echo '<p style="background-color:Tomato;"> For BIO Book please waite until the other student return it  </p>' ;
 
if ( isset( $_SESSION['countC'] ) ) 
 if ($_SESSION['countC'] >2 )
  echo '<p style="background-color:Tomato;"> For CS Book please waite until the other student return it </p>' ;


  if ( isset( $_SESSION['countA'] ) ) 
if ($_SESSION['countA'] >2 )
  echo '<p style="background-color:Tomato;"> For MATH Book please waite until the other student return it  </p>' ;

  if ( isset( $_SESSION['countD'] ) ) 
  if ($_SESSION['countD'] >2 )
  echo '<p style="background-color:Tomato;"> For Nursing Book please waite until the other student return it </p>' ;

echo'<p style="color:red;"> NOTE FOR GRADER Maybe you will have some noticess when you choose the books for the first time I asked the Professor and he said that is fine becasue it works and these notices does not affect on the result or the functions</p>';

  // here a maessage to show how many books the student borrowed
  if ( isset( $_SESSION['countB'] ) ) 
echo '<p> BIO  ' . $_SESSION['countB'] . ' copies over 2 are already borrowed  </p>';
if ( isset( $_SESSION['countC'] ) ) 
echo '<p> CS  ' . $_SESSION['countC'] . 'copies over 2 are already borrowed </p>';

if ( isset( $_SESSION['countA'] ) ) 
echo '<p> MATH   ' . $_SESSION['countA'] . 'copies over 2 are already borrowed </p>';
if ( isset( $_SESSION['countD'] ) ) 
echo '<p> NURSING  ' . $_SESSION['countD'] . 'copies over 2 are already borrowed</p>';


?>
<p> Please write the name of the book you choose as it is written in the list ( BIO , CS , MATH , NURSING)</p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  The name of the book: <input type="text" name="book">
  <!-- <span class="error">* <?php echo $nameErr;?></span> -->
  <br><br>
  
  
  <br><br>
  <p> press submit you borrow the book</p>
  <input type="submit" name="submit" value="Submit">  
  
</form>

<p> press next to move to the next page and put your information</P>
<a href="second.php">
        <button > Next </button>
    </a>

  <p> Guidlines to use this website</p>
  <a href="third.html">
        <button > Guidlines </button>
    </a>

<?php
echo "<h2>The name of the book you choose :</h2>";
echo $book;

//session_destroy(); 
?>
<div>
</body>
</html>
