# Prof. A. Sathasivam Digital Archive – WordPress Theme, Templates & SEO Structure

This repository contains the custom WordPress code, archive templates, and documentation structure for the **Prof. A. Sathasivam D.Phil Archive Project**.

The live website documents the life, education, academic career, places, books, publications, and scholarly contributions of **Prof. A. Sathasivam M.A., D.Phil. (Oxon)**, Tamil linguist, professor, and researcher in Tamil grammar, lexicography, Dravidian linguistics, and Sumero–Dravidian studies.

**Live website:** [Prof. A. Sathasivam D.Phil Archive Project](https://professor.a-sathasivam.net/?utm_source=github.com&utm_medium=repo&utm_campaign=0xgthuva&utm_id=github.com&utm_term=repo&utm_content=repo)

---

## Table of Contents

- [Project Purpose](#project-purpose)
- [Live Archive Sections](#live-archive-sections)
- [Repository Scope](#repository-scope)
- [Recommended Repository Structure](#recommended-repository-structure)
- [Custom Post Types](#custom-post-types)
- [WordPress Template Files](#wordpress-template-files)
- [Core Archive Pages](#core-archive-pages)
- [Education Pages](#education-pages)
- [Career Pages](#career-pages)
- [Places Pages](#places-pages)
- [Books and Publications Pages](#books-and-publications-pages)
- [SEO and Internal Linking Strategy](#seo-and-internal-linking-strategy)
- [Menu Structure](#menu-structure)
- [Installation](#installation)
- [Security and Privacy Policy](#security-and-privacy-policy)
- [Editorial Guidelines](#editorial-guidelines)
- [Suggested Git Ignore](#suggested-git-ignore)
- [Credits](#credits)

---

## Project Purpose

The purpose of this project is to preserve and present the scholarly legacy of **Prof. A. Sathasivam** through a structured digital archive.

The archive is organized around five major areas:

1. **Biography** – the life and background of Prof. A. Sathasivam.
2. **Education** – schools, colleges, universities, and research institutions connected to his academic formation.
3. **Career** – teaching posts, professorial appointments, university service, and international research networks.
4. **Places** – locations connected to his birth, education, teaching, research, and scholarly development.
5. **Books & Publications** – books, dictionaries, research works, conference papers, and later studies about his scholarship.

This repository supports the live WordPress website by providing clean templates, archive-page structures, custom post type support, internal linking logic, and SEO-friendly documentation.

---

## Live Archive Sections

| Section | Live URL | Purpose |
|---|---|---|
| Home | [professor.a-sathasivam.net](https://professor.a-sathasivam.net/?utm_source=github.com&utm_medium=repo&utm_campaign=0xgthuva&utm_id=github.com&utm_term=repo&utm_content=repo) | Main biography and archive introduction |
| Books & Works | [Digital Archive – Books & Works](https://professor.a-sathasivam.net/books/) | Books, publications, and scholarly works |
| Places | [Places Connected to Prof. A. Sathasivam](https://professor.a-sathasivam.net/places/) | Geographic places connected to his life and research |
| Education | [Educational Institutions](https://professor.a-sathasivam.net/education/) | Schools, colleges, and universities |
| Career | [Academic Career & University Service](https://professor.a-sathasivam.net/career/) | Academic appointments and research networks |
| Contact | [Contact](https://professor.a-sathasivam.net/contact/) | Archive contact details |

---

## Repository Scope

This repository is intended to contain **custom WordPress code only**.

It may include:

- Custom child theme files.
- Custom archive templates.
- Custom single post templates.
- Custom post type plugin code.
- CSS and JavaScript written specifically for this archive.
- Documentation for content structure, SEO, and internal linking.

It should not include:

- WordPress core files.
- Database exports.
- `wp-config.php`.
- Uploaded media files.
- Cache files.
- Backup files.
- Premium theme or premium plugin source code unless redistribution is permitted by license.

---

## Recommended Repository Structure

```text
prof-sathasivam-digital-archive/
│
├── README.md
├── .gitignore
│
├── theme/
│   └── sathasivam-child/
│       ├── style.css
│       ├── functions.php
│       ├── archive-education.php
│       ├── single-education.php
│       ├── archive-career.php
│       ├── single-career.php
│       ├── archive-places.php
│       ├── single-places.php
│       ├── archive-books.php
│       ├── single-books.php
│       └── assets/
│
├── plugin/
│   └── sathasivam-archive-cpt/
│       └── sathasivam-archive-cpt.php
│
└── docs/
    ├── setup.md
    ├── content-structure.md
    ├── internal-linking.md
    ├── seo-plan.md
    └── archive-taxonomy.md
```

---

## Custom Post Types

The website is structured around the following custom post types:

| Post Type | Archive URL | Template Files | Purpose |
|---|---|---|---|
| `education` | [`/education/`](https://professor.a-sathasivam.net/education/) | `archive-education.php`, `single-education.php` | Educational institutions and academic formation |
| `career` | [`/career/`](https://professor.a-sathasivam.net/career/) | `archive-career.php`, `single-career.php` | Academic appointments and research networks |
| `places` | [`/places/`](https://professor.a-sathasivam.net/places/) | `archive-places.php`, `single-places.php` | Places connected to life and scholarship |
| `books` | [`/books/`](https://professor.a-sathasivam.net/books/) | `archive-books.php`, `single-books.php` | Books, publications, and works |

Suggested WordPress CPT settings:

```php
'public'       => true,
'has_archive'  => true,
'show_in_rest' => true,
'rewrite'      => array( 'slug' => 'career' ),
'supports'     => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' ),
```

Use the correct slug for each post type: `education`, `career`, `places`, and `books`.

---

## WordPress Template Files

The custom theme templates are designed to create hub-and-detail archive pages.

| Template | Used For |
|---|---|
| `archive-education.php` | Education archive landing page and education post grid |
| `single-education.php` | Individual education institution page |
| `archive-career.php` | Career archive landing page and career timeline |
| `single-career.php` | Individual career period page |
| `archive-places.php` | Places archive landing page and places post grid |
| `single-places.php` | Individual place page |
| `archive-books.php` | Books and publications archive |
| `single-books.php` | Individual book or publication page |

The archive templates should include:

- A clear H1 heading.
- Introductory content for users and search engines.
- A timeline, treemap, or sectioned card layout.
- Internal links to related archive sections.
- A dynamic loop filtered by the current custom post type.

---

## Core Archive Pages

These are the main hub pages. They should receive internal links from related single pages.

| Hub Page | URL | Recommended H1 |
|---|---|---|
| Education | [Education](https://professor.a-sathasivam.net/education/) | Educational Institutions Connected to Prof. A. Sathasivam |
| Career | [Career](https://professor.a-sathasivam.net/career/) | Academic Career & University Service of Prof. A. Sathasivam |
| Places | [Places](https://professor.a-sathasivam.net/places/) | Places Connected to Prof. A. Sathasivam |
| Books | [Books & Works](https://professor.a-sathasivam.net/books/) | Books, Research Papers & Contributions |

---

## Education Pages

The education section documents schools, colleges, and universities connected to Prof. Sathasivam’s academic formation.

| Page | URL | Suggested Internal Links |
|---|---|---|
| Araly Saraswathy Vidyalayam | [View page](https://professor.a-sathasivam.net/education/araly-saraswathy-vidyalayam/) | Link to [Araly Hindu English School](https://professor.a-sathasivam.net/education/araly-hindu-english-school/) and [Araly South, Jaffna](https://professor.a-sathasivam.net/places/araly-south-jaffna/) |
| Araly Hindu English School | [View page](https://professor.a-sathasivam.net/education/araly-hindu-english-school/) | Link to [Jaffna College](https://professor.a-sathasivam.net/education/jaffna-college-vaddukoddai/) and [Araly Saraswathy Vidyalayam](https://professor.a-sathasivam.net/education/araly-saraswathy-vidyalayam/) |
| Jaffna College, Vaddukoddai | [View page](https://professor.a-sathasivam.net/education/jaffna-college-vaddukoddai/) | Link to [Ananda College, Colombo](https://professor.a-sathasivam.net/education/ananda-college-colombo/) and [Araly South, Jaffna](https://professor.a-sathasivam.net/places/araly-south-jaffna/) |
| Ananda College, Colombo | [View page](https://professor.a-sathasivam.net/education/ananda-college-colombo/) | Link to [University of Ceylon, Peradeniya](https://professor.a-sathasivam.net/education/university-of-ceylon-peradeniya/) and [Colombo](https://professor.a-sathasivam.net/places/colombo/) |
| University of Ceylon, Peradeniya | [View page](https://professor.a-sathasivam.net/education/university-of-ceylon-peradeniya/) | Link to [Peradeniya](https://professor.a-sathasivam.net/places/peradeniya/), [Early Academic Career at Peradeniya](https://professor.a-sathasivam.net/career/early-academic-career-at-peradeniya-1952-1965/), and [University of Oxford](https://professor.a-sathasivam.net/education/university-of-oxford/) |
| University of Oxford | [View page](https://professor.a-sathasivam.net/education/university-of-oxford/) | Link to [Oxford](https://professor.a-sathasivam.net/places/oxford/), [International Research Fellowships](https://professor.a-sathasivam.net/career/international-research-fellowships-and-networks/), and [Proto Sumero Dravidian](https://professor.a-sathasivam.net/books/proto-sumero-dravidian/) |

### Education archive internal links

The [`/education/`](https://professor.a-sathasivam.net/education/) archive page should link every timeline item to the relevant education page. Mentions of Peradeniya, Oxford, Colombo, Jaffna, and Araly should also link to the corresponding education or place pages.

---

## Career Pages

The career section documents Prof. Sathasivam’s academic appointments, department leadership, professorial roles, and international research activity.

| Page | URL | Suggested Internal Links |
|---|---|---|
| Early Academic Career at Peradeniya, 1952–1965 | [View page](https://professor.a-sathasivam.net/career/early-academic-career-at-peradeniya-1952-1965/) | Link to [University of Ceylon, Peradeniya](https://professor.a-sathasivam.net/education/university-of-ceylon-peradeniya/) and [Peradeniya](https://professor.a-sathasivam.net/places/peradeniya/) |
| Tamil Department Leadership in Colombo, 1965–1969 | [View page](https://professor.a-sathasivam.net/career/tamil-department-leadership-in-colombo-1965-1969/) | Link to [Colombo](https://professor.a-sathasivam.net/places/colombo/) and [Professor and Head at Colombo Campus](https://professor.a-sathasivam.net/career/professor-and-head-at-colombo-campus-1970-1980/) |
| Professor and Head at Colombo Campus, 1970–1980 | [View page](https://professor.a-sathasivam.net/career/professor-and-head-at-colombo-campus-1970-1980/) | Link to [Colombo](https://professor.a-sathasivam.net/places/colombo/), [Dictionary of Ceylon Tamil Usage](https://professor.a-sathasivam.net/books/dictionary-of-ceylon-tamil-usage/), and [Proto Sumero Dravidian](https://professor.a-sathasivam.net/books/proto-sumero-dravidian/) |
| Professor of Tamil at Peradeniya, 1981–1988 | [View page](https://professor.a-sathasivam.net/career/professor-of-tamil-at-peradeniya-1981-1988/) | Link to [Peradeniya](https://professor.a-sathasivam.net/places/peradeniya/) and [University of Ceylon, Peradeniya](https://professor.a-sathasivam.net/education/university-of-ceylon-peradeniya/) |
| International Research Fellowships and Networks | [View page](https://professor.a-sathasivam.net/career/international-research-fellowships-and-networks/) | Link to [Oxford](https://professor.a-sathasivam.net/places/oxford/), [Philadelphia](https://professor.a-sathasivam.net/places/philadelphia/), [Berkeley](https://professor.a-sathasivam.net/places/berkeley/), [Thanjavur](https://professor.a-sathasivam.net/places/thanjavur/), [Tokyo](https://professor.a-sathasivam.net/places/tokyo/), and [Proto Sumero Dravidian](https://professor.a-sathasivam.net/books/proto-sumero-dravidian/) |

### Career archive internal links

The [`/career/`](https://professor.a-sathasivam.net/career/) archive page should link each rounded timeline row to the correct career page. Mentions of Peradeniya, Colombo, Oxford, Pennsylvania, Berkeley, Thanjavur, and Tokyo should link to relevant place, education, or career pages.

---

## Places Pages

The places section maps the geography of Prof. Sathasivam’s life and scholarship.

| Page | URL | Suggested Internal Links |
|---|---|---|
| Araly South, Jaffna | [View page](https://professor.a-sathasivam.net/places/araly-south-jaffna/) | Link to [Araly Saraswathy Vidyalayam](https://professor.a-sathasivam.net/education/araly-saraswathy-vidyalayam/) and [Araly Hindu English School](https://professor.a-sathasivam.net/education/araly-hindu-english-school/) |
| Jaffna | [View page](https://professor.a-sathasivam.net/places/jaffna/) | Link to [Jaffna College, Vaddukoddai](https://professor.a-sathasivam.net/education/jaffna-college-vaddukoddai/) |
| Colombo | [View page](https://professor.a-sathasivam.net/places/colombo/) | Link to [Ananda College](https://professor.a-sathasivam.net/education/ananda-college-colombo/), [Tamil Department Leadership in Colombo](https://professor.a-sathasivam.net/career/tamil-department-leadership-in-colombo-1965-1969/), and [Professor and Head at Colombo Campus](https://professor.a-sathasivam.net/career/professor-and-head-at-colombo-campus-1970-1980/) |
| Peradeniya | [View page](https://professor.a-sathasivam.net/places/peradeniya/) | Link to [University of Ceylon, Peradeniya](https://professor.a-sathasivam.net/education/university-of-ceylon-peradeniya/), [Early Academic Career at Peradeniya](https://professor.a-sathasivam.net/career/early-academic-career-at-peradeniya-1952-1965/), and [Professor of Tamil at Peradeniya](https://professor.a-sathasivam.net/career/professor-of-tamil-at-peradeniya-1981-1988/) |
| Oxford | [View page](https://professor.a-sathasivam.net/places/oxford/) | Link to [University of Oxford](https://professor.a-sathasivam.net/education/university-of-oxford/) and [International Research Fellowships](https://professor.a-sathasivam.net/career/international-research-fellowships-and-networks/) |
| Philadelphia | [View page](https://professor.a-sathasivam.net/places/philadelphia/) | Link to [International Research Fellowships](https://professor.a-sathasivam.net/career/international-research-fellowships-and-networks/) |
| Berkeley | [View page](https://professor.a-sathasivam.net/places/berkeley/) | Link to [International Research Fellowships](https://professor.a-sathasivam.net/career/international-research-fellowships-and-networks/) and [Proto Sumero Dravidian](https://professor.a-sathasivam.net/books/proto-sumero-dravidian/) |
| Thanjavur | [View page](https://professor.a-sathasivam.net/places/thanjavur/) | Link to [International Research Fellowships](https://professor.a-sathasivam.net/career/international-research-fellowships-and-networks/) and [Dictionary of Ceylon Tamil Usage](https://professor.a-sathasivam.net/books/dictionary-of-ceylon-tamil-usage/) |
| Tokyo | [View page](https://professor.a-sathasivam.net/places/tokyo/) | Link to [International Research Fellowships](https://professor.a-sathasivam.net/career/international-research-fellowships-and-networks/) |

---

## Books and Publications Pages

The books section documents Prof. Sathasivam’s major works, including books, dictionaries, research publications, and later studies about his scholarship.

| Page | URL | Suggested Internal Links |
|---|---|---|
| Dictionary of Ceylon Tamil Usage | [View page](https://professor.a-sathasivam.net/books/dictionary-of-ceylon-tamil-usage/) | Link to [Professor and Head at Colombo Campus](https://professor.a-sathasivam.net/career/professor-and-head-at-colombo-campus-1970-1980/) and [Thanjavur](https://professor.a-sathasivam.net/places/thanjavur/) |
| Proto Sumero Dravidian | [View page](https://professor.a-sathasivam.net/books/proto-sumero-dravidian/) | Link to [International Research Fellowships](https://professor.a-sathasivam.net/career/international-research-fellowships-and-networks/), [Oxford](https://professor.a-sathasivam.net/places/oxford/), [Berkeley](https://professor.a-sathasivam.net/places/berkeley/), and [Philadelphia](https://professor.a-sathasivam.net/places/philadelphia/) |
| The Structure of the Tamil Verb | [View page](https://professor.a-sathasivam.net/books/structure-of-the-tamil-verb/) | Link to [University of Oxford](https://professor.a-sathasivam.net/education/university-of-oxford/) and [University of Ceylon, Peradeniya](https://professor.a-sathasivam.net/education/university-of-ceylon-peradeniya/) |
| Origin and Development of Tamil Words | [View page](https://professor.a-sathasivam.net/books/origin-and-development-of-tamil-words/) | Link to [Dictionary of Ceylon Tamil Usage](https://professor.a-sathasivam.net/books/dictionary-of-ceylon-tamil-usage/) and [Tamil research in Thanjavur](https://professor.a-sathasivam.net/places/thanjavur/) |
| Moli – Ilakkiyam – Iraineri | [View page](https://professor.a-sathasivam.net/books/moli-ilakkiyam-iraineri/) | Link to [Tamil Department Leadership in Colombo](https://professor.a-sathasivam.net/career/tamil-department-leadership-in-colombo-1965-1969/) |
| Aarachik Kaddurai Ezuthum Murai | [View page](https://professor.a-sathasivam.net/books/aarachik-kaddurai-ezuthum-murai/) | Link to [Early Academic Career at Peradeniya](https://professor.a-sathasivam.net/career/early-academic-career-at-peradeniya-1952-1965/) |
| Ilattut Tamil Kavithaik Kallannciyam | [View page](https://professor.a-sathasivam.net/books/ilattut-tamil-kavithaik-kallannciyam/) | Link to [Moli – Ilakkiyam – Iraineri](https://professor.a-sathasivam.net/books/moli-ilakkiyam-iraineri/) |
| Gnanap Pallu | [View page](https://professor.a-sathasivam.net/books/gnanap-pallu/) | Link to [Books & Works](https://professor.a-sathasivam.net/books/) |
| Research and Scholarly Skills of Linguistics Professor A. Sathasivam | [View page](https://professor.a-sathasivam.net/books/research-and-scholarly-skills/) | Link to [Career](https://professor.a-sathasivam.net/career/) and [Proto Sumero Dravidian](https://professor.a-sathasivam.net/books/proto-sumero-dravidian/) |

---

## SEO and Internal Linking Strategy

The archive uses a **hub-and-spoke SEO model**.

### Hub pages

The hub pages are:

- [Education](https://professor.a-sathasivam.net/education/)
- [Career](https://professor.a-sathasivam.net/career/)
- [Places](https://professor.a-sathasivam.net/places/)
- [Books & Works](https://professor.a-sathasivam.net/books/)

These pages introduce the topic and link to all relevant subpages.

### Spoke pages

The spoke pages are individual education, career, place, and book pages.

Each spoke page should link back to:

1. Its parent hub page.
2. One previous or next related page.
3. One relevant place page.
4. One relevant career or book page.

### Cornerstone pages

These pages should receive the most internal links:

- [University of Ceylon, Peradeniya](https://professor.a-sathasivam.net/education/university-of-ceylon-peradeniya/)
- [University of Oxford](https://professor.a-sathasivam.net/education/university-of-oxford/)
- [Academic Career & University Service](https://professor.a-sathasivam.net/career/)
- [International Research Fellowships and Networks](https://professor.a-sathasivam.net/career/international-research-fellowships-and-networks/)
- [Peradeniya](https://professor.a-sathasivam.net/places/peradeniya/)
- [Oxford](https://professor.a-sathasivam.net/places/oxford/)
- [Proto Sumero Dravidian](https://professor.a-sathasivam.net/books/proto-sumero-dravidian/)
- [Dictionary of Ceylon Tamil Usage](https://professor.a-sathasivam.net/books/dictionary-of-ceylon-tamil-usage/)

### Recommended anchor text

Use natural, descriptive anchor text.

Good examples:

- `University of Ceylon, Peradeniya`
- `D.Phil. studies at the University of Oxford`
- `Professor and Head at Colombo Campus`
- `international research fellowships`
- `Dictionary of Ceylon Tamil Usage`
- `Sumero–Dravidian research`

Avoid generic anchor text such as:

- `click here`
- `read more`
- `this page`

`Read More` buttons are acceptable for cards, but body text should use descriptive internal links.

---

## Menu Structure

Recommended primary navigation:

```text
Home
Digital Archive – Books & Works
Places
Education
Career
Contact
```

Recommended dropdown structure:

### Education

- [Ananda College, Colombo](https://professor.a-sathasivam.net/education/ananda-college-colombo/)
- [Araly Hindu English School](https://professor.a-sathasivam.net/education/araly-hindu-english-school/)
- [Araly Saraswathy Vidyalayam](https://professor.a-sathasivam.net/education/araly-saraswathy-vidyalayam/)
- [Jaffna College, Vaddukoddai](https://professor.a-sathasivam.net/education/jaffna-college-vaddukoddai/)
- [University of Ceylon, Peradeniya](https://professor.a-sathasivam.net/education/university-of-ceylon-peradeniya/)
- [University of Oxford](https://professor.a-sathasivam.net/education/university-of-oxford/)

### Career

- [Early Academic Career at Peradeniya, 1952–1965](https://professor.a-sathasivam.net/career/early-academic-career-at-peradeniya-1952-1965/)
- [Tamil Department Leadership in Colombo, 1965–1969](https://professor.a-sathasivam.net/career/tamil-department-leadership-in-colombo-1965-1969/)
- [Professor and Head at Colombo Campus, 1970–1980](https://professor.a-sathasivam.net/career/professor-and-head-at-colombo-campus-1970-1980/)
- [Professor of Tamil at Peradeniya, 1981–1988](https://professor.a-sathasivam.net/career/professor-of-tamil-at-peradeniya-1981-1988/)
- [International Research Fellowships and Networks](https://professor.a-sathasivam.net/career/international-research-fellowships-and-networks/)

### Places

- [Araly South, Jaffna](https://professor.a-sathasivam.net/places/araly-south-jaffna/)
- [Jaffna](https://professor.a-sathasivam.net/places/jaffna/)
- [Colombo](https://professor.a-sathasivam.net/places/colombo/)
- [Peradeniya](https://professor.a-sathasivam.net/places/peradeniya/)
- [Oxford](https://professor.a-sathasivam.net/places/oxford/)
- [Philadelphia](https://professor.a-sathasivam.net/places/philadelphia/)
- [Berkeley](https://professor.a-sathasivam.net/places/berkeley/)
- [Thanjavur](https://professor.a-sathasivam.net/places/thanjavur/)
- [Tokyo](https://professor.a-sathasivam.net/places/tokyo/)

---

## Installation

1. Copy the child theme folder into:

```text
wp-content/themes/sathasivam-child/
```

2. Copy the custom post type plugin into:

```text
wp-content/plugins/sathasivam-archive-cpt/
```

3. Activate the child theme in WordPress:

```text
Dashboard → Appearance → Themes
```

4. Activate the custom plugin:

```text
Dashboard → Plugins
```

5. Refresh permalinks:

```text
Dashboard → Settings → Permalinks → Save Changes
```

6. Rebuild menus:

```text
Dashboard → Appearance → Menus
```

or, for block themes:

```text
Dashboard → Appearance → Editor → Navigation
```

7. Clear site cache and browser cache after deployment.

---

## Security and Privacy Policy

Do not commit any private or sensitive files.

Never publish:

```text
wp-config.php
.env
.htaccess with private rules
database exports
backup zip files
wp-content/uploads/
wp-content/cache/
wp-content/backups/
wp-content/debug.log
premium plugin files
premium theme source files without permission
```

Uploaded media, PDFs, scans, and archive documents should be managed through WordPress or a private storage process unless they are cleared for public redistribution.

---

## Editorial Guidelines

The archive should use careful, neutral, and historically responsible language.

### Biography and academic history

- Use verified dates and institutions.
- Keep names consistent: `Prof. A. Sathasivam M.A., D.Phil. (Oxon)`.
- Mention roles and appointments with dates where available.

### Sumero–Dravidian research

When describing Sumero–Dravidian material, use careful wording such as:

- `Prof. Sathasivam’s Sumero–Dravidian hypothesis`
- `his comparative linguistic research`
- `his proposed connection between Sumerian and Dravidian languages`

Avoid presenting the hypothesis as settled academic consensus unless a page is specifically discussing Sathasivam’s own argument.

### Page content rules

Every archive page should include:

- One clear H1 heading.
- Introductory paragraphs.
- A timeline, card grid, or content map.
- Internal links to related pages.
- A closing paragraph summarizing the section.

Every single page should include:

- One H1 heading.
- A short introduction.
- Historical context.
- Connection to Prof. Sathasivam.
- Related internal links.

---

## Suggested Git Ignore

If the repository only contains custom code in `theme/`, `plugin/`, and `docs/`, use this simple `.gitignore`:

```gitignore
.DS_Store
Thumbs.db
.env
*.log
*.sql
*.sql.gz
*.zip
*.tar
*.tar.gz
node_modules/
vendor/
.vscode/
.idea/
```

If the repository is created inside a full WordPress installation, use a stricter `.gitignore`:

```gitignore
# WordPress core
/wp-admin/
/wp-includes/

# Config and secrets
wp-config.php
.env
*.key
*.pem

# Uploads and generated files
/wp-content/uploads/
/wp-content/cache/
/wp-content/upgrade/
/wp-content/backup*/
/wp-content/backups/
/wp-content/wflogs/
/wp-content/debug.log

# Database and backups
*.sql
*.sql.gz
*.zip
*.tar
*.tar.gz
*.bak

# Logs and editor files
*.log
.DS_Store
Thumbs.db
.vscode/
.idea/

# Dependencies
node_modules/
vendor/
```

---

## Credits

This repository supports the **Prof. A. Sathasivam D.Phil Archive Project**.

Live website: [https://professor.a-sathasivam.net/](https://professor.a-sathasivam.net/)

Archive contact details are available on the [Contact](https://professor.a-sathasivam.net/contact/) page.

Developed and maintained for the preservation, organization, and presentation of Prof. A. Sathasivam’s educational, academic, and scholarly legacy.
