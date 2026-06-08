# Design Artifacts — Stage Contract

**Room purpose:** Houses all outputs from the `impeccable` design skill: critique logs, audit scores, and design decisions. These are advisory records — they inform work but do not gate commits unless explicitly agreed.

---

## Inputs, Processes, Outputs

| | Description |
|---|---|
| **Inputs** | Running `/impeccable critique [target]`, `/impeccable audit [target]`, or design decision records |
| **Process** | Skill writes critique to `.impeccable/critique/`. Review findings, prioritize by P-level, address in the target file. |
| **Outputs** | Critique `.md` files; optionally a `decision_topic.md` file recording a resolved design choice |

---

## Subdirectories

| Path | Contents |
|---|---|
| `.impeccable/critique/` | Scored UX/design critiques, one file per target, timestamped |
| `.impeccable/` (root) | `design.json` (generated design token snapshot), `decision_*.md` files |

---

## Reference Documents

| File | Read for |
|---|---|
| `docs/DESIGN.md` | Design system to cross-reference against critique findings |
| `docs/PRODUCT.md` | Anti-references and brand principles for validating critique recommendations |

---

## Critique File Naming

```
YYYY-MM-DDTHH-MM-SSZ__target-file.md
```

Example: `2026-06-01T01-39-17Z__index-php.md`

Never rename or delete critique files. They are a historical record of the site's design evolution.

---

## Priority Levels

| Level | Meaning | Action |
|---|---|---|
| **P0** | Critical failure — blocks user conversion or breaks core UX | Fix before next deploy |
| **P1** | Brand or system violation — degrades trust or visual coherence | Fix in current sprint |
| **P2** | UX friction — noticeable but not conversion-blocking | Schedule for next pass |
| **P3** | Polish — improves quality but low urgency | Backlog |

---

## Invoking the Impeccable Skill

| Goal | Command |
|---|---|
| Full UX heuristic review | `/impeccable critique [filename]` |
| Technical quality check (a11y, perf, responsive) | `/impeccable audit [filename]` |
| Fix a visual issue | `/impeccable colorize [target]` or `/impeccable layout [target]` |
| Final pre-ship quality pass | `/impeccable polish [target]` |
| Update brand context files | `/impeccable teach` |
| Regenerate design system from code | `/impeccable document` |

The skill loads `docs/PRODUCT.md` and `docs/DESIGN.md` automatically. If those files are stale, run `/impeccable teach` before running a critique.

---

## Custom Instructions

- **Critiques are advisory.** A score of 27/40 does not mean "do not deploy." It means "here are the specific issues." Address P0s and P1s before shipping; defer P2/P3 unless they're quick wins.
- **Known open issues:** As of 2026-06-01, `index.php` has a P0 (broken `#quote` CTAs), a P1 (brand color mismatch — dark red theme vs. Cobalt/Gold system), and a P2 (testimonial carousel dot count bug). See `critique/2026-06-01T01-39-17Z__index-php.md`.
- **Do not create design decisions in this room for one-off fixes.** A `decision_*.md` file is for choices that establish a pattern (e.g., "we use CSS scroll grids instead of JS carousels going forward").
