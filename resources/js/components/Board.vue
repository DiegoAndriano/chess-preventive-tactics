<script setup>
import {onMounted, ref, computed} from 'vue'
import {TheChessboard} from 'vue3-chessboard';
import 'vue3-chessboard/style.css';

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
    if (index.value < games.length -1) {
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
        <TheChessboard :board-config="boardConfig" @board-created="(api) => (boardAPI = api)"/>
        <button @click="prev" class="rounded-xl px-4 py-2 border mx-2 bg-white" v-text="'<'"></button>
        <button @click="next" class="rounded-xl px-4 py-2 border mx-2 bg-white" v-text="'>'"></button>
        <button class="rounded-xl px-4 py-2 border mx-2 bg-white">{{ option_one }}</button>
        <button class="rounded-xl px-4 py-2 border mx-2 bg-white">{{ option_two }}</button>
        <button v-if="option_three" class="rounded-xl px-4 py-2 border mx-2 bg-white">{{ option_three }}</button>
    </div>
</template>
