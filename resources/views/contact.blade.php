<!DOCTYPE html>
<html>
<head>
    <title>Contact Dr. Timeless</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-purple-50 to-blue-50 min-h-screen">
<nav class="bg-white p-4 shadow flex justify-between">
<span class="font-bold text-purple-600 text-xl">Dr. Timeless</span>
<div>
<a href="/" class="mr-4">HOME</a>
<a href="/about" class="mr-4">ABOUT</a>
<a href="/contact" class="font-bold text-purple-600 mr-4">CONTACT</a>
</div>
</nav>
<div class="max-w-xl mx-auto mt-10 bg-white p-8 rounded-2xl shadow">
<h1 class="text-3xl font-bold text-center text-purple-600">Contact Me Form</h1>
<p class="text-center text-gray-400 mt-2">Send message to Dr. Timeless</p>
<form method="POST" action="/contact" class="mt-8">
@csrf
<input type="text" name="name" placeholder="Your Full Name" class="w-full border-2 p-3 rounded-lg mb-4" required>
<input type="email" name="email" placeholder="Your Email Address" class="w-full border-2 p-3 rounded-lg mb-4" required>
<textarea name="message" rows="5" placeholder="Your Message..." class="w-full border-2 p-3 rounded-lg mb-4" required></textarea>
<button class="w-full bg-purple-600 text-white py-3 rounded-lg font-bold text-lg">SEND MESSAGE</button>
</form>
</div>
</body>
</html>