
  <form method="GET" id="formulario">
    <label for="valor1">Ingrese un numero: </label>
    <input type="number" name="valor1">
    <label for="valor2">Ingrese un numero: </label>
    <input type="number" name="valor2">

    <select name="operaciones">
        <option value="sumar">sumar</option>
        <option value="restar">restar</option>
        <option value="multiplicar">multiplicar</option>
        <option value="dividir">dividir</option>
    </select>
    <input type="button" value="Calcular">
  </form>  

  <div id="conteiner"></div>

  <script src="main.js"></script>