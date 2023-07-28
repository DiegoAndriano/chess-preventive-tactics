import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler';
import { createPinia } from 'pinia'

import Entrance from './components/Entrance.vue'
import Board from './components/Board.vue'

const app = createApp({})

app.component('entrance', Entrance)
app.component('board', Board)

const pinia = createPinia()
app.use(pinia)

app.mount("#app")

