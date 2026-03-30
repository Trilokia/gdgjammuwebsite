<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Build with AI Workshop — GDG Jammu</title>
  <meta name="description"
    content="Build your developer portfolio with AI at University of Jammu. Workshop by GDG Jammu." />
  <meta name="keywords" content="GDG Jammu, Google Developer Group Jammu, Build with AI, Workshop" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=DM+Mono:wght@400;500&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://gdgjammu.com/css/style.css" />
  <link rel="stylesheet" href="https://gdgjammu.com/css/workshop.css" />

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="57x57" href="https://gdgjammu.com/images/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="https://gdgjammu.com/images/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="https://gdgjammu.com/images/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="https://gdgjammu.com/images/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="https://gdgjammu.com/images/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="https://gdgjammu.com/images/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="https://gdgjammu.com/images/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="https://gdgjammu.com/images/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="https://gdgjammu.com/images/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="https://gdgjammu.com/images/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="https://gdgjammu.com/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="https://gdgjammu.com/images/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="https://gdgjammu.com/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="https://gdgjammu.com/images/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="https://gdgjammu.com/images/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <script src="https://kit.fontawesome.com/8cb3487569.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
</head>

<body>

  <?php
  $base_url = 'https://gdgjammu.com';
  include '../header.php';
  ?>

  <main>
    <div class="container">
      <?php include '../banner.php'; ?>

      <!-- ========================  HERO SECTION  ======================== -->

      <section class="hero">
        <div class="hero-text">
          <h3 class="hero-text-title">
            Build with AI Workshop
          </h3>
          <p class="hero-text-body">
            Create your personal developer portfolio using Google Stitch and Antigravity IDE — and deploy it live. No
            prior AI experience needed.
          </p>
          <a class="hero-text-button" href="#setup">Get Started</a>
        </div>
        <div class="hero-img">
          <video autoplay muted loop playsinline
            style="margin-left:auto; margin-right:auto; max-width:100%; border-radius:12px;">
            <source src="https://gdgjammu.com/BWAI26_Intro.mp4" type="video/mp4">
          </video>
        </div>
      </section>


      <!-- ========================  WHAT YOU'LL BUILD  ======================== -->

      <hr class="ws-divider">
      <section class="ws-sec" data-reveal>
        <div class="ws-sec__label">Outcome</div>
        <h2 class="ws-sec__title">What you'll walk away with</h2>
        <div class="ws-learn-grid">
          <div class="ws-learn-item">
            <div class="ws-learn-item__title">Your own portfolio</div>
            <div class="ws-learn-item__desc">A fully customized, AI-generated developer portfolio website — uniquely
              yours.</div>
          </div>
          <div class="ws-learn-item">
            <div class="ws-learn-item__title">Live on the web</div>
            <div class="ws-learn-item__desc">Deployed on GitHub Pages at yourname.github.io — accessible to anyone,
              anywhere.</div>
          </div>
          <div class="ws-learn-item">
            <div class="ws-learn-item__title">Community showcase</div>
            <div class="ws-learn-item__desc">Featured on the GDG Jammu community page at gdgjammu.com/community.</div>
          </div>
          <div class="ws-learn-item">
            <div class="ws-learn-item__title">Google badge</div>
            <div class="ws-learn-item__desc">Official Build with AI badge on your Google Developer Profile.</div>
          </div>
          <div class="ws-learn-item">
            <div class="ws-learn-item__title">AI resume generator</div>
            <div class="ws-learn-item__desc">Bonus: an AI-powered tool that tailors your resume to any job description.
            </div>
          </div>
          <div class="ws-learn-item">
            <div class="ws-learn-item__title">Installable PWA</div>
            <div class="ws-learn-item__desc">Your portfolio works offline and installs like an app on phones.</div>
          </div>
        </div>
      </section>


      <!-- ========================  TOOLS  ======================== -->

      <hr class="ws-divider">
      <section class="ws-sec ws-sec--alt" id="tools" data-reveal>
        <div class="ws-sec__label">Tools</div>
        <h2 class="ws-sec__title">What we'll use</h2>
        <p class="ws-sec__desc">Two Google tools that let you build production-grade apps with AI — no boilerplate, no
          setup headaches.</p>

        <div class="ws-tools">
          <div class="ws-tool-card">
            <span class="ws-tool-card__badge ws-tool-card__badge--stitch">Design to Code</span>
            <h3 class="ws-tool-card__name">Google Stitch</h3>
            <p class="ws-tool-card__desc">
              A prototyping tool that turns natural language descriptions into fully functional web applications.
              Describe the portfolio you want — Stitch generates production-ready code instantly.
            </p>
            <ul class="ws-tool-card__features">
              <li>Generate complete web pages from text prompts</li>
              <li>Iterate designs by refining your description</li>
              <li>Export clean, deployable HTML/CSS/JS</li>
              <li>Prototype in minutes, not hours</li>
            </ul>
          </div>
          <div class="ws-tool-card">
            <span class="ws-tool-card__badge ws-tool-card__badge--antigravity">AI-Native Editor</span>
            <h3 class="ws-tool-card__name">Antigravity IDE</h3>
            <p class="ws-tool-card__desc">
              Google's AI-native code editor that understands your entire project context.
              Customize your Stitch output — tweak styles, add features, debug, and push to GitHub.
            </p>
            <ul class="ws-tool-card__features">
              <li>AI-assisted code editing and suggestions</li>
              <li>Debug with natural language explanations</li>
              <li>Add features by describing what you want</li>
              <li>Built-in Git and GitHub integration</li>
            </ul>
          </div>
        </div>
      </section>


      <!-- ========================  SETUP CHECKLIST  ======================== -->

      <hr class="ws-divider">
      <section class="ws-sec" id="setup" data-reveal>
        <div class="ws-sec__label">Before the workshop</div>
        <h2 class="ws-sec__title">Setup checklist</h2>
        <p class="ws-sec__desc">Complete these steps before arriving. This saves time and ensures you can start building
          immediately.</p>

        <div class="ws-checklist">
          <div class="ws-check-item" onclick="this.classList.toggle('done')">
            <div class="ws-check-box"></div>
            <div class="ws-check-info">
              <strong>Create a Google Account</strong>
              <span>Required for Stitch, Antigravity, and Cloud credits — </span>
              <a href="https://accounts.google.com" target="_blank" rel="noopener">accounts.google.com</a>
            </div>
          </div>
          <div class="ws-check-item" onclick="this.classList.toggle('done')">
            <div class="ws-check-box"></div>
            <div class="ws-check-info">
              <strong>Create a GitHub Account</strong>
              <span>You'll host your portfolio here — </span>
              <a href="https://github.com/signup" target="_blank" rel="noopener">github.com/signup</a>
            </div>
          </div>
          <div class="ws-check-item" onclick="this.classList.toggle('done')">
            <div class="ws-check-box"></div>
            <div class="ws-check-info">
              <strong>Download Antigravity IDE</strong>
              <span>The AI code editor we'll use for customization — </span>
              <a href="https://antigravity.google/download" target="_blank"
                rel="noopener">antigravity.google/download</a>
            </div>
          </div>
          <div class="ws-check-item" onclick="this.classList.toggle('done')">
            <div class="ws-check-box"></div>
            <div class="ws-check-info">
              <strong>Install Git</strong>
              <span>Version control for pushing code to GitHub — </span>
              <a href="https://git-scm.com/downloads" target="_blank" rel="noopener">git-scm.com/downloads</a>
            </div>
          </div>
          <div class="ws-check-item" onclick="this.classList.toggle('done')">
            <div class="ws-check-box"></div>
            <div class="ws-check-info">
              <strong>Claim Free Google Cloud Credits</strong>
              <span>Redeem before the workshop — </span>
              <a href="https://trygcp.dev/claim/design-to-code-with-antigravity-and-stitch-mcp#vf=6qd" target="_blank"
                rel="noopener">Claim credits</a>
            </div>
          </div>
          <div class="ws-check-item" onclick="this.classList.toggle('done')">
            <div class="ws-check-box"></div>
            <div class="ws-check-info">
              <strong>Install Google Chrome</strong>
              <span>Recommended browser for best compatibility — </span>
              <a href="https://google.com/chrome" target="_blank" rel="noopener">google.com/chrome</a>
            </div>
          </div>
        </div>

        <p class="ws-note">
          System requirements: Any laptop (Windows / macOS / Linux / ChromeOS), stable internet, 2 GB free disk space.
        </p>
      </section>


      <!-- ========================  QR CODES / QUICK LINKS  ======================== -->

      <hr class="ws-divider">
      <section class="ws-sec ws-sec--alt" id="links" data-reveal>
        <div class="ws-sec__label">Quick access</div>
        <h2 class="ws-sec__title">Scan or click</h2>
        <p class="ws-sec__desc">Use these QR codes on the projector — attendees can scan directly from their seats.</p>

        <div class="ws-qr-grid">
          <div class="ws-qr-card">
            <div class="ws-qr-card__label" style="color:var(--g-blue)">Starter Repo</div>
            <div class="ws-qr-card__code" id="qr-repo"></div>
            <div class="ws-qr-card__link">github.com/GDG-Jammu/build-with-ai-portfolio</div>
            <a href="https://github.com/GDG-Jammu/build-with-ai-portfolio" target="_blank"
              class="ws-qr-card__btn ws-qr-card__btn--primary">Fork Repository</a>
          </div>

          <div class="ws-qr-card">
            <div class="ws-qr-card__label" style="color:var(--g-green)">Antigravity IDE</div>
            <div class="ws-qr-card__code" id="qr-antigravity"></div>
            <div class="ws-qr-card__link">antigravity.google/download</div>
            <a href="https://antigravity.google/download" target="_blank" class="ws-qr-card__btn">Download</a>
          </div>

          <div class="ws-qr-card">
            <div class="ws-qr-card__label" style="color:var(--g-yellow)">Cloud Credits</div>
            <div class="ws-qr-card__code" id="qr-credits"></div>
            <div class="ws-qr-card__link">Free Google Cloud credits for attendees</div>
            <a href="https://trygcp.dev/claim/design-to-code-with-antigravity-and-stitch-mcp#vf=6qd" target="_blank"
              class="ws-qr-card__btn">Claim Credits</a>
          </div>

          <div class="ws-qr-card">
            <div class="ws-qr-card__label" style="color:var(--g-red)">Profile Badge</div>
            <div class="ws-qr-card__code" id="qr-badge"></div>
            <div class="ws-qr-card__link">Build with AI — Google Developer Profile badge</div>
            <a href="http://goo.gle/bwai-attendee-2026" target="_blank" class="ws-qr-card__btn">Claim Badge</a>
          </div>
        </div>
      </section>


      <!-- ========================  WORKSHOP SCHEDULE  ======================== -->

      <hr class="ws-divider">
      <section class="ws-sec" id="schedule" data-reveal>
        <div class="ws-sec__label">Schedule</div>
        <h2 class="ws-sec__title">Workshop timeline</h2>
        <p class="ws-sec__desc">Four phases, each building on the last. You'll have a live portfolio by Phase 3.</p>

        <div class="ws-timeline">
          <div class="ws-tl-item">
            <div class="ws-tl-dot">
              <div class="ws-tl-dot__inner"></div>
            </div>
            <div class="ws-tl-time">Phase 1 — 45 minutes</div>
            <div class="ws-tl-title">Generate with Stitch</div>
            <div class="ws-tl-desc">Open Google Stitch and describe the portfolio you want. Pick your style, colors,
              layout. Add your name, bio, skills, and projects. Stitch generates production-ready code — export it.
            </div>
          </div>
          <div class="ws-tl-item">
            <div class="ws-tl-dot">
              <div class="ws-tl-dot__inner"></div>
            </div>
            <div class="ws-tl-time">Phase 2 — 30 minutes</div>
            <div class="ws-tl-title">Customize in Antigravity</div>
            <div class="ws-tl-desc">Open your exported code in Antigravity IDE. Tweak the design, fix details, add
              sections, and polish it until it feels truly yours. Use AI assist to add features faster.</div>
          </div>
          <div class="ws-tl-item">
            <div class="ws-tl-dot">
              <div class="ws-tl-dot__inner"></div>
            </div>
            <div class="ws-tl-time">Phase 3 — 20 minutes</div>
            <div class="ws-tl-title">Deploy to GitHub Pages</div>
            <div class="ws-tl-desc">Fork the starter repo, replace the placeholder with your portfolio code, push to
              GitHub, and enable Pages. Your site is now live at yourname.github.io — show the world.</div>
          </div>
          <div class="ws-tl-item">
            <div class="ws-tl-dot">
              <div class="ws-tl-dot__inner"></div>
            </div>
            <div class="ws-tl-time">Phase 4 — 25 minutes</div>
            <div class="ws-tl-title">Showcase + Bonus</div>
            <div class="ws-tl-desc">Submit your portfolio to the GDG Jammu Community Showcase. Bonus: add an AI-powered
              resume generator that tailors your resume to any job description.</div>
          </div>
        </div>
      </section>


      <!-- ========================  WHAT YOU'LL LEARN  ======================== -->

      <hr class="ws-divider">
      <section class="ws-sec ws-sec--alt" data-reveal>
        <div class="ws-sec__label">Skills</div>
        <h2 class="ws-sec__title">What you'll learn</h2>
        <div class="ws-learn-grid">
          <div class="ws-learn-item">
            <div class="ws-learn-item__title">AI-assisted development</div>
            <div class="ws-learn-item__desc">Use Stitch and Antigravity to build real applications with AI.</div>
          </div>
          <div class="ws-learn-item">
            <div class="ws-learn-item__title">Web fundamentals</div>
            <div class="ws-learn-item__desc">Understand HTML, CSS, and JavaScript structure — even when AI writes it.
            </div>
          </div>
          <div class="ws-learn-item">
            <div class="ws-learn-item__title">Git and GitHub</div>
            <div class="ws-learn-item__desc">Version control basics — forking, committing, and pushing code.</div>
          </div>
          <div class="ws-learn-item">
            <div class="ws-learn-item__title">GitHub Pages</div>
            <div class="ws-learn-item__desc">Free static site hosting and deployment in minutes.</div>
          </div>
          <div class="ws-learn-item">
            <div class="ws-learn-item__title">Prompt engineering</div>
            <div class="ws-learn-item__desc">How to describe what you want so AI builds it right.</div>
          </div>
          <div class="ws-learn-item">
            <div class="ws-learn-item__title">AI API integration</div>
            <div class="ws-learn-item__desc">How apps communicate with AI models — the bonus resume feature.</div>
          </div>
        </div>
      </section>


      <!-- ========================  FAQ  ======================== -->

      <hr class="ws-divider">
      <section class="ws-sec" data-reveal>
        <div class="ws-sec__label">Help</div>
        <h2 class="ws-sec__title">Troubleshooting</h2>
        <p class="ws-sec__desc">Common issues and quick fixes. If you're stuck during the workshop, raise your hand —
          mentors are here to help.</p>

        <div>
          <div class="ws-faq-item" onclick="this.classList.toggle('open')">
            <div class="ws-faq-q">GitHub Pages not showing my site</div>
            <div class="ws-faq-a">
              <p>Go to your repo Settings, then Pages. Make sure the source is set to the main branch. Wait 2-3 minutes
                for GitHub to build. Check that your file is named index.html (not Index.html or home.html).</p>
            </div>
          </div>
          <div class="ws-faq-item" onclick="this.classList.toggle('open')">
            <div class="ws-faq-q">Git push is failing</div>
            <div class="ws-faq-a">
              <p>Make sure you forked the repo (not just cloned the original). Check that you're pushing to your fork by
                running git remote -v — it should show your username. If using HTTPS, GitHub may ask for a Personal
                Access Token instead of a password.</p>
            </div>
          </div>
          <div class="ws-faq-item" onclick="this.classList.toggle('open')">
            <div class="ws-faq-q">Antigravity won't install</div>
            <div class="ws-faq-a">
              <p>Check system requirements at antigravity.google/download. On Windows, try running as Administrator. On
                Mac, allow it in System Preferences under Security and Privacy. Fallback: use VS Code with GitHub
                Copilot as an alternative.</p>
            </div>
          </div>
          <div class="ws-faq-item" onclick="this.classList.toggle('open')">
            <div class="ws-faq-q">Stitch isn't generating what I want</div>
            <div class="ws-faq-a">
              <p>Be specific in your prompts. "A dark theme portfolio with a hero section, project cards in a grid, and
                a contact form" works much better than "make me a website." Iterate by refining your prompt based on
                what you get.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ========================  SUBMIT PORTFOLIO  ======================== -->

      <hr class="ws-divider">
      <section class="ws-sec ws-sec--alt" id="submit" data-reveal>
        <div class="ws-badge-cta">
          <div class="ws-sec__label">Showcase</div>
          <h2 class="ws-badge-cta__title">Submit your portfolio</h2>
          <p class="ws-badge-cta__desc">
            Built your portfolio? Awesome! Submit it to the community showcase and let everyone see what you've created.
            Your site will appear on the GDG Jammu showcase wall alongside other attendees.
          </p>
          <div style="display:flex; gap:1rem; flex-wrap:wrap; justify-content:center;">
            <a href="https://forms.gle/r2nYcubC8y3DZ6MUA" target="_blank" class="ws-badge-cta__btn">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"
                style="vertical-align:middle; margin-right:6px;">
                <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
              </svg>
              Submit Your Portfolio
            </a>
            <a href="https://gdgjammu.com/showcase.php" class="ws-badge-cta__btn">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"
                style="vertical-align:middle; margin-right:6px;">
                <path
                  d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" />
              </svg>
              View Community Showcase
            </a>
          </div>
        </div>
      </section>


      <!-- ========================  RESOURCES  ======================== -->

      <hr class="ws-divider">
      <section class="ws-sec ws-sec--alt" data-reveal>
        <div class="ws-sec__label">Resources</div>
        <h2 class="ws-sec__title">Keep learning</h2>
        <div class="ws-learn-grid">
          <a href="https://stitch.google" target="_blank" class="ws-learn-item"
            style="text-decoration:none; color:inherit;">
            <div class="ws-learn-item__title" style="color:var(--link-color)">Stitch Docs</div>
            <div class="ws-learn-item__desc">Official Google Stitch documentation and guides.</div>
          </a>
          <a href="https://antigravity.google" target="_blank" class="ws-learn-item"
            style="text-decoration:none; color:inherit;">
            <div class="ws-learn-item__title" style="color:var(--link-color)">Antigravity Guide</div>
            <div class="ws-learn-item__desc">Learn more about Antigravity IDE features.</div>
          </a>
          <a href="https://ai.google.dev" target="_blank" class="ws-learn-item"
            style="text-decoration:none; color:inherit;">
            <div class="ws-learn-item__title" style="color:var(--link-color)">Google AI for Devs</div>
            <div class="ws-learn-item__desc">Explore Google's AI tools and APIs for developers.</div>
          </a>
          <a href="https://web.dev/learn" target="_blank" class="ws-learn-item"
            style="text-decoration:none; color:inherit;">
            <div class="ws-learn-item__title" style="color:var(--link-color)">web.dev</div>
            <div class="ws-learn-item__desc">Web development fundamentals and best practices.</div>
          </a>
          <a href="https://docs.github.com/en/pages" target="_blank" class="ws-learn-item"
            style="text-decoration:none; color:inherit;">
            <div class="ws-learn-item__title" style="color:var(--link-color)">GitHub Pages</div>
            <div class="ws-learn-item__desc">Official docs for hosting static sites on GitHub.</div>
          </a>
          <a href="https://gdg.community.dev/gdg-jammu/" target="_blank" class="ws-learn-item"
            style="text-decoration:none; color:inherit;">
            <div class="ws-learn-item__title" style="color:var(--link-color)">GDG Jammu</div>
            <div class="ws-learn-item__desc">Join the community for more events and workshops.</div>
          </a>
        </div>
      </section>

    </div>
  </main>

  <?php
  include '../footer.php';
  ?>

  <script src="https://gdgjammu.com/functions.js"></script>

  <script>
    // Scroll reveal
    const obs = new IntersectionObserver((entries) => {
      entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); obs.unobserve(e.target); } });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
    document.querySelectorAll('[data-reveal]').forEach(el => obs.observe(el));

    // Generate QR codes
    const qrOpts = { width: 140, height: 140, colorDark: '#202124', colorLight: '#fff', correctLevel: QRCode.CorrectLevel.M };

    new QRCode(document.getElementById('qr-repo'), { ...qrOpts, text: 'https://github.com/GDG-Jammu/build-with-ai-portfolio' });
    new QRCode(document.getElementById('qr-antigravity'), { ...qrOpts, text: 'https://antigravity.google/download' });
    new QRCode(document.getElementById('qr-credits'), { ...qrOpts, text: 'https://trygcp.dev/claim/design-to-code-with-antigravity-and-stitch-mcp#vf=6qd' });
    new QRCode(document.getElementById('qr-badge'), { ...qrOpts, text: 'http://goo.gle/bwai-attendee-2026' });
  </script>

</body>

</html>