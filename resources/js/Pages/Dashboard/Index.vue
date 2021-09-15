<template>
    <div class="row state-overview">
        <div class="col-lg-3 col-sm-6" v-for="colors in ['terques', 'red', 'yellow', 'blue']">
            <section class="card">
                <div class="symbol" :class="colors">
                    <i class="fa fa-user"></i>
                </div>
                <div class="value">
                    <Link href="/users">
                        <h1 class="count">{{ counts.users_count }}</h1>
                        <p>All Users</p>
                    </Link>
                </div>
            </section>
        </div>
    </div>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue'

export default {
    components: {
        Link,
    },
    props: ['counts'],
}
</script>

<style scoped>

</style>
