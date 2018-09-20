<?php
/**
 *  版权声明 :  地老天荒科技有限公司
 *  文件名称 :  right_route_api.php
 *  创 建 者 :  Shi Guang Yu
 *  创建日期 :  2018/09/19 18:42
 *  文件描述 :  权限管理模块路由地址
 *  历史记录 :  -----------------------
 */

// ----- 职位管理路由 -----

/**
 * 传值方式 : POST
 * 路由功能 : 添加职位
 */
Route::post(
    ':v/right_module/role_route',
    'right_module/:v.controller.RoleController/rolePost'
)->middleware('Right_v1_IsAdmin');

/**
 * 传值方式 : GET
 * 路由功能 : 获取职位信息
 */
Route::get(
    ':v/right_module/role_route',
    'right_module/:v.controller.RoleController/roleGet'
)->middleware('Right_v1_IsAdmin');

// ----- 权限管理路由 -----

/**
 * 传值方式 : GET
 * 路由功能 : 获取所有权限信息
 */
Route::get(
    ':v/right_module/return_json',
    function(){
        return returnResponse(1,'请发送管理标识',false);
    }
);

/**
 * 传值方式 : GET
 * 路由功能 : 获取所有权限信息
 */
Route::get(
    ':v/right_module/return_right',
    function(){
        return returnResponse(1,'权限不足',false);
    }
);

/**
 * 传值方式 : GET
 * 路由功能 : 获取所有权限信息
 */
Route::get(
    ':v/right_module/right_route',
    'right_module/:v.controller.RightController/rightGet'
);
