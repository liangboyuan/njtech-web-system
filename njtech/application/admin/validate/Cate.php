<?php
namespace app\admin\validate;
use think\Validate;
class Cate extends Validate
{

    protected $rule=[
        'catename'=>'require|max:25',
    ];


    protected $message=[
        'catename.require'=>'栏目名称不得为空！',
    ];

    protected $scene=[
        'add'=>['catename'],
        'edit'=>['catename'],
    ];





    

    




   

	












}
