<x-header data="Update User" />

<form action="updateUser" method="POST">
    @csrf
    <input type="hidden" id="id" name="id" value="{{$data['id']}}" />
    <input type="text" id="name" name="name" value="{{$data['name']}}" placeholder="Name"/> <br><br>
    <input type="text" id="email" name="email" value="{{$data['email']}}" placeholder="Email"/> <br><br>
    <button type="submit">Update User</button>
    <button type="button" onclick="window.location='{{ url("/dataset") }}'">Cancel</button>
</form>