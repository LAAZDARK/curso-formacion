const Course = {
    data() {
        return {
            form: {
                nombre: '',
            },
            send: ''
        };
    },
    methods: {
        async store () {
            console.log(this.form)
            await axios.post(this.$refs.storeCourse.value, this.form)
            .then(response => {
                console.log(response.data)
                this.send = response.data
                console.log(this.send);
                // this.form.name = '',
                // this.form.email = '',
                // this.form.telephone = '',
                // this.form.subject = '',
                // this.form.message = ''
            }).catch(error => {
                console.log("Error Contact")
                console.log(error)
            })
            this.dialog = false
        }
    }
}

Vue.createApp(Course).mount("#course")
