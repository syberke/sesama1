@extends('layouts.app')

@section('title', 'Registrasi')

@section('content')
<style>
/* === HEADER === */
.page-header {
    background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
    border-radius: 16px;
    padding: 28px;
    margin-bottom: 35px;
    color: white;
    box-shadow:
        0 10px 20px rgba(0,0,0,0.12),
        0 15px 30px rgba(0,0,0,0.10);
}

/* === CARD / CONTAINERS === */
.scan-container,
.result-container {
    background: #ffffff;
    border-radius: 16px;
    padding: 32px;
    margin-bottom: 25px;

    /* SHADOW PREMIUM */
    box-shadow:
        0 6px 12px rgba(0, 0, 0, 0.10),
        0 12px 24px rgba(0, 0, 0, 0.06),
        0 18px 36px rgba(0, 0, 0, 0.04) !important;
}

/* === FORM INPUT === */
.form-control {
    border-radius: 10px;
    padding: 12px 14px;
    border: 1px solid #e5e7eb;
    font-size: 0.95rem;
    transition: .25s ease;
}

.form-control:focus {
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59,130,246,0.2);
}

/* === BUTTON === */
.btn-custom {
    padding: 12px 28px;
    border-radius: 10px;
    font-weight: 600;
    transition: 0.25s ease;
}

.btn-custom:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 18px rg<style>
/* === HEADER === */
.page-header {
    background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
    border-radius: 16px;
    padding: 28px;
    margin-bottom: 35px;
    color: white;
    box-shadow:
        0 10px 20px rgba(0,0,0,0.12),
        0 15px 30px rgba(0,0,0,0.10);
}

/* === CARD / CONTAINERS === */
.scan-container,
.result-container {
    background: #ffffff;
    border-radius: 16px;
    padding: 32px;
    margin-bottom: 25px;

    /* SHADOW PREMIUM */
    box-shadow:
        0 6px 12px rgba(0, 0, 0, 0.10),
        0 12px 24px rgba(0, 0, 0, 0.06),
        0 18px 36px rgba(0, 0, 0, 0.04) !important;
}

/* === FORM INPUT === */
.form-control {
    border-radius: 10px;
    padding: 12px 14px;
    border: 1px solid #e5e7eb;
    font-size: 0.95rem;
    transition: .25s ease;
}

.form-control:focus {
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59,130,246,0.2);
}

/* === BUTTON === */
.btn-custom {
    padding: 12px 28px;
    border-radius: 10px;
    font-weight: 600;
    transition: 0.25s ease;
}

.btn-custom:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 18px rgba(0,0,0,0.15);
}

/* === ICON CIRCLE === */
.scan-icon {
    width: 85px;
    height: 85px;
    background: linear-gradient(135deg, #3b82f6, #1e40af);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    box-shadow:
        0 6px 12px rgba(0,0,0,0.15),
        0 12px 20px rgba(0,0,0,0.10);
}

.scan-icon i {
    font-size: 2rem;
    color: white;
}

/* === RESULT BOX === */
.result-container {
    background: #f9fafb;
    border: 1px solid #e5e7eb;
}

/* === RESPONSIVE === */
@media (max-width: 576px) {
    .page-header {
        padding: 20px;
        text-align: center;
    }
    .scan-container,
    .result-container {
        padding: 22px;
    }
    .btn-custom {
        width: 100%;
        font-size: 1rem;
    }
    .scan-icon {
        width: 70px;
        height: 70px;
    }
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
// --- Verifikasi QR ---
document.getElementById('verifyForm').addEventListener('submit', function(e) {
    e.preventDefault();

    fetch('http://127.0.0.1:8000/registration/verify', {
        method: 'POST',
        body: new FormData(this)
    })
    .then(res => res.json())
    .then(data => {

        if (data.success) {
            showPopup("success", "QR Berhasil Diverifikasi!");

            document.getElementById('result').style.display = 'block';

            document.getElementById('edit_qr_code').value = document.getElementById('qr_code').value;
            document.getElementById('child_name').value = data.recipient.child_name;
            document.getElementById('Ayah_name').value = data.recipient.Ayah_name;
            document.getElementById('Ibu_name').value = data.recipient.Ibu_name;
            document.getElementById('birth_place').value = data.recipient.birth_place;
            document.getElementById('birth_date').value = data.recipient.birth_date;
            document.getElementById('school_name').value = data.recipient.school_name;
            document.getElementById('address').value = data.recipient.address;

        } else {
            showPopup("error", data.error || "QR tidak valid!");
        }

    })
    .catch(() => {
        showPopup("error", "Gagal koneksi ke server!");
    });
});

// --- Submit Registrasi ---
document.getElementById('editForm').addEventListener('submit', function(e) {
    e.preventDefault();

    fetch('http://127.0.0.1:8000/registration/confirm', {
        method: 'POST',
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        body: new FormData(this)
    })
    .then(res => res.json())
    .then(resp => {

        if (resp.success) {
            showPopup("success", "Registrasi Berhasil Diperbarui!");

            setTimeout(() => location.reload(), 1500);

        } else {
            showPopup("warning", resp.error || "Terjadi kesalahan!");
        }

    })
    .catch(() => {
        showPopup("error", "Gagal mengirim data ke server!");
    });
});
</script>





@endsection
