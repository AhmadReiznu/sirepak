@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
<form action="{{ url('/logic-testing') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td>name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>email</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>password</td>
            <td><input type="password" step="0.01" name="password"></td>
        </tr>
        <tr>
            <td>password_confirmation</td>
            <td><input type="password" name="password_confirmation"></td>
        </tr>
        <tr>
            <td><button type="submit">Tambahkan</button></td>
        </tr>
    </table>
</form>