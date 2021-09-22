<template>
<span v-if="errors[name]" class="invalid-feedback" role="alert">
    <strong>{{ errors[name] }}</strong>
</span>
</template>

<script>
export default {
    name: "InputError",
    props: ['name'],
    computed: {
        errors() {
            return this.$page.props.errors
        },
    },
}
</script>
