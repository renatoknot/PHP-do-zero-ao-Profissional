<form method="GET" action="calc.php">
    <input type="number" name="n1" id="n1" onblur="numeroVazio('n1')">
    <select name="operacao">
        <option value="-">-</option>
        <option value="+">+</option>
        <option value="/">/</option>
        <option value="*">*</option>
    </select>
    <input type="number" name="n2" id="n2" onblur="numeroVazio('n2')">
    <input type="submit" value="Calcular">
</form>

<!-- <script>
    function numeroVazio(id){
        let valor = document.getElementById(id).value;
        console.log('teste1');
        if (valor.length < 1) {
            console.log('teste2');
            alert("Informe um valor nos campos númericos.");
            return;
        }
    }
</script> -->