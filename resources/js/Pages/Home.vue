<template>
	<AppLayout>
		<template #header-title>
			Accueil
		</template>

		<template #content />
	</AppLayout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue'
export default {
    name : 'Home',
    components : {
        AppLayout,
    }
}
</script>
