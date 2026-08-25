<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - Dr. Timeless</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#fcfbf9]">

<!-- Replace ONLY this section -->
<section class="max-w-7xl mx-auto px-8 py-16">
  <h1 class="text-5xl font-bold">Let's build 👑</h1>
  <p class="mt-4 text-zinc-600">I take 2 projects per month to keep quality</p>
  
  <div class="mt-8 space-y-4">
    <p class="rounded-2xl bg-white border p-4">📧 hello@drtimeless.dev</p>
    
    <!-- THIS IS THE NEW WORKING FORM -->
    <form action="https://formspree.io/f/rjvdgabb" method="POST" class="mt-8 max-w-xl mx-auto space-y-4">
  
  <input type="text" name="name" placeholder="Your Name" required
    class="w-full px-5 py-4 rounded-2xl border border-zinc-200 bg-white focus:outline-none focus:ring-2 focus:ring-black focus:border-black transition">

  <input type="email" name="email" placeholder="Your Email" required
    class="w-full px-5 py-4 rounded-2xl border border-zinc-200 bg-white focus:outline-none focus:ring-2 focus:ring-black focus:border-black transition">

  <textarea name="message" placeholder="Tell me about your project..." required rows="5"
    class="w-full px-5 py-4 rounded-2xl border border-zinc-200 bg-white focus:outline-none focus:ring-2 focus:ring-black focus:border-black transition"></textarea>

  <button type="submit"
    class="w-full bg-black text-white py-4 rounded-2xl font-semibold hover:bg-zinc-800 transition flex items-center justify-center gap-2">
    Send Message <span>🚀</span>
  </button>

</form>
  </div>
</section>

</body>
</html>