import {
    Modal,
    Chart,
    Timepicker,
    Input,
    Dropdown,
    Ripple,
    Select,
    initTE,
    Collapse,
  } from "tw-elements";
  
  initTE({  Collapse, Modal, Dropdown, Ripple, Input, Timepicker, Chart, Select });

import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);
Alpine.start();
// import Swal from 'sweetalert2/dist/sweetalert2.js'

