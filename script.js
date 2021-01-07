// $(document).on('click', '.limited', function() {
//     var limit = 2;
//     var counter = $('.limited:checked').length;
//     if (counter > limit) {
//       this.checked = false;
//       alert('Limite atingido');
//     }
//   });



// if(listCheckedOptions.length >= 2){
//     alert("Máx 2 Elemenos selecionados"); 
//     checkObj.checked = "";
//     return;
// }

// var listCheckedOptions = [];

// function addToList(checkObj, outputObjID){
//   //Remove do array caso o elemento já esteja inserido
//   if (listCheckedOptions.indexOf(checkObj.value) >= 0) {
//     listCheckedOptions.splice(listCheckedOptions.indexOf(checkObj.value), 1);
//   }else{
//     if(listCheckedOptions.length >= 2){ 
//       alert("Máx 2 Elemenos selecionados");
//       checkObj.checked = "";
//       return;
//     }
//     listCheckedOptions.push(checkObj.value);
//   }

//   document.getElementById(outputObjID).value = ""; //Limpa o textarea
//   document.getElementById(outputObjID).value = listCheckedOptions.join('\r\n'); //Adiciona no textarea

//   return;
// }