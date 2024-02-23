</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script>
    // Mengambil URL saat ini
    var currentUrl = window.location.href;
    // Mendapatkan semua elemen anchor di dalam navbar
    var navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    // Loop melalui setiap link
    navLinks.forEach(function(link) {
        // Mengambil URL dari link
        var linkUrl = link.href;
        // Memeriksa apakah URL saat ini sama dengan URL link
        if (currentUrl === linkUrl) {
            // Menambahkan kelas 'active' ke link jika URL-nya cocok
            link.classList.add('active');
        }
    });
</script>

</html>