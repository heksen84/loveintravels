<style>
input {
font-size:20px;
display: block;
margin:10px;
}
</style>
<center>
<h1>Сброс пароля</h1>
<form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
  {{ csrf_field() }}
<input type="hidden" name="token" value="{{ $token }}">
<input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>
<input id="password" type="password" class="form-control" name="password" required>
<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
<button type="submit" class="btn btn-primary">Reset Password</button>
</form>
</center>