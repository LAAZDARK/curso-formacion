const Employer = {
    data() {
        return {
            form: {
                name: '',
            },
            list: [],
            message: "",
            error: "",
        };
    },
    mounted: function() {
        this.showEmployer()
    },
    methods: {
        async showEmployer () {
            await axios.get(this.$refs.getEmployer.value)
            .then(response => {
                this.list = response.data.data

            }).catch(error => {
                console.log("Error Employers")
                console.log(error)
            })
            this.dialog = false
        },
        async addEmployer () {
            this.form = {
                id: '',
                name: '',
                email: '',
                phone: '',
                gender: '',
                birthday: '',
                nationality: '',
                address: '',
                salary: '',
                nif: '',
                status: '',
                signature: '',
            }
            $('#addEmployerModal').modal('show');
        },
        async editEmployer (row) {
            console.log(row)
            this.form = {
                id: row.id,
                name: row.name,
                email: row.email,
                phone: row.phone,
                gender: row.gender,
                birthday: row.birthday,
                nationality: row.nationality,
                address: row.address,
                salary: row.salary,
                nif: row.nif,
                status: row.status,
                signature: row.signature

            }
            $('#editEmployerModal').modal('show');
            console.log(this.form)
        },
        updateEmployer:  function() {
            console.log(this.form)
            axios.put(this.$refs.getEmployer.value + '/' +this.form.id, this.form)
            .then(response => {
                // console.log(response.data)
                this.list = response.data.data
                $('#editEmployerModal').modal('hide');

                this.message = response.data

            }).catch(error => {
                console.log("Error edit Employer")
                console.log(error)
            })
        },
        async storeEmployer () {
            console.log(this.form)
            await axios.post(this.$refs.storeEmployer.value, this.form)
            .then(response => {
                console.log(response.data)
                this.list = response.data.data
                $('#addEmployerModal').modal('hide');
                this.message = response.data

            }).catch(error => {
                console.log(error)
                this.error = error
            })
        },
        deleteEmployer: function(id) {
            // console.log(id);
			axios.delete(this.$refs.getEmployer.value + '/' + id).then(response => { //eliminamos
				this.showEmployer()
			});
		},
    }
}

Vue.createApp(Employer).mount("#employer")
