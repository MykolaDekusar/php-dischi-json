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
        this.data = response.data;
      });
    },
    data(info) {
      return;
    },
    cardSearch(cardId) {
      axios.get(this.mainServerData).then((response) => {
        response.data.filter((info) => {
          if (cardId === info.id) {
            this.showHide();
            this.cardData = info;
          }
        });
      });
    },
  },

  created() {
    this.getServerInfo();
  },
}).mount("#app");
