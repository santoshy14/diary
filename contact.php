<!DOCTYPE html>
<html>
<head>

	<title>Online Diary</title>
	<style>
    input[type=text], select {
      width: 75%;
      padding: 18px 26px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-sizing: border-box;
    }

    input[type=submit] {
      width: 75%;
      background-color: #4CAF50;
      color: white;
      padding: 16px 25px;
      margin: 8px 0;
      border: none;
      border-radius: 20px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    div {
      border-radius: 15px;
      background-color: #f2f2f2;
      padding: 30px;
    }
  </style>
</head>

<body>        
       <br />

        <div id = "main">

          <form action = "" method = "post">
	         
           <label>Your name :</label> <br />
	         <input type = "text" name = "yname" id = "yname" />

            <br />
            <br />
            	
        	<label>Qualification :</label> <br />
        	<input type = "text" name = "qname" id = "qname" />
            
            <br />
            <br />
           
        	<label>Email :</label> <br />
        	<input  type = "text" name = "email" id = "email" />
            
            <br />
            <br />

        	<label>Mobile Number :</label> <br />
        	<input type = "text" name = "mnumb" id = "mnumb" />

            <br />
            <br />

          <label>Comment :</label> <br />
          <textarea rows="4" cols="118" name="commet" style=" border-radius: 8px"; >
          </textarea>

            <br />
            	<input type = "submit" value ="Submit" name = "submit"/>
            <br />
          </form>
        </div>
         
  <?php
    include("dbconnection.php");

      if(isset($_POST['submit'])) {          
                       
        $sql = "INSERT INTO viewer(yname ,qname ,email ,mnumb ,commet)VALUES ('".$_POST["yname"]."','".$_POST["qname"]."','"
        .$_POST["email"]."','".$_POST["mnumb"]."','".$_POST["commet"]."')";
          
          if (mysqli_query($conn, $sql))
            {
               echo "Thank you :) ";
            } 
          else 
            {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }            
       }
         
    $conn->close();
  ?>

</body>
</html>