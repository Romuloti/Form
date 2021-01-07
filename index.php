<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
$(document).on('click', '.limited', function() {
  var limit = 2;
  var counter = $('.limited:checked').length;
  if (counter > limit) {
    this.checked = false;
    alert('Limite atingido');
  }
});

</script>


<input class="limited" type=checkbox> <br/>
<input class="limited" type=checkbox> <br/>
<input class="limited" type=checkbox> <br/>
<input class="limited" type=checkbox> <br/>





<!-- 
    <html>
  <head>
    <title>Seleção de Itens</title>
    <script type="text/javascript">
      //Array que guarda a ordem em que os elementos foram inseridos
      var listCheckedOptions = [];

      function addToList(checkObj, outputObjID)
      {
        //Remove do array caso o elemento já esteja inserido
        if (listCheckedOptions.indexOf(checkObj.value) >= 0) {
          listCheckedOptions.splice(listCheckedOptions.indexOf(checkObj.value), 1);
        } else { //Adiciona casojá esteja inserido
          listCheckedOptions.push(checkObj.value);
        }

//        alert(listCheckedOptions); //debug para verificar os elementos inseridos
        document.getElementById(outputObjID).value = ""; //Limpa o textarea
        document.getElementById(outputObjID).value = listCheckedOptions.join('\r\n'); //Adiciona no textarea

        return;
      }
    </script>
  </head>
  <body>
    <form name="myform">
      <input type="checkbox" name="fruit[]" value="Oranges" onClick="addToList(this, 'txt1')"><font color="#808080">Oranges</font><br>
      <input type="checkbox" name="fruit[]" value="Apples"  onClick="addToList(this, 'txt1')"><font color="#808080">Apples</font><br>
      <input type="checkbox" name="fruit[]" value="Grapes"  onClick="addToList(this, 'txt1')"><font color="#808080">Grapes</font><br>
      <textarea rows="4" cols="10" name="txt1" id="txt1" style="color:#808080"  readonly></textarea>
    </form>
  </body>
</html> -->