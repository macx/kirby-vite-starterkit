# Kirby & Vite Starterkit

Use this Starterkit for your next [Kirby](https://getkirby.com/)-CMS-Project. It comes with a customized Panel, customized Styles and with the build tool [Vite](https://vitejs.dev/) for fast asset bundling. [Kirby Vite](https://github.com/arnoson/kirby-vite) is building the bridge between Kirby and Vite by providing helper functions to get the correct path to the versioned assets.

This Starterkit will open the Website and it's Panel in development mode, will live reload changed Content, Assets and Templates. You can additionally use own Scripts and Styles per Page.

## Prerequisites

Kirby is a file-based CMS based on PHP. Please make sure your environment meets the [Kirby requirements](https://getkirby.com/docs/guide/quickstart#requirements).

For the frontend development, this package requires [Node.js](https://nodejs.org/en/download/), [corepack](https://github.com/nodejs/corepack) and [Composer](https://getcomposer.org/download/) to be installed. Corepack is used to install the locked package manager (pnpm), where Composer is used to manage PHP dependencies.

<details>
  <summary>Install Node.js and corepack</summary>

Follow the official installation guide of [Node.js](https://nodejs.org/en/download/) and be sure to choose the LTS version. If your Node.js is higher than the LTS version, you need to "downgrade" it.

Corepack is shipped with Node.js until version 25 and is enabled by default.

</details>

<details>
  <summary>Uninstall your global Package Managers</summary>

You need to uninstall your global Yarn and pnpm binaries to avoid conflicts with corepack.

```shell
npm uninstall -g yarn pnpm
```

</details>

## Installation

If your Computer is ready-to-go, clone this Repository and install it's dependencies.

```shell
git clone git@github.com:macx/kirby-vite-starterkit.git my-new-project
cd my-new-project
composer install
corepack enable
pnpm install
```

To get feature updates from this starterkit, add a remote host entry and pull a new version. Be sure to commit your changes before. If you just want to update Kirby, [do it on your own](https://getkirby.com/docs/cookbook/setup/composer#updating-kirby).

```shell
$ git remote add updates git@github.com:macx/kirby-vite-starterkit.git
$ git pull updates
```

## Development

To start the development server, run:

```sh
pnpm run dev
```

You can also run the following commands:

```sh
# Build the project
pnpm run build

# Preview the built project
pnpm run preview
```

#### Folder Structure

<!-- prettier-ignore -->
| Folder | What's in it? |
| :-- | :--  |
| `/content` | The [content](https://getkirby.com/docs/guide/tour#where-the-content-lives) of  your  website. |
| `/src` | All your assets for the Vite bundling. `main.js` and `main.css` are your main styles and script. |
| `/src/assets` | Folder for your global Fonts and Images. |
| `/src/templates` | Optionally, every page can contain it's own styles `index.css` and script `index.js`. |
| `/site` | Project folder for Kirbys [Config](https://getkirby.com/docs/guide/configuration), [Blueprints](https://getkirby.com/docs/guide/blueprints/introduction), [Plugins](https://getkirby.com/docs/guide/plugins/plugin-basics), [Snippets](https://getkirby.com/docs/guide/templates/snippets) and [Templates](https://getkirby.com/docs/guide/templates/basics). |
| `/public` | The [Public folder](https://getkirby.com/docs/guide/configuration#custom-folder-setup__public-folder-setup) is your document root of your website, including the bundled assets from Vite. |

## Thanks to

This Starterkit was heavely inspired by the [Kirby Vite Multi Page Kit](https://github.com/arnoson/kirby-vite-multi-page-kit) from @arnoson.
