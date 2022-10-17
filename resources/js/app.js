import './bootstrap';
import { createApp } from 'vue';
import router from './routes/router.js';

const app = createApp({});

import AppComponent from './view/layouts/app.vue';
app.component('app-component', AppComponent);

app.use(router);

app.mount('#app');
