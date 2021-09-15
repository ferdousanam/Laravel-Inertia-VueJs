<template>
    <div class="row">
        <div class="col-sm-12">
            <section class="card">
                <header class="card-header">
                    User List
                </header>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Full Name</th>
                        <th>Email Address</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(user, index) in users">
                        <td>{{ index + 1 }}</td>
                        <td>{{ user.name }}</td>
                        <td>{{ user.email }}</td>
                        <td><Link :href="'/users/' + user.id" class="btn btn-primary">Show</Link></td>
                    </tr>
                    </tbody>
                </table>
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
    props: ['users'],
}
</script>

<style scoped>

</style>
