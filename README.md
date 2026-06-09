# ICM Website Builder — Master Template

Reusable client website workspace for the ICM framework. Clone this repo for each new client — never do client-specific work directly here.

## What This Is

This is the master template (`icm-website-builder`). It provides the full folder structure, PHP infrastructure, and AI context files needed to spin up a new client site. See `SETUP.md` for the full onboarding process.

## Tech Stack

- **Backend:** PHP 8.x
- **Frontend:** HTML5, CSS3, Vanilla JavaScript
- **Styling:** Tailwind CDN + custom `assets/css/style.css`
- **Hosting:** Hostinger (via GitHub auto-deploy, configured per client)

## Starting a New Client

```bash
# From the parent directory
cp -r ICM-WEBSITE-BUILDER CLIENT-NAME
cd CLIENT-NAME
rm -rf .git
git init
git add .
git commit -m "init: CLIENT-NAME website workspace"
```

> On Windows: use `xcopy /E /I ICM-WEBSITE-BUILDER CLIENT-NAME` or copy via File Explorer, then run the `git` steps in PowerShell.

Then open the new client folder in Claude Code and follow `SETUP.md`.

## Structure

```
ICM-WEBSITE-BUILDER/
├── index.php                  # Homepage
├── about.php                  # About page
├── contact.php                # Contact page
├── services/                  # Live service pages
├── area-served/               # Live geo pages (local SEO clients)
├── gallery/                   # Photo gallery
├── includes/                  # PHP partials (header, footer, nav, config, components)
├── assets/                    # Static files (CSS, JS, images)
├── content/                   # Draft staging area (not committed until promoted)
├── docs/                      # Brand Brain (PRODUCT.md, DESIGN.md)
├── .impeccable/               # Design critique logs and audit artifacts
├── CLIENT_PROFILE.md          # Fill this first for every new client
├── CLAUDE.md                  # AI workspace map
└── SETUP.md                   # New client onboarding checklist
```

## License

Private — All rights reserved.
