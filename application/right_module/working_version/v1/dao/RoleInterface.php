<?php
/**
 *  版权声明 :  地老天荒科技有限公司
 *  文件名称 :  RoleInterface.php
 *  创 建 者 :  Shi Guang Yu
 *  创建日期 :  2018/09/19 17:39
 *  文件描述 :  职位管理_数据接口声明
 *  历史记录 :  -----------------------
 */
namespace app\right_module\working_version\v1\dao;

interface RoleInterface
{
    /**
     * 名  称 : roleCreate()
     * 功  能 : 声明:添加职位数据处理
     * 变  量 : --------------------------------------
     * 输  入 : $post['role_name']  => '职位名称';
     * 输  入 : $post['role_class'] => '职位分组';
     * 输  入 : $post['right_str']  => '权限ID字符串';
     * 输  出 : ['msg'=>'success','data'=>'提示信息']
     * 创  建 : 2018/09/19 18:40
     */
    public function roleCreate($post);

    /**
     * 名  称 : roleSelect()
     * 功  能 : 声明:获取职位信息数据处理
     * 变  量 : --------------------------------------
     * 输  入 : $get['admin_token'] => '管理标识';
     * 输  入 : $get['role_class']  => '职位分组';
     * 输  出 : ['msg'=>'success','data'=>'返回数据']
     * 创  建 : 2018/09/20 16:14
     */
    public function roleSelect($get);
}
