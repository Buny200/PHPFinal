import {createApp} from "vue/dist/vue.esm-bundler";
import reloj from"@/componets/reloj.vue";
import tabla from "@/componets/tabla.vue";

createApp({
    components:{
        reloj,
        tabla

    }

}).mount("#app");
