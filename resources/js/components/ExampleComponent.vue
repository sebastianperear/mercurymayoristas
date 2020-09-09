<template>
    <div class="container">

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
import Slick from 'vue-slick';


    export default {
    components: { Slick },
    data() {
        return {
            slickOptions: {
                slidesToShow: 1,
                // Any other options that can be got from plugin documentation
            },
        };
    },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
