const Edition = {
    data() {
        return {
            form: {
                fecha_inicio: '',
            },
            send: '',
            list: [],
            message: "",
            error: "",
            listUsers: [],
            listCourses: [],
            searchEdition: ''
        };
    },
    mounted: function() {
        this.showEdition()
        this.listTrainedUser()
        this.listCourse()
    },
    methods: {
        async listTrainedUser () {
            await axios.get(this.$refs.getListUser.value)
            .then(response => {
                this.listUsers = response.data.data
                console.log(this.listUsers)

            }).catch(error => {
                console.log("Error Editions")
                console.log(error)
            })
            this.dialog = false
        },
        async listCourse () {
            await axios.get(this.$refs.getListCourse.value)
            .then(response => {
                this.listCourses = response.data.data
                console.log(this.listCourses)

            }).catch(error => {
                console.log("Error Editions")
                console.log(error)
            })
            this.dialog = false
        },
        async showEdition () {
            await axios.get(this.$refs.getEdition.value)
            .then(response => {
                this.list = response.data.data
                console.log(this.list)

            }).catch(error => {
                console.log("Error Editions")
                console.log(error)
            })
            this.dialog = false
        },
        async addEdition () {
            this.form = {
                id: '',
                fecha_inicio: '',
                fecha_fin: '',
                horario: '',
                direccion: '',
                course_id: '',
                teacher_id: ''
            }
            $('#addEditionModal').modal('show');
        },
        async editEdition (row) {
            console.log(row)
            this.form = {
                id: row.id,
                fecha_inicio: row.fecha_inicio,
                fecha_fin: row.fecha_fin,
                horario: row.horario,
                direccion: row.direccion,
                course_id: row.course_id,
                teacher_id: row.teacher_id
            }
            $('#editEditionModal').modal('show');
            console.log(this.form)
        },
        updateEdition:  function() {
            console.log('Holaff')
            console.log(this.form)
            axios.put(this.$refs.getEdition.value + '/' +this.form.id, this.form)
            .then(response => {
                // console.log(response.data)
                // this.list = response.data.data
                this.showEdition()
                $('#editEditionModal').modal('hide');

                this.message = response.data

            }).catch(error => {
                console.log("Error edit Edition")
                console.log(error)
            })
        },
        async storeEdition () {
            console.log(this.form)
            await axios.post(this.$refs.storeEdition.value, this.form)
            .then(response => {
                // console.log(response.data)
                // this.list = response.data.data
                this.showEdition()
                $('#addEditionModal').modal('hide');
                this.message = response.data

            }).catch(error => {
                console.log(error)
                this.error = error
            })
        },
        deleteEdition: function(id) {
            // console.log(id);
			axios.delete(this.$refs.getEdition.value + '/' + id)
            .then(response => { //eliminamos
				this.showEdition()
			});
		}
    },
    computed: {
        searchDataEditions: function() {
            var searchEdition = this.searchEdition;

            if (searchEdition) {
                return this.list.filter(function(edition) {
                    return Object.keys(edition).some(function(key) {
                        return String(edition[key]).toLowerCase().indexOf(searchEdition) > -1
                    })
                })
            }
            return this.list;
        }
    }
}

Vue.createApp(Edition).mount("#edition")
