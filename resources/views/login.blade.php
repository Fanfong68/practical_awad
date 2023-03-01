<x-header data="User Login Form" />

@if($errors->any())
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
@endif
<br>
<form action="login" method="POST">
    @csrf
    <input type="text" id="email" name="email" placeholder="Enter Email" /> <br><br>
    <input type="password" id="password" name="password" placeholder="Enter Password" /> <br><br>
    <button type="submit">Log In</button>
    <button type="button" onclick="window.location='{{ url("/home") }}'">Cancel</button>
</form>