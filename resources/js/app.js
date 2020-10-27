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
    prop: ['l'],
       
      data:{

      tickets: [],
      newAsunto: '',
      newPrioridad: '',
      newMensaje: '',

      
      carts: [],
      newPrecio: '',
      newCantidad: 1,

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
        
      createCart : function(){ 
  console.log(this.l)

  
       
        var url = 'carts';
        axios.post(url , {
          precio: this.newPrecio,
          cantidad: this.newCantidad

        }).then(response => {
          
          this.newPrecio = '';
          this.newCantidad = 1;
          
          
          toastr.success('Se ha añadido', 'un nuevo producto a tu carrito');
          


        })
      }
    }
});
