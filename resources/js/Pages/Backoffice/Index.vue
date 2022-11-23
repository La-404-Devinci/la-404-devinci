<script setup>
import { Head } from '@inertiajs/inertia-vue3'
import MarkdownEditor from '@/Components/MarkdownEditor.vue'
import DashboardLayout from '@/Layouts/DashboardLayout.vue';
</script>

<template>
	<DashboardLayout>
		<Head title="Dashboard" />

		<template #header>
			<h2 class="font-semibold text-xl text-gray-800 leading-tight">
				Dashboard
			</h2>
		</template>

		<template #content />
	</DashboardLayout>
</template>
