<script setup>
import {onMounted, ref, computed} from 'vue'
import {TheChessboard} from 'vue3-chessboard';
import 'vue3-chessboard/style.css';

const props = defineProps({
  pgn: Array,
  route: String
})
var pgn = props.pgn
const route = props.route

let boardAPI;

const study = ref("yS9QxRwR")

const should = ref("")
const message = ref("")

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

function loadStudy() {
  axios.get(route, {
    params: {
      "pgn": study.value,
    }
  })
      .then(function (response) {
        message.value = response.data.message

        pgn = response.data.finalPgn
        boardAPI.resetBoard()
        index.value = 1

        if (pgn['name'].includes('B')) {
          boardAPI?.move(pgn['pgn'][1])
        }
      })
}

</script>
<template>
  <div class="bg-stone-50 dark:bg-stone-900">
    <div v-if="message" class="bg-emerald-400 mx-6">
      <p class="text-white font-semibold px-6 py-4 ">{{ message }}</p>
    </div>
    <div class="flex flex-col xl:flex-row xl:gap-10 xl:px-24">
      <div>
        <div class="flex my-6 gap-x-4 mx-6">
          <input
              v-model="study"
              class="px-4 py-2 rounded-lg border-stone-600 border"
              placeholder="Load study" type="text">
          <button
              class="rounded-lg bg-stone-600 text-stone-50 leading-loose dark:bg-stone-950 px-4 py-2 font-semibold text-lg"
              @click="loadStudy()">Send
          </button>
        </div>
        <TheChessboard
            @move="handleMove"
            class="w-[250px] md:w-[400px] pb-4" :board-config="boardConfig"
            @board-created="(api) => (boardAPI = api)"/>
        <p>{{ should }}</p>
        <button
            class="mx-2 rounded-lg bg-stone-600 text-stone-50 leading-loose dark:bg-stone-950 px-4 py-2 font-semibold text-lg"
            @click="reset()">Reset
        </button>
        <button
            class="my-4 mx-2 block rounded-lg bg-stone-600 text-stone-50 leading-loose dark:bg-stone-950 px-4 py-2 font-semibold text-lg"
            @click="loadStudy()">Get different chapter
        </button>
      </div>
    </div>
  </div>
</template>
