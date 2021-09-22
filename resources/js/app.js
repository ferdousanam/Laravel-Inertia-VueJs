import Vue from 'vue'
import {createInertiaApp} from '@inertiajs/inertia-vue'
import {InertiaProgress} from '@inertiajs/progress'
import Layout from './components/Layouts/Layout'

InertiaProgress.init()

createInertiaApp({
    resolve: name => {
        const page = require(`./Pages/${name}`).default;
        page.layout = Layout;
        return page;
    },
    setup({el, App, props}) {
        Vue.mixin({
            data() {
                return {
                    template_url: 'http://thevectorlab.net/flatlab-4',
                }
            },
            methods: {
                route(route) {
                    return '/' + route;
                },
            },
        });
        new Vue({
            render: h => h(App, props),
        }).$mount(el);
    },
}).then(() => {
    console.log("Inertia App Created!");
});
