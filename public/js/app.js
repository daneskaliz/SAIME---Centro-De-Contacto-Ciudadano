new Vue({
  el: '#app',
  vuetify: new Vuetify(),
  data: () => ({
    //snack: true,
    camposPorValidar: [],
    preguntas_a:[
      'Lugar de nacimiento de su madre',
      'Segundo nombre de su abuela paterna',
      'Fecha de nacimiento de su padre'
    ],
    preguntas_b:[
      'Nombre de su primera mascota',
      'Marca de su primer carro',
      'Fecha de su graduación'
    ],
    preguntas_c:[
      'Equipo deportivo favorito',
      'Canción favorita',
      'Fruta favorita'
    ],
    reglas: {
      requerido: value => !!value || 'Campo requerido.'
    },
    email_regla: 
      v => /.+@.+\..+/.test(v) || 'Dirección no válida',
    variable_auxiliar: '',
    snack: {active: false, msg: ''}
  }),
  methods: {
    pruebas (pr){
    },
    comparar_contrasenas(contrasena, confirmada,){
      if(contrasena && confirmada){
        if(contrasena === confirmada && contrasena.length === 8){
          return true
        }
      }
    },
    validar_campos(totalCampos, valorCampos, comparar, totalCaracteres){
      let res = true
      mensaje_error = ''
      if(totalCampos === valorCampos.length){ // Comparar largo indicado como parametro vs largo de campos completados para empezar a validar
        for (let aux of valorCampos) { // Con cada accion sobre los campos, validar si alguno esta vacio       
          if (aux === undefined || aux === '') {
            res = true
            break;
          } else {
            res = false
          }
        }
        if(comparar){
          if(valorCampos[0] != valorCampos[1]){
            res = true
            mensaje_error = 'Las contraseñas no coinciden entre sí'
          }
        }
        if(totalCaracteres){
          if(valorCampos[0].length != totalCaracteres){
            res = true
            mensaje_error = 'La contraseña debe tener 8 caracteres'
          }
        }
      }
      this.mensaje_error = mensaje_error
      return res
    },
    alertar(msg){
      this.snack.active = true
      this.snack.msg = msg
    },
  }

})


//<v-text-field name="cedula" outlined dense counter="8" placeholder="Cédula de identidad" required maxlength="8"/>