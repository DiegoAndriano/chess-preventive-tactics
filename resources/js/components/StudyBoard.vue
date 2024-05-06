<script setup>
import {onMounted, ref, computed} from 'vue'
import {TheChessboard} from 'vue3-chessboard';
import 'vue3-chessboard/style.css';

const props = defineProps({pgn: Array})
const pgn = props.pgn

let boardAPI;

const submitted = ref(false)
const success = ref(false)
const rated = ref(false)

const should = ref("")

const index = ref(1);

onMounted(() => {
  if (pgn['name'].includes('B')) {
    boardAPI?.move(pgn['pgn'][1])
  }
});

function handleMove(move) {
  should.value = ""
  if (pgn['name'].includes('B')) {
    if (move.color === "w") {
    } else {
      if (move.san === pgn['pgn'][index.value + 1]) {
        boardAPI?.move(pgn['pgn'][index.value + 3])
        index.value = index.value + 3
      } else {
        should.value = "The correct one was: " + pgn['pgn'][index.value + 1]
        index.value = 1
      }
    }
  }

  if (pgn['name'].includes('W')) {
    if (move.color === "b") {
    } else {
      if (move.san === pgn['pgn'][index.value]) {
        boardAPI?.move(pgn['pgn'][index.value + 1])
        index.value = index.value + 3
      } else {
        should.value = "The correct one was: " + pgn['pgn'][index.value]
        index.value = 1
      }
    }
  }
}

const boardConfig = {
  "coordinates": true,
  "viewOnly": false,
  "orientation": pgn['name'].includes('B') ? "black" : "white",
}

function reset() {
  boardAPI.resetBoard()

  if (pgn['name'].includes('B')) {
    boardAPI?.move(pgn['pgn'][1])
  }
}

</script>
<template>
  <div class="bg-stone-50 dark:bg-stone-900">
    <div class="flex flex-col xl:flex-row xl:gap-10 xl:px-24">
      <div>
        <TheChessboard
            @move="handleMove"
            class="w-[250px] md:w-[400px] pb-4" :board-config="boardConfig"
            @board-created="(api) => (boardAPI = api)"/>
        <p>{{ should }}</p>
        <button
            class="rounded-lg bg-stone-600 text-stone-50 text-sm leading-loose dark:bg-stone-950 px-4 py-2 font-semibold text-lg"
            @click="reset()">Reset
        </button>
      </div>
    </div>
  </div>
</template>
