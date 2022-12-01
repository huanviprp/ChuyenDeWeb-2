<template>
    <header>
        <Module1></Module1>
        <Module2></Module2>
    </header>
        <div class="container">
            <Module10></Module10>
            <Module11></Module11>
            <Module12></Module12>
            <Module9></Module9>
        </div>
        <footer>
            <Module5></Module5>
        </footer>
</template>
<script>
import Module1 from "../components/module1.vue"
import Module2 from "../components/module2.vue"
import Module10 from "../components/module10.vue"
import Module11 from "../components/module11.vue"
import Module12 from "../components/module12.vue"
import Module5 from "../components/module5.vue"
import Module9 from "../components/module9.vue"
export default {
    components: {
        Module1,
        Module2,
        Module5,
        Module10,
        Module11,
        Module12,
        Module9,
    }
}
</script>
<style>
    
</style>