$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});

module.exports = delete_action = (e) => {
    e.preventDefault();
    
    Swal.fire({
        title: 'are you sure!',
        text: 'Do you want to detele this register ?',
        type: 'info',
        showCancelButton: true,
        confirmButtonColor: 'hsl(120, 50%, 50%, 1)',
        cancelButtonColor: 'hsl(0, 50%, 50%, 1)',
        confirmButtonText: 'Yes !! '
    }).then(({value}) => {
        if (value) {
            e.target.form.submit()
        }
    })
};