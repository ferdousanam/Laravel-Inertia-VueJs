<template>
    <div class="row">
        <div class="col-sm-12">
            <section class="card">
                <header class="card-header">
                    User List
                    <Link class="btn btn-primary pull-right" :href="'/users/create'"><i class="fa fa-plus-square-o"></i> Add User</Link>
                </header>
                <div class="card-body">
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
                                <Link :href="route('users.show', user.id)" class="btn btn-primary btn-sm">Show</Link>
                                <Link :href="route('users.edit', user.id)" class="btn btn-secondary btn-sm">Edit</Link>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" @click="deletable_id = user.id">Delete</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <footer class="card-footer">
                    <div class="px-5">
                        <pagination class="float-right" :links="users.links"/>
                    </div>
                </footer>
            </section>
        </div>
        <delete-modal @close="deletable_id = null" @confirm="deleteItem"></delete-modal>
    </div>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue';
import Pagination from '@/components/Pagination';
import DeleteModal from '@/components/Modals/DeleteModal';

export default {
    components: {
        Link,
        Pagination,
        DeleteModal,
    },
    props: ['users'],
    data() {
        return {
            deletable_id: null,
        }
    },
    methods: {
        deleteItem() {
            this.$inertia.form({id: this.deletable_id})
                .delete(this.route('users.destroy', this.deletable_id), {
                    preserveScroll: true,
                    onFinish: () => {
                        this.deletable_id = null;
                        $('#deleteModal').modal('hide');
                    },
                });
        }
    }
}
</script>

<style scoped>

</style>
