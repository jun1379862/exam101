<form method="POST" action="{{ route('signup') }}">
    @csrf
    <div>
        <label for="name">Name</label>
        <input id="name" type="emnameil" name="name" value="{{ old('name') }}" required autofocus>
    </div>

    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
    </div>

    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
    </div>

    <div>
        <button type="submit">Sign Up</button>
    </div>
</form>
<div>
    <p>Already have an account? <a href="{{ route('login') }}">Log in here</a></p>
</div

@if ($errors->has('email'))
    <div>{{ $errors->first('email') }}</div>
@endif
@if ($errors->has('error'))
    <div>{{ $errors->first('error') }}</div>
@endif