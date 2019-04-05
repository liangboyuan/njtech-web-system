<?php
/**
 * Created by PhpStorm.
 * User: liangboyuan
 * Date: 2018/12/20
 * Time: 15:27
 */

namespace app\admin\controller;


class Xiaoli extends Common
{
    public function index()
    {
        if(request()->isPost()) {
            $data = input('post.');
            $file = request()->file('thumb');

            // 移动到框架应用根目录/public/uploads/ 目录下
            if($file) {
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if($info){
                    // $thumb=ROOT_PATH . 'public' . DS . 'uploads'.'/'.$info->getExtension();
                    $thumb= '/public' . DS . 'uploads'.'/'.$info->getSaveName();
                    $data['thumb']=$thumb;
                    $insert=db('xiaoli')->where('id',1)->update($data);
                    if($insert){
                        $this->success('文件上传成功');
                    }else{
                        $this->error('文件上传失败');
                    }
                }
            }
        }
        return view();
    }
}
