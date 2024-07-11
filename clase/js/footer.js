document.addEventListener('DOMContentLoaded', function() {
    // Get the modal
    var modal = document.getElementById("invoiceModal");

    // Get the <span> element that closes the modal
    var span = modal.querySelector(".close");

    // Function to open the modal
    function openModal(content) {
        document.getElementById('invoiceContent').innerText = content;
        modal.style.display = "block";
    }

    // Function to close the modal
    function closeModal() {
        modal.style.display = "none";
    }

    // When the user clicks on a link, open the modal 
    document.querySelectorAll('.course-link').forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            var course = this.getAttribute('data-course');
            openModal('Factura del curso de ' + course);
        });
    });

    // When the user clicks on <span> (x), close the modal
    span.addEventListener('click', function() {
        closeModal();
    });

    // When the user clicks anywhere outside of the modal, close it
    window.addEventListener('click', function(event) {
        if (event.target == modal) {
            closeModal();
        }
    });
});