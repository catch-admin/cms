import { RouteRecordRaw } from 'vue-router'

// @ts-ignore
// @ts-ignore
const router: RouteRecordRaw[] = [
  {
    path: '/cms',
    component: () => import('/admin/layout/index.vue'),
    meta: { title: '内容管理', icon: 'squares-plus' },
    children: [
      {
        path: 'articles',
        name: 'articles',
        meta: { title: '文章', icon: 'rectangle-stack' },
        children: [
          {
            path: 'category',
            name: 'category',
            meta: { title: '分类目录', icon: 'cube-transparent' },
            component: () => import('./category/index.vue'),
          },
          {
            path: 'post',
            name: 'post',
            meta: { title: '所有文章', icon: 'document-chart-bar' },
            component: () => import('./post/index.vue'),
          },
          {
            path: 'tag',
            name: 'tag',
            meta: { title: '标签', icon: 'tag' },
            component: () => import('./tag/index.vue'),
          },
          {
            path: '/create/:id?',
            name: 'create-post',
            meta: { title: '创建文章', icon: 'wrench', hidden: true, active_menu: '/cms/post' },
            component: () => import('./post/create.vue'),
          },
        ],
      },
      {
        path: 'setting',
        name: 'cms-setting',
        meta: { title: '设置', icon: 'wrench-screwdriver' },
        children: [
          {
            path: 'general',
            name: 'setting-general',
            meta: { title: '常规', icon: 'cog-6-tooth' },
            component: () => import('./setting/general/index.vue'),
          },
          {
            path: 'content',
            name: 'setting-content',
            meta: { title: '内容', icon: 'cog-6-tooth' },
            component: () => import('./setting/content/index.vue'),
          },
        ],
      },
    ],
  },
]

export default router
