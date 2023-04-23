import {
    Modal,
    Chart,
    Timepicker,
    Input,
    Dropdown,
    Ripple,
    initTE,
  } from "tw-elements";
  
  initTE({ Modal, Dropdown, Ripple, Input, Timepicker, Chart });

import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);
Alpine.start();
