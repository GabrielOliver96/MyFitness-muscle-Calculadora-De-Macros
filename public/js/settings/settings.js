const { createApp } = Vue;

createApp({
    el: "#settings",
    data(){
        return {
            image: null,
            imageInputId: null,
        };
    },
    methods: {
        changeImage(event){
            const file = event.target.files[0];
            if(file){
                const reader = new FileReader();
                reader.onload = () => {
                    this.image = reader.result;
                }
                reader.readAsDataURL(file);
                $('#exampleModal').modal('show');
            }
            
        },
        closeModal(){
            document.getElementById('imageInputId').value = '';
        }
    },
}).mount("#settings");