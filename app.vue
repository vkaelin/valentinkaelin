<template>
  <div>
    <NuxtPage />
  </div>
</template>

<script lang="ts" setup>
import './assets/tailwind.css';
import './assets/custom.css';

/*
// Back-to-top
const backToTop = document.querySelector(".back-to-top");
window.addEventListener("scroll", function () {
  const scrollBarPosition = window.pageYOffset;
  if (scrollBarPosition > 500) {
    changeElementStates(backToTop, "opacity-100", "opacity-0");
    changeElementStates(backToTop, "cursor-pointer", "cursor-default");
  } else {
    changeElementStates(backToTop, "opacity-0", "opacity-100");
    changeElementStates(backToTop, "cursor-default", "cursor-pointer");
  }
});

backToTop.addEventListener("click", function () {
  const scrollBarPosition = window.pageYOffset;
  if (scrollBarPosition > 500) {
    document.documentElement.scrollIntoView({
      behavior: "smooth",
      block: "start",
      inline: "nearest",
    });
  }
});

function changeElementStates(e, toAdd, toRemove) {
  if (toAdd !== "") e.classList.add(toAdd);
  if (toRemove !== "") e.classList.remove(toRemove);
}
*/
</script>
