# Card Page Web

This project is a simple Discord-inspired profile card. Everything is configured from a single file, so you can quickly change the banner, socials, and projects without touching the HTML or CSS.

## Setup

Open `index.html` in your browser. No build step is needed.

## Configuration

Edit `config.js` at the root of the project.

### User

Update `user.name`, `user.handle`, `user.status`, `user.tagline`, `user.avatar`, and `user.banner`.

### Socials

Replace the list in `socialNetworks`. Each entry appears as a badge.

### Projects

Replace the list in `projects`. Keep it simple and consistent.

Example format (three items):

- title: Exemple
- description: This is an example
- link: exemple.com
- tags: Exemple

- title: Exemple
- description: This is an example
- link: exemple.com
- tags: Exemple

- title: Exemple
- description: This is an example
- link: exemple.com
- tags: Exemple

## Notes

- Icons use Bootstrap Icons. The `icon` field expects a class name like `bi-github`.
- You can switch themes with the top-right button. The default is dark.
