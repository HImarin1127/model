# CodeIgniter-like PHP MVC Example

This repository demonstrates a simple PHP MVC application inspired by the CodeIgniter framework. The example implements a basic employee login system with a controller, model, and views.

## Quick Start

If you already have PHP installed, you can run the application with the built-in server:

```bash
php -S localhost:8000
```

Then open `http://localhost:8000/index.php` in your browser.

## Running with XAMPP

If you do not have PHP available, you can use the XAMPP distribution which bundles Apache, MySQL, and PHP.

1. Download the XAMPP installer from [https://www.apachefriends.org/](https://www.apachefriends.org/).
2. Install XAMPP following the instructions for your operating system.
3. Copy or clone this repository into the `htdocs` directory of your XAMPP installation.
4. Start the Apache service from the XAMPP control panel (or run `sudo /opt/lampp/lampp start` on Linux).
5. Navigate to `http://localhost/index.php` to see the login page.

A helper script `setup_xampp.sh` is included which attempts to download and launch the Linux installer automatically. Run it with:

```bash
./setup_xampp.sh
```

*(The script requires internet access and sudo privileges.)*
