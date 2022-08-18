<?php include "admin/config.php"; ?>
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
            document.getElementById("output").innerHTML=day[d.getDay()] + ", "+d.getDate() + "-"+month[d.getMonth()]+ "-" +d.getFullYear();
        }
        window.addEventListener("load", function () {
            update();
        })


        function save_responden() {

            var hr = new XMLHttpRequest();
            var url = "lib/profile.php";
            var kota = document.getElementById("nama_kota").value;
            var kecamatan = document.getElementById("nama_kecamatan").value;
            var kelurahan = document.getElementById("nama_kelurahan").value;
            var namaresondenterpilih = document.getElementById("nama_resonden_terpilih").value;
            var alamatresponden = document.getElementById("alamat_responden").value;
            var jeniskelamin = document.getElementById("jenis_kelamin").value;
            var statuskk = document.getElementById("status_kk").value;
            var jumlahanggotakeluarga = document.getElementById("jumlah_anggota_keluarga").value;
            var nohp = document.getElementById("no_hp").value;
            var tanggal = document.getElementById("tanggal").value;
            var namasurveyor = document.getElementById("nama_surveyor").value;
            var nokuisioner = document.getElementById("no_kuisioner").value;
            var vars = "kota="+kota+"&kecamatan="+kecamatan+"&kelurahan="+kelurahan+"&namaresondenterpilih="+namaresondenterpilih+"&alamatresponden="+alamatresponden+"&jeniskelamin="+jeniskelamin+"&statuskk="+statuskk+"&jumlahanggotakeluarga="+jumlahanggotakeluarga+"&nohp="+nohp+"&tanggal="+tanggal+"&namasurveyor="+namasurveyor+"&nokuisioner="+nokuisioner;
            console.log(vars);
            hr.open("POST", url, true);
            hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            hr.onreadystatechange = function() {
                if(hr.readyState == 4 && hr.status == 200) {
                    console.log(hr.responseText);
                    if(hr.responseText == "success"){
                        ToastMaker("Responden Berhasil di Input!", 3000, {
                            valign: 'top',
                            classList: ["custom-border", "large-appearance"]
                        });
                    }else{
                        ToastMaker("Responden Gagal di Input!", 3000, {
                            valign: 'top',
                            classList: ["custom-border", "large-appearance"]
                        });
                    }
                }
            }
            hr.send(vars); 
        }

        function showKota(idk) {
        if (idk == "") {
            alert('please choose data!');
            return false;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("kecamatan").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "lib/kota.php?id=" + idk, true);
            xmlhttp.send();
        }
    }

    function showKecamatan(idkc) {
        if (idkc == "") {
            alert('please choose data!');
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("kelurahan").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "lib/kecamatan.php?id=" + idkc, true);
            xmlhttp.send();
        }
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
            <?php include "menu.php";?>
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
                    SURVEI PASAR PENCAHAYAAN EFISIENSI TINGGI DI INDONESIA 2022 , 
                    <span class="text-primary" id="output"></span>
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
            <?php include "section/section_1.php"; ?>
        </section>
        <hr class="m-0" />
        <!-- Profile-->
        <section class="resume-section" id="profile">
            <?php include "section/section_2.php"; ?>
        </section>
        <hr class="m-0" />
        <!-- Pertanyaan Umum-->
        <section class="resume-section" id="pertanyaanumum">
            <?php include "section/section_3.php"; ?>
        </section>
        <hr class="m-0" />
        <!-- Pertanyaan Khusus-->
        <section class="resume-section" id="pertanyaankhusus">
            <?php include "section/section_4.php"; ?>
        </section>
        <hr class="m-0" />
        <!-- Done-->
        <section class="resume-section" id="done">
            <?php include "section/section_5.php"; ?>
        </section>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>