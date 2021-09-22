<template>
    <div class="container">
        <form class="form-signin" method="POST" @submit.prevent="submit">
            <h2 class="form-signin-heading">sign in now</h2>
            <div class="login-wrap">
                <input type="email" name="email" v-model="form.email" class="form-control" :class="[errors.email && 'is-invalid']" placeholder="E-Mail Address" autocomplete="email" autofocus>
                <input-error name="email"></input-error>
                <input type="password" name="password" v-model="form.password" class="form-control" :class="[errors.password && 'is-invalid']" placeholder="Password">
                <input-error name="password"></input-error>
                <label class="checkbox">
                    <input type="checkbox" name="remember" id="remember" value="remember-me" v-model:checked="form.remember"> Remember me
                    <span v-if="false" class="pull-right" >
                        <a data-toggle="modal" href="#myModal"> Forgot Password?</a>
                    </span>
                </label>
                <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
                <div v-if="false" class="registration">
                    Don't have an account yet?
                    <a class="" href="registration.html">
                        Create an account
                    </a>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
import InputError from "@/Theme/InputError";

export default {
    name: "Login",

    components: {
        InputError
    },

    props: {
        canResetPassword: Boolean,
        status: String
    },

    computed: {
        errors() {
            return this.$page.props.errors
        },
    },

    data() {
        return {
            form: this.$inertia.form({
                email: '',
                password: '',
                remember: false
            })
        }
    },

    mounted() {
        $('body').removeClass('light-sidebar-nav').addClass('login-body');
    },

    beforeDestroy() {
        $('body').removeClass('login-body').addClass('light-sidebar-nav');
    },

    methods: {
        submit() {
            this.form
                .transform(data => ({
                    ... data,
                    remember: this.form.remember ? 'on' : ''
                }))
                .post(this.route('login'), {
                    onFinish: () => this.form.reset('password'),
                })
        }
    }
}
</script>

<style scoped>

</style>
