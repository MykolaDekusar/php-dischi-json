const { createApp } = Vue;

createApp({
  data() {
    return {
      mainServerData: "http://localhost/PHP/php-dischi-json/server.php",
      title: "Best Rock/Metal Albums Ever",
      data: {},
      cardData: {},
      hide: true,
    };
  },
  methods: {
    showHide() {
      this.hide = !this.hide;
    },
    getServerInfo() {
      axios.get(this.mainServerData).then((response) => {
        console.log(response.data);
        this.data = response.data;
      });
    },
    cardSearch(cardId) {
      axios
        .get(this.mainServerData, {
          params: {
            action: "read",
            id: cardId,
          },
        })
        .then((response) => {
          this.showHide();
          console.log(response.data);
          this.cardData = response.data;
        });
    },
  },
  created() {
    this.getServerInfo();
  },
}).mount("#app");
