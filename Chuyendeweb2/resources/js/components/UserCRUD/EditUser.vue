<template>
    <div class="container-fluid dashboard">
        <h3 class="text-center">Edit User</h3>
        <div class="row">
            <div class="col-md-12">
                <form @submit.prevent="updateUser">
                    <!-- <div class="form-group">
                        <label>id</label>
                        <input type="text" class="form-control" v-model="comic.id">
                    </div> -->
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" class="form-control" v-model="user.name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" v-model="user.email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" v-model="user.password">
                    </div>
                    <!-- <div class="form-group">
                        <label>Phân quyền</label>
                        <input type="text" class="form-control" v-model="user.role_id">
                    </div> -->
                    <button type="submit" class="btn btn-primary">Update User</button>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    name: "Edit",
    data() {
        return {
            user: {}
        }
    },
    created() {
        axios
            .get(`http://127.0.0.1:8000/api/user/edit/${this.$route.params.id}`)
            .then((response) => {
                this.user = response.data;
                console.log(response.data);
                // console.log(this.$route.params.id);
            });
    },
    methods: {
        updateUser() {
            axios
                .post(`http://127.0.0.1:8000/api/user/update/${this.$route.params.id}`, this.user)
                .then((response) => {
                    this.$router.push({ name: 'alluser' });
                });
        }
    }
}
</script>