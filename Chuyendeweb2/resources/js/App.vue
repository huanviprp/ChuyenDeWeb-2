<template>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/dashboard" class="nav-item nav-link">Home</router-link>
                    <router-link to="/alluser" class="nav-item nav-link">User</router-link>
                    <router-link to="/allcomic" class="nav-item nav-link">Comic</router-link>
                    <router-link to="/allchapter" class="nav-item nav-link">Chapter</router-link>
                    <router-link to="/allcategory" class="nav-item nav-link">Thể loại</router-link>
                    <router-link to="/allauthor" class="nav-item nav-link">Tác giả</router-link>
                    <router-link to="/allcomment" class="nav-item nav-link">Comment</router-link>
                </div>
            </div>
        </nav>
        <br/>
        <router-view></router-view>
    </div>
</template>
<script>
    export default {
        name:"App"
    }
</script>
<style>
</style>