@extends('templatebt5')
@section('judul_halaman', 'Form Tambah Data')
@section('konten')

    <br>
    <a href="/penggajian" class="btn btn-secondary mb-3">Kembali</a>

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="/penggajian/store" method="POST" onsubmit="return validasiForm()">
        @csrf

        <div class="mb-3 row">
            <label for="nip" class="col-sm-2 col-form-label">NIP</label>
            <div class="col-sm-10">
                <input type="text" name="nip" id="nip" class="form-control" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="gajipokok" class="col-sm-2 col-form-label">Gaji Pokok</label>
            <div class="col-sm-10">
                <input type="number" name="gajipokok" id="gajipokok" class="form-control" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="potongan" class="col-sm-2 col-form-label">Potongan</label>
            <div class="col-sm-10">
                <input type="number" name="potongan" id="potongan" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Simpan Data Baru</button>
            </div>
        </div>
    </form>

    <script>
        // Mengambil array data NIP dari Laravel (Harus dikirim dari Controller)
        const existingNips = @json($nips ?? []);

        function validasiForm() {
            let nipInput = document.getElementById("nip").value;
            let gajiInput = parseFloat(document.getElementById("gajipokok").value);
            let potonganInput = parseFloat(document.getElementById("potongan").value);

            // Syarat A: Validasi NIP Unik
            if (existingNips.includes(nipInput)) {
                alert("Peringatan: NIP tersebut sudah ada di tabel! Silakan masukkan NIP lain.");
                return false; // Membatalkan proses simpan
            }

            // Syarat B: Validasi Potongan < 30% Gaji Pokok
            let batasMaksimalPotongan = gajiInput * 0.30;

            if (potonganInput >= batasMaksimalPotongan) {
                alert("Peringatan: Potongan tidak boleh lebih dari atau sama dengan 30% Gaji Pokok.\n(Maksimal potongan untuk gaji " + gajiInput + " adalah " + batasMaksimalPotongan + ")");
                return false; // Membatalkan proses simpan
            }

            return true;
        }
    </script>
    @endsection
