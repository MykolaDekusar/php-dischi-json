const { createApp } = Vue;

createApp({
  data() {
    return {
      mainServerData: "http://localhost/PHP/php-dischi-json/server.php",
      title: "Best Rock/Metal Albums Ever",
      data: {},
    };
  },
  methods: {
    getServerInfo() {
      axios.get(this.mainServerData).then((response) => {
        this.data = response.data;
        console.log(this.data);
      });
    },
  },
  created() {
    this.getServerInfo();
  },
}).mount("#app");
