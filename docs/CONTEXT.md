# Brand Brain — Stage Contract

**Room purpose:** Single source of truth for [CLIENT_NAME]'s brand identity, design system, and product strategy. Everything in this room is a reference input — it informs all other rooms, but is never edited during feature or page work.

> Values marked `[PLACEHOLDER]` are sourced from `CLIENT_PROFILE.md` at the root. Fill that file before working in this room.

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
| `../CLIENT_PROFILE.md` | Client identity, contact info, brand voice, colors, page list, tech stack — fill this first |
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

- **Voice standard:** Sourced from `CLIENT_PROFILE.md` → Voice Tone + One-Sentence Voice Standard. Avoid superlatives, hype, and filler words regardless of client.
- **Color law:** `[ACCENT_COLOR]` must never exceed `[ACCENT_USAGE_RULE]`. `[PRIMARY_COLOR]` is the primary anchor. See `docs/DESIGN.md` for full palette. Values sourced from `CLIENT_PROFILE.md`.
- **Anti-references (never imitate):** Sourced from `CLIENT_PROFILE.md` → Anti-References. Add any additional pattern bans to `docs/DESIGN.md` Do/Don't section.
- **The AI slop test:** If a design could be identified as AI-generated at a glance, it has failed. Cross-check against `docs/DESIGN.md` Do/Don't list before shipping.
