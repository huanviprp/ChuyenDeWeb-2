<template>
    <h3>
        <p style="color:#de6e98;padding-top:0.5cm"><b>Truyện New Update <i class="fa fa-angle-right"
                    aria-hidden="true"></i></b></p>
    </h3>
    <div class="row comic-new" v-if="Comics && Comics.length">
        <div class="col-md-3 comic" v-for="(Comic, index) in Comics" :key="index">
            <a v-bind:href="'/detail/' + Comic.Comic_id"><img class="img-comic" v-bind:src="Comic.Img_feature"></a>
            <div class=" infor-comic">
                <ul>
                    <li><i class="fa fa-eye" aria-hidden="true"></i>{{ Comic.View }}</li>

                    <li v-if="(Comic.feature == 1)"><i class="fa fa-fire" style="color:red" aria-hidden="true"></i> Hot
                    </li>
                </ul>
            </div>
            <div class="new-chapter">
                <a class="name-comic" v-bind:href="'/detail/' + Comic.Comic_id"><b>{{ Comic.Name }}</b></a>
                <ul>

                    <li v-for=" (  Chapter, j) in Chapters" :key="j">
                        <a v-if="(Chapter.Comic_id == Comic.Comic_id)"
                            v-bind:href="'/detail/ten-truyen-chapter/' + Chapter.Chapter_id">{{
        Chapter.Chapter_name
                            }}</a>
                    </li>
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
            Comics: [],
            Chapters: [],
            id: this.$route.params.id,

        }
    },
    created() {
        axios.get('api/').then(
            res => {
                this.Comics = res.data;
                axios.get('http://127.0.0.1:8000/api/getchapterlimit').then(
                    res => {
                        this.Chapters = res.data;
                        console.log(this.Chapters);

                    }
                )
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