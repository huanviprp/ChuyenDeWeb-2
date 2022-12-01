<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-nav me-auto mb-2 mb-lg-0" v-if="isLoggedIn">
                <router-link to="/dashboard">Dashboard</router-link>
                <a class="nav-item nav-link" @click="logout">LogOut</a>
            </div>
            <div class="navbar-nav me-auto mb-2 mb-lg-0" v-else>
                <router-link to="/login">Login</router-link>
                <router-link to="/register">Register</router-link>
                <router-link to="/dashboard">Dashboard</router-link>
            </div>
        </div>
    </nav>
    <router-view></router-view>
</template>
<script>
export default {
    name: "App",
    data() {
        return {
            isLoggedIn: false,
        }
    },
    created() {
        if (window.Laravel.isLoggedin) {
            this.isLoggedIn = true
        }
    },
    methods: {
        logout(e) {
            e.preventDefault();

            this.$axios.post('/logout').then(response => {
                if (response.data.success) {
                    window.location.href = "/"
                } else {
                    console.log(response);
                }
            })
                .catch(function (error) {
                    console.log(error);
                });
        }
    },
}
</script>
<style>

</style>