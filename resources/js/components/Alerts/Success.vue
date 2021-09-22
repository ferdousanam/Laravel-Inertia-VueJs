<template>
    <div v-if="success" class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> {{ success }}
    </div>
</template>

<script>
export default {
    name: "Success",
    computed: {
        success() {
            return this.$page.props.flash.success;
        },
    },
}
</script>
