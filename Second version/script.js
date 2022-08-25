var app = new Vue({
    el: '#app',
    data: {
      discs : [],
    },

    methods: {
        getDiscs(){
            axios.get('http://localhost/php-ajax-dischi/database/controller.php')
            .then(result => {
                this.discs = result.data.result;
                console.log(this.discs);
            }) 
        }
    },

    created: function(){
        this.getDiscs();
    }
  })