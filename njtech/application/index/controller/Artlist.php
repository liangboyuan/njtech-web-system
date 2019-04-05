<?php
namespace app\index\controller;
use app\index\model\Article;
use app\index\model\Cate;
class Artlist extends Common
{
    public function lst()
    {
        $article=new Article();
        //$artRes=$article->getAllArticles(input('cateid'));
        $cate=new Cate();
        $cateRes=$cate->getchilrenid(input('cateid'));
        $cates = array_map('intval', explode(',', $cateRes));
        //dump(count($cates));die;
        if(count($cates)!=1){
            $num=count($cates)-1;
            unset($cates[$num]);
        }

        foreach ($cates as $k => $v) {
            $children=db('cate')->where('id',$v)->find();
            //artRes=$article->getListRes($v);
            $artRes=db('article')->where('cateid',$v)->order('id desc')->limit('5')->select();
            /*foreach($children as $c => $d){
                $children1=db('cate')->where(array('pid'=>$d['id']))->select();
            }*/
            //dump($children);die;
            if($children){
                $tere[$k]['children']=$children;
                $tere[$k]['article']=$artRes;
            }else{
                $tere[$k]['children']=0;
                $tere[$k]['article']=$artRes;
            }
        }

        //dump($tere);die;
        /*$list=array();
        foreach($cates as $arr){
            $list[$arr['parentid']][]=$arr;
        }
        $this->assign("list",$list);*/
        $this->assign('tere',$tere);
        return $this->fetch();
    }

    public function lstpage(){
        $cateid=input('cateid');
        $catename=db('cate')->where('id',$cateid)->find();
        $p_name=db('cate')->where('id',$catename['pid'])->find('catename');
        $data=db('article')->where('cateid',$cateid)->order('id desc')->paginate(20);
        $this->assign('data',$data);
        $this->assign('catename',$catename);
        $this->assign('p_name',$p_name);
        return $this->fetch();
    }
}