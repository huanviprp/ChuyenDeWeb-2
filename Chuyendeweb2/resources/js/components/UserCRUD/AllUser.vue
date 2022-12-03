<template>
    <div class="container-fluid dashboard">
        <h3 class="text-center">All User</h3><br />
        <button class="btn btn-success"><a style="text-decoration: none; color: white; margin-bottom: 20px;" href="/adduser">Thêm mới User</a></button>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>UserName</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phân Quyền</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in Users" :key="user.id">
                    <td>{{ user.id }}</td>
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.password }}</td>
                    <td>{{ user.role_id }}</td>
                    <div class="btn" role="">
                        <router-link :to="{ name: 'edituser', params: { id: user.id } }" class="btn btn-primary">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deleteUser(user.id)">Delete</button>
                        <label class="label label-success check-value" v-if="check">Xóa thành công truyện
                            {{ user.userName }}</label><br />
                    </div>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    name: "All",
    data() {
        return {
            Users: [],
            check: false
        }
    },
    created() {
        axios
            .get('api/users/')
            .then(response => {
                this.Users = response.data;
            });
    },
    methods: {
        deleteUser(id) {
            axios
                .delete(`http://127.0.0.1:8000/api/user/delete/${id}`)
                .then(response => {
                    let i = this.Users.map(item => item.id).indexOf(id); // find index of your object
                    // this.users.splice(i, 1)
                    this.check = true;
                    window.location.href = "/alluser";
                });
        }
    }
}
</script>
<style>
body {
    background-image: url('https://cdn.wallpapersafari.com/17/62/Mw5A6y.jpg');
    padding: 0;
    margin: 0;
    font-size: 16px;
    font-family: sans-serif;
}

.descr {
    display: -webkit-box;
    height: calc(39px*1.3*3.4);
    width: 200px;
    font-size: 16px;
    line-height: 1.4;
    -webkit-line-clamp: 7;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    border-bottom: none;
    margin-right: 0;
}

td:nth-child(6),
th:nth-child(6) {
    width: 250px;
}

.dashboard img {
    object-fit: cover;
    width: 100%;

}
</style>