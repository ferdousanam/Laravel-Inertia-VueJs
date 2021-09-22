<template>
    <div class="row">
        <div class="col-sm-12">
            <section class="card">
                <header class="card-header">
                    User Details
                </header>
                <div class="card-body">
                    <div class="box-body table-responsive">
                        <table class="table table-bordered">
                            <caption class="hidden"><h3>User Details</h3></caption>
                            <thead>
                            <tr class="hidden">
                                <th style="width:230px;"></th>
                                <th style="width:10px;"></th>
                                <td></td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th style="width:230px;">Full Name</th>
                                <th style="width:10px;">:</th>
                                <td>{{ user.name }}</td>
                            </tr>
                            <tr>
                                <th>Email Address</th>
                                <th>:</th>
                                <td>{{ user.email }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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
    props: ['user']
}
</script>

<style scoped>
.hidden {
    display: none;
}
</style>
