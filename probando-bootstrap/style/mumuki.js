function escalera(altura){
	var alto = [];
	var escalera = "#";
	var espacio = " ";
	for (var i = 0; i<altura; i++){
		alto.push(espacio.repeat(altura-i-1)+ escalera.repeat(i+1))
	}

	return alto;
}

function factorial(numero){
if(numero==0){
return 1;
}else{
return numero * factorial(numero - 1);
}
}


function masMenos(arrayUno){
var arrayDos=[];
var posicion1=0;
var posicion2=0;
var posicion3=0;
  
for(var i=0; i<arrayUno.length; i++){
if(arrayUno[i]>0){
posicion1=posicion1+1;
}
if(arrayUno[i]==0){
posicion2=posicion2+1;
}
if(arrayUno[i]<0){
posicion3=posicion3+1;
}
var positivo = posicion1/arrayUno.length;
var cero = posicion2/arrayUno.length;
var negativo = posicion3/arrayUno.length;
}
 arrayDos.push(positivo);
 arrayDos.push(cero);
 arrayDos.push(negativo);
  
return arrayDos
}


 function seAbre(ingresoDelLunes,Minimo) {
var alumnos=0;
for (var i=0;i<ingresoDelLunes.length; i++)
{
if(ingresoDelLunes[i]<=0)
{
var alumnos= alumnos+1;
}
}
return Minimo<=alumnos;
}
function aperturas(ingresos,minimo)
{
var Mapa=[]
for(var i=0; i<ingresos.length;i++)
{
if(seAbre(ingresos[i],minimo))
{
Mapa.push(true);
}
else
{
Mapa.push(false);
}
}
return Mapa;
}


function productoria(array)
{
var multiplicador = 1
for(var i = 0; i<array.length; i++)
{
multiplicador = multiplicador * array[i]
}
return multiplicador;
}

function alturaArbolUtopico(ciclos){
	var altura = 1;
	for (var i = 0; i < ciclos; i++) {
		if (i % 2 == 0) {
			altura *=2;
		}else{
			altura ++;
		}
	}
	return altura;
}