<template>
  <div
    class="bg-gray-50 dark:bg-neutral-750 dark:border-transparent dark:shadow-md flex flex-col px-4 py-2 mt-2 mb-4 border border-gray-200 rounded-lg"
  >
    <div class="flex items-center mb-2">
      <div class="mr-2 text-base">{{ study.name }}</div>
      <div class="dark:text-gray-300 mr-1 text-sm leading-tight text-gray-500">
        {{ study.from }}
        <template v-if="study.to">- {{ study.to }}</template>
      </div>
      <img
        :src="`/img/${study.image}`"
        :class="study.imageClasses"
        class="w-12 mt-2 ml-auto"
        :alt="study.name"
      />
    </div>
    <p
      class="dark:border-neutral-700 w-4/5 pt-2 mb-2 text-sm border-t border-gray-100"
    >{{ study.description }}</p>
    <a
      :href="study.link"
      target="_blank"
      class="hover:bg-indigo-500 hover:text-white dark:border-indigo-400 dark:bg-indigo-400 dark:text-white btn self-end px-4 py-1 mb-1 -mt-4 text-xs font-semibold text-indigo-500 no-underline border border-indigo-500 rounded-full"
    >Site</a>
  </div>
</template>

<script setup lang="ts">
import { PropType } from 'vue';

export interface Study {
  name: string;
  from: string;
  to?: string;
  image: string,
  imageClasses?: string,
  description: string;
  link: string;
}

const { study } = defineProps({
  study: Object as PropType<Study>,
});
</script>
