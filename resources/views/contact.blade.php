<!DOCTYPE html>
<html>
<head>
    <title>Contact - Dr. Timeless</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#fcfbf9]">

<!-- SAME NAV -->
<nav class="max-w-7xl mx-auto px-6 py-5 flex justify-between items-center">
    <div class="flex gap-2 items-center">
        <div class="w-9 h-9 rounded-xl bg-[#7c3aed] text-white flex items-center justify-center font-bold">DT</div>
        <span style="color:#7c3aed; font-weight:bold;">Dr. Timeless</span>
    </div>
    <div class="flex gap-6 items-center font-medium text-sm">
        <a href="/" style="color:#555; text-decoration:none;">Home</a>
        <a href="/about" style="color:#555; text-decoration:none;">About</a>
        <a href="/contact" style="color:#111; font-weight:bold; text-decoration:none;">Contact</a>
    </div>
</nav>

<!-- CONTACT FORM ONLY -->
<section class="max-w-7xl mx-auto px-8 py-16">
    <h1 class="text-5xl font-bold text-center">Let's build 🚀</h1>
    <p class="mt-4 text-center text-zinc-600">I take 2 projects per month to keep quality.</p>

    <div class="mt-10 max-w-md mx-auto space-y-4">
        <p class="rounded-2xl bg-white border p-4 text-center">📧 hello@drtimeless.dev</p>
        <form action="https://formspree.io/f/mjybqgjz" method="POST" class="space-y-3 bg-white p-6 rounded-2xl border">
            <input type="text" name="name" required placeholder="Your Name" class="w-full border p-3 rounded-xl text-sm">
            <input type="email" name="email" required placeholder="Your Email" class="w-full border p-3 rounded-xl text-sm">
            <textarea name="message" required placeholder="Tell me about your project..." class="w-full border p-3 rounded-xl text-sm h-32"></textarea>
            <button type="submit" class="w-full bg-black text-white p-3 rounded-xl text-sm font-bold">Send Message 🚀</button>
        </form>
    </div>
</section>

</body>
</html>