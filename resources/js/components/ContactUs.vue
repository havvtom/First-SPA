<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="contact1">
        <div class="container-contact1">
            <div class="contact1-pic js-tilt" data-tilt>
                <img src="images/img-01.png" alt="IMG">
            </div>

            <form class="contact1-form validate-form" @submit.prevent="sendMail">
                <span class="contact1-form-title">
                    Get in touch
                </span>

                <div class="wrap-input1 validate-input" >
                    <input class="input1" type="text" name="name" v-model="form.name" placeholder="Name"
                     :class="{ 'is-invalid': form.errors.has('name') }">
                    <span class="shadow-input1"></span>
                    <has-error :form="form" field="name"></has-error>
                </div>

                <div class="wrap-input1 validate-input" >
                    <input class="input1" type="text" name="email" v-model="form.email" placeholder="Email"
                     :class="{ 'is-invalid': form.errors.has('email') }">
                    <span class="shadow-input1"></span>
                    <has-error :form="form" field="email"></has-error>
                </div>

                <div class="wrap-input1 validate-input">
                    <input class="input1" type="text" name="subject" v-model="form.subject" placeholder="Subject"  :class="{ 'is-invalid': form.errors.has('subject') }">
                    <span class="shadow-input1"></span>
                    <has-error :form="form" field="subject"></has-error>
                </div>

                <div class="wrap-input1 validate-input" >
                    <textarea class="input1" name="message" v-model="form.message" placeholder="Message"></textarea  :class="{ 'is-invalid': form.errors.has('message') }">
                    <span class="shadow-input1"></span>
                    <has-error :form="form" field="message"></has-error>
                </div>

                <div class="container-contact1-form-btn">
                    <button class="contact1-form-btn" type="submit">
                        <span>
                            Send Email
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
                
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        methods:{
            sendMail(){
                this.form.post('send-mail')
                .then(({ data }) => { console.log(data) })
                    
                .catch(({errors}) =>{ console.log(errors)})
        }
    },
        data(){
            return {
                form : new Form({
                    name:'',
                    message: '',
                    subject: '',
                    email: ''
                })
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

