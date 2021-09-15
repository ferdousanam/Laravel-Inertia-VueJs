<template>
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <i class="fa fa-bars"></i>
        </div>
        <!--logo start-->
        <Link href="/" class="logo" :class="{ 'active': $page.url === '/' }">Dash<span>board</span></Link>
        <!--logo end-->
        <div class="top-nav ">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" :src="template_url + '/img/avatar1_small.jpg'">
                        <span class="username">Ferdous Anam</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout dropdown-menu-right">
                        <div class="log-arrow-up"></div>
                        <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
</template>

<script>
import {Link} from "@inertiajs/inertia-vue";

export default {
    name: "Header",
    components: {
        Link,
    },
    data() {
        return {
            template_url: 'http://thevectorlab.net/flatlab-4',
        }
    }
}
</script>

<style scoped>

</style>
