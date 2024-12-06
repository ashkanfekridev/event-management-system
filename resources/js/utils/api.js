import axios from "axios";

const getAllArtists = async () => {
    console.log('get all artists')
    try {

    return await axios.get('admin/dashboard')


        //return await axios.get("test-me");
    } catch (error) {
        // Do something with the error
        console.log(error);
    }

}

export default {
    getAllArtists
}
