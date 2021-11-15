const Course = {
    data() {
        return {
            form: {
                nombre: '',
            },
            send: '',
            list: [],
            message: "",
            error: "",
        };
    },
    mounted: function() {
        this.show()
    },
    methods: {
        async show () {
            await axios.get(this.$refs.getCourse.value)
            .then(response => {
                this.list = response.data.data

            }).catch(error => {
                console.log("Error Courses")
                console.log(error)
            })
            this.dialog = false
        },
        async addCourse () {
            this.form = {
                id: '',
                nombre: '',
                descripcion: '',
                duracion: '',
                costo: '',
                course_id: ''
            }
            $('#add').modal('show');
        },
        async editCourse (row) {
            console.log(row)
            this.form = {
                id: row.id,
                nombre: row.nombre,
                descripcion: row.descripcion,
                duracion: row.duracion,
                costo: row.costo,
                course_id: row.course_id
            }
            $('#edit').modal('show');
            console.log(this.form)
        },
        updateCourse:  function() {
            console.log('Holaff')
            console.log(this.form)
            axios.put(this.$refs.getCourse.value + '/' +this.form.id, this.form)
            .then(response => {
                // console.log(response.data)
                this.list = response.data.data
                $('#edit').modal('hide');

                this.message = response.data

            }).catch(error => {
                console.log("Error edit Course")
                console.log(error)
            })
        },
        async storeCourse () {
            console.log(this.form)
            await axios.post(this.$refs.storeCourse.value, this.form)
            .then(response => {
                console.log(response.data)
                this.list = response.data.data
                $('#add').modal('hide');
                this.message = response.data

            }).catch(error => {
                console.log(error)
                this.error = error
            })
        },
        deleteCourse: function(id) {
            // console.log(id);
			axios.delete(this.$refs.getCourse.value + '/' + id)
            .then(response => { //eliminamos
				this.show()
			});
		},
    }
}

Vue.createApp(Course).mount("#course")
