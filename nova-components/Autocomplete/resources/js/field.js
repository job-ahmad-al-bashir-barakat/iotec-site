Nova.booting((Vue, router) => {
    Vue.component('index-autocomplete', require('./components/IndexField'));
    Vue.component('detail-autocomplete', require('./components/DetailField'));
    Vue.component('form-autocomplete', require('./components/FormField'));
})
