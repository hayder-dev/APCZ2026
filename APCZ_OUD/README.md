# APCZ Static Website (upload-klaar)

Dit pakket is een **nieuwe, luxe, statische website** in geel/zwart/wit voor:
**Auto Poets Centrale Zaanstad**.

> Let op: dit is **geen 1-op-1 kopie** van een bestaande website. Het is een eigen design/layout in dezelfde “premium” stijl.

---

## 1) Uploaden (in 1 keer)
Je krijgt straks een ZIP. Unzip lokaal en upload de inhoud naar:

### Optie A — Nieuwe map op je hosting (veilig testen)
Upload naar bijvoorbeeld:
`public_html/nieuw/`

Dan open je:
`https://jouwdomein.nl/nieuw/`

### Optie B — Als echte homepage (vervangt je huidige site)
Upload naar `public_html/` (root).
⚠️ Dit overschrijft je huidige homepage als die op dezelfde plek draait.

---

## 2) Foto’s vervangen (belangrijk)
Vervang de placeholder afbeeldingen in:
`assets/img/`

Aanrader:
- Hero beelden: **1600×900** of groter
- Formaat: JPG/WebP

Bestandsnamen die nu gebruikt worden:
- `hero-1.svg`, `hero-2.svg`, `hero-3.svg`  (vervang door .jpg of .webp, en pas dan de verwijzingen aan in index.html)
- Je kunt ook gewoon de bestandsnaam gelijk houden (bijv. `hero-1.jpg`) en in `index.html` de slider aanpassen bij `data-slides`.

---

## 3) WhatsApp / telefoon / e-mail aanpassen
Zoek in de HTML bestanden naar:
- `06 - 49777080`
- `info@autopoetscentralezaanstad.nl`
- `https://wa.me/31649777080`

---

## 4) Contactformulier werkt via Formspree (simpel)
In `contact.html` staat:
`action="https://formspree.io/f/your_form_id"`

Maak een Formspree endpoint en plak je echte URL in.

Wil je liever mailen via je eigen hosting (PHP), zeg het, dan maak ik een `send.php` + veilige mail setup.

---

## Structuur
- `index.html`
- `over.html`
- `diensten.html`
- `projecten.html`
- `zakelijk.html`
- `contact.html`
- `privacy.html`
- `voorwaarden.html`
- `assets/css/style.css`
- `assets/js/main.js`
- `assets/img/*`

Veel succes — als je me je echte foto’s geeft (of bestandsnamen), kan ik de slider + gallery direct exact afstellen.
