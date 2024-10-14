<template>
    <div id="app">
        <h1>Hello, Vue!</h1>
        <LoginForm />
    </div>
</template>

<script>
import LoginForm from './LoginForm.vue';

export default {
    components: {
        LoginForm,
    },
    name: 'App', // Você pode manter o nome aqui, mas não é necessário se já estiver em export default
};
</script>

<style scoped>
h1 {
    color: blue;
}
</style>

<style>
/* Estilos globais podem ser colocados aqui */
</style>
