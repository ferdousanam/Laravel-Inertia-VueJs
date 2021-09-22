<template>
    <div>
        <section class="card">
            <header class="card-header">
                Add User
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
                        <input type="password" class="form-control" id="password" placeholder="Password" v-model="form.password">
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
                id: '',
                name: '',
                email: '',
                password: '',
            })
        }
    },

    methods: {
        submit() {
            let route = 'users';
            if (this.form.id) {
                route = `users/${this.form.id}`;
            }
            this.form.post(this.route(route), {
                preserveScroll: true,
                onSuccess: response => {
                    console.log(response);
                },
                onError: error => {
                    console.log(error);
                },
                onFinish: () => this.form.reset('password'),
            });
        }
    }
}
</script>

<style scoped>

</style>
