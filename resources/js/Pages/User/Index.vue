<template>
    <div class="row">
        <div class="col-sm-12">
            <section class="card">
                <header class="card-header">
                    User List
                    <Link class="btn btn-primary pull-right" :href="'/users/create'"><i class="fa fa-plus-square-o"></i> Add User</Link>
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
                    <tr v-for="(user, index) in users.data">
                        <td class="align-middle">{{ index + 1 }}</td>
                        <td class="align-middle">{{ user.name }}</td>
                        <td class="align-middle">{{ user.email }}</td>
                        <td class="align-middle">
                            <Link :href="'/users/' + user.id" class="btn btn-primary btn-sm">Show</Link>
                            <Link :href="'/users/' + user.id + '/edit'" class="btn btn-primary btn-sm">Edit</Link>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <footer class="card-footer">
                    <div class="px-5">
                        <pagination class="float-right" :links="users.links" />
                    </div>
                </footer>
            </section>
        </div>
    </div>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue';
import Pagination from '@/components/Pagination';

export default {
    components: {
        Link,
        Pagination,
    },
    props: ['users'],
}
</script>

<style scoped>

</style>
