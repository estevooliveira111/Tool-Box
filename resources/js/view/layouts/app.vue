<template>

    <div class="m-10 overflow-hidden rounded-lg bg-white shadow">
        <header class="text-gray-400 body-font">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">

                <router-link :to="{name: 'home'}"
                    class="flex title-font font-medium items-center text-black mb-4 md:mb-0">
                    <span class="ml-3 text-xl">Caixa de Ferramenta</span>
                </router-link>

                <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                    <router-link :to="{ name: 'home' }" class="mr-5 hover:text-black">Início</router-link>
                    <router-link :to="{ name: 'abount' }" class="mr-5 hover:text-black">Sobre</router-link>
                    <router-link :to="{ name: 'contact' }" class="mr-5 hover:text-black">Contato</router-link>
                </nav>

            </div>
        </header>

        <main class="px-4 py-5 sm:p-6">
            <router-view />
        </main>

        <footer-component></footer-component>

    </div>

</template>

<script>

import FooterComponent from '../../components/FooterComponent.vue';

export default {

    components: {
        FooterComponent
    }

}

</script>