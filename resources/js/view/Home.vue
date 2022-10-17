<template>

    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

        <header>
            <h1 class="text-center text-4xl">
                Caixa de Ferramentas
            </h1>
        </header>

        <div class="my-4">

            <div class="flex justify-center">

                <router-link :to="{ name: 'links' }" class="bg-teal-500 hover:bg-teal-400 text-white font-bold border-b-4 border-teal-700 hover:border-teal-500 rounded text-center flex mx-auto text-3xl p-4 my-5"> Encurtador de Link</router-link>
<!-- 
                <a class="bg-teal-500 hover:bg-teal-400 text-white font-bold border-b-4 border-teal-700 hover:border-teal-500 rounded text-center flex mx-auto text-3xl p-4 my-5" onclick="alert('Em Breve')">Calculadora</a>
                <a class="bg-teal-500 hover:bg-teal-400 text-white font-bold border-b-4 border-teal-700 hover:border-teal-500 rounded text-center flex mx-auto text-3xl p-4 my-5">Sorteio</a> -->

            </div>

        </div>

    </div>

</template>
