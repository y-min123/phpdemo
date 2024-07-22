<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class TestController extends Controller
{
    public function test2()
    {
        phpinfo();
    }

    // 接收用户输入
    public  function test3(Request $request)
    {
        // 1. 接收某个参数
        $value = request()->input('address', '成都市');
        //dd = dump + die
        //dd($value);


        //2. 接收全部参数
        $allParams = request()->all();


        //3. 接收除了某个参数
        $params = request()->except('sex');
        //var_dump($params);

        //4. 是否有某个参数
        $result = request()->has('address');
        var_dump($result);
    }


    //DB 操作
    public  function add()
    {
//        //定义数据
//        $data = [
//            'name' => 'kitty',
//            'sex' => '1',
//            'email' => 'kitty@imobie.com'
//        ];
//        //增加数据
//        dump(DB::table('stu')->insert($data));


        //定义数据
        $data = [
            'name' => 'pinkDog',
            'sex' => '0',
            'email' => 'pink@imobie.com'
        ];
        //增加数据
        dump(DB::table('stu')->insertGetid($data));
    }


    public  function mod()
    {
        //定义要修改的名字
//        $data = ['name' => 'anry'];
//        dump(DB::table('stu')->where('id','=','1') -> update($data));

        // 递增递减 increment  decrement 仅针对纯数字
        dump(DB::table('stu') -> where('id','1') ->increment('score',5));

    }


    public  function select ()
    {
        //1. 取出所有数据
        $data = DB::table('stu') -> get();
        //dump($data);
        foreach ($data as $key => $value) {
            dump($value -> name);
        }
    }


    public  function delete()
    {

    }




}


