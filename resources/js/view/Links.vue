<template>

    <section class="overflow-hidden rounded-lg bg-white px-4 py-5 sm:p-6">

        <h2 class="text-4xl text-center font-bold tracking-tight text-black">
            Encurtar Link
        </h2>



  <div class="overflow-hidden rounded-lg bg-white shadow">
    <div class="px-4 py-5 sm:p-6">

        <form class="my-4 flex items-center" @submit.prevent="addLink()">

            <div class="relative w-full container">

                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                    </svg>

                </div>

                <input v-on:focus="$event.target.select()" ref="myinput" type="url" class="bg-blue-50 rounded border border-blue-300 text-blue-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-blue-700 dark:border-blue-600 dark:placeholder-blue-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    v-model="link.full_link" placeholder="Sua URL..." required>

            </div>

            <button type="submit" v-show="!fullForm" class="inline-flex items-center ml-2 text-sm font-medium text-white bg-cyan-700 border rounded border-cyan-700 hover:bg-cyan-500 focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-blue-800">Encurtar URL</button>

            <button type="button" v-show="fullForm" @click="copy()"
                class="inline-flex items-center ml-2 text-sm font-medium text-white rounded border" :class="{
                  'bg-slate-700 border-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800': styleCopy,
          
                  'inline-flex items-center ml-2 text-sm font-medium text-white bg-cyan-700 border rounded border-cyan-700 hover:bg-cyan-500 focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-blue-800': !styleCopy,
                }">Copiar URL</button>

        </form>


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
            contador: 0,
            fullForm: false,
            styleCopy: true
        }
    },



    methods: {


        async addLink() {

            axios.post('api/links', this.link)
                .then(response => {
                    this.link.full_link = response.data.link;
                    this.fullForm = true;
                }).catch(response => {
                    alert('Link não gerado vefique sua URL')
                })

        },

        copy() {
            this.$refs.myinput.focus();
            document.execCommand('copy');

            this.styleCopy = true;
            setTimeout(function () { this.styleCopy = false; }, 1500);
        }

    }

}

</script>