import './bootstrap';
import '../css/app.css';
import { createApp, h } from 'vue';
import { createInertiaApp, Head, Link } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { autoAnimatePlugin } from '@formkit/auto-animate/vue';
import { ZiggyVue } from 'ziggy-js';
import Icon from './Components/Icon.vue';


createInertiaApp({
  resolve: name => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
  setup({ el, App, props, plugin }) {

    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(ZiggyVue)
      .use(autoAnimatePlugin)
      .component('Head', Head)
      .component('Link', Link)
      .component('Icon', Icon)
      .mount(el)
  },
});