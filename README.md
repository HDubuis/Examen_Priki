# Exam-Priki
Fork from the repo of Armand Marechal

## Local development

Clone the repo into your environement.

```bash
git clone https://github.com/Penfu/ES-CPNV-Yoda.git
```

### Package manager

First move into code directory `src/` and install packages dependencies.

```bash
cd src/
composer install
npm install
```

### Environment and Database

Setup the environment variables by making your own **.env** file from the example one.
Then run the migrations and seeders.

```bash
php artisan migrate --seed
```

### OAuth

If you attempt to use the OAuth2 provider, you will need to create a **client** and **secret** inside the .env file and configure the **curl.cainfo** inside your php.ini file.

### Public resources

Build the resources to public directory.

```bash
npm run dev
```

Optionaly watch the changes and auto build.

```bash
npm run watch
```

### Run the server

Generate the encryption key

```bash
php artisan key:generate
php artisan serve
```
