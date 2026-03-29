<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Community Showcase — GDG Jammu</title>
  <meta name="description"
    content="Explore portfolios built by the GDG Jammu community during Build with AI workshops." />
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
          <svg viewBox="0 0 24 24">
            <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
          </svg>
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
          <svg class="sc-search__icon" viewBox="0 0 24 24">
            <path
              d="M15.5 14h-.79l-.28-.27A6.47 6.47 0 0016 9.5 6.5 6.5 0 109.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
          </svg>
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



      <!-- ========================  Workshop Impact  ======================== -->
      <section class="sc-impact" id="impactSection" style="display:none;">
        <div class="sc-impact__header">
          <h2 class="sc-impact__title">Workshop <span>Impact</span></h2>
          <p class="sc-impact__subtitle">What attendees said about the Build with AI workshop</p>
        </div>

        <!-- Rating Cards -->
        <div class="sc-impact__ratings" id="impactRatings">
          <div class="sc-rating-card" id="ratingRelevance">
            <div class="sc-rating-card__icon">
              <svg viewBox="0 0 24 24">
                <path
                  d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
              </svg>
            </div>
            <div class="sc-rating-card__score">--</div>
            <div class="sc-rating-card__label">Content Relevance</div>
            <div class="sc-rating-card__bar">
              <div class="sc-rating-card__fill"></div>
            </div>
          </div>
          <div class="sc-rating-card" id="ratingQuality">
            <div class="sc-rating-card__icon">
              <svg viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
              </svg>
            </div>
            <div class="sc-rating-card__score">--</div>
            <div class="sc-rating-card__label">Overall Quality</div>
            <div class="sc-rating-card__bar">
              <div class="sc-rating-card__fill"></div>
            </div>
          </div>
          <div class="sc-rating-card" id="ratingOrganization">
            <div class="sc-rating-card__icon">
              <svg viewBox="0 0 24 24">
                <path
                  d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z" />
              </svg>
            </div>
            <div class="sc-rating-card__score">--</div>
            <div class="sc-rating-card__label">Organization</div>
            <div class="sc-rating-card__bar">
              <div class="sc-rating-card__fill"></div>
            </div>
          </div>
        </div>

        <!-- Topics Chart -->
        <div class="sc-impact__topics">
          <h3 class="sc-impact__section-title">Most Helpful Topics</h3>
          <div class="sc-topics-chart" id="topicsChart"></div>
        </div>

        <!-- Testimonials -->
        <div class="sc-impact__testimonials" id="testimonialSection" style="display:none;">
          <h3 class="sc-impact__section-title">What Attendees Say</h3>
          <div class="sc-testimonials" id="testimonialList"></div>
        </div>
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
        var ctaBottom = document.getElementById('submitCtaBottom');
        if (ctaBottom) ctaBottom.href = FORM_URL;
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


      // ----------  Parse CSV (handles quoted fields)  ----------
      function parseCSVLine(line) {
        var result = [], cur = '', inQuote = false;
        for (var i = 0; i < line.length; i++) {
          var ch = line[i];
          if (ch === '"') { inQuote = !inQuote; }
          else if (ch === ',' && !inQuote) { result.push(cur.trim()); cur = ''; }
          else { cur += ch; }
        }
        result.push(cur.trim());
        return result;
      }

      function parseCSV(text) {
        const lines = text.trim().split('\n');
        if (lines.length < 2) return [];
        return lines.slice(1).map(function (line) {
          const cols = parseCSVLine(line);
          return {
            timestamp: (cols[COL_TIMESTAMP] || '').trim(),
            name: (cols[COL_NAME] || '').trim(),
            url: (cols[COL_URL] || '').trim(),
            attended: (cols[5] || '').trim(),
            topics: (cols[6] || '').trim(),
            relevance: parseInt(cols[7]) || 0,
            quality: parseInt(cols[8]) || 0,
            organization: parseInt(cols[9]) || 0,
            feedback: (cols[10] || '').trim()
          };
        }).filter(e => e.name && e.url);
      }

      // ----------  Derive GitHub username  ----------
      function getUsername(url) {
        try { return new URL(url).hostname.split('.')[0]; }
        catch (e) { return ''; }
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
          '<div class="sc-card__namebar">' +
          '<div class="sc-card__avatar sc-card__avatar--bar">' +
          (avatarUrl
            ? '<img src="' + avatarUrl + '" alt="' + entry.name + '" onerror="this.remove();this.parentNode.textContent=\'' + initials + '\'">'
            : initials) +
          '</div>' +
          '<span class="sc-card__name sc-card__name--bar">' + escapeHtml(entry.name) + '</span>' +
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

        // 3. Extract real dominant color from the portfolio screenshot
        var previewImg = card.querySelector('.sc-card__preview-img');
        if (previewImg) {
          var applyColor = function (color) {
            var tint = 'rgba(' + color.r + ',' + color.g + ',' + color.b;
            card.style.background = 'linear-gradient(135deg, ' + tint + ',0.07) 0%, ' + tint + ',0.02) 100%)';
            card.style.borderColor = tint + ',0.2)';
            var namebar = card.querySelector('.sc-card__namebar');
            if (namebar) namebar.style.background = 'rgba(' + color.r + ',' + color.g + ',' + color.b + ',0.85)';
            previewImg.style.background = 'linear-gradient(135deg, rgba(' + color.r + ',' + color.g + ',' + color.b + ',0.08) 0%, rgba(' + color.r + ',' + color.g + ',' + color.b + ',0.03) 100%)';
          };

          // Use weserv.nl proxy to load a small CORS-safe copy
          var proxyUrl = 'https://images.weserv.nl/?url=' + encodeURIComponent(thumbUrl) + '&w=64&h=40&fit=cover';
          var probeImg = new Image();
          probeImg.crossOrigin = 'anonymous';
          probeImg.onload = function () {
            try {
              var canvas = document.createElement('canvas');
              var ctx = canvas.getContext('2d');
              canvas.width = 64;
              canvas.height = 40;
              ctx.drawImage(probeImg, 0, 0, 64, 40);
              var data = ctx.getImageData(0, 0, 64, 40).data;
              var r = 0, g = 0, b = 0, count = 0;
              for (var i = 0; i < data.length; i += 16) {
                if (data[i] + data[i + 1] + data[i + 2] > 700) continue; // skip near-white
                if (data[i] + data[i + 1] + data[i + 2] < 40) continue;  // skip near-black
                r += data[i]; g += data[i + 1]; b += data[i + 2]; count++;
              }
              if (count > 10) {
                applyColor({ r: Math.round(r / count), g: Math.round(g / count), b: Math.round(b / count) });
              }
            } catch (e) { /* CORS blocked — no color applied */ }
          };
          probeImg.src = proxyUrl;
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
      function parseTimestamp(ts) {
        // Handles DD/MM/YYYY HH:MM:SS format from Google Sheets
        var parts = ts.split(' ');
        if (parts.length < 2) return new Date(ts);
        var d = parts[0].split('/');
        if (d.length === 3) return new Date(d[2] + '-' + d[1] + '-' + d[0] + 'T' + parts[1]);
        return new Date(ts);
      }

      function updateStats() {
        statTotal.textContent = entries.length;
        statLive.textContent = entries.length;
        var weekAgo = new Date();
        weekAgo.setDate(weekAgo.getDate() - 7);
        var recent = entries.filter(function (e) {
          var d = parseTimestamp(e.timestamp);
          return !isNaN(d.getTime()) && d >= weekAgo;
        });
        statRecent.textContent = recent.length;
        renderImpact();
      }

      // ----------  Render impact section  ----------
      function renderImpact() {
        var withFeedback = entries.filter(function (e) { return e.relevance || e.quality || e.organization; });
        if (withFeedback.length === 0) return;

        document.getElementById('impactSection').style.display = '';

        // Calculate averages
        function avg(arr, key) {
          var vals = arr.filter(function (e) { return e[key] > 0; });
          if (vals.length === 0) return 0;
          var sum = vals.reduce(function (a, e) { return a + e[key]; }, 0);
          return (sum / vals.length).toFixed(1);
        }

        var relevanceAvg = avg(withFeedback, 'relevance');
        var qualityAvg = avg(withFeedback, 'quality');
        var orgAvg = avg(withFeedback, 'organization');

        // Populate rating cards
        function setRating(id, score) {
          var card = document.getElementById(id);
          card.querySelector('.sc-rating-card__score').textContent = score + '/5';
          var fill = card.querySelector('.sc-rating-card__fill');
          setTimeout(function () { fill.style.width = (score / 5 * 100) + '%'; }, 300);
        }
        setRating('ratingRelevance', relevanceAvg);
        setRating('ratingQuality', qualityAvg);
        setRating('ratingOrganization', orgAvg);

        // Topics chart
        var topicCounts = {};
        var topicLabels = {
          'Technical Deep Dive': { icon: '🔬', color: '#4285f4' },
          'Career Guidance/Mentorship': { icon: '🎯', color: '#ea4335' },
          'Networking Opportunities': { icon: '🤝', color: '#34a853' },
          'Tool/Resource Recommendations': { icon: '🛠️', color: '#fbbc04' },
        };
        entries.forEach(function (e) {
          if (!e.topics) return;
          e.topics.split(',').forEach(function (t) {
            t = t.trim();
            if (t && t !== 'Other (Please specify in the final question)') {
              topicCounts[t] = (topicCounts[t] || 0) + 1;
            }
          });
        });

        var chart = document.getElementById('topicsChart');
        var maxCount = Math.max.apply(null, Object.values(topicCounts).concat([1]));
        Object.keys(topicLabels).forEach(function (topic) {
          var count = topicCounts[topic] || 0;
          var meta = topicLabels[topic];
          var row = document.createElement('div');
          row.className = 'sc-topic-row';
          row.innerHTML =
            '<div class="sc-topic-row__label">' +
            '<span class="sc-topic-row__icon">' + meta.icon + '</span>' +
            '<span class="sc-topic-row__name">' + topic + '</span>' +
            '</div>' +
            '<div class="sc-topic-row__bar-wrap">' +
            '<div class="sc-topic-row__bar" style="--bar-pct:' + (count / maxCount * 100) + '%; --bar-color:' + meta.color + ';"></div>' +
            '</div>' +
            '<div class="sc-topic-row__count">' + count + '</div>';
          chart.appendChild(row);
        });

        // Testimonials
        var testimonials = entries.filter(function (e) { return e.feedback && e.feedback.length > 3; });
        if (testimonials.length > 0) {
          document.getElementById('testimonialSection').style.display = '';
          var list = document.getElementById('testimonialList');
          testimonials.forEach(function (e) {
            var card = document.createElement('div');
            card.className = 'sc-testimonial';
            card.innerHTML =
              '<div class="sc-testimonial__quote">"' + escapeHtml(e.feedback) + '"</div>' +
              '<div class="sc-testimonial__author">— ' + escapeHtml(e.name) + '</div>';
            list.appendChild(card);
          });
        }
      }

      // ----------  Show loading skeletons  ----------
      function showSkeletons() {
        grid.innerHTML = '';
        for (var i = 0; i < 8; i++) {
          var sk = document.createElement('div');
          sk.className = 'sc-skeleton';
          sk.innerHTML =
            '<div class="sc-skeleton__preview"></div>' +
            '<div class="sc-skeleton__namebar">' +
            '<div class="sc-skeleton__avatar"></div>' +
            '<div class="sc-skeleton__name"></div>' +
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