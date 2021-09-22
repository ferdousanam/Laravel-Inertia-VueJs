<template>
    <section id="container">
        <template v-if="$page.props.auth.user">
            <header-component></header-component>

            <sidebar></sidebar>

            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <success></success>
                    <error></error>
                    <slot></slot>
                </section>
            </section>
            <!--main content end-->

            <!--footer start-->
            <footer class="site-footer">
                <div class="text-center">
                    2021 &copy; Developed by Ferdous Anam.
                    <a href="#" class="go-top">
                        <i class="fa fa-angle-up"></i>
                    </a>
                </div>
            </footer>
            <!--footer end-->
        </template>
        <template v-else>
            <slot></slot>
        </template>
    </section>
</template>

<script>
import Header from "./Header";
import Sidebar from "./Sidebar";
import Success from "@/components/Alerts/Success";
import Error from "@/components/Alerts/Error";

export default {
    name: "Layout",
    components: {
        headerComponent: Header,
        Sidebar,
        Success,
        Error,
    },
    data() {
        return {
        }
    }
}
</script>
