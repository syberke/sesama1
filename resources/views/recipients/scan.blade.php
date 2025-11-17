@extends('layouts.app')

@section('title', 'Penyaluran Bantuan')

@section('content')
<style>
    /* --- Card Shadow Premium --- */
.scan-container,
.result-container {
    border-radius: 16px;
    background: #fff;
    padding: 30px;

    box-shadow:
        0 6px 12px rgba(0,0,0,0.08),
        0 12px 24px rgba(0,0,0,0.12),
        0 18px 32px rgba(0,0,0,0.06) !important;
}

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
        box-shadow: 5px 5px rgba(0, 0, 0, 0.05);
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

    .form-control {
        border-radius: 8px;
        border: 1px solid #e5e7eb;
        padding: 12px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #3b82f6;
        box-shadow: 0 0 0 3px rgba(59,130,246,0.1);
    }

    .btn-custom {
        border-radius: 10px;
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
</style>

<div class="page-header">
    <h2 class="mb-2">Penyaluran Bantuan</h2>
    <p class="mb-0">Scan QR penerima untuk memproses penyaluran</p>
</div>

<div class="row justify-content-center">
    <div class="col-lg-8">

        <div class="scan-container">

            <div class="text-center mb-4">
                <div class="scan-icon">
                    <i class="fas fa-qrcode fa-2x text-white"></i>
                </div>
                <h4 class="mb-2">Scan QR Code</h4>
                <p class="text-muted">Masukkan atau scan QR penerima bantuan</p>
            </div>

            <!-- FORM SCAN -->
            <form id="verifyForm">
                @csrf

                <label class="form-label">Kode QR</label>
                <input type="text" id="qr_code" name="qr_code"
                       class="form-control mb-3"
                       placeholder="Scan atau ketik kode QR di sini..."
                       required>

                <div class="text-center">
                    <button class="btn btn-primary btn-custom">
                        <i class="fas fa-search me-2"></i> Verifikasi QR
                    </button>
                </div>
            </form>

            <!-- RESULT -->
            <div id="result" class="mt-4" style="display:none;">
                <div class="result-container">

                    <h5 class="fw-bold mb-3 text-center">
                        <i class="fas fa-user-check me-2 text-success"></i>
                        Data Penerima
                    </h5>

                    <input type="hidden" id="recipient_id">

                    <div class="mb-3">
                        <label class="form-label">Nama Anak</label>
                        <input class="form-control" id="child_name" readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama Ayah</label>
                        <input class="form-control" id="Ayah_name" readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama Ibu</label>
                        <input class="form-control" id="Ibu_name" readonly>
                    </div>

                    <hr class="my-4">

                    <h5 class="fw-bold mb-3 text-center">
                        <i class="fas fa-hand-holding-heart me-2 text-primary"></i>
                        Form Penyaluran
                    </h5>

                    <form id="distributeForm">
                        @csrf
                        <input type="hidden" name="recipient_id" id="recipient_id_2">

                        <div class="mb-3">
                            <label class="form-label">Tanggal Penyaluran</label>
                            <input type="date" name="delivery_date" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Keterangan</label>
                            <textarea name="notes" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-success btn-custom">
                                <i class="fas fa-check me-2"></i> Simpan Penyaluran
                            </button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<script>
// ===================================
// VERIFIKASI QR
// ===================================
document.getElementById('verifyForm').addEventListener('submit', function(e){
    e.preventDefault();

    fetch("{{ route('recipients.verify-qr') }}", {
        method: "POST",
        body: new FormData(this)
    })
    .then(res => res.json())
    .then(data => {

        if (!data.success) {
            showPopup("error", data.error || "QR tidak valid!");
            return;
        }

        showPopup("success", "QR Berhasil Diverifikasi!");
        document.getElementById('result').style.display = 'block';

        const r = data.recipient;
        document.getElementById('recipient_id').value = r.id;
        document.getElementById('recipient_id_2').value = r.id;

        document.getElementById('child_name').value = r.child_name;
        document.getElementById('Ayah_name').value = r.Ayah_name;
        document.getElementById('Ibu_name').value = r.Ibu_name;
    })
    .catch(() => showPopup("error", "Gagal menghubungi server"));
});

// ===================================
// SIMPAN PENYALURAN
// ===================================
document.getElementById('distributeForm').addEventListener('submit', function(e){
    e.preventDefault();

    const id = document.getElementById('recipient_id').value;

    fetch(`/recipients/${id}/distribute`, {
        method: "POST",
        body: new FormData(this)
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            showPopup("success", "Penyaluran Berhasil!");
            setTimeout(() => location.reload(), 1500);
        } else {
            showPopup("warning", data.error ?? "Terjadi kesalahan");
        }
    })
    .catch(() => showPopup("error", "Gagal mengirim data"));
});
</script>

@endsection
