<template>
    <p>{{ artist.name }}</p>


    <div>
        <form @submit.prevent="updateArtist">
            <label for="name">Name:
                <input type="text" id="name" v-model="artist.name" class="text-gray-700"/>
            </label>
            <button type="submit">Update Artist</button>
        </form>

    </div>


</template>

<script>
export default {

    props: ['artistId'],

    data() {
        return {
            artist: {}
        }
    },
    mounted() {
        console.log("artist id is: " + this.artistId)
        this.getArtists()
    },
    methods: {
        async getArtists() {
            await axios.get('admin/artists/' + this.artistId).then(response => {
                this.artist = response.data
                this.name = this.artist.name
                console.log(response.data)
            }).catch(error => {
                console.log(error)
                this.artist = {}
            })
        }
        , async updateArtist() {
            try {
                const response = await axios.put('admin/artists/'+this.artistId, this.artist);
                console.log('Artist updated:', response.data);
            } catch (error) {
                console.error('Error updating artist data:', error);
            }
        }
    }
}

</script>
