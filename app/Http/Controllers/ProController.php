<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ProController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pro = DB::table('pro')->paginate(5);

         return view('Backstage.Pro.index',[
            'pro'=>$pro
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backstage.Pro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token']);

        if($request->has('profile')){
            $suffix = $request->file('profile')->extension();

            $name = uniqid("img_").'.'.$suffix;

            $dir = './uploads/pro/'.date('Y-m-d');

            $request->file('profile')->move($dir,$name);

            $data['profile'] = trim($dir.'/'.$name,'.');

            if (DB::table('pro')->insert($data)) {
                return redirect('pro')->with('msg','添加成功');
            }else{
                return redirect('pro')->with('msg','添加失败');
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pro = DB::table('pro')->where('id',$id)->get();
        return view('Backstage.Pro.show',[
            'pro'=>$pro
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pro = DB::table('pro')->where('id',$id)->get();

        return view('Backstage.Pro.edit',[
            'pro'=>$pro
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $data = $request->except(['_token','_method']);

        if (DB::table('pro')->where('id',$id)->update($data)) {
           return redirect('pro')->with('msg','更新成功..');
        }else{
           return redirect('pro')->with('msg','您没有更新哦=￣ω￣=');
        }
        // var_dump($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(DB::table('pro')->where('id',$id)->delete()){
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败');
        }
    }
}
