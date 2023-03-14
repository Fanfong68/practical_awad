<x-header data="User Signup Form" />

<h1> Hello,{{session('user')}}</h1>
<form action="signUp" method="POST">
    @csrf
    <input type="text" id="name" name="name" placeholder="Name" /> <br><br>
    <span style="color:red">@error('name'){{$message}}@enderror</span><br>
    <input type="text" id="email" name="email" placeholder="Email" /> <br><br>
    <span style="color:red">@error('email'){{$message}}@enderror</span><br>
    <input type="password" id="password" name="password" placeholder="Password" /> <br><br>
    <span style="color:red">@error('password'){{$message}}@enderror</span><br>
    <input type="password" id="password" name="confirm_password" placeholder="Match Password" /> <br><br>
    <span style="color:red">@error('confirm_password'){{$message}}@enderror</span><br>
    <input type="hidden" name="is_admin" value="0"><br>
    <button type="submit">Sign Up</button>
    <button type="button" onclick="window.location='{{ url("/home") }}'">Cancel</button>
</form>