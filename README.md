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
![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/d5af9595-7a83-4eea-b252-aaa3fd388446)
![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/92ee9467-fa04-462d-94bd-b54238a7bffd)

2. #### Dashboard
![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/cfa83c60-114c-40dc-9da8-f838c2e8e709)

3. #### User
    - ##### Daftar Staff
        ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/70cbea13-8513-4135-b00a-3a1d7b3430dd)
    - ##### Daftar Pelanggan
        ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/dcf3b950-631e-4aa8-9de1-723fd86c1af1)
    - ##### Profil Pelanggan
        ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/42cbf456-6fa9-469a-a9e1-4a360ea3dab3)

4. #### Produk
    - ##### Jenis Produk
        ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/d17370fe-c20c-4aec-be1f-b8375d26db3d)
    - ##### Daftar produk
        ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/f388f790-3a86-44cc-8506-980e0a3f1d1d)
    - ##### Tambah Jenis produk
        ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/fe8676e4-9e69-4734-85c8-c40ab0ae9378)
    - ##### Tambah Produk
        ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/5c00a0d0-3f0a-47f6-88d5-f3f421de7c6d)
    - ##### Edit Produk
        ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/4dd98fe8-80e8-4b8b-83ad-c76df2f6ead0)
    - ##### Daftar Produk
        ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/2cc6282d-8cd3-4436-bcd2-c54a2dfaae2e)
        ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/3db99b95-2e8a-414a-a432-2c89e0f43da4)
     - ##### Pesan Produk   
        ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/1edf0338-dded-4259-b2dd-b076cba52ade)
    - ##### Data Pesanan
        ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/fcc86e2b-013c-4ba6-8500-3dea7ec1df64)
    - ##### Daftar Pesanan
        ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/d5df5163-298d-4467-ad85-92b38d1da101)
            ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/5c8771b7-ec6d-46ee-bbaa-bac7b625d87d)
            ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/0ee96471-42bb-4873-bc93-7c4e1bc359c1)
            ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/d7a6273f-41b9-4185-b838-1408842cae53)
            ![image](https://github.com/ByteWizCode/pendataan-produk-app/assets/136901319/b92f3cac-6c31-4065-8f07-c8c932ccc55d)


## How to run the code

1. git clone https://github.com/ByteWizCode/pendataan-produk-app.git
2. cd pendataan-produk-app
3. cp .env.example `.env` dan sesuaikan konfigurasi database. 
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
Dapat menggunakan https://redketchup.io/image-resizer untuk mengatur ratio gambar 1:1 
