
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pick A Movie</title>
    <link rel="stylesheet" href="main.css">
</head>
<body class="dark-theme">
    <h1> Pick A Movie </h1>
    <p id="msg">The goal of this page is:</p>
    <ul>  
        <li class="list">to provide a movie name and year</li>
        <li class="list">submit it to the database</li>
        <li class="list">it will give you a random movie to watch</li>
    </ul>
    <div>
        <button class="btn">dark</button>
    </div>

    <form action="insert.php" method="post"> <!--this is used to set up the input boxes--> 
      <label>
          <p>Please enter the following:</p>  <!--This sets a paragraph to tell the user to enter something-->
        <label for="fname">Movie Name:</label> 
        <input type="text" id="fname" name="fname" placeholder="IT"><br><br>
        <label for="lname">Year:</label>
        <input type="text" id="lname" name="lname" placeholder="2017"><br><br>
        <input type="submit" name="submit" value="Submit">
      </label>
    </form>

    <script src="app.js"></script>
    <noscript>You need to enable JavaScript to view the full site.</noscript>
</body>
</html>