$(function () {
    $(".update_cart").on('change', function () {
        let self = $(this);
        let quantity = parseInt(self.val()) < 0 ? 1 : self.val();
        let url = $(this).data('route');
        console.log(quantity);
        $.ajax({
           url: url,
            method: "POST",
            data: {
                id: self.parents("tr").attr("data-id"),
                quantity: quantity,
                _method: "PATCH"
            },
            success: function (response) {
                window.location.reload();
            }
        })
    });

    $(".remove-from-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);
        let url = $(this).data('route');
        $.ajax({
            url: url,
            method: "DELETE",
            data: {
                id: ele.parents("tr").attr("data-id")
            },
            success: function (response) {
                window.location.reload();
            }
        });
    });
})
