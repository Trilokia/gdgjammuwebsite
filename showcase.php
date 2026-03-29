<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Community Showcase — GDG Jammu</title>
    <meta name="description" content="Explore portfolios built by the GDG Jammu community during Build with AI workshops." />
    <meta name="keywords" content="GDG Jammu, Community Showcase, Build with AI, Portfolio, Google Developer Group" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/showcase.css" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <script src="https://kit.fontawesome.com/8cb3487569.js" crossorigin="anonymous"></script>
    <script defer src="./index.js"></script>
  </head>

  <body>
    <?php include 'header.php'; ?>

    <main>
      <div class="container">
        <?php include 'banner.php'; ?>

        <!-- ========================  Hero  ======================== -->
        <section class="sc-hero">
          <div class="sc-hero__badge">
            <span class="sc-hero__badge-dot"></span>
            Build with AI 2026
          </div>
          <h1 class="sc-hero__title">
            Community <span>Showcase</span>
          </h1>
          <p class="sc-hero__desc">
            Portfolios crafted by the GDG Jammu community during our Build with AI workshop.
            Every site below was built, deployed, and shipped by a real attendee.
          </p>
          <a class="sc-hero__cta" href="#" id="submitCta" target="_blank" rel="noopener">
            <svg viewBox="0 0 24 24"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/></svg>
            Submit Your Portfolio
          </a>
        </section>

        <!-- ========================  Stats  ======================== -->
        <div class="sc-stats" id="statsBar">
          <div class="sc-stats__item">
            <div class="sc-stats__num" id="statTotal">--</div>
            <div class="sc-stats__label">Portfolios</div>
          </div>
          <div class="sc-stats__item">
            <div class="sc-stats__num" id="statLive">--</div>
            <div class="sc-stats__label">Live Sites</div>
          </div>
          <div class="sc-stats__item">
            <div class="sc-stats__num" id="statRecent">--</div>
            <div class="sc-stats__label">This Week</div>
          </div>
        </div>

        <!-- ========================  Toolbar  ======================== -->
        <div class="sc-toolbar">
          <div class="sc-search">
            <svg class="sc-search__icon" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27A6.47 6.47 0 0016 9.5 6.5 6.5 0 109.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
            <input class="sc-search__input" type="text" id="searchInput" placeholder="Search by name..." />
          </div>
          <select class="sc-sort" id="sortSelect">
            <option value="newest">Newest first</option>
            <option value="oldest">Oldest first</option>
            <option value="name">Name A-Z</option>
          </select>
        </div>

        <!-- ========================  Card Grid  ======================== -->
        <div class="sc-grid" id="showcaseGrid">
          <!-- Cards injected by JS -->
        </div>

        <!-- ========================  Bottom CTA  ======================== -->
        <section class="sc-footer-cta">
          <h2 class="sc-footer-cta__title">Built something? Show it off.</h2>
          <p class="sc-footer-cta__desc">
            Submit your GitHub Pages portfolio and join the community wall.
            It only takes a minute.
          </p>
          <a class="sc-hero__cta" href="#" id="submitCtaBottom" target="_blank" rel="noopener">
            <svg viewBox="0 0 24 24"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/></svg>
            Submit Your Portfolio
          </a>
        </section>

      </div><!-- /.container -->
    </main>

    <!-- ========================  Footer  ======================== -->
    <?php include 'footer.php'; ?>

    <script src="./functions.js"></script>
    <script>
    (function () {
      // ========================================================
      //  CONFIG
      // ========================================================
      const SHEET_CSV_URL = 'https://docs.google.com/spreadsheets/d/1tcaPha-KPo9TOZKFoShkUHH_hzIfIoKMqr5V6qtFKyQ/export?format=csv&gid=838162601';
      const FORM_URL = 'https://forms.gle/r2nYcubC8y3DZ6MUA';
      const COL_TIMESTAMP = 0;
      const COL_NAME = 2;
      const COL_URL = 4;

      // ========================================================

      const grid = document.getElementById('showcaseGrid');
      const searchInput = document.getElementById('searchInput');
      const sortSelect = document.getElementById('sortSelect');
      const statTotal = document.getElementById('statTotal');
      const statLive = document.getElementById('statLive');
      const statRecent = document.getElementById('statRecent');

      if (FORM_URL) {
        document.getElementById('submitCta').href = FORM_URL;
        document.getElementById('submitCtaBottom').href = FORM_URL;
      }

      let entries = [];

      // ----------  GitHub user cache  ----------
      const ghCache = {};

      function fetchGitHubUser(username) {
        if (!username) return Promise.resolve(null);
        if (ghCache[username]) return Promise.resolve(ghCache[username]);
        return fetch('https://api.github.com/users/' + encodeURIComponent(username))
          .then(function (r) { return r.ok ? r.json() : null; })
          .then(function (data) {
            if (data) ghCache[username] = data;
            return data;
          })
          .catch(function () { return null; });
      }

      // ----------  Detect tech from portfolio HTML  ----------
      function detectTech(url) {
        // Default tags for Build with AI workshop projects
        var tags = ['HTML', 'CSS', 'JavaScript', 'GitHub Pages'];
        // Try to detect more from the page via a CORS-friendly proxy
        return fetch('https://api.allorigins.win/raw?url=' + encodeURIComponent(url))
          .then(function (r) { return r.ok ? r.text() : ''; })
          .then(function (html) {
            html = html.toLowerCase();
            if (html.indexOf('react') !== -1 || html.indexOf('_next') !== -1) tags.push('React');
            if (html.indexOf('vue') !== -1) tags.push('Vue.js');
            if (html.indexOf('tailwind') !== -1) tags.push('Tailwind');
            if (html.indexOf('bootstrap') !== -1) tags.push('Bootstrap');
            if (html.indexOf('three.js') !== -1 || html.indexOf('threejs') !== -1) tags.push('Three.js');
            if (html.indexOf('firebase') !== -1) tags.push('Firebase');
            if (html.indexOf('gemini') !== -1 || html.indexOf('generativeai') !== -1) tags.push('Gemini AI');
            if (html.indexOf('angular') !== -1) tags.push('Angular');
            if (html.indexOf('font-awesome') !== -1 || html.indexOf('fontawesome') !== -1) tags.push('Font Awesome');
            if (html.indexOf('gsap') !== -1) tags.push('GSAP');
            if (html.indexOf('jquery') !== -1) tags.push('jQuery');
            // Deduplicate
            return tags.filter(function (v, i, a) { return a.indexOf(v) === i; });
          })
          .catch(function () { return tags; });
      }


      // ----------  Parse CSV  ----------
      function parseCSV(text) {
        const lines = text.trim().split('\n');
        if (lines.length < 2) return [];
        return lines.slice(1).map(line => {
          const cols = line.split(',');
          return {
            timestamp: (cols[COL_TIMESTAMP] || '').replace(/"/g, '').trim(),
            name: (cols[COL_NAME] || '').replace(/"/g, '').trim(),
            url: (cols[COL_URL] || '').replace(/"/g, '').trim()
          };
        }).filter(e => e.name && e.url);
      }

      // ----------  Derive GitHub username  ----------
      function getUsername(url) {
        try { return new URL(url).hostname.split('.')[0]; }
        catch(e) { return ''; }
      }

      // ----------  Build a card  ----------
      function createCard(entry) {
        const username = getUsername(entry.url);
        const initials = entry.name.split(' ').map(w => w[0]).join('').substring(0, 2).toUpperCase();
        const avatarUrl = username ? 'https://github.com/' + username + '.png?size=72' : '';
        const repoUrl = username
          ? 'https://github.com/' + username + '/' + username + '.github.io'
          : '#';

        const thumbUrl = 'https://v1.screenshot.11ty.dev/' + encodeURIComponent(entry.url) + '/opengraph/';

        const card = document.createElement('div');
        card.className = 'sc-card';
        card.setAttribute('data-username', username);

        card.innerHTML =
          '<div class="sc-card__preview">' +
            '<img class="sc-card__preview-img" crossorigin="anonymous" src="' + thumbUrl + '" alt="' + escapeHtml(entry.name) + ' portfolio preview" loading="lazy" onerror="this.onerror=null;this.src=\'https://api.microlink.io/?url=' + encodeURIComponent(entry.url) + '&screenshot=true&meta=false&embed=screenshot.url\';var self=this;this.onerror=function(){self.style.display=\'none\';self.nextElementSibling.style.display=\'flex\';};">' +
            '<div class="sc-card__preview-placeholder" style="display:none;">' +
              '<svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>' +
            '</div>' +
          '</div>' +
          '<div class="sc-card__body">' +
            '<div class="sc-card__author">' +
              '<div class="sc-card__avatar">' +
                (avatarUrl
                  ? '<img src="' + avatarUrl + '" alt="' + entry.name + '" onerror="this.remove();this.parentNode.textContent=\'' + initials + '\'">'
                  : initials) +
              '</div>' +
              '<div class="sc-card__author-info">' +
                '<span class="sc-card__name">' + escapeHtml(entry.name) + '</span>' +
                '<span class="sc-card__bio" id="bio-' + username + '"></span>' +
              '</div>' +
            '</div>' +
            '<div class="sc-card__chips" id="chips-' + username + '">' +
              '<span class="sc-chip">HTML</span>' +
              '<span class="sc-chip">CSS</span>' +
              '<span class="sc-chip">JavaScript</span>' +
              '<span class="sc-chip">GitHub Pages</span>' +
            '</div>' +
            '<div class="sc-card__links">' +
              '<a class="sc-card__link sc-card__link--primary" href="' + escapeHtml(entry.url) + '" target="_blank" rel="noopener">' +
                '<svg viewBox="0 0 24 24"><path d="M19 19H5V5h7V3H5a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>' +
                'Visit' +
              '</a>' +
              '<a class="sc-card__link" href="' + escapeHtml(repoUrl) + '" target="_blank" rel="noopener">' +
                '<svg viewBox="0 0 24 24"><path d="M12 2A10 10 0 002 12a10 10 0 006.84 9.49c.5.09.69-.21.69-.48v-1.7c-2.78.6-3.37-1.34-3.37-1.34-.46-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.61.07-.61 1 .07 1.53 1.03 1.53 1.03.89 1.52 2.34 1.08 2.91.83.09-.65.35-1.09.63-1.34-2.22-.25-4.56-1.11-4.56-4.95 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.64 0 0 .84-.27 2.75 1.02A9.56 9.56 0 0112 6.8c.85 0 1.7.11 2.5.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.37.2 2.39.1 2.64.64.7 1.03 1.59 1.03 2.68 0 3.85-2.34 4.7-4.57 4.95.36.31.68.92.68 1.85v2.75c0 .27.18.58.69.48A10 10 0 0022 12 10 10 0 0012 2z"/></svg>' +
                'Code' +
              '</a>' +
            '</div>' +
          '</div>';

        // --- Async enhancements ---

        // 1. Fetch GitHub bio
        if (username) {
          fetchGitHubUser(username).then(function (gh) {
            var bioEl = document.getElementById('bio-' + username);
            if (bioEl && gh) {
              var bio = gh.bio || '';
              if (!bio && gh.company) bio = gh.company;
              if (!bio && gh.location) bio = '📍 ' + gh.location;
              if (bio) {
                // Truncate to 80 chars
                if (bio.length > 80) bio = bio.substring(0, 77) + '…';
                bioEl.textContent = bio;
              }
            }
          });
        }

        // 2. Detect extra tech and append chips (base chips already rendered)
        detectTech(entry.url).then(function (tags) {
          var chipsEl = document.getElementById('chips-' + username);
          if (chipsEl && tags.length) {
            // Only add tags beyond the defaults
            var defaults = ['HTML', 'CSS', 'JavaScript', 'GitHub Pages'];
            var extras = tags.filter(function (t) { return defaults.indexOf(t) === -1; });
            extras.forEach(function (t) {
              var chip = document.createElement('span');
              chip.className = 'sc-chip sc-chip--extra';
              chip.textContent = t;
              chipsEl.appendChild(chip);
            });
          }
        });

        // 3. Theme card with a color derived from username (instant, no CORS issues)
        var palette = [
          { r: 66, g: 133, b: 244 },   // Google Blue
          { r: 234, g: 67, b: 53 },    // Google Red
          { r: 52, g: 168, b: 83 },    // Google Green
          { r: 251, g: 188, b: 4 },    // Google Yellow
          { r: 171, g: 71, b: 188 },   // Purple
          { r: 0, g: 172, b: 193 },    // Teal
          { r: 255, g: 112, b: 67 },   // Deep Orange
          { r: 63, g: 81, b: 181 },    // Indigo
        ];
        if (username) {
          var hash = 0;
          for (var i = 0; i < username.length; i++) hash = ((hash << 5) - hash + username.charCodeAt(i)) | 0;
          var color = palette[Math.abs(hash) % palette.length];
          var tint = 'rgba(' + color.r + ',' + color.g + ',' + color.b;
          card.style.background = 'linear-gradient(135deg, ' + tint + ',0.07) 0%, ' + tint + ',0.02) 100%)';
          card.style.borderColor = tint + ',0.2)';
          var bodyEl = card.querySelector('.sc-card__body');
          if (bodyEl) bodyEl.style.background = 'linear-gradient(180deg, ' + tint + ',0.03) 0%, ' + tint + ',0.08) 100%)';
        }

        return card;
      }

      function escapeHtml(str) {
        var d = document.createElement('div');
        d.textContent = str;
        return d.innerHTML;
      }

      // ----------  Render  ----------
      function render(data) {
        grid.innerHTML = '';

        if (!data.length) {
          grid.innerHTML =
            '<div class="sc-empty">' +
              '<svg class="sc-empty__icon" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>' +
              '<h3 class="sc-empty__title">No portfolios yet</h3>' +
              '<p class="sc-empty__desc">Be the first to submit yours!</p>' +
            '</div>';
          return;
        }

        data.forEach(function (entry) {
          grid.appendChild(createCard(entry));
        });
      }

      // ----------  Filter & sort  ----------
      function getFiltered() {
        var query = searchInput.value.toLowerCase().trim();
        var filtered = entries.filter(function (e) {
          return !query || e.name.toLowerCase().indexOf(query) !== -1;
        });

        var sort = sortSelect.value;
        if (sort === 'newest') {
          filtered.sort(function (a, b) { return new Date(b.timestamp) - new Date(a.timestamp); });
        } else if (sort === 'oldest') {
          filtered.sort(function (a, b) { return new Date(a.timestamp) - new Date(b.timestamp); });
        } else if (sort === 'name') {
          filtered.sort(function (a, b) { return a.name.localeCompare(b.name); });
        }

        return filtered;
      }

      function update() { render(getFiltered()); }

      searchInput.addEventListener('input', update);
      sortSelect.addEventListener('change', update);

      // ----------  Update stats  ----------
      function updateStats() {
        statTotal.textContent = entries.length;
        statLive.textContent = entries.length;
        var weekAgo = new Date();
        weekAgo.setDate(weekAgo.getDate() - 7);
        var recent = entries.filter(function (e) { return new Date(e.timestamp) >= weekAgo; });
        statRecent.textContent = recent.length;
      }

      // ----------  Show loading skeletons  ----------
      function showSkeletons() {
        grid.innerHTML = '';
        for (var i = 0; i < 8; i++) {
          var sk = document.createElement('div');
          sk.className = 'sc-skeleton';
          sk.innerHTML =
            '<div class="sc-skeleton__preview"></div>' +
            '<div class="sc-skeleton__body">' +
              '<div class="sc-skeleton__line sc-skeleton__line--medium"></div>' +
              '<div class="sc-skeleton__line sc-skeleton__line--short"></div>' +
              '<div class="sc-skeleton__line sc-skeleton__line--chips"></div>' +
            '</div>';
          grid.appendChild(sk);
        }
      }

      // ----------  Fetch data  ----------
      function fetchShowcase() {
        if (!SHEET_CSV_URL) {
          statTotal.textContent = '0';
          statLive.textContent = '0';
          statRecent.textContent = '0';
          render([]);
          return;
        }

        showSkeletons();

        fetch(SHEET_CSV_URL)
          .then(function (r) { return r.text(); })
          .then(function (csv) {
            entries = parseCSV(csv);
            updateStats();
            update();
          })
          .catch(function () {
            grid.innerHTML =
              '<div class="sc-empty">' +
                '<svg class="sc-empty__icon" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>' +
                '<h3 class="sc-empty__title">Couldn\'t load portfolios</h3>' +
                '<p class="sc-empty__desc">Please try refreshing the page.</p>' +
              '</div>';
          });
      }

      fetchShowcase();
    })();
    </script>
  </body>
</html>
