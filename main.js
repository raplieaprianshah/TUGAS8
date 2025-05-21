document.addEventListener("DOMContentLoaded", function () {
    const deleteLinks = document.querySelectorAll(".delete-link");

    deleteLinks.forEach(function(link) {
        link.addEventListener("click", function(e) {
            const confirmed = confirm("Yakin ingin menghapus data ini?");
            if (!confirmed) {
                e.preventDefault();
            }
        });
    });
});
