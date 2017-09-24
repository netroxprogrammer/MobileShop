<html>
<head>
<title>Upload Form</title>
</head>
<body>
<form method = "post" action = "upload/do_upload"  enctype="multipart/form-data">
<?php echo $error;?>

<input type="file" name="userfile[]" size="20"  />

<input type="file" name="userfile[]" size="20"  />

<input type="file" name="userfile[]" size="20"  />
<br /><br />
<input type="submit" value="upload" />
</form>
</body>
</html>