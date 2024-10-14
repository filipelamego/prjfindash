import { createApp } from 'vue'; // Importando createApp
import App from './components/App.vue';  // Ajuste o caminho conforme necessário

const app = createApp(App); // Criando a instância da aplicação
app.mount('#app'); // Montando a aplicação no elemento com id "app"
