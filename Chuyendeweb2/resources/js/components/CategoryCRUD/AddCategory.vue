<template>
    <div class="container-fluid dashboard">
        <h3 class="text-center">Add Category</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addCategory">
                    <!-- <div class="form-group">
                        <label>id</label>
                        <input type="text" class="form-control" v-model="comic.id">
                    </div> -->
                    <div class="form-group">
                        <label>Thể loại</label>
                        <input type="text" class="form-control" v-model="category.Category">
                    </div>          
                    <button type="submit" class="btn btn-primary">Add Category</button>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    name: "AddCategory",
    data() {
        return {
            category: {}
        }
    },
    methods: {
        addCategory() {
            axios
                .post('api/category/add', this.category)
                .then(response => (
                    this.$router.push({ name: 'allcategory' })
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