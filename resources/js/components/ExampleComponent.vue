<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                    <ul>
                        <li v-for="(admins,index) in admin" v-bind:key="admins.id">{{admins.username}} - {{index}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        created:function() {
            this.getadmin();
            this.getpaper();
        },
        data() {
            return {
                admin:[],
                papers:[],
            }
        },
        methods:{
            getadmin:function(){
                axios.get('/api/admin')
                    .then(response => {
                        // console.log(response);
                        this.admin = response.data 
                    })
                .catch(function (error) {
                    console.log(error);
                });
            },
            getpaper:function(){
                axios.get('/api/paper')
                    .then(response => {
                        // console.log(response);
                        this.papers = response.data 
                    })
                .catch(function (error) {
                    console.log(error);
                });
            },
        },
        // computed: {
        //     getadmin(){
        //         axios.get('/api/admin')
        //             .then(response => {
        //                 // console.log(response);
        //                 this.admin = response.data 
        //             })
        //         .catch(function (error) {
        //             console.log(error);
        //         });
        //     },
        //     getpaper(){
        //         axios.get('/api/paper')
        //             .then(response => {
        //                 // console.log(response);
        //                 this.papers = response.data 
        //             })
        //         .catch(function (error) {
        //             console.log(error);
        //         });
        //     },
            
        // },
    }
</script>
