<?php
// +----------------------------------------------------------------------
// | tags.php
// +----------------------------------------------------------------------
// | 时间：2017/9/18
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 尚宝龙 <bravelib@163.com>
// +----------------------------------------------------------------------

//----------------------------------
// 表单令牌 http://document.thinkphp.cn/manual_3_2/form_token.html
//----------------------------------

return [
    // 添加下面一行定义即可
    //    'view_filter' => ['Behavior\TokenBuild'],
    // 如果是3.2.1以上版本 需要改成
    'view_filter' => ['Behavior\TokenBuildBehavior'],

    'TOKEN_ON'    => true,  // 是否开启令牌验证 默认关闭
    'TOKEN_NAME'  => '__hash__',// 令牌验证的表单隐藏字段名称，默认为__hash__
    'TOKEN_TYPE'  => 'md5',  //令牌哈希验证规则 默认为MD5
    'TOKEN_RESET' => true,  //令牌验证出错后是否重置令牌 默认为true
];