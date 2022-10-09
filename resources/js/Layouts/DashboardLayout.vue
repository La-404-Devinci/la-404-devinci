<script setup>
import { ref } from 'vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

const showingNavigationDropdown = ref(false);
</script>

<template>
	<div class="min-h-full">
		<nav class="bg-secondary text-white">
			<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
				<div class="flex h-16 items-center justify-between">
					<div class="flex items-center">
						<div class="flex-shrink-0">
							<img
								class="h-10 w-10"
								src="@/../assets/images/logo-monochrome.png"
								alt="Your Company"
							>
						</div>
						<div class="hidden md:block">
							<div class="ml-10 flex items-baseline space-x-4">
								<inertia-link
									:href="route('dashboard.index')"
									class="hover:bg-primary px-3 py-2 rounded-md text-sm font-medium duration-300"
									:class="{ 'bg-primary': route().current()?.includes('dashboard.index') }"
									aria-current="page"
								>
									Dashboard
								</inertia-link>

								<inertia-link
									:href="route('dashboard.user.index')"
									class="hover:bg-primary px-3 py-2 rounded-md text-sm font-medium duration-300"
									:class="{ 'bg-primary': route().current()?.includes('dashboard.user.') }"
								>
									Membres
								</inertia-link>

								<inertia-link
									:href="route('dashboard.project.index')"
									class="hover:bg-primary px-3 py-2 rounded-md text-sm font-medium duration-300"
									:class="{ 'bg-primary': route().current()?.includes('dashboard.project.') }"
								>
									Projets
								</inertia-link>

								<inertia-link
									href="#"
									class="hover:bg-primary px-3 py-2 rounded-md text-sm font-medium duration-300"
									:class="{ 'bg-primary': route().current()?.includes('dashboard.index') }"
								>
									Formations
								</inertia-link>
							</div>
						</div>
					</div>
					<div class="hidden md:block">
						<div class="ml-4 flex items-center md:ml-6">
							<div class="text-right">
								<div class="text-base font-medium leading-none text-white">
									{{ $page.props.auth.user.firstname + ' ' + $page.props.auth.user.lastname }}
								</div>
								<div class="text-sm font-medium leading-none text-gray-400 text-right">
									{{ $page.props.auth.user.email }}
								</div>
							</div>
							<div class="relative ml-3">
								<div>
									<button
										id="user-menu-button"
										type="button"
										class="flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
										aria-expanded="false"
										aria-haspopup="true"
									>
										<span class="sr-only">Open user menu</span>
										<img
											class="h-8 w-8 rounded-full"
											src="@/../assets/images/logo.png"
											alt=""
										>
									</button>
								</div>


								<!--
                                    Dropdown menu, show/hide based on menu state.

                                    Entering: "transition ease-out duration-100"
                                    From: "transform opacity-0 scale-95"
                                    To: "transform opacity-100 scale-100"
                                    Leaving: "transition ease-in duration-75"
                                    From: "transform opacity-100 scale-100"
                                    To: "transform opacity-0 scale-95"
                                -->
								<div
									class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none overflow-hidden hidden"
									role="menu"
									aria-orientation="vertical"
									aria-labelledby="user-menu-button"
									tabindex="-1"
								>
									<!-- Active: "bg-gray-100", Not Active: "" -->
									<inertia-link
										id="user-menu-item-0"
										href="#"
										class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary hover:text-white duration-200"
										role="menuitem"
										tabindex="-1"
									>
										Profil
									</inertia-link>

									<!-- <inertia-link
										id="user-menu-item-1"
										href="#"
										class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary hover:text-white duration-200"
										role="menuitem"
										tabindex="-1"
									>Paramètres</inertia-link> -->

									<inertia-link
										id="user-menu-item-0"
										href="#"
										class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary hover:text-white duration-200"
										role="menuitem"
										tabindex="-1"
									>
										Retourner sur le site
									</inertia-link>

									<inertia-link
										id="user-menu-item-2"
										:href="route('logout')"
										method="post"
										as="button"
										class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary hover:text-white duration-200"
										role="menuitem"
										tabindex="-1"
									>
										Déconnexion
									</inertia-link>
								</div>
							</div>
						</div>
					</div>
					<div class="-mr-2 flex md:hidden">
						<!-- Mobile menu button -->
						<button
							type="button"
							class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
							aria-controls="mobile-menu"
							aria-expanded="false"
						>
							<span class="sr-only">Open main menu</span>
							<!--
                        Heroicon name: outline/bars-3

                        Menu open: "hidden", Menu closed: "block"
                        -->
							<svg
								class="block h-6 w-6"
								xmlns="http://www.w3.org/2000/svg"
								fill="none"
								viewBox="0 0 24 24"
								stroke-width="1.5"
								stroke="currentColor"
								aria-hidden="true"
							>
								<path
									stroke-linecap="round"
									stroke-linejoin="round"
									d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
								/>
							</svg>
							<!--
                        Heroicon name: outline/x-mark

                        Menu open: "block", Menu closed: "hidden"
                        -->
							<svg
								class="hidden h-6 w-6"
								xmlns="http://www.w3.org/2000/svg"
								fill="none"
								viewBox="0 0 24 24"
								stroke-width="1.5"
								stroke="currentColor"
								aria-hidden="true"
							>
								<path
									stroke-linecap="round"
									stroke-linejoin="round"
									d="M6 18L18 6M6 6l12 12"
								/>
							</svg>
						</button>
					</div>
				</div>
			</div>

			<!-- Mobile menu, show/hide based on menu state. -->
			<div
				id="mobile-menu"
				class="md:hidden"
			>
				<div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
					<a
						href="#"
						class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium"
						aria-current="page"
					>Dashboard</a>

					<a
						href="#"
						class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium"
					>Team</a>

					<a
						href="#"
						class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium"
					>Projects</a>

					<a
						href="#"
						class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium"
					>Calendar</a>

					<a
						href="#"
						class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium"
					>Reports</a>
				</div>
				<div class="border-t border-gray-700 pt-4 pb-3">
					<div class="flex items-center px-5">
						<div class="flex-shrink-0">
							<img
								class="h-10 w-10 rounded-full"
								src="@/../assets/images/logo.png"
								alt=""
							>
						</div>
						<div class="ml-3">
							<div class="text-base font-medium leading-none text-white">
								{{ $page.props.auth.user.firstname + ' ' + $page.props.auth.user.lastname }}
							</div>
							<div class="text-sm font-medium leading-none text-gray-400">
								{{ $page.props.auth.user.email }}
							</div>
						</div>
					</div>
					<div class="mt-3 space-y-1 px-2">
						<a
							href="#"
							class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white"
						>Your Profile</a>

						<a
							href="#"
							class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white"
						>Settings</a>

						<a
							href="#"
							class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white"
						>Sign out</a>
					</div>
				</div>
			</div>
		</nav>

		<header class="bg-white shadow">
			<div class="mx-auto max-w-7xl py-2 px-4 sm:px-6 lg:px-8 flex justify-between align-items-center">
                <slot name="header" />
			</div>
		</header>


		<main>
			<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
				<div class="rounded-lg bg-white shadow border-gray-500 overflow-auto">
					<slot name="content" />
				</div>
			</div>
		</main>

		<footer class="border border-gray-300 text-center py-2">
			<p>La 404 Devinci &copy; 2022 Copyright</p>
		</footer>
	</div>
</template>
