<template>

        <div class="100">
            <div class="">
              <carousel :data="data"></carousel>
              
          </div>
        </div>
    
</template>
<style>
  .example-slide {
    align-items: center;
    background-color: #666;
    color: #999;
    display: flex;
    font-size: 1.5rem;
    justify-content: center;
    min-height: 10rem;
  }
</style>
<script>
import Vue from 'vue';
import VueCarousel from '@chenfengyuan/vue-carousel';
 export default {
    data() {
      return {
         
        data: [
          '<div class="example-slide"><img src="/img/AROS-DE-LUZ.png" alt="" style="width:100%;"></div>',
          '<div class="example-slide"><img src="/img/banner2.png" alt="" style="width:100%;"></div>',
        ],
      };
    },
  };
</script>
