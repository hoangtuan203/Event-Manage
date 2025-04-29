import './assets/main.css'
import axios from 'axios';
import { createApp } from 'vue'
import App from './App.vue'
axios.defaults.baseURL = 'http://localhost:8000/api';
createApp(App).mount('#app')
