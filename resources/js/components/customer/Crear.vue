<template>
    <div class="row">
        <div class="col-12">
           <center><div class="card text-bg-light mb-3" style="max-width: 35rem; background-color: #67DECD;"  >
                <div class="card-header"><h4>NEW Customer</h4></div>
                <div class="card-body">
                    <form @submit.prevent="crear">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <br>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" v-model="customer.name" placeholder="Enter you Name" required>
                                </div>


                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" v-model="customer.address" placeholder="Enter you Address" required>
                                </div>


                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Phone_number</label>
                                    <input type="text" class="form-control" v-model="customer.phone_number" placeholder="Enter you Phone Number" required>
                                    <br>

                                </div>
                            </div>
                            <br>
                            <br>
                            <div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Guardar</button>    <router-link :to='{name:"mostrarCustomers"}' class="btn btn-warning">List</router-link>

                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
           </center>
        </div>
    </div>

</template>

<script>
export default {
    name:"crear-customer",
    data(){
        return {
            customer:{
                nombre:"",
                address:"",
                phone_number:""
            }
        }
    },
    methods:{
        async crear(){
            await this.axios.post('/api/customer',this.customer).then(response=>{
                this.$router.push({name:"mostrarCustomers"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>
