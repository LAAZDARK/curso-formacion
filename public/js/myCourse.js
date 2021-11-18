const MyCourse = {
    data() {
        return {
            form: {
                nombre: '',
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
                console.log(response.data.data)
                this.list = response.data.data

            }).catch(error => {
                this.error = error
            })
            this.dialog = false
        },
        deleteCourse: function(id) {
			axios.delete(this.$refs.getMyCourse.value + '/' + id)
            .then(response => { //eliminamos
				this.show()
			});
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
