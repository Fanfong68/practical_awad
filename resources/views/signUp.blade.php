<x-header data="User Signup Form" />

<form action="signUp" method="POST">
    @csrf
    <input type="text" id="name" name="name" placeholder="Name" /> <br><br>
    <input type="text" id="email" name="email" placeholder="Email" /> <br><br>
    <input type="password" id="password" name="password" placeholder="Password" /> <br><br>
    <button type="submit">Sign Up</button>
    <button type="button" onclick="window.location='{{ url("/home") }}'">Cancel</button>
</form>