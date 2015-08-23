<html>
<head>
<title>STARRY IT Email Sender :: sent email anywhere without login</title>
<link rel="stylesheet" type="text/css" href="style/css.css"> 
</head>
<body>
<center>
 	<img src="http://starryit.com/images/logo.png" width="130" height="49" border="" alt="" />
<img src="style/dot.gif" width="100%" height="1" border="" alt="" />

</center>
<center>
<form action="mail.php" method="POST" enctype="multipart/form-data">
<p><center>To:</center><input type="text" name="to" value="" /><br />
<center>From:</center><input type="text" name="from" value="" /><br />
<center>Subject:</center><input type="text" name="subject" value="" /></p>
<p>Message:<br />
<textarea cols="20" rows="5" name="message"></textarea></p>
<p><center>File Attachment:</center><input type="file" name="fileatt" /></p>
<p><input type="submit" value="Send" /></p>
</form>
</center>
<img src="style/dot.gif" width="100%" height="1" border="" alt="" />

</body>
</html>
