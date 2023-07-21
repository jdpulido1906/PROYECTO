function validar() {
        var idproducto = document.getElementByName("idproducto").value;
        var nombre = document.getElementByName("nombre").value;
        var precio = document.getElementByName("precio").value;
        var tallas = document.getElementByName("tallas").value;
        var diseno = document.getElementByName("diseno").value;

        if (idproducto === "" || nombre === "" || precio === "" || tallas === "" || diseno === "") {
            alert("Por favor, complete todos los campos.");
            return false;
          }
        
        // Si todos los campos están llenos, envía el formulario
        document.forms[0].submit();
        alert("SE HA REGISTRADO EL PRODUCTO");
      }