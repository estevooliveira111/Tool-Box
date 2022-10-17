<template>

    <div class="flex flex-col text-center w-full mb-12">
        <h1 class="text-4xl title-font mb-4 text-black" id="message" ref="message">Você está sendo redirecionado</h1>
    </div>

</template>


<script>

import axios from 'axios';

export default {

    data() {
        return {
            link: {}
        }
    },

    created() {

        axios.get(`/api/links/${this.$route.params.link}`)
            .then((response) => {
                window.location.href = response.data.full_link; 
            })
            .catch((response) => {
                this.$refs.message.innerHTML = 'Seu Link está indisponível';
            });

    },

    methods: {}

}

</script>
