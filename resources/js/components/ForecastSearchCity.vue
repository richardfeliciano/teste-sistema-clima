<template>
    <div>
        <div class="row mt-40">
            <div class="col-md-12">
                <v-select
                    :options="options"
                    @search="search"
                    @option:selected="getCityForecast"
                ></v-select>
            </div>
        </div>
        <div class="text-center text-white" v-if="city">
            <h2 style="margin-top:40px">
                Clima para os proximos 7 dias para a cidade de: {{ city }}
            </h2>
        </div>
    </div>
</template>

<script>
export default {
    name: "ForecastSearchCity",

    data: () => ({
        options: [],
        city: null
    }),

    methods: {
        search(term) {
            axios
                .get("/city", {
                    params: term
                })
                .then(
                    ({ data }) =>
                        (this.options = data.map(item => {
                            return {
                                code: item.id,
                                label: item.nome
                            };
                        }))
                );
        },

        getCityForecast(item) {
            axios
                .get("/weather/days", {
                    params: {
                        city: item.code
                    }
                })
                .then(({ data }) => {
                    this.city = item.label;
                    this.$emit("input", data);
                });
        }
    }
};
</script>

<style lang="scss" scoped></style>
