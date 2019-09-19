const Swal = require('sweetalert2');

const delete_action = (e) => {
    alert();
};


$('#sidebar-toggle').click(e => {
    e.preventDefault();
    setTimeout(() => {
        window.dispatchEvent(window.EVENT);
    }, 300);
});