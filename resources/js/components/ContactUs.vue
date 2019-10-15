<template>
    <div class="container">
       
           
                <div class="container contact-form">
            <div class="contact-image">
                
            </div>
            <form @submit.prevent="sendMail" >
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input v-model="form.name" type="text" name="txtName" class="form-control" :class="{ 'is-invalid': form.errors.has('name') }" placeholder="Your Name *" value="" />
                            <has-error :form="form" field="name"></has-error>
                        </div>
                        <div class="form-group">
                            <input v-model="form.email" type="text" name="txtEmail" class="form-control" :class="{ 'is-invalid': form.errors.has('email') }" placeholder="Your Email *" value="" />
                            <has-error :form="form" field="email"></has-error>
                        </div>
                        <div class="form-group">
                            <input v-model="form.phone" type="text" name="txtPhone" class="form-control" :class="{ 'is-invalid': form.errors.has('phone') }" placeholder="Your Phone Number *" value="" />
                            <has-error :form="form" field="phone"></has-error>
                        </div>
                        <div class="form-group">
                            <input type="submit"  name="btnSubmit" class="btnContact"  value="Send Message" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea v-model="form.message" name="txtMsg" class="form-control" :class="{ 'is-invalid': form.errors.has('message') }" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                            <has-error :form="form" field="message"></has-error>
                        </div>
                    </div>
                </div>
            </form>

                
    
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
                    phone:'',
                    email: ''
                })
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

