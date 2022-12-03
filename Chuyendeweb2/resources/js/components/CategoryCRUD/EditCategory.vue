<template>
    <div class="container-fluid dashboard">
        <h3 class="text-center">Edit Category</h3>
        <div class="row">
            <div class="col-md-12">
                <form @submit.prevent="updateCategory">
                    <!-- <div class="form-group">
                        <label>id</label>
                        <input type="text" class="form-control" v-model="comic.id">
                    </div> -->
                    <div class="form-group">
                        <label>Thể loại</label>
                        <input type="text" class="form-control" v-model="category.Category">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Category</button>
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
            category: {}
        }
    },
    created() {
        axios
            .get(`http://127.0.0.1:8000/api/category/edit/${this.$route.params.id}`)
            .then((response) => {
                this.category = response.data;
                // console.log(response.data);
                // console.log(this.$route.params.id);
            });
    },
    methods: {
        updateCategory() {
            axios
                .post(`http://127.0.0.1:8000/api/category/update/${this.$route.params.id}`, this.category)
                .then((response) => {
                    // console.log(response)
                    this.$router.push({ name: 'allcategory' });
                });
        }
    }
}
</script>
<style>
</style>