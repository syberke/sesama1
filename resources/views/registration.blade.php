@extends('layouts.app')

@section('title', 'Registrasi')

@section('content')
<style>
    .page-header {
        background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
        border-radius: 15px;
        padding: 25px;
        margin-bottom: 30px;
        color: white;
    }

    .scan-container {
        background: white;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        margin-bottom: 25px;
    }

    .form-control {
        border-radius: 8px;
        border: 1px solid #e5e7eb;
        padding: 12px 15px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #3b82f6;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }

    .btn-custom {
        border-radius: 8px;
        padding: 12px 25px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-custom:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    .result-container {
        background: #f8fafc;
        border-radius: 12px;
        padding: 25px;
        border: 1px solid #e5e7eb;
    }

    .form-label {
        font-weight: 600;
        color: #374151;
        margin-bottom: 8px;
    }

    .scan-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #3b82f6, #1e40af);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
    }
</style>

<div class="page-header">
    <h2 class="mb-3">Registrasi Bantuan</h2>
    <p class="mb-0">Scan QR Code untuk verifikasi dan proses registrasi</p>
</div>

<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="scan-container">
            <div class="text-center mb-4">
                <div class="scan-icon">
                    <i class="fas fa-qrcode fa-2x text-white"></i>
                </div>
                <h4 class="mb-2">Scan QR Code</h4>
                <p class="text-muted">Masukkan atau scan kode QR untuk verifikasi registrasi</p>
            </div>

            <form id="verifyForm">
                @csrf
                <div class="mb-4">
                    <label for="qr_code" class="form-label">Kode QR</label>
                    <input type="text" name="qr_code" id="qr_code" class="form-control"
                           placeholder="Scan atau ketik kode QR di sini..." autofocus required>
                    <small class="form-text text-muted mt-2 d-block">
                        <i class="fas fa-info-circle me-1"></i>
                        Gunakan scanner atau ketik manual kode QR
                    </small>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-custom">
                        <i class="fas fa-search me-2"></i>Verifikasi QR Code
                    </button>
                </div>
            </form>

            <!-- Hasil scan -->
            <div id="result" class="mt-4" style="display: none;">
                <div class="result-container">
                    <h5 class="fw-bold mb-4 text-center">
                        <i class="fas fa-user-check me-2 text-success"></i>
                        Data Penerima
                    </h5>
                    <form id="editForm">
                        @csrf
                        <input type="hidden" name="qr_code" id="edit_qr_code">

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nama Anak</label>
                                <input type="text" name="child_name" id="child_name" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nama Ayah</label>
                                <input type="text" name="Ayah_name" id="Ayah_name" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nama Ibu</label>
                                <input type="text" name="Ibu_name" id="Ibu_name" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Tempat Lahir</label>
                                <input type="text" name="birth_place" id="birth_place" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="date" name="birth_date" id="birth_date" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nama Sekolah</label>
                                <input type="text" name="school_name" id="school_name" class="form-control">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Alamat</label>
                            <textarea name="address" id="address" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-custom">
                                <i class="fas fa-check me-2"></i>Simpan & Registrasikan
                            </button>
                        </div>
                    </form>
                </div>
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
