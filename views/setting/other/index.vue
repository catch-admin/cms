<template>
  <layout title="其他">
    <template v-slot:body>
      <el-form :model="formData" label-width="120px" ref="form" class="pr-4 w-full bg-white dark:bg-regal-dark pt-5">
        <div class="flex flex-col mx-auto w-2/3">
          <el-form-item label="分类类型" prop="site_category_types">
            <div class="flex flex-col gap-y-2 w-full">
              <div class="flex flex-row gap-x-2" v-for="(item, k) in formData.site_category_types">
                <div class="w-2/3 flex flex-row gap-x-2">
                  <el-input placeholder="类型名称" v-model="item.name" />
                  <el-input placeholder="模版名称" v-model="item.template" />
                </div>
                <div class="w-1/3">
                  <el-input-number placeholder="类型值" :min="1" style="width: 100px" v-model="item.value" controls-position="right" v-if="item.is_default" disabled />
                  <el-input-number placeholder="类型值" :min="1" style="width: 120px" v-model="item.value" controls-position="right" v-else />
                  <el-button type="danger" size="small" class="ml-2" v-if="!item.is_default" @click="deleteCateType(k)"><Icon name="trash" className="w-4 h-4" /></el-button>
                </div>
              </div>
            </div>
          </el-form-item>
          <div class="flex justify-center w-full">
            <el-button type="primary" class="ml-5 w-[5rem]" @click="addCateType"><Icon name="plus" className="w-4 h-4" />新增</el-button>
          </div>
          <el-divider />
        </div>
        <div class="bg-white dark:bg-regal-dark flex justify-center mb-3">
          <el-button type="primary" @click="submitForm(form)" class="ml-5 w-[10rem]">保 存</el-button>
        </div>
      </el-form>
    </template>
  </layout>
</template>

<script setup lang="ts">
import Layout from '../layout.vue'

import { useCreate } from '/admin/composables/curd/useCreate'
import http from '/admin/support/http'
const api = '/cms/setting'

const { formData, form, loading, submitForm } = useCreate(api)

http.get('cms/setting').then(r => {
  formData.value = r.data.data
})

const addCateType = () => {
  const latest = formData.value.site_category_types[formData.value.site_category_types.length - 1]
  formData.value.site_category_types.push({
    name: '',
    template: '',
    value: latest.value + 1,
    is_default: false,
  })
}
const deleteCateType = deleteK => {
  let newArr = []
  formData.value.site_category_types.forEach((item, k) => {
    if (deleteK !== k) {
      newArr.push(item)
    }
  })

  formData.value.site_category_types = newArr
}
</script>
