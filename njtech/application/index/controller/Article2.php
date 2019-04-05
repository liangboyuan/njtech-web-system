<?php
namespace app\index\controller;
use app\index\model\Cate;
class Article2 extends Common
{
    public function index()
    {
        $data=input('cateid');
        db('article2')->where(array('id'=>$data))->setInc('click');
        $article=db('article2')->where('id',$data)->find();
        $newlist=db('article2')->order('id desc')->limit('7')->select();
        $this->assign('articles',$article);
        $this->assign('newlist',$newlist);
        return view('article');
    }
    public function index2()
    {
        $data=input('cateid');
        db('article3')->where(array('id'=>$data))->setInc('click');
        $article=db('article2')->where('id',$data)->find();
        $this->assign('articles',$article);
        return view('article');
    }
}
