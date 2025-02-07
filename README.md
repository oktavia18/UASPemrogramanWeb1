# UAS Pemrograman Web1 (Semester 3 Pt_16)
## PROFIL
| Variable           |             Isi            |
| -------------------|----------------------------|
| **Nama**           |        Oktavia Rizkha kurniawati       |
| **NIM**            |          312310509         |
| **Kelas**          |          TI.23.A.5         |
| **Mata Kuliah**    |      Pemrograman Web 1     |
| **Dosen Pengampu** | Eko Budiarto s.kom, m.kom  |

# Membuat Aplikasi CRUD menggunakan Boostrap-5 dan Datatables

## Langkah-Langkah

## 1. Menjalankan MySQL Server
Menjalankan MySQL dari menu **XAMPP Control.**

![image](https://github.com/user-attachments/assets/76c5e6f6-fee3-4149-b4cc-942ed702f5e9)

## 2. Membuat database dengan nama db_kuliner
### Membuat tabel dengan nama tbl_makanan dan tbl_minuman

![image](https://github.com/user-attachments/assets/5114bb0c-e605-49e9-ba4d-eba5d54792e5)

## 3. Membuat struktur file
![image](https://github.com/user-attachments/assets/3e158d15-a15b-4f5b-8421-f00c681e57af)

# Membuat tampilan didalam

## 1. Membuat Index dan Menambahkan Data Navbar
![Screenshot 2025-01-05 220336](https://github.com/user-attachments/assets/b5108957-c852-4ace-a67d-c6c5617575e0)

Bagian index website menampilkan judul "Daftar Kuliner Korean Food" di bagian atas sebagai identitas utama website. Penggunaan Boostrap-5 pada Navbar diatas agar tampilan rapih, yang di dalamnya terdiri dari 4 menu utama (Home, Makanan, Minuman, About) yang disusun horizontal dan dipisahkan dengan simbol "|" untuk navigasi ke berbagai halaman website.

## 2. Menambahkan Home

![image](https://github.com/user-attachments/assets/569f3f35-0788-4d59-a6e1-979662418abd)
![image](https://github.com/user-attachments/assets/e82788f9-6579-4259-a994-4f66145bcdba)
![image](https://github.com/user-attachments/assets/b2da436f-83a0-4bcf-8385-d44d6af084b4)
![image](https://github.com/user-attachments/assets/11db63cb-1950-4b0d-98b3-fc5abcf288ce)
![image](https://github.com/user-attachments/assets/b78e7a20-9559-4fd7-99b9-dedd8ab8a5bb)

Halaman Home ini menyajikan tampilan visual yang menarik dengan foto berbagai hidangan khas Korea, seperti Kimchi, Bibimbap, Bulgogi, dan makanan lainnya. Foto-foto di bagian utama menampilkan suasana hangat saat menikmati makanan bersama, dikelilingi oleh mangkuk dan piring yang penuh dengan warna-warni masakan Korea.

Fitur Utama:
- Menu Navigasi:
  * Terdapat menu navigasi di bagian atas halaman dengan pilihan seperti Home, Makanan, Minuman, About, dan Contact, memudahkan pengguna untuk menjelajahi website.
- Hero Image:
  * Gambar besar di tengah halaman menampilkan hidangan khas Korea yang disusun rapi di atas meja. Tampak berbagai jenis makanan seperti sup pedas, mie, dan lauk pendamping.
    Teks overlay "From Kimchi to Bulgogi" memberikan kesan eksplorasi kuliner Korea yang kaya.
- Subjudul & Call to Action:
  * Subjudul "Explore the Richness of Korean Dishes" mengundang pengunjung untuk mempelajari lebih jauh tentang makanan tradisional Korea.
- Tata Warna:
  * Warna putih pada latar belakang dan elemen teks memberikan kesan bersih dan profesional, sementara warna oranye pada menu navigasi menambah sentuhan hangat yang relevan dengan tema       kuliner.
- Keseluruhan Tema:
  Halaman ini memancarkan nuansa tradisional sekaligus modern, dengan fokus pada pengalaman makan bersama yang menjadi bagian penting dari budaya Korea.

## 3. Menambahkan Tabel Data Makanan

![image](https://github.com/user-attachments/assets/76e0e3d5-3876-4b7f-ab2d-a0a58ac9f196)

Halaman ini menampilkan Data Makanan Korea dengan beberapa elemen:
1. Header menampilkan judul "Daftar Kuliner Korean Food" dengan navigasi menu di bawahnya.
2. Bagian utama berisi:
- Judul "Data Makanan"
- Tombol "+ Tambah Data Baru" berwarna salem/coral
* ![image](https://github.com/user-attachments/assets/34377993-ed1d-4d19-925d-2a2bcb743a7e)
- Tabel dengan kolom:
  * No
  * Nama Makanan
  * Daerah Asal
  * Aksi (Edit dan Hapus)
  * ![image](https://github.com/user-attachments/assets/c85f9158-6013-4c21-86cf-dc401c8411d3)
3. Contoh data yang ditampilkan:
* No: 1
* Nama Makanan: Kimchi Jjigae
* Daerah Asal: South Korea
* Aksi: Tombol Edit dan Hapus

4. Di bagian bawah terdapat informasi "Total Data: 1" yang menunjukkan jumlah data yang tersedia.


## 4. Menambahkan Tabel Data Minuman

![image](https://github.com/user-attachments/assets/de41d07f-d9eb-4688-b3a5-8244423f6573)

Halaman ini menampilkan Data Minuman Korea dengan struktur yang mirip dengan halaman Data Makanan sebelumnya:
1. Header tetap menampilkan judul "Daftar Kuliner Korean Food" dengan navigasi menu, dimana menu "Minuman" sedang aktif (ditandai dengan background coklat)
2. Bagian utama berisi:
- Judul "Data Minuman"
- Tombol "+ Tambah Data Baru" berwarna salem/coral
* ![image](https://github.com/user-attachments/assets/dec8de8e-cf40-422e-9c79-8c4563ee1bc1)
- Tabel dengan kolom:
  * No
  * Nama Minuman
  * Daerah Asal
  * Aksi (Edit dan Hapus)
  * ![image](https://github.com/user-attachments/assets/f2c52970-2c86-4292-93cf-5b8deb028ac6)

3. Contoh data yang ditampilkan:
* No: 1
* Nama Minuman: Makkgeolli
* Daerah Asal: South Korea
* Aksi: Tombol Edit dan Hapus
4. Di bagian bawah terdapat informasi "Total Data: 1" yang menunjukkan jumlah data minuman yang tersedia.


## 5. Menambahkan About

![image](https://github.com/user-attachments/assets/d33cba7b-4f4a-4f73-85fc-9f8835f94e9a)
![image](https://github.com/user-attachments/assets/82ace933-7f96-4858-ae8f-0292ce8b2e6e)
![image](https://github.com/user-attachments/assets/081bac73-4e57-46e3-849c-ded1f61edc17)

Halaman ini dirancang untuk memperkenalkan filosofi dan misi bisnis kepada pengunjung. Pesan utamanya adalah pengalaman kuliner otentik dan dedikasi terhadap kualitas dan rasa yang otentik dari Korea.
- Judul "About Us"
  * Bagian ini memperkenalkan pengunjung kepada informasi tentang bisnis atau restoran yang ditampilkan. Judulnya sederhana, jelas, dan      memberikan konteks bahwa bagian ini adalah tentang perusahaan.
- Deskripsi "Welcome to HanGuk Taste"
  * Subbagian ini memberikan sambutan hangat kepada pengunjung. Paragraf-paragraf berikutnya menjelaskan misi bisnis, yaitu menghadirkan     cita rasa otentik masakan Korea.
- Deskripsi "Our History"
  * Subbagian ini menjelaskan perjalanan dan latar belakang restoran atau bisnis Menunjukkan dedikasi dan pengalaman bisnis yang telah       membangun reputasi mereka hingga saat ini.
- Deskripsi ini memberikan gambaran tentang:
  * Komitmen terhadap bahan berkualitas dan resep tradisional.
  * Ragam menu seperti Bibimbap dan Kimchi yang menjadi andalan masakan Korea.
  * Tujuan utama memberikan pengalaman tak terlupakan melalui masakan mereka.
- Gambar Hidangan Korea
  * Gambar di sisi kanan menampilkan berbagai hidangan khas Korea, memberikan daya tarik visual yang menggugah selera. Hal ini membantu      menguatkan citra bahwa restoran ini menyajikan makanan otentik dan berkualitas.
- Penyusunan Elemen: Layout yang rapi, dengan teks di sebelah kiri dan gambar di sebelah kanan, membantu keseimbangan visual dan mempermudah pembaca dalam memahami informasi.



## 6. Menambahkan Contact

![image](https://github.com/user-attachments/assets/0ba7293b-d90b-486d-9c35-2e492a30612c)
![image](https://github.com/user-attachments/assets/84c33f0f-03db-46a6-b6c3-0e16d00f1b2e)

Laman ini dirancang untuk memudahkan pengunjung website menghubungi bisnis tersebut dan juga menampilkan berbagai platform pemesanan yang tersedia untuk melakukan order. Desainnya sederhana dan informatif dengan navigasi di bagian atas yang mencakup Home, Makanan, Minuman, About, dan Contact.
### terdapat beberapa elemen dan informasi penting:
- Header "Our Contact" yang ditampilkan di bagian atas halaman dengan latar belakang peta.
- Bagian "Get in Touch" yang berisi:
  * Pesan sambutan dalam Bahasa Indonesia: "Baik pelanggan setia maupun pengunjung baru, kami berharap dapat melayani Anda dan berbagi       hasrat kami untuk masakan lezat."
  * Alamat: 777 Korean Wells, Harrisstreet
  * Nomor telepon: +1 (234) 567 890 00
  * Email: viaokta11223@gmail.com
Informasi kontak tersedia lengkap di website untuk memudahkan pelanggan menghubungi mereka.
- Bagian "Order via Our Delivery Partners" yang menampilkan logo-logo layanan pengiriman/delivery:
  * GoFood
  * GrabFood
  * ShopeeFood
  * Tokopedia
 
menawarkan layanan makanan dengan berbagai pilihan menu yang dapat dipesan melalui website atau melalui mitra layanan pesan antar makanan.

# Penjelasan tambahan

Website ini bertujuan untuk memberikan informasi yang lengkap dan mudah diakses tentang beragam makanan Korea, mulai dari makanan utama, makanan penutup, hingga minuman khas Korea. Selain itu, website ini juga bisa menjadi referensi bagi pengunjung yang ingin mencoba resep makanan Korea di rumah atau mencari tempat makan Korea terbaik. Pengguna dapat mencari informasi berdasarkan kategori, membaca ulasan, melihat gambar, atau menemukan resep autentik dari berbagai daerah di Korea. 

## SELESAI <img align="center" alt="Ikhsan-Python" height="40" width="45" src="https://em-content.zobj.net/source/microsoft-teams/337/student_1f9d1-200d-1f393.png"> <img align="center" alt="Ikhsan-Python" height="40" width="45" src="https://em-content.zobj.net/thumbs/160/twitter/348/flag-indonesia_1f1ee-1f1e9.png">
