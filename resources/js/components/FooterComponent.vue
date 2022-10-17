<template>

    <footer>
        <div class="p-2 w-full pt-8 mt-8 border-t border-black-200 text-center">

            <a target="_blank" href="mailto:nascimento.estevo.00@gmail.com" class="text-teal-500">nascimento.estevo.00@gmail.com</a>

            <br>

            <p> {{ `${Day}/${Month}/${Year} - ${Hours}:${Minutes}:${Seconds}` }}</p>

            <br>

            <span class="inline-flex">

                <a target="_blank" href="https://www.facebook.com/profile.php?id=100071495453876"
                    class="text-black-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>


                <a target="_blank" href="https://twitter.com/EstevoNascimen6" class="ml-4 text-black-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path
                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                        </path>
                    </svg>
                </a>


                <a target="_blank" href="https://www.instagram.com/nascimento_steve/" class="ml-4 text-black-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>

            </span>


        </div>
    </footer>



</template>


<script>

import now from 'moment';
import { ref } from '@vue/reactivity';

export default {

    data(){
        return {
            timeDate: 0
        }
    },

    setup(){

        const Hours = ref(0);
        const Minutes = ref(0);
        const Seconds = ref(0);
        const Day = ref(0);
        const Month = ref(0);
        const Year = ref(0);

        setInterval(() => {
            const currDate = new Date(now()); 

            Day.value = currDate.getDay();
            Month.value = currDate.getMonth();
            Year.value = currDate.getFullYear();

            Hours.value = parseInt(currDate.getHours());
            Minutes.value = parseInt(currDate.getMinutes());
            Seconds.value = parseInt(currDate.getSeconds());

        }, 500);

        return {Hours, Minutes, Seconds, Day, Month, Year}
    },

};

</script>