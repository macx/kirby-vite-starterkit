# Kirby & Vite Starterkit

Use this Starterkit for your next [Kirby](https://getkirby.com/)-CMS-Project. It comes with a customized Panel, customized Styles and with the build tool [Vite](https://vitejs.dev/) for fast asset bundling. [Kirby Vite](https://github.com/arnoson/kirby-vite) is building the bridge between Kirby and Vite by providing helper functions to get the correct path to the versioned assets.

This Starterkit will open the Website and it's Panel in development mode, will live reload changed Content, Assets and Templates. You can additionally use own Scripts and Styles per Page.

## Prerequisites

In order to work with this Repository, please [install Node](https://nodejs.org/en/download/) and [Yarn](https://yarnpkg.com/), if not happened before. Make sure, both is available.

```shell
$ npm install -g yarn
$ npm -v && yarn -v
```

## Installation

If your Computer is ready-to-go, clone this Repository and install it's dependencies.

```shell
$ git clone git@github.com:macx/kirby-vite-starterkit.git my-website
$ cd my-website
$ composer install
$ yarn install
```

To get feature updates from this starterkit, add a remote host entry and pull a new version. Be sure to commit your changes before. If you just want to update Kirby, [do it on your own](https://getkirby.com/docs/cookbook/setup/composer#updating-kirby).

```shell
$ git remote add updates git@github.com:macx/kirby-vite-starterkit.git
$ git pull updates
```

## Development

Foobar

<!-- prettier-ignore -->
| Folder | What's in it? |
| :-- | :--  |
| `/content` | The [content](https://getkirby.com/docs/guide/tour#where-the-content-lives) of  your  website. |
| `/src` | All your assets for the Vite bundling. `app.js` and `app.scss` are your main styles and script. |
| `/src/assets` | Folder for your global Fonts and Images. |
| `/src/templates` | Optionally, every page can contain it's own styles `index.scss` and script `index.js`. |
| `/site` | Project folder for Kirbys [Config](https://getkirby.com/docs/guide/configuration), [Blueprints](https://getkirby.com/docs/guide/blueprints/introduction), [Plugins](https://getkirby.com/docs/guide/plugins/plugin-basics), [Snippets](https://getkirby.com/docs/guide/templates/snippets) and [Templates](https://getkirby.com/docs/guide/templates/basics). |
| `/public` | The [Public folder](https://getkirby.com/docs/guide/configuration#custom-folder-setup__public-folder-setup) is your document root of your website, including the bundled assets from Vite. |

### Startits

```sh
$ yarn dev
```

```sh
$ yarn build
```

```sh
$ yarn preview
```

## Thanks to

This Starterkit was heavely inspired by the [Kirby Vite Multi Page Kit](https://github.com/arnoson/kirby-vite-multi-page-kit) from @arnoson.
