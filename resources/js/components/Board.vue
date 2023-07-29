<script setup>
import {onMounted, ref} from 'vue'
import {TheChessboard} from 'vue3-chessboard';
import 'vue3-chessboard/style.css';

const props = defineProps({bestMoves: String, tactic: Array})

let boardAPI;

const pgn = props.tactic.game.pgn

const moveToFind = pgn.split(' ')[pgn.split(' ').length -1 ]
let bestMove = ref(props.bestMoves.split(' ')[1])
let position

onMounted(() => {
    let previous = pgn.split(' ').slice(0, -1).join(' ')
    boardAPI?.loadPgn(previous)

    position = boardAPI?.getBoardPosition()
    let toReplace = bestMove.value[0] + bestMove.value[1]
    let letterToNumDict = {
     'a': '0',
     'b': '1',
     'c': '2',
     'd': '3',
     'e': '4',
     'f': '5',
     'g': '6',
     'h': '7',
    }
    let numToPosDict = {
        '0': '8',
        '1': '7',
        '2': '6',
        '3': '5',
        '4': '4',
        '5': '3',
        '6': '2',
        '7': '1',
    }
    let replaceFor = ''
    let exactPosition = position[numToPosDict[toReplace[1]]][letterToNumDict[toReplace[0]]]
    if(exactPosition['type'] !== 'p'){
        replaceFor = exactPosition['type'].toUpperCase()
    }
    if(exactPosition['type'] == 'p'){
        replaceFor = '';
    }
    bestMove.value = bestMove.value.replace(toReplace, replaceFor)
});
</script>
<template>
    <div class="bg-gray-100">
        <TheChessboard @board-created="(api) => (boardAPI = api)"/>
        <button class="rounded-xl px-4 py-2 border mx-2 bg-white">{{ moveToFind }}</button>
        <button class="rounded-xl px-4 py-2 border mx-2 bg-white">{{ bestMove }}</button>
    </div>
</template>
