<template>
    <h3>
        <p style="color:#de6e98;padding-top:0.5cm"><b>Truyện New Update <i class="fa fa-angle-right"
                    aria-hidden="true"></i></b></p>
    </h3>
    <div class="row comic-new" v-if="Comics && Comics.length">
        <div class="col-md-3 comic" v-for="Comic of Comics" :key="Comic.Comic_id">
            <a v-bind:href="'/detail/' + Comic.Comic_id"><img class="img-comic" v-bind:src="Comic.Img_feature"></a>
            <div class=" infor-comic">
                <ul>
                    <li><i class="fa fa-eye" aria-hidden="true"></i>{{ Comic.View }}</li>
                    <li><i class="fa fa-comment" aria-hidden="true"></i> 123</li>
                    <li><i class="fa fa-heart" aria-hidden="true"></i> 123</li>
                </ul>
            </div>
            <div class="new-chapter">
                <a class="name-comic" v-bind:href="'/detail/' + Comic.Comic_id"><b>{{ Comic.Name }}</b></a>
                <ul>
                    <li><a href="">Chapter 3</a></li>
                    <li><a href="">Chapter 2</a></li>
                    <li><a href="">Chapter 1</a></li>
                </ul>
            </div>
        </div>
    </div>
</template>
  
<script>
import axios from 'axios';
export default {
    data() {
        return {
            Comics: []
        }
    },
    created() {
        axios.get('api/').then(
            res => {
                this.Comics = res.data;
            }
        )
    },
}
</script>
  
<style>
.container.home {
    background: #dedede;
}

.comic {
    color: black
}

.comic-new .comic a {
    text-decoration: none;
    color: black;
}
</style>