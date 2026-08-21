<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact - Dr. Timeless</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#fcfbff]">
<nav class="max-w-7xl mx-auto px-6 py-5 flex justify-between">
  <a href="/" class="flex gap-2 items-center"><div class="w-9 h-9 rounded-xl bg-[#7c3aed] text-white flex items-center justify-center font-bold">DT</div><span class="font-bold">Dr. Timeless</span></a>
  <div class="flex gap-6 text-sm"><a href="/">Home</a><a href="/about">About</a><a href="/contact" class="text-violet-600 font-bold">Contact</a></div>
</nav>

<section class="max-w-7xl mx-auto px-6 py-16 grid lg:grid-cols-2 gap-10">
  <div>
    <h1 class="text-5xl font-bold leading-[0.9]">Let's build<br><span class="text-[#7c3aed]">timeless.</span></h1>
    <p class="mt-4 text-zinc-600">I take 2 projects per month to keep quality obsessive. DM open, response ~2h</p>
    <div class="mt-8 space-y-4 text-sm">
      <div class="p-4 rounded-2xl bg-white border">📧 hello@drtimeless.dev</div>
      <div class="p-4 rounded-2xl bg-white border">📍 Ilorin, Kwara - Lagos, Nigeria</div>
      <div class="p-4 rounded-2xl bg-white border">🌐 drtimeless-portfolio.onrender.com</div>
    </div>
  </div>
  <div class="rounded-[24px] bg-white border p-8">
    <h3 class="font-bold">Send me a message</h3>
    <form class="mt-6 space-y-4" method="POST" action="/contact">
      <input class="w-full h-12 px-4 rounded-xl border bg-zinc-50" placeholder="Your name" name="name" required>
      <input class="w-full h-12 px-4 rounded-xl border bg-zinc-50" placeholder="Your email" name="email" required>
      <textarea class="w-full h-32 p-4 rounded-xl border bg-zinc-50" placeholder="Tell me about your project..." name="message" required></textarea>
      <button class="h-12 w-full rounded-full bg-[#7c3aed] text-white font-semibold">Send Message →</button>
    </form>
  </div>
</section>
</body>
</html>