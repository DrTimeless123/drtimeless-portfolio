<!DOCTYPE html>
<html>
<head>
    <title>Dr. Timeless - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#fcfbf9]">

<!-- NAV -->
<nav class="max-w-7xl mx-auto px-6 py-5 flex justify-between">
    <div class="flex gap-2 items-center">
        <div class="w-9 h-9 rounded-xl bg-[#7c3aed] text-white flex items-center justify-center font-bold">DT</div>
        <span style="color:#7c3aed; font-weight:bold;">Dr. Timeless</span>
    </div>
</nav>

<!-- HERO - ONLY HIRE ME (FIRST CODE) -->
<div style="text-align:center; padding:40px 20px;">
    <h1 style="font-size:36px; font-weight:bold; margin-bottom:10px;">I build timeless products.</h1>
    <p style="font-size:18px; color:#555; font-weight:bold;">Laravel Specialist from Ilorin. Fast, secure & premium websites.</p>
    
    <div style="margin-top:25px;">
        <a href="#contact" style="display:inline-block; background:#111; color:#fff; padding:12px 28px; border-radius:50px; text-decoration:none; font-weight:bold; font-size:15px;">
            Hire Me
        </a>
    </div>
</div>

<!-- MY PROJECTS - OUR 3 PROJECTS -->
<div style="max-width:1100px; margin:0 auto; padding:30px 20px;">
    <h2 style="font-size:28px; font-weight:bold; text-align:center; margin-bottom:25px;">My Projects 🚀 (3 Done!)</h2>
    
    <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap:20px;">

        <!-- PROJECT 1: DrTimeless Store -->
        <div style="border:1px solid #ddd; border-radius:12px; padding:20px; background:#fff;">
            <h3 style="font-weight:bold; font-size:18px;">🛒 DrTimeless Store</h3>
            <p style="color:#666; font-size:14px; margin:10px 0;">E-commerce fashion store with cart and checkout.</p>
            <p style="font-size:12px; color:#888; margin-bottom:12px;"><strong>Tech:</strong> Laravel, MySQL, Tailwind</p>
            <div style="display:flex; gap:8px;">
                <a href="https://github.com/DrTimeless1/DrTimeless-Store" target="_blank" style="background:#000; color:#fff; padding:8px 14px; border-radius:6px; text-decoration:none; font-size:13px; font-weight:bold;">GitHub</a>
                <a href="https://github.com/DrTimeless1/DrTimeless-Store" target="_blank" style="border:1px solid #000; color:#000; padding:8px 14px; border-radius:6px; text-decoration:none; font-size:13px; font-weight:bold;">View Live</a>
            </div>
        </div>

        <!-- PROJECT 2: Acer Cuts -->
        <div style="border:1px solid #ddd; border-radius:12px; padding:20px; background:#fff;">
            <h3 style="font-weight:bold; font-size:18px;">💈 Acer Cuts</h3>
            <p style="color:#666; font-size:14px; margin:10px 0;">Barber booking system with admin dashboard.</p>
            <p style="font-size:12px; color:#888; margin-bottom:12px;"><strong>Tech:</strong> Laravel, PHP, MySQL</p>
            <div style="display:flex; gap:8px;">
                <a href="https://github.com/DrTimeless1/acer-cuts-booking" target="_blank" style="background:#000; color:#fff; padding:8px 14px; border-radius:6px; text-decoration:none; font-size:13px; font-weight:bold;">GitHub</a>
                <a href="https://github.com/DrTimeless1/acer-cuts-booking" target="_blank" style="border:1px solid #000; color:#000; padding:8px 14px; border-radius:6px; text-decoration:none; font-size:13px; font-weight:bold;">View Live</a>
            </div>
        </div>

        <!-- PROJECT 3: Timeless Fashion -->
        <div style="border:1px solid #ddd; border-radius:12px; padding:20px; background:#fff;">
            <h3 style="font-weight:bold; font-size:18px;">👗 Timeless Fashion</h3>
            <p style="color:#666; font-size:14px; margin:10px 0;">Fashion landing page that converts visitors to sales.</p>
            <p style="font-size:12px; color:#888; margin-bottom:12px;"><strong>Tech:</strong> Laravel, Tailwind CSS</p>
            <div style="display:flex; gap:8px;">
                <a href="https://github.com/DrTimeless1" target="_blank" style="background:#000; color:#fff; padding:8px 14px; border-radius:6px; text-decoration:none; font-size:13px; font-weight:bold;">GitHub</a>
                <a href="https://github.com/DrTimeless1" target="_blank" style="border:1px solid #000; color:#000; padding:8px 14px; border-radius:6px; text-decoration:none; font-size:13px; font-weight:bold;">View Live</a>
            </div>
        </div>

    </div>
</div>

<!-- CONTACT - DIRECT HERE (NO INCLUDE, SO NO ERROR) -->
<section id="contact" class="max-w-7xl mx-auto px-8 py-16 mt-10">
    <h2 class="text-4xl font-bold text-center">Let's build 🚀</h2>
    <p class="mt-3 text-center text-zinc-600">I take 2 projects per month to keep quality.</p>
    <div class="mt-8 max-w-md mx-auto space-y-4">
        <form action="https://formspree.io/f/mjybqgjz" method="POST" class="space-y-3">
            <input type="text" name="name" required placeholder="Your Name" class="w-full border p-3 rounded-xl text-sm">
            <input type="email" name="email" required placeholder="Your Email" class="w-full border p-3 rounded-xl text-sm">
            <textarea name="message" required placeholder="Tell me about your project..." class="w-full border p-3 rounded-xl text-sm h-28"></textarea>
            <button type="submit" class="w-full bg-black text-white p-3 rounded-xl text-sm font-bold">Send Message 🚀</button>
        </form>
    </div>
</section>

</body>
</html>