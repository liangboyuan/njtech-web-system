<?php
namespace app\index\controller;
use app\index\model\Article;
class Search extends Common
{
    public function index()
    {
        $article=new Article();
        $serHot=$article->getSerHot();
        $keywords=input('keywords');
        $serRes=db('ser_article')->order('id desc')->where('title','like','%'.$keywords.'%')->paginate(10,false,$config = ['query'=>array('keywords'=>$keywords)]);
        //$serRes2=db('article2')->order('id desc')->where('title','like','%'.$keywords.'%')->paginate(10,false,$config = ['query'=>array('keywords'=>$keywords)]);
        ///$serRes3=db('article3')->order('id desc')->where('title','like','%'.$keywords.'%')->paginate(10,false,$config = ['query'=>array('keywords'=>$keywords)]);
        //$serRes4=db('article4')->order('id desc')->where('title','like','%'.$keywords.'%')->paginate(10,false,$config = ['query'=>array('keywords'=>$keywords)]);
        //$serRes5=db('file')->order('id desc')->where('title','like','%'.$keywords.'%')->paginate(10,false,$config = ['query'=>array('keywords'=>$keywords)]);

        //$serRes=$serRes1 + $serRes2 + $serRes3 + $serRes4;
        /*$num1 = count($serRes);
        $num2 = count($serRes2);
        $num3 = count($serRes3);
        $num4 = count($serRes4);
        $num5 = count($serRes5);*/
        //echo $num1.' '.$num2.' '.$num3.' '.$num4.'/';
        /*for ($i=0;$i<$num2;$i++){
            $serRes[$num1+$i] = $serRes2[$i];
        }
        for ($i=0;$i<$num3;$i++){
            $serRes[$num1+$num2+$i] = $serRes3[$i];
        }
        for ($i=0;$i<$num4;$i++){
            $serRes[$num1+$num2+$num3+$i] = $serRes4[$i];
        }
        for ($i=0;$i<$num5;$i++){
            $serRes[$num1+$num2+$num3+$num4+$i] = $serRes5[$i];
        }*/
        //echo count($serRes);
        //dump($serRes);die;
        $this->assign(array(
            'serRes'=>$serRes,
            'keywords'=>$keywords,
            'serHot'=>$serHot,
        ));
        return view('search');
    }
}
