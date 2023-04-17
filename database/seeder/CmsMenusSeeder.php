<?php

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

return new class extends Seeder
{
    /**
     * Run the seeder.
     *
     * @return void
     */
    public function run(): void
    {
        $menus = $this->menus();

        importTreeData($menus, 'permissions');
    }

    public function menus(): array
    {
        return array (
  0 => 
  array (
    'id' => 45,
    'parent_id' => 0,
    'permission_name' => '内容管理',
    'route' => '/cms',
    'icon' => 'newspaper',
    'module' => 'cms',
    'permission_mark' => '',
    'component' => '/admin/layout/index.vue',
    'redirect' => NULL,
    'keepalive' => 1,
    'type' => 1,
    'hidden' => 1,
    'sort' => 1,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681709347,
    'updated_at' => 1681709347,
    'deleted_at' => 0,
  ),
  1 => 
  array (
    'id' => 53,
    'parent_id' => 46,
    'permission_name' => '分类目录',
    'route' => 'category',
    'icon' => 'link',
    'module' => 'cms',
    'permission_mark' => 'category',
    'component' => '/Cms/views/category/index.vue',
    'redirect' => NULL,
    'keepalive' => 1,
    'type' => 2,
    'hidden' => 1,
    'sort' => 1,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681711643,
    'updated_at' => 1681711643,
    'deleted_at' => 0,
  ),
  2 => 
  array (
    'id' => 58,
    'parent_id' => 53,
    'permission_name' => '删除',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'category@destroy',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 5,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681711652,
    'updated_at' => 1681711652,
    'deleted_at' => 0,
  ),
  3 => 
  array (
    'id' => 54,
    'parent_id' => 53,
    'permission_name' => '列表',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'category@index',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 1,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681711652,
    'updated_at' => 1681711652,
    'deleted_at' => 0,
  ),
  4 => 
  array (
    'id' => 56,
    'parent_id' => 53,
    'permission_name' => '读取',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'category@show',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 3,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681711652,
    'updated_at' => 1681711652,
    'deleted_at' => 0,
  ),
  5 => 
  array (
    'id' => 55,
    'parent_id' => 53,
    'permission_name' => '新增',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'category@store',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 2,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681711652,
    'updated_at' => 1681711652,
    'deleted_at' => 0,
  ),
  6 => 
  array (
    'id' => 57,
    'parent_id' => 53,
    'permission_name' => '更新',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'category@update',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 4,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681711652,
    'updated_at' => 1681711652,
    'deleted_at' => 0,
  ),
  7 => 
  array (
    'id' => 46,
    'parent_id' => 45,
    'permission_name' => '文章',
    'route' => 'articles',
    'icon' => 'document-chart-bar',
    'module' => 'cms',
    'permission_mark' => 'post',
    'component' => '',
    'redirect' => NULL,
    'keepalive' => 1,
    'type' => 2,
    'hidden' => 1,
    'sort' => 1,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681709462,
    'updated_at' => 1681709462,
    'deleted_at' => 0,
  ),
  8 => 
  array (
    'id' => 59,
    'parent_id' => 46,
    'permission_name' => '所有文章',
    'route' => 'post',
    'icon' => 'document-duplicate',
    'module' => 'cms',
    'permission_mark' => 'post',
    'component' => '/Cms/views/post/index.vue',
    'redirect' => NULL,
    'keepalive' => 1,
    'type' => 2,
    'hidden' => 1,
    'sort' => 1,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681711717,
    'updated_at' => 1681711717,
    'deleted_at' => 0,
  ),
  9 => 
  array (
    'id' => 72,
    'parent_id' => 46,
    'permission_name' => '创建文章',
    'route' => 'create/:id?',
    'icon' => 'arrow-long-right',
    'module' => 'cms',
    'permission_mark' => 'post_create',
    'component' => '/Cms/views/post/create.vue',
    'redirect' => NULL,
    'keepalive' => 1,
    'type' => 2,
    'hidden' => 2,
    'sort' => 1,
    'active_menu' => '/cms/articles/post',
    'creator_id' => 1,
    'created_at' => 1681712047,
    'updated_at' => 1681720631,
    'deleted_at' => 0,
  ),
  10 => 
  array (
    'id' => 64,
    'parent_id' => 59,
    'permission_name' => '删除',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'post@destroy',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 5,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681711727,
    'updated_at' => 1681711727,
    'deleted_at' => 0,
  ),
  11 => 
  array (
    'id' => 65,
    'parent_id' => 59,
    'permission_name' => '禁用/启用',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'post@enable',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 6,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681711727,
    'updated_at' => 1681711727,
    'deleted_at' => 0,
  ),
  12 => 
  array (
    'id' => 60,
    'parent_id' => 59,
    'permission_name' => '列表',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'post@index',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 1,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681711727,
    'updated_at' => 1681711727,
    'deleted_at' => 0,
  ),
  13 => 
  array (
    'id' => 62,
    'parent_id' => 59,
    'permission_name' => '读取',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'post@show',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 3,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681711727,
    'updated_at' => 1681711727,
    'deleted_at' => 0,
  ),
  14 => 
  array (
    'id' => 61,
    'parent_id' => 59,
    'permission_name' => '新增',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'post@store',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 2,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681711727,
    'updated_at' => 1681711727,
    'deleted_at' => 0,
  ),
  15 => 
  array (
    'id' => 63,
    'parent_id' => 59,
    'permission_name' => '更新',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'post@update',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 4,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681711727,
    'updated_at' => 1681711727,
    'deleted_at' => 0,
  ),
  16 => 
  array (
    'id' => 86,
    'parent_id' => 45,
    'permission_name' => '资源管理',
    'route' => 'resources',
    'icon' => 'adjustments-horizontal',
    'module' => 'cms',
    'permission_mark' => 'resource',
    'component' => '/Cms/views/resource/index.vue',
    'redirect' => NULL,
    'keepalive' => 1,
    'type' => 2,
    'hidden' => 1,
    'sort' => 1,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681713734,
    'updated_at' => 1681713734,
    'deleted_at' => 0,
  ),
  17 => 
  array (
    'id' => 91,
    'parent_id' => 86,
    'permission_name' => '删除',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'resource@destroy',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 5,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681713740,
    'updated_at' => 1681713740,
    'deleted_at' => 0,
  ),
  18 => 
  array (
    'id' => 92,
    'parent_id' => 86,
    'permission_name' => '禁用/启用',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'resource@enable',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 6,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681713740,
    'updated_at' => 1681713740,
    'deleted_at' => 0,
  ),
  19 => 
  array (
    'id' => 87,
    'parent_id' => 86,
    'permission_name' => '列表',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'resource@index',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 1,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681713740,
    'updated_at' => 1681713740,
    'deleted_at' => 0,
  ),
  20 => 
  array (
    'id' => 89,
    'parent_id' => 86,
    'permission_name' => '读取',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'resource@show',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 3,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681713740,
    'updated_at' => 1681713740,
    'deleted_at' => 0,
  ),
  21 => 
  array (
    'id' => 88,
    'parent_id' => 86,
    'permission_name' => '新增',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'resource@store',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 2,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681713740,
    'updated_at' => 1681713740,
    'deleted_at' => 0,
  ),
  22 => 
  array (
    'id' => 90,
    'parent_id' => 86,
    'permission_name' => '更新',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'resource@update',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 4,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681713740,
    'updated_at' => 1681713740,
    'deleted_at' => 0,
  ),
  23 => 
  array (
    'id' => 73,
    'parent_id' => 45,
    'permission_name' => '设置',
    'route' => 'setting',
    'icon' => 'cog-6-tooth',
    'module' => 'cms',
    'permission_mark' => 'setting',
    'component' => '',
    'redirect' => NULL,
    'keepalive' => 1,
    'type' => 2,
    'hidden' => 1,
    'sort' => 1,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681712437,
    'updated_at' => 1681712437,
    'deleted_at' => 0,
  ),
  24 => 
  array (
    'id' => 74,
    'parent_id' => 73,
    'permission_name' => '常规',
    'route' => 'general',
    'icon' => 'list-bullet',
    'module' => 'cms',
    'permission_mark' => 'setting',
    'component' => '/Cms/views/setting/general/index.vue',
    'redirect' => NULL,
    'keepalive' => 1,
    'type' => 2,
    'hidden' => 1,
    'sort' => 1,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681712534,
    'updated_at' => 1681712534,
    'deleted_at' => 0,
  ),
  25 => 
  array (
    'id' => 77,
    'parent_id' => 73,
    'permission_name' => '内容',
    'route' => 'content',
    'icon' => 'qr-code',
    'module' => 'cms',
    'permission_mark' => 'setting_content',
    'component' => '/Cms/views/setting/content/index.vue',
    'redirect' => NULL,
    'keepalive' => 1,
    'type' => 2,
    'hidden' => 1,
    'sort' => 1,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681712671,
    'updated_at' => 1681720966,
    'deleted_at' => 0,
  ),
  26 => 
  array (
    'id' => 79,
    'parent_id' => 73,
    'permission_name' => '其他',
    'route' => 'other',
    'icon' => 'cog',
    'module' => 'cms',
    'permission_mark' => 'setting_other',
    'component' => '/Cms/views/setting/other/index.vue',
    'redirect' => NULL,
    'keepalive' => 1,
    'type' => 2,
    'hidden' => 1,
    'sort' => 1,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681712766,
    'updated_at' => 1681720921,
    'deleted_at' => 0,
  ),
  27 => 
  array (
    'id' => 78,
    'parent_id' => 73,
    'permission_name' => '个人',
    'route' => 'personal',
    'icon' => 'user',
    'module' => 'cms',
    'permission_mark' => 'setting_personal',
    'component' => '/Cms/views/setting/personal/index.vue',
    'redirect' => NULL,
    'keepalive' => 1,
    'type' => 2,
    'hidden' => 1,
    'sort' => 1,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681712730,
    'updated_at' => 1681720943,
    'deleted_at' => 0,
  ),
  28 => 
  array (
    'id' => 75,
    'parent_id' => 74,
    'permission_name' => '列表',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'setting@index',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 1,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681712580,
    'updated_at' => 1681712580,
    'deleted_at' => 0,
  ),
  29 => 
  array (
    'id' => 80,
    'parent_id' => 77,
    'permission_name' => '列表',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'setting@index',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 1,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681713339,
    'updated_at' => 1681713339,
    'deleted_at' => 0,
  ),
  30 => 
  array (
    'id' => 82,
    'parent_id' => 78,
    'permission_name' => '列表',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'setting@index',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 1,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681713339,
    'updated_at' => 1681713339,
    'deleted_at' => 0,
  ),
  31 => 
  array (
    'id' => 84,
    'parent_id' => 79,
    'permission_name' => '列表',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'setting@index',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 1,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681713339,
    'updated_at' => 1681713339,
    'deleted_at' => 0,
  ),
  32 => 
  array (
    'id' => 76,
    'parent_id' => 74,
    'permission_name' => '新增',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'setting@store',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 2,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681712580,
    'updated_at' => 1681712580,
    'deleted_at' => 0,
  ),
  33 => 
  array (
    'id' => 81,
    'parent_id' => 77,
    'permission_name' => '新增',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'setting@store',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 1,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681713535,
    'updated_at' => 1681713535,
    'deleted_at' => 0,
  ),
  34 => 
  array (
    'id' => 83,
    'parent_id' => 78,
    'permission_name' => '新增',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'setting@store',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 1,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681713535,
    'updated_at' => 1681713535,
    'deleted_at' => 0,
  ),
  35 => 
  array (
    'id' => 85,
    'parent_id' => 79,
    'permission_name' => '新增',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'setting@store',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 1,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681713535,
    'updated_at' => 1681713535,
    'deleted_at' => 0,
  ),
  36 => 
  array (
    'id' => 66,
    'parent_id' => 46,
    'permission_name' => '标签',
    'route' => 'tag',
    'icon' => 'code-bracket',
    'module' => 'cms',
    'permission_mark' => 'tag',
    'component' => '/Cms/views/tag/index.vue',
    'redirect' => NULL,
    'keepalive' => 1,
    'type' => 2,
    'hidden' => 1,
    'sort' => 1,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681711813,
    'updated_at' => 1681711813,
    'deleted_at' => 0,
  ),
  37 => 
  array (
    'id' => 71,
    'parent_id' => 66,
    'permission_name' => '删除',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'tag@destroy',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 5,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681711819,
    'updated_at' => 1681711819,
    'deleted_at' => 0,
  ),
  38 => 
  array (
    'id' => 67,
    'parent_id' => 66,
    'permission_name' => '列表',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'tag@index',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 1,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681711819,
    'updated_at' => 1681711819,
    'deleted_at' => 0,
  ),
  39 => 
  array (
    'id' => 69,
    'parent_id' => 66,
    'permission_name' => '读取',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'tag@show',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 3,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681711819,
    'updated_at' => 1681711819,
    'deleted_at' => 0,
  ),
  40 => 
  array (
    'id' => 68,
    'parent_id' => 66,
    'permission_name' => '新增',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'tag@store',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 2,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681711819,
    'updated_at' => 1681711819,
    'deleted_at' => 0,
  ),
  41 => 
  array (
    'id' => 70,
    'parent_id' => 66,
    'permission_name' => '更新',
    'route' => '',
    'icon' => '',
    'module' => 'cms',
    'permission_mark' => 'tag@update',
    'component' => '',
    'redirect' => '',
    'keepalive' => 1,
    'type' => 3,
    'hidden' => 1,
    'sort' => 4,
    'active_menu' => '',
    'creator_id' => 1,
    'created_at' => 1681711819,
    'updated_at' => 1681711819,
    'deleted_at' => 0,
  ),
);
    }
};
