var input = this.getElementByTagName("input");
for(var i = 0;i<input.length;i++){
    if(!input[i].value){
        erreur = "veuillez completer tous les champs"
    }

}