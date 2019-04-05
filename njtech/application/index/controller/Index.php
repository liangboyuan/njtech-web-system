<?php
/**
 * Created by PhpStorm.
 * User: liangboyuan
 * Date: 2018/8/20
 * Time: 08:24
 */
namespace app\index\controller;

class Index extends Common
{
    public function index()
    {

        $hotlink=db('hotlink')->order('sort desc')->limit(6)->select();
        $lintcount=count($hotlink);
        for($i=0;$i<$lintcount;$i++){
            $hotlink[$i]['pic']=$i+1;
        }
        $this->assign('hotlink',$hotlink);

        $uselink=db('uselink')->order('sort desc')->limit(6)->select();
        $lintcount=count($uselink);
        for($i=0;$i<$lintcount;$i++){
            $uselink[$i]['pic']=$i+1;
        }
        $this->assign('uselink',$uselink);

        $link1=db('link')->where('cate',1)->select();
        $link2=db('link')->where('cate',2)->select();
        $this->assign('link1',$link1);
        $this->assign('link2',$link2);
        //dump($hotlink);
        $hotrestop=db('article3')->where('rec',1)->limit(1)->order('id desc')->select();
        $hotres=db('article3')->where('rec',1)->limit('1,5')->order('id desc')->select();
        //unset($hotres[4]);
        $article1=db('article2')->order('id desc')->limit(7)->select();
        $article2=db('article2')->where('cateid',2)->order('id desc')->limit(6)->select();
        $article3=db('article2')->where('cateid',3)->order('id desc')->limit(6)->select();
        $article4=db('article3')->order('id desc')->limit(1)->select();
        $article5=db('article3')->order('id desc')->limit(8)->select();
        $article6=db('article3')->order('id desc')->limit(3)->select();
        $file=db('file')->limit(7)->order("id desc")->select();

        $pic1[0]=$article6[0];
        $pic2[0]=$article6[1];
        $pic2[1]=$article6[2];
        $cate=db('catename')->where('id',1)->find();
        $this->assign('file',$file);
        $this->assign('pic1',$pic1);
        $this->assign('pic2',$pic2);
        $this->assign('catename',$cate);
        $this->assign('article1',$article1);
        $this->assign('article2',$article2);
        $this->assign('article3',$article3);
        $this->assign('article4',$article4);
        $this->assign('article5',$article5);
        $this->assign('article6',$article6);
        $this->assign('hotres',$hotres);
        $this->assign('hotrestop',$hotrestop);
        $them=db('them')->limit(4)->select();
        for($i=1;$i<5;$i++){
            $them[$i-1]['thumb']="top".$i.".jpg";
            $data=db('article4')->where('k_id',$them[$i-1]['id'])->order('id desc')->limit(3)->select();
            $them[$i-1]['data']=$data;
        }
        //dump($them);
        $this->assign('them',$them);
        //校历时间
        $xiaoli=db('xiaoli')->where('id',1)->find();
        $this->assign('xiaoli',$xiaoli);
        return $this->fetch();
    }

    public function xiaoli(){
        $xiaoli=db('xiaoli')->where('id',1)->find();
        $this->assign('xiaoli',$xiaoli);
        return $this->fetch();
    }
}