<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Online Diary">
  <meta name="keywords" content="HTML, CSS, PHP, MYSQLI">
  <meta name="author" content="Santosh Yadav">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Online Diary</title>
  <link rel="stylesheet" type="text/css" href="diary.css">
	
   <style>

    h1, h2, h3, h4, h5, h6 { color: #444; font-family: 'Averia Serif Libre', cursive; }
		input[type=text], select {
      width: 50%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 2px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type=submit] {
      width: 43%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 100px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }
    .rotateimg {
      -webkit-transform:rotate(310deg);
      -moz-transform: rotate(310deg);
      -ms-transform: rotate(310deg);
      -o-transform: rotate(310deg);
      transform: rotate(310deg);
    }
    body {
  background-image: url('paper9.jpg');
    }
	 </style>
</head>

<body>
   

  <img src="dery4.jpg" style="float:left;width:84px;height:84px"; class="rotateimg"/>
  
    <div class="container">
     <div class="navbar">
      <div class="logo_div">
        <h1>Diary</h1>
      </div>
  
        <ul>
         <li><a class="active" href="index.php">dairy collection</a></li>       
        </ul>
      
     </div>
      </br>
      </br>  

    <form action="index.php" method="post">
     	
     	<label>  Title : </label></br>
     	<input type="text" name="title"style="border-radius: 6px ;">

    </br>
    </br>
   
     	<label> Description : </label></br>    
     	<textarea name="description" rows="16" cols="70" style="border-radius: 6px ; border: 2px solid #ccc;  font-family: 
      Times New Roman; "> 
      </textarea>

    </br>
    </br>

    </div>
  
  <input type="submit" name="formSubmit" value="Submit" />
   
    
    </form>

</body>
</html>
