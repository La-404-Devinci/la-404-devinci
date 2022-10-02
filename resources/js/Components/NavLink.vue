<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps(['href', 'active']);

const classes = computed(() => props.active
    ? 'inline-flex items-center px-1 pt-1 border-b-2 border-secondary text-base font-semibold leading-5 text-secondary focus:outline-none focus:border-secondary transition duration-150 ease-in-out'
    : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-base font-semibold leading-5 text-secondary hover:border-secondary focus:outline-none focus:border-secondary transition duration-150 ease-in-out'
);
</script>

<template>
	<Link
		:href="href"
		:class="classes"
	>
		<slot />
	</Link>
</template>
