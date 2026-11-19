<section class="auth-section d-flex align-items-center justify-content-center py-5">
    <div class="container">
        <div class="bg-white p-4 p-md-5 rounded-4 border shadow-lg mx-auto" style="max-width: 460px;">
            <div class="text-center mb-4">
                <div class="brand-icon rounded-3 d-inline-flex align-items-center justify-content-center text-white fs-4 mb-2">
                    <i class="bi bi-shield-lock"></i>
                </div>
                <h3 class="fw-bold mb-1">Login / Register</h3>
                <p class="small text-secondary mb-0">Masuk untuk mengelola peminjaman ruangan GKI Raya Hankam</p>
            </div>
            <hr class="mb-4">
            <form id="loginForm">
                <div class="mb-3">
                    <label class="form-label fw-bold small">USERNAME</label>
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bg-light"><i class="bi bi-person"></i></span>
                        <input type="text" id="usernameInput" class="form-control bg-light" placeholder="Masukkan username" required>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label fw-bold small">PASSWORD</label>
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bg-light"><i class="bi bi-key"></i></span>
                        <input type="password" class="form-control bg-light" placeholder="Masukkan password" required>
                    </div>
                </div>
                <div class="d-flex justify-content-end gap-2">
                    <a href="index.php?page=home" class="btn btn-outline-secondary px-4 py-2 rounded-3 fw-semibold">Batal</a>
                    <button type="submit" class="btn btn-accent px-4 py-2 rounded-3 fw-semibold">Login</button>
                </div>
            </form>
            <div id="loginFeedback" class="mt-3" style="display:none;"></div>
        </div>
    </div>
</section>