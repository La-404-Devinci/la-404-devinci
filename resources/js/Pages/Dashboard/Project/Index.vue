<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue'

const props = defineProps({
    projects: Array
})
</script>

<template>
	<DashboardLayout>
		<template #header>
			<p>Projets</p>
			<inertia-link
				:href="route('dashboard.project.create')"
				class="rounded bg-green-500 text-white py-1 px-2 text-sm h-fit hover:opacity-75 duration-200"
			>
				Ajouter un projet
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
							Publié
						</td>
						<td class="py-1">
							Statut
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
						v-for="project in projects"
						:key="project.slug"
						class="border-b border-gray-200"
					>
						<td class="py-1">
							{{ project.name }}
						</td>
						<td class="py-1">
							{{ project.description }}
						</td>
						<td class="py-1 max-w-25">
							<span
								class="my-auto px-1 rounded  text-xs"
								:class="project.published ? 'bg-green-500/25 text-green-500' : 'bg-red-500/25 text-red-500'"
							>
								{{ project.published ? 'Oui' : 'Non' }}
							</span>
						</td>
						<td class="py-1">
							<span
								class="my-auto px-1 rounded  text-xs"
								:class="project.status ? 'bg-green-500/25 text-green-500' : 'bg-red-500/25 text-red-500'"
							>
								{{ project.status ? 'Activé' : 'Désactivé' }}
							</span>
						</td>
						<td class="py-1">
							{{ formatDate(project.created_at, 'DD-MM-YYYY') }}
						</td>
						<td class="py-1 flex justify-center gap-2">
							<inertia-link
								:href="route('dashboard.project.edit', project.slug)"
								class="hover:opacity-75"
							>
								<font-awesome-icon icon="fa-regular fa-pen-to-square" />
							</inertia-link>
							<inertia-link :href="route('dashboard.project.destroy', project.slug)">
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
