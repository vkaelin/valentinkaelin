<template>
  <div
    class=" dark:bg-neutral-800 dark:text-dark-primary flex flex-col items-center w-full px-4 py-4 my-2 bg-white rounded shadow"
  >
    <div class="flex items-center">
      <img
        :src="`/img/${project.image}`"
        :class="{
          'rounded-full': project.imageRounded,
          'mr-2': project.title.length,
        }"
        :alt="project.title"
        class="w-auto h-12"
      />
      <span class="text-2xl font-light whitespace-no-wrap">
        {{ project.title }}
      </span>
    </div>
    <div class="w-full my-3">
      <p
        class=" dark:bg-neutral-750 px-4 py-1 mb-2 -mx-4 text-sm text-justify bg-gray-100"
      >
        {{ project.description }}
      </p>
      <div class="text-sm leading-loose">
        <div class="">
          <template v-if="project.techsLabel">{{
            project.techsLabel
          }}</template>
          <template v-else>Technologies utilisées: </template>
          <template
            v-for="(tech, index) in project.techs"
            :key="tech + project.title"
          >
            <span
              class=" dark:text-gray-400 dark:border-dark-disabled pb-px text-gray-800 border-b border-dashed"
              >{{ tech }}</span
            >
            <template v-if="index != project.techs.length - 1">, </template>
          </template>
        </div>
        <div class="">
          Date :
          <span class="dark:text-gray-400 text-gray-800"
            >{{ project.from }}
            <template v-if="project.to"> - {{ project.to }}</template></span
          >
        </div>
      </div>
    </div>
    <div class="flex items-center justify-end w-full">
      <a
        v-if="project.codeLink"
        :href="project.codeLink"
        target="_blank"
        class=" sm:self-end hover:bg-indigo-500 hover:text-white dark:border-indigo-400 dark:bg-indigo-400 dark:text-white btn px-4 py-1 text-xs font-semibold text-indigo-500 no-underline border border-indigo-500 rounded-full"
      >
        Voir le code
      </a>
      <a
        v-if="project.websiteLink"
        :href="project.websiteLink"
        target="_blank"
        class=" sm:self-end hover:bg-indigo-500 hover:text-white dark:border-indigo-400 dark:bg-indigo-400 dark:text-white btn px-4 py-1 ml-2 text-xs font-semibold text-indigo-500 no-underline border border-indigo-500 rounded-full"
        >Voir le site</a
      >
    </div>
  </div>
</template>

<script setup lang="ts">
import { PropType } from 'vue';

export interface Project {
  title: string;
  description: string;
  image: string;
  imageRounded?: boolean;
  techs: Array<string>;
  techsLabel?: string;
  from: string;
  to?: string;
  codeLink?: string;
  websiteLink?: string;
}

const { project } = defineProps({
  project: Object as PropType<Project>,
});
</script>
