<?php
namespace app\admin\model;
use think\Model;
class Article2 extends Model
{
    
	protected static function init()
    {
      	Article2::event('before_insert',function($article){
          if($_FILES['thumb']['tmp_name']){
                $file = request()->file('thumb');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if($info){
                    // $thumb=ROOT_PATH . 'public' . DS . 'uploads'.'/'.$info->getExtension();
                    $thumb='/njtech/' . 'public' . DS . 'uploads'.'/'.$info->getSaveName();
                    $article['thumb']=$thumb;
                }
            }
      });


      	Article2::event('before_update',function($article){
          if($_FILES['thumb']['tmp_name']){
          		$arts=Article2::find($article->id);
          		$thumbpath=$_SERVER['DOCUMENT_ROOT'].$arts['thumb'];
                if(file_exists($thumbpath)){
                	@unlink($thumbpath);
                }
                $file = request()->file('thumb');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if($info){
                    // $thumb=ROOT_PATH . 'public' . DS . 'uploads'.'/'.$info->getExtension();
                    $thumb='/njtech/' . 'public' . DS . 'uploads'.'/'.$info->getSaveName();
                    $article['thumb']=$thumb;
                }

            }
      });

      	Article2::event('before_delete',function($article){
          
          		$arts=Article2::find($article->id);
          		$thumbpath=$_SERVER['DOCUMENT_ROOT'].$arts['thumb'];
                if(file_exists($thumbpath)){
                	@unlink($thumbpath);
                }
        });


    }
    






}
