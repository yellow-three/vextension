//import FilePond from 'filepond';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';
import filepond_tr_TR from 'filepond/locale/tr-tr.js';
import 'jquery-filepond/filepond.jquery';

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
        url: '/filepond/api', process: '/process', revert: '/process', patch: "?patch=", headers: {
            'X-CSRF-TOKEN': csrfToken
        }
    },
};

FilePond.registerPlugin(FilePondPluginImagePreview);

//FilePond.setOptions(filepond_tr_TR);
FilePond.setOptions(options);


//$.fn.filepond.setOptions(filepond_tr_TR);
//$.fn.filepond.registerPlugin(FilePondPluginImagePreview);