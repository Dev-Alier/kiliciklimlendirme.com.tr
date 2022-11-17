// function removeDataOnList(r,id) {
//     var rowIndex = r.parentNode.parentNode.rowIndex;
//     var id = id;
//     var CSRF_TOKEN = $('meta[name="csrf_token"]').attr('content');
//     swal.fire({
//         title: 'Silmek İstediğinize Emin Misiniz?',
//         text: 'Silinen Veriler Geri Döndürülemez!',
//         type: 'warning',
//         showCancelButton: true,
//         confirmButtonColor: '#d33',
//         confirmButtonText: 'Evet, Sil!',
//         cancelButtonText: 'İptal',
//         cancelButtonColor: 'blue',
//     }).then(function (result){
//         if (result.value) {
//     $.ajax({
//         url: "delete/" + id,
//         type: 'DELETE',
//         data: {
//             "id": id,
//             "_token": CSRF_TOKEN,
//         },
//         success: function() {
//             document.getElementById("datatable").deleteRow(rowIndex);

//         }
//     });
// }})
// }

$('.delete-confirm').click(function (event) {
    var form = $(this).closest("form");
    event.preventDefault();
    swal.fire({
            title: 'Silmek İstediğinize Emin Misiniz?',
            text: 'Silinen Veriler Geri Döndürülemez!',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Evet, Sil!',
            cancelButtonText: 'İptal',
            cancelButtonColor: 'blue',
        })
        .then((willDelete) => {
            if (willDelete.value) {
                form.submit();
            }
        });
});

// change save button text and disable
$('.saveButton').click(function (event) {
    var form = $(this).closest("form");
    var button =  document.getElementsByClassName("saveButton");
    button[0].innerHTML = "Kaydediliyor...";
    button[0].disabled = true;
    form.submit();
});


// only numeric

$(".numeric").on('input', function(e) {
    $(this).val($(this).val().replace(/[^0-9,+.]/g, ''));
});
$(".phone").on('input', function(e) {
    $(this).val($(this).val().replace(/[^0-9,+]/g, ''));
});


// change status on list item click
function changeText(id) {
    var text = $('#changeStatusBtn-' + id).text('İşleniyor...');
   $('#changeStatusBtn-' + id).addClass('disabled');
}


// set select image

function setImage(image) {
    if (image.files && image.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#img').attr('src', e.target.result).width(100).height(100);
        };
        reader.readAsDataURL(image.files[0]);
    }
}



/**
 * show the offer details
 */

$(document).ready(function() {

    $('body').on('click', '#showOffer', function(event) {
        event.preventDefault();
        var id = $(this).data('id');
        $.get('/admin/teklifler/teklif-detay/' + id, function(data) {
            var newData = data.data;
            $('#practice_modal').modal('show');
            $('#name').val(newData.name);
            $('#domain').val(newData.domain_name);
            $('#offer').val(newData.offer);
            $('#message').val(newData.message);
            $('#phone').val(newData.phone);
            $('#email').val(newData.email);
        })
    });
    $('.submit').on('click', function() {
        $('#practice_modal').modal('hide');

    })

});


