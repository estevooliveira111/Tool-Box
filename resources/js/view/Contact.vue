<template>

  <section class="text-black-600 body-font relative">
    <div class="container px-5 py-2 mx-auto">

      <div class="flex flex-col text-center w-full mb-12">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-black-900">Encontrar em Contato</h1>
      </div>

      <div class="lg:w-1/2 md:w-2/3 mx-auto" v-show="formShow">
        <form class="flex flex-wrap -m-2" @submit.prevent="makeContact()">

          <div class="p-2 w-1/2">
            <div class="relative">
              <label for="name" class="leading-7 text-sm text-black-600">Name</label>
              <input type="text" v-model="link.name"
                class="w-full bg-black-100 bg-opacity-50 rounded border border-black-300 focus:border-teal-500 focus:bg-white focus:teal-2 focus:teal-teal-200 text-base outline-none text-black-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
          </div>

          <div class="p-2 w-1/2">
            <div class="relative">
              <label for="email" class="leading-7 text-sm text-black-600">Email</label>
              <input type="email" v-model="link.email"
                class="w-full bg-black-100 bg-opacity-50 rounded border border-black-300 focus:border-teal-500 focus:bg-white focus:teal-2 focus:teal-teal-200 text-base outline-none text-black-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
          </div>

          <div class="p-2 w-full">
            <div class="relative">
              <label for="message" class="leading-7 text-sm text-black-600">Message</label>
              <textarea id="message" name="message" v-model="link.message"
                class="w-full bg-black-100 bg-opacity-50 rounded border border-black-300 focus:border-teal-500 focus:bg-white focus:teal-2 focus:teal-teal-200 h-32 text-base outline-none text-black-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
            </div>
          </div>

          <div class="p-2 w-full">
            <button type="submit"
              class="flex mx-auto text-white bg-teal-500 border-0 py-2 px-8 focus:outline-none hover:bg-teal-600 rounded text-lg">Entrar
              em Contato</button>
          </div>

        </form>
      </div>

      <div class="flex flex-col text-center w-full mb-12" v-show="!formShow">
        <h1 class="text-4xl font-medium title-font">Sua mensagem foi enviada. Entraremos em contato</h1>
      </div>



    </div>
  </section>

</template>


<script>

import axios from 'axios';

export default {

  data() {
    return {
      link: {},
      formShow: true
    }
  },

  methods: {

    makeContact() {

      var message = JSON.stringify(this.link);
      axios.get(`/api/contact/contact=${message}`)
        .then((response) => {
          this.formShow = false;
        })


    }

  }

}

</script>