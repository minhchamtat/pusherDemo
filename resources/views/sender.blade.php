<form action="/sender" method="post">
	<b>Name &nbsp;</b> <input type="text" name="name" placeholder="name"><br><br>
	<b>Comment &nbsp;</b><input type="text" name="comment" placeholder="comment"><br><br>
	<input type="submit" name="">
	{{ csrf_field() }}
</form>