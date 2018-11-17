<!DOCTYPE html>
<html>
<head>
    <title>Please log in</title>
	<meta charset="utf-8" />
</head>
<body>
<form method="post" action="<?php echo base_url(); ?>index.php/dashboard">
    <div>Email:</div>
    <div><input type="text" name="email"></input></div>
    <div>Password:</div>
    <div><input type="password" name="password"></input></div>
    <div><input type="submit" name="submit"></input></div>
</body>
</html>
