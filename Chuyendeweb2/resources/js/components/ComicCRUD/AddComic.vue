<template>
    <div class="container-fluid dashboard">
        <h3 class="text-center">Add Comic</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addComic">
                    <!-- <div class="form-group">
                        <label>id</label>
                        <input type="text" class="form-control" v-model="comic.id">
                    </div> -->
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="comic.Name">
                    </div>
                    <div class="form-group">
                        <label>Descripsion</label>
                        <input type="text" class="form-control" v-model="comic.Descripsion">
                    </div>
                    <div class="form-group">
                        <label>Image Feature</label>
                        <input type="text" class="form-control" v-model="comic.Img_feature">
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="text" class="form-control" v-model="comic.date">
                    </div>
                    <div class="form-group">
                        <label>View</label>
                        <input type="text" class="form-control" v-model="comic.View">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <input type="text" class="form-control" v-model="comic.Status">
                    </div>
                    <div class="form-group">
                        <label>Author_id</label>
                        <input type="text" class="form-control" v-model="comic.author_id">
                    </div>
                    <div class="form-group">
                        <label>Nổi Bật *</label>
                        <input type="text" class="form-control" v-model="comic.feature">
                    </div>
                    <div class="form-group">
                        <label>Category_id</label>
                        <input type="text" class="form-control" v-model="comic.Category_id">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Comic</button>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    name: "AddComic",
    data() {
        return {
            comic: {}
        }
    },
    methods: {
        addComic() {
            axios
                .post('api/comic/add', this.comic)
                .then(response => (
                    this.$router.push({ name: 'allcomic' })
                    // console.log(response.data)
                ))
                .catch(error => console.log(error))
                .finally(() => this.loading = false)
        }
    }
}
</script>
<style>
.dashboard {
    background-color: rgb(247, 247, 247);
    padding-right: 130px;
    padding-left: 130px;
    padding-top: 50px;
    padding-bottom: 50px;
    height: 600px;
    overflow-x: auto;
}
</style>