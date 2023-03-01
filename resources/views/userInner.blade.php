<h3>This is the list of Users</h3>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Operation</td>
        <td>Operation</td>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['name']}}</td>
        <td>{{$user['email']}}</td>
        <td><a href={{"deleteUser/".$user['id']}}>Delete</a></td>
        <td><a href={{"updateUser/".$user['id']}}>Update</a></td>
    </tr>
    @endforeach
</table>

<span>
    {{$users->links()}}
</span>

<style>
    .w-5{
        display:none
    }
</style>
