<template>
    <div v-if="error" class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Whoops!</strong> {{ error }}
    </div>
</template>

<script>
export default {
    name: "Error",
    computed: {
        error() {
            return this.$page.props.flash.error;
        },
    }
}
</script>
