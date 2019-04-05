<?php
namespace app\admin\validate;
use think\Validate;
class Article2 extends Validate
{

    protected $rule=[
        'title'=>'require',
        'content'=>'require',
    ];


    protected $message=[
        'title.require'=>'文章标题不得为空！',
        // 'title.max'=>'文章标题长度大的大于25个字符！',
    ];

    protected $scene=[
        'add'=>['title','cateid','content'],
        'edit'=>['title','cateid'],
    ];





    

    




   

	












}
