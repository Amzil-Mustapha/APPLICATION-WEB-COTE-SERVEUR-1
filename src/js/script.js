let selectType = document.getElementById('type');
let selectAction = document.getElementById('action');

// selectAction.innerHTML = '<option value="default">-- Actions By Type --</option>';

function selectChange(val) {
    $.ajax({
        type: "GET",
        url: "../app/ajax/ajaxType.php",
        data: {val:val},
        dataType: "json",
        success: function (response) {
            response.forEach(ele => {
                selectAction.innerHTML += `<li>ID: ${ele.id} Nom: ${ele.id}</li>`
            });
        }
    });
}