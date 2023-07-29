import { defineStore } from 'pinia'
import { ref } from 'vue'

export const useTacticStore = defineStore('tactic', () => {

    const isDark = ref(localStorage.dark === "true")

    const modal = ref({
        feedback: false
    })

    function toggleIsDark() {
        isDark.value = ! isDark.value
    }

    function toggleFeedbackModal() {
        this.modal.feedback = !this.modal.feedback
    }

    return {
        isDark,
        toggleFeedbackModal,
        modal,
        toggleIsDark,
    }
})
