<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue'
import { useForm } from '@inertiajs/inertia-vue3'
const props = defineProps({
    user: Object,
})

let form = useForm({
    firstname: props?.user?.firstname ?? '',
    lastname: props?.user?.lastname ?? '',
    email: props?.user?.email ?? '',
    password: '',
    role: props?.user?.role ?? 'user',
    display_role: props?.user?.display_role ?? 'member',
})

const submit = () => {
    form.post(route('dashboard.user.store'))
}
</script>

<template>
	<DashboardLayout>
		<template #header>
			<h2 class="font-semibold text-xl text-gray-800 leading-tight">
				Création d'un membre
			</h2>
		</template>
		<template #content>
			<form @submit.prevent="submit()">
				<div class="p-4 md:grid md:grid-cols-2 md:gap-4">
					<div class="md:col-span-1">
						<label for="firtname">Prénom</label>
						<input
							v-model="form.firstname"
							type="text"
							autocomplete="given-name"
							name="firstname"
							class="rounded border border-gray-400 focus:border-primary focus:ring-primary w-full"
						>
					</div>

					<div class="md:col-span-1">
						<label for="lastname">Nom de famille</label>
						<input
							v-model="form.lastname"
							type="text"
							autocomplete="family-name"
							name="lastname"
							class="rounded border border-gray-400 focus:border-primary focus:ring-primary w-full"
						>
					</div>

					<div class="md:col-span-1">
						<label for="email">Email</label>
						<input
							v-model="form.email"
							type="email"
							autocomplete="email"
							name="email"
							class="rounded border border-gray-400 focus:border-primary focus:ring-primary w-full"
						>
					</div>

					<div
						v-if="!user"
						class="md:col-span-1"
					>
						<label for="password">Mot de passe</label>
						<input
							v-model="form.password"
							type="password"
							autocomplete="password"
							name="password"
							class="rounded border border-gray-400 focus:border-primary focus:ring-primary w-full"
						>
					</div>
					<div
						v-else
						class="md:col-span-1"
					/>

					<div class="md:col-span-1">
						<label for="role">Rôle</label>
						<select
							v-model="form.role"
							name="role"
							class="rounded border border-gray-400 focus:border-primary focus:ring-primary w-full"
						>
							<option value="user">
								Utilisateur
							</option>
							<option value="instructor">
								Formateur
							</option>
							<option value="admin">
								Admin
							</option>
						</select>
					</div>

					<div class="md:col-span-1">
						<label for="display_role">Rôle dans l'asso</label>
						<select
							v-model="form.display_role"
							name="display_role"
							class="rounded border border-gray-400 focus:border-primary focus:ring-primary w-full"
						>
							<option value="president">
								Président
							</option>
							<option value="secretary">
								Secrétaire
							</option>
							<option value="treasurer">
								Trésorier
							</option>
							<option value="member">
								Membre
							</option>
							<option value="golden_member">
								Membre en or
							</option>
							<option value="alumni">
								Alumni
							</option>
							<option value="extern">
								Externe
							</option>
						</select>
					</div>
				</div>

				<div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
					<button
						type="submit"
						class="inline-flex justify-center rounded-md border border-transparent bg-primary py-2 px-4 text-sm font-medium text-white shadow-sm hover:opacity-75 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2"
						@click.prevent="submit()"
					>
						Save
					</button>
				</div>
			</form>
		</template>
	</DashboardLayout>
</template>
