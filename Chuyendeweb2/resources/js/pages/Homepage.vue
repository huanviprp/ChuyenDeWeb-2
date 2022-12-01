<template>
    <div>
        <header>
            <Module1></Module1>
            <Module2></Module2>
            adahh
        </header>
        <div class="container home">
            <Module3></Module3>
            <div class="row">
                <div class="col-md-9">
                    <Module4></Module4>
                </div>
                <div class="col-md-3">
                    <Module6></Module6>
                </div>
            </div>
        </div>
        <footer>
            <Module5></Module5>
        </footer>
    </div>
</template>
<script>
import Module1 from "../components/module1.vue"
import Module2 from "../components/module2.vue"
import Module3 from "../components/module3.vue"
import Module4 from "../components/module4.vue"
import Module5 from "../components/module5.vue"
import Module6 from "../components/module6.vue"
export default {

    components: {
        Module1,
        Module2,
        Module3,
        Module4,
        Module5,
        Module6,
    }
}
</script>
<style>

</style>