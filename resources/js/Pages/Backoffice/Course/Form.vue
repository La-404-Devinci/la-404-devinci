<script setup>
import DashboardLayout from "@/Layouts/DashboardLayout.vue";
import { useForm } from '@inertiajs/inertia-vue3'

const props = defineProps({
  course: Object,
});

let form = useForm({
  title: props?.course?.title ?? "",
  description: props?.course?.description ?? "",
  topic: props?.course?.topic?.slug ?? "",
  thumbnail: "",
  published: props?.course?.published ?? false,
});

const submit = (published = false) => {
  if(published) form.published = true
  form.post(route('dasboard.course.store'))
}
</script>

<template>
	<DashboardLayout>
		<template #header>
			<h2 class="font-semibold text-xl text-gray-800 leading-tight">
				Création d'une Formation
			</h2>
		</template>

		<template #content>
			<div class="md:grid md:grid-cols-2">
				<form
					:class="course?.lessons.length ? 'md:col-span-1' : 'md:col-span-2'"
					@submit.prevent="submit()"
				>
					<div class="px-4 py-4">
						<div class="mb-2">
							<label for="title">Titre:</label>
							<input
								v-model="form.title"
								type="text"
								name="title"
								class="rounded border border-gray-400 focus:border-primary focus:ring-primary w-full"
							>
						</div>

						<div class="mb-2">
							<label for="description">Description:</label>
							<textarea
								v-model="form.description"
								name="description"
								class="rounded border border-gray-400 focus:border-primary focus:ring-primary w-full"
							/>
						</div>

						<div class="mb-2">
							<label for="topic">Type de sujet:</label>
							<select
								v-model="form.topic"
								name="topic"
								class="rounded border border-gray-400 focus:border-primary focus:ring-primary w-full"
							/>
						</div>

						<div class="mb-2">
							<label for="published">Publier ?</label>
							<select
								v-model="form.published"
								name="published"
								class="rounded border border-gray-400 focus:border-primary focus:ring-primary w-full"
							>
								<option :value="true">
									Oui
								</option>
								<option :value="false">
									Non
								</option>
							</select>
						</div>
					</div>

					<div class="bg-gray-100 px-4 py-3 sm:px-6 flex gap-4 justify-end">
						<button
							type="submit"
							class="w-full text-center py-1 px-2 bg-primary text-white rounded"
						>
							Enregister
						</button>
					</div>
				</form>

				<div
					v-if="course?.lessons.length"
					class="md:col-span-1"
				>
					coucou
				</div>
			</div>
		</template>
	</DashboardLayout>
</template>

