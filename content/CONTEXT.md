# Content Pipeline — Stage Contract

**Room purpose:** Staging area for all new pages before they enter the live codebase. A page that hasn't passed the promotion checklist below does not belong in `services/`, `area-served/`, or root.

---

## Inputs, Processes, Outputs

| | Description |
|---|---|
| **Inputs** | New service offerings, new geo-target cities, client-requested content additions |
| **Process** | Draft in `content/services/` or `content/area-served/` → self-review against checklist → promote to live path |
| **Outputs** | Production-ready `.php` page files moved to `services/` or `area-served/` |

---

## Subdirectories

| Path | Contents |
|---|---|
| `content/services/` | Draft service pages (e.g., `popcorn-ceiling-removal_draft.php`) |
| `content/area-served/` | Draft geo-pages (e.g., `parkland_draft.php`) |

---

## Reference Documents

| File | Read for |
|---|---|
| `docs/PRODUCT.md` | Brand voice, target users, tone rules, anti-references |
| `docs/DESIGN.md` | Color tokens, typography scale, component specs |
| `includes/CONTEXT.md` | How to wire in `header.php`, `footer.php`, nav, and config |
| A live page in `services/` or `area-served/` | Structural template to match |

---

## Page Drafting Standards

### Service Pages
- **H1:** Service name + primary city (e.g., "[PRIMARY_SERVICE] in [CITY], [STATE]") — sourced from `CLIENT_PROFILE.md`
- **Lead paragraph:** 2–3 sentences. What the service is, who it's for, what outcome it delivers. No filler.
- **Sections required:** Hero, What's Included, Why [CLIENT_NAME], Service Area, CTA (links to `contact.php`)
- **Schema markup:** `LocalBusiness` + `Service` JSON-LD. Pull license number from `includes/config.php`.
- **Images:** Use real project photos from `assets/images/`. No stock photos.

### Area-Served (Geo) Pages
- **H1:** "[PRIMARY_SERVICE] in [City], [STATE]" — industry and state sourced from `CLIENT_PROFILE.md`
- **Required sections:** Hero, Local Introduction (genuine local landmarks/context), Services Offered, Why Choose [CLIENT_NAME], Local Attractions (3–5 with real images), CTA
- **Images:** Store in `assets/images/area-served/[city-name]/`. Each image must be a real local landmark photo.
- **Schema markup:** `LocalBusiness` + `AreaServed` JSON-LD.
- **Tone:** Warm and locally knowledgeable — not generic "we serve [city]" boilerplate.

---

## Promotion Checklist

Before moving a draft to the live path, confirm all items:

- [ ] File renamed from `topic-name_draft.php` to `topic-name.php`
- [ ] `<?php include '../includes/header.php'; ?>` and footer wired correctly
- [ ] All CTA anchors link to a working destination (`contact.php` or an embedded form — no dead `#` anchors)
- [ ] Color tokens match `DESIGN.md` — no hardcoded hex values outside the design system
- [ ] Schema JSON-LD is valid (test at schema.org/validator)
- [ ] All images exist in `assets/images/` and have descriptive `alt` text
- [ ] Page added to `includes/nav.php` if it should appear in navigation
- [ ] Meta title and meta description are unique to this page
- [ ] Removed from `.gitignore` if it was previously excluded

---

## Custom Instructions

- **Do not commit draft files.** Files in `content/` are local only — they remain `.gitignore`d until promoted.
- **One draft per topic.** Do not create multiple draft variants of the same page. Iterate on the single draft file.
- **Copy tone:** Concrete, expert, local. Avoid phrases like "world-class," "unmatched," "we take pride." Let the specifics do the trust-building.
