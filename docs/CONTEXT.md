# Brand Brain — Stage Contract

**Room purpose:** Single source of truth for DT Painter's brand identity, design system, and product strategy. Everything in this room is a reference input — it informs all other rooms, but is never edited during feature or page work.

---

## Inputs, Processes, Outputs

| | Description |
|---|---|
| **Inputs** | Brand decisions, client feedback, design system evolution, new service offerings |
| **Process** | Update `PRODUCT.md` for brand/strategy changes; update `DESIGN.md` for visual system changes. Run `/impeccable teach` to regenerate context from a conversation. Run `/impeccable document` to reverse-engineer a design system from existing code. |
| **Outputs** | Up-to-date `PRODUCT.md` and `DESIGN.md` consumed by all other rooms |

---

## Reference Documents

| File | What it governs |
|---|---|
| `PRODUCT.md` | Users, brand voice, tone, anti-references, design principles, accessibility targets |
| `DESIGN.md` | Color palette, typography scale, elevation rules, component specs, Do/Don't list |

---

## When to Update This Room

- A new service is added or an existing one is rebranded.
- The client requests a tone or messaging shift.
- A new design pattern is established that should become a standard.
- A color, font, or spacing token is changed globally.

**Do not edit these files** to fix a one-page visual bug. Local overrides belong in the page file or in `assets/css/style.css` with a comment. Promote to the design system only when a pattern is confirmed as global.

---

## Custom Instructions

- **Voice standard:** Professional, authoritative, warm. "Quiet confidence of an established master craftsman." Avoid superlatives, hype, and filler words.
- **Color law:** Honey Gold (`#f59e0b`) must never exceed 10% of any page surface. Precision Cobalt (`#1a56db`) is the primary anchor. See `DESIGN.md` for full palette.
- **Anti-references (never imitate):** Low-budget contractor sites, stock-photo aesthetics, startup gradients, neon accents, glassmorphic panels, SaaS grid templates.
- **The AI slop test:** If a design could be identified as AI-generated at a glance, it has failed. Cross-check against `DESIGN.md` Do/Don't list before shipping.
