const {createApp} = Vue;

createApp({
  data(){
    return{
      apiUrl: 'server.php',
      dischi: []
    }
  },
  methods:{
    getApi(){
      axios.get(this.apiUrl)
      .then(result => {
        this.dischi = result.data;
      })
    }
  },
  mounted(){
    this.getApi();
  }
}).mount('#app');