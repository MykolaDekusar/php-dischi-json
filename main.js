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
        console.log(response);
        this.data = response.data;
      });
    },
  },
  created() {
    this.getServerInfo();
    console.log(this.data);
  },
}).mount("#app");
