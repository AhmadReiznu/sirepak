<h1>Test</h1>
<a href="{{ url('/logic-testing/create') }}">Add</a>
<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>role</th>
            <th>password</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role == 1 ? 'Admin':'User'}}</td>
            <td>{{$user->password}}</td>
            <td>
                <a href="{{ url('/logic-testing/delete/'.$user->id) }}">delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>