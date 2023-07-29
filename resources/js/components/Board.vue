<script setup>
import {onMounted, ref} from 'vue'
import {TheChessboard} from 'vue3-chessboard';
import 'vue3-chessboard/style.css';

const props = defineProps({tactic: Array})

let boardAPI;

const games = props.tactic


onMounted(() => {
    boardAPI?.loadPgn(games[1].pgn)
    window.addEventListener('keydown', (event) => {
        previousMove(event)
        nextMove(event)
    })
});

function previousMove(event) {
    if (event.keyCode == 37) {
        boardAPI?.viewPrevious()
    }
}

function nextMove(event) {
    if (event.keyCode == 39) {
        boardAPI?.viewNext()
    }
}

</script>
<template>
    <div class="bg-gray-100">
        <TheChessboard coordinates="true" @board-created="(api) => (boardAPI = api)"/>
        <!--<button class="rounded-xl px-4 py-2 border mx-2 bg-white">{{ games[1].option_one }}</button>
        <button class="rounded-xl px-4 py-2 border mx-2 bg-white">{{ games[1].option_two }}</button>
        <button class="rounded-xl px-4 py-2 border mx-2 bg-white">{{ games[1].option_three }}</button>-->
    </div>
</template>
