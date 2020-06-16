contenedor = document.querySelector('#seccion')

const regiones = ['Gran Caracas', 'Oriente']

const oficinas = [
  {nombreOficina: 'Principal', region: 'Gran Caracas', direccion: 'Centro Caracas' },
  {nombreOficina: 'Principal', region: 'Gran Caracas', direccion: 'Centro Caracas' },
  {nombreOficina: 'Bolivar Centro', region: 'Oriente', direccion: 'San Felix' }
]

const agregar = () => {
  for(let aux in regiones){
  contenedor.innerHTML += `
          <div class="row ml-1">
            <h5 class="shadow-none bg-light mt-1 rounded font-weight-bold"><span class="mdi mdi-office-building mr-1"></span>${regiones[aux]}</h5> 
          </div>
          <hr class="my-3">
  `
    for (auxb in oficinas){
      if(regiones[aux]===oficinas[auxb].region){
      contenedor.innerHTML += `
          <div class="row py-1">
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body text-center">
                <img src="../bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/img/saime.png" width="60" height="50"alt="">
                <h5 class="card-title my-2">${oficinas[auxb].nombreOficina}</h5>
                <p class="card-text text-justify">Dirección: ${oficinas[auxb].direccion}</p>
                <p class="card-text text-justify">Horario: Lunes a Viernes de 8:30 AM a 3:30 PM. </p>
              </div>
            </div>
          </div>
          `
      }
    }
}
}

agregar()






<?php
    foreach($oficinas as $valor){
      echo '
      <div class="bg-success">
      <img src="../bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/img/saime.png" width="60" height="50"alt="">
      <h5 class="card-title my-2">' .$valor['nombreOfic']. '</h5>';
      echo '<p class="card-text text-justify">Dirección: ' .$valor['direccionOfic']. '</p>';
      echo '<p class="card-text text-justify">Horario: ' .$valor['horarioOfic']. '</p></div>';  
     } 
     ?>