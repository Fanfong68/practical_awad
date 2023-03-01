<x-header data="Add Users" />

<form action="addUser" method="POST">
    @csrf
    <input type="text" id="name" name="name" placeholder="Name" /> <br><br>
    <input type="text" id="email" name="email" placeholder="Email" /> <br><br>
    <button type="submit">Add User</button>
    <button type="button" onclick="window.location='{{ url("/home") }}'">Cancel</button>
</form>