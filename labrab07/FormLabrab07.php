<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>labrab07</title>
    <link href='https://fonts.googleapis.com/css?family=Trochut:400,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="StyleLabrab07.css">
</head>
<body>
<div class="heding2">
    <img src="logo.png" width="30%" height="30%" alt="">
</div>
<span class="heding">
<!--    <img src="https://www.allegorithmic.com/sites/default/files/maya-logo_2.png" width="10%" height="10%" alt="M">-->
    <span id = "later">M</span>y  <span id = "later">F</span>orm
</span>

<script src="validForm.js"></script>
<div class="form">
    <form name="MyForm" action="BaseLabrab07.php" onsubmit="validateForm()" method="post" class="pos">
        <h>Lastname:</h>
        <input type="text" name="LastName" required >
        <h>Name:</h>
        <input type="text" name="Name" required >
        <h>Surname:</h>
        <input type="text" name="Surname" required >
        <h>Date:</h>
        <div id="mistake">
            Incorrect entry date
        </div>
        <span id="icon"><img src='Splat.PNG' ></span>
        <input type="text" name="Date" value="dd/mm/yyyy" required>
        <input type="submit">
    </form>
</div>
</body>
</html>