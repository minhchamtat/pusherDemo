<!DOCTYPE html>
<html>
<head>
	<title>event</title>
</head>
<body>
	<form method="post" action="sendmail">
		<b>title &nbsp;</b> <input type="text" name="title" placeholder="title"><br><br>
		<b>Comment &nbsp;</b><input type="text" name="content" placeholder="comment"><br><br>
		<input type="submit" name="" value="submit để nhận mail">
		{{ csrf_field() }}
	</form>
</body>
</html>