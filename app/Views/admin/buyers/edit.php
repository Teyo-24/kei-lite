<?= $this->extend('admin/template/template'); ?>
<?= $this->section('content'); ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title" style="color: #03AADE;">Ubah Data Buyers</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="col-12 col-md-8">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="card-body">
                        <form action="<?= base_url('admin-update-buyers/' . $buyers['id_buyers']) ?>" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label">Nama Perusahaan</label>
                                <input type="text" class="form-control" name="nama_perusahaan" value="<?= $buyers['nama_perusahaan'] ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Negara</label>
                                <select class="form-select" id="negara_perusahaan" name="negara_perusahaan" required>
                                    <option value="" selected disabled>Pilih Negara Perusahaan</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Kode HS</label>
                                <input type="text" class="form-control" name="hs_code" value="<?= $buyers['hs_code'] ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Deskripsi Kode HS</label>
                                <input type="text" class="form-control" name="deskripsi_hs_code" value="<?= $buyers['deskripsi_hs_code'] ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email_perusahaan" value="<?= $buyers['email_perusahaan'] ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Website</label>
                                <input type="text" class="form-control" name="website_perusahaan" value="<?= $buyers['website_perusahaan'] ?>" required>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn text-white" style="background-color: #03AADE;">Simpan</button>
                                <a href="<?= base_url('admin-buyers') ?>" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div><!--//app-card-->
            </div>
        </div><!--//row-->
        <hr class="my-4">
    </div><!--//container-fluid-->
</div><!--//app-content-->

<script>
    // Set the country from PHP as a JavaScript variable
    const selectedCountry = "<?php echo $buyers['negara_perusahaan']; ?>";

    // Function to fetch and populate country dropdown
    function populateCountryDropdown(selectElementId) {
        fetch('https://countryapi.io/api/all?apikey=hBEyyd9UoGdiYzedT8GBaPqVdRpwbhtCcJ4N6VQ2')
            .then(response => response.json())
            .then(data => {
                const selectElement = document.getElementById(selectElementId);

                // Kosongkan dropdown sebelum mengisi
                selectElement.innerHTML = '<option value="" selected disabled>Pilih Negara Perusahaan</option>';

                const countries = Object.values(data); // Konversi objek ke array
                countries.sort((a, b) => a.name.localeCompare(b.name));

                // Tambahkan negara ke dalam dropdown
                countries.forEach(country => {
                    const option = document.createElement('option');
                    option.value = country.name;
                    option.textContent = country.name;

                    if (country.name === selectedCountry) {
                        option.selected = true;
                    }

                    selectElement.appendChild(option);
                });
            })
            .catch(error => console.error('Error fetching country data:', error));
    }

    // Call function on page load
    document.addEventListener('DOMContentLoaded', function() {
        populateCountryDropdown('negara_perusahaan');
    });
</script>

<?= $this->endSection('content') ?>