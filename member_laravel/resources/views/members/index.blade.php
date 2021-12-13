@extends('layouts.app')
 
@section('content')
 
<!-- タスク一覧表示 -->
<div class="mx-auto">
  <H1>会員一覧</H1>
  <a href="{{route('members.create')}}">新規作成</a>

 @if (count($members) > 0)
    <div class="mx-auto" style="width: 50%;">
      <table class="table table-striped task-table">
        
        <!-- テーブルヘッダ -->
        <thead>
          <th>名前</th>
          <th>電話番号</th>
          <th>メールアドレス</th>
          <th>&nbsp;</th>
        </thead>

        <!-- テーブル本体 -->
        <tbody>
          @foreach ($members as $member)
            <tr>
            <!-- タスク名 -->
              <td class="table-text">
                <div>{{ $member->name }}</div>
              </td>
              <td class="table-text">
                <div>{{ $member->phone }}</div>
             </td>
             <td class="table-text">
                <div>{{ $member->email }}</div>
              </td>
              <td>
              <a href="{{route('members.edit',['id'=>$member->id])}}" class="btn  btn-warning">編集</a>
              </td>
              <td>
                <form method="POST" action="{{route('members.delete',['id'=>$member->id])}}">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger">削除</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

  @else
    <div class="panel-body">
      <table class="table table-striped task-table">
  
        <!-- テーブルヘッダ -->
        <thead>
          <th>名前</th>
          <th>電話番号</th>
          <th>メールアドレス</th>
          <th>&nbsp;</th>
        </thead>
    
        <!-- テーブル本体 -->
        <tbody>
          @foreach ($members as $member)
            <tr>
            <!-- タスク名 -->
              <td class="table-text">
                <div>{{ $member->name }}</div>
              </td>
              <td class="table-text">
                <div>{{ $member->name }}</div>
              </td>
              <td class="table-text">
                <div>{{ $member->name }}</div>
              </td>
              
              <td>
                <!-- TODO: 編集ボタン -->
              </td>
              <td>
                <!-- TODO: 削除ボタン -->
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>

@endif
@endsection