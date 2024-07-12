document.addEventListener('DOMContentLoaded', function() {
    // Get the modal
    let modal = document.getElementById("invoiceModal");

    // Get the <span> element that closes the modal
    let span = modal.querySelector(".close");

    // Function to open the modal
    function openModal(content) {
        document.getElementById('invoiceContent').innerHTML = content;
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
            let invoiceContent = this.getAttribute('data-invoice');
            openModal(invoiceContent);
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

// Function to move the file
function buy() {
    window.location = './cursos.php';
}