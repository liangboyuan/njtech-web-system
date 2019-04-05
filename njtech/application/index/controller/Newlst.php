<?php
/**
 * Created by PhpStorm.
 * User: liangboyuan
 * Date: 2018/9/20
 * Time: 23:30
 */

namespace app\index\controller;


class Newlst extends Common
{
    //教学新闻
    public function index(){
        $data=intval(input('k_id'));
        $article=db('article2')->where('k_id',$data)->order('id desc')->paginate(15);
        $this->assign('article',$article);
        return view('newlst');
    }
    public function indexs(){
        $article=db('article3')->order('id desc')->paginate(15);
        $this->assign('article',$article);
        return view('newlst2');
    }
    public function them(){
        $id=input('cateid');
        $them_name=db('them')->where('id',$id)->value('them_name');
        $data=db('article4')->where('k_id',$id)->order('id desc')->paginate(15);
        $this->assign('data',$data);
        $this->assign('them_name',$them_name);
        return view();
    }
    public function filelst(){
        $file=db('file')->order('id desc')->paginate(15);
        $this->assign('file',$file);
        return view();
    }
}