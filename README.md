# Papyrus Starter Project

This is a boilerplate directory structure to quickly get up and running with your own Papyrus project. It also includes the starter theme as a dependency so that the site will be fully functioning after installation.

## Usage

```sh
composer create-project soma/papyrus-project [project-directory]
```

The required paths need to be created by the framework before you can run your application. You can do so by running the `app:install` command [after you've configured](https://soma-php.github.io/papyrus/docs.html) your `.env`.

```sh
php appctrl app:install
```

Now try serving the website and visit it using your browser!

```sh
php appctrl app:serve
```

## License

MIT
