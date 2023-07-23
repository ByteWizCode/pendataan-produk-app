# Pendataan Produk

# Informasi
```
Buatlah aplikasi pendataan produk menggunakan Laravel untuk membuat proses create, read, update, dan delete (CRUD) sederhana. CRUD merupakan proses standar yang biasa ditemukan pada sebuah sistem aplikasi web. Berikut adalah konsep CRUD yang akan dibuat:

Data Barang: 
• Nama barang
• Deskripsi
• Jenis barang
• Stock barang
• Harga Beli
• Harga Jual 
• Gambar barang

Data pembeli
• Nama 
• TTL
• Jenis kelamin
• Alamat
• Foto KTP
• User
• Password
• Retype Password

Data Staff:
• Nama 
• Jenis kelamin
• user
• Password
• Retype Password

Aturannya adalah:
1) Sebelum menggunakan aplikasi setiap user harus login terlebih dahulu
2) Staff dapat memasukan data pembeli pada aplikasi sehingga pembeli dapat masuk kedalam aplikasi
3) Staff dapat memasukkan, mengedit dan menghapus data barang
4) Admin dapat memasukkan, mengedit, menghapus data obat dan user
5) Ketika pembeli selesai membeli barang maka staff memvalidasinya dan jika staff klik “submit” pada data penjualan maka stok barang akan berkurang.
```

# ScreenShots Page
1. #### Login Dan Register
![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/de99dc70-b167-446c-b24f-826855bb29ad)
![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/5a382065-d9fc-44e1-91b5-ed4dcce899ce)

2. #### Dashboard
![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/74cc0b58-50ad-4819-b7c2-5a3a268a4229)
![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/0c636f57-4f7f-4d39-af26-50c31de6b4fe)

3. #### User
    - ##### Daftar Staff
        ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/a0e1d165-f91e-413a-9270-4239d8b286dd)
    - ##### Daftar Pelanggan
        ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/2e601513-8d38-437f-b5fd-06992d71b640)
    - ##### Profil Pelanggan
        ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/5c86d3fb-8631-4c3c-9fc4-149072fa8ef4)

4. #### Produk
    - ##### Daftar Jenis Produk
        ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/ffa27469-4883-4b17-914e-3713dcdeb0a4)
    - ##### Daftar produk
        ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/0b984de5-b3e9-48d6-b7f3-dc296233cf58)
    - ##### Tambah Jenis produk
        ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/ee5d8b5b-9867-47c6-a5bf-35579e2133ed)
    - ##### Tambah Produk
        ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/96e3f7fb-b02a-4495-aef0-3dc7d001b987)
    - ##### Edit Produk
        ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/c1956d38-1bfb-4584-bc7c-1966abad1821)
    - ##### Daftar Produk
        ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/bda0da3d-f177-4e5c-aaaf-1dbd017bec19)
        ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/a50d4e74-aa8d-47ca-bfbe-a61a624f9193)
     - ##### Pesan Produk   
        ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/d79d24a6-c125-4665-aa5c-84ab676b17b2)
    - ##### Data Pesanan
        ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/5565c1c6-209d-4405-99cc-7596ef2569b7)
    - ##### Daftar Pesanan
        ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/e040cd32-8c5d-4f4c-be2d-fccb05f830a5)
            ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/831fca68-ec7d-4bcd-b013-48963ffa8b62)
            ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/c18cc59c-d702-4748-b3b1-f958ecd5f64a)
            ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/37b75ed3-61f2-461f-b429-d0f31a6b752a)
            ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/25a09c04-adce-4bda-a5fc-63acf4af4573)


## How to run the code

1. git clone https://github.com/ByteWizCode/pendataan-produk-app.git
2. run : `cd pendataan-produk-app`
3. run : `cp .env.example .env` dan sesuaikan konfigurasi database. 
3. run : `composer install`
4. run : `php artisan key:generate`
5. run : `php artisan migrate:fresh --seed`
6. run : `php artisan storage:link`
7. run : `php artisan serve`


## Akses Login
- Akses Login :

  | No   | Role         | Email                 | Kata sandi   |
  | ---- | -----------  | -------------------   | -----------  |
  | 1    | Admin        | admin@gmail.com       | Password123! |
  | 2    | Staff1       | staff1@gmail.com      | Password123! |
  | 3    | Staff2       | staff2@gmail.com      | Password123! |
  | 4    | Customer     | pelanggan@gmail.com   | Password123! |

## Informasi Tambahan
Dapat menggunakan https://redketchup.io/image-resizer untuk mengatur ratio gambar 
