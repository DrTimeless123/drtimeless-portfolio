@section('title', 'Dr. Timeless — Laravel Developer')

@section('content')
<section class="max-w-[1280px] mx-auto px-6 lg:px-8">
    <div class="grid lg:grid-cols-[1.1fr_0.9fr] gap-10 lg:gap-6 items-center min-h-[calc(100vh-72px)] py-12 lg:py-0">
        <!-- Left -->
        <div>
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white dark:bg-white/5 border border-zinc-200 dark:border-white/10 shadow-sm text-[11px] font-mono tracking-widest mb-8">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                AVAILABLE FOR NEW PROJECTS • LAGOS / REMOTE
            </div>

            <h1 class="text-[44px] md:text-[68px] lg:text-[76px] font-bold leading-[0.9] tracking-[-0.04em]">
                I build<br/>
                <span class="text-zinc-400 dark:text-zinc-600">fast,</span> scalable<br/>
                <span class="relative">
                    <span id="typed" class="text-brand-500">I am Dr. Timeless</span>
                    <span class="absolute -bottom-2 left-0 w-full h-[8px] bg-brand-500/20 -rotate-1"></span>
                </span>
            </h1>

            <p class="mt-8 max-w-[48ch] text-[16px] leading-7 text-zinc-600 dark:text-zinc-400">
                Laravel artisan obsessed with clean architecture, buttery UX and performance. I turn complex business logic into premium products that scale.
            </p>

            <div class="mt-8 flex flex-wrap gap-2">
                <span class="px-3 py-1.5 rounded-full bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 text-[12px] font-mono">RESPONSIVE ◆ 100%</span>
                <span class="px-3 py-1.5 rounded-full border border-zinc-200 dark:border-white/10 text-[12px] font-mono">FAST ◆ 98 LCP</span>
                <span class="px-3 py-1.5 rounded-full border border-zinc-200 dark:border-white/10 text-[12px] font-mono">MODERN ◆ LARAVEL 11</span>
            </div>

            <div class="mt-10 flex items-center gap-4">
                <a href="/projects" class="px-7 py-3.5 rounded-full bg-brand-500 text-white font-medium text-[14px] hover:bg-brand-600 transition shadow-[0_12px_24px_-8px_rgba(124,58,237,0.6)]">View Projects →</a>
                <a href="/contact" class="px-7 py-3.5 rounded-full border border-zinc-200 dark:border-white/10 bg-white/50 dark:bg-white/5 backdrop-blur text-[14px] font-medium hover:bg-white transition">Contact Me</a>
            </div>

            <div class="mt-12 grid grid-cols-3 max-w-[420px] border-t border-zinc-200 dark:border-white/10 pt-8">
                <div><div class="text-[28px] font-bold tracking-tight">50+</div><div class="text-[11px] font-mono tracking-widest text-zinc-500">PROJECTS SHIPPED</div></div>
                <div><div class="text-[28px] font-bold tracking-tight">4.9★</div><div class="text-[11px] font-mono tracking-widest text-zinc-500">CLIENT RATING</div></div>
                <div><div class="text-[28px] font-bold tracking-tight">3yrs</div><div class="text-[11px] font-mono tracking-widest text-zinc-500">LARAVEL PRO</div></div>
            </div>
        </div>

        <!-- Mockup Card -->
        <div class="relative lg:h-[640px]">
            <div class="relative rounded-[32px] bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-white/10 shadow-[0_40px_80px_-20px_rgba(0,0,0,0.2)] overflow-hidden p-6 lg:p-8">
                <!-- Window chrome -->
                <div class="flex items-center justify-between mb-8">
                    <div class="flex gap-1.5"><div class="w-3 h-3 rounded-full bg-red-400"></div><div class="w-3 h-3 rounded-full bg-yellow-400"></div><div class="w-3 h-3 rounded-full bg-green-400"></div></div>
                    <div class="px-3 py-1 rounded-full bg-zinc-100 dark:bg-white/10 text-[11px] font-mono">app/Http/Controllers/ProjectController.php</div>
                </div>
                <div class="space-y-6 font-mono text-[13px] leading-6">
                    <div class="text-zinc-500">// Clean, testable, timeless</div>
                    <div><span class="text-violet-500">public function</span> <span class="text-zinc-900 dark:text-white font-bold">ship</span>(): <span class="text-emerald-500">Response</span></div>
                    <div class="pl-4 border-l-2 border-brand-500/30 space-y-2 text-zinc-600 dark:text-zinc-400">
                        <div>→ Validate & authorize</div>
                        <div>→ Dispatch jobs & events</div>
                        <div>→ Cache aggressively</div>
                        <div class="text-brand-500">→ Ship premium UX ✨</div>
                    </div>
                </div>
                <div class="mt-10 grid grid-cols-2 gap-3">
                    <div class="rounded-2xl bg-[#f6f3ff] dark:bg-white/[0.04] p-4 border border-violet-200/50 dark:border-white/5">
                        <div class="text-[11px] font-mono text-zinc-500">PERFORMANCE</div>
                        <div class="mt-1 text-[22px] font-bold">0.8s</div><div class="h-1.5 mt-2 rounded-full bg-zinc-200 dark:bg-white/10"><div class="h-full w-[92%] rounded-full bg-brand-500"></div></div>
                    </div>
                    <div class="rounded-2xl bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 p-4">
                        <div class="text-[11px] font-mono opacity-60">UPTIME</div>
                        <div class="mt-1 text-[22px] font-bold">99.9%</div>
                        <div class="text-[11px] mt-1 opacity-60">All systems operational</div>
                    </div>
                </div>
                <div class="absolute -right-10 -bottom-10 w-[200px] h-[200px] rounded-full bg-brand-500 blur-[60px] opacity-20 pointer-events-none"></div>
            </div>

            <!-- Floating badge -->
            <div class="absolute -bottom-6 -left-6 hidden lg:flex items-center gap-3 px-4 py-3 rounded-2xl bg-white dark:bg-zinc-800 border border-zinc-200 dark:border-white/10 shadow-xl">
                <div class="w-10 h-10 rounded-xl bg-zinc-900 dark:bg-white grid place-items-center text-white dark:text-zinc-900">✓</div>
                <div><div class="text-[12px] font-bold">Build Passed</div><div class="text-[11px] font-mono text-zinc-500">23 tests • 0.42s</div></div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    // Typing loop for I am Dr. Timeless
    const phrases = ["I am Dr. Timeless", "I am a Laravel Dev", "I ship fast"];
    let idx=0, char=0, del=false;
    const el=document.getElementById('typed');
    setInterval(()=>{
        if(!el) return;
        if(!del){ el.textContent=phrases[idx].slice(0,++char); if(char===phrases[idx].length){ del=true; setTimeout(()=>del=true,1200);} }
        else { el.textContent=phrases[idx].slice(0,--char); if(char===0){ del=false; idx=(idx+1)%phrases.length; } }
    }, del?40:90);
</script>
@endpush
@endsection