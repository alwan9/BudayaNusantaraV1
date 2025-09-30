<script>
    // navbar
    document.addEventListener('DOMContentLoaded', function() {
        const burgerBtn = document.getElementById('burger-btn');
        const burgerIcon = document.getElementById('burger-icon');
        const closeIcon = document.getElementById('close-icon');
        const mobileMenu = document.getElementById('mobile-menu');

        if (burgerBtn && burgerIcon && closeIcon && mobileMenu) {
            burgerBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                burgerIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });

            document.addEventListener('click', function(e) {
                if (!burgerBtn.contains(e.target) && !mobileMenu.contains(e.target)) {
                    mobileMenu.classList.add('hidden');
                    burgerIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });
        }
    });





    // pop up report
    function openModal() {
        document.getElementById("popupModal").classList.remove("hidden");
    }

    function closeModal() {
        document.getElementById("popupModal").classList.add("hidden");
    }



    // redirect dan share social media
    function shareTo(platform) {
        const url = window.location.href;
        const text = "Kayaknya seru nih acaranya, mau ikut bareng?";

        let shareUrl = "";

        switch (platform) {
            case 'wa':
                shareUrl = `https://wa.me/?text=${encodeURIComponent(text + url)}`;
                break;
            case 'fb':
                shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`;
                break;
            case 'ig':
                shareUrl = `https://www.instagram.com/direct/inbox/`;
                // alert("Kamu akan diarahkan ke Instagram Direct. Silakan tempel link halaman ini secara manual.");
                break;
            default:
                alert("Platform tidak dikenali.");
                return;
        }

        window.open(shareUrl, "_blank");
    }

    // q and a dropp down
    function toggleAnswer(id) {
        const answer = document.getElementById(`answer-${id}`);
        answer.classList.toggle("hidden");
    }
</script>


</body>

</html>
