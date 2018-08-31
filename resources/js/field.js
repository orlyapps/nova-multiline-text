Nova.booting((Vue, router) => {
    Vue.component('index-nova-multiline-text', require('./components/IndexField'));
    Vue.component('detail-nova-multiline-text', require('./components/DetailField'));
})