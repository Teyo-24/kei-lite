<?= $this->extend('premium/layout/app'); ?>
<?= $this->section('content'); ?>

<style>
    .has-emails {
        background-color: #03AADE;
        color: #fff;
    }

    .no-emails {
        background-color: #fff;
    }

    .tab-content {
        margin-top: 20px;
    }

    .custom-tab {
        color: #000;
    }

    .custom-tab:hover {
        color: #007bff;
    }

    .nav-link.active {
        color: #007bff !important;
    }

    .custom-table {
        border-collapse: collapse;
        border-radius: 15px;
        overflow: hidden;
        border: 1px solid #ddd;
    }

    .custom-table thead th {
        background-color: #03AADE;
        color: white;
        text-align: center;
    }

    .table.custom-table td {
        vertical-align: middle;
    }

    .table.custom-table td:nth-child(6) {
        word-wrap: break-word;
        white-space: normal;
        min-width: 150px;
    }

    .modal-dialog {
        max-width: 600px;
    }

    .btn-custom {
        background-color: #03AADE;
        text-align: center;
        color: #ffffff;
    }

    .btn-custom:hover {
        color: #fff;
        transform: scale(1.05);
        box-shadow: 0px 0px 10px #F2BF02;
        transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
        background-color: #F2BF02 !important;
    }

    .card {
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .card h6 {
        font-weight: bold;
    }

    .total-kirim-email {
        text-align: center;
        font-size: 16px;
        margin-top: 20px;
    }

    #filter-form .form-control {
        width: 100%;
    }

    @media (max-width: 425px) {

        /* Pastikan layout tidak berdampingan */
        .d-flex.justify-content-between {
            flex-direction: column;
            /* Ubah ke kolom (vertikal) */
            gap: 20px;
            /* Tambahkan jarak antar elemen */
        }

        .col-md-5 {
            width: 100%;
            /* Buat elemen mengambil lebar penuh layar */
        }

        .col-md-5 h4 {
            font-size: 16px;
            /* Sesuaikan ukuran judul */
        }

        /* Responsif untuk input suku bunga */
        #tingkat_suku_bunga {
            text-align: center;
            /* Pastikan input berada di tengah */
            font-size: 14px;
            /* Ukuran font lebih kecil */
        }
    }
</style>

<!-- Title Section -->
<div class="py-5" style="text-align: center;">
    <h2 class="text-custom-title">Kelayakan Investasi</h2>
    <p class="text-custom-paragraph mt-2">Berikut Fitur Kelayakan Investasi untuk Menilai Potensi Investasi Anda</p>
</div>

<div class="container mt-4">
    <!-- Member Details (Full Width) -->
    <div class="col-lg-12">
        <div class="card p-4 shadow-sm">
            <!-- Tabs Navigation -->
            <ul class="nav nav-tabs justify-content-center gap-3 mt-3" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active custom-tab" id="tambah-progres-tab" data-bs-toggle="tab" data-bs-target="#tambah-progres" type="button" role="tab" aria-controls="tambah-progres" aria-selected="true">Data Finansial Investasi</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link custom-tab" id="penyusutan-tab" data-bs-toggle="tab" data-bs-target="#penyusutan" type="button" role="tab" aria-controls="penyusutan" aria-selected="false">Penyusutan Aktiva Tetap</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link custom-tab" id="average-tab" data-bs-toggle="tab" data-bs-target="#average" type="button" role="tab" aria-controls="average" aria-selected="false">Average Rate of Return</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link custom-tab" id="metode-payback-tab" data-bs-toggle="tab" data-bs-target="#metode-payback" type="button" role="tab" aria-controls="metode-payback" aria-selected="false">Metode Payback Period</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link custom-tab" id="internal-ror-tab" data-bs-toggle="tab" data-bs-target="#internal-ror" type="button" role="tab" aria-controls="internal-ror" aria-selected="false">Internal Rate of Return</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link custom-tab" id="modified-irr-tab" data-bs-toggle="tab" data-bs-target="#modified-irr" type="button" role="tab" aria-controls="modified-irr" aria-selected="false">Modified Internal Rate of Return</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link custom-tab" id="net-present-tab" data-bs-toggle="tab" data-bs-target="#net-present" type="button" role="tab" aria-controls="net-present" aria-selected="false">Net Present Value</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link custom-tab" id="profitability-tab" data-bs-toggle="tab" data-bs-target="#profitability" type="button" role="tab" aria-controls="profitability" aria-selected="false">Profitability Index</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link custom-tab" id="penilaian-investasi-tab" data-bs-toggle="tab" data-bs-target="#penilaian-investasi" type="button" role="tab" aria-controls="penilaian-investasi" aria-selected="false">Penilaian Investasi</button>
                </li>
            </ul>

            <!-- Tab Contents -->
            <div class="tab-content mt-4" id="myTabContent">
                <!-- Data Finansial Investasi -->
                <div class="tab-pane fade show active" id="tambah-progres" role="tabpanel"
                    aria-labelledby="tambah-progres-tab">

                    <!-- Title for the section -->
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm bg-white">
                        <h4 class="text-center text-primary mb-3">Investasi</h4>

                        <!-- Form Fields -->
                        <div class="mb-3">
                            <label for="pembelian_aktiva_tetap" class="form-label fw-bold">Pembelian Aktiva Tetap</label>
                            <input type="text" class="form-control" id="pembelian_aktiva_tetap" name="pembelian_aktiva_tetap" placeholder="Masukkan Jumlah Pembelian Aktiva Tetap" oninput="formatPembelianAktivaTetap(this); updateInvestmentTotal();">
                        </div>

                        <div class="mb-3">
                            <label for="kebutuhan_modal_kerja" class="form-label fw-bold">Kebutuhan Modal Kerja</label>
                            <input type="text" class="form-control" id="kebutuhan_modal_kerja" name="kebutuhan_modal_kerja" placeholder="Masukkan Kebutuhan Modal Kerja" oninput="formatNumber(this); updateInvestmentTotal();">
                        </div>

                        <div class="mb-3">
                            <label for="usia_ekonomis" class="form-label fw-bold">Usia Ekonomis</label>
                            <input type="text" class="form-control" id="usia_ekonomis" name="usia_ekonomis" placeholder="5 Tahun" disabled>
                        </div>
                    </div>

                    <!-- Title for the table section -->
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm bg-white">
                        <h4 class="text-center text-primary mb-3">Prediksi Laba Setelah Pajak (EAT)</h4>

                        <div class="mb-3">
                            <label for="eat_1" class="form-label fw-bold">Tahun ke-1</label>
                            <input type="text" class="form-control" id="eat_1" name="eat_1" placeholder="Masukkan Prediksi Tahun ke-1" oninput="eat(this, 1)">
                        </div>

                        <div class="mb-3">
                            <label for="eat_2" class="form-label fw-bold">Tahun ke-2</label>
                            <input type="text" class="form-control" id="eat_2" name="eat_2" placeholder="Masukkan Prediksi Tahun ke-2" oninput="eat(this, 2)">
                        </div>

                        <div class="mb-3">
                            <label for="eat_3" class="form-label fw-bold">Tahun ke-3</label>
                            <input type="text" class="form-control" id="eat_3" name="eat_3" placeholder="Masukkan Prediksi Tahun ke-3" oninput="eat(this, 3)">
                        </div>

                        <div class="mb-3">
                            <label for="eat_4" class="form-label fw-bold">Tahun ke-4</label>
                            <input type="text" class="form-control" id="eat_4" name="eat_4" placeholder="Masukkan Prediksi Tahun ke-4" oninput="eat(this, 4)">
                        </div>

                        <div class="mb-3">
                            <label for="eat_5" class="form-label fw-bold">Tahun ke-5</label>
                            <input type="text" class="form-control" id="eat_5" name="eat_5" placeholder="Masukkan Prediksi Tahun ke-5" oninput="eat(this, 5)">
                        </div>
                    </div>

                    <!-- Title and Read-only Input for "Tingkat Suku Bunga" -->
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm bg-white">
                        <h4 class="text-center text-primary mb-3">Tingkat Suku Bunga</h4>
                        <div class="mb-3">
                            <div class="mb-3 d-flex justify-content-center" style="width: 50%; margin: 0 auto;">
                                <input type="text" class="form-control-plaintext text-center" id="tingkat_suku_bunga" name="tingkat_suku_bunga" placeholder="20%" disabled>
                            </div>
                        </div>
                    </div>

                    <!-- Aktiva Tetap and Kelayakan Investasi Section -->
                    <div class="d-flex justify-content-between mt-4 gap-4">
                        <!-- Aktiva Tetap Form -->
                        <div class="col-md-5 mx-auto mt-4 p-4 rounded shadow-sm bg-white">
                            <h4 class="text-center text-primary mb-3">Tingkat Suku Bunga</h4>
                            <div class="mb-3">
                                <label for="dfi_harga_perolehan" class="form-label fw-bold">Harga Perolehan (Cost)</label>
                                <input type="text" class="form-control" id="dfi_harga_perolehan" name="dfi_harga_perolehan" disabled placeholder="Mengikuti Pembelian Aktiva Tetap">
                            </div>
                            <div class="mb-3">
                                <label for="dfi_nilai_sisa" class="form-label fw-bold">Nilai Sisa (Salvage)</label>
                                <input type="text" class="form-control" id="dfi_nilai_sisa" name="dfi_nilai_sisa" placeholder="2.000.000.000" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="dfi_umur_ekonomis" class="form-label fw-bold">Umur Ekonomis (Life)</label>
                                <input type="text" class="form-control" id="dfi_umur_ekonomis" name="dfi_umur_ekonomis" placeholder="5 Tahun" disabled>
                            </div>
                        </div>

                        <!-- Kelayakan Investasi Table -->
                        <div class="col-md-5 mx-auto mt-4 p-4 rounded shadow-sm bg-white">
                            <h4 class="text-center text-primary mb-3">Tingkat Suku Bunga</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>ARR</th>
                                            <th>Payback</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Baris pertama untuk input ARR dan Payback -->
                                        <tr>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="arr_1" placeholder="50" disabled>
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">%</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="payback" placeholder="3" disabled>
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Tahun</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Baris kedua untuk input tambahan ARR -->
                                        <tr>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="arr_2" placeholder="20" disabled>
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">%</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td></td> <!-- Kosongkan kolom kedua untuk baris kedua -->
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Penyusutan Aktiva Tetap -->
                <div class="tab-pane fade" id="penyusutan" role="tabpanel" aria-labelledby="penyusutan-tab">
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm bg-white">
                        <h4 class="text-center text-primary mb-3">Penyusutan Aktiva Tetap</h4>

                        <!-- Dropdown for Penyusutan Aktiva Tetap -->
                        <div class="mb-3">
                            <label for="metode_penyusutan" class="form-label fw-bold">Pilih salah satu metode penyusutan:</label>
                            <select class="form-select" id="metode_penyusutan" name="metode_penyusutan" onchange="calculateDepreciation()">
                                <option value="" selected disabled>Pilih Metode Penyusutan</option>
                                <option value="garis_lurus">1. Garis Lurus</option>
                                <option value="angka_tahun">2. Angka Tahun</option>
                                <option value="saldo_menurun">3. Saldo Menurun</option>
                            </select>
                        </div>
                    </div>

                    <!-- Data Aktiva -->
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm bg-white">
                        <h4 class="text-center text-primary mb-3">Data Aktiva</h4>

                        <!-- Input Fields for Data Aktiva -->
                        <div class="mb-3">
                            <label for="pat_harga_perolehan" class="form-label fw-bold">Harga Perolehan (Cost)</label>
                            <input type="text" class="form-control" id="pat_harga_perolehan" name="pat_harga_perolehan" disabled placeholder="Mengikuti Pembelian Aktiva Tetap">
                        </div>

                        <div class="mb-3">
                            <label for="pat_nilai_sisa" class="form-label fw-bold">Nilai Sisa (Salvage)</label>
                            <input type="text" class="form-control" id="pat_nilai_sisa" name="pat_nilai_sisa" disabled placeholder="2.000.000.000">
                        </div>

                        <div class="mb-3">
                            <label for="pat_umur_ekonomis" class="form-label fw-bold">Umur Ekonomis (Life)</label>
                            <input type="text" class="form-control" id="pat_umur_ekonomis" name="pat_umur_ekonomis" placeholder="5 Tahun" disabled>
                        </div>
                    </div>

                    <!-- Tabel Penyusutan Aktiva Tetap -->
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm text-center">
                        <h4 class="text-center text-primary mb-4">Tabel Penyusutan Aktiva Tetap</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table-primary">
                                    <tr>
                                        <th>Akhir Tahun</th>
                                        <th>Debet Penyusutan</th>
                                        <th>Kredit AKM Penyusutan</th>
                                        <th>Total AKM Penyusutan</th>
                                        <th>Nilai Buku Aktiva</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td id="0_akhir_tahun">0</td>
                                        <td id="0_debet_penyusutan">0</td>
                                        <td id="0_kredit_akm_penyusutan">0</td>
                                        <td id="0_total_akm_penyusutan">0</td>
                                        <td id="0_nilai_buku_aktiva"></td>
                                    </tr>
                                    <tr>
                                        <td id="1_akhir_tahun">1</td>
                                        <td id="1_debet_penyusutan"></td>
                                        <td id="1_kredit_akm_penyusutan"></td>
                                        <td id="1_total_akm_penyusutan"></td>
                                        <td id="1_nilai_buku_aktiva"></td>
                                    </tr>
                                    <tr>
                                        <td id="2_akhir_tahun">2</td>
                                        <td id="2_debet_penyusutan"></td>
                                        <td id="2_kredit_akm_penyusutan"></td>
                                        <td id="2_total_akm_penyusutan"></td>
                                        <td id="2_nilai_buku_aktiva"></td>
                                    </tr>
                                    <tr>
                                        <td id="3_akhir_tahun">3</td>
                                        <td id="3_debet_penyusutan"></td>
                                        <td id="3_kredit_akm_penyusutan"></td>
                                        <td id="3_total_akm_penyusutan"></td>
                                        <td id="3_nilai_buku_aktiva"></td>
                                    </tr>
                                    <tr>
                                        <td id="4_akhir_tahun">4</td>
                                        <td id="4_debet_penyusutan"></td>
                                        <td id="4_kredit_akm_penyusutan"></td>
                                        <td id="4_total_akm_penyusutan"></td>
                                        <td id="4_nilai_buku_aktiva"></td>
                                    </tr>
                                    <tr>
                                        <td id="5_akhir_tahun">5</td>
                                        <td id="5_debet_penyusutan"></td>
                                        <td id="5_kredit_akm_penyusutan"></td>
                                        <td id="5_total_akm_penyusutan"></td>
                                        <td id="5_nilai_buku_aktiva"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Average Rate of Return -->
                <div class="tab-pane fade" id="average" role="tabpanel" aria-labelledby="average-tab">

                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm">
                        <h4 class="text-center text-primary mb-4">Average Rate of Return</h4>
                        <!-- Input Fields -->
                        <div class="mb-3">
                            <label for="aror_investasi" class="form-label fw-bold">Investasi</label>
                            <input type="text" class="form-control" id="aror_investasi" name="aror_investasi" placeholder="Hasil Penjumlahan Pembelian Aktiva Tetap Dan Kebutuhan Modal Kerja" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="aror_usia_ekonomis" class="form-label fw-bold">Usia Ekonomis</label>
                            <input type="text" class="form-control" id="aror_usia_ekonomis" name="aror_usia_ekonomis" placeholder="5 Tahun" disabled>
                        </div>
                    </div>

                    <!-- Tabel Penyusutan Aktiva Tetap -->
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm text-center">
                        <h4 class="text-center text-primary mb-4">Aliran Kas</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table-primary">
                                    <tr>
                                        <th>Keterangan</th>
                                        <th>Laba Set. Pajak</th>
                                        <th>Penyusutan</th>
                                        <th>Aliran Kas Masuk</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td id="1_aror_keterangan">Tahun ke-1</td>
                                        <td id="1_aror_laba_set_pajak"></td>
                                        <td id="1_aror_penyusutan"></td>
                                        <td id="1_aror_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="2_aror_keterangan">Tahun ke-2</td>
                                        <td id="2_aror_laba_set_pajak"></td>
                                        <td id="2_aror_penyusutan"></td>
                                        <td id="2_aror_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="3_aror_keterangan">Tahun ke-3</td>
                                        <td id="3_aror_laba_set_pajak"></td>
                                        <td id="3_aror_penyusutan"></td>
                                        <td id="3_aror_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="4_aror_keterangan">Tahun ke-4</td>
                                        <td id="4_aror_laba_set_pajak"></td>
                                        <td id="4_aror_penyusutan"></td>
                                        <td id="4_aror_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="5_aror_keterangan">Tahun ke-5</td>
                                        <td id="5_aror_laba_set_pajak"></td>
                                        <td id="5_aror_penyusutan"></td>
                                        <td id="5_aror_aliran_kas_masuk"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- View Investasi -->
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm">

                        <div class="mb-3">
                            <label for="rata_laba_setelah_pajak" class="form-label fw-bold">Rata-Rata Laba Setelah Pajak (EAT)</label>
                            <input type="text" class="form-control" id="rata_laba_setelah_pajak" name="rata_laba_setelah_pajak" disabled placeholder="Belum Ada Nilai">
                        </div>
                        <div class="mb-3">
                            <label for="investasi_awal" class="form-label fw-bold">Investasi Awal</label>
                            <input type="text" class="form-control" id="investasi_awal" name="investasi_awal" disabled placeholder="Belum Ada Nilai">
                        </div>
                        <div class="mb-3">
                            <label for="rata_investasi" class="form-label fw-bold">Rata-Rata Investasi</label>
                            <input type="text" class="form-control" id="rata_investasi" name="rata_investasi" disabled placeholder="Belum Ada Nilai">
                        </div>
                        <div class="mb-3">
                            <label for="arr_initial_investment" class="form-label fw-bold">ARR - Initial Investment</label>
                            <input type="text" class="form-control" id="arr_initial_investment" name="arr_initial_investment" disabled placeholder="Belum Ada Nilai">
                        </div>
                        <div class="mb-3">
                            <label for="arr_average_investment" class="form-label fw-bold">ARR - Average Investment</label>
                            <input type="text" class="form-control" id="arr_average_investment" name="arr_average_investment" disabled placeholder="Belum Ada Nilai">
                        </div>
                    </div>

                    <!-- Kesimpulan -->
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm">
                        <h4 class="text-center text-primary mb-4">Kesimpulan Investasi</h4>

                        <div class="mb-3">
                            <input type="text" class="form-control text-center text-uppercase fw-bold" id="aror_kesimpulan_investasi" name="aror_kesimpulan_investasi" disabled placeholder="Belum Ada Kesimpulan">
                        </div>
                    </div>
                </div>

                <!-- Metode Payback Period -->
                <div class="tab-pane fade" id="metode-payback" role="tabpanel" aria-labelledby="metode-payback-tab">

                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm">
                        <h4 class="text-center text-primary mb-4">Metode Payback Period</h4>

                        <div class="mb-3">
                            <label for="mpp_investasi" class="form-label fw-bold">Investasi</label>
                            <input type="text" class="form-control" id="mpp_investasi" name="mpp_investasi" placeholder="Hasil Penjumlahan Pembelian Aktiva Tetap Dan Kebutuhan Modal Kerja" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="mpp_usia_ekonomis" class="form-label fw-bold">Usia Ekonomis</label>
                            <input type="text" class="form-control" id="mpp_usia_ekonomis" name="mpp_usia_ekonomis" placeholder="5 Tahun" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="mpp_suku_bunga" class="form-label fw-bold">Suku Bunga</label>
                            <input type="text" class="form-control" id="mpp_suku_bunga" name="mpp_suku_bunga" placeholder="20%" disabled>
                        </div>
                    </div>

                    <!-- Tabel Penyusutan Aktiva Tetap -->
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm text-center">
                        <h4 class="text-center text-primary mb-4">Aliran Kas</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table-primary">
                                    <tr>
                                        <th>Keterangan</th>
                                        <th>Laba Set. Pajak</th>
                                        <th>Penyusutan</th>
                                        <th>Aliran Kas Masuk</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td id="0_mpp_keterangan">Tahun Ke-0</td>
                                        <td id="0_mpp_laba_set_pajak">0</td>
                                        <td id="0_mpp_penyusutan">0</td>
                                        <td id="0_mpp_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="1_mpp_keterangan">Tahun Ke-1</td>
                                        <td id="1_mpp_laba_set_pajak"></td>
                                        <td id="1_mpp_penyusutan"></td>
                                        <td id="1_mpp_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="2_mpp_keterangan">Tahun Ke-2</td>
                                        <td id="2_mpp_laba_set_pajak"></td>
                                        <td id="2_mpp_penyusutan"></td>
                                        <td id="2_mpp_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="3_mpp_keterangan">Tahun Ke-3</td>
                                        <td id="3_mpp_laba_set_pajak"></td>
                                        <td id="3_mpp_penyusutan"></td>
                                        <td id="3_mpp_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="4_mpp_keterangan">Tahun Ke-4</td>
                                        <td id="4_mpp_laba_set_pajak"></td>
                                        <td id="4_mpp_penyusutan"></td>
                                        <td id="4_mpp_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="5_mpp_keterangan">Tahun Ke-5</td>
                                        <td id="5_mpp_laba_set_pajak"></td>
                                        <td id="5_mpp_penyusutan"></td>
                                        <td id="5_mpp_aliran_kas_masuk"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- View Metode Payback -->
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm">

                        <div class="mb-3">
                            <label for="periode_payback" class="form-label fw-bold">Periode Payback</label>
                            <input type="text" class="form-control" id="periode_payback" name="periode_payback" disabled placeholder="Belum Ada Nilai">
                        </div>
                    </div>

                    <!-- Kesimpulan -->
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm">
                        <h4 class="text-center text-primary mb-4">Kesimpulan Investasi</h4>

                        <div class="mb-3">
                            <input type="text" class="form-control text-center text-uppercase fw-bold" id="mpp_kesimpulan_investasi" name="mpp_kesimpulan_investasi" disabled placeholder="Belum Ada Kesimpulan">
                        </div>
                    </div>
                </div>

                <!-- Internal Rate of Return -->
                <div class="tab-pane fade" id="internal-ror" role="tabpanel" aria-labelledby="internal-ror-tab">

                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm">
                        <h4 class="text-center text-primary mb-4">Internal Rate of Return</h4>

                        <div class="mb-3">
                            <label for="iror_investasi" class="form-label fw-bold">Investasi</label>
                            <input type="text" class="form-control" id="iror_investasi" name="iror_investasi" placeholder="Hasil Penjumlahan Pembelian Aktiva Tetap Dan Kebutuhan Modal Kerja" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="iror_usia_ekonomis" class="form-label fw-bold">Usia Ekonomis</label>
                            <input type="text" class="form-control" id="iror_usia_ekonomis" name="iror_usia_ekonomis" placeholder="5 Tahun" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="iror_suku_bunga" class="form-label fw-bold">Suku Bunga</label>
                            <input type="text" class="form-control" id="iror_suku_bunga" name="iror_suku_bunga" placeholder="20%" disabled>
                        </div>
                    </div>

                    <!-- Aliran Kas -->
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm text-center">
                        <h4 class="text-center text-primary mb-4">Aliran Kas</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table-primary">
                                    <tr>
                                        <th>Keterangan</th>
                                        <th>Laba Set. Pajak</th>
                                        <th>Penyusutan</th>
                                        <th>Aliran Kas Masuk</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td id="0_iror_keterangan">Tahun Ke-0</td>
                                        <td id="0_iror_laba_set_pajak">0</td>
                                        <td id="0_iror_penyusutan">0</td>
                                        <td id="0_iror_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="1_iror_keterangan">Tahun Ke-1</td>
                                        <td id="1_iror_laba_set_pajak"></td>
                                        <td id="1_iror_penyusutan"></td>
                                        <td id="1_iror_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="2_iror_keterangan">Tahun Ke-2</td>
                                        <td id="2_iror_laba_set_pajak"></td>
                                        <td id="2_iror_penyusutan"></td>
                                        <td id="2_iror_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="3_iror_keterangan">Tahun Ke-3</td>
                                        <td id="3_iror_laba_set_pajak"></td>
                                        <td id="3_iror_penyusutan"></td>
                                        <td id="3_iror_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="4_iror_keterangan">Tahun Ke-4</td>
                                        <td id="4_iror_laba_set_pajak"></td>
                                        <td id="4_iror_penyusutan"></td>
                                        <td id="4_iror_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="5_iror_keterangan">Tahun Ke-5</td>
                                        <td id="5_iror_laba_set_pajak"></td>
                                        <td id="5_iror_penyusutan"></td>
                                        <td id="5_iror_aliran_kas_masuk"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- View IRR -->
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm">

                        <div class="mb-3">
                            <label for="irr" class="form-label fw-bold">Internal Rate of Return (IRR)</label>
                            <input type="text" class="form-control" id="irr" name="irr" disabled placeholder="Belum Ada Nilai">
                        </div>
                    </div>

                    <!-- Kesimpulan -->
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm">
                        <h4 class="text-center text-primary mb-4">Kesimpulan Investasi</h4>

                        <div class="mb-3">
                            <input type="text" class="form-control text-center text-uppercase fw-bold" id="iror_kesimpulan_investasi" name="iror_kesimpulan_investasi" disabled placeholder="Belum Ada Kesimpulan">
                        </div>
                    </div>
                </div>

                <!-- Modified Internal Rate of Return -->
                <div class="tab-pane fade" id="modified-irr" role="tabpanel" aria-labelledby="modified-irr-tab">

                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm">
                        <h4 class="text-center text-primary mb-4">Modified Internal Rate of Return</h4>

                        <div class="mb-3">
                            <label for="miror_investasi" class="form-label fw-bold">Investasi</label>
                            <input type="text" class="form-control" id="miror_investasi" name="miror_investasi" placeholder="Hasil Penjumlahan Pembelian Aktiva Tetap Dan Kebutuhan Modal Kerja" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="miror_usia_ekonomis" class="form-label fw-bold">Usia Ekonomis</label>
                            <input type="text" class="form-control" id="miror_usia_ekonomis" name="miror_usia_ekonomis" placeholder="5 Tahun" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="miror_suku_bunga" class="form-label fw-bold">Suku Bunga</label>
                            <input type="text" class="form-control" id="miror_suku_bunga" name="miror_suku_bunga" placeholder="20%" disabled>
                        </div>
                    </div>

                    <!-- Aliran Kas -->
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm text-center">
                        <h4 class="text-center text-primary mb-4">Aliran Kas</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table-primary">
                                    <tr>
                                        <th>Keterangan</th>
                                        <th>Laba Set. Pajak</th>
                                        <th>Penyusutan</th>
                                        <th>Aliran Kas Masuk</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td id="0_miror_keterangan">Tahun Ke-0</td>
                                        <td id="0_miror_laba_set_pajak">0</td>
                                        <td id="0_miror_penyusutan">0</td>
                                        <td id="0_miror_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="1_miror_keterangan">Tahun Ke-1</td>
                                        <td id="1_miror_laba_set_pajak"></td>
                                        <td id="1_miror_penyusutan"></td>
                                        <td id="1_miror_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="2_miror_keterangan">Tahun Ke-2</td>
                                        <td id="2_miror_laba_set_pajak"></td>
                                        <td id="2_miror_penyusutan"></td>
                                        <td id="2_miror_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="3_miror_keterangan">Tahun Ke-3</td>
                                        <td id="3_miror_laba_set_pajak"></td>
                                        <td id="3_miror_penyusutan"></td>
                                        <td id="3_miror_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="4_miror_keterangan">Tahun Ke-4</td>
                                        <td id="4_miror_laba_set_pajak"></td>
                                        <td id="4_miror_penyusutan"></td>
                                        <td id="4_miror_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="5_miror_keterangan">Tahun Ke-5</td>
                                        <td id="5_miror_laba_set_pajak"></td>
                                        <td id="5_miror_penyusutan"></td>
                                        <td id="5_miror_aliran_kas_masuk"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- View MIRR -->
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm">
                        <div class="mb-3">
                            <label for="reinvest_rate" class="form-label fw-bold">Re-investment Rate</label>
                            <input type="text" class="form-control" id="reinvest_rate" name="reinvest_rate" disabled placeholder="12.50%">
                        </div>

                        <div class="mb-3">
                            <label for="miror_mirr" class="form-label fw-bold">Modified Internal Rate of Return / MIRR</label>
                            <input type="text" class="form-control" id="miror_mirr" name="miror_mirr" disabled placeholder="Belum Ada Nilai">
                        </div>
                    </div>

                    <!-- Kesimpulan -->
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm">
                        <h4 class="text-center text-primary mb-4">Kesimpulan Investasi</h4>

                        <div class="mb-3">
                            <input type="text" class="form-control text-center text-uppercase fw-bold" id="miror_kesimpulan_investasi" name="miror_kesimpulan_investasi" disabled placeholder="Belum Ada Kesimpulan">
                        </div>
                    </div>
                </div>

                <!-- Net Present Value -->
                <div class="tab-pane fade" id="net-present" role="tabpanel" aria-labelledby="net-present">

                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm">
                        <h4 class="text-center text-primary mb-4">Net Present Value</h4>

                        <div class="mb-3">
                            <label for="npv_investasi" class="form-label fw-bold">Investasi</label>
                            <input type="text" class="form-control" id="npv_investasi" name="npv_investasi" placeholder="Hasil Penjumlahan Pembelian Aktiva Tetap Dan Kebutuhan Modal Kerja" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="npv_usia_ekonomis" class="form-label fw-bold">Usia Ekonomis</label>
                            <input type="text" class="form-control" id="npv_usia_ekonomis" name="npv_usia_ekonomis" placeholder="5 Tahun" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="npv_suku_bunga" class="form-label fw-bold">Suku Bunga</label>
                            <input type="text" class="form-control" id="npv_suku_bunga" name="npv_suku_bunga" placeholder="20%" disabled>
                        </div>
                    </div>

                    <!-- Aliran Kas -->
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm text-center">
                        <h4 class="text-center text-primary mb-4">Aliran Kas</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table-primary">
                                    <tr>
                                        <th>Keterangan</th>
                                        <th>Laba Set. Pajak</th>
                                        <th>Penyusutan</th>
                                        <th>Aliran Kas Masuk</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td id="0_npv_keterangan">Tahun Ke-0</td>
                                        <td id="0_npv_laba_set_pajak">0</td>
                                        <td id="0_npv_penyusutan">0</td>
                                        <td id="0_npv_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="1_npv_keterangan">Tahun Ke-1</td>
                                        <td id="1_npv_laba_set_pajak"></td>
                                        <td id="1_npv_penyusutan"></td>
                                        <td id="1_npv_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="2_npv_keterangan">Tahun Ke-2</td>
                                        <td id="2_npv_laba_set_pajak"></td>
                                        <td id="2_npv_penyusutan"></td>
                                        <td id="2_npv_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="3_npv_keterangan">Tahun Ke-3</td>
                                        <td id="3_npv_laba_set_pajak"></td>
                                        <td id="3_npv_penyusutan"></td>
                                        <td id="3_npv_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="4_npv_keterangan">Tahun Ke-4</td>
                                        <td id="4_npv_laba_set_pajak"></td>
                                        <td id="4_npv_penyusutan"></td>
                                        <td id="4_npv_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="5_npv_keterangan">Tahun Ke-5</td>
                                        <td id="5_npv_laba_set_pajak"></td>
                                        <td id="5_npv_penyusutan"></td>
                                        <td id="5_npv_aliran_kas_masuk"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- View NPV -->
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm">
                        <div class="mb-3">
                            <label for="npv_npv" class="form-label fw-bold">Net Present Value (NPV)</label>
                            <input type="text" class="form-control" id="npv_npv" name="npv_npv" placeholder="Belum Ada Nilai" disabled>
                        </div>
                    </div>

                    <!-- Kesimpulan -->
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm">
                        <h4 class="text-center text-primary mb-4">Kesimpulan Investasi</h4>

                        <div class="mb-3">
                            <input type="text" class="form-control text-center text-uppercase fw-bold" id="npv_kesimpulan_investasi" name="npv_kesimpulan_investasi" disabled placeholder="Belum Ada Kesimpulan">
                        </div>
                    </div>
                </div>

                <!-- Profitability Index -->
                <div class="tab-pane fade" id="profitability" role="tabpanel" aria-labelledby="profitability">

                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm">
                        <h4 class="text-center text-primary mb-4">Profitability Index</h4>

                        <div class="mb-3">
                            <label for="pindex_investasi" class="form-label fw-bold">Investasi</label>
                            <input type="text" class="form-control" id="pindex_investasi" name="pindex_investasi" placeholder="Hasil Penjumlahan Pembelian Aktiva Tetap Dan Kebutuhan Modal Kerja" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="pindex_usia_ekonomis" class="form-label fw-bold">Usia Ekonomis</label>
                            <input type="text" class="form-control" id="pindex_usia_ekonomis" name="pindex_usia_ekonomis" placeholder="5 Tahun" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="pindex_suku_bunga" class="form-label fw-bold">Suku Bunga</label>
                            <input type="text" class="form-control" id="pindex_suku_bunga" name="pindex_suku_bunga" placeholder="20%" disabled>
                        </div>
                    </div>

                    <!-- Aliran Kas -->
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm text-center">
                        <h4 class="text-center text-primary mb-4">Aliran Kas</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table-primary">
                                    <tr>
                                        <th>Keterangan</th>
                                        <th>Laba Set. Pajak</th>
                                        <th>Penyusutan</th>
                                        <th>Aliran Kas Masuk</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td id="0_pindex_keterangan">Tahun Ke-0</td>
                                        <td id="0_pindex_laba_set_pajak">0</td>
                                        <td id="0_pindex_penyusutan">0</td>
                                        <td id="0_pindex_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="1_pindex_keterangan">Tahun Ke-1</td>
                                        <td id="1_pindex_laba_set_pajak"></td>
                                        <td id="1_pindex_penyusutan"></td>
                                        <td id="1_pindex_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="2_pindex_keterangan">Tahun Ke-2</td>
                                        <td id="2_pindex_laba_set_pajak"></td>
                                        <td id="2_pindex_penyusutan"></td>
                                        <td id="2_pindex_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="3_pindex_keterangan">Tahun Ke-3</td>
                                        <td id="3_pindex_laba_set_pajak"></td>
                                        <td id="3_pindex_penyusutan"></td>
                                        <td id="3_pindex_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="4_pindex_keterangan">Tahun Ke-4</td>
                                        <td id="4_pindex_laba_set_pajak"></td>
                                        <td id="4_pindex_penyusutan"></td>
                                        <td id="4_pindex_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="5_pindex_keterangan">Tahun Ke-5</td>
                                        <td id="5_pindex_laba_set_pajak"></td>
                                        <td id="5_pindex_penyusutan"></td>
                                        <td id="5_pindex_aliran_kas_masuk"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- View Profitability Index -->
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm">
                        <div class="mb-3">
                            <label for="pindex_npv" class="form-label fw-bold">Net Present Value (NPV)</label>
                            <input type="text" class="form-control" id="pindex_npv" name="pindex_npv" placeholder="Belum Ada Nilai" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="pindex_pindex" class="form-label fw-bold">Profitability Index (PI)</label>
                            <input type="text" class="form-control" id="pindex_pindex" name="pindex_pindex" placeholder="Belum Ada Nilai" disabled>
                        </div>
                    </div>

                    <!-- Kesimpulan -->
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm">
                        <h4 class="text-center text-primary mb-4">Kesimpulan Investasi</h4>

                        <div class="mb-3">
                            <input type="text" class="form-control text-center text-uppercase fw-bold" id="pindex_kesimpulan_investasi" name="pindex_kesimpulan_investasi" disabled placeholder="Belum Ada Kesimpulan">
                        </div>
                    </div>
                </div>

                <!-- Penilaian Investasi dengan Berbagai Kriteria -->
                <div class="tab-pane fade" id="penilaian-investasi" role="tabpanel"
                    aria-labelledby="penilaian-investasi">

                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm">
                        <h4 class="text-center text-primary mb-4">Penilaian Investasi dengan Berbagai Kriteria</h4>

                        <div class="mb-3">
                            <label for="pibk_investasi" class="form-label fw-bold">Investasi</label>
                            <input type="text" class="form-control" id="pibk_investasi" name="pibk_investasi" placeholder="Hasil Penjumlahan Pembelian Aktiva Tetap Dan Kebutuhan Modal Kerja" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="pibk_usia_ekonomis" class="form-label fw-bold">Usia Ekonomis</label>
                            <input type="text" class="form-control" id="pibk_usia_ekonomis" name="pibk_usia_ekonomis" placeholder="5 Tahun" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="pibk_suku_bunga" class="form-label fw-bold">Suku Bunga</label>
                            <input type="text" class="form-control" id="pibk_suku_bunga" name="pibk_suku_bunga" placeholder="20%" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="pibk_reinvest_rate" class="form-label fw-bold">Suku Bunga Re-invest</label>
                            <input type="text" class="form-control" id="pibk_reinvest_rate" name="pibk_reinvest_rate" disabled placeholder="12.50%">
                        </div>
                    </div>

                    <!-- Persyaratan Kelayakan Investasi -->
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm">
                        <h4 class="text-center text-primary mb-4">Persyaratan Kelayakan Investasi</h4>

                        <div class="mb-3">
                            <label for="pibk_arr" class="form-label fw-bold">ARR</label>
                            <input type="text" class="form-control" id="pibk_arr" name="pibk_arr" placeholder="45%" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="pibk_payback" class="form-label fw-bold">Payback</label>
                            <input type="text" class="form-control" id="pibk_payback" name="pibk_payback" placeholder="3 Tahun" disabled>
                        </div>
                    </div>

                    <!-- Data Aktiva -->
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm bg-white">
                        <h4 class="text-center text-primary mb-3">Data Aktiva</h4>

                        <!-- Input Fields for Data Aktiva -->
                        <div class="mb-3">
                            <label for="pibk_harga_perolehan" class="form-label fw-bold">Harga Perolehan (Cost)</label>
                            <input type="text" class="form-control" id="pibk_harga_perolehan" name="pibk_harga_perolehan" disabled placeholder="Mengikuti Pembelian Aktiva Tetap">
                        </div>

                        <div class="mb-3">
                            <label for="pibk_nilai_sisa" class="form-label fw-bold">Nilai Sisa (Salvage)</label>
                            <input type="text" class="form-control" id="pibk_nilai_sisa" name="pibk_nilai_sisa" disabled placeholder="2.000.000.000">
                        </div>

                        <div class="mb-3">
                            <label for="pibk_umur_ekonomis" class="form-label fw-bold">Umur Ekonomis (Life)</label>
                            <input type="text" class="form-control" id="pibk_umur_ekonomis" name="pibk_umur_ekonomis" placeholder="5 Tahun" disabled>
                        </div>
                    </div>

                    <!-- Dropdown for Penyusutan Aktiva Tetap -->
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm bg-white">
                        <h4 class="text-center text-primary mb-3">Penyusutan Aktiva Tetap</h4>
                        <div class="mb-3">
                            <label for="pibk_metode_penyusutan" class="form-label fw-bold">Pilih salah satu metode penyusutan:</label>
                            <select class="form-select" id="pibk_metode_penyusutan" name="pibk_metode_penyusutan" onchange="calculateDepreciation2()">
                                <option value="" selected disabled>Pilih Metode Penyusutan</option>
                                <option value="garis_lurus">1. Garis Lurus</option>
                                <option value="angka_tahun">2. Angka Tahun</option>
                                <option value="saldo_menurun">3. Saldo Menurun</option>
                            </select>
                        </div>
                    </div>

                    <!-- Aliran Kas -->
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm text-center">
                        <h4 class="text-center text-primary mb-4">Aliran Kas</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table-primary">
                                    <tr>
                                        <th>Keterangan</th>
                                        <th>EAT</th>
                                        <th>Depresiasi</th>
                                        <th>Cash Inflow</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td id="0_pibk_keterangan">Tahun Ke-0</td>
                                        <td id="0_pibk_laba_set_pajak">0</td>
                                        <td id="0_pibk_penyusutan">0</td>
                                        <td id="0_pibk_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="1_pibk_keterangan">Tahun Ke-1</td>
                                        <td id="1_pibk_laba_set_pajak"></td>
                                        <td id="1_pibk_penyusutan"></td>
                                        <td id="1_pibk_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="2_pibk_keterangan">Tahun Ke-2</td>
                                        <td id="2_pibk_laba_set_pajak"></td>
                                        <td id="2_pibk_penyusutan"></td>
                                        <td id="2_pibk_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="3_pibk_keterangan">Tahun Ke-3</td>
                                        <td id="3_pibk_laba_set_pajak"></td>
                                        <td id="3_pibk_penyusutan"></td>
                                        <td id="3_pibk_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="4_pibk_keterangan">Tahun Ke-4</td>
                                        <td id="4_pibk_laba_set_pajak"></td>
                                        <td id="4_pibk_penyusutan"></td>
                                        <td id="4_pibk_aliran_kas_masuk"></td>
                                    </tr>
                                    <tr>
                                        <td id="5_pibk_keterangan">Tahun Ke-5</td>
                                        <td id="5_pibk_laba_set_pajak"></td>
                                        <td id="5_pibk_penyusutan"></td>
                                        <td id="5_pibk_aliran_kas_masuk"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Radio Pilihan Kriteria Investasi -->
                    <div class="col-md-10 mx-auto mt-4 p-4 rounded shadow-sm text-center">
                        <h5 class="text-primary mb-3">Apakah Anda akan menampilkan penilaian investasi dengan berbagai kriteria?</h5>
                        <p>Klik salah satu pilihan!</p>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="penilaian_investasi" id="penilaian_investasi_ya" value="ya" onclick="toggleTable(true)">
                            <label class="form-check-label fw-bold" for="penilaian_investasi_ya">Ya</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="penilaian_investasi" id="penilaian_investasi_tidak" value="tidak" onclick="toggleTable(false)">
                            <label class="form-check-label fw-bold" for="penilaian_investasi_tidak">Tidak</label>
                        </div>

                        <div class="table-responsive mt-3" id="investmentTable" style="display: none;">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>Average Rate of Return (ARR)</td>
                                        <td id="pibk_nilai_arr"></td>
                                        <td id="pibk_kesimpulan_arr"></td>
                                    </tr>
                                    <tr>
                                        <td>Payback Period (PP)</td>
                                        <td id="pibk_nilai_pp"></td>
                                        <td id="pibk_kesimpulan_pp"></td>
                                    </tr>
                                    <tr>
                                        <td>Internal Rate of Return (IRR)</td>
                                        <td id="pibk_nilai_irr"></td>
                                        <td id="pibk_kesimpulan_irr"></td>
                                    </tr>
                                    <tr>
                                        <td>Modified IRR (MIRR)</td>
                                        <td id="pibk_nilai_mirr"></td>
                                        <td id="pibk_kesimpulan_mirr"></td>
                                    </tr>
                                    <tr>
                                        <td>Net Present Value (NPV)</td>
                                        <td id="pibk_nilai_npv"></td>
                                        <td id="pibk_kesimpulan_npv"></td>
                                    </tr>
                                    <tr>
                                        <td>Profitability Index (PI)</td>
                                        <td id="pibk_nilai_pi"></td>
                                        <td id="pibk_kesimpulan_pi"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div> <!-- End of Tab Content -->
        </div>
    </div> <!-- End of Member Details -->
</div> <!-- End of Container -->

<script>
    function toggleTable(show) {
        const table = document.getElementById('investmentTable');
        table.style.display = show ? 'block' : 'none';
    }

    function formatNumber(input) {
        let value = input.value.replace(/\./g, '');
        value = value.replace(/\D/g, '');
        input.value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
    }

    function formatPembelianAktivaTetap(input) {
        formatNumber(input);
        document.getElementById('dfi_harga_perolehan').value = input.value;
        document.getElementById('pat_harga_perolehan').value = input.value;
        document.getElementById('pibk_harga_perolehan').value = input.value;
        document.getElementById('0_nilai_buku_aktiva').innerText = input.value;
    }

    // tandain
    function formatNilaiSisa(input) {
        formatNumber(input);
        document.getElementById('pat_nilai_sisa').value = input.value;
    }

    function updateInvestmentTotal() {
        const aktivaTetap = parseFloat(document.getElementById('pembelian_aktiva_tetap').value.replace(/\./g, '')) || 0;
        const modalKerja = parseFloat(document.getElementById('kebutuhan_modal_kerja').value.replace(/\./g, '')) || 0;

        // Calculate the sum
        const total = aktivaTetap + modalKerja;

        // Display formatted result in `aror_investasi`
        document.getElementById('aror_investasi').value = total.toLocaleString("id-ID");
        document.getElementById('mpp_investasi').value = total.toLocaleString("id-ID");
        document.getElementById('iror_investasi').value = total.toLocaleString("id-ID");
        document.getElementById('miror_investasi').value = total.toLocaleString("id-ID");
        document.getElementById('npv_investasi').value = total.toLocaleString("id-ID");
        document.getElementById('pindex_investasi').value = total.toLocaleString("id-ID");
        document.getElementById('pibk_investasi').value = total.toLocaleString("id-ID");
        document.getElementById('0_mpp_aliran_kas_masuk').innerText = total.toLocaleString("id-ID");
        document.getElementById('0_iror_aliran_kas_masuk').innerText = total.toLocaleString("id-ID");
        document.getElementById('0_miror_aliran_kas_masuk').innerText = total.toLocaleString("id-ID");
        document.getElementById('0_npv_aliran_kas_masuk').innerText = total.toLocaleString("id-ID");
        document.getElementById('0_pindex_aliran_kas_masuk').innerText = total.toLocaleString("id-ID");
        document.getElementById('0_pibk_aliran_kas_masuk').innerText = total.toLocaleString("id-ID");
        document.getElementById('investasi_awal').value = total.toLocaleString("id-ID");

        const totalAverage = total / 2;

        document.getElementById('rata_investasi').value = totalAverage.toLocaleString("id-ID");
    }

    function eat(input, year) {
        formatNumber(input);
        document.getElementById(`${year}_aror_laba_set_pajak`).innerText = input.value;
        document.getElementById(`${year}_mpp_laba_set_pajak`).innerText = input.value;
        document.getElementById(`${year}_iror_laba_set_pajak`).innerText = input.value;
        document.getElementById(`${year}_miror_laba_set_pajak`).innerText = input.value;
        document.getElementById(`${year}_npv_laba_set_pajak`).innerText = input.value;
        document.getElementById(`${year}_pindex_laba_set_pajak`).innerText = input.value;
        document.getElementById(`${year}_pibk_laba_set_pajak`).innerText = input.value;
    }

    function calculatePaybackPeriod(initialInvestment, cashFlows) {
        let cumulativeCashFlow = 0;
        let paybackPeriod = {
            tahun: 0,
            bulan: 0
        };

        for (let i = 0; i < cashFlows.length; i++) {
            cumulativeCashFlow += cashFlows[i];
            if (cumulativeCashFlow >= initialInvestment) {
                paybackPeriod.tahun = i;
                paybackPeriod.bulan = Math.round((initialInvestment - (cumulativeCashFlow - cashFlows[i])) / cashFlows[i] * 12); // Perhitungan bulan
                break;
            }
        }

        return paybackPeriod;
    }

    function calculateDepreciation() {
        const metode = document.getElementById('metode_penyusutan').value;
        const hargaPerolehan = parseFloat(document.getElementById('pat_harga_perolehan').value.replace(/\./g, ''));
        const nilaiSisa = 2000000000;

        if (metode === "garis_lurus" && !isNaN(hargaPerolehan) && !isNaN(nilaiSisa)) {
            const depresiasiTahunan = Math.round((hargaPerolehan - nilaiSisa) / 5);
            let totalEatValue = 0;

            // Loop untuk menghitung depresiasi, akumulasi penyusutan, dan nilai buku aktiva tiap tahun
            for (let tahun = 1; tahun <= 5; tahun++) {
                const eatValue = parseFloat(document.getElementById(`eat_${tahun}`).value.replace(/\./g, '')) || 0;
                totalEatValue += eatValue;

                // Aliran kas masuk
                const aliranKasMasuk = eatValue + depresiasiTahunan + (tahun === 5 ? nilaiSisa : 0);
                document.getElementById(`${tahun}_aror_aliran_kas_masuk`).innerText = aliranKasMasuk.toLocaleString("id-ID");
                document.getElementById(`${tahun}_mpp_aliran_kas_masuk`).innerText = aliranKasMasuk.toLocaleString("id-ID");
                document.getElementById(`${tahun}_iror_aliran_kas_masuk`).innerText = aliranKasMasuk.toLocaleString("id-ID");
                document.getElementById(`${tahun}_miror_aliran_kas_masuk`).innerText = aliranKasMasuk.toLocaleString("id-ID");
                document.getElementById(`${tahun}_npv_aliran_kas_masuk`).innerText = aliranKasMasuk.toLocaleString("id-ID");
                document.getElementById(`${tahun}_pindex_aliran_kas_masuk`).innerText = aliranKasMasuk.toLocaleString("id-ID");

                // Penyusutan dan akumulasi penyusutan
                const totalAkumulasiPenyusutan = depresiasiTahunan * tahun;
                const nilaiBukuAktiva = hargaPerolehan - totalAkumulasiPenyusutan;

                ["debet_penyusutan", "kredit_akm_penyusutan", "aror_penyusutan", "mpp_penyusutan", "iror_penyusutan", "miror_penyusutan", "npv_penyusutan", "pindex_penyusutan"].forEach(id =>
                    document.getElementById(`${tahun}_${id}`).innerText = depresiasiTahunan.toLocaleString("id-ID")
                );
                document.getElementById(`${tahun}_total_akm_penyusutan`).innerText = totalAkumulasiPenyusutan.toLocaleString("id-ID");
                document.getElementById(`${tahun}_nilai_buku_aktiva`).innerText = nilaiBukuAktiva.toLocaleString("id-ID");
            }

            // Rata-rata EAT
            const averageEatValue = totalEatValue / 5;
            document.getElementById("rata_laba_setelah_pajak").value = averageEatValue.toLocaleString("id-ID");

            // Investment Calculations
            const aktivaTetap = parseFloat(document.getElementById('pembelian_aktiva_tetap').value.replace(/\./g, '')) || 0;
            const modalKerja = parseFloat(document.getElementById('kebutuhan_modal_kerja').value.replace(/\./g, '')) || 0;
            const total = aktivaTetap + modalKerja;

            const calculateInvestment = (base, total) => ((averageEatValue / total) * 100).toFixed(2);
            const initialInvestment = calculateInvestment(averageEatValue, total);
            document.getElementById("arr_initial_investment").value = parseFloat(initialInvestment).toLocaleString("id-ID") + "%";

            const averageInvestment = calculateInvestment(averageEatValue, total / 2);
            document.getElementById('arr_average_investment').value = parseFloat(averageInvestment).toLocaleString("id-ID") + "%";

            const arr1 = 50;
            let kesimpulanInvestasi = '';
            kesimpulanInvestasi = (averageInvestment >= arr1) ? 'Investasi Layak Dijalankan' : 'Investasi Tidak Layak Dijalankan';

            document.getElementById('aror_kesimpulan_investasi').value = kesimpulanInvestasi;

            // Perhitungan Payback Period
            const aliranKasMasuk = []; // Aliran kas masuk untuk setiap tahun
            for (let tahun = 1; tahun <= 5; tahun++) {
                const eatValue = parseFloat(document.getElementById(`eat_${tahun}`).value.replace(/\./g, '')) || 0;
                aliranKasMasuk.push(eatValue + depresiasiTahunan + (tahun === 5 ? nilaiSisa : 0));
            }

            const investasiAwal = aktivaTetap + modalKerja;
            const paybackPeriod = calculatePaybackPeriod(investasiAwal, aliranKasMasuk);
            document.getElementById('periode_payback').value = `${paybackPeriod.tahun} Tahun ${paybackPeriod.bulan} Bulan`;

            const payback = 3;
            kesimpulanInvestasi = (paybackPeriod.tahun <= payback) ? 'Investasi Layak Dijalankan' : 'Investasi Tidak Layak Dijalankan';

            document.getElementById('mpp_kesimpulan_investasi').value = kesimpulanInvestasi;

            // Perhitungan IRR
            function calculateNPV(rate, cashFlows) {
                let npv = 0;
                for (let t = 0; t < cashFlows.length; t++) {
                    npv += cashFlows[t] / Math.pow(1 + rate, t);
                }
                return npv;
            }

            function calculateIRR(cashFlows, initialRate = 0.20, tolerance = 0.00001, maxIterations = 10000) {
                let rate = initialRate;
                let npv = calculateNPV(rate, cashFlows);
                let iterations = 0;

                // Menggunakan pendekatan iterasi yang lebih halus dengan meningkatkan jumlah iterasi
                while (Math.abs(npv) > tolerance && iterations < maxIterations) {
                    rate += (npv > 0) ? 0.00001 : -0.00001; // Mengurangi langkah perubahan rate untuk akurasi lebih tinggi
                    npv = calculateNPV(rate, cashFlows);
                    iterations++;
                }

                // Kembalikan hasil IRR
                return rate;
            }

            // Mengambil aliran kas (kas masuk untuk tiap tahun)
            const cashFlows = [-investasiAwal]; // Memasukkan investasi awal sebagai nilai negatif
            for (let tahun = 1; tahun <= 5; tahun++) {
                const aliranKasMasuk = parseFloat(document.getElementById(`${tahun}_iror_aliran_kas_masuk`).innerText.replace(/\./g, '')) || 0;
                cashFlows.push(aliranKasMasuk); // Menambahkan aliran kas masuk per tahun
            }

            // Hitung IRR
            const irr = calculateIRR(cashFlows);
            document.getElementById('irr').value = (irr * 100).toFixed(2) + "%"; // Menampilkan IRR dalam persen

            const sukuBunga = 20;

            kesimpulanInvestasi = ((irr * 100).toFixed(2) >= sukuBunga) ? 'Investasi Layak Dijalankan' : 'Investasi Tidak Layak Dijalankan';
            document.getElementById('iror_kesimpulan_investasi').value = kesimpulanInvestasi;

            // Perhitungan MIRR
            function calculateMIRR(cashFlows, financeRate, reinvestmentRate) {
                let pvNegatif = 0; // Nilai sekarang dari arus kas negatif
                let fvPositif = 0; // Nilai masa depan dari arus kas positif
                const n = cashFlows.length - 1; // Jumlah periode

                for (let t = 0; t < cashFlows.length; t++) {
                    if (cashFlows[t] < 0) {
                        // Hitung nilai sekarang (PV) untuk arus kas negatif
                        pvNegatif += cashFlows[t] / Math.pow(1 + financeRate, t);
                    } else {
                        // Hitung nilai masa depan (FV) untuk arus kas positif
                        fvPositif += cashFlows[t] * Math.pow(1 + reinvestmentRate, n - t);
                    }
                }

                // Rumus MIRR
                const mirr = Math.pow(fvPositif / -pvNegatif, 1 / n) - 1;
                return mirr;
            }

            // Finance rate dan reinvestment rate
            const financeRate = 0.20; // 20%
            const reinvestmentRate = 0.125; // 12.50%

            // Perhitungan MIRR menggunakan arus kas (cashFlows)
            const mirr = calculateMIRR(cashFlows, financeRate, reinvestmentRate);
            document.getElementById('miror_mirr').value = (mirr * 100).toFixed(2) + "%"; // Menampilkan MIRR dalam persen

            kesimpulanInvestasi = ((mirr * 100).toFixed(2) >= sukuBunga) ? 'Investasi Layak Dijalankan' : 'Investasi Tidak Layak Dijalankan';
            document.getElementById('miror_kesimpulan_investasi').value = kesimpulanInvestasi;

            function calculateNPV(rate, cashFlows) {
                let npv = 0;
                for (let t = 1; t <= cashFlows.length; t++) {
                    npv += cashFlows[t - 1] / Math.pow(1 + rate, t); // Memulai diskonto dari tahun ke-1
                }
                return npv;
            }

            // Tingkat diskonto (20%)
            const discountRate = 0.20;

            // Hitung NPV
            const npv = calculateNPV(discountRate, cashFlows);
            const npvRound = Math.round(npv);

            // Tampilkan hasil NPV
            document.getElementById('npv_npv').value = npvRound.toLocaleString("id-ID"); // Format hasil dalam Rupiah
            document.getElementById('pindex_npv').value = npvRound.toLocaleString("id-ID");

            // Menentukan kesimpulan investasi
            kesimpulanInvestasi = npv > 0 ? 'Investasi Layak Dijalankan' : 'Investasi Tidak Layak Dijalankan';
            document.getElementById('npv_kesimpulan_investasi').value = kesimpulanInvestasi;

            const pindex = (-investasiAwal - npvRound) / -investasiAwal;
            document.getElementById('pindex_pindex').value = pindex.toFixed(2);

            kesimpulanInvestasi = pindex > 0 ? 'Investasi Layak Dijalankan' : 'Investasi Tidak Layak Dijalankan';
            document.getElementById('pindex_kesimpulan_investasi').value = kesimpulanInvestasi;
        } else if (metode === "angka_tahun" && !isNaN(hargaPerolehan) && !isNaN(nilaiSisa)) {
            const depreciationFactors = [5, 4, 3, 2, 1];
            const totalDepreciableValue = hargaPerolehan - nilaiSisa;
            let accumulatedDepreciation = 0,
                bookValue = hargaPerolehan,
                totalEatValue = 0;

            // Loop untuk menghitung nilai depresiasi, akumulasi penyusutan, dan nilai buku aktiva tiap tahun
            depreciationFactors.forEach((factor, index) => {
                const tahun = index + 1;
                const depreciation = Math.round((factor / 15) * totalDepreciableValue);

                const eatValue = parseFloat(document.getElementById(`eat_${tahun}`).value.replace(/\./g, '')) || 0;
                totalEatValue += eatValue;

                const aliranKasMasuk = eatValue + depreciation + (tahun === 5 ? nilaiSisa : 0);
                document.getElementById(`${tahun}_aror_aliran_kas_masuk`).innerText = aliranKasMasuk.toLocaleString("id-ID");
                document.getElementById(`${tahun}_mpp_aliran_kas_masuk`).innerText = aliranKasMasuk.toLocaleString("id-ID");
                document.getElementById(`${tahun}_iror_aliran_kas_masuk`).innerText = aliranKasMasuk.toLocaleString("id-ID");
                document.getElementById(`${tahun}_miror_aliran_kas_masuk`).innerText = aliranKasMasuk.toLocaleString("id-ID");
                document.getElementById(`${tahun}_npv_aliran_kas_masuk`).innerText = aliranKasMasuk.toLocaleString("id-ID");
                document.getElementById(`${tahun}_pindex_aliran_kas_masuk`).innerText = aliranKasMasuk.toLocaleString("id-ID");

                // Menampilkan nilai depresiasi
                ["debet_penyusutan", "kredit_akm_penyusutan", "aror_penyusutan", "mpp_penyusutan", "iror_penyusutan", "miror_penyusutan", "npv_penyusutan", "pindex_penyusutan"].forEach(id =>
                    document.getElementById(`${tahun}_${id}`).innerText = depreciation.toLocaleString("id-ID")
                );

                accumulatedDepreciation += depreciation;
                document.getElementById(`${tahun}_total_akm_penyusutan`).innerText = accumulatedDepreciation.toLocaleString("id-ID");

                bookValue -= depreciation;
                document.getElementById(`${tahun}_nilai_buku_aktiva`).innerText = bookValue.toLocaleString("id-ID");
            });

            // Rata-rata EAT
            const averageEatValue = totalEatValue / 5;
            document.getElementById("rata_laba_setelah_pajak").value = averageEatValue.toLocaleString("id-ID");

            // Investment Calculations
            const aktivaTetap = parseFloat(document.getElementById('pembelian_aktiva_tetap').value.replace(/\./g, '')) || 0;
            const modalKerja = parseFloat(document.getElementById('kebutuhan_modal_kerja').value.replace(/\./g, '')) || 0;
            const total = aktivaTetap + modalKerja;

            const calculateInvestment = (averageEat, base) => ((averageEat / base) * 100).toFixed(2);
            const initialInvestment = calculateInvestment(averageEatValue, total);
            document.getElementById("arr_initial_investment").value = parseFloat(initialInvestment).toLocaleString("id-ID") + "%";

            const averageInvestment = calculateInvestment(averageEatValue, total / 2);
            document.getElementById('arr_average_investment').value = parseFloat(averageInvestment).toLocaleString("id-ID") + "%";

            const arr1 = 50;
            let kesimpulanInvestasi = '';

            kesimpulanInvestasi = (averageInvestment >= arr1) ? 'Investasi Layak Dijalankan' : 'Investasi Tidak Layak Dijalankan';

            document.getElementById('aror_kesimpulan_investasi').value = kesimpulanInvestasi;

            // Perhitungan Payback Period
            const aliranKasMasuk = []; // Aliran kas masuk untuk setiap tahun
            for (let tahun = 1; tahun <= 5; tahun++) {
                const eatValue = parseFloat(document.getElementById(`eat_${tahun}`).value.replace(/\./g, '')) || 0;
                const depreciation = Math.round((depreciationFactors[tahun - 1] / 15) * totalDepreciableValue);
                aliranKasMasuk.push(eatValue + depreciation + (tahun === 5 ? nilaiSisa : 0));
            }

            const investasiAwal = aktivaTetap + modalKerja;
            const paybackPeriod = calculatePaybackPeriod(investasiAwal, aliranKasMasuk);
            document.getElementById('periode_payback').value = `${paybackPeriod.tahun} Tahun ${paybackPeriod.bulan} Bulan`;

            const payback = 3;

            kesimpulanInvestasi = (paybackPeriod.tahun <= payback) ? 'Investasi Layak Dijalankan' : 'Investasi Tidak Layak Dijalankan';

            document.getElementById('mpp_kesimpulan_investasi').value = kesimpulanInvestasi;

            // Perhitungan IRR
            function calculateNPV(rate, cashFlows) {
                let npv = 0;
                for (let t = 0; t < cashFlows.length; t++) {
                    npv += cashFlows[t] / Math.pow(1 + rate, t);
                }
                return npv;
            }

            function calculateIRR(cashFlows, initialRate = 0.20, tolerance = 0.00001, maxIterations = 10000) {
                let rate = initialRate;
                let npv = calculateNPV(rate, cashFlows);
                let iterations = 0;

                // Menggunakan pendekatan iterasi yang lebih halus dengan meningkatkan jumlah iterasi
                while (Math.abs(npv) > tolerance && iterations < maxIterations) {
                    rate += (npv > 0) ? 0.00001 : -0.00001; // Mengurangi langkah perubahan rate untuk akurasi lebih tinggi
                    npv = calculateNPV(rate, cashFlows);
                    iterations++;
                }

                // Kembalikan hasil IRR
                return rate;
            }

            // Mengambil aliran kas (kas masuk untuk tiap tahun)
            const cashFlows = [-investasiAwal]; // Memasukkan investasi awal sebagai nilai negatif
            for (let tahun = 1; tahun <= 5; tahun++) {
                const aliranKasMasuk = parseFloat(document.getElementById(`${tahun}_iror_aliran_kas_masuk`).innerText.replace(/\./g, '')) || 0;
                cashFlows.push(aliranKasMasuk); // Menambahkan aliran kas masuk per tahun
            }

            // Hitung IRR
            const irr = calculateIRR(cashFlows);
            document.getElementById('irr').value = (irr * 100).toFixed(2) + "%"; // Menampilkan IRR dalam persen

            const sukuBunga = 20;

            kesimpulanInvestasi = ((irr * 100).toFixed(2) >= sukuBunga) ? 'Investasi Layak Dijalankan' : 'Investasi Tidak Layak Dijalankan';
            document.getElementById('iror_kesimpulan_investasi').value = kesimpulanInvestasi;

            // Perhitungan MIRR
            function calculateMIRR(cashFlows, financeRate, reinvestmentRate) {
                let pvNegatif = 0; // Nilai sekarang dari arus kas negatif
                let fvPositif = 0; // Nilai masa depan dari arus kas positif
                const n = cashFlows.length - 1; // Jumlah periode

                for (let t = 0; t < cashFlows.length; t++) {
                    if (cashFlows[t] < 0) {
                        // Hitung nilai sekarang (PV) untuk arus kas negatif
                        pvNegatif += cashFlows[t] / Math.pow(1 + financeRate, t);
                    } else {
                        // Hitung nilai masa depan (FV) untuk arus kas positif
                        fvPositif += cashFlows[t] * Math.pow(1 + reinvestmentRate, n - t);
                    }
                }

                // Rumus MIRR
                const mirr = Math.pow(fvPositif / -pvNegatif, 1 / n) - 1;
                return mirr;
            }

            // Finance rate dan reinvestment rate
            const financeRate = 0.20; // 20%
            const reinvestmentRate = 0.125; // 12.50%

            // Perhitungan MIRR menggunakan arus kas (cashFlows)
            const mirr = calculateMIRR(cashFlows, financeRate, reinvestmentRate);
            document.getElementById('miror_mirr').value = (mirr * 100).toFixed(2) + "%"; // Menampilkan MIRR dalam persen

            kesimpulanInvestasi = ((mirr * 100).toFixed(2) >= sukuBunga) ? 'Investasi Layak Dijalankan' : 'Investasi Tidak Layak Dijalankan';
            document.getElementById('miror_kesimpulan_investasi').value = kesimpulanInvestasi;

            function calculateNPV(rate, cashFlows) {
                let npv = 0;
                for (let t = 1; t <= cashFlows.length; t++) {
                    npv += cashFlows[t - 1] / Math.pow(1 + rate, t); // Memulai diskonto dari tahun ke-1
                }
                return npv;
            }

            // Tingkat diskonto (20%)
            const discountRate = 0.20;

            // Hitung NPV
            const npv = calculateNPV(discountRate, cashFlows);
            const npvRound = Math.round(npv);

            // Tampilkan hasil NPV
            document.getElementById('npv_npv').value = npvRound.toLocaleString("id-ID"); // Format hasil dalam Rupiah
            document.getElementById('pindex_npv').value = npvRound.toLocaleString("id-ID");

            // Menentukan kesimpulan investasi
            kesimpulanInvestasi = npv > 0 ? 'Investasi Layak Dijalankan' : 'Investasi Tidak Layak Dijalankan';
            document.getElementById('npv_kesimpulan_investasi').value = kesimpulanInvestasi;

            const pindex = (-investasiAwal - npvRound) / -investasiAwal;
            document.getElementById('pindex_pindex').value = pindex.toFixed(2);

            kesimpulanInvestasi = pindex > 0 ? 'Investasi Layak Dijalankan' : 'Investasi Tidak Layak Dijalankan';
            document.getElementById('pindex_kesimpulan_investasi').value = kesimpulanInvestasi;
        } else if (metode === "saldo_menurun" && !isNaN(hargaPerolehan) && !isNaN(nilaiSisa)) {
            const depreciationRate = 0.369;
            const years = 5;
            let accumulatedDepreciation = 0,
                bookValue = hargaPerolehan,
                totalEatValue = 0,
                totalDepreciableValue = hargaPerolehan - nilaiSisa, // Ensure this is calculated
                aliranKasMasuk = []; // Declare once for both depreciation and payback period

            for (let i = 1; i <= years; i++) {
                const depreciation = Math.round(bookValue * depreciationRate);

                const eatValue = parseFloat(document.getElementById(`eat_${i}`).value.replace(/\./g, '')) || 0;
                totalEatValue += eatValue;
                const aliranKasMasukYear = eatValue + depreciation + (i === years ? nilaiSisa : 0);
                aliranKasMasuk.push(aliranKasMasukYear);

                // Displaying values
                document.getElementById(`${i}_aror_aliran_kas_masuk`).innerText = aliranKasMasukYear.toLocaleString("id-ID");
                document.getElementById(`${i}_mpp_aliran_kas_masuk`).innerText = aliranKasMasukYear.toLocaleString("id-ID");
                document.getElementById(`${i}_iror_aliran_kas_masuk`).innerText = aliranKasMasukYear.toLocaleString("id-ID");
                document.getElementById(`${i}_miror_aliran_kas_masuk`).innerText = aliranKasMasukYear.toLocaleString("id-ID");
                document.getElementById(`${i}_npv_aliran_kas_masuk`).innerText = aliranKasMasukYear.toLocaleString("id-ID");
                document.getElementById(`${i}_pindex_aliran_kas_masuk`).innerText = aliranKasMasukYear.toLocaleString("id-ID");

                ["debet_penyusutan", "kredit_akm_penyusutan", "aror_penyusutan", "mpp_penyusutan", "iror_penyusutan", "miror_penyusutan", "npv_penyusutan", "pindex_penyusutan"].forEach(id =>
                    document.getElementById(`${i}_${id}`).innerText = depreciation.toLocaleString("id-ID")
                );

                accumulatedDepreciation += depreciation;
                document.getElementById(`${i}_total_akm_penyusutan`).innerText = accumulatedDepreciation.toLocaleString("id-ID");

                bookValue -= depreciation;
                document.getElementById(`${i}_nilai_buku_aktiva`).innerText = bookValue.toLocaleString("id-ID");
            }

            // Calculate average EAT
            const averageEatValue = totalEatValue / years;
            document.getElementById("rata_laba_setelah_pajak").value = averageEatValue.toLocaleString("id-ID");

            // Calculate initial and average investment
            const aktivaTetap = parseFloat(document.getElementById('pembelian_aktiva_tetap').value.replace(/\./g, '')) || 0;
            const modalKerja = parseFloat(document.getElementById('kebutuhan_modal_kerja').value.replace(/\./g, '')) || 0;
            const total = aktivaTetap + modalKerja;

            const calculateInvestment = (averageEat, base) => ((averageEat / base) * 100).toFixed(2);
            const initialInvestment = calculateInvestment(averageEatValue, total);
            document.getElementById("arr_initial_investment").value = parseFloat(initialInvestment).toLocaleString("id-ID") + "%";

            const averageInvestment = calculateInvestment(averageEatValue, total / 2);
            document.getElementById('arr_average_investment').value = parseFloat(averageInvestment).toLocaleString("id-ID") + "%";

            // Investment conclusion
            const arr1 = 50;
            let kesimpulanInvestasi = '';

            kesimpulanInvestasi = (averageInvestment >= arr1) ? 'Investasi Layak Dijalankan' : 'Investasi Tidak Layak Dijalankan';

            document.getElementById('aror_kesimpulan_investasi').value = kesimpulanInvestasi;

            // Calculate Payback Period
            const paybackPeriod = calculatePaybackPeriod(aktivaTetap + modalKerja, aliranKasMasuk);
            document.getElementById('periode_payback').value = `${paybackPeriod.tahun} Tahun ${paybackPeriod.bulan} Bulan`;

            const payback = 3;

            kesimpulanInvestasi = (paybackPeriod.tahun <= payback) ? 'Investasi Layak Dijalankan' : 'Investasi Tidak Layak Dijalankan';

            document.getElementById('mpp_kesimpulan_investasi').value = kesimpulanInvestasi;

            // Perhitungan IRR
            function calculateNPV(rate, cashFlows) {
                let npv = 0;
                for (let t = 0; t < cashFlows.length; t++) {
                    npv += cashFlows[t] / Math.pow(1 + rate, t);
                }
                return npv;
            }

            function calculateIRRNewtonRaphson(cashFlows, initialRate = 0.1, maxIterations = 1000, tolerance = 1e-6) {
                let rate = initialRate;
                for (let i = 0; i < maxIterations; i++) {
                    let npv = 0;
                    let derivative = 0;
                    for (let t = 0; t < cashFlows.length; t++) {
                        npv += cashFlows[t] / Math.pow(1 + rate, t);
                        derivative -= t * cashFlows[t] / Math.pow(1 + rate, t + 1);
                    }
                    const newRate = rate - npv / derivative;
                    if (Math.abs(newRate - rate) < tolerance) return newRate;
                    rate = newRate;
                }
                return rate; // Mengembalikan hasil jika tidak konvergen dalam iterasi maksimal
            }

            // Mengambil aliran kas (kas masuk untuk tiap tahun)
            const cashFlows = [-total]; // Memasukkan investasi awal sebagai nilai negatif
            for (let tahun = 1; tahun <= 5; tahun++) {
                const aliranKasMasuk = parseFloat(document.getElementById(`${tahun}_iror_aliran_kas_masuk`).innerText.replace(/\./g, '')) || 0;
                cashFlows.push(aliranKasMasuk); // Menambahkan aliran kas masuk per tahun
            }

            // Hitung IRR
            const irr = calculateIRRNewtonRaphson(cashFlows);
            document.getElementById('irr').value = (irr * 100).toFixed(2) + "%"; // Menampilkan IRR dalam persen

            const sukuBunga = 20;

            kesimpulanInvestasi = ((irr * 100).toFixed(2) >= sukuBunga) ? 'Investasi Layak Dijalankan' : 'Investasi Tidak Layak Dijalankan';
            document.getElementById('iror_kesimpulan_investasi').value = kesimpulanInvestasi;

            // Perhitungan MIRR
            function calculateMIRR(cashFlows, financeRate, reinvestmentRate) {
                let pvNegatif = 0; // Nilai sekarang dari arus kas negatif
                let fvPositif = 0; // Nilai masa depan dari arus kas positif
                const n = cashFlows.length - 1; // Jumlah periode

                for (let t = 0; t < cashFlows.length; t++) {
                    if (cashFlows[t] < 0) {
                        // Hitung nilai sekarang (PV) untuk arus kas negatif
                        pvNegatif += cashFlows[t] / Math.pow(1 + financeRate, t);
                    } else {
                        // Hitung nilai masa depan (FV) untuk arus kas positif
                        fvPositif += cashFlows[t] * Math.pow(1 + reinvestmentRate, n - t);
                    }
                }

                // Rumus MIRR
                const mirr = Math.pow(fvPositif / -pvNegatif, 1 / n) - 1;
                return mirr;
            }

            // Finance rate dan reinvestment rate
            const financeRate = 0.20; // 20%
            const reinvestmentRate = 0.125; // 12.50%

            // Perhitungan MIRR menggunakan arus kas (cashFlows)
            const mirr = calculateMIRR(cashFlows, financeRate, reinvestmentRate);
            document.getElementById('miror_mirr').value = (mirr * 100).toFixed(2) + "%"; // Menampilkan MIRR dalam persen

            kesimpulanInvestasi = ((mirr * 100).toFixed(2) >= sukuBunga) ? 'Investasi Layak Dijalankan' : 'Investasi Tidak Layak Dijalankan';
            document.getElementById('miror_kesimpulan_investasi').value = kesimpulanInvestasi;

            function calculateNPV(rate, cashFlows) {
                let npv = 0;
                for (let t = 1; t <= cashFlows.length; t++) {
                    npv += cashFlows[t - 1] / Math.pow(1 + rate, t); // Memulai diskonto dari tahun ke-1
                }
                return npv;
            }

            // Tingkat diskonto (20%)
            const discountRate = 0.20;

            // Hitung NPV
            const npv = calculateNPV(discountRate, cashFlows);
            const npvRound = Math.round(npv);

            // Tampilkan hasil NPV
            document.getElementById('npv_npv').value = npvRound.toLocaleString("id-ID"); // Format hasil dalam Rupiah
            document.getElementById('pindex_npv').value = npvRound.toLocaleString("id-ID");

            // Menentukan kesimpulan investasi
            kesimpulanInvestasi = npv > 0 ? 'Investasi Layak Dijalankan' : 'Investasi Tidak Layak Dijalankan';
            document.getElementById('npv_kesimpulan_investasi').value = kesimpulanInvestasi;

            const pindex = (-total - npvRound) / -total;
            document.getElementById('pindex_pindex').value = pindex.toFixed(2);

            kesimpulanInvestasi = pindex > 0 ? 'Investasi Layak Dijalankan' : 'Investasi Tidak Layak Dijalankan';
            document.getElementById('pindex_kesimpulan_investasi').value = kesimpulanInvestasi;
        }
    }

    function calculateDepreciation2() {
        const metode = document.getElementById('pibk_metode_penyusutan').value;
        const hargaPerolehan = parseFloat(document.getElementById('pat_harga_perolehan').value.replace(/\./g, ''));
        const nilaiSisa = 2000000000;

        if (metode === "garis_lurus" && !isNaN(hargaPerolehan) && !isNaN(nilaiSisa)) {
            const depresiasiTahunan = Math.round((hargaPerolehan - nilaiSisa) / 5);
            let totalEatValue = 0;

            // Loop untuk menghitung depresiasi, akumulasi penyusutan, dan nilai buku aktiva tiap tahun
            for (let tahun = 1; tahun <= 5; tahun++) {
                const eatValue = parseFloat(document.getElementById(`eat_${tahun}`).value.replace(/\./g, '')) || 0;
                totalEatValue += eatValue;

                // Aliran kas masuk
                const aliranKasMasuk = eatValue + depresiasiTahunan + (tahun === 5 ? nilaiSisa : 0);
                document.getElementById(`${tahun}_pibk_aliran_kas_masuk`).innerText = aliranKasMasuk.toLocaleString("id-ID");

                // Penyusutan dan akumulasi penyusutan
                const totalAkumulasiPenyusutan = depresiasiTahunan * tahun;
                const nilaiBukuAktiva = hargaPerolehan - totalAkumulasiPenyusutan;

                ["pibk_penyusutan"].forEach(id =>
                    document.getElementById(`${tahun}_${id}`).innerText = depresiasiTahunan.toLocaleString("id-ID")
                );
                document.getElementById(`${tahun}_total_akm_penyusutan`).innerText = totalAkumulasiPenyusutan.toLocaleString("id-ID");
                document.getElementById(`${tahun}_nilai_buku_aktiva`).innerText = nilaiBukuAktiva.toLocaleString("id-ID");
            }

            // Rata-rata EAT
            const averageEatValue = totalEatValue / 5;
            document.getElementById("rata_laba_setelah_pajak").value = averageEatValue.toLocaleString("id-ID");

            // Investment Calculations
            const aktivaTetap = parseFloat(document.getElementById('pembelian_aktiva_tetap').value.replace(/\./g, '')) || 0;
            const modalKerja = parseFloat(document.getElementById('kebutuhan_modal_kerja').value.replace(/\./g, '')) || 0;
            const total = aktivaTetap + modalKerja;

            const calculateInvestment = (base, total) => ((averageEatValue / total) * 100).toFixed(2);
            const initialInvestment = calculateInvestment(averageEatValue, total);
            document.getElementById("arr_initial_investment").value = parseFloat(initialInvestment).toLocaleString("id-ID") + "%";

            const averageInvestment = calculateInvestment(averageEatValue, total / 2);
            document.getElementById('pibk_nilai_arr').innerText = parseFloat(averageInvestment).toLocaleString("id-ID") + "%";

            const arr1 = 45;
            let kesimpulanInvestasi = '';
            kesimpulanInvestasi = (averageInvestment >= arr1) ? 'LAYAK' : 'TIDAK LAYAK';

            document.getElementById('pibk_kesimpulan_arr').innerText = kesimpulanInvestasi;

            // Perhitungan Payback Period
            const aliranKasMasuk = []; // Aliran kas masuk untuk setiap tahun
            for (let tahun = 1; tahun <= 5; tahun++) {
                const eatValue = parseFloat(document.getElementById(`eat_${tahun}`).value.replace(/\./g, '')) || 0;
                aliranKasMasuk.push(eatValue + depresiasiTahunan + (tahun === 5 ? nilaiSisa : 0));
            }

            const investasiAwal = aktivaTetap + modalKerja;
            const paybackPeriod = calculatePaybackPeriod(investasiAwal, aliranKasMasuk);
            document.getElementById('pibk_nilai_pp').innerText = `${paybackPeriod.tahun} Tahun ${paybackPeriod.bulan} Bulan`;

            const payback = 3;
            kesimpulanInvestasi = (paybackPeriod.tahun <= payback) ? 'LAYAK' : 'TIDAK LAYAK';

            document.getElementById('pibk_kesimpulan_pp').innerText = kesimpulanInvestasi;

            // Perhitungan IRR
            function calculateNPV(rate, cashFlows) {
                let npv = 0;
                for (let t = 0; t < cashFlows.length; t++) {
                    npv += cashFlows[t] / Math.pow(1 + rate, t);
                }
                return npv;
            }

            function calculateIRR(cashFlows, initialRate = 0.20, tolerance = 0.00001, maxIterations = 10000) {
                let rate = initialRate;
                let npv = calculateNPV(rate, cashFlows);
                let iterations = 0;

                // Menggunakan pendekatan iterasi yang lebih halus dengan meningkatkan jumlah iterasi
                while (Math.abs(npv) > tolerance && iterations < maxIterations) {
                    rate += (npv > 0) ? 0.00001 : -0.00001; // Mengurangi langkah perubahan rate untuk akurasi lebih tinggi
                    npv = calculateNPV(rate, cashFlows);
                    iterations++;
                }

                // Kembalikan hasil IRR
                return rate;
            }

            // Mengambil aliran kas (kas masuk untuk tiap tahun)
            const cashFlows = [-investasiAwal]; // Memasukkan investasi awal sebagai nilai negatif
            for (let tahun = 1; tahun <= 5; tahun++) {
                const aliranKasMasuk = parseFloat(document.getElementById(`${tahun}_pibk_aliran_kas_masuk`).innerText.replace(/\./g, '')) || 0;
                cashFlows.push(aliranKasMasuk); // Menambahkan aliran kas masuk per tahun
            }

            // Hitung IRR
            const irr = calculateIRR(cashFlows);
            document.getElementById('pibk_nilai_irr').innerText = (irr * 100).toFixed(2) + "%"; // Menampilkan IRR dalam persen

            const sukuBunga = 20;

            kesimpulanInvestasi = ((irr * 100).toFixed(2) >= sukuBunga) ? 'LAYAK' : 'TIDAK LAYAK';
            document.getElementById('pibk_kesimpulan_irr').innerText = kesimpulanInvestasi;

            // Perhitungan MIRR
            function calculateMIRR(cashFlows, financeRate, reinvestmentRate) {
                let pvNegatif = 0; // Nilai sekarang dari arus kas negatif
                let fvPositif = 0; // Nilai masa depan dari arus kas positif
                const n = cashFlows.length - 1; // Jumlah periode

                for (let t = 0; t < cashFlows.length; t++) {
                    if (cashFlows[t] < 0) {
                        // Hitung nilai sekarang (PV) untuk arus kas negatif
                        pvNegatif += cashFlows[t] / Math.pow(1 + financeRate, t);
                    } else {
                        // Hitung nilai masa depan (FV) untuk arus kas positif
                        fvPositif += cashFlows[t] * Math.pow(1 + reinvestmentRate, n - t);
                    }
                }

                // Rumus MIRR
                const mirr = Math.pow(fvPositif / -pvNegatif, 1 / n) - 1;
                return mirr;
            }

            // Finance rate dan reinvestment rate
            const financeRate = 0.20; // 20%
            const reinvestmentRate = 0.125; // 12.50%

            // Perhitungan MIRR menggunakan arus kas (cashFlows)
            const mirr = calculateMIRR(cashFlows, financeRate, reinvestmentRate);
            document.getElementById('pibk_nilai_mirr').innerText = (mirr * 100).toFixed(2) + "%"; // Menampilkan MIRR dalam persen

            kesimpulanInvestasi = ((mirr * 100).toFixed(2) >= sukuBunga) ? 'LAYAK' : 'TIDAK LAYAK';
            document.getElementById('pibk_kesimpulan_mirr').innerText = kesimpulanInvestasi;

            function calculateNPV(rate, cashFlows) {
                let npv = 0;
                for (let t = 1; t <= cashFlows.length; t++) {
                    npv += cashFlows[t - 1] / Math.pow(1 + rate, t); // Memulai diskonto dari tahun ke-1
                }
                return npv;
            }

            // Tingkat diskonto (20%)
            const discountRate = 0.20;

            // Hitung NPV
            const npv = calculateNPV(discountRate, cashFlows);
            const npvRound = Math.round(npv);

            // Tampilkan hasil NPV
            document.getElementById('pibk_nilai_npv').innerText = npvRound.toLocaleString("id-ID");

            // Menentukan kesimpulan investasi
            kesimpulanInvestasi = npv > 0 ? 'LAYAK' : 'TIDAK LAYAK';
            document.getElementById('pibk_kesimpulan_npv').innerText = kesimpulanInvestasi;

            const pindex = (-investasiAwal - npvRound) / -investasiAwal;
            document.getElementById('pibk_nilai_pi').innerText = pindex.toFixed(2);

            kesimpulanInvestasi = pindex > 0 ? 'LAYAK' : 'TIDAK LAYAK';
            document.getElementById('pibk_kesimpulan_pi').innerText = kesimpulanInvestasi;
        } else if (metode === "angka_tahun" && !isNaN(hargaPerolehan) && !isNaN(nilaiSisa)) {
            const depreciationFactors = [5, 4, 3, 2, 1];
            const totalDepreciableValue = hargaPerolehan - nilaiSisa;
            let accumulatedDepreciation = 0,
                bookValue = hargaPerolehan,
                totalEatValue = 0;

            // Loop untuk menghitung nilai depresiasi, akumulasi penyusutan, dan nilai buku aktiva tiap tahun
            depreciationFactors.forEach((factor, index) => {
                const tahun = index + 1;
                const depreciation = Math.round((factor / 15) * totalDepreciableValue);

                const eatValue = parseFloat(document.getElementById(`eat_${tahun}`).value.replace(/\./g, '')) || 0;
                totalEatValue += eatValue;

                const aliranKasMasuk = eatValue + depreciation + (tahun === 5 ? nilaiSisa : 0);
                document.getElementById(`${tahun}_pibk_aliran_kas_masuk`).innerText = aliranKasMasuk.toLocaleString("id-ID");

                // Menampilkan nilai depresiasi
                ["pibk_penyusutan"].forEach(id =>
                    document.getElementById(`${tahun}_${id}`).innerText = depreciation.toLocaleString("id-ID")
                );

                accumulatedDepreciation += depreciation;
                document.getElementById(`${tahun}_total_akm_penyusutan`).innerText = accumulatedDepreciation.toLocaleString("id-ID");

                bookValue -= depreciation;
                document.getElementById(`${tahun}_nilai_buku_aktiva`).innerText = bookValue.toLocaleString("id-ID");
            });

            // Rata-rata EAT
            const averageEatValue = totalEatValue / 5;
            document.getElementById("rata_laba_setelah_pajak").value = averageEatValue.toLocaleString("id-ID");

            // Investment Calculations
            const aktivaTetap = parseFloat(document.getElementById('pembelian_aktiva_tetap').value.replace(/\./g, '')) || 0;
            const modalKerja = parseFloat(document.getElementById('kebutuhan_modal_kerja').value.replace(/\./g, '')) || 0;
            const total = aktivaTetap + modalKerja;

            const calculateInvestment = (averageEat, base) => ((averageEat / base) * 100).toFixed(2);
            const initialInvestment = calculateInvestment(averageEatValue, total);
            document.getElementById("arr_initial_investment").value = parseFloat(initialInvestment).toLocaleString("id-ID") + "%";

            const averageInvestment = calculateInvestment(averageEatValue, total / 2);
            document.getElementById('pibk_nilai_arr').innerText = parseFloat(averageInvestment).toLocaleString("id-ID") + "%";

            const arr1 = 45;
            let kesimpulanInvestasi = '';

            kesimpulanInvestasi = (averageInvestment >= arr1) ? 'LAYAK' : 'TIDAK LAYAK';

            document.getElementById('pibk_kesimpulan_arr').innerText = kesimpulanInvestasi;

            // Perhitungan Payback Period
            const aliranKasMasuk = []; // Aliran kas masuk untuk setiap tahun
            for (let tahun = 1; tahun <= 5; tahun++) {
                const eatValue = parseFloat(document.getElementById(`eat_${tahun}`).value.replace(/\./g, '')) || 0;
                const depreciation = Math.round((depreciationFactors[tahun - 1] / 15) * totalDepreciableValue);
                aliranKasMasuk.push(eatValue + depreciation + (tahun === 5 ? nilaiSisa : 0));
            }

            const investasiAwal = aktivaTetap + modalKerja;
            const paybackPeriod = calculatePaybackPeriod(investasiAwal, aliranKasMasuk);
            document.getElementById('pibk_nilai_pp').innerText = `${paybackPeriod.tahun} Tahun ${paybackPeriod.bulan} Bulan`;

            const payback = 3;

            kesimpulanInvestasi = (paybackPeriod.tahun <= payback) ? 'LAYAK' : 'TIDAK LAYAK';

            document.getElementById('pibk_kesimpulan_pp').innerText = kesimpulanInvestasi;

            // Perhitungan IRR
            function calculateNPV(rate, cashFlows) {
                let npv = 0;
                for (let t = 0; t < cashFlows.length; t++) {
                    npv += cashFlows[t] / Math.pow(1 + rate, t);
                }
                return npv;
            }

            function calculateIRR(cashFlows, initialRate = 0.20, tolerance = 0.00001, maxIterations = 10000) {
                let rate = initialRate;
                let npv = calculateNPV(rate, cashFlows);
                let iterations = 0;

                // Menggunakan pendekatan iterasi yang lebih halus dengan meningkatkan jumlah iterasi
                while (Math.abs(npv) > tolerance && iterations < maxIterations) {
                    rate += (npv > 0) ? 0.00001 : -0.00001; // Mengurangi langkah perubahan rate untuk akurasi lebih tinggi
                    npv = calculateNPV(rate, cashFlows);
                    iterations++;
                }

                // Kembalikan hasil IRR
                return rate;
            }

            // Mengambil aliran kas (kas masuk untuk tiap tahun)
            const cashFlows = [-investasiAwal]; // Memasukkan investasi awal sebagai nilai negatif
            for (let tahun = 1; tahun <= 5; tahun++) {
                const aliranKasMasuk = parseFloat(document.getElementById(`${tahun}_pibk_aliran_kas_masuk`).innerText.replace(/\./g, '')) || 0;
                cashFlows.push(aliranKasMasuk); // Menambahkan aliran kas masuk per tahun
            }

            // Hitung IRR
            const irr = calculateIRR(cashFlows);
            document.getElementById('pibk_nilai_irr').innerText = (irr * 100).toFixed(2) + "%"; // Menampilkan IRR dalam persen

            const sukuBunga = 20;

            kesimpulanInvestasi = ((irr * 100).toFixed(2) >= sukuBunga) ? 'LAYAK' : 'TIDAK LAYAK';
            document.getElementById('pibk_kesimpulan_irr').innerText = kesimpulanInvestasi;

            // Perhitungan MIRR
            function calculateMIRR(cashFlows, financeRate, reinvestmentRate) {
                let pvNegatif = 0; // Nilai sekarang dari arus kas negatif
                let fvPositif = 0; // Nilai masa depan dari arus kas positif
                const n = cashFlows.length - 1; // Jumlah periode

                for (let t = 0; t < cashFlows.length; t++) {
                    if (cashFlows[t] < 0) {
                        // Hitung nilai sekarang (PV) untuk arus kas negatif
                        pvNegatif += cashFlows[t] / Math.pow(1 + financeRate, t);
                    } else {
                        // Hitung nilai masa depan (FV) untuk arus kas positif
                        fvPositif += cashFlows[t] * Math.pow(1 + reinvestmentRate, n - t);
                    }
                }

                // Rumus MIRR
                const mirr = Math.pow(fvPositif / -pvNegatif, 1 / n) - 1;
                return mirr;
            }

            // Finance rate dan reinvestment rate
            const financeRate = 0.20; // 20%
            const reinvestmentRate = 0.125; // 12.50%

            // Perhitungan MIRR menggunakan arus kas (cashFlows)
            const mirr = calculateMIRR(cashFlows, financeRate, reinvestmentRate);
            document.getElementById('pibk_nilai_mirr').innerText = (mirr * 100).toFixed(2) + "%"; // Menampilkan MIRR dalam persen

            kesimpulanInvestasi = ((mirr * 100).toFixed(2) >= sukuBunga) ? 'LAYAK' : 'TIDAK LAYAK';
            document.getElementById('pibk_kesimpulan_mirr').innerText = kesimpulanInvestasi;

            function calculateNPV(rate, cashFlows) {
                let npv = 0;
                for (let t = 1; t <= cashFlows.length; t++) {
                    npv += cashFlows[t - 1] / Math.pow(1 + rate, t); // Memulai diskonto dari tahun ke-1
                }
                return npv;
            }

            // Tingkat diskonto (20%)
            const discountRate = 0.20;

            // Hitung NPV
            const npv = calculateNPV(discountRate, cashFlows);
            const npvRound = Math.round(npv);

            // Tampilkan hasil NPV
            document.getElementById('pibk_nilai_npv').innerText = npvRound.toLocaleString("id-ID");

            // Menentukan kesimpulan investasi
            kesimpulanInvestasi = npv > 0 ? 'LAYAK' : 'TIDAK LAYAK';
            document.getElementById('pibk_kesimpulan_npv').innerText = kesimpulanInvestasi;

            const pindex = (-investasiAwal - npvRound) / -investasiAwal;
            document.getElementById('pibk_nilai_pi').innerText = pindex.toFixed(2);

            kesimpulanInvestasi = pindex > 0 ? 'LAYAK' : 'TIDAK LAYAK';
            document.getElementById('pibk_kesimpulan_pi').innerText = kesimpulanInvestasi;
        } else if (metode === "saldo_menurun" && !isNaN(hargaPerolehan) && !isNaN(nilaiSisa)) {
            const depreciationRate = 0.369;
            const years = 5;
            let accumulatedDepreciation = 0,
                bookValue = hargaPerolehan,
                totalEatValue = 0,
                totalDepreciableValue = hargaPerolehan - nilaiSisa, // Ensure this is calculated
                aliranKasMasuk = []; // Declare once for both depreciation and payback period

            for (let i = 1; i <= years; i++) {
                const depreciation = Math.round(bookValue * depreciationRate);

                const eatValue = parseFloat(document.getElementById(`eat_${i}`).value.replace(/\./g, '')) || 0;
                totalEatValue += eatValue;
                const aliranKasMasukYear = eatValue + depreciation + (i === years ? nilaiSisa : 0);
                aliranKasMasuk.push(aliranKasMasukYear);

                // Displaying values
                document.getElementById(`${i}_pibk_aliran_kas_masuk`).innerText = aliranKasMasukYear.toLocaleString("id-ID");

                ["pibk_penyusutan"].forEach(id =>
                    document.getElementById(`${i}_${id}`).innerText = depreciation.toLocaleString("id-ID")
                );

                accumulatedDepreciation += depreciation;
                document.getElementById(`${i}_total_akm_penyusutan`).innerText = accumulatedDepreciation.toLocaleString("id-ID");

                bookValue -= depreciation;
                document.getElementById(`${i}_nilai_buku_aktiva`).innerText = bookValue.toLocaleString("id-ID");
            }

            // Calculate average EAT
            const averageEatValue = totalEatValue / years;
            document.getElementById("rata_laba_setelah_pajak").value = averageEatValue.toLocaleString("id-ID");

            // Calculate initial and average investment
            const aktivaTetap = parseFloat(document.getElementById('pembelian_aktiva_tetap').value.replace(/\./g, '')) || 0;
            const modalKerja = parseFloat(document.getElementById('kebutuhan_modal_kerja').value.replace(/\./g, '')) || 0;
            const total = aktivaTetap + modalKerja;

            const calculateInvestment = (averageEat, base) => ((averageEat / base) * 100).toFixed(2);
            const initialInvestment = calculateInvestment(averageEatValue, total);
            document.getElementById("arr_initial_investment").value = parseFloat(initialInvestment).toLocaleString("id-ID") + "%";

            const averageInvestment = calculateInvestment(averageEatValue, total / 2);
            document.getElementById('pibk_nilai_arr').innerText = parseFloat(averageInvestment).toLocaleString("id-ID") + "%";

            // Investment conclusion
            const arr1 = 45;
            let kesimpulanInvestasi = '';

            kesimpulanInvestasi = (averageInvestment >= arr1) ? 'LAYAK' : 'TIDAK LAYAK';

            document.getElementById('pibk_kesimpulan_arr').innerText = kesimpulanInvestasi;

            // Calculate Payback Period
            const paybackPeriod = calculatePaybackPeriod(aktivaTetap + modalKerja, aliranKasMasuk);
            document.getElementById('pibk_nilai_pp').innerText = `${paybackPeriod.tahun} Tahun ${paybackPeriod.bulan} Bulan`;

            const payback = 3;

            kesimpulanInvestasi = (paybackPeriod.tahun <= payback) ? 'LAYAK' : 'TIDAK LAYAK';

            document.getElementById('pibk_kesimpulan_pp').innerText = kesimpulanInvestasi;

            // Perhitungan IRR
            function calculateNPV(rate, cashFlows) {
                let npv = 0;
                for (let t = 0; t < cashFlows.length; t++) {
                    npv += cashFlows[t] / Math.pow(1 + rate, t);
                }
                return npv;
            }

            function calculateIRRNewtonRaphson(cashFlows, initialRate = 0.1, maxIterations = 1000, tolerance = 1e-6) {
                let rate = initialRate;
                for (let i = 0; i < maxIterations; i++) {
                    let npv = 0;
                    let derivative = 0;
                    for (let t = 0; t < cashFlows.length; t++) {
                        npv += cashFlows[t] / Math.pow(1 + rate, t);
                        derivative -= t * cashFlows[t] / Math.pow(1 + rate, t + 1);
                    }
                    const newRate = rate - npv / derivative;
                    if (Math.abs(newRate - rate) < tolerance) return newRate;
                    rate = newRate;
                }
                return rate; // Mengembalikan hasil jika tidak konvergen dalam iterasi maksimal
            }

            // Mengambil aliran kas (kas masuk untuk tiap tahun)
            const cashFlows = [-total]; // Memasukkan investasi awal sebagai nilai negatif
            for (let tahun = 1; tahun <= 5; tahun++) {
                const aliranKasMasuk = parseFloat(document.getElementById(`${tahun}_pibk_aliran_kas_masuk`).innerText.replace(/\./g, '')) || 0;
                cashFlows.push(aliranKasMasuk); // Menambahkan aliran kas masuk per tahun
            }

            // Hitung IRR
            const irr = calculateIRRNewtonRaphson(cashFlows);
            document.getElementById('pibk_nilai_irr').innerText = (irr * 100).toFixed(2) + "%"; // Menampilkan IRR dalam persen

            const sukuBunga = 20;

            kesimpulanInvestasi = ((irr * 100).toFixed(2) >= sukuBunga) ? 'LAYAK' : 'TIDAK LAYAK';
            document.getElementById('pibk_kesimpulan_irr').innerText = kesimpulanInvestasi;

            // Perhitungan MIRR
            function calculateMIRR(cashFlows, financeRate, reinvestmentRate) {
                let pvNegatif = 0; // Nilai sekarang dari arus kas negatif
                let fvPositif = 0; // Nilai masa depan dari arus kas positif
                const n = cashFlows.length - 1; // Jumlah periode

                for (let t = 0; t < cashFlows.length; t++) {
                    if (cashFlows[t] < 0) {
                        // Hitung nilai sekarang (PV) untuk arus kas negatif
                        pvNegatif += cashFlows[t] / Math.pow(1 + financeRate, t);
                    } else {
                        // Hitung nilai masa depan (FV) untuk arus kas positif
                        fvPositif += cashFlows[t] * Math.pow(1 + reinvestmentRate, n - t);
                    }
                }

                // Rumus MIRR
                const mirr = Math.pow(fvPositif / -pvNegatif, 1 / n) - 1;
                return mirr;
            }

            // Finance rate dan reinvestment rate
            const financeRate = 0.20; // 20%
            const reinvestmentRate = 0.125; // 12.50%

            // Perhitungan MIRR menggunakan arus kas (cashFlows)
            const mirr = calculateMIRR(cashFlows, financeRate, reinvestmentRate);
            document.getElementById('pibk_nilai_mirr').innerText = (mirr * 100).toFixed(2) + "%"; // Menampilkan MIRR dalam persen

            kesimpulanInvestasi = ((mirr * 100).toFixed(2) >= sukuBunga) ? 'LAYAK' : 'TIDAK LAYAK';
            document.getElementById('pibk_kesimpulan_mirr').innerText = kesimpulanInvestasi;

            function calculateNPV(rate, cashFlows) {
                let npv = 0;
                for (let t = 1; t <= cashFlows.length; t++) {
                    npv += cashFlows[t - 1] / Math.pow(1 + rate, t); // Memulai diskonto dari tahun ke-1
                }
                return npv;
            }

            // Tingkat diskonto (20%)
            const discountRate = 0.20;

            // Hitung NPV
            const npv = calculateNPV(discountRate, cashFlows);
            const npvRound = Math.round(npv);

            // Tampilkan hasil NPV
            document.getElementById('pibk_nilai_npv').innerText = npvRound.toLocaleString("id-ID");

            // Menentukan kesimpulan investasi
            kesimpulanInvestasi = npv > 0 ? 'LAYAK' : 'TIDAK LAYAK';
            document.getElementById('pibk_kesimpulan_npv').innerText = kesimpulanInvestasi;

            const pindex = (-total - npvRound) / -total;
            document.getElementById('pibk_nilai_pi').innerText = pindex.toFixed(2);

            kesimpulanInvestasi = pindex > 0 ? 'LAYAK' : 'TIDAK LAYAK';
            document.getElementById('pibk_kesimpulan_pi').innerText = kesimpulanInvestasi;
        }
    }
</script>

<?= $this->endSection(); ?>