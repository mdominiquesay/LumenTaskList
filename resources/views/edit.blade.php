
<form method="POST" action="/update">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{$request->name}}">
    <input type="hidden" id="id" name="id" value="{{$request->id}}">
    <button type="submit">Submit</button>
</form>
