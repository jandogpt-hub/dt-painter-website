# ICM Website Builder — Master Template (ICM Layer One)

**Identity:** This is the master template repo (`icm-workspace-builder`). It is not a live client site. Clone it for each new client, then fill out `CLIENT_PROFILE.md` to activate the workspace for that client. See `SETUP.md` for the full process.

> **Working in a cloned client repo?** Replace this header with: `# [CLIENT_NAME] — Website Builder Workspace (ICM Layer One)` and update the identity line below to reflect the client's name, industry, city, and state. Then delete this note.

**Client identity:** [CLIENT_NAME] — [INDUSTRY] in [CITY], [STATE]

---

## Workspaces

| Room | Path | Purpose |
|---|---|---|
| Brand Brain | `docs/` | Source of truth for design system, brand voice, product strategy |
| Content Pipeline | `content/` | Draft staging for new pages before promotion to the live codebase |
| PHP Infrastructure | `includes/` | Shared partials, components, config — the site's backbone |
| Design Artifacts | `.impeccable/` | Critique logs, audit scores, design decisions from the impeccable skill |
| Live Web Pages | root + `services/` + `area-served/` + `gallery/` | Deployed product — edit with care, these are live. `area-served/` only applies to local SEO clients. |

---

## Routing Table

| Task | Go to | Read |
|---|---|---|
| Onboard a new client | root | `SETUP.md` (start here), then `CLIENT_PROFILE.md` |
| Write or edit brand voice, tone, personality | `docs/` | `docs/PRODUCT.md`, `CLIENT_PROFILE.md` |
| Change colors, typography, spacing, components | `docs/` | `docs/DESIGN.md` |
| Draft a new service page | `content/services/` | `content/CONTEXT.md`, `docs/PRODUCT.md` |
| Draft a new area-served geo-page | `content/area-served/` | `content/CONTEXT.md`, `docs/PRODUCT.md` |
| Promote a draft to live | `services/` or `area-served/` | `content/CONTEXT.md` (promotion checklist) |
| Edit header, footer, nav, or config | `includes/` | `includes/CONTEXT.md` |
| Build or modify a reusable PHP component | `includes/components/` | `includes/CONTEXT.md`, `docs/DESIGN.md` |
| Run a design critique or UX audit | `.impeccable/` + `/impeccable critique` | `.impeccable/CONTEXT.md` |
| Fix a visual issue (color, layout, spacing) | root file or `services/` | `.impeccable/CONTEXT.md`, `docs/DESIGN.md` |
| Add a new page to the live site | root or appropriate subfolder | `includes/CONTEXT.md`, `docs/PRODUCT.md` |
| Add or update static assets | `assets/css/`, `assets/js/`, `assets/images/` | `docs/DESIGN.md` |

---

## Naming Conventions

- **Draft pages:** `topic-name_draft.php` (lives in `content/`)
- **Live pages:** `topic-name.php` (lives in `services/` or `area-served/`)
- **Critique artifacts:** `YYYY-MM-DDTHH-MM-SSZ__target-file.md` (lives in `.impeccable/critique/`)
- **Design decisions:** `decision_topic-name.md` (lives in `.impeccable/`)
- **Images:** `subject-description.jpg` grouped by context folder (e.g., `assets/images/area-served/[city-name]/` or `assets/images/services/[service-name]/`)
- **Components:** `component-name.php` (lives in `includes/components/`)

---

## Rules

1. **Root stays clean.** No new loose files at root. New documents go into their workspace room.
2. **Context is decentralized.** Each room owns its instructions in its local `CONTEXT.md`. Do not duplicate room-specific rules here.
3. **Draft before promoting.** All new pages start in `content/` and are promoted to the live tree only after passing the checklist in `content/CONTEXT.md`.
4. **Brand Brain is read-only at task time.** `docs/DESIGN.md` and `docs/PRODUCT.md` are reference inputs — do not edit them during a page-build task. Update them intentionally via a dedicated brand-update session.
5. **Design artifacts do not block deploys.** Files in `.impeccable/` are advisory. A critique score does not gate a commit unless explicitly agreed.
6. **The impeccable skill owns design iteration.** For any visual design task, load `/impeccable` context first. The `.impeccable/CONTEXT.md` defines when and how to invoke it.
7. **`includes/` changes are high-blast-radius.** Every page on the site inherits from `includes/header.php`, `includes/footer.php`, and `includes/nav.php`. Treat edits to these files as infrastructure changes — confirm scope before editing.
