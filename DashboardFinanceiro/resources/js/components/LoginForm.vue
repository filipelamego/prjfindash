<template>
    <form @submit.prevent="handleLogin">
        <div>
            <label for="email">Email:</label>
            <input type="email" v-model="email" required />
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" v-model="password" required />
        </div>
        <button type="submit">Login</button>
        <div v-if="errorMessage">{{ errorMessage }}</div>
    </form>
</template>

<script>
export default {
    data() {
        return {
            email: '',
            password: '',
            errorMessage: '',
        };
    },
    methods: {
        async handleLogin() {
            try {
                const response = await fetch('http://app:8080/api/login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        email: this.email,
                        password: this.password,
                    }),
                });

                if (!response.ok) {
                    throw new Error('Login failed. Please check your credentials.');
                }

                const data = await response.json();
                console.log('Login successful:', data);
            } catch (error) {
                this.errorMessage = error.message;
            }
        },
    },
};
</script>
