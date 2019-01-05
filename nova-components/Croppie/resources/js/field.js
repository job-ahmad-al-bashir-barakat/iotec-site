Nova.booting((Vue, router) => {
    Vue.component('index-croppie', require('./components/IndexField'));
    Vue.component('detail-croppie', require('./components/DetailField'));
    Vue.component('form-croppie', require('./components/FormField'));
})
