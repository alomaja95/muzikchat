<template>
    <!-- Self Message Start -->
    <div>
        <div class="message" :class="className">
            <div class="message-wrapper">
                <div class="message-content">
                    <span>
                       <slot></slot>
                    </span>
                </div>
            </div>
            <div class="message-options">
                <div class="avatar avatar-sm"><img alt="" v-bind:src="userAvatar"></div>

                <span class="message-date">{{time}}</span>
                <span class="message-status">{{userName}}</span>

            </div>
        </div>
    </div>

    <!-- Self Message End -->

</template>

<script>
    export default {
        props: [
            'color',
            'user',
            'time',
        ],
        computed: {
            className() {
                return this.color;
            },
            badgeClass(){
                return this.color;
            },
            userName(){
                return this.user;
            },
            userAvatar(){
                return `https://ui-avatars.com/api/?name=${this.userName}&color=FFFFFF&background=563C5C`;
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style>
    #time{
        font-size: 9px;
        margin-top: 10px;
        color: black;
    }
</style>
