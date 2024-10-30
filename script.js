let filasA = 0;
let columnasA = 0;
let contenedorA = null;

let filasB = 0;
let columnasB = 0;
let contenedorB = null;

let filasC = 0;
let columnasC = 0;
let contenedorC = null;

function limpiardivpadre(contenedor, clase) {
  const div_hijos = Array.from(document.getElementsByClassName(clase));
  div_hijos.forEach(element => element.remove());
}

function creardiv(contenedor, filas, columnas, clase) {
  limpiardivpadre(contenedor, clase);
  let c = 1;
  for (let x = 0; x < filas; x++) {
    for (let y = 0; y < columnas; y++) {
      const div = document.createElement('td');
      div.setAttribute('id', c);
      div.setAttribute('class', clase);
      contenedor.append(div);
      c++;
    }
  }


//   for (let i = 0; i < filas; i++) {
//     for (let y = 0; y < columnas; y++) {

//     const seat = $('<div class="seat"></div>').attr('data-seat', i + 1);
//     if (reservedSeats.includes(i + 1)) {
//         seat.addClass('reserved');
//         seat.text('X'); // Indicar que está reservado
//     } else {
//         seat.click(function () {
//             $(this).toggleClass('selected');
//             updateSelectedSeats();
//         });
//     }
//     $('#seat-map').append(seat);
// }


// }
}

function agregarColumnaA() {
  contenedorA = document.getElementById('grid-container_A');
  columnasA = document.getElementById('columnas').value;
  filasA = document.getElementById('filas').value;
  contenedorA.style.gridTemplateColumns = `repeat(${columnasA}, 1fr)`;
  creardiv(contenedorA, filasA, columnasA, 'hijo_A');
}

function agregarFilaA() {
  contenedorA = document.getElementById('grid-container_A');
  columnasA = document.getElementById('columnas').value;
  filasA = document.getElementById('filas').value;
  contenedorA.style.gridTemplateRows = `repeat(${filasA}, 1fr)`;
  creardiv(contenedorA, filasA, columnasA, 'hijo_A');
}

function agregarColumnaB() {
  contenedorB = document.getElementById('grid-container_B');
  columnasB = document.getElementById('columnas_B').value;
  filasB = document.getElementById('filas_B').value;
  contenedorB.style.gridTemplateColumns = `repeat(${columnasB}, 1fr)`;
  creardiv(contenedorB, filasB, columnasB, 'hijo_B');
}

function agregarFilaB() {
  contenedorB = document.getElementById('grid-container_B');
  columnasB = document.getElementById('columnas_B').value;
  filasB = document.getElementById('filas_B').value;
  contenedorB.style.gridTemplateRows = `repeat(${filasB}, 1fr)`;
  creardiv(contenedorB, filasB, columnasB, 'hijo_B');
}
function agregarColumnaC() {
  contenedorC = document.getElementById('grid-container_C');
  columnasC = document.getElementById('columnas_C').value;
  filasC = document.getElementById('filas_C').value;
  contenedorC.style.gridTemplateColumns = `repeat(${columnasC}, 1fr)`;
  creardiv(contenedorC, filasC, columnasC, 'hijo_C');
}

function agregarFilaC() {
  contenedorC = document.getElementById('grid-container_C');
  columnasC = document.getElementById('columnas_C').value;
  filasC = document.getElementById('filas_C').value;
  contenedorC.style.gridTemplateRows = `repeat(${filasC}, 1fr)`;
  creardiv(contenedorC, filasC, columnasC, 'hijo_C');
}




