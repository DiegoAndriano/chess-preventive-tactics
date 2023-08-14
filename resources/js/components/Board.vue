<script setup>
import { onMounted, ref, computed } from 'vue'
import { TheChessboard } from 'vue3-chessboard';
import 'vue3-chessboard/style.css';
import IconChevronLeft from './Icons/IconChevronLeft.vue'
import IconChevronRight from './Icons/IconChevronRight.vue'
import IconCheck from './Icons/IconCheck.vue'
import IconCross from './Icons/IconCross.vue'
import IconAndina from './Icons/IconAndina.vue'

const props = defineProps({ tactic: Array })

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
    axios.get(games[index.value].answer_path).then((response) => {
        boardAPI.move(response.data)
        if (answer === response.data) {
            axios.get(games[index.value].beaten_path)
            success.value = true
            submitted.value = true
        } else {
            axios.get(games[index.value].won_path)
            success.value = false
            submitted.value = true
        }
    })
}

function rateEasy() {
    if (!rated.value) {
        rated.value = true
        axios.get(games[index.value].easy_path)
    }

}
function rateMedium() {
    if (!rated.value) {
        rated.value = true
        axios.get(games[index.value].medium_path)
    }
}
function rateHard() {
    if (!rated.value) {
        rated.value = true
        axios.get(games[index.value].hard_path)
    }
}

</script>
<template>
    <div class="bg-stone-50 dark:bg-stone-900">
        <div class="flex flex-col xl:flex-row xl:gap-10 xl:px-24">
            <div>
                <TheChessboard class="w-[250px] md:w-[400px] pb-4" :board-config="boardConfig" @board-created="(api) => (boardAPI = api)" />
            </div>

            <div class="flex flex-col w-full px-6 md:px-10 lg:px-24 xl:px-0 gap-y-6 md:gap-y-10 py-6  md:py-10 xl:pt-0">
                <div class="flex gap-x-4 xl:gap-x-16 py-6 xl:px-0 lg:pt-16 lg:pb-16 xl:pt-0">
                    <button :disabled="submitted" @click="checkAnswer(option_one)"
                        class="h-auto w-24 bg-stone-300 hover:bg-stone-400 hover:shadow-sm focus:shadow-sm focus:bg-[#8C8783] focus:font-bold px-4 py-2 rounded-lg font-semibold text-stone-700 transform duration-100 ease-in-out dark:bg-stone-900 dark:border dark:text-stone-100 dark:border-stone-50 dark:hover:bg-[#2C2927] lg:h-16 lg:w-24 lg:text-2xl">
                        {{ option_one }}
                    </button>
                    <button :disabled="submitted" @click="checkAnswer(option_two)"
                        class="h-auto w-24 bg-stone-300  hover:bg-stone-400 hover:shadow-sm focus:shadow-sm focus:bg-[#8C8783] focus:font-bold px-4 py-2 rounded-lg font-semibold text-stone-700 transform duration-100 ease-in-out dark:bg-stone-900 dark:border dark:text-stone-100 dark:border-stone-50 dark:hover:bg-[#2C2927] h-16 lg:w-24 lg:text-2xl">
                        {{ option_two }}
                    </button>
                    <button v-if="option_three" :disabled="submitted" @click="checkAnswer(option_three)"
                        class="h-auto w-24 bg-stone-300  hover:bg-stone-400 hover:shadow-sm focus:shadow-sm focus:bg-[#8C8783] focus:font-bold px-4 py-2 rounded-lg font-semibold text-stone-700 transform duration-100 ease-in-out  dark:bg-stone-900 dark:border dark:text-stone-100 dark:border-stone-50 dark:hover:bg-[#2C2927] lg:h-16 lg:w-24 lg:text-2xl">
                        {{ option_three }}
                    </button>
                </div>
                <div v-if="submitted && success"
                    class="w-auto h-auto px-4 py-4 gap-4 flex bg-emerald-50 text-stone-900 border border-emerald-700 rounded-lg dark:bg-emerald-950 dark:text-stone-50 lg:text-2xl lg:items-center md:w-[400px]">
                    <IconCheck class="w-6 h-6 lg:w-10 lg:h-10 text-emerald-700 dark:text-emerald-400"></IconCheck>
                    <p class="dark:text-stone-50">Congrats!</p>
                </div>
                <div v-if="submitted && !success"
                    class="w-full h-auto px-4 py-4 gap-4 flex bg-rose-50 border border-rose-700 dark:bg-rose-950 rounded-lg lg:text-2xl lg:items-center md:w-[400px]">
                    <IconCross class="w-6 h-6 lg:w-10 lg:h-10 text-rose-700 dark:text-rose-400"></IconCross>
                    <p class="dark:text-stone-50">Keep working!</p>
                </div>
                <p v-if="submitted" class="dark:text-stone-100 pb-4 break-all lg:text-xl lg:w-[400px]">
                    {{ games[index].description }}
                </p>

            </div>

        </div>

        <div v-if="submitted" class="w-auto h-auto flex flex-col py-6 md:py-10 items-baseline lg:px-24 px-6">
            <h3 class="text-stone-900 font-semibold md:text-lg lg:text-xl py-4 dark:text-stone-100">How hard did you find this puzzle?</h3>
            <div class="w-full flex justify-between items-baseline">
                <div @click="rateEasy"
                    class="group cursor-pointer w-auto h-auto px-2 py-2 gap-4 flex flex-col items-center rounded-lg md:m-10 lg:text-xl">
                    <IconAndina
                        class="transform duration-200 ease-in-out group-hover:text-stone-600 group-hover:dark:text-stone-500 dark:text-stone-100 w-8 h-8 md:w-16 md:h-16">
                    </IconAndina>
                    <p class="dark:text-stone-100">Easy</p>
                </div>
                <div @click="rateMedium"
                    class="group cursor-pointer w-auto h-auto  px-2 py-2 gap-4 flex flex-col items-center rounded-lg md:m-10 lg:text-xl">
                    <IconAndina
                        class="transform duration-200 ease-in-out group-hover:text-stone-600 group-hover:dark:text-stone-500 dark:text-stone-100 w-12 h-12 md:w-24 md:h-24 ">
                    </IconAndina>
                    <p class="dark:text-stone-100">Medium</p>
                </div>
                <div @click="rateHard"
                    class="group cursor-pointer w-auto h-auto  px-2 py-2 gap-4 flex flex-col rounded-lg items-center md:m-10 lg:text-xl">
                    <IconAndina
                        class="transform duration-200 ease-in-out group-hover:text-stone-600 group-hover:dark:text-stone-500 dark:text-stone-100 w-16 h-16 md:w-28 md:h-28 ">
                    </IconAndina>
                    <p class="dark:text-stone-100">Hard</p>
                </div>
            </div>
        </div>

        <p v-if="rated" class="m-6 text-green-600 font-semibold text-sm lg:text-xl lg:px-20">Thank you for rating!</p>

        <div class="flex justify-between items-center px-4 py-6 md:px-10 lg:pb-6 lg:px-20">
            <button @click="prev"
                class=" w-auto h-auto flex items-center gap-4 pl-1 pr-4 py-2 rounded-lg text-stone-500 hover:bg-stone-200 hover:shadow-sm  dark:text-stone-100 dark:hover:bg-[#2C2927] lg:h-auto lg:w-auto lg:pl-4 lg:pr-8 lg:py-4 lg:text-2xl">
                <span>
                    <IconChevronLeft class="w-6 h-6"> </IconChevronLeft>
                </span>Previous game
            </button>
            <button @click="next"
                class=" w-auto h-auto flex items-center gap-4 pl-4 pr-1 py-2 rounded-lg hover:bg-stone-200 hover:shadow-sm text-stone-500  dark:text-stone-100 dark:hover:bg-[#2C2927] lg:h-auto lg:w-auto lg:pr-4 lg:pl-8 lg:py-4 lg:text-2xl">
                Next game <span>
                    <IconChevronRight class="w-6 h-6"> </IconChevronRight>
                </span>
            </button>
        </div>

    </div>
</template>
