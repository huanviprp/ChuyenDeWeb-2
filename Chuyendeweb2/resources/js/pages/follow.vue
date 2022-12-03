<template>
    <div>
        <header>
            <Module1></Module1>
            <Module2></Module2>
        </header>
        <div class="container home">

            <div class="row">
                <div class="col-md-9">
                    <Module16></Module16>
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

import Module5 from "../components/module5.vue"
import Module16 from "../components/module16.vue"
export default {

    components: {
        Module1,
        Module2,
        Module5,
        Module16,
    }
}
</script>
<style>

</style>