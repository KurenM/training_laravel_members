@extends('layouts.app')
 
@section('content')

<body class="text-center">
  <main class="container flex">
  <h1 class="mb-3">新規作成</h1>

    <form method="POST" class="" action="{{route('members.store')}}">
      @csrf

      <div class="form-group mb-3">
        <input type="text" class="form-control" name="name" id="form-name" placeholder="名前" required>
      </div>

      <div class="form-group mb-3">
        <input type="tel" class="form-control" name="phone" id="form-tel" placeholder="電話番号" required>
      </div>

      <div class="form-group mb-3">
        <input type="email" class="form-control" name="email" id="form-email" placeholder="メールアドレス" required>
      </div>

      <button type="submit">登録</button>
    </br>
      <a href="{{ route('members') }}">一覧へ戻る</a>

    </form>
  </div>
</main>
</body>