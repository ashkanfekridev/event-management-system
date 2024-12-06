<template>
    <div
        class="fi-ta-ctn divide-y divide-gray-200 overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-gray-950/5 dark:divide-white/10 dark:bg-gray-900 dark:ring-white/10">


        <table
            class="fi-ta-table w-full table-auto divide-y divide-gray-200 text-start dark:divide-white/5">

            <thead>
            <tr>
                <th class="text-sm font-medium text-gray-950 dark:text-white p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
                    #
                </th>
                <th class="text-sm font-medium text-gray-950 dark:text-white p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
                    name
                </th>
                <th class="text-sm font-medium text-gray-950 dark:text-white p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
                    action
                </th>
            </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 whitespace-nowrap dark:divide-white/5">
            <tr
                class="[@media(hover:hover)]:transition [@media(hover:hover)]:duration-75 hover:bg-gray-50 dark:hover:bg-white/5 bg-gray-50 dark:bg-white/5"
                v-for="artist in artists"
            >
                <td class="text-sm font-medium text-gray-950 dark:text-white p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
                    <span class="fi-ta-summary-row-heading px-3 py-4">{{ artist.id }}</span>
                </td>
                <td class="text-sm font-medium text-gray-950 dark:text-white p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
                    <span class="fi-ta-summary-row-heading px-3 py-4">{{ artist.name }}</span>
                </td>
                <td class="text-sm font-medium text-gray-950 dark:text-white p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
                    <span class="fi-ta-summary-row-heading px-3 py-4">{{ artist.name }}</span>
                    <router-link :to="{name:'artists.show', params:{artistId:artist.id}}"><span>view</span></router-link>
                </td>
            </tr>
            </tbody>

        </table>
    </div>

</template>


<script>
export default {
    data() {
        return {
            artists: {}
        }
    },
    mounted() {
        this.getArtists()
    },
    methods: {
        async getArtists() {
            await axios.get('admin/artists').then(response => {
                this.artists = response.data
                console.log(response.data)
            }).catch(error => {
                console.log(error)
                this.artists = {}
            })
        }
    }
}
</script>
