<template>

    <div class="row">
        <br>
        <br>
        <br>
        <br>
        <div class="col-12 mb-2">
            <router-link :to='{name:"crearCustomer"}' class="btn btn-outline-secondary"><i class="fa fa-book  fa-2x">NEW CUSTOMER</i></router-link>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="col-12"  >
            <div class="table-responsive"  >
                <table class="table table-bordered border-dark" style="background-color: #F3F0E7; ">
                    <thead class="bg-dark text-white" STYLE="background-color: #67DECD;">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>ADDRESS</th>
                        <th>PHONE_NUMBER</th>
                        <th>CREATED_AT</th>
                        <th>UPDATED_AT</th>

                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="customer in customers" :key="customer.id">
                        <td>{{ customer.id }}</td>
                        <td>{{ customer.name }}</td>
                        <td>{{ customer.address }}</td>
                        <td>{{ customer.phone_number }}
                        <td>{{ customer.created_at }}</td>
                        <td>{{ customer.updated_at }}</td>


                        <td>
                            <router-link :to='{name:"editarCustomer",params:{id:customer.id}}' class="btn btn-outline-warning"><i class="fa fa-cog fa-spin fa-2x fa-fw"></i></router-link>
                            <a type="button" @click="borrarCustomer(customer.id)" class="btn btn-outline-danger"><i class="fas fa-trash fa-2x"></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"customers",
    data(){
        return {
            customers:[]
        }
    },
    mounted(){
        this.mostrarCustomers()
    },
    methods:{
        async mostrarCustomers(){
            await this.axios.get('/api/customer').then(response=>{
                this.customers = response.data
            }).catch(error=>{
                console.log(error)
                this.customers = []
            })
        },
        borrarCustomer(id){
            if(confirm("¿Confirma eliminar el registro?")){
                this.axios.delete(`/api/customer/${id}`).then(response=>{
                    this.mostrarCustomers()
                }).catch(error=>{
                    console.log(error)
                })
            }
        }
    }
}
</script>
