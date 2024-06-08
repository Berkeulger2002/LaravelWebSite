

<form action="/create" method="POST">
@csrf
<label for="title">User:</label>
<input type="text" name="title"></br>
<label for="body">Massage: </label>
<textarea name="body" cols="30" rows="3"></textarea>
<button>Send</button>
</form>