<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="Online Diary">
<meta name="keywords" content="HTML, CSS, PHP, MYSQLI">
<meta name="author" content="Santosh Yadav">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="diary.css">
  
  <title>Online diary</title>
  <style>
  .rotateimg {
      -webkit-transform:rotate(320deg);
      -moz-transform: rotate(320deg);
      -ms-transform: rotate(320deg);
      -o-transform: rotate(320deg);
      transform: rotate(320deg);
    }
    body {
  background-image: url('paper9.jpg');
    }
   </style>
   
</head>
<body>
<img src="read2.jpg" style="float:left;width:84px;height:84px"; class="rotateimg"/>


    <div class="container">
     <div class="navbar">
      <div class="logo_div">
        <a href="write.php"><h1>Diary</h1></a>
      </div>
            <ul>
                <li><a class="active" href="index.php">Home</a></li>    
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
     </div>


  
<?php

 include("dbconnection.php");
 if ($_POST) { 

    $Title=$_POST["title"];
    $Text=$_POST["description"];
  
  }
  
   if(isset($_POST['formSubmit']) && $_POST['formSubmit'] == "Submit"){

    $errorMessage = "";    
    if(empty($_POST['title']))
    {     
     $errorMessage .= "<li>You forgot to enter a Title! </li>";
    }
    if (!strlen(trim($_POST["description"]))) {
      $errorMessage .= "<li>You forgot to enter a Description!</li>";
    }
    
      if(empty($errorMessage)) {
        
        $query = "insert into diary(title,text) values('$Title','$Text')";
        $result = mysqli_query($conn,$query);
   	   }
        
      if(!empty($errorMessage)) {
        echo("<p>There was an error with your form:</p>\n");
        echo("<ul>" . $errorMessage . "</ul>\n");
     }
        
    }
    
if(empty($errorMessage)) {

 	  $sql= "SELECT * FROM diary";
    $result = mysqli_query($conn, $sql);
         
      if(mysqli_num_rows($result) > 0) {
          
        while ($row =$result->fetch_array()) {
           echo "<br>";
           echo $row["id"] . ":)  Title  : ".$row["title"] ."<br>";
           echo " Description : ".$row["text"] ."<br>";
           echo "<hr>";
          }
            
      } 
         
      else
       {
        echo "0 results";
       }
}
    mysqli_close($conn);   
         
?>
   
    </div>      
      <div class="footer">
      <p>
        <b>Made by : </b> Santosh Yadav 
        <?php echo "_____  ".  date("Y/m/d") ." _____ "  . date("h:i:sa")?>
      </p>

    </div>

</body>
</html>
