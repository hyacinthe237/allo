
import globalMixins from './mixins/global'
import swal from './plugins/swal'
import toastr from './plugins/toastr'

require('./bootstrap')
require('./ui')

import Multiselect from 'vue-multiselect'

window.Vue = require('vue')
window.eventBus = new Vue()

Vue.use(swal)
Vue.use(toastr)
Vue.use(VueCharts)

Vue.component('multiselect', Multiselect)

const app = new Vue({
    el: '#app'
});
