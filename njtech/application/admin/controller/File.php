<?php
namespace app\admin\controller;
use app\admin\model\Cate as CateModel;
use app\admin\model\File as ArticleModel;
use app\admin\controller\Common;
class File extends Common
{

    public function lst(){
        $artres=db('file')->order('id desc')->paginate(20);
        $this->assign('artres',$artres);
        return view();
    }
//教学新闻
    public function add(){
        //$res=db(keshi)->delete();
        if(request()->isPost()){
            $data=input('post.');
            $data['time']=time();
            /*$validate = \think\Loader::validate('Article3');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }*/
            $insert=db('file')->insert($data);
            $inserts = db('ser_article')->insert($data);
            if($insert && $inserts){
                $this->success('文件上传成功',url('lst'));
            }else{
                $this->error('文件上传失败！');
            }
            return;
        }
        $cate=new CateModel();
        $cateres=$cate->catetree();
        //$this->assign('res',$res);
        $this->assign('cateres',$cateres);
        return view();
    }

    public function edit(){
        $arts=db('file')->where(array('id'=>input('id')))->find();
        if(request()->isPost()){
            $data=input('post.');
            $save=db('file')->update($data);
            $save2 = db('ser_article')->where('time',$arts['time'])->find();
            $save2['title']=$data['title'];
            $save2['author']=$data['author'];
            $save2['content']=$data['content'];
            $save3 = db('ser_article')->update($save2);
            if($save && $save3){
                $this->success('修改文件成功！',url('lst'));
            }else{
                $this->error('修改文件失败！');
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
        $arts=db('file')->where(array('id'=>input('id')))->find();
        $delete=db('ser_article')->where('time',$arts['time'])->delete();
        if(ArticleModel::destroy(input('id')) && $delete){
            $this->success('删除文件成功！',url('lst'));
        }else{
            $this->error('删除文件失败！');
        }
    }


 



   

	












}
