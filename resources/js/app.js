import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler';
import { createPinia } from 'pinia'

import Entrance from './components/Entrance.vue'

const app = createApp({})

app.component('entrance', Entrance)

const pinia = createPinia()
app.use(pinia)

app.mount("#app")

