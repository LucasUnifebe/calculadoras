function botao(num){
   
    document.Calc.visor.value = document.Calc.visor.value + num;
}

function reset(){
    document.Calc.visor.value ="";
    
}


function resultado(){
    var salvar = document.Calc.visor.value;
    if(salvar){
  document.Calc.visor.value = eval(salvar);
    }

}