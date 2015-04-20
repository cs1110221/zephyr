<?php

require_once('connectiondata.php');


?>
<html>
<head>
<title>zephyr - feedback</title>
<link rel="stylesheet" href="css/index.css" />
</head>
<body>
<div class="mainBody">
<div class='header'>
<img src="images/logo.png" height='100%'>
<img src="images/trademark.gif" height='100%' style="margin-left:140px;margin-right:140px">
<img src="images/iitd.png" height='100%'>
</div>
<?php include_once('footer.php'); ?>
<div class="feedback" >
<h2>Feedback</h2>
<p>Please leave us your valuable feedback.
We will get in contact with you as soon as possible</p>
<div class="form" >
<form action="action_page.php">
First name:<br>
<input type="text" name="firstname">
<br>
Last name:<br>
<input type="text" name="lastname">
<br>
<input type="radio" name="type" value="student" checked>Student
<input type="radio" name="type" value="faculty">Faculty
<br>
Enrollment Id:<br>
<input type="text" name="enrolno">
<br>
Email Id:<br>
<input type="text" name="emailid" size="40">
<br>
Feedback:<br>
<input type="text" name="feedback" size="40">
<br>
<br>
<input type="submit" value="Submit">
</form>

</div>
</div>
</body>
</html>