# Golden Devices — WordPress Theme

Custom WordPress theme for **Golden Devices GmbH**, an mmWave (millimeter-wave) antenna and waveguide manufacturer based in Erlangen, Germany.

The theme presents the company's product line, manufacturing capabilities and research contributions — most notably its **contribution to the INCUS mission** (NASA Earth-System Pathfinder Program, prime contractor: Tendeg LLC) and its participation in the **EIC Accelerator** programme.

> This repository contains only the theme. The surrounding WordPress installation, database and uploads are managed locally (Local by Flywheel) and are not versioned here.

---

## Tech stack

| Layer        | Component                                                    |
| ------------ | ------------------------------------------------------------ |
| CMS          | WordPress (classic theme architecture, no block builder)     |
| Templating   | PHP page templates (`page-*.php`)                            |
| Styling      | Single hand-written `style.css` (~100 KB, fully indexed ToC) |
| Scripting    | Vanilla JS (optional `assets/js/navigation.js`)              |
| Local stack  | Local by Flywheel (PHP 8.x, MySQL, Nginx)                    |
| Dependencies | None — no build step, no npm, no SCSS pre-processor          |

Cache-busting on CSS/JS is handled via `filemtime()` in `functions.php`, so any change to `style.css` is force-reloaded on the next request.

---

## Repository layout

```
golden_devices/
├── style.css                  # full stylesheet, indexed by §-markers (§01 … §20)
├── functions.php              # theme setup, asset enqueueing, meta tags
├── header.php / footer.php    # global chrome
├── index.php                  # homepage template
├── page-*.php                 # page templates (one per slug, see below)
├── 404.php
├── assets/
│   └── js/navigation.js       # (optional) sticky header / mobile menu
├── images/
│   └── NASA/                  # INCUS-mission imagery (antenna CAD, beam pattern, etc.)
└── gold.png, prod.jpeg        # hero / product assets
```

### Page templates

| Template                      | Slug                | Purpose                                  |
| ----------------------------- | ------------------- | ---------------------------------------- |
| `index.php`                   | `/`                 | Homepage (hero, stats, process, gallery) |
| `page-about-us.php`           | `/about-us`         | Company / team                           |
| `page-products.php`           | `/products`         | Antenna & waveguide product line         |
| `page-technologies.php`       | `/technologies`     | Manufacturing & measurement capabilities |
| `page-applications.php`       | `/applications`     | Use cases (satcom, radar, sensing)       |
| `page-turnkey-solution.php`   | `/turnkey-solution` | End-to-end RF subsystem offer            |
| `page-incus-mission.php`      | `/incus-mission`    | INCUS contribution (radar feed network)  |
| `page-eic-accelerator.php`    | `/eic-accelerator`  | EIC Accelerator participation            |
| `page-request-demo.php`       | `/request-demo`     | Demo / quote request form                |
| `page-contact.php`            | `/contact`          | Contact                                  |
| `page-legal-notice.php`       | `/legal-notice`     | Impressum                                |
| `page-privacy-policy.php`     | `/privacy-policy`   | GDPR notice                              |
| `page-agb.php`                | `/agb`              | Terms & conditions                       |

### CSS structure

`style.css` is partitioned into 20 numbered sections. Search with `Ctrl+F` and the marker (e.g. `§04` for the hero block). The table of contents lives at the top of the file.

---

## Brand tokens

Defined as CSS custom properties on `:root` in `style.css §01`:

| Token            | Value     | Usage                                |
| ---------------- | --------- | ------------------------------------ |
| `--color-bg`     | `#0d0900` | Page background (near-black)         |
| `--color-accent` | `#fab800` | Brand gold — CTAs, hover, highlights |
| `--color-fg`     | `#ffffff` | Foreground text                      |

Typography, spacing scale and motion timings are likewise centralised in the same `:root` block.

---

## Local development

The theme assumes a Local by Flywheel site named `golden-devices-test`. Replicate as follows:

1. Install **Local by Flywheel** (https://localwp.com).
2. Create a new site → name it `golden-devices-test`.
3. Clone this repository into the theme directory:
   ```bash
   cd "<Local-Sites>/golden-devices-test/app/public/wp-content/themes"
   git clone https://github.com/elisbwemba-oss/GD_Project.git golden_devices
   ```
4. In WP Admin → **Appearance → Themes**, activate **Golden Devices — Modern Professional**.
5. Edit any file — `filemtime()` ensures the change is picked up on the next request without manual cache invalidation.

No build step is required.

---

## Conventions

- **No marketing wording.** All copy is written in engineering register (tolerance, frequency band, return loss, beam pattern, damping). Marketing buzzwords are avoided so the content remains credible to a technical reviewer.
- **INCUS framing.** Golden Devices contributes the feed-network assembly to the INCUS radar payload. The site frames this as a **mission contribution**, not as a NASA partnership.
- **No external CSS framework.** All styles live in `style.css`. Do not introduce Tailwind, Bootstrap, or a build pipeline without prior discussion.

---

## Versioning

| Version | Date       | Notes                                      |
| ------- | ---------- | ------------------------------------------ |
| 4.0     | 2026-05-19 | Current version — refactored page set, indexed CSS |

---

## License

Proprietary. © Golden Devices GmbH. All rights reserved.
