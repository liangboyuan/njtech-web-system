<?php

namespace app\index\controller;
use app\index\model\Cate;
class Article extends Common
{

    //菜单栏新闻
    public function index()
    {
        $artid=input('cateid');
        db('article')->where(array('id'=>$artid))->setInc('click');
        $articles=db('article')->find($artid);
        $article= new \app\index\model\Article();
        $hotRes=$article->getHotRes($articles['cateid']);
        $newlist=db('article')->order('id desc')->limit('7')->select();
        $this->assign(array(
            'newlist' =>$newlist,
            'articles'=>$articles,
            'hotRes'=>$hotRes,
            'artid'=>$artid,
        ));
        return view('article2');
    }

    //教学新闻
    public function index3()
    {
        $artid=input('cateid');
        db('article3')->where(array('id'=>$artid))->setInc('click');
        $articles=db('article3')->find($artid);
        $article= new \app\index\model\Article();
        $hotRes=$article->getHotRes($articles['cateid']);
        $newlist=db('article3')->order('id desc')->limit('7')->select();

        $this->assign(array(
            'newlist' =>$newlist,
            'articles'=>$articles,
            'hotRes'=>$hotRes,
            'artid'=>$artid,
        ));
        return view('article');
    }

    /*public function index2()
    {
        $artid=input('artid');
        db('article')->where(array('id'=>$artid))->setInc('click');
        $articles=db('article')->find($artid);
        $article= new \app\index\model\Article();
        $hotRes=$article->getHotRes($articles['cateid']);
        $newlist=db('article')->limit('5')->order('id desc')->select();
        $this->assign(array(
            'newlist' =>$newlist,
            'articles'=>$articles,
            'hotRes'=>$hotRes,
            'artid'=>$artid,
        ));
        return view('article2');
    }*/
    public function them(){
        $id=input('cateid');
        db('article4')->where(array('id'=>$id))->setInc('click');
        $k_id=db('article4')->where('id',$id)->value('k_id');
        $them_name=db('them')->where('id',$k_id)->value('them_name');
        $data=db('article4')->where('id',$id)->find();
        $this->assign('data',$data);
        $this->assign('them_name',$them_name);
        $newlist=db('article4')->limit('7')->order('id desc')->select();
        $this->assign('newlist',$newlist);
        return view();
    }
    public function file(){
        $id=input('cateid');
        db('file')->where(array('id'=>$id))->setInc('click');
        $data=db('file')->where('id',$id)->find();
        $newlist=db('file')->limit('7')->order('id desc')->select();
        $this->assign('data',$data);
        $this->assign('newlist',$newlist);
        return view();
    }
    public function search(){
        $id=input('artid');
        $data=db('ser_article')->where('id',$id)->find();
        $newlist=db('article3')->limit('7')->order('id desc')->select();
        $this->assign('data',$data);
        $this->assign('newlist',$newlist);
        return view('search');
    }
}