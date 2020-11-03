/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


import VueCarousel from '@chenfengyuan/vue-carousel';
require('./bootstrap');

window.Vue = require('vue');
Vue.use(VueCarousel);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('slide', require('./components/slide.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


       

const app = new Vue({
  
    el: '#app',

    created: function(){
       this.getCart();
    },
      data: {

      tickets: [],
      newAsunto: '',
      newPrioridad: '',
      newMensaje: '',
      

      carts: [],
      newCantidad: 1,
      

    },

    mounted(){


    },


methods:{
        
      createTicket : function(){
       
        var url = 'tickets';
        axios.post(url , {
          asunto: this.newAsunto,
          prioridad: this.newPrioridad,
          mensaje: this.newMensaje

        }).then(response => {
          
          this.newAsunto = '';
          this.newPrioridad = '';
          this.newMensaje = '';
          
          $('#create').modal('hide');
          toastr.success('Pronto nos pondremos en contacto contigo', 'Se ha creado un nuevo ticket');
          


        })
      },
      

      getCart: function(){
          

        var urlCarts = 'http://127.0.0.1:8000/carts'; // Change url in prod
        axios.get(urlCarts).then(response => {
           if (response.data.length > 0) {

               
              // get sum of msgCount prop across all objects in array
              var count = response.data.reduce(function(prev, cur) {
                return prev + cur.cantidad;
              }, 0);

              
              this.carts = count;

              console.log(this.carts);
              
              
           }
           else {
              this.carts = 0
            }
          
        } )


             


      },

      addCart(item){

          

            const itemcar = {
              id : item.id,
              nombre : item.nombre,
              precio: item.precio_base,
              code: item.codigo,
            }
            
            var url = 'http://127.0.0.1:8000/carts'; //Change url in prod
        axios.post(url , {
          precio: itemcar.precio,
          cantidad: this.newCantidad,
          id_producto: itemcar.id

        }).then(response => {
          
          toastr.success(+ this.newCantidad + ''+' articulos al carrito', 'Se han añadido');
          this.newCantidad = 1;
          this.getCart();
          console.log(itemcar.nombre);
          
          


        });


             
             
            // this.listCarrito.push(itemcar)
            // alert(JSON.stringify(item))
          }



    }
});
