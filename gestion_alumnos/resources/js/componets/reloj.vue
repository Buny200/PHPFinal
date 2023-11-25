<template>
    <h1>Cronómetro</h1>
    <h2>Quiero Visualizar</h2>
    <h3 class="text-4xl">{{ minutos }}:{{ segundos }}:{{ decimas }}</h3>
    <button @click="reiniciar" class="boton">Reiniciar</button>
    <button @click="arrancar_parar" class="boton">{{ boton_arrancar_parar }}</button>
</template>

<script>
export default {
    name: "reloj",
    props: [
        "titulo",
        "nombre"
    ],
    data() {
        return {
            minutos: 0,
            segundos: 0,
            decimas: 0,
            boton_arrancar_parar: "Arrancar",
            funcionando: false
        }
    },
    mounted() {
        setInterval(() => {
            if (this.funcionando) {
                this.decimas++;
                if (this.decimas === 10) {
                    this.decimas = 0;
                    this.segundos++;
                    if (this.segundos === 60) {
                        this.segundos = 0;
                        this.minutos++;
                    }
                }
            }
        }, 100)
    }, methods: {
        arrancar_parar() {
            this.funcionando = !this.funcionando;
            this.boton_arrancar_parar = this.funcionando ? "Parar" : "Arrancar";
        },
        reiniciar() {
            this.segundos = 0;
            this.minutos = 0;
            this.decimas = 0;
        }
    }
}
</script>
