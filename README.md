# QuizPemogramanWeb

Proyek sederhana yang berisi form biodata berbasis PHP dan sesi login.

## Deskripsi
Aplikasi ini adalah tugas/kuis pemrograman web yang menyimpan biodata pengguna ke dalam session dan menampilkan data tersebut setelah login.

Fitur utama:
- Halaman login sederhana (hardcoded credentials)
- Form pengisian biodata (`form.php`)
- Menampilkan biodata (`tampil.php`)
- Logout (menghapus session)
- Styling dasar di `style.css`

## Struktur file
- `index.php` - Halaman utama / menu.
- `login.php` - Form login. Kredensial hardcoded untuk demo.
- `form.php` - Form biodata (hanya dapat diakses setelah login).
- `tampil.php` - Menampilkan biodata yang disimpan di session.
- `logout.php` - Logout (memanggil `session_destroy()` dan redirect ke `index.php`).
- `style.css` - Styling untuk semua halaman.

## Kredensial default (demo)
- Username: `zuraaa`
- Password: `ramelll`

> Catatan: kredensial disimpan secara hardcoded dalam `login.php` untuk keperluan pembelajaran. Jangan gunakan cara ini pada aplikasi produksi.

## Cara menjalankan (Windows, XAMPP)
1. Pastikan XAMPP terinstall dan Apache berjalan.
2. Letakkan folder proyek di `c:\xampp\htdocs\` (dalam contoh ini: `c:\xampp\htdocs\Tugas php`).
   - Jika nama folder mengandung spasi, akses URL harus di-encode atau ubah nama folder (mis. `Tugas_php`).
3. Buka browser dan akses:
   - http://localhost/Tugas%20php/index.php  (atau jika folder diganti: `http://localhost/Tugas_php/index.php`)
4. Klik "Login" dan gunakan kredensial demo di atas.
5. Setelah login, Anda akan diarahkan ke `form.php` untuk mengisi biodata. Setelah disimpan, akan tampil di `tampil.php`.

## Keamanan dan catatan pengembangan
- Session digunakan untuk otentikasi sederhana. Pastikan `session_start()` berada di bagian atas file sebelum output HTML.
- Validasi input minimal; sanitasi tambahan direkomendasikan sebelum menyimpan/menampilkan data.
- Hindari menyimpan kredensial hardcoded — gunakan database dan hashing password untuk aplikasi nyata.
- Pertimbangkan menambahkan proteksi CSRF, validasi server-side yang lebih ketat, dan escaping/output encoding (sudah ada `htmlspecialchars` di `tampil.php`).

## Perbaikan yang disarankan / To-do
- Simpan data pengguna di database (MySQL) dan gunakan prepared statements.
- Tambahkan pendaftaran user (register) dan manajemen akun.
- Perbaiki UI/UX dan responsivitas.
- Tambahkan unit/integration tests jika proyek dikembangkan lebih lanjut.

## Lisensi
Proyek ini disediakan untuk keperluan pembelajaran. Tambahkan lisensi jika perlu (mis. MIT).

## Kontak
Pembuat / pemilik repo: MuslimGunawan

---
Terima kasih sudah melihat proyek ini! Jika mau, saya bisa bantu menambahkan README dalam bahasa Inggris atau menambahkan instruksi deploy lebih lengkap.