<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  



<?php
  $sectionA=array();
  $sectionB=array();
  $sectionC=array();
  
  
   $name; // to store the name of the user
     
  $priceA;
  $priceB;
  $priceC;// the prices for each seat.
  
  
   
  for ($i = 0; $i < 5; $i++) {
    $sectionA[$i]= $i+1;
   
  }
  
  for ($i = 0; $i < 5; $i++) {
    $sectionB[$i]= $i+1;
  }
  
  for ($i = 0; $i < 5; $i++) {
    $sectionC[$i]= $i+1;
  }

 $priceA=rand(100,200);
     $priceB=rand(100,300);
     $priceC=rand(100,300);
     $show;
     if($priceB<$priceA && $priceA<$priceC){
      //echo "<h2>" . $txt1 . "</h2>";
       echo "<div> sectionB (6,7,8,9,10)   the price is  " . $priceB .   "  </div>  <div> sectionA (1,2,3,4,5)  the price is  "   . $priceA .   "</div>  <div> sectionC (11,12,13,14,15)  the price is  " . $priceC . "</div>";
        
     }

     elseif($priceA<$priceB && $priceB<$priceC){
      echo"<div> sectionA (1,2,3,4,5) the price is  " . $priceA .   "  </div>  <div> sectionB (6,7,8,9,10) the price is   "  . $priceB .   "</div>  <div> sectionC (11,12,13,14,15)  the price is  " . $priceC . "</div>";
     
  }

  elseif($priceA<$priceC && $priceC<$priceB){
     echo "<div> sectionA (1,2,3,4,5)  the price is  " . $priceA .    "  </div>  <div> sectionC (11,12,13,14,15)  the price is "   . $priceC .   "</div>  <div> sectionB (6,7,8,9,10) the price is  " . $priceB . "</div>";
     
  }
  elseif($priceC<$priceA && $priceA<$priceB){
      echo "<div> sectionC (11,12,13,14,15)  the price is ". $priceC .    "  </div>  <div> sectionA (1,2,3,4,5) the price is  "   . $priceA .   "</div>  <div> sectionB (6,7,8,9,10) the price is  " . $priceB . "</div>";
      
  }

  elseif($priceC<$priceB && $priceB<$priceA){
      echo "<div> sectionC (11,12,13,14,15)  the price is  " . $priceC .    "  </div>  <div> sectionB (6,7,8,9,10) the price is  "   . $priceB .   "</div>  <div> sectionA (1,2,3,4,5)  the price is  ".  $priceA . "</div>";
     
  }
  elseif($priceB<$priceC && $priceC<$priceA){
      echo "<div> sectionB (6,7,8,9,10)  the price is " . $priceB .    "  </div>  <div> sectionC (11,12,13,14,15)  the price is  "  . $priceC .   "</div>  <div> sectionA (1,2,3,4,5) the price is  " . $priceA . "</div>";
     
  
  }
  
  $seat="";
  session_start();
   
  if( isset( $_SESSION['counter'] ) ) {
    $_SESSION['counter'] += 1;
 }else {
    $_SESSION['counter'] = 1;
 }

 
 
  
  

  $changeA="";
  $changeB="";
  $changeC="";
// define variables and set to empty values
$nameErr = $sectionErr = $priceErr = $websiteErr = "";
$name = $section = $price = $comment = $website = "";
//$seat; // to store the choosen seat 
$change="";
$info="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["section"])) {
    $sectionErr = "section is required";
  } else {
    $section = test_input($_POST["section"]);

    if($section=="sectionA"|| $section== "A" ){
      if( isset( $_SESSION['counterA'] ) ) {
        $_SESSION['counterA'] += 1;
     }else {
        $_SESSION['counterA'] = 1;
     }
      $seat= rand(1,5);
     $changeA =$_SESSION['counterA'];
     $change=$changeA;

     if ($changeA>5){
        $info = " THIS SECTION IS NOT AVAILABLE (if there is no more available section please waite until the next available flight)";
      }
      if($changeA>5 && $changeB>5 && $changeC>5){
        $info="Please wait until the next flight be available";
      }
      
    }
  
    if($section=="sectionB"|| $section== "B" ){
      if( isset( $_SESSION['counterB'] ) ) {
        $_SESSION['counterB'] += 1;
     }else {
        $_SESSION['counterB'] = 1;
     }
     
      $seat= rand(6,10);
      $changeB =$_SESSION['counterB'];
      $change = $changeB;

      if ($changeB>5){
        $info = " THIS SECTION IS NOT AVAILABLE ( if there is no available section please  waite until the next flight be available) ";
      }
      if($changeA>5 && $changeB>5 && $changeC>5){
        $info="Please wait until the next flight be available";
      }
      
    }


    if($section=="sectionC"|| $section== "C" ){
      if( isset( $_SESSION['counterC'] ) ) {
        $_SESSION['counterC'] += 1;
     }else {
        $_SESSION['counterC'] = 1;
     }
     
     $seat= rand(11,15);
      $changeC =$_SESSION['counterC'];
      $change = $changeC;

      if($changeA>5 && $changeB>5 && $changeC>5){
        $info="Please wait until the next flight be available";
      }

      if ($changeC>5){
        $info = " THIS SECTION IS NOT AVAILABLE  ( if all the sections are not available please wait for the next availale flight)";
      }

     
      
  }

}
  

  if (empty($_POST["price"])) {
    $priceErr = "Section is required";
  } else {
    $price = test_input($_POST["price"]);
   
  }
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



echo "<h2> Your Boarding Ticket :</h2>";
echo "<br>";
echo "The name : ";
echo $name;
echo "<br>";
echo "The price of your seat : ";
echo $price;
echo "<br>";
echo "The section is : ";
echo $section;
echo "<br>";
echo "The number of your seat is : ";
echo  $seat;
echo "<br>";
echo "More information :";
echo $info;


?>

<h2> Ticket Form </h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  <p> Please put the section you choose and the price as they are written in the list oterwise you ticket will not be valid </p>
  Section: <input type="text" name="section">
  <span class="error">* <?php echo $sectionErr;?></span>

  Price: <input type="text" name="price">
  <span class="error">* <?php echo $priceErr;?></span>
  <br><br>

  
  
  <br><br>
  <input type="submit" name="submit" value="Submit">  
  
</form>



</body>
</html>