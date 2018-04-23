export const HOST_URL = 'http://localhost:8000'
export const HOST_2_URL = 'http://localhost:8000'

export const API = HOST_URL + '/api'

export const TEST_URL = API + '/test'

export const IMAGE_URL = '/upload-images'


export const get_headers = function () {
    const token = window.localStorage.getItem('access_token');
    const headers = {
        'Accept': 'application/json',
        'Content-Type': 'application/json',
        'Authorization': 'Bearer ' + token
    };
    return headers
};
