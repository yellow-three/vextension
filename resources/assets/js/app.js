import * as FilePond from 'filepond';
window.FilePond=FilePond;
//import 'jquery-filepond/filepond.jquery';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';
import filepond_tr_TR from 'filepond/locale/tr-tr.js';

const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

const options = {
    //allowFileTypeValidation: true,
    //acceptedFileTypes: ['image/!*', 'application/pdf'],
    //fileValidateTypeLabelExpectedTypesMap: {'image/!*': 'Resim', 'application/pdf': 'PDF'},
    //fileValidateTypeDetectType: null,
    //allowFileSizeValidation: true,
    //minFileSize: null,
    //maxFileSize: '2MB',
    //maxTotalFileSize: null,
    server: {
        url: '/admin/vextension/filepond', process: '/process', revert: '/process', patch: "?patch=", headers: {
            'X-CSRF-TOKEN': csrfToken
        }
    },
};

FilePond.registerPlugin(FilePondPluginImagePreview);

FilePond.setOptions(filepond_tr_TR);
FilePond.setOptions(options);

// $('document').ready(function () {
//     $.fn.filepond.setOptions(options);
// $.fn.filepond.registerPlugin(FilePondPluginImagePreview);
// })