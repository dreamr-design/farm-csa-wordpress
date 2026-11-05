# Bramblecut Farm: design DNA

Bramblecut Farm, a fictional five-person certified organic vegetable farm on 22 acres of Driftless hillside near Viroqua, Wisconsin. It sells a twenty-week CSA (the Stand Card, Half, Full and Kitchen shares, with pay-in-4 and sliding-scale options), runs an honor-box farm stand, and hosts four farm dinners a year at one long table in the squash field. The whole site is dressed as seed packets and produce crates, printed in two inks on kraft.

This file is for whoever extends the site next, a person or an AI assistant. Read it before adding a page or a section, then match the voice below instead of inventing a new one.

## Identity

- Business: Bramblecut Farm
- Niche: A small organic farm: CSA farm-share boxes, farm stand, farm dinners
- Voice: real copy, specific numbers, no filler. Never lorem ipsum.

## Palette

Kraft paper grounds, two screenprint inks (tomato red and leaf green, where they overlap they multiply to a dark brown), crate pine, and a field-green night band.

| Token | Hex | Use |
|---|---|---|
| `--kraft` | `#e2d3b4` | Page background, under an SVG paper-grain noise |
| `--kraft-2` | `#d4c29d` | Corrugated bands (crate, ways in, plans, values, closing), crate cells, table header |
| `--packet` | `#f7f0de` | Seed packets, crate tags, the note, tickets, table, FAQ, knockout highlights in the art |
| `--line` | `#b7a27a` | Calendar and table hairlines |
| `--soil` / `--soil-2` | `#1f2b20` / `#4f4733` | Text, 2 to 3px rules, offset print shadows, footer; secondary text |
| `--tomato` | `#d4432a` | Ink one: vegetable art, calendar fruit bars, the h1 accent, drop cap (graphics and large type only) |
| `--tomato-deep` | `#862612` | Small red text (kickers, stamps, quantities), primary buttons |
| `--leaf` | `#2d6a3e` | Ink two: vegetable art, calendar leaf and root bars |
| `--leaf-deep` | `#1f4d2c` | Green stamps, checkmarks, the Kitchen Share button |
| `--field` / `--mist` / `--yolk` | `#1d3d27` / `#c9d3bf` / `#eeb238` | Dinner, sliding-scale and numbers bands; text and accents on them; tape on the note |
| `--pine` / `--pine-2` / `--pine-3` | `#d6ae74` / `#b88a4f` / `#7d5a2f` | Crate wood, share-size fill trays, timeline stakes |

Every text pair clears 4.5:1. The lowest is `--tomato-deep` on the darkest stripe of a corrugated band, at 4.74.

Accent (primary buttons, the chat button): `#862612`.

## Type

Alfa Slab One (a fat woodtype slab, the voice of an old seed catalog) for h1, h2, h3, packet names, prices, numerals and the wordmark. Libre Franklin for body copy and UI. Courier Prime carries the rubber-stamp and typewriter voice: kickers, stamps, buttons, crate tags, the farmer's note and the calendar months. Stardos Stencil appears only where paint goes on wood: the crate end and the timeline stakes. Fluid `clamp()` scale on `:root`, `--step--1` to `--step-5`.

Families loaded: Alfa Slab One, Courier Prime, Libre Franklin, Stardos Stencil.

## Scale and spacing

- `--step--1`: `clamp(.83rem, .8rem + .15vw, .92rem)`
- `--step-0`: `clamp(1rem, .96rem + .2vw, 1.1rem)`
- `--step-1`: `clamp(1.2rem, 1.1rem + .45vw, 1.45rem)`
- `--step-2`: `clamp(1.45rem, 1.25rem + .9vw, 2rem)`
- `--step-3`: `clamp(1.8rem, 1.45rem + 1.6vw, 2.8rem)`
- `--step-4`: `clamp(2.2rem, 1.6rem + 2.8vw, 4rem)`
- `--step-5`: `clamp(2.6rem, 1.7rem + 4.2vw, 5.4rem)`

## Signature moves

1. **Two-ink screenprint vegetables.** Nine local SVGs (`assets/veg/`) are drawn in tomato red and leaf green only. The green layer is set to `mix-blend-mode: multiply` and knocked 2px off register, so overlaps print dark brown, with halftone-dot shadows and paper-colored knockout highlights. The hills print (`assets/hills.svg`) uses the same two inks, with the barn and striped crop rows.
2. **Seed packets as the card system.** Every product card, every plan on the pricing page, and every farm note on the blog is a packet: a pinked zigzag top edge cut with a CSS mask, a dashed fold line, registration marks, a framed art window, a "back of the packet" spec list (Sow, Harvest, Yield) and a three-ink color strip. The hero packet sells the share itself ("Grows best: in a kitchen, with company").
3. **"What's in the crate this week."** A pine crate built from gradients, with nine recessed cells, a tag on each vegetable and a stenciled crate end. A Half share / Full share toggle rewrites every quantity, and it greys out the two full-share-only items under a rubber stamp. A typewritten farmer's note is taped beside it.
4. **The season calendar and rubber stamps.** A 20-week picking calendar with halftone bars in the two inks and a "Today, Wk 17" line. Worn rubber stamps (an SVG noise mask) mark the hero, the week's totals, the featured plan and the sign-up card. The pricing plans show share size as a crate tray of filled cells, and the About timeline is a row of wooden garden stakes.

## Page anatomy

Each page is one `<main>` of sections, in this order:

- **index**: `.hero`, `.section`, `.section`, `.section`, `.section`, `.section`, `.section`
- **pricing**: `.page-hero`, `.section`, `.section`, `.section`, `.section`, `.section`
- **about**: `.about-hero`, `.section`, `.section`, `.section`, `.section`, `.section--tight`, `.section`
- **contact**: `.page-hero`, `.section`
- **blog** (Farm notes): `.page-hero`, `.section.band` (the `.post-list` of up to six `.post-card` packets, one per post, then the `.pagination` bar's newer and older links)
- **blog-post**: one `<article class="post">`: a `.page-hero` with the title, the description and `.post-meta`, the `.post-lead` hills print, the `.post-body` prose from the post (its blockquote is the taped farmer's note, its last line the writer's sign-off), the `.post-back` link

Shared across pages: the header (skip link, top bar, logo, nav, one primary button) and the footer (logo, link columns, copyright).

## Motion

Keyframes: `thunk`. Every animation stops under `prefers-reduced-motion: reduce`.

## Rules

- One `h1` per page, headings in order, every image with meaningful `alt`.
- Text contrast at least 4.5:1 on every ground.
- No horizontal scroll from 360px to 1440px wide.
- No em dashes anywhere. Use a comma, a colon, parentheses or a new sentence.
- Behavior lives in `assets/js/main.js`, never inline in the HTML.
- New sections reuse the existing tokens and class patterns before adding any.

## References

- [Hudson Valley Seed Company Art Packs](https://hudsonvalleyseed.com/collections/art-packs): seed packets treated as artwork, with the growing story on the back. This inspired the packet cards and their back-of-packet spec lists.
- [Full Belly Farm, "What's in my box this week?"](https://fullbellyfarm.com/our-csa/whats-in-my-box/): a weekly box list with a farm note. This inspired the crate grid and the note beside it.
- [Harmony Valley Farm](https://harmonyvalleyfarm.com/), a Driftless CSA: a long season from spring greens to storage roots, plus half, peak and flex shares. This inspired the season calendar and the range of share sizes.

Nothing was copied: all markup, art and copy are original. No photos are used.
