<?php
namespace app\index\controller;
use app\index\model\Cate;
class Them extends Common
{
    public function index(){
        $them=db('them')->order('id desc')->select();
        $count=db('them')->count();
        for($i=1;$i<$count+1;$i++){
            $them[$i-1]['thumb']="top".$i.".jpg";
            $data=db('article4')->where('k_id',$them[$i-1]['id'])->order('id desc')->limit(3)->select();
            $them[$i-1]['data']=$data;
        }
        $this->assign('them',$them);
        return view();
    }
}