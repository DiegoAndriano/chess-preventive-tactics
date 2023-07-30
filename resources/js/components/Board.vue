<script setup>
import {onMounted, ref, computed} from 'vue'
import {TheChessboard} from 'vue3-chessboard';
import 'vue3-chessboard/style.css';
import IconChevronLeft from './Icons/IconChevronLeft.vue'
import IconChevronRight from './Icons/IconChevronRight.vue'
import IconCheck from './Icons/IconCheck.vue'
import IconCross from './Icons/IconCross.vue'
import IconAndina from './Icons/IconAndina.vue'

const props = defineProps({tactic: Array})

let boardAPI;

const games = props.tactic

let index = ref(0)

let pgn = computed(() => games[index.value].pgn)
let option_one = computed(() => games[index.value].option_one)
let option_two = computed(() => games[index.value].option_two)
let option_three = computed(() => games[index.value].option_three)

const submitted = ref(false)
const success = ref(false)
const rated = ref(false)

onMounted(() => {
    boardAPI?.loadPgn(pgn.value)
    window.addEventListener('keydown', (event) => {
        previousMove(event)
        nextMove(event)
    })
});

function previousMove(event) {
    if (event.keyCode === 37) {
        boardAPI?.viewPrevious()
    }
}

function nextMove(event) {
    if (event.keyCode === 39) {
        boardAPI?.viewNext()
    }
}

const boardConfig = {
    "coordinates": true,
    "viewOnly": true,
}

function next() {
    submitted.value = false
    rated.value = false
    if (index.value < games.length - 1) {
        index.value++
        boardAPI?.loadPgn(pgn.value)
    }
}

function prev() {
    submitted.value = false
    rated.value = false
    if (index.value > 0) {
        index.value--

        boardAPI?.loadPgn(pgn.value)
    }
}

function checkAnswer(answer) {
    submitted.value = true
    axios.get(games[index.value].answer_path).then((response) => {
        if (answer === response.data) {
            success.value = true
        } else {
            success.value = false
        }
    })
}

function rateEasy(){
    if(!rated.value){
        rated.value = true
        axios.get(games[index.value].easy_path)
    }

}
function rateMedium(){
    if(!rated.value){
        rated.value = true
        axios.get(games[index.value].medium_path)
    }
}
function rateHard(){
    if(!rated.value){
        rated.value = true
        axios.get(games[index.value].hard_path)
    }
}

</script>
<template>
    <div class="bg-stone-50 dark:bg-stone-900">
        <TheChessboard class="pb-4" :board-config="boardConfig" @board-created="(api) => (boardAPI = api)"/>

        <div class="flex gap-x-16 px-4 py-6 md:px-10">
            <button
                :disabled="submitted"
                @click="checkAnswer(option_one)"
                class="h-auto w-24 bg-stone-300 hover:bg-stone-400 hover:shadow-sm focus:shadow-sm focus:bg-[#8C8783] focus:font-bold px-4 py-2 rounded-lg font-semibold text-stone-700 transform duration-100 ease-in-out dark:bg-stone-900 dark:border dark:text-stone-100 dark:border-stone-50 dark:hover:bg-[#2C2927] md:">
                {{ option_one }}
            </button>
            <button
                :disabled="submitted"
                @click="checkAnswer(option_two)"
                class="h-auto w-24 bg-stone-300  hover:bg-stone-400 hover:shadow-sm focus:shadow-sm focus:bg-[#8C8783] focus:font-bold px-4 py-2 rounded-lg font-semibold text-stone-700 transform duration-100 ease-in-out dark:bg-stone-900 dark:border dark:text-stone-100 dark:border-stone-50 dark:hover:bg-[#2C2927]">
                {{ option_two }}
            </button>
            <button v-if="option_three"
                    :disabled="submitted"
                    @click="checkAnswer(option_three)"
                    class="h-auto w-24 bg-stone-300  hover:bg-stone-400 hover:shadow-sm focus:shadow-sm focus:bg-[#8C8783] focus:font-bold px-4 py-2 rounded-lg font-semibold text-stone-700 transform duration-100 ease-in-out  dark:bg-stone-900 dark:border dark:text-stone-100 dark:border-stone-50 dark:hover:bg-[#2C2927]">
                {{ option_three }}
            </button>
        </div>

        <div class="flex justify-between items-center px-4 py-6 md:px-10">
            <button @click="prev"
                    class=" w-auto h-auto flex items-center gap-4 pl-1 pr-4 py-2 rounded-lg text-stone-500 hover:bg-stone-200 hover:shadow-sm  dark:text-stone-100 dark:hover:bg-[#2C2927]">
                <span>
                    <IconChevronLeft class="w-6 h-6"> </IconChevronLeft>
                </span>Previous game
            </button>
            <button @click="next"
                    class=" w-auto h-auto flex items-center gap-4 pl-4 pr-1 py-2 rounded-lg hover:bg-stone-200 hover:shadow-sm text-stone-500  dark:text-stone-100 dark:hover:bg-[#2C2927]">
                Next game <span>
                    <IconChevronRight class="w-6 h-6"> </IconChevronRight>
                </span>
            </button>
        </div>

        <div v-if="submitted">
            <div>
                <div
                    v-if="success"
                    class="w-auto h-auto m-6 px-6 py-4 gap-4 flex bg-emerald-50 border border-emerald-700 rounded-lg dark:bg-stone-800 dark:text-stone-50 md:m-10">
                    <IconCheck class="w-6 h-6"></IconCheck>
                    <p>Congrats!</p>
                </div>
                <div
                    v-if="!success"
                    class="w-auto h-auto m-6 px-6 py-4 gap-4 flex bg-rose-50 border border-rose-700 rounded-lg md:m-10">
                    <IconCross class="w-6 h-6"></IconCross>
                    <p>Keep working!</p>
                </div>
                <p class="px-6 pb-4 md:px-10 break-all">
                    {{ games[index].description }}
                </p>
            </div>

            <div class="w-auto h-auto flex m-6 items-baseline justify-evenly">
                <div @click="rateEasy" class="cursor-pointer w-auto h-auto px-2 py-2 gap-4 flex flex-col items-center rounded-lg md:m-10">
                    <IconAndina class="w-8 h-8"></IconAndina>
                    <p>Easy</p>
                </div>
                <div @click="rateMedium" class="cursor-pointer w-auto h-auto  px-2 py-2 gap-4 flex flex-col items-center rounded-lg md:m-10">
                    <IconAndina class="w-12 h-12"></IconAndina>
                    <p>Medium</p>
                </div>
                <div @click="rateHard" class="cursor-pointer w-auto h-auto  px-2 py-2 gap-4 flex flex-col rounded-lg items-center md:m-10">
                    <IconAndina class="w-16 h-16"></IconAndina>
                    <p>Hard</p>
                </div>
            </div>
            <p v-if="rated" class="m-6 text-green-600 font-semibold text-sm">Thank you for rating!</p>

        </div>

    </div>
</template>
