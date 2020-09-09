<template>
    <div class="container">
<carousel :data="data"></carousel>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component 2</div>

                    <div class="card-body">
                      asdasd
                    </div> 
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Vue from 'vue';
import VueCarousel from '@chenfengyuan/vue-carousel';
 export default {
    data() {
      return {
        data: [
          '<div class="example-slide"><img src="http://placehold.it/2000x1000" alt="">Slide 1</div>',
          '<div class="example-slide">Slide 2</div>',
          '<div class="example-slide">Slide 3</div>',
        ],
      };
    },
  };
</script>
