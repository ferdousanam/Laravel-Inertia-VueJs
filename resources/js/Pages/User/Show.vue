<template>
    <div>
        <h1>{{ user.name }}</h1>
    </div>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue'

export default {
    components: {
        Link,
    },
    props: ['user']
}
</script>

<style scoped>

</style>
