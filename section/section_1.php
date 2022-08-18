        
        <div class="resume-section-content">
                <h2 class="mb-5 text-center">Responden</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Identitas Resonden Rumah Tangga</h3>
                        <div class="subheading mb-3"><input type="text" id="no_kuisioner" placeholder="No Kuisioner"
                                class="form-control" style="width:20%" required></div>
                        <div class="row">
                            <div class="col-md-4">
                                <select id="nama_kota" placeholder="Nama Kota" class="form-control" onchange="showKota(this.value)" required>
                                <option value="--">Pilih Kota </option>
                                <?php
                                        $sql = mysqli_query($koneksi,"select * from kota");
                                        while($data = mysqli_fetch_array($sql)){
                                                echo "<option value='".$data['id']."'>".$data['nama_kota']." </option>";
                                        }
                                ?>
                                </select>
                        </div>
                            <div class="col-md-4">
                                <span id="kecamatan">
                                        <select class="form-control">
                                                <option value="--">Pilih Kecamatan </option>
                                        </select>
                                </span>
                                </div>
                            <div class="col-md-4">
                                <span id="kelurahan">
                                        <select class="form-control">
                                                <option value="--"> Pilih Kelurahan </option>
                                        </select>
                                </span>
                                </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4"><input type="text" id="nama_resonden_terpilih" placeholder="Nama Responden"
                                    class="form-control" required></div>
                            <div class="col-md-4"><input type="text" id="alamat_responden" placeholder="Alamat Lengkap Responden"
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
                            <div class="col-md-4"><input type="date" id="tanggal" placeholder="Tanggal Sekarang"
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
                    <div class="flex-shrink-0"><span class="text-primary"></span></div>
                </div>

            </div>