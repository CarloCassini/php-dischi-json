const { createApp } = Vue;

createApp({
  data() {
    return {
      message: "Hello Vudde!",
      discList: ["carlo", "angela", "giorgioulisse"],
    };
  },
}).mount("#app");
