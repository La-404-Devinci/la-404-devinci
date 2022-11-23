<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue'
const props = defineProps([
    'users',
])
</script>

<template>
	<DashboardLayout>
		<template #header>
			<h2 class="font-semibold text-xl text-gray-800 leading-tight">
				Membres
			</h2>
			<inertia-link
				:href="route('dashboard.user.create')"
				class="rounded bg-green-500 text-white py-1 px-2 text-sm h-fit hover:opacity-75 duration-200"
			>
				Ajouter un membre
			</inertia-link>
		</template>

		<template #content>
			<table class="table-auto min-w-max w-full text-center">
				<thead class="font-semibold bg-secondary leading-normal text-white">
					<tr>
						<td class="py-1">
							Membre
						</td>
						<td class="py-1">
							Role
						</td>
						<td class="py-1">
							github
						</td>
						<td class="py-1">
							dribbble
						</td>
						<td class="py-1">
							twitter
						</td>
						<td class="py-1">
							instagram
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
						v-for="user in users"
						:key="user.slug"
						class="border-b border-gray-200"
					>
						<td class="py-1">
							{{ user.firstname + ' ' + user.lastname }}
						</td>
						<td class="py-1">
							{{ user.display_role }} | {{ user.role }}
						</td>
						<td class="py-1">
							{{ user.github ?? '-' }}
						</td>
						<td class="py-1">
							{{ user.dribbble ?? '-' }}
						</td>
						<td class="py-1">
							{{ user.twitter ?? '-' }}
						</td>
						<td class="py-1">
							{{ user.instagram ?? '-' }}
						</td>
						<td class="py-1">
							<span class="my-auto px-1 rounded bg-green-500/25 text-green-500 text-xs">
								{{ user.status ? 'Activé' : 'Désactivé' }}
							</span>
						</td>
						<td class="py-1">
							{{ formatDate(user.created_at, 'DD-MM-YYYY') }}
						</td>
						<td class="py-1 flex justify-center gap-2">
							<inertia-link
								:href="route('dashboard.user.edit', user.slug)"
								class="hover:opacity-75"
							>
								<font-awesome-icon icon="fa-regular fa-pen-to-square" />
							</inertia-link>
							<!-- <inertia-link :href="route('dashboard.user.destroy', user.slug)" class="hover:opacity-75">
                                <font-awesome-icon icon="fa-solid fa-power-off" />
                            </inertia-link> -->
							<inertia-link :href="route('dashboard.user.destroy', user.slug)">
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
