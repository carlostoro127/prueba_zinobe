//var ruta = "https://www.uis.edu.co/webUIS/es/top.html";

function llamarasincrono(url, id_contenedor){
  var pagina_requerida = false
  if (window.XMLHttpRequest) {
    pagina_requerida = new XMLHttpRequest()
  } else if (window.ActiveXObject){ 
    try {
      pagina_requerida = new ActiveXObject("Msxml2.XMLHTTP")
    }catch (e){ 
     try{
       pagina_requerida = new ActiveXObject("Microsoft.XMLHTTP")
     }catch (e){}
	 }
  }else
  return false
  pagina_requerida.onreadystatechange=function(){ 
   cargarpagina(pagina_requerida, id_contenedor)
  }
  pagina_requerida.open('GET', url, true) 
  pagina_requerida.send(null)
}


function cargarpagina(pagina_requerida, id_contenedor){
  if (pagina_requerida.readyState == 4 && (pagina_requerida.status==200 || window.location.href.indexOf("http")==-1))
   document.getElementById(id_contenedor).innerHTML=pagina_requerida.responseText
}

function ocultarTabla(){
  if (navigator.appVersion.indexOf("MSIE 6.0") != -1) {
   document.getElementById("tabla_oculta").style.display = 'none';
  }
}


//***************************************************************************
//***************************************************************************
function esta_vacio(cadena)
{
	if (cadena.length==0) return true;
	return false;
}

//***************************************************************************
//***************************************************************************
function es_numero(cadena){
  var regex = /^\d*$/;            
  resp = regex.test(cadena);
  return resp;
}

function es_texto(cadena)
{
	var longit = cadena.length;
	
	for(k=0;k<longit;k++)
	{
		var car = cadena.charAt(k);
		if ((car=="'") || (car=='"'))
			return false;
	}
	if (longit>0) return true;
	else return false;
}

function es_numero_positivo(cadena)
{
	var longit = cadena.length;

	for(k=0;k<longit;k++)
	{
		var ch = cadena.charAt(k);
    if((ch < "0" || ch > "9"))
		return false;
	}
	if (longit>0) return true;
	else return false;
}


//********************************************************************************
//********************************************************************************
function es_alfanumerica(cadena){
	resp=true;
	if( cadena.length != 0)
	{
	  for (var i = 0; i < cadena.length;i++)
	  {
	       var ch= cadena.charAt(i);          
	       if((ch < "A" || ch > "Z") && (ch< "a" || ch >"z") && (ch < "0" || ch > "9"))
	       {
				resp= false;
				break;
	       }
	  }
	  if (resp)
	  {
		return true;
	  }
	  else 
	  {
		return false;
	  }
	}
	else 
	{
	  return true;
	}	
}

//********************************************************************************
//********************************************************************************
function alpha(cadena ){
	resp=true;
	if( cadena.length != 0)
	{
	  for (var i = 0; i < cadena.length;i++)
	  {
	       var ch= cadena.charAt(i);          
	       if((ch < "A" || ch > "Z") && (ch< "a" || ch >"z"))
	       {
				resp= false;
				break;
	       }
	  }
	  if (resp)
	  {
		return true;
	  }
	  else 
	  {
		return false;
	  }
	}
	else 
	{
	  return true;
	}	
}

//***************************************************************************
//***************************************************************************
function isValidAddress (addr)
{
	if (!isNaN(addr))
	{
		return false;	
	}				
	var c;
	var len = addr.length;
	for (i = 0; i < len; i++)
	{
		c = addr.charAt(i);
		if ( !( ( c < "A" || c > "Z" || c < "a" || c >"z" )  ||
				c == ' ' || c == ',' ||  
				c == '-' || c == '.' || c == '&' ||
				c == '#' || c == '/' || c == '%') )
		{

			return false;	
		}
	}
	return true;
}

//***************************************************************************
//***************************************************************************
function ok_Email(email)
{
  var regex = /^(([\-\w]+)\.?)+@(([\-\w]+)\.?)+\.[a-zA-Z]{2,4}$/;
   if(regex.test(email)){
	   return true;
	}
	else{
		alert("Verifique la dirección de correo electrónico. \nPuede contener caracteres no válidos o espacios en blanco.");
	  return false;
	}
}

//***************************************************************************
//***************************************************************************
function esta_seleccionado(campo)
{
	if (campo!="-1")
	{
		return true;
	}
	return false;
}

//***************************************************************************
//***************************************************************************
function solo_numeros(cadena)
{
//	regex=/[^0-9\.]/;
	regex=/[^0-9]/g;
	cadena.value = cadena.value.replace(regex,"");
}




//***************************************************************************
//***************************************************************************
function es_mayor_a(numero,valor)
{
	if (numero>valor)
	{
		return true;
	}
	return false;
}


//***************************************************************************
//***************************************************************************
function imprimirPagina() {
  if (window.print)
    window.print();
  else
    alert("Lo siento, pero a tu navegador no se le puede ordenar imprimir" +
      " desde la web. Hazlo desde los menús");
}


//***************************************************************************
//***************************************************************************
function seleccionar_todos_chk() {
  var nb;
  var chk;

  if ( document.getElementById("seleccion_todos").value == 0) chk=1;
  else chk=0;
  var items=document.getElementsByName("seleccion_valor");
  for(var i=0;i<items.length;i++){
    items[i].checked = chk;
  }
  document.getElementById("seleccion_todos").value = chk;
}

var textoAnterior = '';
function cumpleDecimal(simpleTexto,digitos,decimales)
{
  var cad_exp= "^(|([0-9]{1,"+digitos+"}(\\.([0-9]{1,"+decimales+"})?)?))$";
  var expresion = new RegExp(cad_exp);            
  //var expresion = new RegExp("^(|([0-9]{1,8}(\\.([0-9]{1,2})?)?))$");

  if(expresion.test(simpleTexto))
    return true;
  return false;
}

function revisaDecimal(texto,digitos,decimales)
{
   //si comienza con un punto, le agregamos un cero
   if(texto.value.substring(0,1) == '.') 
      texto.value = '0' + texto.value;

   //si no cumples las reglas, no te dejo escribir
   if(!cumpleDecimal(texto.value,digitos,decimales))
     texto.value = textoAnterior;
   else //todo en orden
     textoAnterior = texto.value;
}

function get_url_parametro( name ){
  var regexS = "[\\?&]"+name+"=([^&#]*)";
  var regex = new RegExp ( regexS );
  var tmpURL = window.location.href;
  var results = regex.exec( tmpURL );
  if( results == null )
    return"";
  else
    return results[1];
}

function tamano(frame)
{
  var alto=
    document.getElementById(frame).contentWindow.document.body.scrollHeight;

  if (alto>500){
    document.getElementById(frame).height= alto;
  }else{
	document.getElementById(frame).height=500;
  }
}


//***************************************************************************
//***************************************************************************
function nuevoAjax()
{ 
	var xmlhttp = false; 
	try
	{ 
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP"); // Creacion del objeto AJAX para navegadores no IE.
	} catch (e)
	{ 
		try 
		{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); // Creacion del objet AJAX para IE.
		} catch (E) 
		{
			xmlhttp = false;
		}
	}
	
	if (!xmlhttp && typeof XMLHttpRequest != 'undefined')
	{
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp; 
}

function ajax_consulta_municipios(codigo_depto,div,campo)
{
  aleatorio=Math.random(); 
  ajax = nuevoAjax();
  codigo_depto = document.getElementById(codigo_depto).value;
  parametros = "codigo_depto="+codigo_depto+"&campo_municipio="+campo+"&aleatorio="+aleatorio;
  url = "../general/ajax_municipios.jsp";
  ajax.onreadystatechange=function()
  {
    if(ajax.readyState==1){
      document.getElementById(div).innerHTML = "<img src='../../imagenes/ajax-loader_rojo.gif' widht='25' height='25' border='0'>Buscando Municipios..."; 
    }else if(ajax.readyState==4){
      if(ajax.status==200){
        document.getElementById(div).innerHTML = ajax.responseText;
      }else if(ajax.status==404){
        document.getElementById(div).innerHTML = "La página no existe";
      }else{
        document.getElementById(div).innerHTML = "Error:"+ajax.status; 
      }
    }
  }
  ajax.open("POST",url,true);
  ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded'); 
  ajax.send(parametros); 

}