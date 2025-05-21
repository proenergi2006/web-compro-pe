<!DOCTYPE html>
<html lang="id">

<head>
  
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        .modal-wizard-panel {

            .modal-content {
                background-color: transparent !important;
                border: none;
            }

            .wizard-panel {
                /* background-color: #e9ecef; */
                padding: 0;
                margin: 0;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;




                .wizard-container {
                    width: 100%;
                    max-width: 550px;
                    margin: 20px auto;
                    background-color: #fff;
                    border-radius: 20px;
                    padding: 30px 25px;
                    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
                }

                .wizard-header {
                    text-align: left;
                    color: white;
                    margin-bottom: 25px;
                }

                .wizard-header h3 {
                    font-weight: 600;
                    font-size: 22px;
                    color: #403c34;
                }

                .wizard-steps {
                    display: flex;
                    justify-content: center;
                    margin-bottom: 35px;
                    position: relative;
                    padding: 0 20px;
                }

                .step-line {
                    position: absolute;
                    top: 14px;
                    height: 2px;
                    background-color: #dee2e6;
                    width: 25%;
                    z-index: 1;
                    transition: background 0.3s ease;
                }

                .step {
                    width: 30px;
                    height: 30px;
                    border-radius: 50%;
                    background-color: #dee2e6;
                    color: #fff;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-weight: bold;
                    font-size: 14px;
                    margin: 0 10%;
                    position: relative;
                    z-index: 2;
                    transition: all 0.3s ease;
                }

                .step.active {
                    background-color: #f37221;
                    box-shadow: 0 0 0 4px rgba(243, 156, 33, 0.2);
                }

                .step.completed {
                    background-color: #f38321;
                }

                .form-step {
                    display: none;
                    opacity: 0;
                    transition: opacity 0.3s ease;
                }

                .form-step.active {
                    display: block;
                    opacity: 1;
                }

                .form-subtitle {
                    text-align: center;
                    margin-bottom: 5px;
                    font-weight: 600;
                    font-size: 18px;
                    color: #343a40;
                }

                .form-description {
                    text-align: center;
                    color: #6c757d;
                    margin-bottom: 25px;
                    font-size: 14px;
                }

                .btn-nav {
                    min-width: 120px;
                    padding: 10px 20px;
                    border-radius: 6px;
                    font-weight: 500;
                }

                .btn-primary {
                    background-color: #f38721;
                    border-color: #f38721;
                    font-weight: 500;
                    font-size: 14px;
                }

                .btn-primary:hover {
                    background-color: #f2420d;
                    border-color: #f2610d;
                    color:white;
                }

                .btn-outline-secondary {
                    color: #6c757d;
                    border-color: #dee2e6;
                    background-color: #fff;
                    font-weight: 500;
                }

                .btn-outline-secondary:hover {
                    background-color: #f8f9fa;
                    border-color: #ced4da;
                    color: #495057;
                }

                .btn-action {
                    border-radius: 50px;
                    min-width: 120px;
                    padding: 10px 20px;
                }

                .btn-outline-primary {
                    border: 1px solid #f38721;
                    color: #f38721;
                     font-size: 14px;
                }

                .btn-outline-primary:hover {
                    background-color: rgba(52, 167, 234, 0.05);
                    border-color: #f37521;
                    color: #f37221;
                }

                .order-details {
                    margin-bottom: 20px;
                }

                .detail-row {
                    display: flex;
                    margin-bottom: 8px;
                    font-size: 14px;
                    line-height: 1.5;
                }

                .detail-colon {
                    margin-right: 0.5rem;
                }

                .detail-label {
                    font-weight: 500;
                    min-width: 140px;
                    color: #6c757d;
                }

                .detail-value {
                    color: #343a40;
                }

                .order-summary {
                    background-color: #f0f7ff;
                    padding: 15px;
                    border-radius: 8px;
                    margin: 20px 0;
                }

                .dropdown-toggle {
                    text-align: left;
                    position: relative;
                    padding-right: 30px;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    white-space: nowrap;
                    background-color: #fff;
                    border: 1px solid #dee2e6;
                    color: #495057;
                }

                .dropdown-toggle::after {
                    position: absolute;
                    right: 15px;
                    top: 50%;
                    transform: translateY(-50%);
                }

                .dropdown-toggle:focus {
                    box-shadow: 0 0 0 3px rgba(33, 150, 243, 0.15);
                    border-color: #2196F3;
                }

                .dropdown-menu {
                    border-radius: 8px;
                    border: 1px solid #e9ecef;
                    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
                }

                .dropdown-item {
                    padding: 10px 15px;
                    font-size: 14px;
                }

                .dropdown-item:hover {
                    background-color: #f0f7ff;
                }

                .payment-info {
                    background-color: #fffaeb;
                    padding: 18px;
                    border-radius: 10px;
                    margin: 25px 0;
                    border: 1px solid #ffe2a6;
                    text-align: center;
                }

                .payment-info p {
                    font-weight: 600;
                    margin-bottom: 12px;
                    color: #343a40;
                }

                .copy-btn {
                    background: none;
                    border: none;
                    color: #2196F3;
                    padding: 0;
                    cursor: pointer;
                    font-weight: 500;
                }

                .copy-btn:hover {
                    text-decoration: underline;
                }

                .copy-feedback {
                    color: #28a745;
                    font-size: 0.9rem;
                    opacity: 0;
                    transition: opacity 0.3s ease;
                }

                .copy-feedback.visible {
                    opacity: 1;
                }

                .form-check-label {
                    font-size: 14px;
                    color: #6c757d;
                }

                .form-check-input:checked {
                    background-color: #f38a21;
                    border-color: #f38721;
                }

                .custom-input {
                    border: 1px solid #f38721;
                    border-radius: 8px;
                    overflow: hidden;
                    transition: box-shadow 0.2s ease;
                }

                /* .custom-input:focus-within {
                box-shadow: 0 0 0 3px rgba(52, 167, 234, 0.15);
            }

            .custom-input .form-control,
            .custom-input .form-select {
                border: none;
                box-shadow: none !important;
                padding-left: 0;
            }

            .custom-input .form-control:focus,
            .custom-input .form-select:focus {
                outline: none;
            }

            .input-group-text {
                background-color: transparent;
                border: none;
                padding-right: 0;
                color: "#2196F3";
            } */

                .custom-input {
                    border: 1px solid #ea7734;
                    border-radius: 12px;
                    overflow: hidden;
                    padding: 2px;
                }

                .custom-input .form-control,
                .custom-input .form-select {
                    box-shadow: none;
                    border: none;
                }

                .input-group-text {
                    background-color: transparent;
                    border: none;
                    border-radius: 0;
                    display: flex;
                    align-items: center;
                    justify-content: center;

                }

                .input-group-text i {
                    color: #f37c21;
                    font-size: 14px;
                }

                @media (max-width: 576px) {
                    /* body {
                        padding: 10px;
                    } */

                    .wizard-container {
                        padding: 20px 15px;
                        /* margin: 10px; */
                        border-radius: 15px;
                    }

                    .wizard-header h3 {
                        font-size: 20px;
                    }

                    .form-subtitle {
                        font-size: 16px;
                    }

                    .step {
                        width: 28px;
                        height: 28px;
                        font-size: 12px;
                    }

                    .detail-row {
                        flex-direction: row;
                        flex-wrap: wrap;
                    }

                    .detail-label {
                        min-width: 120px;
                    }

                    .btn-action {
                        min-width: auto;
                        padding: 8px 16px;
                        font-size: 14px;
                    }

                    .account-info {
                        align-items: center;
                        text-align: center;
                    }

                    .order-details {
                        align-items: center;
                        text-align: center;
                    }
                }

                @media (max-width: 400px) {
                    .detail-row {
                        flex-direction: column;
                        margin-bottom: 12px;
                    }

                    .detail-label {
                        margin-bottom: 4px;
                    }

                    .detail-value {
                        padding-left: 8px;
                    }

                    .action-buttons {
                        flex-direction: row;
                        gap: 10px;
                    }

                    .action-buttons .btn {
                        width: 100%;
                    }
                }

                .badge-status {
                    font-size: 0.75rem;
                    padding: 0.25em 0.6em;
                    border-radius: 20px;
                    font-weight: 500;
                }

                .action-buttons {
                    display: flex;
                    justify-content: center;
                    gap: 12px;
                    margin-top: 25px;
                }

                .step-content {
                    min-height: 340px;
                    display: flex;
                    flex-direction: column;
                }



                .success-content {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    /* text-align: center; */
                }

                .success-content .icon-success {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    text-align: center;
                    color: #41d78c;
                    font-size: 48px;
                    margin-bottom: 15px;
                }


                .account-info {
                    width: 100%;
                    max-width: 360px;
                    padding: 15px;
                    display: flex;
                    flex-direction: column;
                }
            }
        }
    </style>
</head>

<body>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalWizard" tabindex="-1" aria-labelledby="exampleModalWizardLabel" aria-hidden="true">
        <div class="modal-wizard-panel modal-dialog modal-dialog-centered modal-dialog-scrollable ">
            <div class="modal-content">
                <div class="modal-body wizard-panel">
                    <!-- <div class="wizard-panel"> -->
                    <!-- <div class="container"> -->
                    <div class="wizard-container">
                            <div class="wizard-header mb-4">
                                <h3>Lamar ke </h3>
                            </div>
                        
                        <div class="wizard-steps">
                            <div class="step-line" id="progress-line"></div>
                            <div class="step active" id="step-1">1</div>
                            <div class="step" id="step-2">2</div>
                            {{-- <div class="step" id="step-3">3</div> --}}
                        </div>

                        <!-- Step 1: Contact Information -->
                        <div class="form-step active" id="form-step-1">
                            <div class="step-content">
                                <h5 class="form-subtitle">Informasi Pelamar</h5>
                                {{-- <p class="form-description">Konfirmasi informasi kontak Anda</p> --}}
                                 <form id="wizardForm">
                                     @csrf
                                 <input type="hidden" name="id_vacancy" value="{{$vacancy->id}}">
                                <div class="mb-3">
                                    <div class="custom-input input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-person-fill"></i>
                                        </span>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="custom-input input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-envelope-fill"></i>
                                        </span>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="custom-input input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-phone-fill"></i>
                                        </span>
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Nomor Telepon" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="custom-input input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-phone-fill"></i>
                                        </span>
                                        <input type="text" name="location" class="form-control" id="location" placeholder="lokasi" required>
                                    </div>
                                </div>
                                <div class="action-buttons mt-auto">
                                    <button type="button" class="btn btn-outline-primary btn-action" data-bs-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-primary btn-action" onclick="nextStep(1, 2)">Selanjutnya</button>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2: Package Selection -->
                        <div class="form-step" id="form-step-2">
                            <div class="step-content">
                                <div class="mb-3">
                                    <div class="custom-input input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-phone-fill"></i>
                                        </span>
                                        <input type="text" name="experience" class="form-control" id="experience" placeholder="pengalaman" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="custom-input input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-phone-fill"></i>
                                        </span>
                                        <input type="text" name="major" class="form-control" id="major" placeholder="jurusan" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                     <div class="rs-contact-input">
                                         <select name="education" id="education" required>
                                            <option value="">Pilih Pendidikan Terakhir</option>
                                            <option value="SMA">SMA/SMK</option>
                                            <option value="D3">D3</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                        </div>
                                </div>
                                <div class="custom-input">
                                    <label>Upload CV (PDF/DOC):</label>
                                    <input type="file" name="cv" class="form-control" accept=".pdf,.doc,.docx" required>
                                </div>
                                <div class="action-buttons mt-auto">
                                    <button type="button" class="btn btn-outline-primary btn-action" onclick="prevStep(2, 1)">Sebelumnya</button>
                                    {{-- <button type="button" class="btn btn-primary btn-action" onclick="nextStep(2, 3)">Selanjutnya</button> --}}
                                    <button type="submit" class="btn btn-primary btn-action">Simpan</button>
                                </div>
                            </form>

                            </div>
                        </div>

                        <!-- Success Message -->
                        {{-- <div class="form-step" id="success-step">
                            <div class="step-content">
                                <div class="success-content">
                                    <i class="bi bi-check-circle-fill icon-success"></i>
                                    <h5 class="form-subtitle mb-3">Pemesanan Sukses!</h5>
                                    <p class="form-description">Pemesanan Anda akan diproses setelah bukti transfer kami terima.</p>

                                    <div class="order-details account-info">
                                        <div class="detail-row">
                                            <div class="d-md-flex">
                                                <span class="detail-label">Nomor Invoice</span>
                                                <span class="detail-colon">:</span>
                                            </div>
                                            <span class="detail-value">BE0347383CA</span>
                                        </div>
                                        <div class="detail-row">
                                            <div class="d-md-flex">
                                                <span class="detail-label">Total Pembayaran</span>
                                                <span class="detail-colon">:</span>
                                            </div>
                                            <span class="detail-value">Rp 16.650.000</span>
                                        </div>
                                        <div class="detail-row">
                                            <div class="d-md-flex">
                                                <span class="detail-label">Batas Pembayaran</span>
                                                <span class="detail-colon">:</span>
                                            </div>
                                            <span class="detail-value">03 Mei 2025, 15:40 WIB</span>
                                        </div>
                                    </div>

                                    <div class="payment-info">
                                        <p class="mb-2">Instruksi Pembayaran</p>
                                        <div class="d-flex justify-content-center align-items-center mb-1 gap-2">
                                            <span id="accountNumber">Bank BCA - 12345678</span>
                                            <button class="copy-btn" onclick="copyToClipboard('12345678')">
                                                <i class="bi bi-clipboard"></i> Copy
                                            </button>
                                        </div>
                                        <div class="mt-2">a.n. PT Orange Global</div>
                                        <div class="copy-feedback" id="copyFeedback">Berhasil disalin!</div>
                                    </div>

                                    <p class="form-description mt-3 mb-4">Setelah melakukan transfer, unggah bukti pembayaran melalui halaman Dashboard untuk mempercepat proses verifikasi.</p>

                                    <button class="btn btn-primary btn-action w-75">Dashboard</button>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <!-- </div> -->
                    <!-- </div> -->
                </div>

            </div>
        </div>
    </div>



    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        // Update progress line
        function updateProgressLine(currentStep) {
            let progressLine = document.getElementById('progress-line');
            if (currentStep === 1) {
                progressLine.style.background = 'linear-gradient(to right, #2196F3 0%, #e0e0e0 0%)';
            } else if (currentStep === 2) {
                 progressLine.style.background = 'linear-gradient(to right, #F39B21 100%, #e0e0e0 0%)';
                // progressLine.style.background = 'linear-gradient(to right, #F39B21 50%, #e0e0e0 50%)';
                // progressLine.style.background = 'linear-gradient(to right, #2196F3 50%, #e0e0e0 50%)';
            } 
            // else if (currentStep === 3) {
            //     progressLine.style.background = 'linear-gradient(to right, #F39B21 100%, #e0e0e0 0%)';
            //     // progressLine.style.background = 'linear-gradient(to right, #2196F3 100%, #e0e0e0 0%)';
            // }
        }

        // Initialize progress line
        updateProgressLine(1);

        function nextStep(currentStep, nextStep) {
            // Validate form inputs
            const currentForm = document.getElementById('form-step-' + currentStep);
            const requiredInputs = currentForm.querySelectorAll('[required]');
            let isValid = true;

            requiredInputs.forEach(input => {
                if (!input.value) {
                    input.classList.add('is-invalid');
                    isValid = false;
                } else {
                    input.classList.remove('is-invalid');
                }
            });

            if (!isValid) return;

            // Hide current step with fade out effect
            let currentStepEl = document.getElementById('form-step-' + currentStep);
            currentStepEl.style.opacity = '0';

            setTimeout(function() {
                // Hide current step
                currentStepEl.classList.remove('active');
                // Show next step
                let nextStepEl = document.getElementById('form-step-' + nextStep);
                nextStepEl.classList.add('active');
                setTimeout(() => {
                    nextStepEl.style.opacity = '1';
                }, 50);

                // Update step indicators
                document.getElementById('step-' + currentStep).classList.remove('active');
                document.getElementById('step-' + currentStep).classList.add('completed');
                document.getElementById('step-' + nextStep).classList.add('active');

                // Update progress line
                updateProgressLine(nextStep);
            }, 300);
        }

        function prevStep(currentStep, prevStep) {
            // Hide current step with fade out effect
            let currentStepEl = document.getElementById('form-step-' + currentStep);
            currentStepEl.style.opacity = '0';

            setTimeout(function() {
                // Hide current step
                currentStepEl.classList.remove('active');
                // Show previous step
                let prevStepEl = document.getElementById('form-step-' + prevStep);
                prevStepEl.classList.add('active');
                setTimeout(() => {
                    prevStepEl.style.opacity = '1';
                }, 50);

                // Update step indicators
                document.getElementById('step-' + currentStep).classList.remove('active');
                document.getElementById('step-' + prevStep).classList.remove('completed');
                document.getElementById('step-' + prevStep).classList.add('active');

                // Update progress line
                updateProgressLine(prevStep);
            }, 300);
        }

        function completeOrder() {
            // Check if terms are accepted
            if (!document.getElementById('termsCheck').checked) {
                alert('Mohon setujui syarat dan ketentuan terlebih dahulu');
                return;
            }

            // Hide current step with fade out effect
            let currentStepEl = document.getElementById('form-step-3');
            currentStepEl.style.opacity = '0';

            setTimeout(function() {
                // Hide current step
                currentStepEl.classList.remove('active');
                // Show success message
                let successStepEl = document.getElementById('success-step');
                successStepEl.classList.add('active');
                setTimeout(() => {
                    successStepEl.style.opacity = '1';
                }, 50);

                // Update step indicators - all completed
                document.getElementById('step-3').classList.remove('active');
                document.getElementById('step-3').classList.add('completed');
            }, 300);
        }

        function copyToClipboard(text) {
            navigator.clipboard.writeText(text)
                .then(() => {
                    // Show feedback
                    const feedbackEl = document.getElementById('copyFeedback');
                    feedbackEl.classList.add('visible');

                    setTimeout(() => {
                        feedbackEl.classList.remove('visible');
                    }, 2000);
                })
                .catch(err => {
                    console.error('Failed to copy: ', err);
                    alert('Nomor rekening disalin: ' + text);
                });
        }

        // Add event listener to checkbox
        document.getElementById('termsCheck').addEventListener('change', function() {
            let checkoutBtn = document.getElementById('checkoutBtn');
            checkoutBtn.disabled = !this.checked;
        });

        // Add event listeners for form validation
        document.querySelectorAll('input[required], select[required]').forEach(input => {
            input.addEventListener('input', function() {
                if (this.value) {
                    this.classList.remove('is-invalid');
                }
            });
        });

        //    $('#wizardForm').submit(function (e) {
        //     alert()
        //     e.preventDefault();
        //     const formData = new FormData(this);

        //     $.ajax({
        //         url: '{{ route('form.submit') }}',
        //         method: 'POST',
        //         data: formData,
        //         contentType: false,
        //         processData: false,
        //         success: function (res) {
        //             alert(res.message);
        //             $('#wizardModal').modal('hide');
        //             $('#wizardForm')[0].reset();
        //             currentStep = 1;
        //             showStep(currentStep);
        //         },
        //         error: function (err) {
        //             console.log(err)
        //             alert('Terjadi kesalahan. Pastikan semua data benar.');
        //         }
        //     });
        // });

        // Initialize checkout button state
        document.getElementById('checkoutBtn').disabled = true;
    </script>
</body>

</html>