### Jelaskan secara singkat (2 - 3 paragraf) arsitektur, prinsip, pendekatan, atau hal lainnya yang digunakan dalam pengembangan aplikasi ini.

Arsitektur yang digunakan dalam mengembangkan aplikasi ini adalah Arsitektur MVC (Model-View-Controller). Ketiga komponen tersebut mempunyai tugas masing-masing yaitu Komponen Model bertugas untuk menangani pengolahan data, Komponen View bertugas untuk menangani pengolahan tampilan kepada pengguna dan Komponen Controller bertugas untuk menangani pengerjaan bisnis proses.

Model yang digunakan dalam aplikasi ini ada 3 yaitu Model User untuk mengelola data user, Model Post untuk mengelola data Post dari User dan Model Comment untuk mengelola data Comment pada Post. View yang digunakan pada aplikasi ada 3 yaitu View Post untuk menampilkan data content post, View User untuk menampilkan user list beserta comment user tersebut dan View Comment untuk menampilkan comment guest yang tidak terdaftar disistem. Controller yang digunakan pada aplikasi ini ada 3, PostController untuk mengambil data content post dari model post dan memberikan data ke view post, UserController untuk mengambil data user list dari model user dan memberikan data ke view user dan CommentController untuk mengambil data dari model comment dan memberikan data ke view comment.

### Apa kekurangan dari aplikasi yang dibangun ini dalam beberapa aspek berikut :
### - Fitur

Fitur yang kurang dari aplikasi ini adalah tidak adanya fitur login yang mana semua orang bisa melihat data tanpa harus login terlebih dahulu.

### - Performa

Performa yang kurang dari aplikasi ini adalah tidak menggunakan pagination atau ajax server side pada tabel yang mana membuat performa aplikasi menurun karena data yang diambil tidak dibatasi.

### - Kualitas Kode

Kualitas Kode yang kurang dari aplikasi ini adalah tidak menggunakan Service Class yang mana digunakan untuk memisahkan logic pada controller, sehingga logic tersebut bisa digunakan secara berulang tanpa menulis kodenya kembali.
