<script setup>
import '@toast-ui/editor/dist/toastui-editor-viewer.css'
import Viewer from '@toast-ui/editor/dist/toastui-editor-viewer'
import { onMounted } from 'vue'

const props = defineProps({
    content: String,
})

let viewer = null

onMounted(() => {
	viewer = new Viewer({
        el: document.querySelector('#viewer'),
        initialValue: content,
    })
})
</script>

<template>
	<div id="viewer" />
</template>
