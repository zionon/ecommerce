@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ trans($error) }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="/register">
    {!! csrf_field() !!}

    <div>
        Name
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

<!--     <div>
        Phone-number
        <input type="number" name="phone" value="{{ old('phone') }}">
    </div> -->

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>