<?php

include "koneksi.php";

if(isset($_POST['submit'])){
    $tahun = $_POST['tahun'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $periode = $_POST['periode'];

    $sql = "INSERT INTO alumni (tahun, nama, no_hp, alamat, email, periode) VALUES('$tahun', '$nama','$no_hp', '$alamat', '$email', '$periode')";
    $query = mysqli_query($koneksi, $sql);
    if($query){
        $pesan = "Berhasil ditambahkan!";
    }else{
        $pesan = "Gagal ditambahkan!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&display=swap');

        * {
            font-family: 'poppins';
        }
    </style>
</head>

<body class="bg-gray-200">
    <nav class="w-full h-28 shadow-lg fixed z-10 bg-white">
        <div class="flex justify-between h-full px-10 items-center text-xl">
            <ul class="flex space-x-5">
                <div class="logo"></div>
                <li class="font-bold"><a href="#">Home</a></li>
                <li><a href="#">Bank Soal</a></li>
                <li><a href="#">Alumni</a></li>
                <li><a href="#">Aspirasi</a></li>
                <li><a href="#">Informatic Store</a></li>
                <li><a href="#">Tentang Kami</a></li>
            </ul>
            <a href="">Login</a>
        </div>
    </nav>

    <section class="w-full py-36 flex items-center">
        <div class="w-[85%] mx-auto max-h-fit py-10 flex flex-col bg-white items-center">
            <p>Demisioner HMIF</p>
            <div class="space-y-10 mx-auto w-[80%] mt-32">
                <div class="card-demis w-full border shadow-md hover:shadow-lg">
                    <p class="w-full py-4 px-2 bg-gray-200">Periode 2021</p>
                    <div class="relative h-[500px]">
                        <img src="" alt="belum">
                        <button class="absolute right-5 bottom-5 py-2 px-3 bg-gray-400">
                            Selengkapnya
                        </button>
                    </div>
                </div>
                <div class="card-demis w-full border shadow-md hover:shadow-lg">
                    <p class="w-full py-4 px-2 bg-gray-200">Periode 2021</p>
                    <div class="relative h-[500px]">
                        <img src="" alt="belum">
                        <button class="absolute right-5 bottom-5 py-2 px-3 bg-gray-400">
                            Selengkapnya
                        </button>
                    </div>
                </div>
                <div class="card-demis w-full border shadow-md hover:shadow-lg">
                    <p class="w-full py-4 px-2 bg-gray-200">Periode 2021</p>
                    <div class="relative h-[500px]">
                        <img src="" alt="belum">
                        <button class="absolute right-5 bottom-5 py-2 px-3 bg-gray-400">
                            Selengkapnya
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>