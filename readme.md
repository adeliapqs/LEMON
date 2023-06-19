<p align="center"><img src="https://i.imgur.com/2v6AyjS.png" width="200"></p>

## LEMON - EASY TRACKING YOUR MONEY

LEMON adalah aplikasi opens source yang dikembangkan untuk mencatat problem keuangan, seperti keuangan masuk / debit dan keuangan keluar / credit. Beberapa fitur diantaranya:

- Daftar (Development)
- Masuk / Login
- Lupa Password (Development)
- Dashboard
- Kategori Uang Masuk
- Uang Masuk
- Kategori Uang keluar
- Uang keluar

LEMON juga akan dibuat versi native android, yang rencana akan di kembangkan dengan android studi / java.
Untuk versi webnya menggunakan Framework Laravel

**NOTE**: template admin menggunakan stisla, untuk lebih lengkapnya bisa kunjungi situs resminya di: https://getstisla.com/


## Cara Install

`$ > git clone https://github.com/maulayyacyber/LEMON-laravel.git`

`$ > cd LEMON-laravel`

`$ > composer install`

`$ > cp env.example .env`

silahkan konfigurasi pengaturan database, seperti host, user, password dan nama database

`$ > composer dump-autoload`

`$ > php artisan migrate`

`$ > php artisan db:seed`


USERNAME : admin

PASSWORD : admin

## Cara Menjalankan

`$ > cd LEMON-laravel`

`$ > php artisan serve`

Silahkan buka browser dan ketikkan : http://localhost:8000

## License

LEMON is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
