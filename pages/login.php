<section class="auth-section d-flex align-items-center justify-content-center py-3">
    <div class="container">
        <div class="bg-white p-4 p-md-5 rounded border shadow-sm mx-auto" style="max-width: 460px;">
            <div class="text-center mb-4">

                <h3 class="fw-bold mb-1">Login / Register</h3>
                <p class="small text-secondary mb-0">Pastikan Anda sudah terdaftar untuk akses booking ruangan.</p>
            </div>
            <form id="loginForm">
                <div class="mb-3">
                    <label class="form-label fw-bold small">USERNAME</label>
                    <div class="input-group input-group-m">
                        <span class="input-group-text bg-light"><i class="bi bi-person"></i></span>
                        <input type="text" id="usernameInput" class="form-control bg-light" placeholder="Masukkan username" required>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label fw-bold small">PASSWORD</label>
                    <div class="input-group input-group-m">
                        <span class="input-group-text bg-light"><i class="bi bi-key"></i></span>
                        <input type="password" class="form-control bg-light" placeholder="Masukkan password" required>
                    </div>
                </div>
                <div class="d-flex justify-content-end gap-2">
                    <a href="index.php?page=home" class="btn btn-outline-secondary px-4 py-2 rounded-2 fw-semibold">Batal</a>
                    <button type="submit" class="btn btn-primary px-4 py-2 rounded-2 fw-semibold">Login</button>
                </div>
            </form>
            <div id="loginFeedback" class="mt-3" style="display:none;"></div>
        </div>
    </div>
</section>