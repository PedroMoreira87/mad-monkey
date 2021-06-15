var arquivo;
var formData;

document.addEventListener("DOMContentLoaded", function() {
    
    const addTitleConfirmation = document.getElementById("add-title-confirmation");

    const titleType = document.getElementById("title-type-select");

    titleType.addEventListener("click", function(){

        const length = document.getElementById("length");
        const seasons = document.getElementById("seasons");

        if(titleType.value == "series"){
            length.style.display = "none";
            seasons.style.display = "block";
        }
        else{
            seasons.style.display = "none";
            length.style.display = "block";
        }
    })

    addTitleConfirmation.addEventListener("click", function(){
        var frm = $('#form-admin');
        var formData = new FormData(frm[0]);
        
            $request = $.ajax({
                url: "../../php/admin_page.php",
                type:"POST",
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                success: function() {
                    alert("Título inserido com sucesso")
                }
            });
    });
});