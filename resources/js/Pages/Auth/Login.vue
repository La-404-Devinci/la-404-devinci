<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { useForm } from '@inertiajs/inertia-vue3';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
	<Head title="Connexion" />

	<div class="w-screen h-screen flex flex-col justify-center items-center">
		<div
			v-if="status"
			class="mb-4 font-medium text-sm text-green-600"
		>
			{{ status }}
		</div>

		<form
			class="w-2/6 bg-white p-8 rounded-lg shadow-lg"
			@submit.prevent="submit"
		>
			<div>
				<InputLabel
					for="email"
					value="Email"
				/>
				<TextInput
					id="email"
					v-model="form.email"
					type="email"
					class="mt-1 block w-full"
					required
					autofocus
					autocomplete="username"
				/>
				<InputError
					class="mt-2"
					:message="form.errors.email"
				/>
			</div>

			<div class="mt-4">
				<InputLabel
					for="password"
					value="Password"
				/>
				<TextInput
					id="password"
					v-model="form.password"
					type="password"
					class="mt-1 block w-full"
					required
					autocomplete="current-password"
				/>
				<InputError
					class="mt-2"
					:message="form.errors.password"
				/>
			</div>

			<div class="block mt-4">
				<label class="flex items-center">
					<Checkbox
						v-model:checked="form.remember"
						name="remember"
					/>
					<span class="ml-2 text-sm text-gray-600">Remember me</span>
				</label>
			</div>

			<div class="flex items-center justify-end mt-4">
				<Link
					v-if="canResetPassword"
					:href="route('password.request')"
					class="underline text-sm text-gray-600 hover:text-gray-900"
				>
					Mot de passe oublié ?
				</Link>

				<PrimaryButton
					class="ml-4"
					:class="{ 'opacity-25': form.processing }"
					:disabled="form.processing"
				>
					Connexion
				</PrimaryButton>
			</div>
		</form>
    </div>
</template>
