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
                        <img alt="" :src="thumbnail" width="29" height="29">
                        <span class="username">{{ $page.props.auth.user.name }}</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout dropdown-menu-right">
                        <div class="log-arrow-up"></div>
                        <li><a href="javascript:void(0);" @click.prevent.stop="logout"><i class="fa fa-key"></i> Log Out</a></li>
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
            avatarUser: {},
        }
    },
    computed: {
        thumbnail: function () {
            return this.avatarUser.picture?.thumbnail;
        }
    },
    mounted() {
        axios.get('https://randomuser.me/api/?gender=male')
            .then((response) => {
                this.avatarUser = response.data.results[0];
            })
            .catch((error) => {
                console.log(error.message);
            });
    },
    methods: {
        logout() {
            this.$inertia.post(this.route('logout'));
        },
    }
}
</script>
