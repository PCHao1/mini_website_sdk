# Medium website Template

## Description

This repository contains a clean and modular template for creating a website using the Model-View-Controller (MVC) architectural pattern. It provides a structured file organization and a lightweight database solution, making it suitable for developing quick and medium-sized websites without the need for a separate database server.

File Structure:

- app/
  - config/ (Stores system configuration files)
  - init/ (Contains initialization objects and files that run on every request)
  - libraries/ (Holds third-party libraries or self-implemented code)
  - admin/ (Sample module following the MVC pattern)
  - default/ (Another sample module following the MVC pattern)
  - database.db (SQLite database file)
- public/ (Contains all public assets for the website)
- index.php (Entry point for the application)

## Features and Requirements

### PHP Version Requirement

This codebase requires PHP version 7 or later, and the SQLite PHP library must be enabled.

### Multiple Language Support

The repository supports multiple languages for internationalization. Translation files are stored in the config/ folder with the naming convention lang-_.yaml, where _ represents the language code (e.g., en, vi, etc.). The default language is set in the DEFAULT_LANG configuration.

You can use translations anywhere in your view files by utilizing the provided translation function:

`<?php echo $this->t("ManageUI"); ?>`

### Lightweight Database

One of the advantages of this repository is the inclusion of a lightweight database solution based on SQLite. This eliminates the need for a separate database server, making it suitable for quick and medium-sized website development. The repository supports the following database methods:

- insert
- update
- delete
- selectOne
- selectMulti
- query
- queryPrepare
  You can find detailed descriptions of these methods in the init/model.php file.

## How to implementing New Features

To implement a new feature, follow these steps:

1. Add your feature information to the init/router.php file. For example:

```
$this->get('/admin', [
    'module' => 'admin',
    'controller' => 'home',
    'action' => 'home',
    'title' => 'Admin Page'
]);
```

In this example, the feature is accessible via the GET HTTP method at the /admin path. It is implemented in the `home` controller within the `admin` module, and the page title is set to "Admin Page".
2. Implement the corresponding controller, model, and view files for your feature, following the MVC pattern.

---
By adhering to the provided structure and guidelines, you can effectively develop and maintain your website using this clean and modular template.
