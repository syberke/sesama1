@extends('layouts.app')

@section('title', 'Penyaluran')

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
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
        }

        .result-container {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
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
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
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

        .recipient-info {
            background: #f8fafc;
            border-radius: 12px;
            padding: 20px;
            border: 1px solid #e5e7eb;
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .info-label {
            font-weight: 600;
            color: #374151;
        }

        .info-value {
            color: #6b7280;
        }
    </style>

    <div class="page-header">
        <h2 class="mb-3">Penyaluran Bantuan</h2>
        <p class="mb-0">Scan QR Code untuk verifikasi dan penyaluran bantuan</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="scan-container">
                <div class="text-center mb-4">
                    <div class="scan-icon">
                        <i class="fas fa-qrcode fa-2x text-white"></i>
                    </div>
                    <h4 class="mb-2">Scan QR Code</h4>
                    <p class="text-muted">Masukkan atau scan kode QR untuk verifikasi</p>
                </div>

                <form id="qrForm">
                    <div class="mb-4">
                        <label for="qr_input" class="form-label">Kode QR</label>
                        <input type="text" class="form-control" id="qr_input"
                            placeholder="Scan atau ketik kode QR di sini..." autofocus>
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
            </div>
        </div>
    </div>

    {{-- result area centered on its own row; hidden until filled --}}
    <div class="row justify-content-center mt-3">
        <div class="col-lg-8">
            <div class="result-container" id="resultCard" style="display: none;">
                <h5 class="mb-4 text-center">
                    <i class="fas fa-user-check me-2 text-success"></i>
                    Hasil Verifikasi
                </h5>
                <div id="resultContent">
                    <!-- Result will be loaded here -->
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4" id="distributionSection" style="display: none;">
        <div class="col-12">
            <div class="result-container">
                <h5 class="mb-4 text-center">
                    <i class="fas fa-hand-holding-heart me-2 text-primary"></i>
                    Konfirmasi Penyaluran
                </h5>
                <form id="distributionForm">
                    <input type="hidden" id="recipient_id" name="recipient_id">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success btn-custom me-3">
                            <i class="fas fa-check me-2"></i>Tandai Sudah Disalurkan
                        </button>
                        <button type="button" class="btn btn-secondary btn-custom" onclick="resetForm()">
                            <i class="fas fa-redo me-2"></i>Reset
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            let currentRecipient = null;

            $('#qr_input').on('input', function() {
                const value = $(this).val().trim();
                if (value.length > 5) {
                    setTimeout(() => {
                        if ($('#qr_input').val().trim() === value) {
                            $('#qrForm').submit();
                        }
                    }, 500);
                }
            });

            $('#qr_input').on('keypress', function(e) {
                if (e.which === 13) {
                    e.preventDefault();
                    $('#qrForm').submit();
                }
            });

            $('#qrForm').on('submit', function(e) {
                e.preventDefault();

                const qrCode = $('#qr_input').val().trim();
                if (!qrCode) {
                    alert('Masukkan kode QR terlebih dahulu');
                    return;
                }

                $('#resultContent').html(
                    '<div class="text-center"><i class="fas fa-spinner fa-spin"></i> Memverifikasi...</div>'
                    );
                $('#resultCard').show();

                $.ajax({
                    url: '{{ route('recipients.verify-qr') }}',
                    method: 'POST',
                    data: {
                        qr_code: qrCode,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            currentRecipient = response.recipient;
                            displayRecipientInfo(response.recipient);
                            $('#distributionSection').show();
                            $('#recipient_id').val(response.recipient.id);
                        }
                    },
                    error: function(xhr) {
                        const response = xhr.responseJSON;
                        $('#resultCard').show();
                        $('#resultContent').html(`
                    <div class="alert alert-danger">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        ${response.error || 'Terjadi kesalahan'}
                    </div>
                `);
                        $('#distributionSection').hide();
                        currentRecipient = null;
                    }
                });
            });

            $('#distributionForm').on('submit', function(e) {
                e.preventDefault();

                const recipientId = $('#recipient_id').val();
                if (!recipientId) {
                    alert('Data penerima tidak ditemukan');
                    return;
                }

                const formData = new FormData();
                formData.append('_token', '{{ csrf_token() }}');

                const submitBtn = $('#distributionForm button[type="submit"]');
                const originalText = submitBtn.html();
                submitBtn.html('<i class="fas fa-spinner fa-spin me-2"></i>Memperbarui...').prop('disabled',
                    true);

                $.ajax({
                    url: `/recipients/${recipientId}/distribute`,
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {

                        if (response.success) {
                            if (response.recipient) {
                                currentRecipient = response.recipient;
                                displayRecipientInfo(currentRecipient,
                                true); // tampilkan PDF langsung
                            }
                            const successAlert = `
                        <div class="alert alert-success alert-dismissible fade show">
                            <i class="fas fa-check-circle me-2"></i>
                            ${response.message}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    `;
                            $('#resultContent').prepend(successAlert);
                        } else {
                            alert(response.message || 'Terjadi kesalahan');
                        }
                    },
                    error: function(xhr) {
                        const response = xhr.responseJSON;
                        alert(response?.message || 'Terjadi kesalahan saat memperbarui data');
                    },
                    complete: function() {
                        submitBtn.html(originalText).prop('disabled', false);
                    }
                });
            });
        });

        function displayRecipientInfo(recipient, showPdf = false) {
            const statusBadge = recipient.is_distributed ?
                '<span class="badge bg-success">Sudah Menerima</span>' :
                '<span class="badge bg-warning">Belum Menerima</span>';

            let pdfButton = '';
            if (showPdf || recipient.is_distributed) {
                pdfButton = ``;
            }

            $('#resultContent').html(`
        <div class="alert alert-success mb-3">
            <i class="fas fa-check-circle me-2"></i>
            QR Code valid!
        </div>

        <div class="recipient-info">
            <div class="info-item">
                <span class="info-label">Nama:</span>
                <span class="info-value"><strong>${recipient.child_name}</strong> ${statusBadge}</span>
            </div>
            <div class="info-item">
                <span class="info-label">QR Code:</span>
                <span class="info-value">${recipient.qr_code}</span>
            </div>
            <div class="info-item">
                <span class="info-label">Nama Ayah:</span>
                <span class="info-value">${recipient.Ayah_name}</span>
            </div>
            <div class="info-item">
                <span class="info-label">Nama Ibu:</span>
                <span class="info-value">${recipient.Ibu_name}</span>
            </div>
            <div class="info-item">
                <span class="info-label">Sekolah:</span>
                <span class="info-value">${recipient.school_name} (${recipient.school_level})</span>
            </div>
            <div class="info-item">
                <span class="info-label">Kelas:</span>
                <span class="info-value">${recipient.class}</span>
            </div>
        </div>
        ${pdfButton}
    `);

            $('#resultCard').show();
        }

        function resetForm() {
            $('#qr_input').val('').focus();
            $('#resultCard').hide();
            $('#distributionSection').hide();
            $('#distributionForm')[0].reset();
        }
    </script>
@endpush
