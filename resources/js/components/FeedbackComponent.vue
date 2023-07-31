<script setup>
import {reactive, ref} from 'vue'
import IconEdit from './Icons/IconEdit.vue'
import IconCheck from './Icons/IconCheck.vue'
import {useTacticStore} from "../stores/tactic";
import IconClose from './Icons/IconClose.vue';
import {TransitionRoot, TransitionChild, Dialog, DialogPanel} from '@headlessui/vue'

const tactic = useTacticStore()

const submitted = ref(false)
const sent = ref(false)

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
        submitted.value = true
        axios.post('/feedback', form).then((response) => {
            sent.value = true
        })
    }
}
</script>
<template>
    <div class="m-4 flex justify-end md:m-10 lg:m-20">
        <button @click="tactic.toggleFeedbackModal"
                class="flex cursor-pointer items-center gap-4 w-auto px-4 py-2 bg-stone-50  rounded-lg text-stone-500 shadow-sm hover:bg-stone-200 focus:bg-stone-300 focus:font-semibold  dark:bg-stone-950 dark:text-stone-200 dark:hover:bg-[#2C2927] lg:text-xl lg:px-8 lg:py-4">
            Submit feedback
            <IconEdit class="w-6 h-6 lg:w-auto lg:h-8 dark:text-stone-100"></IconEdit>
        </button>
    </div>
    <TransitionRoot
        appear
        :show="tactic.modal.feedback"
        as="template"
    >
        <Dialog :open="tactic.modal.feedback" @close="tactic.toggleFeedbackModal">
            <TransitionChild
                as="template"
                enter="duration-300 ease-out"
                enter-from="opacity-0"
                enter-to="opacity-100"
                leave="duration-200 ease-in"
                leave-from="opacity-100"
                leave-to="opacity-0"
            >
                <div class="fixed inset-0 bg-stone-500/40"/>
            </TransitionChild>
            <TransitionChild
                as="template"
                enter="duration-300 ease-out"
                enter-from="opacity-0 scale-95"
                enter-to="opacity-100 scale-100"
                leave="duration-200 ease-in"
                leave-from="opacity-100 scale-100"
                leave-to="opacity-0 scale-95"
            >
                <DialogPanel>
                    <form
                        class="z-50 fixed rounded-lg m-10 w-[320px] h-[500px] bg-white z-50 px-4 py-4 top-0 bottom-0 my-auto mx-auto
            left-0 right-0 border border-1 border-stone-200 shadow-sm flex flex-col dark:bg-stone-800
            dark:border-stone-700">
                        <div class="flex justify-end items-baseline py-4 gap-4">
                            <p class="text-sm dark:text-stone-100">Thanks for taking the time!! Let us know what you
                                think...</p>
                            <button @click.prevent="tactic.toggleFeedbackModal"
                                    class="text-stone-700 dark:text-stone-100 cursor-pointer">
                                <IconClose class="w-6 h-6"></IconClose>
                            </button>
                        </div>
                        <div class="flex flex-col h-full pb-8">
                            <input @focus="error.author = false" @blur="validateAuthor" v-model="form.author"
                                   :class="error.author !== false ? 'border-rose-600 mb-2' : ''"
                                   class="border border-stone-300 rounded-lg px-4 py-2 bg-stone-200 placeholder:text-stone-400 text-stone-700 text-sm outline-none dark:bg-stone-700 dark:border-stone-500 dark:text-stone-100"
                                   placeholder="Name"/>
                            <p v-if="error.author !== false" class="text-rose-500 text-xs">{{ error.author }}</p>
                            <textarea @focus="error.feedback = false" @blur="validateFeedback" v-model="form.feedback"
                                      :class="error.feedback !== false ? 'border-rose-600 mb-2' : ''" rows="8" cols="10"
                                      class="my-6 border border-stone-300 rounded-lg px-4 py-2 bg-stone-200 placeholder:text-stone-400 text-stone-700 text-sm outline-none
                                dark:bg-stone-700 dark:border-stone-500 dark:text-stone-100"
                                      placeholder="Message"></textarea>
                            <p v-if="error.feedback !== false" class="text-rose-500 text-xs">{{ error.feedback }}</p>
                            <div class="flex justify-end flex-col items-end grow pt-4">
                                <button
                                    :disabled="submitted"
                                    @click.prevent="submit"
                                    :class="sent ? 'bg-emerald-100 text-stone-900 border border-emerald-700 rounded-lg dark:bg-emerald-950 dark:text-stone-50' : ''"
                                    class="flex items-center justify-end gap-2 w-[116px] h-auto border bg-stone-200 text-stone-700 rounded px-4 py-2
                                    dark:bg-stone-950 dark:border-none dark:shadow-sm dark:text-stone-100 transition duration-100 ease-in-out">
                                    {{ submitted ? (sent ? 'Sent' : 'Sending...') : 'Submit' }}
                                    <IconCheck v-if="sent"
                                               class="w-6 h-6 lg:w-10 lg:h-10 text-emerald-700 dark:text-emerald-400"></IconCheck>
                                    <IconEdit v-if="!sent"
                                              class="w-6 h-6 lg:w-auto lg:h-8 dark:text-stone-100"></IconEdit>
                                </button>
                            </div>
                        </div>
                    </form>
                </DialogPanel>
            </TransitionChild>
        </Dialog>
    </TransitionRoot>

</template>
