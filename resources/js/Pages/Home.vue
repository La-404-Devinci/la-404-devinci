<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
</script>

<template>
	<AppLayout>
		<template #content>
			<div class="w-full h-screen bg-gray-200 shadow-inner">
				<div class="w-10/12 mx-auto flex justify-center items-center gap-12 h-full">
					<div class="w-2/5">
						<h2 class="font-bold text-4xl underline decoration-primary mb-6">
							Qui sommes-nous?
						</h2>
						<p class="text-lg font-medium text-justify">
							La 404 DeVinci est l’association de développement web du Pôle Léonard de Vinci. Etudiants passionnés par la réalisation de sites internet et de projets divers sur le web, nous avons décidé en 2021 de nous regrouper afin de partager nos savoirs et nos travaux. En effet, beaucoup de personnes ne connaissent pas réellement cet univers ! C’est donc ensemble que nous souhaitons relever le challenge de diffuser plus largement la vraie image du développement et des développeurs-euses.
						</p>
					</div>
					<div class="w-1/3">
						<img
							class="object-contain w-full h-1/6"
							src="@/../assets/images/home-s1.png"
							alt=""
						>
					</div>
				</div>
			</div>

			<div class="w-full h-screen shadow-xl">
				<div class="w-10/12 mx-auto flex justify-center items-center gap-12 h-full">
					<div class="w-2/5">
						<h2 class="font-bold text-4xl underline decoration-primary mb-6">
							Nos objectifs
						</h2>
						<ul class="list-disc text-lg font-medium">
							<li>
								Réunir des étudiants passionnés par le développement web
							</li>

							<li>
								Développer l’image du développement web auprès des étudiants et du grand public en général
							</li>

							<li>
								Partager notre savoir
							</li>

							<li>
								Réaliser des projets qui nous font kiffer !
							</li>
						</ul>
					</div>

					<div class="w-1/5">
						<div class="border-2 border-primary rounded-full p-8">
							<div class="border-2 border-primary rounded-full p-8">
								<img
									class="object-contain w-full h-1/12"
									src="@/../assets/images/logo.png"
									alt=""
								>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="w-full h-screen bg-gray-200 shadow-inner">

			</div>
		</template>
	</AppLayout>
</template>
