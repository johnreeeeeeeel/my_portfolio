<template>
  <Header />

  <main>
    <router-view />
  </main>

  <!-- <Footer /> -->
</template>

<script setup>
import Header from "./components/Header.vue";
import Footer from "./components/Footer.vue";
</script>

<style>
::-webkit-scrollbar {
  width: 0;
  height: 0;
}

::-webkit-scrollbar-thumb {
  background-color: rgba(255, 255, 255, 0.3);
  border-radius: 0;
}

::-webkit-scrollbar-track {
  background: transparent;
}

* {
  font-family: "Jersey 15", sans-serif;
  margin: 0;
  padding: 0;
}

html, body {
  background-color: #242424;
  color: #f2f2f2;
}

a, p, span, strong, h1, h2, h3, h4, h5, h6 {
  margin: 0;
}

main {
  padding: 24px;
  margin-top: 60px;
}
</style>
