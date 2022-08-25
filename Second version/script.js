var app = new Vue({
    el: '#app',
    data: {
      discs : [],
      genres : [
        "Rock",
        "Pop",
        "Jazz",
        "Metal",
      ],
      genreSelected: "All"
    },

    methods: {
        getDiscs(){
            console.log(this.genreSelected)
            axios.get(`http://localhost/php-ajax-dischi/database/controller.php?genre=${this.genreSelected}`)
            .then(result => {
                this.discs = result.data.result;
            }) 
        }
    },

    created: function(){
        this.getDiscs();
    }
  })