$(document).ready(function () {
    $('#btnLogout').click(function (e) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You want to Logout",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes,logout!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: base_url('Login/logout'),
                success: (response) => {
                    window.location.href = 'http://127.0.0.1/ticket/Login/login';
                }
            })
        }
    })
})


(function () {
    var lastMove = Date.now();

    document.onmousemove = function () {
        lastMove = Date.now();
    }

    setInterval(function () {
        var diff = Date.now() - lastMove;
        if (diff > 1800000) {
            $.ajax({
                url: base_url('Login/logout'),
                success: (response) => {
                        window.location.href = 'http://127.0.0.1/ticket/Login/login';
                }
            })
        }
    }, 1800000);
}());
})
