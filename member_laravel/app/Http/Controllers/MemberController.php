<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Member;
use DB;

class MemberController extends Controller
{
    /**
     * 会員一覧
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $members=DB::table('members')
      ->select('id', 'name', 'phone', 'email')
      ->get();
        return view('members.index',compact('members'));
    }


    /**
     * 新規登録画面
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * 新規追加
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member = new Member;

        $member->name = $request->input('name');
        $member->phone = $request->input('phone');
        $member->email = $request->input('email');

        $member->save();

        //一覧へリダイレクト
        return redirect('members');
    }

    /**
     * 会員編集画面
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request  $request , $id)
    {
        $member=Member::findOrFail($id);
        return view('members.edit',['member'=>$member]);
    }

    /**
     * 編集登録
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    $member=Member::findOrFail($id);

    $member->name=$request->input('name');
    $member->phone=$request->input('phone');
    $member->email=$request->input('email');

    //DBに保存
    $member->save();

    //処理が終わったらmember/indexにリダイレクト
    return redirect('members');
    }

    /**
     * 会員削除
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request  $request , $id)
    {
    $member=Member::findOrFail($id);
    $member->delete();

    return redirect('members');
    }
}
