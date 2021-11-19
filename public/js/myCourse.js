const MyCourse = {
    data() {
        return {
            form: {
                nombre: '',
                idApplication: ''
            },
            send: '',
            list: [],
            message: "",
            error: "",
            searchCourse: ''
        };
    },
    mounted: function() {
        this.show()
    },
    methods: {
        async show () {
            await axios.get(this.$refs.getMyCourse.value)
            .then(response => {
                // console.log(response.data.data)
                this.list = response.data.data

            }).catch(error => {
                this.error = error
            })
        },
        deleteMyCourse: function(id) {
            this.form = {
                idApplication: id
            }
            // console.log(this.form)
			axios.post(this.$refs.deleteMyCourse.value, this.form)
            .then(response => { //eliminamos
				this.show()
			}).catch(error => {
                this.error = error
            })
		}
    },
    computed: {
        searchDataMyCourses: function() {
            var searchCourse = this.searchCourse;

            if (searchCourse) {
                return this.list.filter(function(product) {
                    return Object.keys(product).some(function(key) {
                        return String(product[key]).toLowerCase().indexOf(searchCourse) > -1
                    })
                })
            }
            return this.list;
        }
    }
}

Vue.createApp(MyCourse).mount("#mycourse")
