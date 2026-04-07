<x-logout-layout>
<!-- @if($errors->any())
<div>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif -->
    <!-- 適切なURLを入力してください -->
{!! Form::open(['url' => 'register']) !!}

<h2>新規ユーザー登録</h2>

@error('username')
<p class='form-error'>{{$message}}</p>
@enderror

{{ Form::label('ユーザー名') }}
{{ Form::text('username',null,['class' => 'input']) }}

@error('email')
<p class='form-error'>{{$message}}</p>
@enderror
{{ Form::label('メールアドレス') }}
{{ Form::email('email',null,['class' => 'input']) }}

@error('password')
<p class='form-error'>{{$message}}</p>
@enderror
{{ Form::label('パスワード') }}
{{ Form::text('password',null,['class' => 'input']) }}

@error('password_confirmation')
<p class='form-error'>{{$message}}</p>
@enderror
{{ Form::label('パスワード確認') }}
{{ Form::text('password_confirmation',null,['class' => 'input']) }}

{{ Form::submit('登録') }}

<p><a href="login">ログイン画面へ戻る</a></p>

{!! Form::close() !!}


</x-logout-layout>
