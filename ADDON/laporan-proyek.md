# KATA PENGANTAR

Puji syukur ke hadirat Allah SWT atas rahmat dan karunia-Nya sehingga laporan proyek ini dapat disusun dengan baik dan selesai tepat pada waktunya. Laporan ini disusun sebagai bagian dari pelaksanaan beberapa mata kuliah, yaitu Perancangan Sistem Informasi, Web Programming, Manajemen Proyek Sistem Informasi, Pemodelan Sistem Informasi, dan Software Quality Assurance, yang diintegrasikan ke dalam satu proyek kelompok.

Proyek yang dibahas dalam laporan ini berjudul **Pembuatan Website Pusat Rentcar Purwakarta Berbasis Laravel**. Website ini dikembangkan untuk membantu proses penyediaan informasi armada, pemesanan kendaraan, serta pengelolaan data penyewaan secara lebih terstruktur, efektif, dan mudah diakses. Dalam proses penyusunan laporan ini, penulis berusaha menjelaskan latar belakang, tujuan, perancangan, serta gambaran umum sistem yang dibangun berdasarkan kebutuhan pengguna dan pengelola usaha rental.

Penulis menyadari bahwa laporan ini masih memiliki kekurangan, baik dari segi penyajian maupun isi. Oleh karena itu, kritik dan saran yang membangun sangat diharapkan demi perbaikan di masa yang akan datang. Penulis juga mengucapkan terima kasih kepada dosen pengampu, teman satu kelompok, serta semua pihak yang telah membantu dalam penyusunan laporan dan pengembangan proyek ini.

Akhir kata, semoga laporan ini dapat memberikan manfaat bagi pembaca serta menjadi referensi dalam pengembangan sistem informasi berbasis web, khususnya pada bidang layanan penyewaan kendaraan.

Karawang, 13 April 2026

Tim Penyusun

# ABSTRAK

Perkembangan teknologi informasi mendorong pelaku usaha untuk memanfaatkan sistem berbasis web dalam mengelola layanan operasional, termasuk pada bidang penyewaan kendaraan. Pusat Rentcar Purwakarta memerlukan media informasi dan pemesanan yang mampu menampilkan data armada secara jelas, mempermudah proses booking, serta membantu pengelolaan transaksi secara lebih efisien. Berdasarkan kebutuhan tersebut, dikembangkan sebuah website **Pusat Rentcar Purwakarta berbasis Laravel** yang dirancang untuk memberikan layanan informasi armada, detail kendaraan, pemesanan mobil, pengecekan status booking, dan pengelolaan data oleh admin.

Pengembangan sistem ini menggunakan framework Laravel karena mendukung struktur aplikasi yang terorganisasi, mudah dikembangkan, dan sesuai untuk penerapan aplikasi web modern. Website yang dibangun memfasilitasi pengguna umum untuk melihat daftar mobil, memilih kendaraan sesuai kebutuhan, dan mengajukan pemesanan secara daring. Di sisi admin, sistem menyediakan fitur pengelolaan data mobil, pemantauan booking, dan perubahan status pesanan. Dengan adanya sistem ini, proses layanan rental diharapkan menjadi lebih cepat, terkontrol, dan meningkatkan kualitas pelayanan kepada pelanggan.

**Kata kunci:** Laravel, website rental mobil, sistem informasi, pemesanan online, manajemen armada.

# BAB I PENDAHULUAN

## 1.1 Latar Belakang

Kebutuhan masyarakat terhadap layanan transportasi yang fleksibel terus meningkat seiring dengan mobilitas yang tinggi dalam aktivitas kerja, wisata, maupun keperluan keluarga. Salah satu solusi yang banyak digunakan adalah layanan penyewaan kendaraan atau rentcar. Namun, pada praktiknya masih banyak usaha rental yang mengandalkan pencatatan manual, penyampaian informasi melalui komunikasi langsung, atau media yang belum terintegrasi. Kondisi tersebut sering menimbulkan kendala dalam hal penyampaian informasi armada, pencatatan pemesanan, pengelolaan data pelanggan, serta pemantauan status penyewaan.

Pusat Rentcar Purwakarta merupakan salah satu usaha yang membutuhkan sistem informasi berbasis web untuk mendukung proses bisnisnya. Melalui sistem berbasis web, pelanggan dapat mengakses informasi kendaraan kapan saja tanpa harus datang langsung ke lokasi. Selain itu, pihak pengelola dapat mengelola data mobil, memantau transaksi booking, dan memperbarui status pesanan secara lebih cepat dan terstruktur.

Berdasarkan kebutuhan tersebut, proyek ini mengambil judul **Pembuatan Website Pusat Rentcar Purwakarta Berbasis Laravel**. Website ini dikembangkan dengan framework Laravel karena memiliki arsitektur yang rapi, mendukung pengembangan aplikasi yang aman dan terstruktur, serta sesuai untuk membangun sistem informasi berbasis web yang bersifat dinamis. Proyek ini juga dijadikan sebagai integrasi beberapa mata kuliah, sehingga aspek perancangan, pemodelan, implementasi, pengelolaan proyek, dan pengujian kualitas dapat diterapkan dalam satu pengembangan sistem yang utuh.

## 1.2 Permasalahan

Berdasarkan latar belakang di atas, permasalahan yang diangkat dalam proyek ini adalah sebagai berikut:

1. Bagaimana menyediakan media informasi kendaraan rental yang mudah diakses oleh calon pelanggan.
2. Bagaimana merancang sistem pemesanan kendaraan agar proses booking dapat dilakukan secara lebih cepat dan terstruktur.
3. Bagaimana membantu pihak pengelola dalam mengelola data armada, data pemesanan, dan status penyewaan.
4. Bagaimana membangun sistem berbasis web yang sesuai dengan kebutuhan operasional Pusat Rentcar Purwakarta.
5. Bagaimana memastikan sistem yang dikembangkan memiliki alur yang jelas, mudah digunakan, dan layak diterapkan dari sisi kualitas perangkat lunak.

## 1.3 Tujuan dan Manfaat Aplikasi

Tujuan dari pengembangan aplikasi ini adalah membangun website Pusat Rentcar Purwakarta yang dapat digunakan sebagai media informasi dan pemesanan kendaraan berbasis web. Secara khusus, aplikasi ini bertujuan untuk:

1. Menyediakan informasi armada rental secara lengkap dan terpusat.
2. Mempermudah pelanggan dalam melakukan pemesanan kendaraan secara online.
3. Membantu admin dalam mengelola data mobil, data booking, dan status pesanan.
4. Meningkatkan efisiensi proses layanan rental dibandingkan metode manual.
5. Menerapkan konsep perancangan dan pengembangan sistem informasi berbasis Laravel dalam satu proyek terintegrasi.

Adapun manfaat yang diharapkan dari aplikasi ini adalah:

1. Bagi pelanggan, sistem memudahkan pencarian informasi dan proses pemesanan mobil.
2. Bagi pengelola rental, sistem membantu pengelolaan data agar lebih tertib dan cepat.
3. Bagi institusi pendidikan, proyek ini menjadi bentuk penerapan materi perkuliahan pada studi kasus nyata.
4. Bagi pengembangan ke depan, sistem ini dapat dijadikan dasar untuk penambahan fitur seperti pembayaran, laporan transaksi, dan notifikasi otomatis.

## 1.4 Deskripsi Produk

Produk yang dikembangkan dalam proyek ini adalah sebuah website berbasis Laravel untuk layanan rental mobil. Sistem ini memiliki dua sisi utama, yaitu sisi pengguna dan sisi pengelola.

Pada sisi pengguna, website menampilkan informasi kendaraan, detail mobil, dan form pemesanan. Pengguna dapat melihat daftar armada yang tersedia, memeriksa informasi kendaraan sesuai kebutuhan, lalu melakukan booking secara daring. Sistem juga menyediakan fitur untuk mengecek status pemesanan.

Pada sisi pengelola atau admin, website menyediakan fasilitas pengelolaan data armada dan booking. Admin dapat menambah, mengubah, dan menghapus data mobil, memantau data pesanan yang masuk, serta memperbarui status penyewaan. Dengan desain tersebut, sistem menjadi media yang menghubungkan kebutuhan pelanggan dengan proses operasional rental secara lebih efektif.

## 1.5 Keuntungan yang Diharapkan

Dengan diterapkannya website ini, beberapa keuntungan yang diharapkan antara lain:

1. Informasi kendaraan dapat diakses lebih cepat oleh calon pelanggan.
2. Proses pemesanan menjadi lebih sederhana dan tidak bergantung pada komunikasi manual sepenuhnya.
3. Data booking dan data armada tersimpan secara terpusat sehingga lebih mudah dikelola.
4. Admin dapat memantau dan mengatur transaksi rental dengan lebih rapi.
5. Sistem dapat meningkatkan profesionalitas layanan Pusat Rentcar Purwakarta di mata pelanggan.

## 1.6 Perencanaan Aktivitas Secara Umum

Pengembangan proyek ini dilakukan melalui beberapa tahapan umum, yaitu:

1. Identifikasi kebutuhan, dengan mengumpulkan informasi mengenai proses rental yang berjalan.
2. Analisis sistem, dengan menentukan alur informasi, aktor, dan kebutuhan fungsional aplikasi.
3. Perancangan sistem, dengan menyusun model proses, data, dan tampilan antarmuka.
4. Implementasi, dengan membangun website menggunakan Laravel dan komponen pendukungnya.
5. Pengujian, dengan memastikan fitur utama berjalan sesuai kebutuhan pengguna dan pengelola.
6. Penyusunan laporan, dengan mendokumentasikan hasil pengembangan proyek secara sistematis.

Tahapan tersebut disusun agar proyek dapat berjalan terarah dan sesuai dengan tujuan perkuliahan yang menggabungkan beberapa mata kuliah dalam satu studi kasus pengembangan sistem informasi.

# BAB III PENGEMBANGAN PERANGKAT LUNAK

BAB III ini membahas proses pengembangan perangkat lunak yang digunakan dalam pembuatan website Pusat Rentcar Purwakarta berbasis Laravel. Pada bagian ini dijelaskan metode pengembangan yang dipilih, tahapan pengerjaan sistem, serta analisis kebutuhan pengguna dan sistem yang menjadi dasar dalam implementasi aplikasi.

## 3.1 Metode Pengembangan Perangkat Lunak

Metode pengembangan perangkat lunak yang digunakan dalam proyek ini adalah **Waterfall**. Metode ini dipilih karena alur pengerjaannya bersifat runtut, mudah dipahami, dan sesuai untuk proyek kelompok yang memiliki kebutuhan sistem yang sudah cukup jelas sejak awal. Dengan pendekatan Waterfall, setiap tahap dilakukan secara berurutan sehingga proses pengembangan dapat lebih terkontrol.

Tahapan pengembangan dalam metode Waterfall pada proyek ini meliputi:

1. **Analisis kebutuhan**, yaitu mengumpulkan informasi mengenai kebutuhan website rental mobil, baik dari sisi pengguna maupun admin.
2. **Perancangan sistem**, yaitu menyusun rancangan alur kerja, rancangan data, dan tampilan antarmuka yang akan digunakan pada website.
3. **Implementasi**, yaitu membangun aplikasi menggunakan framework Laravel sesuai rancangan yang telah dibuat.
4. **Pengujian**, yaitu memastikan setiap fitur berjalan dengan baik, seperti tampilnya daftar mobil, proses booking, pengecekan status booking, serta pengelolaan data mobil oleh admin.
5. **Pemeliharaan**, yaitu melakukan perbaikan apabila ditemukan kesalahan atau kebutuhan penyesuaian pada sistem setelah digunakan.

Penerapan metode Waterfall pada proyek ini memudahkan kelompok dalam membagi tugas sesuai tahap pengerjaan. Selain itu, metode ini membantu menjaga agar hasil akhir sistem tetap sesuai dengan kebutuhan awal yang telah disepakati bersama.

## 3.2 Analisis Kebutuhan Pengguna dan Sistem

Analisis kebutuhan dilakukan untuk mengetahui fungsi apa saja yang harus tersedia di dalam website agar sistem benar-benar dapat membantu operasional Pusat Rentcar Purwakarta. Berdasarkan hasil analisis terhadap kebutuhan pengguna dan struktur aplikasi yang dikembangkan, sistem dibagi menjadi dua bagian utama, yaitu kebutuhan pengguna umum dan kebutuhan admin.

Kebutuhan pengguna umum meliputi:

1. Pengguna dapat melihat halaman utama yang menampilkan informasi singkat mengenai layanan rental.
2. Pengguna dapat melihat daftar mobil yang tersedia beserta informasi utama kendaraan.
3. Pengguna dapat membuka detail mobil berdasarkan kode plat atau identitas kendaraan.
4. Pengguna dapat melakukan pemesanan kendaraan melalui formulir booking yang tersedia.
5. Pengguna dapat mengecek status booking dengan kode booking atau nomor WhatsApp.

Kebutuhan admin meliputi:

1. Admin dapat masuk ke halaman dashboard yang dilindungi autentikasi.
2. Admin dapat melihat daftar booking yang masuk dan memantau status pesanan.
3. Admin dapat memperbarui status booking sesuai kondisi transaksi.
4. Admin dapat mengelola data mobil, termasuk menambah, mengubah, dan menghapus data kendaraan.
5. Admin dapat mengelola informasi kendaraan agar data yang ditampilkan kepada pengguna tetap akurat dan terbaru.

Secara umum, kebutuhan sistem yang dibangun dalam proyek ini adalah:

1. Sistem berbasis web dengan framework Laravel.
2. Sistem memiliki halaman publik untuk pengguna umum.
3. Sistem memiliki halaman admin yang memerlukan login.
4. Sistem mampu menyimpan dan menampilkan data mobil, booking, dan status penyewaan.
5. Sistem mendukung pengelolaan data secara lebih terstruktur dibandingkan pencatatan manual.

Dengan adanya analisis kebutuhan tersebut, pengembangan website dapat diarahkan sesuai fungsi yang benar-benar dibutuhkan dalam proses layanan rental mobil. Hasil analisis ini juga menjadi dasar dalam perancangan, implementasi, dan pengujian sistem pada tahap berikutnya.
