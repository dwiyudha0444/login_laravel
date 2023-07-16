## LARAVEL 10
- Login menggunakan Node.JS
  
## FITUR
- Login Multi User
- Admin akan diarahkan ke halaman dashboard-admin
- Client akan diarahkan ke halaman dashboard
- Admin bisa akses semua halaman
- Client tidak bisa akses halaman dashboard-admin

# INSTALLASI
- composer install
- npm install
- ubah .env.example ke .env
- php artisan key:generate
- composer update

# JALANKAN APK
- php artisan serve
- npm run dev
  
# TAMBAHKAN CREDENTIALS
protected function credentials(Request $request)
    {
        // return $request->only($this->username(), 'password');
        return array_merge(
            $request->only($this->username(),'password'),
            ['isactive'=>1]
        );
    }
