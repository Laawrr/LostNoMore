import './bootstrap'; 
import { createApp } from 'vue'; 
import app from './Pages/app.vue'; 
import router from './router'; 


createApp(app)
  .use(router) 
  .mount('#app');
