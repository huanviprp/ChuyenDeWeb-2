<template>
    <div class="container-fluid dashboard">
        <h3 class="text-center">Add User</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addUser">
                    <!-- <div class="form-group">
                        <label>id</label>
                        <input type="text" class="form-control" v-model="comic.Comic_id">
                    </div> -->
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="user.name" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control email" v-model="user.email" @blur="validateEmail"
                            required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" v-model="user.password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm User</button>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    name: "Add",
    data() {
        return {
            user: {}
        }
    },
    methods: {
        addUser() {
            axios
                .post('api/user/add', this.user)
                .then(response => (
                    this.$router.push({ name: 'alluser' })
                    // console.log(response.data)
                ))
                .catch(error => console.log(error))
                .finally(() => this.loading = false)
        },
        validateEmail() {
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.email)) {
                this.msg['email'] = 'Please enter a valid email address';
            } else {
                this.msg['email'] = '';
            }
        }
    }
}
</script>