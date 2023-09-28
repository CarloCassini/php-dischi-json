const { createApp } = Vue;

createApp({
  data() {
    return {
      message: "Hello Vudde!",
      discList: ["carlo", "angela", "giorgioulisse"],
    };
  },

  mounted() {
    // console.log(axios);
    axios
      .get("http://localhost/php-dischi-json/backend/server.php")
      .then((response) => {
        console.log(response);
        this.discList = response.data;
      });
  },
}).mount("#app");
