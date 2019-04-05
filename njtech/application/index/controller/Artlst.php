<?php
namespace app\index\controller;
use app\index\model\Article;
use app\index\model\Cate;
class Artlst extends Common
{
    //教学公告
    public function lst()
    {
        $article1=db('article2')->where('k_id',1)->order('id desc')->limit(5)->select();
        $article2=db('article2')->where('k_id',2)->order('id desc')->limit(5)->select();
        $article3=db('article2')->where('k_id',3)->order('id desc')->limit(5)->select();
        $article4=db('article2')->where('k_id',4)->order('id desc')->limit(5)->select();
        $article5=db('article2')->where('k_id',5)->order('id desc')->limit(5)->select();
        $article6=db('article2')->where('k_id',6)->order('id desc')->limit(5)->select();
        $article7=db('article2')->where('k_id',7)->order('id desc')->limit(5)->select();
        $article8=db('article2')->where('k_id',8)->order('id desc')->limit(5)->select();
        $article9=db('article2')->where('k_id',9)->order('id desc')->limit(5)->select();
        $this->assign('article1',$article1);
        $this->assign('article2',$article2);
        $this->assign('article3',$article3);
        $this->assign('article4',$article4);
        $this->assign('article5',$article5);
        $this->assign('article6',$article6);
        $this->assign('article7',$article7);
        $this->assign('article8',$article8);
        $this->assign('article9',$article9);
        return $this->fetch();
    }
}