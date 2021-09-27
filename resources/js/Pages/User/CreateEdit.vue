<template>
    <div>
        <section class="card">
            <header class="card-header">
                {{ form.id ? 'Update' : 'Add' }} User
            </header>
            <div class="card-body">
                <form method="POST" @submit.prevent="submit">
                    <text-input v-model="form.name" :error="form.errors.name" label="Name" placeholder="Name" />
                    <text-input v-model="form.email" :error="form.errors.email" label="Email Address" placeholder="Email" type="email" />
                    <text-input v-model="form.password" :error="form.errors.password" label="Password" placeholder="Password" type="password" />
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </section>
    </div>
</template>

<script>
import TextInput from "@/components/Form/TextInput";

export default {
    components: {
        TextInput,
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
                this.form.put(this.route('users.update', this.form.id), config);
            } else {
                this.form.post(this.route('users.index'), config);
            }
        }
    }
}
</script>

<style scoped>

</style>
