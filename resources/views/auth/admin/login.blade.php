@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ trans($error) }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="/admin/login">
    {!! csrf_field() !!}

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>