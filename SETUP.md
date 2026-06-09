# Website Builder — New Client Setup Checklist

This is the ICM anti-drift protocol. Every step must be completed in order.
Do not start building pages until Phase 1 and Phase 2 are fully checked off.
A workspace with unresolved `[PLACEHOLDER]` values will produce drifted output.

---

## Phase 0 — Clone This Template
*This phase runs in the TEMPLATE repo (this folder), not the client folder.*
*It only lives here. The client repo never sees these instructions.*

### What this template is

This folder (`ICM-WEBSITE-BUILDER` or equivalent) is the **master template**. It is never a live client site. You clone from it, build in the clone, and keep this folder clean and current as the canonical starting point for every new project.

**Rule:** Never do client-specific work directly in this folder. If you catch yourself editing a page or writing client copy here, stop — you're in the wrong place.

### Step 0.1 — Confirm the template is clean

Before cloning, verify this template is in a clean, up-to-date state:

- [ ] All `[PLACEHOLDER]` values are still placeholders — no previous client data has leaked in
- [ ] `docs/PRODUCT.md` and `docs/DESIGN.md` contain only `[TODO]` markers, not real client content
- [ ] `includes/config.php` constants are all placeholder values (no real phone numbers, emails, or addresses)
- [ ] `assets/images/` contains only the folder structure and `.gitkeep` files — no client photos
- [ ] `services/` and `area-served/` contain no real client pages
- [ ] `.impeccable/critique/` is empty — no previous client critique files
- [ ] `git status` is clean on `main` — no uncommitted changes

If any of the above fail, fix them in the template before cloning. A dirty template produces a dirty client site.

### Step 0.2 — Clone the template for a new client

Run these commands from the **parent directory** that contains this template folder:

```bash
# 1. Copy the template folder and name it after the client
cp -r ICM-WEBSITE-BUILDER CLIENT-NAME

# 2. Move into the new client folder
cd CLIENT-NAME

# 3. Strip the template's git history
rm -rf .git

# 4. Initialize a fresh repo
git init

# 5. Stage everything and make the first commit
git add .
git commit -m "init: CLIENT-NAME website workspace"

# 6. Create a new GitHub repo (do this on GitHub first), then connect it
git remote add origin https://github.com/YOUR-USERNAME/CLIENT-NAME.git
git push -u origin main
```

> On Windows, use `xcopy /E /I ICM-WEBSITE-BUILDER CLIENT-NAME` or copy via File Explorer, then run the `git` steps in PowerShell.

### Step 0.3 — Open the client folder in Claude Code

- [ ] Open the new `CLIENT-NAME` folder as the working directory in Claude Code
- [ ] Confirm `CLAUDE.md` is present at the root — this is the AI's map for the new workspace
- [ ] Proceed to **Phase 1** below

### Step 0.4 — Keep this template up to date

Any time you discover a missing checklist item, a better default, or a structural improvement during a client project:

- [ ] Note it
- [ ] Come back to this template repo and apply the improvement here
- [ ] Commit it: `"improve: [description of what was learned]"`

The template gets smarter with every client. That's the compounding value of the ICM framework.

---

## Phase 1 — Workspace Initialization
*Do this once, inside the new client folder. Takes ~10 minutes. Never skip.*

### Step 1.1 — Confirm the clone landed correctly

- [ ] You are now inside the **client folder**, not the template folder
- [ ] Rename the folder to the client name (e.g., `ABC-Plumbing`) if you haven't already
- [ ] Open the folder in your editor / Claude Code

### Step 1.2 — Confirm git is initialized correctly

- [ ] Run `git log --oneline` — you should see exactly one commit: `"init: [CLIENT_NAME] website workspace"`
- [ ] Run `git remote -v` — confirms the remote points to the new client repo, not the template

### Step 1.3 — Clear Previous Client Content from Docs

The following files contain DT Painter's specific content and must be reset:

- [ ] **`docs/PRODUCT.md`** — Delete all content and replace with `[TODO: run /impeccable teach]`
- [ ] **`docs/DESIGN.md`** — Delete all content and replace with `[TODO: run /impeccable document or teach]`
- [ ] **`includes/config.php`** — Update every constant to the new client's values:
  - `SITE_NAME`
  - `SITE_TAGLINE`
  - `SITE_PHONE`
  - `SITE_EMAIL`
  - `FORM_RECIPIENT`
  - `SOCIAL_FACEBOOK`, `SOCIAL_INSTAGRAM`, `SOCIAL_LINKEDIN`
  - `BUSINESS_ADDRESS`
  - `BUSINESS_HOURS`
  - `CLOUDINARY_CLOUD_NAME` (if using Cloudinary)
- [ ] **`.impeccable/critique/`** — Delete all critique files from the previous client (they belong to DT Painter's history, not this project)
- [ ] **`.impeccable/design.json`** — Delete this file (it will be regenerated for the new client)

### Step 1.4 — Clear Previous Client Assets

- [ ] Delete all images in `assets/images/` (they are DT Painter's photos)
- [ ] Recreate the folder structure: `assets/images/area-served/` and `assets/images/services/`
- [ ] Replace `assets/images/logo.jpg` with the new client's logo
- [ ] Keep `assets/css/style.css` and `assets/js/main.js` — these are structural, not client-specific

### Step 1.5 — Clear Previous Client Pages

- [ ] Delete or blank all pages in `services/` (DT Painter's service pages)
- [ ] Delete or blank all pages in `area-served/` (DT Painter's geo pages)
- [ ] Reset `gallery/index.php` content (keep the file structure, clear the data)
- [ ] Review `index.php`, `about.php`, `contact.php` — these will need full content rewrites; flag them for Phase 3

---

## Phase 2 — Client Profile & Brand Setup
*The workspace is context-blind until this phase is complete.*

### Step 2.1 — Fill Out `CLIENT_PROFILE.md`

Open `CLIENT_PROFILE.md` at the root. Fill every field. No field should remain as `[PLACEHOLDER]` when done.

- [ ] **Identity section** — client name, industry, primary service, city, state, service area, license, phone, email, address
- [ ] **Brand Voice section** — three-word personality, voice tone, one-sentence voice standard, anti-references
- [ ] **Design System section** — primary color + name, accent color + name, accent usage rule, background, text color, font, design north star
- [ ] **Pages & Structure section** — list all core pages, service pages, geo pages, gallery/blog flags
- [ ] **Tech section** — backend, frontend, hosting, repo URL, deploy branch
- [ ] **Status section** — project start date, target launch date, current phase

### Step 2.2 — Populate the Brand Brain

With `CLIENT_PROFILE.md` complete, generate the two brand documents:

- [ ] Run `/impeccable teach` — this walks through a conversation to generate `docs/PRODUCT.md` (users, voice, tone, anti-references, design principles)
- [ ] Run `/impeccable document` — this generates `docs/DESIGN.md` from the color and typography values in `CLIENT_PROFILE.md`
- [ ] Verify `docs/PRODUCT.md` contains no DT Painter references
- [ ] Verify `docs/DESIGN.md` contains no DT Painter colors, fonts, or component specs

### Step 2.3 — Update `CLAUDE.md`

- [ ] Replace `[CLIENT_NAME]` in the title and identity line with the actual client name
- [ ] Replace `[INDUSTRY]`, `[CITY]`, `[STATE]` in the identity line
- [ ] If this client does not need geo pages, update the Live Web Pages room description to remove `area-served/`

### Step 2.4 — Commit the Brand Foundation

- [ ] `git add .` and commit: `"feat: establish [CLIENT_NAME] brand profile and design system"`

---

## Phase 3 — Infrastructure Wiring
*The skeleton. Every page inherits from these files.*

### Step 3.1 — Wire `includes/header.php`

- [ ] Update `<title>` tag pattern to reflect client name and service
- [ ] Update meta description default to match client brand
- [ ] Verify CSS load order: `style.css` → Tailwind CDN → `main.js` (do not reorder)
- [ ] Update Cloudinary or image CDN references if applicable
- [ ] Update any hardcoded color values in the Tailwind config extension to match `CLIENT_PROFILE.md` design tokens

### Step 3.2 — Wire `includes/nav.php`

- [ ] Update navigation links to match the page structure defined in `CLIENT_PROFILE.md` → Pages & Structure
- [ ] Confirm mobile menu works and has a close affordance
- [ ] Verify no DT Painter service names or page links remain

### Step 3.3 — Wire `includes/footer.php`

- [ ] Update business name, address, phone, email (all should pull from `config.php` constants — not hardcoded)
- [ ] Update social media links to client accounts
- [ ] Update copyright year line (should use `currentYear()` helper, not hardcoded year)
- [ ] Verify no DT Painter references remain

### Step 3.4 — Audit `includes/components/`

- [ ] Review each component in `includes/components/` — keep what is structurally reusable (e.g., before-after slider), delete what is DT Painter-specific data
- [ ] Update `includes/CONTEXT.md` → File Map table to reflect the actual components now in this project

### Step 3.5 — Commit Infrastructure

- [ ] `git add .` and commit: `"feat: wire [CLIENT_NAME] site infrastructure (header, nav, footer, config)"`

---

## Phase 4 — Content Build
*Only start here after Phases 1–3 are fully checked off.*

### Step 4.1 — Homepage (`index.php`)

- [ ] Rewrite hero section headline and subheadline using `docs/PRODUCT.md` voice
- [ ] Replace all DT Painter service references with client services from `CLIENT_PROFILE.md`
- [ ] Confirm all CTA buttons link to working destinations (no dead `#` anchors)
- [ ] Replace before/after or gallery images with client assets
- [ ] Update schema JSON-LD with client business data from `config.php`
- [ ] Run `/impeccable critique index.php` and log any P0/P1 issues in `.impeccable/CONTEXT.md`

### Step 4.2 — Core Pages (`about.php`, `contact.php`)

- [ ] Rewrite `about.php` — client story, team, credentials, service area
- [ ] Verify `contact.php` form submits to correct `FORM_RECIPIENT` from `config.php`
- [ ] Confirm `thank-you.php` and `404.php` match the client's visual style

### Step 4.3 — Service Pages

For each service listed in `CLIENT_PROFILE.md` → Service Pages:

- [ ] Create draft in `content/services/[service-name]_draft.php`
- [ ] Write to the service page standard in `content/CONTEXT.md`
- [ ] Run through the promotion checklist in `content/CONTEXT.md` before moving to `services/`
- [ ] Add promoted page to `includes/nav.php` if it belongs in navigation

### Step 4.4 — Geo Pages (local SEO clients only)

For each city listed in `CLIENT_PROFILE.md` → Geo Pages Needed:

- [ ] Source 3–5 real local landmark images and add to `assets/images/area-served/[city-name]/`
- [ ] Create draft in `content/area-served/[city-name]_draft.php`
- [ ] Write to the geo page standard in `content/CONTEXT.md`
- [ ] Run through the promotion checklist before moving to `area-served/`

### Step 4.5 — Gallery (if needed)

- [ ] Confirm `CLIENT_PROFILE.md` → Gallery Needed is "Yes" before building
- [ ] Replace all DT Painter project photos with client photos
- [ ] Update gallery category filters to reflect client's service categories

---

## Phase 5 — Pre-Launch Quality Gate
*Nothing goes live until every item here is checked.*

### Step 5.1 — Design System Compliance

- [ ] Run `/impeccable audit index.php` — resolve all P0s and P1s before proceeding
- [ ] Verify no hardcoded hex values exist outside `assets/css/style.css` or CSS custom properties
- [ ] Verify accent color does not exceed its usage rule from `CLIENT_PROFILE.md`
- [ ] Verify font matches `CLIENT_PROFILE.md` → Primary Font on all pages

### Step 5.2 — Content & Copy

- [ ] Global search for "DT Painter", "dtpainter", "Coral Springs" — replace any remaining instances
- [ ] Global search for `[PLACEHOLDER]`, `[CLIENT_NAME]`, `[TODO]` — none should remain in live files
- [ ] Verify every page has a unique `<title>` and unique meta description
- [ ] Verify all schema JSON-LD uses `config.php` constants (not hardcoded strings)

### Step 5.3 — Functionality

- [ ] Contact form submits and delivers to the correct email
- [ ] `thank-you.php` loads correctly after form submission
- [ ] `404.php` loads on a bad URL
- [ ] All navigation links resolve — no broken hrefs
- [ ] All CTA buttons link to working destinations
- [ ] Mobile menu opens, closes, and does not obscure CTAs
- [ ] Gallery filters work (if applicable)

### Step 5.4 — Hosting & Deploy

- [ ] Hosting account created for client
- [ ] GitHub repo connected to hosting (auto-deploy on push to `main`)
- [ ] `includes/secrets.php` created on the server (never committed) with live API keys
- [ ] SSL certificate active
- [ ] Test deploy: push a minor change and confirm it appears on the live URL

### Step 5.5 — Final Commit

- [ ] `git add .` and commit: `"feat: [CLIENT_NAME] website — launch-ready"`

---

## Drift Prevention Rules

These apply for the lifetime of the project, not just setup:

1. **Never edit `docs/PRODUCT.md` or `docs/DESIGN.md` during a page-build task.** Brand Brain is reference-only at build time.
2. **Never hardcode business data in page files.** Phone, address, email, license — always via `config.php` constants.
3. **Never promote a draft without running the `content/CONTEXT.md` checklist.**
4. **Never edit `includes/header.php`, `footer.php`, or `nav.php` without confirming the change is truly global.**
5. **Log every P0 and P1 from a critique into `.impeccable/CONTEXT.md` → Known Open Issues.** Remove entries only when resolved and verified.
6. **`CLIENT_PROFILE.md` is the single source of truth.** If a value changes (new phone number, new service, new color), update `CLIENT_PROFILE.md` first, then propagate to `config.php` and `docs/`.
