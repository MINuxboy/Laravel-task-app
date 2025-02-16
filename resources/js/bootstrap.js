import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import toastr from 'toastr';
toastr.options.toastClass="toastr";
window.toastr = toastr;

import Swal from 'sweetalert2'
window.Swal = Swal; 

import * as bootstrap from 'bootstrap'
window.bootstrap = bootstrap;

