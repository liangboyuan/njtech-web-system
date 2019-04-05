<?php
namespace app\admin\validate;
use think\Validate;
class Article4 extends Validate
{

    protected $rule=[
        'title'=>'require',
        'content'=>'require',
    ];


    protected $message=[
        'title.require'=>'文章标题不得为空！',

        // 'title.max'=>'文章标题长度大的大于25个字符！',
        //'cateid.require'=>'文章所属栏目不得为空！',
        'content.require'=>'文章内容不得为空！',
    ];

    protected $scene=[
        'add'=>['title','content'],
        'edit'=>['title',],
    ];





    

    




   

	












}
