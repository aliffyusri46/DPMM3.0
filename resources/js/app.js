import './bootstrap';
import '../css/app.css';
import 'bootstrap-icons/font/bootstrap-icons.css';
import 'animate.css';
import 'aos/dist/aos.css';
import AOS from 'aos';


import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';


// Initialize AOS globally
AOS.init({
    duration: 800, // Animation duration in ms
    offset: 100,   // Trigger offset
    easing: 'ease-in-out',
    once: true, 
});

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
