;(function($,window,document,undefined){$(document).ready(function(){$('body').on('hidden.bs.modal','.wrap-popup-product',function(event){var iframe=iframe=document.getElementById('video-iframe-'+$(this).data('id'));iframe.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}','*');});});})(window.jQuery||window.Zepto,window,document);