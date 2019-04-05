<?php
namespace app\admin\controller;
use app\admin\model\Cate as CateModel;
use app\admin\model\Article2 as ArticleModel;
use app\admin\controller\Common;
class Article2 extends Common
{

    public function lst(){
        $artres2=db('article2')->order('id desc')->paginate(15);

        $this->assign('artres2',$artres2);
        return view();
    }

    public function add(){
        $resname=db('catename')->where('id',1)->find();

        if(request()->isPost()){
            $data=input('post.');
            $data['time']=time();
            $validate = \think\Loader::validate('Article2');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }
            $insert = db('ser_article')->insert($data);
            $article=new ArticleModel;
            if($article->save($data)&&$insert){
                $this->success('添加文章成功',url('lst'));
            }else{
                $this->error('添加文章失败！');
            }
            return;
        }
        $cate=new CateModel();
        $cateres=$cate->catetree();
        $this->assign('resname',$resname);
        $this->assign('cateres',$cateres);
        return view();
    }

    public function edit(){
        $arts=db('article2')->where(array('id'=>input('id')))->find();
        if(request()->isPost()){
            $data=input('post.');
            $validate = \think\Loader::validate('Article2');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
            }
            $save2 = db('ser_article')->where('time',$arts['time'])->find();
            $save2['title']=$data['title'];
            $save2['author']=$data['author'];
            $save2['k_id']=$data['k_id'];
            $save2['content']=$data['content'];
            $save3 = db('ser_article')->update($save2);
            $article=new ArticleModel;
            $save=$article->update($data);
            if($save && $save3){
                $this->success('修改文章成功！',url('lst'));
            }else{
                $this->error('修改文章失败！');
            }
            return;
        }
        $cate=new CateModel();
        $cateres=$cate->catetree();

        $this->assign(array(
            'cateres'=>$cateres,
            'arts'=>$arts,
            ));
        return view();
    }

    public function del(){
        $arts=db('article2')->where(array('id'=>input('id')))->find();
        $delete=db('ser_article')->where('time',$arts['time'])->delete();
        if(ArticleModel::destroy(input('id')) && $delete){
            $this->success('删除文章成功！',url('lst'));
        }else{
            $this->error('删除文章失败！');
        }
    }


 



   

	












}
