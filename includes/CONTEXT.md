# PHP Infrastructure — Stage Contract

**Room purpose:** Governs all shared PHP partials and reusable components. Every page on the site inherits from this room — treat changes here as infrastructure edits, not page edits.

---

## Inputs, Processes, Outputs

| | Description |
|---|---|
| **Inputs** | New navigation items, global style changes, new reusable UI components, config updates |
| **Process** | Edit the specific partial or component → test by loading 3+ representative pages (index, a service page, a geo-page) → confirm no visual regressions |
| **Outputs** | Updated partials immediately reflected site-wide on next page load |

---

## File Map

| File | Governs | Blast radius |
|---|---|---|
| `header.php` | `<head>` meta, CSS/JS includes, sticky nav bar | Every page |
| `footer.php` | Footer content, contact info, bottom scripts | Every page |
| `nav.php` | Navigation links, mobile menu, dropdowns | Every page |
| `config.php` | Site-wide constants: business name, phone, license, address | Every page |
| `image-helper.php` | Utility functions for responsive image output | Any page using images |
| `components/[component-name].php` | [Description of component] | [Pages that use it] |

---

## Reference Documents

| File | Read for |
|---|---|
| `docs/DESIGN.md` | Navigation component specs, color tokens, typography rules |
| `docs/PRODUCT.md` | Business name, service list, contact details, brand voice for nav copy |

---

## Custom Instructions

### Navigation Rules
- Navigation links use **Label style** (Semi-bold 600, `0.875rem`, uppercase) per `DESIGN.md`.
- Active page state must be visually distinct (primary color underline or background tint — never just bold). Primary color sourced from `CLIENT_PROFILE.md`.
- Dropdown menus: white background, `border-radius: 8px`, `box-shadow: var(--shadow-lg)`. No glassmorphism.
- Mobile menu must have a clear close affordance and must not obscure primary CTAs.

### Header Rules
- The sticky header uses a subtle bottom shadow (`var(--shadow-sm)`) to separate it from page content.
- Do not load additional CSS files in `header.php` unless they are truly global. Page-specific styles belong in the page file or `assets/css/style.css` with a scoping selector.
- Script loading order matters: `style.css` → Tailwind CDN → `main.js`. Do not reorder.

### Config Rules
- All business constants (phone, license number, address, service area) live in `config.php` and are referenced via PHP constants — never hardcoded in page files.
- When adding a new constant, name it in `SCREAMING_SNAKE_CASE` and add a comment describing what it represents.

### Component Rules
- New reusable UI components go in `includes/components/` as `component-name.php`.
- Components must accept their data via function parameters or a `$props` array — never use globals inside a component.
- Every component must degrade gracefully if its input data is empty or missing.

### Editing Protocol
- Before editing `header.php`, `footer.php`, or `nav.php`: confirm the change is truly global. If it only applies to one page, do it in that page file.
- After editing any partial: visually verify `index.php`, one service page, and one area-served page before committing.
