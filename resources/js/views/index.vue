<template>
    <div class="flex gap-4">
        <div class="basis-1/3 border p-4 rounded-md text-center">
            <p>هنرمندان</p>
            <p v-if="counts">{{ counts.artists}}</p>
        </div>

        <div class="basis-1/3 border p-4 rounded-md text-center">
            <p>رویداد ها</p>
            <p v-if="counts">{{ counts.events}}</p>
        </div>

        <div class="basis-1/3 border p-4 rounded-md text-center">
            <p>بلیط ها</p>
            <p v-if="counts">{{ counts.tickets}}</p>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            counts: {}
        }
    },
    mounted() {
        this.getCounts()
    },
    methods: {
        async getCounts() {
            await axios.get('admin/dashboard').then(response => {
                this.counts = response.data
                console.log(response.data)
            }).catch(error => {
                console.log(error)
                this.counts = {}
            })
        }
    }
}

</script>
