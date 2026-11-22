<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>3Sixteen Photo Cinema — Capturing Timeless Moments</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <style>
    * { scroll-behavior: smooth; }
    body { 
      background-color: #FAFAF8; 
      color: #2D2D2D; 
      font-family: Montserrat, sans-serif;
      letter-spacing: 0.3px;
    }
    .font-serif { font-family: "Cormorant Garamond", serif; font-weight: 300; letter-spacing: 1px; }
    .font-serif-medium { font-family: "Cormorant Garamond", serif; font-weight: 400; }
    .font-serif-bold { font-family: "Cormorant Garamond", serif; font-weight: 500; }
    .text-sm-caps { font-size: 0.65rem; letter-spacing: 2px; text-transform: uppercase; font-weight: 600; }
    .hero-dark { background-color: #2D2D2D; }
  </style>
</head>
<body class="antialiased">

  <!-- NAVBAR -->
  <header class="fixed top-0 w-full bg-white/95 backdrop-blur-sm z-50 border-b border-gray-200/50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
      <a href="#" class="font-serif-medium text-xl tracking-widest">3SIXTEEN</a>
      <nav class="hidden md:flex gap-8 text-sm-caps text-gray-600">
        <a href="#about" class="hover:text-gray-900 transition">About</a>
        <a href="#offerings" class="hover:text-gray-900 transition">Offerings</a>
        <a href="#process" class="hover:text-gray-900 transition">Process</a>
      </nav>
      <a href="#portal" class="text-sm-caps text-gray-700 hover:text-gray-900">Client Portal</a>
    </div>
  </header>

  <!-- HERO -->
  <section class="hero-dark text-white pt-32 pb-20 md:py-40">
    <div class="max-w-4xl mx-auto px-6 text-center space-y-6">
      <h1 class="font-serif text-5xl md:text-7xl leading-tight">The art of being seen beautifully</h1>
      <p class="text-sm-caps text-gray-400">WEDDING, ELOPEMENT & PORTRAIT PHOTOGRAPHER</p>
      <p class="text-base text-gray-300 max-w-2xl mx-auto leading-relaxed">
        Every frame composed with purpose. Every moment captured to last.
      </p>
    </div>
  </section>

  <!-- ABOUT -->
  <section id="about" class="py-20 md:py-28 border-t border-gray-300">
    <div class="max-w-4xl mx-auto px-6 space-y-12">
      <div class="text-center space-y-6">
        <h2 class="font-serif text-4xl md:text-5xl">THE ART BEHIND MY WORK</h2>
        <div class="w-12 h-px bg-gray-400 mx-auto"></div>
      </div>

      <div class="grid md:grid-cols-3 gap-8">
        <div class="text-center space-y-3">
          <p class="font-serif-medium text-2xl">Artful Composition</p>
          <p class="text-sm text-gray-600 leading-relaxed">
            Every element is thoughtfully arranged. From framing to lighting, nothing is left to chance.
          </p>
        </div>
        <div class="text-center space-y-3">
          <p class="font-serif-medium text-2xl">Cinematic Posing</p>
          <p class="text-sm text-gray-600 leading-relaxed">
            Guided, natural, and artfully composed. Movement-based direction that feels effortless.
          </p>
        </div>
        <div class="text-center space-y-3">
          <p class="font-serif-medium text-2xl">Timeless Aesthetic</p>
          <p class="text-sm text-gray-600 leading-relaxed">
            Imagery that transcends trends. Moments that feel deliberate, elegant, and enduring.
          </p>
        </div>
      </div>

      <div class="bg-gray-100 p-8 md:p-12 text-center space-y-4">
        <p class="font-serif text-2xl italic">"Working with 3Sixteen was nothing short of magical."</p>
        <p class="text-sm text-gray-600">— BROOKE & PAULO</p>
        <p class="text-xs text-gray-500">
          From the very first moment, she made us feel completely at ease. She guided us with a gentle, intuitive hand.
        </p>
      </div>
    </div>
  </section>

  <!-- OFFERINGS -->
  <section id="offerings" class="py-20 md:py-28 border-t border-gray-300">
    <div class="max-w-6xl mx-auto px-6">
      <div class="text-center mb-16 space-y-6">
        <h2 class="font-serif text-4xl md:text-5xl">THE OFFERINGS</h2>
        <div class="w-12 h-px bg-gray-400 mx-auto"></div>
        <p class="text-sm text-gray-600 max-w-2xl mx-auto">Every session designed with intention, artistry, and editorial precision.</p>
      </div>

      <!-- Weddings -->
      <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
        <div>
          <p class="text-sm-caps text-gray-500 mb-3">TO HAVE AND TO HOLD</p>
          <h3 class="font-serif text-4xl mb-6">Weddings</h3>
          <p class="text-sm text-gray-700 leading-relaxed mb-6">Your wedding day is a story in motion — every frame carefully composed to feel timeless, elevated, and uniquely yours. I guide each moment with purpose, capturing cinematic portraits and artful details that are deliberate yet effortless.</p>
          <ul class="space-y-3 text-sm text-gray-600 mb-8">
            <li>✓ Full-day coverage</li>
            <li>✓ High-resolution images in private gallery</li>
            <li>✓ Pre-wedding consultation & styling guidance</li>
            <li>✓ Optional: albums, prints, second shooter</li>
          </ul>
          <a href="#portal" class="inline-block text-sm-caps text-gray-900 border-b border-gray-900 hover:text-gray-600 pb-1">Inquire</a>
        </div>
        <div class="bg-gradient-to-br from-gray-200 to-gray-300 h-96 rounded flex items-center justify-center text-gray-500 text-sm">[Wedding Gallery]</div>
      </div>

      <!-- Elopements -->
      <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
        <div class="bg-gradient-to-br from-gray-200 to-gray-300 h-96 rounded flex items-center justify-center text-gray-500 text-sm">[Elopement Gallery]</div>
        <div>
          <h3 class="font-serif text-4xl mb-6">Elopements</h3>
          <p class="text-sm text-gray-700 leading-relaxed mb-6">Your elopement is a quiet kind of magic — intimate, intentional, and full of meaning. I'll capture the essence of your day with artful approach, composing each frame to feel timeless, cinematic, and deeply personal.</p>
          <ul class="space-y-3 text-sm text-gray-600 mb-8">
            <li>✓ Up to six hours of coverage</li>
            <li>✓ High-resolution images in private gallery</li>
            <li>✓ Location & timeline guidance</li>
            <li>✓ Optional: extended coverage, travel, heirloom albums</li>
          </ul>
          <a href="#portal" class="inline-block text-sm-caps text-gray-900 border-b border-gray-900 hover:text-gray-600 pb-1">Inquire</a>
        </div>
      </div>

      <!-- Portraits -->
      <div class="grid md:grid-cols-2 gap-12 items-center">
        <div>
          <h3 class="font-serif text-4xl mb-6">Portraits</h3>
          <p class="text-sm text-gray-700 leading-relaxed mb-6">Portraits are where art and presence meet — guided, refined, and created with purpose. Every session is carefully directed to feel natural yet composed, resulting in images that feel effortlessly editorial.</p>
          <ul class="space-y-3 text-sm text-gray-600 mb-8">
            <li>✓ One-hour session</li>
            <li>✓ High-resolution images in private gallery</li>
            <li>✓ Styling or location guidance</li>
            <li>✓ Optional: extended time, outfit changes, prints</li>
          </ul>
          <a href="#portal" class="inline-block text-sm-caps text-gray-900 border-b border-gray-900 hover:text-gray-600 pb-1">Inquire</a>
        </div>
        <div class="bg-gradient-to-br from-gray-200 to-gray-300 h-96 rounded flex items-center justify-center text-gray-500 text-sm">[Portrait Gallery]</div>
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section id="process" class="py-20 md:py-28 bg-gray-50 border-t border-gray-300">
    <div class="max-w-4xl mx-auto px-6">
      <div class="text-center mb-16 space-y-6">
        <h2 class="font-serif text-4xl md:text-5xl">THE BOOKING PROCESS</h2>
        <div class="w-12 h-px bg-gray-400 mx-auto"></div>
        <p class="text-sm text-gray-600">From first inquiry to final delivery, every step is crafted with care.</p>
      </div>

      <div class="space-y-8">
        <div class="flex gap-6">
          <div class="text-sm-caps text-gray-400 font-serif-bold text-lg min-w-fit">01</div>
          <div class="pb-8 border-l border-gray-300 pl-6">
            <h3 class="font-serif-medium text-xl mb-2">Submit Your Inquiry</h3>
            <p class="text-sm text-gray-600">Fill out the inquiry form with details about your day or session. I'll be in touch within 1–2 business days.</p>
          </div>
        </div>
        <div class="flex gap-6">
          <div class="text-sm-caps text-gray-400 font-serif-bold text-lg min-w-fit">02</div>
          <div class="pb-8 border-l border-gray-300 pl-6">
            <h3 class="font-serif-medium text-xl mb-2">Let's Connect</h3>
            <p class="text-sm text-gray-600">We'll schedule a brief call to discuss your vision, expectations, and aesthetic to ensure we're the right fit.</p>
          </div>
        </div>
        <div class="flex gap-6">
          <div class="text-sm-caps text-gray-400 font-serif-bold text-lg min-w-fit">03</div>
          <div class="pb-8 border-l border-gray-300 pl-6">
            <h3 class="font-serif-medium text-xl mb-2">Secure Your Date</h3>
            <p class="text-sm text-gray-600">You'll receive a custom proposal. Once signed and retainer paid, your date is reserved.</p>
          </div>
        </div>
        <div class="flex gap-6">
          <div class="text-sm-caps text-gray-400 font-serif-bold text-lg min-w-fit">04</div>
          <div class="pb-8 border-l border-gray-300 pl-6">
            <h3 class="font-serif-medium text-xl mb-2">Curate the Details</h3>
            <p class="text-sm text-gray-600">We'll refine every detail — wardrobe, lighting, poses, location — for intentional, editorial images.</p>
          </div>
        </div>
        <div class="flex gap-6">
          <div class="text-sm-caps text-gray-400 font-serif-bold text-lg min-w-fit">05</div>
          <div class="pb-8 border-l border-gray-300 pl-6">
            <h3 class="font-serif-medium text-xl mb-2">The Day Of</h3>
            <p class="text-sm text-gray-600">Expect gentle direction, calm energy, and an artful eye. I'll guide each moment with care to capture cinematic frames.</p>
          </div>
        </div>
        <div class="flex gap-6">
          <div class="text-sm-caps text-gray-400 font-serif-bold text-lg min-w-fit">06</div>
          <div class="border-l border-gray-300 pl-6">
            <h3 class="font-serif-medium text-xl mb-2">Your Gallery Awaits</h3>
            <p class="text-sm text-gray-600">You'll receive your final, edited gallery through a private link — ready to share and relive for years.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="py-20 md:py-28 border-t border-gray-300">
    <div class="max-w-4xl mx-auto px-6">
      <div class="text-center mb-16 space-y-6">
        <h2 class="font-serif text-4xl md:text-5xl">YOUR QUESTIONS, ANSWERED</h2>
        <div class="w-12 h-px bg-gray-400 mx-auto"></div>
      </div>

      <div class="space-y-6">
        <details class="group border-b border-gray-200 pb-6">
          <summary class="flex items-center justify-between cursor-pointer py-3">
            <span class="font-serif-medium text-lg">How far in advance should we book?</span>
            <span class="text-gray-400 group-open:rotate-180 transition">↓</span>
          </summary>
          <p class="text-sm text-gray-600 leading-relaxed pt-4 pl-4">I recommend securing your date as soon as it's set. Many couples book 9–12 months in advance, especially for weekends or peak seasons. Early booking ensures availability and allows time to plan thoughtfully.</p>
        </details>
        <details class="group border-b border-gray-200 pb-6">
          <summary class="flex items-center justify-between cursor-pointer py-3">
            <span class="font-serif-medium text-lg">Do you travel for weddings?</span>
            <span class="text-gray-400 group-open:rotate-180 transition">↓</span>
          </summary>
          <p class="text-sm text-gray-600 leading-relaxed pt-4 pl-4">Absolutely. I love capturing love stories wherever they unfold — from intimate local settings to destination celebrations. Travel logistics and costs are typically included in your package or listed as an add-on.</p>
        </details>
        <details class="group border-b border-gray-200 pb-6">
          <summary class="flex items-center justify-between cursor-pointer py-3">
            <span class="font-serif-medium text-lg">How many images will we receive?</span>
            <span class="text-gray-400 group-open:rotate-180 transition">↓</span>
          </summary>
          <p class="text-sm text-gray-600 leading-relaxed pt-4 pl-4">Every wedding and portrait session is unique, but you can expect a carefully curated gallery of high-resolution images that fully tells your story. I prioritize quality over quantity.</p>
        </details>
        <details class="group border-b border-gray-200 pb-6">
          <summary class="flex items-center justify-between cursor-pointer py-3">
            <span class="font-serif-medium text-lg">When will we receive our gallery?</span>
            <span class="text-gray-400 group-open:rotate-180 transition">↓</span>
          </summary>
          <p class="text-sm text-gray-600 leading-relaxed pt-4 pl-4">Wedding galleries are typically delivered within 8–12 weeks, and portrait sessions within 3–4 weeks. Each image is thoughtfully edited to meet my cinematic and editorial standards.</p>
        </details>
        <details class="group border-b border-gray-200 pb-6">
          <summary class="flex items-center justify-between cursor-pointer py-3">
            <span class="font-serif-medium text-lg">Can you help with posing?</span>
            <span class="text-gray-400 group-open:rotate-180 transition">↓</span>
          </summary>
          <p class="text-sm text-gray-600 leading-relaxed pt-4 pl-4">Absolutely — I guide every moment to feel natural, confident, and artfully composed. My approach blends gentle direction with freedom, so your images feel effortless yet intentional.</p>
        </details>
        <details class="group border-b border-gray-200 pb-6">
          <summary class="flex items-center justify-between cursor-pointer py-3">
            <span class="font-serif-medium text-lg">Do you offer albums or prints?</span>
            <span class="text-gray-400 group-open:rotate-180 transition">↓</span>
          </summary>
          <p class="text-sm text-gray-600 leading-relaxed pt-4 pl-4">Yes! I offer fine art albums and professional prints as optional add-ons. Each piece is carefully crafted to preserve your images beautifully, creating heirloom-quality keepsakes.</p>
        </details>
        <details class="group border-b border-gray-200 pb-6">
          <summary class="flex items-center justify-between cursor-pointer py-3">
            <span class="font-serif-medium text-lg">What if we're awkward in front of the camera?</span>
            <span class="text-gray-400 group-open:rotate-180 transition">↓</span>
          </summary>
          <p class="text-sm text-gray-600 leading-relaxed pt-4 pl-4">Almost everyone feels that way at first — and that's completely okay. My approach is guided, but never stiff. I'll offer direction that feels natural and movement-based so you can focus on each other.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-20 md:py-28 hero-dark text-white border-t border-gray-300">
    <div class="max-w-4xl mx-auto px-6 text-center space-y-8">
      <h2 class="font-serif text-4xl md:text-5xl">I'd love to hear your story</h2>
      <p class="text-base text-gray-300 max-w-2xl mx-auto">
        Let's capture the moments that matter most. Access your client portal to manage your session, track progress, select photos, and handle payments all in one place.
      </p>
      <div class="flex gap-4 justify-center flex-wrap pt-6">
        <a href="#portal" class="px-8 py-3 bg-white text-gray-900 font-medium text-sm uppercase tracking-wide hover:bg-gray-100 transition">
          Client Portal
        </a>
        <a href="https://wa.me/{{ env('STUDIO_WHATSAPP') }}" class="px-8 py-3 border border-white text-white font-medium text-sm uppercase tracking-wide hover:bg-white/10 transition">
          Get in Touch
        </a>
      </div>
    </div>
  </section>

  <!-- PORTAL -->
  <section id="portal" class="py-20 md:py-28 border-t border-gray-300">
    <div class="max-w-4xl mx-auto px-6">
      <div class="bg-gray-100 rounded overflow-hidden">
        <div class="grid md:grid-cols-2">
          <!-- INFO -->
          <div class="bg-gradient-to-br from-gray-800 to-gray-900 text-white p-8 md:p-12 flex flex-col justify-center">
            <div class="space-y-8">
              <div>
                <p class="text-sm-caps text-gray-400 mb-2">Client Hub</p>
                <h3 class="font-serif text-3xl mb-4">Manage Your Session</h3>
                <p class="text-sm text-gray-300 leading-relaxed">
                  Access your personal portal to track progress, select photos for editing and albums, download final files, and manage payments — all in one secure place.
                </p>
              </div>

              <div class="space-y-4 pt-8 border-t border-gray-700">
                <div class="flex gap-3">
                  <span class="text-lg">✓</span>
                  <div>
                    <p class="text-sm font-medium">Progress Tracking</p>
                    <p class="text-xs text-gray-400">Follow your project from registration to final delivery</p>
                  </div>
                </div>
                <div class="flex gap-3">
                  <span class="text-lg">✓</span>
                  <div>
                    <p class="text-sm font-medium">Photo Selection</p>
                    <p class="text-xs text-gray-400">Choose which photos to edit and include in your album</p>
                  </div>
                </div>
                <div class="flex gap-3">
                  <span class="text-lg">✓</span>
                  <div>
                    <p class="text-sm font-medium">Download & Payment</p>
                    <p class="text-xs text-gray-400">Access your final gallery and confirm payment details</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- FORMS -->
          <div class="p-8 md:p-12 bg-white">
            <div class="flex gap-6 mb-8 border-b border-gray-200">
              <button onclick="switchTab('login')" id="tab-login" class="pb-3 text-sm-caps border-b-2 border-gray-900 cursor-pointer">Login</button>
              <button onclick="switchTab('register')" id="tab-register" class="pb-3 text-sm-caps border-b-2 border-transparent text-gray-500 cursor-pointer hover:text-gray-900">Register</button>
              <button onclick="switchTab('demo')" id="tab-demo" class="pb-3 text-sm-caps border-b-2 border-transparent text-gray-500 cursor-pointer hover:text-gray-900">Demo</button>
            </div>

            <!-- LOGIN -->
            <div id="form-login" class="auth-form space-y-4">
              <form action="{{ route('client.login') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                  <label class="block text-xs font-medium text-gray-700 mb-2">Email</label>
                  <input type="email" name="email" placeholder="your@email.com" class="w-full px-4 py-2 border border-gray-300 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-gray-900" required />
                </div>
                <div>
                  <label class="block text-xs font-medium text-gray-700 mb-2">Password</label>
                  <input type="password" name="password" placeholder="Enter your password" class="w-full px-4 py-2 border border-gray-300 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-gray-900" required />
                </div>
                @if ($errors->has('login_error'))
                  <div class="p-3 bg-red-50 border border-red-200 text-xs text-red-700">{{ $errors->first('login_error') }}</div>
                @endif
                <button type="submit" class="w-full py-2 bg-gray-900 text-white text-sm font-medium uppercase tracking-wide hover:bg-gray-800 transition">Sign In</button>
                @if (session('status'))
                  <div class="p-3 bg-green-50 border border-green-200 text-xs text-green-700">{{ session('status') }}</div>
                @endif
                @if (session('registered_credentials'))
                  <div class="p-3 bg-gray-50 border border-gray-300 text-xs text-gray-800">
                    <p><strong>Email:</strong> {{ session('registered_credentials.email') }}</p>
                    <p><strong>Sandi:</strong> {{ session('registered_credentials.password') }}</p>
                  </div>
                @endif
              </form>
            </div>

            <!-- REGISTER (truncated for brevity - full version same as before) -->
            <div id="form-register" class="auth-form hidden">
              <form action="{{ route('client.register') }}" method="POST" class="space-y-3 max-h-80 overflow-y-auto pr-3">
                @csrf
                <input type="text" name="partner_one_name" placeholder="Full name" class="w-full px-3 py-2 border border-gray-300 text-sm focus:ring-2 focus:ring-gray-900" required />
                <input type="text" name="partner_one_whatsapp" placeholder="WhatsApp number" class="w-full px-3 py-2 border border-gray-300 text-sm focus:ring-2 focus:ring-gray-900" required />
                <input type="email" name="email" placeholder="Email for login" class="w-full px-3 py-2 border border-gray-300 text-sm focus:ring-2 focus:ring-gray-900" required />
                <select name="session_type" class="w-full px-3 py-2 border border-gray-300 text-sm focus:ring-2 focus:ring-gray-900" id="session-type" onchange="toggleOtherSession()" required>
                  <option value="">Select Session Type</option>
                  @foreach ($sessionTypes as $type)
                    <option value="{{ $type }}">{{ $type }}</option>
                  @endforeach
                </select>
                <input type="text" name="session_other" placeholder="Other type" id="session-other" class="w-full px-3 py-2 border border-gray-300 text-sm focus:ring-2 focus:ring-gray-900 hidden" />
                <input type="date" name="event_date" class="w-full px-3 py-2 border border-gray-300 text-sm focus:ring-2 focus:ring-gray-900" />
                <input type="text" name="event_location" placeholder="Event location" class="w-full px-3 py-2 border border-gray-300 text-sm focus:ring-2 focus:ring-gray-900" />
                <button type="submit" class="w-full py-2 bg-gray-900 text-white text-sm font-medium uppercase tracking-wide hover:bg-gray-800 transition">Create Account</button>
              </form>
            </div>

            <!-- DEMO -->
            <div id="form-demo" class="auth-form hidden text-center space-y-4">
              <p class="text-sm text-gray-600">Explore the portal with our demo account.</p>
              <div class="bg-gray-50 border border-gray-200 p-4 text-left space-y-2">
                <p class="text-xs"><strong>Email:</strong> <code class="bg-white px-2 py-1 rounded text-[11px]">klien@3sixteen.id</code></p>
                <p class="text-xs"><strong>Password:</strong> <code class="bg-white px-2 py-1 rounded text-[11px]">316DEMO</code></p>
              </div>
              <form action="{{ route('client.login') }}" method="POST">
                @csrf
                <input type="hidden" name="email" value="klien@3sixteen.id" />
                <input type="hidden" name="password" value="316DEMO" />
                <button type="submit" class="w-full py-2 bg-gray-900 text-white text-sm font-medium uppercase tracking-wide hover:bg-gray-800 transition">Enter Demo</button>
              </form>
              <p class="text-xs text-gray-500 border-t border-gray-200 pt-4">The demo shows a project in photo selection & editing phase.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="bg-gray-900 text-gray-300 py-16 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
        <div>
          <span class="font-serif-medium text-lg tracking-widest">3SIXTEEN</span>
          <p class="text-xs text-gray-500 mt-3 leading-relaxed">Professional photography capturing moments with intention, artistry, and editorial precision.</p>
        </div>
        <div>
          <p class="text-xs font-medium uppercase tracking-wider mb-4">Offerings</p>
          <ul class="space-y-2 text-xs text-gray-500">
            <li><a href="#offerings" class="hover:text-gray-300 transition">Weddings</a></li>
            <li><a href="#offerings" class="hover:text-gray-300 transition">Elopements</a></li>
            <li><a href="#offerings" class="hover:text-gray-300 transition">Portraits</a></li>
          </ul>
        </div>
        <div>
          <p class="text-xs font-medium uppercase tracking-wider mb-4">Contact</p>
          <ul class="space-y-2 text-xs text-gray-500">
            <li>WhatsApp: {{ env('STUDIO_WHATSAPP', '+6287770860661') }}</li>
            <li>Owner: {{ env('STUDIO_OWNER', 'Geraldy Antonius') }}</li>
            <li>Bogor, Indonesia</li>
          </ul>
        </div>
        <div>
          <p class="text-xs font-medium uppercase tracking-wider mb-4">Payment</p>
          <ul class="space-y-2 text-xs text-gray-500">
            <li>{{ env('STUDIO_BANK_NAME', 'BCA KCU Bogor') }}</li>
            <li>a.n. {{ env('STUDIO_BANK_HOLDER', 'Geraldy Antonius') }}</li>
          </ul>
        </div>
      </div>
      <div class="border-t border-gray-800 pt-8 text-center text-xs text-gray-500">
        <p>&copy; 2026 3Sixteen Photo Cinema. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script>
    function switchTab(tabName) {
      document.querySelectorAll('\.auth-form').forEach(f => f.classList.add('hidden'));
      document.querySelectorAll('[id^="tab-"]').forEach(t => { t.classList.remove('border-b-2', 'border-gray-900'); t.classList.add('border-transparent', 'text-gray-500'); });
      document.getElementById('form-' + tabName).classList.remove('hidden');
      document.getElementById('tab-' + tabName).classList.remove('border-transparent', 'text-gray-500');
      document.getElementById('tab-' + tabName).classList.add('border-b-2', 'border-gray-900');
    }
    function toggleOtherSession() {
      const sel = document.getElementById('session-type');
      const inp = document.getElementById('session-other');
      if (sel.value === 'Lainnya') { inp.classList.remove('hidden'); inp.required = true; } 
      else { inp.classList.add('hidden'); inp.required = false; }
    }
  </script>
</body>
</html>
