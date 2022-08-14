<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Survei Rumah Tangga</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/toastmaker/dist/toastmaker.min.css">
    <script type="text/javascript" src="https://unpkg.com/toastmaker/dist/toastmaker.min.js"></script>

    <style>
        .custom-border {
            border: 1px solid #ffffff;
            border-radius: 0;
        }

        .large-appearance {
            top: 0;
            background-color: #bd5d38;
            color: #ffffff;
            font-size: 20px;
            max-width: initial;
            width: 100%;
            padding: 15px;
        }
    </style>
    <script type="text/javascript">
        function update() {
            const day = ["MINGGU", "SENIN", "SELASA", "RABU", "KAMIS", "JUM'AT", "SABTU"];
            const month = ["JANUARI", "FEBRUARI", "MARET", "APRIL", "MEI", "JUNI", "JULI", "AGUSTUS", "SEPTEMBER", "OKTOBER", "NOVEMBER", "DESEMBER"];
            const d = new Date();
            output.innerHTML = day[d.getDay()] + ", ";
            output.innerHTML += d.getDate() + "-";
            output.innerHTML += month[d.getMonth()] + "-";
            output.innerHTML += d.getFullYear() + ".";
        }
        window.addEventListener("load", function () {
            update();
        })


        function save_responden() {
            ToastMaker("Responden Berhasil di Input!", 5000, {
                valign: 'top',
                classList: ["custom-border", "large-appearance"]
            });
        }
    </script>

</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top " id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Survei Rumah Tangga</span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2"
                    src="assets/img/logo.png" alt="..." /></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive " style="text-align: left; padding-left:30px">
            <ul class="navbar-nav">
                <li class="nav-item "><a class="nav-link js-scroll-trigger" href="#home">1. Home</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#responden">2. Responden</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#profile">3. Profile Responden</a>
                </li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#pertanyaanumum">4. Pertanyaan Umum</a>
                </li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#pertanyaankhusus">5. Pertanyaan
                        Khusus</a>
                </li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#done">6. Selesai</a></li>
            </ul>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">
        <!-- Home-->
        <section class="resume-section" id="home">
            <div class="resume-section-content">
                <h1 class="mb-0">
                    SURVEI
                    <span class="text-primary">RUMAH TANGGA</span>
                </h1>
                <div class="subheading mb-5">
                    SURVEI PASAR PENCAHAYAAN EFISIENSI TINGGI DI INDONESIA 2022
                    <a href="#">surveyor@localhost</a>
                </div>
                <p class="lead mb-5">Selamat Pagi/Siang/Sore, kami Surveyor dari Balai Besar Survei dan Pengujian
                    Ketenagalistrikan, Energi Baru Terbarukan dan
                    Konservasi Energi (BBSP KEBTKE) Ditjen EBTKE Kementerian ESDM RI, sedang mengadakan penelitian
                    mengenai ”Survei Pasar
                    Pencahayaan Efisiensi Tinggi di Indonesia”, khususnya di Kota tempat Ibu/Bapak/Saudara (I/B/S)
                    tinggal. Penelitian ini digunakan untuk
                    kepentingan ilmiah dan sebagai bahan rekomendasi kepada Pemerintah dan para pemangku kepentingan.
                    Responden yang diwawancarai dalam
                    penelitian ini adalah Konsumen yang pernah membeli dan/atau menggunakan lampu LED (Light Emitting
                    Diode) dan Non-LED. Kami mohon
                    kesediaan I/B/S meluangkan waktu sejenak untuk menjawab beberapa pertanyaan kami.</p>
                <p class="lead mb-5">
                <h3 class="mb-0">PETUNJUK PENGISIAN KUESIONER</h3>
                <ol>
                    <li>Berilah tanda √ pada pilihan jawaban I/B/S yang paling sesuai mewakili kondisi yang sebenarnya.
                        I/B/S diminta untuk memilih satu
                        jawaban yang paling sesuai dengan pendapat I/B/S.</li>
                    <li> Tuliskan jawaban I/B/S pada tempat yang telah disediakan untuk jawaban terbuka.</li>
                </ol>
                </p>


            </div>
        </section>
        <hr class="m-0" />
        <!-- Responden-->
        <section class="resume-section" id="responden">
            <div class="resume-section-content">
                <h2 class="mb-5 text-center">Responden</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Identitas Resonden Rumah Tangga</h3>
                        <div class="subheading mb-3"><input type="text" id="no_kuisioner" placeholder="No Kuisioner"
                                class="form-control" style="width:20%" required></div>
                        <div class="row">
                            <div class="col-md-4"><input type="text" id="nama_kota" placeholder="Nama Kota"
                                    class="form-control" required></div>
                            <div class="col-md-4"><input type="text" id="nama_kecamatan" placeholder="Nama Kecamatan"
                                    class="form-control" required></div>
                            <div class="col-md-4"><input type="text" id="nama_kelurahan" placeholder="Nama Kelurahan"
                                    class="form-control" required></div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4"><input type="text" id="nama_resonden_terpilih" placeholder="Nama Kota"
                                    class="form-control" required></div>
                            <div class="col-md-4"><input type="text" id="alamat_responde" placeholder="Alamat Responden"
                                    class="form-control" required></div>
                            <div class="col-md-4"><input type="text" id="jenis_kelamin" placeholder="Jenis Kelamin"
                                    class="form-control" required></div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4"><input type="text" id="status_kk" placeholder="Status KK"
                                    class="form-control" required></div>
                            <div class="col-md-4"><input type="text" id="jumlah_anggota_keluarga"
                                    placeholder="Jumlah Anggota Keluarga" class="form-control" required></div>
                            <div class="col-md-4"><input type="text" id="no_hp" placeholder="No Handphone"
                                    class="form-control" required></div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4"><input type="data" id="tanggal" placeholder="Tanggal Sekarang"
                                    class="form-control" required></div>
                            <div class="col-md-4"><input type="text" id="nama_surveyor" placeholder="Nama Surveyor"
                                    class="form-control" required></div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12"><button class="btn btn-primary" onclick="save_responden()"
                                    style="color:white; width:100%">Simpan</button></div>
                        </div>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary" id="output"></span></div>
                </div>

            </div>
        </section>
        <hr class="m-0" />
        <!-- Profile-->
        <section class="resume-section" id="profile">
            <div class="resume-section-content">
                <h2 class="mb-5">PROFIL RESPONDEN</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <p class="lead mb-0">1. Berapa usia I/B/S saat ini?</p>
                        <div class="table-responsive">
                            <table class="table" border="1">
                                <tr>
                                    <td>1</td>
                                    <td><input type="radio" name="usia" value="< 17 tahun (menikah) - 23 tahun (Gen Z)">
                                        17 tahun (menikah) - 23 tahun (Gen Z)</td>
                                    <td>3</td>
                                    <td><input type="radio" name="usia" value="40 - 55 tahun (Gen X)"> 40 - 55 tahun (Gen
                                        X)</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><input type="radio" name="usia" value="24 - 39 tahun (Millenial)"> 24 - 39 tahun
                                        (Millenial)</td>
                                    <td>4</td>
                                    <td><input type="radio" name="usia" value="> 56 tahun (Baby Boomers)"> > 56 tahun
                                        (Baby Boomers)</td>
                                </tr>
                            </table>
                        </div>
                        <p class="lead mb-0">2. Apa pendidikan terakhir I/B/S?</p>
                        <div class="table-responsive">
                            <table class="table" border="1">
                                <tr>
                                    <td>1</td>
                                    <td><input type="radio" name="pendidikan" value=""> Tidak Sekolah</td>
                                    <td>3</td>
                                    <td><input type="radio" name="pendidikan" value=""> SMP</td>
                                    <td>5</td>
                                    <td><input type="radio" name="pendidikan" value=""> Sarjana (D3/S1)</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><input type="radio" name="pendidikan" value=""> SD</td>
                                    <td>4</td>
                                    <td> <input type="radio" name="pendidikan" value=""> SMA</td>
                                    <td>6</td>
                                    <td> <input type="radio" name="pendidikan" value=""> Pascasarjana (S2/S3)</td>
                                </tr>
                            </table>
                        </div>
                        <p class="lead mb-0">3. Berapa pendapatan bersih individu I/B/S (rata-rata dalam 1 bulan)?</p>
                        <div class="table-responsive">
                            <table class="table" border="1">
                                <tr>
                                    <td>1</td>
                                    <td><input type="radio" id="pendapatan" value="">
                                        < Rp.2.000.000</td>
                                    <td>3</td>
                                    <td><input type="radio" name="pendapatan" value=""> Rp.3.000.000 - Rp.4.000.000</td>
                                    <td>5</td>
                                    <td><input type="radio" name="pendapatan" value=""> Rp.6.000.000 - Rp.8.000.000</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><input type="radio" name="pendapatan" value=""> Rp.2.000.000 - Rp.3.000.000 </td>
                                    <td>4</td>
                                    <td><input type="radio" name="pendapatan" value=""> Rp.4.000.000 - Rp.6.000.000</td>
                                    <td>6</td>
                                    <td> <input type="radio" name="pendapatan" value=""> > Rp.8.000.000</td>
                                </tr>
                            </table>
                        </div>
                        <p class="lead mb-0">4. Apa pekerjaan (profesi) I/B/S?</p>
                        <div class="table-responsive">
                            <table class="table" border="1">
                                <tr>
                                    <td>1.<input type="radio" name="pekerjaan" value=""> ASN/PNS </td>
                                    <td>7.<input type="radio" name="pekerjaan" value=""> TNI/Polr</td>
                                </tr>
                                <tr>
                                    <td>2.<input type="radio" name="pekerjaan" value=""> Ibu Rumah Tangga/Bapak Rumah
                                        Tangga</td>
                                    <td>8.<input type="radio" name="pekerjaan" value=""> Professional
                                        (Pengacara/Konsultan/Dokter)</td>
                                </tr>
                                <tr>
                                    <td>3.<input type="radio" name="pekerjaan" value=""> Pedagang/Wirausaha</td>
                                    <td>9.<input type="radio" name="pekerjaan" value=""> Tenaga Kesehatan (Perawat/Bidan)
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.<input type="radio" name="pekerjaan" value=""> Pegawai Swasta</td>
                                    <td>10.<input type="radio" name="pekerjaan" value=""> Tenaga Pengajar (Guru/Dosen)
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.<input type="radio" name="pekerjaan" value=""> Pelajar/Mahasiswa</td>
                                    <td>11.<input type="radio" name="pekerjaan" value=""> Tidak Bekerja (Pengangguran)
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.<input type="radio" name="pekerjaan" value=""> Karyawan BUMN/BUMD</td>
                                    <td>99.<input type="radio" name="pekerjaan" value=""> Lainnya:……………………….</td>
                                </tr>
                            </table>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12"><button class="btn btn-primary" onclick="save_profile()"
                                    style="color:white; width:100%">Simpan</button></div>
                        </div>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary" id="output"></span></div>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Pertanyaan Umum-->
        <section class="resume-section" id="pertanyaanumum">
            <div class="resume-section-content">
                <h2 class="mb-5">Pertanyaan Umum</h2>
                <div class="subheading mb-3"> Lanjutan </div>
                <p class="lead mb-0">5. Sebutkan golongan pelanggan tarif listrik yang I/B/S gunakan saat ini?</p>
                <div class="table-responsive">
                    <table class="table" border="1">
                        <tr>
                            <td>1</td>
                            <td><input type="radio" name="tarif" value="">R1/TR 450 VA (Subsidi) </td>
                            <td>4</td>
                            <td><input type="radio" name="tarif" value=""> R1/TR 1.300 VA</td>
                            <td>7</td>
                            <td><input type="radio" name="tarif" value=""> R3/TR > 6.600 VA</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><input type="radio" name="tarif" value=""> R1/TR 900 VA (Subsidi)  </td>
                            <td>5</td>
                            <td><input type="radio" name="tarif" value=""> R1/TR 2.200 VA</td>
                            <td>99</td>
                            <td> <input type="radio" name="tarif" value=""> Lainnya:……………………….</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><input type="radio" name="tarif" value=""> R1/TR 900 VA </td>
                            <td>6</td>
                            <td><input type="radio" name="tarif" value=""> R2/TR 3.500 – 5.500 VA</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>

                <p class="lead mb-0">6. Berapa jumlah total pemakaian titik lampu rumah I/B/S saat ini?</p>
                <div class="table-responsive">
                    <table class="table" border="1">
                        <tr>
                            <td>1</td>
                            <td><input type="radio" name="pemakaian" value="">< 5 titik lampu </td>
                            <td>3</td>
                            <td><input type="radio" name="pemakaian" value=""> 10 - 15 titik lampu </td>
                            <td>5</td>
                            <td><input type="radio" name="pemakaian" value=""> 20 - 25 titik lampu</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><input type="radio" name="pemakaian" value=""> 5 - 10 titik lampu   </td>
                            <td>4</td>
                            <td><input type="radio" name="pemakaian" value=""> 15 - 20 titik lampu </td>
                            <td>6</td>
                            <td> <input type="radio" name="pemakaian" value=""> > 25 titik lampu</td>
                        </tr>
                    </table>
                </div>

                <p class="lead mb-0">7. Berapa daya lampu yang paling banyak digunakan dalam rumah I/B/S saat ini?</p>
                <div class="table-responsive">
                    <table class="table" border="1">
                        <tr>
                            <td>1</td>
                            <td><input type="radio" name="daya" value="">< 5 Watt</td>
                            <td>3</td>
                            <td><input type="radio" name="daya" value=""> 10 - 15 Watt</td>
                            <td>5</td>
                            <td><input type="radio" name="daya" value=""> 20 - 25 Watt</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><input type="radio" name="daya" value=""> 5 - 10 Watt  </td>
                            <td>4</td>
                            <td><input type="radio" name="daya" value=""> 15 - 10 Watt</td>
                            <td>6</td>
                            <td><input type="radio" name="daya" value=""> > 25 Watt</td>
                        </tr>
                    </table>
                </div>

                <p class="lead mb-0">8. Berapa harga lampu (per satuan) yang I/B/S gunakan saat ini?</p>
                <div class="table-responsive">
                    <table class="table" border="1">
                        <tr>
                            <td>1</td>
                            <td><input type="radio" name="harga_lampu" value="">< Rp.10.000 </td>
                            <td>3</td>
                            <td><input type="radio" name="harga_lampu" value=""> Rp.15.000 - Rp.30.000</td>
                            <td>5</td>
                            <td><input type="radio" name="harga_lampu" value=""> > Rp.50.000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><input type="radio" name="harga_lampu" value=""> Rp.10.000 - Rp.15.000  </td>
                            <td>4</td>
                            <td><input type="radio" name="harga_lampu" value=""> Rp.10.000 - Rp.15.000</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>

                <p class="lead mb-0">9. Apakah I/B/S mengetahui label tanda hemat energi pada produk lampu?</p>
                <div class="table-responsive">
                    <table class="table" border="1">
                        <tr>
                            <td>1</td>
                            <td><input type="radio" name="label_hemat" value="Ya"> Ya </td>
                            <td>2</td>
                            <td><input type="radio" name="label_hemat" value="Tidak"> Tidak  </td>
                        </tr>
                    </table>
                </div>


                <p class="lead mb-0">10. Apakah I/B/S mengetahui kegunaan dan cara membaca dari label tanda hemat energi pada produk lampu?</p>
                <div class="table-responsive">
                    <table class="table" border="1">
                        <tr>
                            <td>1</td>
                            <td><input type="radio" name="kegunaan" value="Ya"> Ya </td>
                            <td>2</td>
                            <td><input type="radio" name="kegunaan" value="Tidak"> Tidak </td>
                        </tr>
                    </table>
                </div>

                <p class="lead mb-0">11. Sebutkan jenis lampu yang I/B/S gunakan di rumah?</p>
                <div class="table-responsive">
                    <table class="table" border="1">
                        <tr>
                            <td>1</td>
                            <td><input type="radio" name="jenis_lampu" value="">LED (Lanjut ke Pertanyaan No.15)</td>
                            <td>3</td>
                            <td><input type="radio" name="jenis_lampu" value=""> LED dan Non-LED(Lanjut ke Pertanyaan No.12)</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><input type="radio" name="jenis_lampu" value=""> Non-LED (Lanjut ke Pertanyaan No.12-14)  </td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>

                <p class="lead mb-0">12. Apa alasan I/B/S belum/tidak menggunakan lampu LED sebagai alat penerangan di rumah? (lebih dari 1 jawaban)</p>
                <div class="table-responsive">
                    <table class="table" border="1">
                        <tr>
                            <td>1</td>
                            <td><input type="radio" name="alasan" value="">Tidak tahu informasi tentang lampu LED</td>
                            <td>4</td>
                            <td><input type="radio" name="alasan" value=""> Lampu LED boros listrik</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><input type="radio" name="alasan" value=""> Harga lampu LED tidak terjangkau (mahal)  </td>
                            <td>5</td>
                            <td><input type="radio" name="alasan" value=""> Lampu Non-LED yang lama masih menyala</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><input type="radio" name="alasan" value=""> Kualitas lampu LED buruk (cepat rusak) </td>
                            <td>99</td>
                            <td><input type="radio" name="alasan" value=""> Lainnya:............................</td>
                        </tr>
                    </table>
                </div>


                <p class="lead mb-0">13. Sebutkan jenis lampu Non-LED yang I/B/S gunakan di rumah? (lebih dari 1 jawaban) [SHOW CARD I]</p>
                <div class="table-responsive">
                    <table class="table" border="1">
                        <tr>
                            <td>1</td>
                            <td><input type="radio" name="daya" value="Incandescent">Incandescent</td>
                            <td>4</td>
                            <td><input type="radio" name="daya" value="Halogen"> Halogen </td>
                            <td>7</td>
                            <td><input type="radio" name="daya" value="High Pressure Sodium"> High Pressure Sodium </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><input type="radio" name="daya" value="LFL"> LFL  </td>
                            <td>5</td>
                            <td><input type="radio" name="daya" value="Mercury Vapour "> Mercury Vapour </td>
                            <td>99</td>
                            <td><input type="radio" name="daya" value=""> Lainnya:............................ </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><input type="radio" name="daya" value="Metal Halide"> Metal Halide </td>
                            <td>6</td>
                            <td><input type="radio" name="daya" value="CFL"> CFL </td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>

                <p class="lead mb-0">14. Apakah I/B/S mengetahui bahwa limbah lampu Non-LED mengandung zat kimia yang berbahaya bagi lingkungan?</p>
                <div class="table-responsive">
                    <table class="table" border="1">
                        <tr>
                            <td>1</td>
                            <td><input type="radio" name="kandungan" value="Ya">Ya</td>
                            <td>4</td>
                            <td><input type="radio" name="kandungan" value="Tidak"> Tidak </td>
                        </tr>
                    </table>
                </div>


                <p class="lead mb-0">15. Sejak kapan I/B/S telah menggunakan lampu LED untuk penerangan rumah?</p>
                <div class="table-responsive">
                    <table class="table" border="1">
                        <tr>
                            <td>1</td>
                            <td><input type="radio" name="lama" value="">< 1 tahun</td>
                            <td>3</td>
                            <td><input type="radio" name="lama" value=""> 2 - 4 tahun </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><input type="radio" name="lama" value=""> 1 - 2 tahun  </td>
                            <td>4</td>
                            <td><input type="radio" name="lama" value=""> > 4 tahun </td>
                        </tr>
                    </table>
                </div>
                

                <!-- document.querySelector('input[name="genderS"]:checked').value; -->


            </div>
        </section>
        <hr class="m-0" />
        <!-- Pertanyaan Khusus-->
        <section class="resume-section" id="pertanyaankhusus">
            <div class="resume-section-content">
                <h2 class="mb-5">Pertanyaan Khusus</h2>
                <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid
                    skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking,
                    free climbing, and kayaking.</p>
                <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television
                    shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest
                    technology advancements in the front-end web development world.</p>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Done-->
        <section class="resume-section" id="done">
            <div class="resume-section-content">
                <h2 class="mb-5">Selesai</h2>
                <ul class="fa-ul mb-0">
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        Google Analytics Certified Developer
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        Mobile Web Specialist - Google Certification
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        1
                        <sup>st</sup>
                        Place - University of Colorado Boulder - Emerging Tech Competition 2009
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        1
                        <sup>st</sup>
                        Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        2
                        <sup>nd</sup>
                        Place - University of Colorado Boulder - Emerging Tech Competition 2008
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        1
                        <sup>st</sup>
                        Place - James Buchanan High School - Hackathon 2006
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        3
                        <sup>rd</sup>
                        Place - James Buchanan High School - Hackathon 2005
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>