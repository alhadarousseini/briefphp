 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Brief PHP2</title>
    
 </head>
 <h1>Blood Donnation Camp</h1> 
 <body bgcolor="FBB917">
     <div><h2>Registration Form </h2></div>
<form action="connect.php" method="POST">
    <label for="user">Name:</label><br>
    <input type="text" name="name" id="name" required> <br> <br>

    <label for="email">email:</label><br>
    <input type="email" name="email" id="email" required> <br> <br>

    <label for="phone">phone:</label><br>
    <input type="text" name="phone" id="phone" required> <br> <br>

    <label for="bgroup">Blood Group:</label><br>
    <input type="text" name="bgroup" id="bgroup" required> <br> <br>

    <input type="submit" name="submit" id="submit">

</form>

 </body>
 </html>