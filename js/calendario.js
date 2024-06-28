const meses = [
  "Ene",
  "Feb",
  "Mar",
  "Abr",
  "May",
  "Jun",
  "Jul",
  "Ago",
  "Sep",
  "Oct",
  "Nov",
  "Dic",
];

const calendar = document.querySelector("calendar-range");
// Obtener la fecha actual
const fechaActual = new Date();
// Obtener el año actual
const anio = fechaActual.getFullYear();
// Obtener el mes actual (agregar 1 porque los meses se cuentan desde 0)
const mes = String(fechaActual.getMonth() + 1).padStart(2, "0");
// Obtener el día actual
const dia = String(fechaActual.getDate()).padStart(2, "0");
// Formatear la fecha en el formato YYYY-MM-DD
const fechaFormateada = `${anio}-${mes}-${dia}`;

if (calendar) {
  for (let index = 0; index < 5; index++) {
    setTimeout(() => {
      calendar.min = fechaFormateada;
    }, 500);
  }
}

const fechaInicial = document.querySelector(".fechas > .initial");
const fechaFinal = document.querySelector(".fechas > .final");
const calendarButton = document.querySelector(".reservation-date");
const calendario = document.querySelector(".reservation-date > .calendario");
const cuerpo = document.querySelector("body");
calendario.style.display = "none";

calendarButton.addEventListener("click", (event) => {
  event.stopPropagation(); // Evitar que el clic se propague al cuerpo
  if (calendario.style.display === "none") {
    calendario.style.display = "block";
  }
});

document.addEventListener("click", cerrarModalFuera);

function cerrarModalFuera(event) {
  if (!calendario.contains(event.target)) {
    calendario.style.display = "none";
  }
}

calendar.addEventListener("change", () => {
  console.log("cambio");
  const fechasArray = calendar.value.split("/");
  const startDate = reformatearFecha(fechasArray[0]);
  const endDate = reformatearFecha(fechasArray[1]);
  fechaInicial.innerHTML = startDate;
  fechaFinal.innerHTML = endDate;
});

function reformatearFecha(fecha) {
  const partesFecha = fecha.split("-");
  let mes = parseInt(partesFecha[1]);
  mes -= 1;
  mes = meses[mes];
  partesFecha[1] = mes;
  const nuevaFecha = `${partesFecha[2]} ${partesFecha[1]} ${partesFecha[0]}`;
  return nuevaFecha;
}
