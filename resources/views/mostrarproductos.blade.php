<html>
<head>

    <title>Productos</title>
</head>

<body>

<h3>Formulario</h3>

@section("cont")
<form method="post" action="guardarcliente">
    @csrf

    <fieldset>
        <legend><strong>Datos del Comprador</strong></legend>

        <label for="nombre">Nombre</label> <br>
        <input name="nombre" id="nombre" size="50" maxlength="250" type="text"><br><br>

        <label for="apellidos">Apellidos</label> <br>
        <input name="apellidos" id="apellidos" size="50" maxlength="250" type="text"><br><br>

        <label for="direccion">Direccion</label> <br>
        <input name="direccion" id="direccion" size="50" maxlength="250" type="text"><br><br>


    </fieldset>

    <fieldset>
        <legend><strong>Datos del Producto</strong></legend>

        <label for="nombre">Nombre</label> <br>
        <input name="nombre" id="nombre" size="50" maxlength="250" type="text"><br><br>

        <label for="descripcion">Descripción</label> <br>
        <textarea name="descripcion" id="descripcion" cols="40" rows="5"></textarea><br><br>

        Foto <input name="foto" type="file"><br><br>
        <input name="contador" value="si" type="checkbox"> Añadir contador de visitas
    </fieldset>

    <br>
    <fieldset>
        <legend><strong>Datos económicos</strong></legend>

        <label for="precio">Precio</label>
        <input size="5" id="precio" name="precio" type="text"> €
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label for="impuestos">Impuestos</label>
        <select name="impuestos">
            <option value="4">4%</option>
            <option value="7">7%</option>
            <option value="16">16%</option>
            <option value="25">25%</option>
        </select>

        <br><br>
        <label>Promoción</label> <br>
        <input name="promocion" value="ninguno" checked="checked" type="radio"> Ninguno <br>

        <input name="promocion" value="portes" type="radio"> Transporte gratuito <br>
        <input name="promocion" value="descuento" type="radio"> Descuento 5%
    </fieldset>
</form>

    @auth()
        id_columna: {{$idc}}}
    @endauth

    @else

    No puedes ver este contenido

@endsection

</body></html>
