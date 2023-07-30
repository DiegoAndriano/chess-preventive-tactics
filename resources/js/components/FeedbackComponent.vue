<script setup>
import {reactive} from 'vue'
import IconEdit from './Icons/IconEdit.vue'
import {useTacticStore} from "../stores/tactic";

const tactic = useTacticStore()

const form = reactive({
    'author': '',
    'feedback': '',
})

const error = reactive({
    'author': false,
    'feedback': false,
})

function validateAuthor() {
    if (form.author.length === 0) {
        error.author = 'Author name required'
        return false
    }
    if (form.author.length >= 255) {
        error.author = 'max. 255'
        return false;
    }
    return true
}

function validateFeedback() {
    if (form.feedback.length === 0) {
        error.feedback = 'Feedback required'
        return false
    }
    return true
}

function submit() {
    if (validateAuthor() && validateFeedback()) {
        axios.post('/feedback', form).then((response) => {

        })
    }
}
</script>
<template>
    <div class="m-4 flex justify-end md:m-10 lg:m-20">
        <button @click="tactic.toggleFeedbackModal"
                class="flex cursor-pointer items-center gap-4 w-auto px-4 py-2 bg-stone-50  rounded-lg text-stone-500 shadow-sm hover:bg-stone-200 focus:bg-stone-300 focus:font-semibold  dark:bg-stone-900 dark:text-stone-200 dark:hover:bg-[#2C2927] lg:text-xl lg:px-8 lg:py-4">
            Submit feedback
            <IconEdit class="w-6 h-6 lg:w-auto lg:h-8 dark:text-stone-100"></IconEdit>
        </button>
    </div>
    <transition name="slide">
        <form v-if="tactic.modal.feedback"
              class="fixed w-full h-[500px] bg-white z-50 px-6 py-10 top-0 bottom-0 my-auto border border-4 border-stone-900 flex flex-col">
            <div class="flex justify-end py-4">
                <button @click.prevent="tactic.toggleFeedbackModal" class="text-red-600 cursor-pointer">X</button>
            </div>
            <div class="flex flex-col gap-y-6">
                <input @focus="error.author = false" @blur="validateAuthor" v-model="form.author"
                       :class="error.author !== false ? 'border-red-600' : ''"
                       class="border border-4 border-stone-900 px-4 py-2"/>
                <p v-if="error.author !== false" class="text-red-500 text-sm">{{ error.author }}</p>
                <input @focus="error.feedback = false" @blur="validateFeedback" v-model="form.feedback"
                       :class="error.feedback !== false ? 'border-red-600' : ''"
                       class="border border-4 border-stone-900 px-4 py-2"/>
                <p v-if="error.feedback !== false" class="text-red-500 text-sm">{{ error.feedback }}</p>
                <button @click.prevent="submit" class="border border-4 border-stone-900 px-4 py-2">Enviar</button>
            </div>
        </form>
    </transition>
</template>
