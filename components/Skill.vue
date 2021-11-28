<template>
  <a
    :href="link"
    :class="id"
    class="skill flex items-center justify-center p-4 mb-1 mr-1 rounded-full"
    target="_blank"
  >
    <span class="sr-only">{{ name }}</span>
    <svg :viewBox="viewBox" class="dark:text-indigo-400 w-10 h-10 text-indigo-500 fill-current">
      <slot />
    </svg>
  </a>
</template>

<script setup lang="ts">

const { id, name, link } = defineProps({
  id: String,
  name: String,
  link: String,
  viewBox: {
    type: String,
    default: '0 0 128 128'
  }
});
</script>
