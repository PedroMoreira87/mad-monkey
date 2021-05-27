document.addEventListener("DOMContentLoaded", function() {
    
    const viewTitles = document.getElementById("view-titles");
    const addTitle = document.getElementById("add-title");
    
    const addTitleButton = document.getElementById("add-title-button");
    const addTitleConfirmation = document.getElementById("add-title-confirmation");
    const back = document.getElementById("back");

    const titleType = document.getElementById("title-type-select");

    addTitleButton.addEventListener("click", function(){

        viewTitles.style.display = "none";
        addTitle.style.display = "block";

    });

    
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

        alert("tudo certo")

    });

    back.addEventListener("click", function(){
        
        addTitle.style.display = "none";
        viewTitles.style.display = "block";

    });



});