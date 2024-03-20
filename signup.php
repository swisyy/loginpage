<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
 input[type=text], select {
  
    width: 100%;
  padding: 12px 20px;
  margin: 15px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 15px;
  box-sizing: border-box;
}


li {
  width: 5%;
  background-color:sandybrown;
  color: white;
  padding: 10px 20px;
  margin: 20px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
li a{
            color:white;
            font-size: 18px;
            font-weight: bold;
            margin-right: 25px;
        }

li:hover {
  background-color: #sandybrown;
}
li a:hover {
  background-color: #sandybrown;
}
.form {
  border-radius: 10px;
  background-color: #f2f2f2;
  padding: 50px;

}
label[for="type"]{

}

        .logo{
            font-size: 35px;
            font-weight: 500px;
            height: 100px;
            border-radius: 50px;
            padding-left : 200px;

        }  
        input[type=password] {
            width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 15px;
        }
          
        </style>
</head>
<body>
<image class=logo src="logo.png" alt="logo">
<form action="/signup.php">
    <label for="fname"> Name</label>
    <input type="text" id="name" name="fullname" placeholder="enter full name..">

    <label for="Email">Email</label>
    <input type="text" id="Email" name="Email" placeholder="Enrer your email..">
     <label for="pwd">Password:</label>
     <input type="password" id="pwd" name="pwd" placeholder= "Enter password" minlength="8"><br><br>
     <label for="pwd">Password:</label>
     <input type="password" id="pwd" name="pwd" placeholder= "Re-Enter password" minlength="8"><br><br>
      </br>
    </select>
    <ul>
    
    <li><a href="login.php">signup</a></li>
    <li><a href="signup.php">clear</a></li></ul>
  </form>
</div>
</html>
</body>