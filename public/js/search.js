const Search = {
    data() {
        return {
            search: '',
            products: null,
            active: true
        };
    },
    mounted: function() {
        this.showProduct()
    },
    methods: {
        async showProduct () {
            await axios.get(this.$refs.getProduct.value)
            .then(response => {
                console.log(response.data)
                this.products = response.data.data
            }).catch(error => {
                console.log("Error Search")
                console.log(error)
            })
            this.dialog = false
        }
    },
    computed: {
        searchData: function() {
            var search = this.search;

            if (search) {
                this.active = false
                return this.products.filter(function(product) {
                    return Object.keys(product).some(function(key) {
                        return String(product[key]).toLowerCase().indexOf(search) > -1
                    })
                })
            }
            this.active = true
            return this.products;
        }
    }

}

Vue.createApp(Search).mount("#search")
