
<?php

session_start(); 

if ($_SESSION['group_id']=='1'){

include 'conn.php' ;
$stmt3 = $conn->prepare("SELECT * FROM position ");
  $stmt3->execute();
  $rows = $stmt3->fetchAll(); 

  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form validation with JavaScript</title>
  <link rel="stylesheet" href="css.css">
</head>
<body>
  <h1>Add New Member</h1>
  <div id="apper">
   <form method="POST" action="membersql.php" onsubmit="return Validate()" name="vform" >
    <div id="">
      <label>Firest Name</label> <br>
      <input type="text" name="firstname" class="textInput" required="required">
      <div id="name_error"></div>
      <div id="">
      <label>Last Name</label> <br>
      <input type="text" name="lastname" class="textInput" required="required">
      <div id="name_error"></div>
    <div id="username_div">
      <label>Username</label> <br>
      <input type="text" name="username" class="textInput">
      <div id="name_error"></div>
    </div>
    <div id="email_div">
      <label>Email</label> <br>
      <input type="email" name="emile" class="textInput">
      <div id="email_error"></div>
    </div>
    <div id="password_div">
      <label>Password</label> <br>
      <input type="password" name="password" class="textInput">
    </div>
    
      <label>Phone</label> <br>
      <input type="number" name="phone" class="textInput" >
    </div>
    
    <label>Position</label><select name="position" class="form-contropo">
  <option value="please select position">.....select.....</option>
<?php 
        foreach ($rows as $row){

            echo "<option value=". $row['position'].">";
            echo $row['position'] . "</option>";
        }

        ?> 
</select>
<label>group id</label><select name="group" class="form-contropo" id="mySelect" onchange="myFunction()">
  <option value="please select group_id">.....select.....</option>
<?php 

        foreach ($rows as $row){

            echo "<option value=". $row['group_id'].">";
            echo $row['position'] . "</option>";
        }


        ?> 
</select>
<h1 id='demo'></h1>
<div>
    <input type="submit" name="register" value="Register" class="btn">
    </div>
   </form>
  </div>
  <style>
    
    #apper {
  width: 30%;
  margin: 50px auto;
  padding: 0px;
  top: 50px;
  opacity: 90%;
}
form {
  margin: 30px auto;
}
.textInput {
  border: none;
  height: 28px;
  margin: 2px;
  border: 1px solid #6B7363;
  font-size: 1.2em;
  padding: 5px;
  width: 95%;
}
.textInput:focus {
  outline: none;
}
.btn {
  width: 98.6%;
  border: none;
  margin-top: 5px;
  color: white;
  background-color: #3b5998;
  border-radius: 5px;
  padding: 12px;
}
  </style>

  <script>
function myFunction() {
  var x = document.getElementById("mySelect").value;
  document.getElementById("demo").innerHTML = "User Id is: " + x;
}
</script>

  <script>
    var username = document.forms['vform']['username'];
var email = document.forms['vform']['email'];
var password = document.forms['vform']['password'];

// SELECTING ALL ERROR DISPLAY ELEMENTS
var name_error = document.getElementById('name_error');
var email_error = document.getElementById('email_error');
var password_error = document.getElementById('password_error');
// SETTING ALL EVENT LISTENERS
username.addEventListener('blur', nameVerify, true);
email.addEventListener('blur', emailVerify, true);
password.addEventListener('blur', passwordVerify, true);
// validation function
function Validate() {
  // validate username
  if (username.value == "") {
    username.style.border = "1px solid red";
    document.getElementById('username_div').style.color = "red";
    name_error.textContent = "Username is required";
    username.focus();
    return false;
  }
  // validate username
  if (username.value.length < 3) {
    username.style.border = "1px solid red";
    document.getElementById('username_div').style.color = "red";
    name_error.textContent = "Username must be at least 3 characters";
    username.focus();
    return false;
  }
  // validate email
  if (email.value == "") {
    email.style.border = "1px solid red";
    document.getElementById('email_div').style.color = "red";
    email_error.textContent = "Email is required";
    email.focus();
    return false;
  }
  // validate password
  if (password.value == "") {
    password.style.border = "1px solid red";
    document.getElementById('password_div').style.color = "red";
    password_confirm.style.border = "1px solid red";
    password_error.textContent = "Password is required";
    password.focus();
    return false;
  }
  // check if the two passwords match
  if (password.value != password_confirm.value) {
    password.style.border = "1px solid red";
    document.getElementById('pass_confirm_div').style.color = "red";
    password_confirm.style.border = "1px solid red";
    password_error.innerHTML = "The two passwords do not match";
    return false;
  }
}
// event handler functions
function nameVerify() {
  if (username.value != "") {
   username.style.border = "1px solid #5e6e66";
   document.getElementById('username_div').style.color = "#5e6e66";
   name_error.innerHTML = "";
   return true;
  }
}
function emailVerify() {
  if (email.value != "") {
    email.style.border = "1px solid #5e6e66";
    document.getElementById('email_div').style.color = "#5e6e66";
    email_error.innerHTML = "";
    return true;
  }
}
function passwordVerify() {
  if (password.value != "") {
    password.style.border = "1px solid #5e6e66";
    document.getElementById('pass_confirm_div').style.color = "#5e6e66";
    document.getElementById('password_div').style.color = "#5e6e66";
    password_error.innerHTML = "";
    return true;
  }
  if (password.value === password_confirm.value) {
    password.style.border = "1px solid #5e6e66";
    document.getElementById('pass_confirm_div').style.color = "#5e6e66";
    password_error.innerHTML = "";
    return true;
  }
}
  </script>

<?php
}else header('location:../index.php'); ?>