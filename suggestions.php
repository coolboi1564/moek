<html>
    <head>
        <style>
.topnav {
  overflow: hidden;
  background-color: #f1f1f1;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  border-bottom: 3px solid transparent;
}

.topnav a:hover {
  border-bottom: 3px white;
}

.topnav a.active {
  border-bottom: 3px white;
}

            </style>
       <title>Suggestions</title>
       <link rel= href="OIP.jpg" type ="image/x-icon">          
</head>
<body>
<form>
    <?php
    require "nav.php"
    ?>
  <h1 style = "text-align:center;">Video Suggestions!</h1>  
  <label for="sugg">Suggestion:</label>
  <input type="text" id="fname" name="Suggestion" placeholder="Doesn't Work"><br><br>
  <label for="fname">First Name:</label>
  <input type="text" id="fname" name="First Name" placeholder="Doesn't Work"><br><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
