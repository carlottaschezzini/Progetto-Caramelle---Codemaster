<!DOCTYPE html>
<html>
<head>

	<title></title>
</head>
<body>



<table border=”1″> 
<tr>
  <td><B>Voti</B></td>
  <td><B>Alunni</B></td>
</tr> 

<script type=”text/javascript”> 
 i=0;
 
 //inizio blocco di istruzioni
 while(i<alunni.length) {
  document.write(“<tr>”);

  //notare l’indice variabile
  document.write(“<td>”+alunni[i]+”</td>”);
  document.write(“<td>”+voti[i]+”</td>”);
  document.write(“</tr>”);

  //fine blocco di istruzioni 

  i++; //aumento l’indice di 1
 } 
</script>
</table>


</body>
</html>