<template>
    <div>
        <section class="card">
            <header class="card-header">
                {{ form.id ? 'Update' : 'Add' }} User
            </header>
            <div class="card-body">
                <form method="POST" @submit.prevent="submit">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" :class="[errors.name && 'is-invalid']" id="name" name="name" placeholder="Email" v-model="form.name">
                        <input-error name="name"></input-error>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" :class="[errors.email && 'is-invalid']" id="email" name="email" placeholder="Email" v-model="form.email" autocomplete="off">
                        <input-error name="email"></input-error>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" :class="[errors.password && 'is-invalid']" id="password" placeholder="Password" v-model="form.password">
                        <input-error name="password"></input-error>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </section>
    </div>
</template>

<script>
import InputError from "@/Theme/InputError";

export default {
    components: {
        InputError
    },

    computed: {
        errors() {
            return this.$page.props.errors;
        },
    },

    data() {
        return {
            form: this.$inertia.form({
                name: '',
                email: '',
                password: '',
            }),
        }
    },

    mounted() {
        if (this.$page.props.user) {
            this.form = this.$inertia.form({...this.form.data(), ...this.$page.props.user});
        }
    },

    methods: {
        submit() {
            const config = {
                preserveScroll: true,
                onSuccess: response => {
                    console.log(response);
                    this.form.reset('password');
                },
                onError: error => {
                    console.log(error);
                    this.form.reset('password');
                },
                onFinish: () => this.form.reset('password'),
            };
            if (this.form.id) {
                this.form.put(this.route(`users/${this.form.id}`), config);
            } else {
                this.form.post(this.route('users'), config);
            }
        }
    }
}
</script>

<style scoped>

</style>
