<template>
    <div class="relative">
   <div class="another-grid px-16 py-12 pb-16">
        <div class="mb-8" v-for="item in items" @click="$modal.show('abdi')">
            <a :href="'/products/' + item.id" class="mb-3">
                <img style="height: 230px; width: 350px;" class="mb-3"  :src="'/storage/' + item.path" alt="">
            </a>
            <p class="text-white mb-2">{{ item.name }}</p>
            <span class="font-bold text-white">
                ${{ item.price }}
            </span>
        </div>
    </div>

   <!--  <modal name="abdi">
         <h1 class="text-black">Abdi ali</h1>
    </modal> -->
</div>

    <!-- <div class="fade px-16 py-12 pb-16">
        <a href="#" v-for="item in items">
            <img width="350px" height="200px" class="mb-4 md:mb-0"  :src="'/images/gallery/' + item.path" alt="">
        </a>
    </div> -->
</template>

<script>
    export default {
        props: ['products'],

        data() {
            return {
                items: this.products.data
            }
        },

        mounted() {
            console.log(this.items)
        },

        methods: {
            showModel() {
                this.$model.show('hello world');
            }
        }
    }
</script>
