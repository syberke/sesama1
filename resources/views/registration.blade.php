@extends('layouts.app')

@section('title')
Registrasi
@endsection

@section('content')
<div class="container mt-4">
    <div class="card shadow" style="max-width: 500px;">
        <div class="card-header">
            <h5 class="mb-0">Scan QR Code</h5>
        </div>
        <div class="card-body">
            <form id="verifyForm">
                @csrf
                <div class="mb-3">
                    <label for="qr_code" class="form-label">Masukkan Kode QR</label>
                    <input type="text" name="qr_code" id="qr_code" class="form-control"
                           placeholder="Scan atau ketik kode QR di sini..." autofocus required>
                    <small class="form-text text-muted">
                        Gunakan scanner atau ketik manual kode QR
                    </small>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fas fa-search me-2"></i>Verifikasi
                </button>
            </form>

            <!-- Hasil scan -->
            <!-- Hasil scan -->
<div id="result" class="mt-4" style="display: none;">
    <h6 class="fw-bold mb-3">Data Penerima</h6>
    <form id="editForm">
        @csrf
        <input type="hidden" name="qr_code" id="edit_qr_code">

        <div class="mb-2">
            <label class="form-label">Nama Anak</label>
            <input type="text" name="child_name" id="child_name" class="form-control form-control-sm">
        </div>

        <div class="mb-2">
            <label class="form-label">Nama Ayah</label>
            <input type="text" name="Ayah_name" id="Ayah_name" class="form-control form-control-sm">
        </div>

        <div class="mb-2">
            <label class="form-label">Nama Ibu</label>
            <input type="text" name="Ibu_name" id="Ibu_name" class="form-control form-control-sm">
        </div>

        <div class="mb-2">
            <label class="form-label">Tempat Lahir</label>
            <input type="text" name="birth_place" id="birth_place" class="form-control form-control-sm">
        </div>

        <div class="mb-2">
            <label class="form-label">Tanggal lahir</label>
            <input type="date" name="birth_date" id="birth_date" class="form-control form-control-sm">
        </div>

        <div class="mb-2">
            <label class="form-label">Nama Sekolah</label>
            <input type="text" name="school_name" id="school_name" class="form-control form-control-sm">
        </div>

        <div class="mb-2">
            <label class="form-label">Alamat</label>
            <textarea name="address" id="address" class="form-control form-control-sm"></textarea>
        </div>

        <button type="submit" class="btn btn-success btn-sm mt-2">✅ Simpan & Registrasikan</button>
    </form>
</div>

        </div>
    </div>
</div>

<style>
.table th {
    white-space: nowrap;
    padding: 4px 8px;
    font-size: 0.9rem;
}
.table td {
    padding: 4px 8px;
    font-size: 0.9rem;
}
</style>

<script>
document.getElementById('verifyForm').addEventListener('submit', function(e) {
    e.preventDefault();

    fetch('http://127.0.0.1:8000/registration/verify', {
        method: 'POST',
        body: new FormData(this)
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            document.getElementById('result').style.display = 'block';

            // Isi form edit
            document.getElementById('edit_qr_code').value = document.getElementById('qr_code').value;
            document.getElementById('child_name').value = data.recipient.child_name;
            document.getElementById('Ayah_name').value = data.recipient.Ayah_name;
            document.getElementById('Ibu_name').value = data.recipient.Ibu_name;
            document.getElementById('birth_place').value = data.recipient.birth_place;
            document.getElementById('birth_date').value = data.recipient.birth_date;
            document.getElementById('school_name').value = data.recipient.school_name;
            document.getElementById('address').value = data.recipient.address;
        } else {
            alert(data.error);
        }
    });
});

// Handle simpan & registrasi
document.getElementById('editForm').addEventListener('submit', function(e) {
    e.preventDefault();

    fetch('http://127.0.0.1:8000/registration/confirm', {
        method: 'POST',
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        },
        body: new FormData(this)
    })
    .then(res => res.json())
    .then(resp => {
        if (resp.success) {
            alert('Registrasi & Update Berhasil ✅');
            location.reload();
        } else {
            alert(resp.error || 'Terjadi kesalahan');
        }
    })
    .catch(err => {
        console.error(err);
        alert('Gagal mengirim data');
    });
});


</script>


@endsection
