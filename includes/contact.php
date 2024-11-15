<!-- Contact Section -->
<section id="contact" class="container mx-auto p-6 pb-10">
	<h2 class="text-3xl font-bold mb-4">Contactez moi | 🚧EN CONSTRUCTION🚧</h2>
	<form action="/src/scripts/php/submit-form.php" method="post" class="bg-white shadow-md rounded-lg p-6">
		<div class="mb-4">
			<label for="name" class="block text-gray-700 mb-2">Nom:</label>
			<input type="text" id="name" name="name" required class="w-full px-3 py-2 border rounded-lg">
		</div>
		<div class="mb-4">
			<label for="email" class="block text-gray-700 mb-2">Email:</label>
			<input type="email" id="email" name="email" required class="w-full px-3 py-2 border rounded-lg">
		</div>
		<div class="mb-4">
			<label for="message" class="block text-gray-700 mb-2">Message:</label>
			<textarea id="message" name="message" rows="4" required
				class="w-full px-3 py-2 border rounded-lg"></textarea>
		</div>
		<button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Envoyer</button>
	</form>
</section>