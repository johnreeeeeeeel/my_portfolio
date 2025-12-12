import { createApp } from "vue";
import App from "./MainApp.vue";
import router from "./router";

// Correct Iconify import
import { Icon } from "@iconify/vue";

const app = createApp(App);

// Register globally
app.component("Icon", Icon);

app.use(router).mount("#app");
