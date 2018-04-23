<template>
    <div>
        <vue-dropzone
                id="dropzone"
                ref="dropzone"
                v-on:vdropzone-sending="sendingEvent"
                v-on:vdropzone-success="handleUploadComplete"
                use-font-awesome="true"
                :options="dropzoneOptions">
        </vue-dropzone>
    </div>
    <!-- Image Uploader form-->

</template>
<script>
    import vue2Dropzone from 'vue2-dropzone'
    import 'vue2-dropzone/dist/vue2Dropzone.css'
    import { IMAGE_URL, get_headers } from "../config";
    export default {
        name: 'Image-uploader',
        components: {'vue-dropzone': vue2Dropzone },
        props: ['object', 'object_type'],
        data() {
            return {
                dropzoneOptions: {
                    url: IMAGE_URL,
                    thumbnailWidth: 150,
                    maxFilesize: 1,
                    headers: {
                        'X-CSRF-TOKEN': Laravel.csrf_token
                    }
                }
            }
        },
        methods: {
            sendingEvent(file, xhr, formData) {
                formData.append('imageble_id', this.object);
                formData.append('imageble_type', this.object_type);
            },
            handleUploadComplete(file, response) {
                console.log(response);
                this.object.images.unshift(response)
                this.$refs.dropzone.removeFile(file)
                Bus.$emit('image_saved', response)
            }
        }
    }
</script>