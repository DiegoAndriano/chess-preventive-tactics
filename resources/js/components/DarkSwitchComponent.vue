<script setup>
import IconSun from './icons/IconSun.vue'
import IconMoon from './icons/IconMoon.vue'
import { onMounted } from 'vue'
import { useTacticStore } from "../stores/tactic";

const props = defineProps({text: Boolean})

const tactic = useTacticStore()

function toggleIsdark() {
    tactic.toggleIsDark()

    localStorage.setItem('dark', tactic.isDark.toString())
    if (tactic.isDark) {
        document.querySelector('#app').classList.add('dark')
    } else {
        document.querySelector('#app').classList.remove('dark')
    }
}

onMounted(() => {
    if (tactic.isDark) {
        document.querySelector('#app').classList.add('dark')
    }
})

</script>
<template>
    <div>
        <p
            v-if="props.text"
            v-text="tactic.isDark ? 'Modo oscuro' : 'Modo claro'"
            class="text-slate-50 text-sm py-4"></p>
        <div class="flex justify-end w-full">
            <div @click="toggleIsdark"
                 :class="tactic.isDark ? 'bg-stone-700' : 'bg-stone-300'"
                 class="w-[52px] h-[32px] rounded-full flex items-center px-1 cursor-pointer transition transform duration-100">
                <div
                    :class="tactic.isDark ? 'translate-x-5 bg-stone-900' : 'translate-x-0'"
                    class="bg-stone-50 rounded-full h-[24px] w-[24px] flex justify-center items-center transition transform duration-100">
                    <IconSun
                        :class="tactic.isDark ? 'opacity-0 hidden' : 'opacity-100'"
                        class="text-stone-900 h-6 w-6 transition transform duration-100"></IconSun>
                    <IconMoon
                        :class="tactic.isDark ? 'opacity-100' : 'opacity-0 hidden'"
                        class="h-6 w-6 text-stone-50 transition transform duration-100 opacity-0"></IconMoon>
                </div>
            </div>
        </div>
    </div>

</template>
