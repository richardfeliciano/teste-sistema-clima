<template>
    <div class="card pb-0">
        <h4>{{ title }}</h4>
        <table class="table">
            <tr v-for="weather in cities" :key="weather.id">
                <td>{{ weather.city.nome }} {{ weather.city.state.uf }}</td>
                <td class="text-right">{{ getTemp(weather) }}º</td>
            </tr>
        </table>
    </div>
</template>

<script>
export default {
    name: "ForecastCities",

    props: {
        forecast: {
            type: String,
            default: "warm"
        }
    },

    data: () => ({
        cities: []
    }),

    computed: {
        title() {
            if (this.forecast === "warm") {
                return "Cidades mais quentes hoje";
            }

            return "Cidades mais frias hoje";
        }
    },

    methods: {
        getTemp(weather) {
            if (this.forecast === "warm") {
                return weather.temperatura_maxima;
            }

            return weather.temperatura_minima;
        },

        getCities() {
            axios
                .get(`/weather/cities/${this.forecast}`)
                .then(({ data }) => (this.cities = data));
        }
    },

    mounted() {
        this.getCities();
    }
};
</script>

<style lang="scss" scoped></style>
