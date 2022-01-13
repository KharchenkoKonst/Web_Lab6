<template>
    <section class="authorization_vue">
        <div class="login-box">
            <div class="row">
                <img
                    src="../assets/images/logo.png" alt="Logo"
                />
            </div>
            <h2>{{ this.info }}</h2>
            <form>
                <div class="user-box">
                    <input type="text" v-model="username" name="" required=""/>
                    <label><i class="Username"></i>
                        Username
                    </label>
                </div>
                <div class="user-box">
                    <input type="password" v-model="password" name="" required=""/>
                    <label><i class="Unlock"></i>
                        Password
                    </label>
                </div>
            </form>
            <router-link :to="{name: 'MainPage'}">
                <button type="submit" class="submit-button" @click=authorization()>LogIn</button>
            </router-link>
        </div>
    </section>
</template>


<script>
export default {

    name: "Authorization",
    beforeCreate: function () {
        document.body.className = 'auth';
    },
    data() {
        return {
            userId: null,
            username: null,
            password: null,
            info: 'Авторизация',
            correct: false
        }
    },
    methods: {
        authorization() {
            const params = {
                name: this.username, password: this.password
            }
            this.$http.post('/user', params)
                .then(response => this.checkCorrect(response.data.userId))

        },
        checkCorrect(data) {
            if (data !== -1) {
                this.userId = data
                this.correct = true
                this.$router.push('main')
                this.info = "Успешная авторизация"
                localStorage.userId = this.userId;
            } else {
                this.info = "Ошибка авторизации, повторите попытку"
            }
            console.log(this.correct)
        }
    },
    mounted() {
        if (localStorage.userId) {
            this.userId = localStorage.userId;
        }
    }
}
</script>

<style scoped src="../assets/styles/login_style.css">


</style>
