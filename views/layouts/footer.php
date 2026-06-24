<!-- BOOTSTRAP 5.3 BUNDLE WITH POPPER -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- MAIN JAVASCRIPT & FRONTEND VALIDATION -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // JavaScript untuk Validasi Form (Login & Register) bawaan Bootstrap
            const forms = document.querySelectorAll('.needs-validation');
            
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });

            // Efek Smooth Scroll untuk Navigasi Landpage
            const links = document.querySelectorAll('a[href^="#"]');
            for (const link of links) {
                link.addEventListener('click', function (e) {
                    const hash = this.getAttribute('href');
                    if (hash !== '#') {
                        e.preventDefault();
                        const target = document.querySelector(hash);
                        if (target) {
                            target.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }
                    }
                });
            }
        });
    </script>
</body>
</html>