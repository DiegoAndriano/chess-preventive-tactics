import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler';
import { createPinia } from 'pinia'

import Entrance from './components/Entrance.vue'
import Board from './components/Board.vue'
import StudyBoard from './components/StudyBoard.vue'
import DarkSwitchComponent from './components/DarkSwitchComponent.vue'
import FeedbackComponent from './components/FeedbackComponent.vue'

const app = createApp({})

app.component('entrance', Entrance)
app.component('board', Board)
app.component('study-board', StudyBoard)
app.component('dark-switch', DarkSwitchComponent)
app.component('feedback-component', FeedbackComponent)

const pinia = createPinia()
app.use(pinia)

app.mount("#app")

