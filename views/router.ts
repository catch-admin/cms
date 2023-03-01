import { RouteRecordRaw } from 'vue-router'

// @ts-ignore
const router: RouteRecordRaw[] = [
  {
    path: '/cms',
    component: () => import('/admin/layout/index.vue'),
    meta: { title: '内容管理', icon: 'user' },
    children: [
      {
        path: 'category',
        name: 'category',
        meta: { title: '分类管理', icon: 'home' },
        component: () => import('./category/index.vue'),
      },
      {
        path: 'post',
        name: 'post',
        meta: { title: '文章管理', icon: 'home' },
        component: () => import('./post/index.vue'),
      },
      {
        path: 'post/create/:id?',
        name: 'create-post',
        meta: { title: '创建文章', icon: 'home', hidden: true, active_menu: '/cms/post' },
        component: () => import('./post/create.vue'),
      },
    ],
  },
]

export default router
