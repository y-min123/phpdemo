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
//        //1. 取出所有数据
//        $data = DB::table('stu') -> get();
//        //dump($data);
//        foreach ($data as $key => $value) {
//            dump($value -> name);
//        }

//        //id < 3
//        $data1 = DB::table('stu') -> where('id', '<' ,4) -> get();
//        dump($data1);

//        // 80 <= score <= 90
//        $data2 = DB::table('stu') -> where('score', '>=', '80') -> where('score', '<=', '90') -> get();
//        dump($data2);

//        //id = 1 或者 id = 4
//        $data3 = DB::table('stu') -> where('id','1') -> orwhere('id','4') -> get();
//        dump($data3);

//        //返回一条数据
//        $data4 = DB::table('stu') -> where('id', '<' ,4) -> get() -> first();
//        dump($data4);

//        //获取某个具体的值 返回的第一行数据score的值，是一个字符串，不是数组
//        $data5 = DB::table('stu') -> where('id', '<', '4') -> value('score');
//        dump($data5);
//        //如果想要返回数组 用pluck
//        $data6 = DB::table('stu') -> where('id', '<', 4) -> pluck('score');
//        dump($data6);


//        //获取某些字段数据（多个字段）
//        //注意：where 和 where 的顺序可以调整。 原则是：增删改查，放在最后面就可以！！！
//        $data7 = DB::table('stu')  -> where('id','<','4') -> select('email', 'score') -> get();
//        dump($data7);


//        //排序
//        $data8 = DB::table('stu') -> orderBy('score','desc') -> get();
//        dump($data8);


        //分页查询
        $data9 = DB::table('stu') -> limit(2) -> offset(2) -> get();
        dump($data9);






    }


    public  function delete()
    {

    }




}


