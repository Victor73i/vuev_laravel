<template>
    <div class="row">
        <div class="col-12">
            <center><div class="card text-bg-light mb-3" style="max-width: 35rem; background-color: #FFBF00;">
                <div class="card-header"><h4>Edit Customer</h4></div>
                <div class="card-body">
                    <form @submit.prevent="actualizar">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <br>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" v-model="customer.name" placeholder="Enter you Name" required>
                                </div>
                                <br>

                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" v-model="customer.address" placeholder="Enter you Address" required>
                                </div>
                                <br>

                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Phone_number</label>
                                    <input type="text" class="form-control" v-model="customer.phone_number" placeholder="Enter you Phone Number" required>
                                    <br>

                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </center></div>
    </div>
</template>

<script>
export default {
    name:"editar-customer",
    data(){
        return {
            customer:{
                name:"",
                address:"",
                phone_number:""
            }
        }
    },
    mounted(){
        this.mostrarCustomer()
    },
    methods:{
        async mostrarCustomer(){
            await this.axios.get(`/api/customer/${this.$route.params.id}`).then(response=>{
                const { name, address, phone_number } = response.data
                this.customer.name = name
                this.customer.address = address
                this.customer.phone_number = phone_number
            }).catch(error=>{
                console.log(error)
            })
        },
        async actualizar(){
            await this.axios.put(`/api/customer/${this.$route.params.id}`,this.customer).then(response=>{
                this.$router.push({name:"mostrarCustomers"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>
