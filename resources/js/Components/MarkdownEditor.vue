<script setup>
import '@toast-ui/editor/dist/toastui-editor.css'
import Editor from '@toast-ui/editor'
import { onMounted } from 'vue'

const props = defineProps({
    initialValue: String,
})

let editor = null

onMounted(() => {
    editor = new Editor({
        el: document.querySelector('#editor'),
        minHeight: '400px',
        language: 'fr-FR',
        initialEditType: 'markdown',
        useCommandShortcut: true,
        hideModeSwitch: true,
        toolbarItems: [
            ['heading', 'bold', 'italic', 'strike'],
            ['hr', 'quote'],
            ['ul', 'ol', 'task', 'indent', 'outdent'],
            ['table', 'image', 'link'],
            ['code', 'codeblock'],
            ['scrollSync'],
        ],
        // Desactivate GA for tui
        usageStatistics: false,
    })
})
</script>

<template>
	<div
		id="editor"
		class="border-gray-400 border rounded"
	/>
</template>

<style scoped>
#editor .toastui-editor-defaultUI {
    border: none !important;
}
</style>
