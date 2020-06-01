<template>
    <layout-main></layout-main>
</template>

<script>
    import LayoutMain from "./layout/LayoutMain.vue";
    export default {
        components: {LayoutMain},
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
