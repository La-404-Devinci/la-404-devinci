<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
	<div class="min-h-screen text-secondary">
		<nav class="bg-wave font-bold shadow">
			<!-- Primary Navigation Menu -->
			<div class="w-9/12 mx-auto px-4 sm:px-6 lg:px-8">
				<div class="flex justify-between h-16">
					<div class="flex">
						<!-- Logo -->
						<div class="shrink-0 flex items-center">
							<Link
								:href="route('home')"
								class="shrink-0 flex items-center gap-2"
							>
								<img
									src="@/../assets/images/logo.png"
									class="block h-12 w-auto"
								>
								<p>La 404 Devinci</p>
							</Link>
						</div>
					</div>

					<div class="flex">
						<!-- Navigation Links -->
						<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex ">
							<p class="inline-flex items-center px-1 text-base font-semibold leading-5 text-secondary">
								<slot name="header-title" />
							</p>
						</div>
					</div>

					<div class="hidden sm:flex sm:items-center sm:ml-6">
						<!-- Settings Dropdown -->
						<button
							class="inline-flex items-center justify-center p-2 rounded-full text-secondary hover:text-white hover:bg-primary focus:outline-none focus:bg-primary focus:text-white transition duration-150 ease-in-out"
							@click="showingNavigationDropdown = ! showingNavigationDropdown"
						>
							<svg
								class="h-6 w-6"
								stroke="currentColor"
								fill="none"
								viewBox="0 0 24 24"
							>
								<path
									:class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }"
									stroke-linecap="round"
									stroke-linejoin="round"
									stroke-width="2"
									d="M4 6h16M4 12h16M4 18h16"
								/>
								<path
									:class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }"
									stroke-linecap="round"
									stroke-linejoin="round"
									stroke-width="2"
									d="M6 18L18 6M6 6l12 12"
								/>
							</svg>
						</button>
					</div>
				</div>
			</div>
		</nav>

		<!-- Page Content -->
		<main class="container mx-auto mt-12">
			<slot name="content" />
		</main>

		<!-- Footer Content -->
		<footer class="w-100 h-auto">
			<div class="bg-wave flex justify-around items-center">
				<div class="container flex justify-around gap-8 py-12">
					<div class="w-1/8">
						<img
							src="@/../assets/images/logo-monochrome-shadow.png"
							alt=""
						>
					</div>

					<div class="w-1/4">
						<h6 class="font-bold text-xl pb-1 underline decoration-primary">
							La 404 Devinci
						</h6>
						<p>
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni ab consequuntur perferendis esse, tempora eligendi amet, accusamus, voluptate vero rerum dignissimos adipisci itaque ducimus laboriosam neque suscipit aut velit. Obcaecati.
						</p>
					</div>

					<div class="w-1/4">
						<h6 class="font-bold text-xl pb-1 underline decoration-primary">
							Nos réseaux sociaux
						</h6>
						<ul>
							<li>
								<a
									href="https://www.instagram.com/"
									target="_blank"
									class="hover:underline decoration-secondary"
								>
									<font-awesome-icon
										icon="fab fa-instagram"
										class="mr-2"
									/>
									Instagram
								</a>
							</li>
							<li>
								<a
									href="https://fr-fr.facebook.com/"
									target="_blank"
									class="hover:underline decoration-secondary"
								>
									<font-awesome-icon
										icon="fab fa-facebook-square"
										class="mr-2"
									/>
									Facebook
								</a>
							</li>
							<li>
								<a
									href="https://github.com/"
									target="_blank"
									class="hover:underline decoration-secondary"
								>
									<font-awesome-icon
										icon="fab fa-github-square"
										class="mr-1"
									/>
									Github
								</a>
							</li>
						</ul>
					</div>

					<div class="w-1/4">
						<h6 class="font-bold text-xl pb-1 underline decoration-primary">
							Contact
						</h6>
						<ul>
							<li>
								<font-awesome-icon
									icon="fas fa-envelope"
									class="mr-2"
								/>404@devinci.fr
							</li>
							<li>
								<font-awesome-icon
									icon="fas fa-map-pin"
									class="ml-1 mr-3"
								/>La Défense, Paris, France
							</li>
							<li>
								<font-awesome-icon
									icon="fas fa-phone"
									class="mr-2"
								/>06 77 04 63 40
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="bg-black py-1 text-center text-white">
				<p>La 404 Devinci &copy; 2022 Copyright</p>
			</div>
		</footer>
	</div>
</template>

<style scoped>
    .bg-wave {
        background-image: url('@/../assets/images/bg-wave.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>
