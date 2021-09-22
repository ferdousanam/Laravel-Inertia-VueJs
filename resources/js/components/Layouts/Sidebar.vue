<template>
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <Link href="/" :class="{ 'active': $page.url === '/' }">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </Link>
                </li>
                <li>
                    <Link href="/users" :class="{ 'active': $page.component === 'User/Index' }">
                        <i class="fa fa-users"></i>
                        <span>Users</span>
                    </Link>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
</template>

<script>
import {Link} from '@inertiajs/inertia-vue'

export default {
    name: "Sidebar",
    components: {
        Link,
    },
    data() {
        return {
        }
    }
}
</script>
