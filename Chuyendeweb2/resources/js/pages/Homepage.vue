<template>
    <div>
        <header>
            <module-1></module-1>
            <module-2></module-2>
        </header>
        <div class="container home">
            <module-3></module-3>
            <div class="row">
                <div class="col-md-9">
                    <module-4></module-4>
                </div>
                <div class="col-md-3">
                    <module-6></module-6>
                </div>
            </div>
        </div>
        <footer>
            <module-5></module-5>
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