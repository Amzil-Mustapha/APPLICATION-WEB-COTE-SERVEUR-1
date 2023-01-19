let selectType = document.getElementById("type");
let selectAction = document.getElementById("action");
let inputMtbt = document.getElementById("mtbt");

// selectAction.innerHTML = '<option value="default">-- Actions By Type --</option>';

function selectChange(val) {
  $.ajax({
    type: "GET",
    url: "../app/ajax/ajaxType.php",
    data: { val: val },
    dataType: "json",
    success: function (response) {
      response[0].forEach((ele) => {
        selectAction.innerHTML += `<li>ID: ${ele.id} Nom: ${ele.nom} Beneficiaire: ${ele.beneficiaire}</li>`;
      });

      inputMtbt.value = response[1];
    },
  });
}
