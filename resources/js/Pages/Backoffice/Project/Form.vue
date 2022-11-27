<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue'
import MarkdownEditor from '@/Components/MarkdownEditor.vue'
import { useForm } from '@inertiajs/inertia-vue3'

const props = defineProps({
  project: Object,
  tags: Array,
  users: Array,
})

let form = useForm({
  name: props?.project?.name ?? '',
  description: props?.project?.description ?? '',
  content: props?.project?.content ?? '',
  website: props?.project?.website ?? '',
  dribbble: props?.project?.dribbble ?? '',
  github: props?.project?.github ?? '',
  published: props?.project?.published ?? 0,

  thumbnail: props?.project?.thumbnail ?? '',
  tags: props?.project?.tags ?? [],
  users: props?.project?.users ?? [],
})

const submit = (published = false) => {
  if (published) props.form.published = 1
  form.post(route('dashboard.project.store'))
}
</script>

<template>
	<DashboardLayout>
		<template #header>
			<h2 class="font-semibold text-xl text-gray-800 leading-tight">
				Création d'un projet
			</h2>
		</template>

		<template #content>
			<form @submit.prevent="submit()">
				<div class="p-4 md:grid md:grid-cols-2 md:gap-4">
					<div class="md:col-span-2">
						<label for="name">Nom du projet:</label>
						<input
							v-model="form.name"
							type="text"
							name="name"
							class="rounded border border-gray-400 focus:border-primary focus:ring-primary w-full"
						>
					</div>

					<div class="md:col-span-2">
						<label for="description">Description: <span class="text-gray-500 text-sm">(255 caractères)</span></label>
						<input
							v-model="form.description"
							type="text"
							name="description"
							class="rounded border border-gray-400 focus:border-primary focus:ring-primary w-full"
						>
					</div>

					<div class="md:col-span-2">
						<label for="thumbnail">Thumbnail: <span class="text-gray-500 text-sm">(png, jpg, jgep)</span></label>
						<div class="w-full">
							<input
								type="file"
								name="thumbnail"
							>
						</div>
					</div>

					<div class="md:col-span-2">
						<label for="content">Contenu du projet:</label>
						<MarkdownEditor class="w-100" />
					</div>

					<div class="md:col-span-1">
						<label for="tags">Tags:</label>
						<v-select
							v-model="form.tags"
							:options="tags"
							label="label"
							name="tags"
							multiple
							class="rounded border border-gray-400 focus:border-primary focus:ring-primary w-full"
						/>
					</div>

					<div class="md:col-span-1">
						<label for="website">Site web:</label>
						<input
							v-model="form.website"
							type="url"
							name="website"
							class="rounded border border-gray-400 focus:border-primary focus:ring-primary w-full"
						>
					</div>

					<div class="md:col-span-1">
						<label for="github">Github:</label>
						<input
							v-model="form.github"
							type="url"
							name="github"
							class="rounded border border-gray-400 focus:border-primary focus:ring-primary w-full"
						>
					</div>

					<div class="md:col-span-1">
						<label for="dribbble">Dribbble:</label>
						<input
							v-model="form.dribbble"
							type="url"
							name="dribbble"
							class="rounded border border-gray-400 focus:border-primary focus:ring-primary w-full"
						>
					</div>

					<div class="md:col-span-2">
						<label for="users">Participants:</label>
						<v-select
							v-model="form.users"
							:options="users"
							label="firstname"
							name="users"
							multiple
							class="rounded border border-gray-400 focus:border-primary focus:ring-primary w-full"
						/>
					</div>
				</div>

				<div class="bg-gray-50 px-4 py-3 sm:px-6 flex gap-4 justify-end">
					<button
						type="submit"
						class="inline-flex justify-center rounded-md border border-transparent bg-primary py-2 px-4 text-sm font-medium text-white shadow-sm hover:opacity-75 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2"
						@click.prevent="submit()"
					>
						Sauvegarder
					</button>

					<button
						type="submit"
						class="inline-flex justify-center rounded-md border border-transparent bg-secondary py-2 px-4 text-sm font-medium text-white shadow-sm hover:opacity-75 focus:outline-none focus:ring-2 focus:ring-secondary focus:ring-offset-2"
						@click.prevent="submit(true)"
					>
						Publier
					</button>
				</div>
			</form>
		</template>
	</DashboardLayout>
</template>
