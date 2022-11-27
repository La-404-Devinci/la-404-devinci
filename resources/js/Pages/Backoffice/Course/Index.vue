<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue'

const props = defineProps({
    courses: Array,
})
</script>

<template>
	<DashboardLayout>
		<template #header>
			<h2 class="font-semibold text-xl text-gray-800 leading-tight">
				Formations
			</h2>
			<inertia-link
				:href="route('dashboard.course.create')"
				class="rounded bg-green-500 text-white py-1 px-2 text-sm h-fit hover:opacity-75 duration-200"
			>
				Créer une formation
			</inertia-link>
		</template>

		<template #content>
			<table class="table-auto min-w-max w-full text-center">
				<thead class="font-semibold bg-secondary leading-normal text-white">
					<tr>
						<td class="py-1">
							Titre
						</td>
						<td class="py-1">
							Description
						</td>
						<td class="py-1">
							Topic
						</td>
						<td class="py-1">
							Nombre de leçon
						</td>
						<td class="py-1">
							Publié
						</td>
						<td class="py-1">
							Status
						</td>
						<td class="py-1">
							Date de création
						</td>
						<td class="py-1">
							Actions
						</td>
					</tr>
				</thead>
				<tbody class="text-gray-600 text-sm">
					<tr
						v-for="course in courses"
						:key="course.slug"
						class="border-b border-gray-200"
					>
						<td class="py-1">
							{{ course.title }}
						</td>
						<td class="py-1">
							{{ course.description }}
						</td>
						<td class="py-1">
							{{ course.topic.title }}
						</td>
						<td class="py-1">
							{{ course.lessons.length }}
						</td>
						<td class="py-1">
							<span
								class="my-auto px-1 rounded text-xs"
								:class="course.published ? 'bg-green-500/25 text-green-500': 'bg-red-500/25 text-red-500'"
							>
								{{ course.published ? 'Oui' : 'Non' }}
							</span>
						</td>
						<td class="py-1">
							<span
								class="my-auto px-1 rounded text-xs"
								:class="course.status ? 'bg-green-500/25 text-green-500': 'bg-red-500/25 text-red-500'"
							>
								{{ course.status ? 'Activé' : 'Désactivé' }}
							</span>
						</td>
						<td class="py-1">
							{{ formatDate(course.created_at, 'DD-MM-YYYY') }}
						</td>
						<td class="py-1 flex justify-center gap-2">
							<inertia-link
								:href="route('dashboard.course.edit', course.slug)"
								class="hover:opacity-75"
							>
								<font-awesome-icon icon="fa-regular fa-pen-to-square" />
							</inertia-link>

							<inertia-link :href="route('dashboard.user.destroy', course.slug)">
								<font-awesome-icon
									icon="fa-regular fa-trash-can"
									class="text-red-500 hover:opacity-75"
								/>
							</inertia-link>
						</td>
					</tr>
				</tbody>
			</table>
		</template>
	</DashboardLayout>
</template>
