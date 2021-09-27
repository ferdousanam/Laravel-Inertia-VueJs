<template>
    <div class="form-group">
        <label v-if="label" :for="id">{{ label }}:</label>
        <input :id="id" ref="input" v-bind="$attrs" class="form-control" :class="{ 'is-invalid': error }" :type="type" :value="value" @input="$emit('input', $event.target.value)"/>
        <span v-if="error" class="invalid-feedback" role="alert"><strong>{{ error }}</strong></span>
    </div>
</template>

<script>
export default {
    inheritAttrs: false,
    props: {
        id: {
            type: String,
            default() {
                return `text-input-${this._uid}`
            },
        },
        type: {
            type: String,
            default: 'text',
        },
        value: String,
        label: String,
        error: String,
    },
    methods: {
        focus() {
            this.$refs.input.focus()
        },
        select() {
            this.$refs.input.select()
        },
        setSelectionRange(start, end) {
            this.$refs.input.setSelectionRange(start, end)
        },
    },
}
</script>
