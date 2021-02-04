<template>
    <div>
        <ForecastSearchCity @input="setDays" />
        <div class="d-flex justify-content-between pl-15 pr-15 mb-40">
            <div class="card  mt-40" v-for="day in days" :key="day.id">
                <div class="header">
                    {{ day.dia }}
                    <div>{{ day.data_previsao }} <br /></div>
                    <div>
                        {{ day.clima }} <br />
                        Mínima: {{ day.temperatura_minima }} <br />
                        Máxima: {{ day.temperatura_maxima }} <br />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ForecastSearchCity from "./ForecastSearchCity";
export default {
    name: "ForecastDays",

    components: { ForecastSearchCity },

    data: () => ({
        days: []
    }),

    methods: {
        setDays(data) {
            this.days = data;
        }
    }
};
</script>

<style lang="scss" scoped></style>
