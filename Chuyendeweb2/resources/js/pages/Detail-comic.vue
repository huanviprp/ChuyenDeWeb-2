<template>
    <header>
        <Module1></Module1>
        <Module2></Module2>
    </header>
    <div class="container detail">
        <div class="row">
            <div class="col-9">
                <Module7></Module7>
                <Module8></Module8>
                <Module9></Module9>
            </div>

            <div class="col-3 module6">
                <!-- module6 -->
                <Module6></Module6>
            </div>
        </div>
    </div>
    <footer>
        <Module5></Module5>
    </footer>
</template>
<script>
import Module1 from "../components/module1.vue"
import Module2 from "../components/module2.vue"
import Module5 from "../components/module5.vue"
import Module6 from "../components/module6.vue"
import Module7 from "../components/module7.vue"
import Module8 from "../components/module8.vue"
import Module9 from "../components/module9.vue"
export default {
    components: {
        Module1,
        Module2,
        Module5,
        Module6,
        Module7,
        Module8,
        Module9,
    }
}
</script>
<style>

</style>