@extends('layouts.app')
 
@section('content')

<body class="text-center">
    <main class="container flex">
  <h1 class="mb-3">会員編集 会員ID:{{ $member->id }}</h1>

    <form method="POST"  action="{{route('members.update',['id'=>$member->id])}}">
      @csrf

    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">名前</label>
      <div class="col-sm-10">
      <input type="text" class="form-control mb-3" name=name value="{{$member->name}}">
      </div>
    </div>

      <div class="form-group row">
      <label for="phone" class="col-sm-2 col-form-label">電話番号</label>
      <div class="col-sm-10">
      <input type="tel" class="form-control mb-3" name=phone value="{{$member->phone}}">
      </div>
    </div>

      <div class="form-group row">
      <label for="email" class="col-sm-2 col-form-label">メールアドレス</label>
      <div class="col-sm-10">
      <input type="text" class="form-control mb-3" name=email value="{{$member->email}}">
      </div>
    </div>
    
      <input type="submit" class="btn btn-primary" value="更新する">
    </form>
    
      <form method="POST" action="{{route('members.delete',['id'=>$member->id])}}">
        @csrf
        @method('delete')
         <button type="submit" class="btn btn-danger">削除</button>
      </form>


</main>
</body>