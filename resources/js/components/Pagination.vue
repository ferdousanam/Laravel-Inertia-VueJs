<template>
    <div>
        <nav v-if="links.length > 3">
            <ul class="pagination">
                <template v-for="link in links">
                    <li v-if="link.url === null" aria-current="page" class="page-item disabled">
                        <span class="page-link" v-html="link.label"></span>
                    </li>
                    <li v-else class="page-item" :class="{'active': link.active}">
                        <Link :href="link.url" class="page-link" v-html="link.label"></Link>
                    </li>
                </template>
            </ul>
        </nav>
    </div>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue';

export default {
    name: "Pagination",
    components: {
        Link,
    },
    props: {
        links: Array,
    },
}
</script>
