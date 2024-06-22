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
    cardSearch(cardId) {
      axios.get(this.mainServerData).then((response) => {
        for (let i = 0; i < response.data.length; i++) {
          if (response.data[i].id === cardId) {
            this.showHide();
            console.log(response.data[i]);
            this.cardData = response.data[i];
            console.log(this.cardData);
          }
        }
      });
    },
  },

  created() {
    this.getServerInfo();
  },
}).mount("#app");
