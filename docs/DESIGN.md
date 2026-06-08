---
name: DT Painter Design System
description: Professional residential painting & cabinet refinishing in Coral Springs, FL
colors:
  primary: "#1a56db"
  primary-dark: "#1e429f"
  secondary: "#f59e0b"
  secondary-hover: "#d97706"
  neutral-bg: "#ffffff"
  neutral-bg-alt: "#f9fafb"
  neutral-dark: "#1f2937"
  neutral-gray: "#6b7280"
typography:
  display:
    fontFamily: "'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif"
    fontSize: "clamp(2rem, 5vw, 3.5rem)"
    fontWeight: 700
    lineHeight: 1.2
  headline:
    fontFamily: "'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif"
    fontSize: "2.25rem"
    fontWeight: 700
    lineHeight: 1.2
  title:
    fontFamily: "'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif"
    fontSize: "1.5rem"
    fontWeight: 700
    lineHeight: 1.2
  body:
    fontFamily: "'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif"
    fontSize: "1rem"
    fontWeight: 400
    lineHeight: 1.6
rounded:
  sm: "4px"
  md: "8px"
  lg: "16px"
spacing:
  xs: "4px"
  sm: "8px"
  md: "16px"
  lg: "24px"
  xl: "32px"
  xxl: "48px"
  xxxl: "64px"
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.neutral-bg}"
    rounded: "{rounded.md}"
    padding: "8px 24px"
  button-primary-hover:
    backgroundColor: "{colors.primary-dark}"
  button-secondary:
    backgroundColor: "{colors.secondary}"
    textColor: "{colors.neutral-dark}"
    rounded: "{rounded.md}"
    padding: "8px 24px"
  button-secondary-hover:
    backgroundColor: "{colors.secondary-hover}"
---

# Design System: DT Painter

## 1. Overview

**Creative North Star: "The Master Craftsman's Studio"**

The DT Painter visual system represents elite residential painting and cabinet refinishing. Inspired by the precise execution of master craftsmen, the design rejects low-effort startup clichés, messy gradients, and generic cards. Instead, it relies on structured grids, ample whitespace, high-contrast typography, and immaculate, razor-sharp edges. It communicates high trust, durability, and a dedication to detail that elevates a homeowner's most valuable asset.

### Key Characteristics:
- **Razor-Sharp Precision:** Clean lines, structured geometric layouts, and absolute clarity.
- **Architectural Harmony:** Layouts that mirror well-balanced physical spaces.
- **High-Trust Atmosphere:** Professional typography and a commanding, crisp color structure.

---

## 2. Colors

The color palette is built on high-contrast, premium tones that project expertise and cleanliness.

### Primary
- **Precision Cobalt** (`#1a56db`): A strong, authoritative architectural blue used for anchor elements, primary actions, and navigational cues. Represents premium quality and lasting durability.

### Secondary
- **Honey Gold** (`#f59e0b`): A warm, glowing amber tone reminiscent of natural wood finishes and sunlight. Used sparingly (under 10% of any surface) as a high-visibility accent for key trust metrics, contact badges, and primary callouts.

### Neutral
- **Clean Slate White** (`#ffffff`): The primary background color, providing generous negative space and representing flawless, clean coats of paint.
- **Alabaster Tint** (`#f9fafb`): A soft neutral gray-white used for section layering, alternating grid rows, and card containers.
- **Charcoal Solid** (`#1f2937`): The default text color and footer background, providing maximum contrast and visual weight.
- **Muted Steel** (`#6b7280`): A professional gray for borders, supporting text, and helper labels.

### Named Rules
**The One-Coat Rule.** Honey Gold is a high-potency accent color. It must never cover more than 10% of any page layout. Its scarcity is the source of its impact.

---

## 3. Typography

**Display Font:** 'Inter' (sans-serif)
**Body Font:** 'Inter' (sans-serif)

The system utilizes 'Inter' as a single, highly refined typeface, relying on generous contrast in size, letter spacing, and weight to establish hierarchical structure.

### Hierarchy
- **Display** (Bold (700), `clamp(2rem, 5vw, 3.5rem)`, `1.2`): Reserved exclusively for primary hero headlines.
- **Headline** (Bold (700), `2.25rem` / `1.875rem`, `1.2`): Used for section titles.
- **Title** (Bold (700), `1.5rem` / `1.25rem`, `1.2`): Used for subheadings and card titles.
- **Body** (Regular (400), `1rem`, `1.6`): Used for general content paragraphs. Limited to a maximum width of `75ch` to ensure peak readability.
- **Label** (Semi-bold (600), `0.875rem` / `0.75rem`, uppercase): Used for navigation links, form labels, small accents, and trust badges.

---

## 4. Elevation

The elevation philosophy mirrors physical surfaces—materials are flat and clean at rest, rising only in response to direct user interaction.

### Shadow Vocabulary
- **Flat Rest** (`none`): Most elements (cards, containers, inputs) sit flush on the canvas, delineated by clean borders.
- **Tactile Hover** (`box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1)`): A soft ambient elevation used when a user interacts with a card or interactive element, giving immediate physical feedback.

### Named Rules
**The Flat-Rest Rule.** Shadows are never decorative. Surfaces are flat at rest, and depth is communicated through borders (`1px solid var(--color-gray-200)`) and background color changes. Shadows appear only as active physical feedback to hover or focus states.

---

## 5. Components

### Buttons
- **Shape:** Softly rounded corners (`--radius-md` / `8px`).
- **Primary:** Background `var(--color-primary)` (`#1a56db`), text `var(--color-white)` (`#ffffff`), weight `600`, internal padding `8px 24px`.
- **Hover:** Background shifts to `var(--color-primary-dark)` (`#1e429f`) with a fast transition (`150ms`).
- **Secondary:** Background `var(--color-secondary)` (`#f59e0b`), text `var(--color-dark)` (`#1f2937`).
- **Secondary Hover:** Background transitions to `#d97706`.

### Cards
- **Corner Style:** Rounded corners (`--radius-lg` / `16px`).
- **Background:** White (`#ffffff`).
- **Border:** 1px border (`#e5e7eb`) at rest.
- **Shadow Strategy:** Flips from `var(--shadow-md)` to `var(--shadow-lg)` and lifts upwards via a smooth transition (`transform translateY(-4px)`).

### Navigation
- **Header:** Sticky positioning, background white, subtle boundary shadow (`var(--shadow-sm)`).
- **Links:** Dark slate at rest, transitioning smoothly to Cobalt blue on hover.
- **Dropdowns:** White background, rounded corners (`8px`), floating elevated shadow (`var(--shadow-lg)`).

---

## 6. Do's and Don'ts

### Do:
- **Do** maintain a strict contrast ratio of at least 4.5:1 for body copy against its background.
- **Do** limit text line-lengths to a comfortable reading span of `65ch` to `75ch`.
- **Do** align all structural elements to a clean, grid-based spacing flow.

### Don't:
- **Don't** use multi-colored side-stripe borders (e.g. `border-left`) as callout indicators.
- **Don't** combine gradients with text clip clipping (`background-clip: text`) for headlines.
- **Don't** use soft, default glassmorphic backdrops as standard panels or backgrounds.
- **Don't** overload layouts with honey gold elements; keep accent weight under 10%.
