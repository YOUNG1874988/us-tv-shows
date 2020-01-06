import axios from 'axios'


export function requestswiper(config) {
    const instance = axios.create({
        //等卫文配好api时就可以使用了
        baseURL: 'http://',
        timeout: 5000
    })
    return instance(config)
}
