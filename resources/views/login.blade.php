<x-header data="User Login Form" />
<form action="login" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter Username" /> <br>
    <span style="color:red">@error('username'){{$message}}@enderror</span><br>
    <input type="password" name="password" placeholder="Enter Password" /> <br>
    <span style="color:red">@error('username'){{$message}}@enderror</span><br>
    <input type="hidden" name="is_admin" value="0"><br>
    <button type="submit">Log In</button>
    <button type="button" onclick="window.location='{{ url("/home") }}'">Cancel</button>
</form>