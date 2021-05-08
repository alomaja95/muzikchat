/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

//For auto-scroll down
import Vue from 'vue';
import VueChatScroll from 'vue-chat-scroll';
Vue.use(VueChatScroll);

//For notifications
import Toaster from 'v-toaster';
Vue.use(Toaster, {timeout: 5000});
// You need a specific loader for CSS files like https://github.com/webpack/css-loader
import 'v-toaster/dist/v-toaster.css';

// this.$toaster.success('Your toaster success message.')
// // or custom timeout
// this.$toaster.success('Your toaster success message.', {timeout: 8000})
//
// this.$toaster.info('Your toaster info message.')
// this.$toaster.error('Your toaster error message.')
// this.$toaster.warning('Your toaster warning message.')


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('message', require('./components/message.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data:{
        message:'',
        chat: {
            message: [],
            user: [],
            color: [],
            time: []
        },
        typing: '',
        numberOfUsers:0,
        status: 'Offline',
        statusIcon: 'avatar-offline',
    },
    watch: {
        message(){
            Echo.private('chat')
                .whisper('typing', {
                    name: this.message,
                });
        }
    },
    methods: {
        getStatus(){
            return this.status;
        },
        getStatusIcon(){
            return this.statusIcon;
        },

        getDefaultStatus(){
            if (this.numberOfUsers > 1){
                this.statusIcon = 'avatar-online';
                this.status = 'Online';
            } else {
                this.statusIcon = 'avatar-offline';
                this.status = 'Offline';
            }
        },

        send(){
            if (this.message.length != 0) {
                this.chat.message.push(this.message);
                this.chat.user.push('you');
                this.chat.color.push('self');
                this.chat.time.push(this.getTime());
                axios.post('/send', {
                    message: this.message,
                    chat: this.chat
                }).then(response => {
                        console.log(response);
                        this.message = '';
                    })
                    .catch(error => {
                        console.log(error);
                    });
            }
        },

        getTime() {
            let time = new Date();
            return time.getHours()+':'+time.getMinutes();
        },

        getOldMessages(){
            axios.post('/getOldMessages')
                .then(response => {
                    console.log(response);
                    if (response.data != ''){
                        this.chat = response.data;
                        console.log(response.data);
                    }
                })
                .catch(error => {
                    console.log(error);
                })
        },

        deleteSession(){
            axios.post('/deleteSession')
                .then(response =>  this.$toaster.success('Chat history deleted'));
        }
    },
    mounted() {
        Echo.private('chat')
            .listen('ChatEvent', (e) => {
                this.chat.message.push(e.message);
                this.chat.user.push(e.user);
                this.chat.color.push('');
                this.chat.time.push(this.getTime());
                axios.post('/saveToSession', {
                    chat: this.chat,
                })
                    .then(response => {

                    })
                    .catch(error => {
                        console.log(error);
                    })
                // console.log(e.order.name);
            })
            .listenForWhisper('typing', (e) => {
               if (e.name != '' ) {
                   this.typing = 'typing...'
               } else {
                   this.typing = ''
               }

            });
        Echo.join(`chat`)
            .here((users) => {
                this.numberOfUsers = users.length;
                this.getDefaultStatus();
            })
            .joining((user) => {
                this.numberOfUsers +=1;
                this.statusIcon = 'avatar-online';
                this.status = 'Online';
                this.$toaster.success(user.name+' Joined the chatroom');
            })
            .leaving((user) => {
                this.numberOfUsers -=1;
                this.statusIcon = 'avatar-offline';
                this.status = 'Offline';
                this.$toaster.warning(user.name+' left the chatroom');
                // console.log(user.name);
            });
        this.getDefaultStatus();
        // this.getOldMessages();
    }
});
