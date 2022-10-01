import './bootstrap'
import '../css/app.css'

import { createApp, h, } from 'vue'
import { createInertiaApp, Head, Link } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers'
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m'
import moment from 'moment'

// FontAwesome Livrary
import { library } from '@fortawesome/fontawesome-svg-core'
import { faEnvelope, faMapPin, faPhone, faPowerOff } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faFacebookSquare, faGithubSquare, faInstagram } from '@fortawesome/free-brands-svg-icons'
import { faPenToSquare, faTrashCan } from '@fortawesome/free-regular-svg-icons'
library.add(faEnvelope, faMapPin, faPhone, faGithubSquare, faFacebookSquare, faInstagram, faPenToSquare, faTrashCan, faPowerOff)

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .component('inertia-link', Link)
            .component('inertia-head', Head)
            .component('font-awesome-icon', FontAwesomeIcon)
            .mixin({
                methods: {
                    formatDate(date, format) {
                        return moment(date).format(format);
                    },
                }
            })
            .mount(el);
    },
});

InertiaProgress.init({ color: '#F5A11A' });
