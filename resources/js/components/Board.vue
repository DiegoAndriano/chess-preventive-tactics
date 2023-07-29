<script setup>
import {onMounted, ref, computed} from 'vue'
import {TheChessboard} from 'vue3-chessboard';
import 'vue3-chessboard/style.css';
import IconChevronLeft from './Icons/IconChevronLeft.vue'
import IconChevronRight from './Icons/IconChevronRight.vue'

const props = defineProps({tactic: Array})

let boardAPI;

const games = props.tactic

let index = ref(0)

let pgn = computed(() => games[index.value].pgn)
let option_one = computed(() => games[index.value].option_one)
let option_two = computed(() => games[index.value].option_two)
let option_three = computed(() => games[index.value].option_three)

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
    if (index.value < games.length - 1) {
        index.value++
        boardAPI?.loadPgn(pgn.value)
    }
}

function prev() {
    if (index.value > 0) {
        index.value--

        boardAPI?.loadPgn(pgn.value)
    }

}

</script>
<template>
    <div class="bg-stone-50">
        <TheChessboard class="pb-4" :board-config="boardConfig" @board-created="(api) => (boardAPI = api)"/>

        <div class="flex gap-x-16 px-4 py-6">
            <button
                class="w-auto h-auto border border-[1.5px] border-stone-300 px-4 py-2 rounded-lg font-semibold text-stone-700">
                {{ option_one }}
            </button>
            <button
                class="w-auto h-auto border border-[1.5px] border-stone-300 px-4 py-2 rounded-lg font-semibold text-stone-700">
                {{ option_two }}
            </button>
            <button
                v-if="option_three"
                class="w-auto h-auto border border-[1.5px] border-stone-300 px-4 py-2 rounded-lg font-semibold text-stone-700">
                {{ option_three }}
            </button>
        </div>

        <div class="flex justify-between items-center px-4 py-6">
            <button @click="prev" class=" w-auto h-auto flex items-center gap-4 px-2 py-2 rounded-lg text-stone-500">
                <span><IconChevronLeft class="w-6 h-6"> </IconChevronLeft></span>Previous game
            </button>
            <button @click="next" class=" w-auto h-auto flex items-center gap-4 px-2 py-2 rounded-lg  text-stone-500">
                Next game <span><IconChevronRight class="w-6 h-6"> </IconChevronRight></span>
            </button>
        </div>
    </div>
</template>
