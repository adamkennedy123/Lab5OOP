Hasil Dari (mobil.php)

![Screenshot (120)](https://user-images.githubusercontent.com/92745982/232948451-1dbe0c5c-2bae-46c9-9c65-93303d5ee1a7.png)
 
 Buat Nama Database

````
CREATE DATABASE LATIHAN2;
````
Buat Table Database
````
USE LATIHAN2;
CREATE TABLE data_barang(
    id_barang int(11) PRIMARY KEY AUTO_INCREMENT,
    nama_barang varchar(30) NOT NULL,
    kategori_barang varchar(30) NOT NULL,
    gambar_barang text NOT NULL,
    harga_beli decimal(10,0) NOT NULL,
    harga_jual decimal(10,0) NOT NULL,
    stok int(4) NOT NULL
);
````
 
 
 Tampilan Form
 
![Screenshot (115)](https://user-images.githubusercontent.com/92745982/232948500-b373d652-cc2c-46b4-aa8b-3e7726e65b85.png)

Hasil Dari Inputan form

![Screenshot (123)](https://user-images.githubusercontent.com/92745982/232971817-2f8f0720-df52-4013-8892-23a32928e15e.png)
